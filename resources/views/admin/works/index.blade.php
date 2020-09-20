@extends('adminlte::page')

@section('content_header')
	<h1 style="margin-bottom: 1rem;">Список работ</h1>
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
		<table class="table table-striped" id="work_table">
			<thead>
				<tr>
					<th>@sortablelink('title','Название')</th>
					<th>@sortablelink('shortDesc','Короткое описание')</th>
					<th>Действия</th>
				</tr>
			</thead>
			<tbody>
				@foreach($works as $work)
					<tr>						
						<td>{{$work->title}}</td>						
						<td>{!!$work->shortDesc!!}</td>
						<td class="d-flex justify-content-center" style="border-bottom: none;">
							<a href="{{ route('works.edit', $work->id, ['method'=>'GET']) }}" class="fas fa-pencil-alt" style="margin-right: 20px; list-style: none; color: rgba(0,0,0,.5); margin-top: 4px;"></a>
							{!! Form::model($works, [
										'route'=>['works.destroy', $work->id],
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

	@if($works instanceof \Illuminate\Pagination\AbstractPaginator)
		{!! $works->appends(\Request::except('page'))->render() !!}
	@endif 
@endsection

@section('js')
	<script type="text/javascript">
		function ConfirmDelete(){
			var x = confirm("Вы уверены, что хотите удалить работу?");
		  	if (x)
		    	return true;
		  	else
		    	return false;
		}
	</script>
	
@endsection