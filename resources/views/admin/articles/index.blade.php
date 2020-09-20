@extends('adminlte::page')

@section('content_header')
	<h1 style="margin-bottom: 1rem;">Список статей</h1>

	<div id="my-alert" class="hidden alert alert-success alert-dismissible fade show" role="alert">
    	Вывод статьи обновлен!
	    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	        <span aria-hidden="true">&times;</span>
	    </button>
	</div>
@stop

@section('css')

@endsection

@section('content')
	@if(session('success'))
		<div class="alert alert-success">
			{{session('success')}}
		</div>
	@endif

	<div class="section-white" style="padding: 0!important">
		<table class="table table-striped" id="article_table">
			<thead>
				<tr>
					<th>@sortablelink('display', 'Вывод')</th>
					<th>@sortablelink('name', 'Название')</th>
					<th>@sortablelink('date', 'Дата')</th>
					<th>Действия</th>
				</tr>
			</thead>
			<tbody>
				@foreach($articles as $article)
					<tr>
						<td>
							{{ Form::checkbox('display', $article->display, null, ['style'=>'width: 40px; height: 20px;', 'class'=>'display', 'data-articleId'=>$article->id]) }}
						</td>
						<td>{{$article->name}}</td>
						<td>{{Carbon\Carbon::parse($article->date)->format('d.m.Y')}}</td>
						<td class="d-flex justify-content-center" style="border-bottom: none;">
							<a href="{{ route('articles.edit', $article->id, ['method'=>'GET']) }}" class="fas fa-pencil-alt" style="margin-right: 20px; list-style: none; color: rgba(0,0,0,.5); margin-top: 4px;"></a>
							{!! Form::model($articles, [
										'route'=>['articles.destroy', $article->id],
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

	@if($articles instanceof \Illuminate\Pagination\AbstractPaginator)
		{!! $articles->appends(\Request::except('page'))->render() !!}
	@endif 
@endsection

@section('js')
	<script type="text/javascript">
		function ConfirmDelete(){
			var x = confirm("Вы уверены, что хотите удалить статью?");
		  	if (x)
		    	return true;
		  	else
		    	return false;
		}

		let displayCheckboxes = document.querySelectorAll(".display");
		if(displayCheckboxes){
			for(let checkbox of displayCheckboxes){
				if(checkbox.value == 0)
					checkbox.checked = false;
				else
					checkbox.checked = true;
			}
		}

		 $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
		
        var displayCheckboxesArr = Array.prototype.slice.call(displayCheckboxes);
        if (displayCheckboxesArr.length>0){
            for(let checkbox of displayCheckboxes){
            	let lastDisplayValue = checkbox.checked;

            	checkbox.addEventListener('change', function(e){
                    let articleId = checkbox.getAttribute('data-articleId');
                    let changeDisplay = confirm('Вы действительно хотите изменить вывод статьи #' + articleId +'?');
                    if (changeDisplay) {                    	
                        $.ajax({ 
                            method: 'POST',
                            url: 'articles/changeDisplay',
                            data: {display: checkbox.checked, articleId: articleId},
                            success: function(data) {
                                $('#my-alert').html('Вывод статьи #' + articleId + ' обновлен!')
                                $('#my-alert').removeClass('hidden');
                                window.setTimeout(function(){
                                    $('#my-alert').addClass('hidden');
                                    // $('#my-alert').alert('close');
                                },3000);
                            }
                        });
                    }
                    else{
                    	e.preventDefault();
                        checkbox.checked = lastDisplayValue;
                        console.log("canceled");
                    }
                });
            }
        }

	</script>
	
@endsection