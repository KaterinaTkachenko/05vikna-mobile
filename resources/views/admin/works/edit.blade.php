@extends('adminlte::page')

@section('content_header')
	<h1>Редактирование статьи</h1>
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

{!! Form::model($work, [
	'route'=>['works.update', $work->id],
	'method' => 'put'
	]) !!}
	@include('admin.works._form')
{!! Form::close() !!}

@endsection

@section('js')
    <script src="{{ asset('js/app.js') }}" defer></script>
	<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
	<script src="//cdn.ckeditor.com/4.14.0/full/ckeditor.js"></script>

	<script>
		$('#lfm').filemanager('image');
	    var options = {
	        filebrowserImageBrowseUrl: '/filemanager?type=Images',
	        filebrowserImageUploadUrl: '/filemanager/upload?type=Images&_token=',
	        filebrowserBrowseUrl: '/filemanager?type=Files',
	        filebrowserUploadUrl: '/filemanager/upload?type=Files&_token='
	    };
	    if(document.querySelector('[name=fullDesc]')){
	        CKEDITOR.replace( 'fullDesc', options );
	    }
	    if(document.querySelector('[name=shortDesc]')){
	        CKEDITOR.replace( 'shortDesc', options );
	    }      
	    
	    const removeImg = document.querySelector('.remove-img');
		if (removeImg){
		  removeImg.addEventListener('click', function(e){
		      e.preventDefault();
		      document.querySelector('.thumbnail').remove();
		      this.remove();
		      document.querySelector('[name=removeImg]').value = 'remove';
		  });
		}
    </script>
@endsection