@extends('layouts.app')
@section('content')
	@include('layouts.modal__zamer')
	@include('layouts.modal__call')
	@include('layouts.modal__ok')
	@include('layouts.sidebar')
	@include('layouts.header')
	@include('layouts.menu')
	@include('layouts.header__responsive')
		@yield('main')
	@include('layouts.footer')
@endsection