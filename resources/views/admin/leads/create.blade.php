@extends('adminlte::page')

@section('content_header')
	<h1>Добавление заявки</h1>
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

{!! Form::model($lead, ['url'=>'/admin/leads']) !!}
	@include('admin.leads._form')
{!! Form::close() !!}

@endsection

@section('js')
	
@endsection