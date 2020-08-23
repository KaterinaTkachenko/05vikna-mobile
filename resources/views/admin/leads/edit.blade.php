@extends('adminlte::page')

@section('content_header')
	<h1>Редактирование заявки</h1>
@stop

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{!! Form::model($lead, [
	'route'=>['leads.update', $lead->id],
	'method' => 'put'
	]) !!}
	@include('admin.leads._form')
{!! Form::close() !!}

@endsection

@section('js')
	
@endsection