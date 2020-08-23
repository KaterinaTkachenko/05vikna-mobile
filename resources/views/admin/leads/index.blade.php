@extends('adminlte::page')

@section('content_header')
	<h1 style="margin-bottom: 1rem;">Список заявок</h1>
	
	<div id="my-alert" class="hidden alert alert-success alert-dismissible fade show" role="alert">
    	Статус заявки обновлен!
	    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	        <span aria-hidden="true">&times;</span>
	    </button>
	</div>

@stop

@section('css')
	<style type="text/css">
	    .periodBtn {
		    display: inline-block;
		    border: 2px #F1F1F1 solid;
		    border-radius: 20px;
		    height: 30px;
		    box-sizing: border-box;
		    padding: 0.3em 2em 0.3em 2em;
		    width: 130px;
		    outline: none;
		    background: transparent;
		    font-size: 12px;
		    margin-right: 10px !important;
		    font-weight: bold;
		    color: #3C3C3C;
		}

		button.periodBtn.active{
			background: #f1F1F1;
    		color: #888;
		}

		button.periodBtn:hover{
		    background: #f1F1F1;
		    color: #888;
		}

		button.periodBtn:focus{
			outline: none;
		}

    </style>
@endsection

@section('content')
	@if(session('success'))
		<div class="alert alert-success">
			{{session('success')}}
		</div>
	@endif
	
	<div class="section-white">
		<span class="section-inline">Показать заявки за </span>
		
		<form action="/admin/leads" method="GET" class="section-inline">			
			<?php 
				if(isset($active) && $active=='today')
					$class = 'active';
				else
					$class = '';
			?>
			<button class="periodBtn {{$class}}" id="today">Сегодня</button>
			<input type="hidden" name="period" value="today">
		</form>

		<form action="/admin/leads" method="GET" class="section-inline">
			<?php 
				if(isset($active) && $active=='yesterday')
					$class = 'active';
				else
					$class = '';
			?>
			<button class="periodBtn {{$class}}" id="yesterday">Вчера</button>
			<input type="hidden" name="period" value="yesterday">
		</form>

		<form action="/admin/leads" method="GET" class="section-inline">
			<?php 
				if(isset($active) && $active=='month')
					$class = 'active';
				else
					$class = '';
			?>
			<button class="periodBtn {{$class}}" id="month">Месяц</button>
			<input type="hidden" name="period" value="month" class="section-inline">
		</form>

		<form action="/admin/leads" method="GET" class="section-inline">
			<?php 
				if(isset($active) && $active=='allTime')
					$class = 'active';
				else
					$class = '';
			?>
			<button class="periodBtn {{$class}}" id="hold">Всё время</button>
			<input type="hidden" name="period" value="all" class="section-inline">		
		</form>
	</div>

	<div class="section-white" style="padding: 0!important">
		<table class="table table-striped" id="leads_table">
				<thead>
					<tr>
						<th>@sortablelink('status_id', 'Статус')</th>
						<th>@sortablelink('page', 'Страница')</th>
						<th>@sortablelink('username', 'Клиент')</th>
						<th>@sortablelink('id', 'Заявка')</th>
						<th>Действия</th>
					</tr>
				</thead>
				<tbody>
					@foreach($leads as $item)
						<tr>
							<td>
								{!! Form::select('status_id', $status, $item->status_id, ['class'=>'form-control lead_status', 'data-leadId'=>$item->id ]) !!}
							</td>
							<td>{{$item->page}}						
								@if($item->widget)
									<br>
									Виджет: {{$item->widget}}
								@endif
							</td>
							<td>@if($item->username) {{$item->username}} <br> @endif						
								{{$item->phone}}
							</td>
							<td><b>#{{$item->id}}</b> <span class="small">{{Carbon\Carbon::parse($item->created_at)->format('d.m.Y')}}</span>
							</td>
							<td class="d-flex justify-content-center" style="border-bottom: none;">
								<a href="{{ route('leads.edit', $item->id, ['method'=>'GET']) }}" class="fas fa-pencil-alt" style="margin-right: 20px; list-style: none; color: rgba(0,0,0,.5); margin-top: 4px;"></a>
								{!! Form::model($leads, [
											'route'=>['leads.destroy', $item->id],
											'method' => 'DELETE',
											'onsubmit' => 'return ConfirmDelete()'
											]) !!}
									<button class="far fa-trash-alt" style="list-style: none; color: rgba(0,0,0,.5); border: none; background-color: transparent;"></button>
								{!! Form::close() !!}
							</td>
						</tr>
					@endforeach
				</tbody>
		</table>
	</div>

	@if($leads instanceof \Illuminate\Pagination\AbstractPaginator)
		{!! $leads->appends(\Request::except('page'))->render() !!}
	@endif 

@endsection

@section('js')
	<script type="text/javascript">

		function ConfirmDelete(){
			var x = confirm("Вы уверены, что хотите удалить заявку?");
		  	if (x)
		    	return true;
		  	else
		    	return false;
		}

        $(".alert1").alert('close')
        // const axios = require('axios').default;
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        let statusList = document.querySelectorAll(".lead_status");
        var statusArr = Array.prototype.slice.call(statusList);
        if (statusArr.length>0){
            for(let status of statusList){
                let lastSelectedIndex = status.selectedIndex;
                status.addEventListener("click", function () {
                    lastSelectedIndex = status.selectedIndex;
                });
                
                status.addEventListener('change', function(e){
                    let leadId = status.getAttribute('data-leadId');
                    let changeStatus = confirm('Вы действительно хотите изменить статус заявки #' + leadId +'?');
                    if (changeStatus) {
                        $.ajax({ 
                            method: 'POST',
                            url: 'leads/changeStatus',
                            data: {status_id: status.value, lead_id: leadId},
                            success: function(data) {
                                $('#my-alert').html('Статус заявки #' + leadId + ' обновлен!')
                                $('#my-alert').removeClass('hidden');
                                window.setTimeout(function(){
                                    $('#my-alert').addClass('hidden');
                                    // $('#my-alert').alert('close');
                                },3000);
                            }
                        });
                    
                        console.log("status of lead #" + leadId + " changed to " + status.value);
                    }
                    else{
                        status.selectedIndex = lastSelectedIndex;
                        console.log("canceled");
                    }
                });
            }
        }

    </script>
@endsection