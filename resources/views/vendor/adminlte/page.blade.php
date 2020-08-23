@extends('adminlte::master')

@inject('layoutHelper', \JeroenNoten\LaravelAdminLte\Helpers\LayoutHelper)

@if($layoutHelper->isLayoutTopnavEnabled())
    @php( $def_container_class = 'container' )
@else
    @php( $def_container_class = 'container-fluid' )
@endif

@section('adminlte_css')
    @stack('css')
    @yield('css')   
    <style>
        .table{
            box-shadow: 1px 2px 5px 0px #e3e3e3;
            margin-bottom: 0;
        }

        .table > tr:nth-child(even), .table > tbody > tr:nth-child(even), .table > thead > tr:nth-child(odd) {
            background: #fff;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f9f9f9;
        }
         .table thead th{
            text-transform: uppercase;
            font-weight: 400;
            color: #333;            
        }

        .table thead th a{
            color: #333;
        }

        .table tbody tr td, .table thead th {
            text-align: center;
            border: none;   
        }

        .section-white{
            background: #FFF;
            border: 1px #F1F1F1 solid;
            box-shadow: 1px 2px 5px 0px #e3e3e3;
            padding: 20px;
            border-radius: 5px;
            color: #3C3C3C !important;
            margin-bottom: 30px;
            font-family: MuseoSansCyrl300, sans-serif;
            font-size: 14px;
        }

        .section-inline{
            margin-right: 10px !important;
            display: inline-block !important;
            vertical-align: middle !important;
        }
        
        .content-wrapper>.content, .content-header{
            padding-right: 2rem!important;
            padding-left: 2rem!important;
        }
        .page-link {
            color: #232323 !important;
            background: transparent;
            border: none !important;
            border-top: 2px #DDD solid !important;
            border-bottom: 2px #DDD solid !important;
            margin-left: 0 !important;
        }

        .page-link:focus {
            box-shadow: none;
        }

        .page-item.active .page-link {
            background: #F1F1F1;
            font-weight: bold;
        }

        .page-item.disabled .page-link{
            background: transparent !important;
            color: #CCC !important;
        }

        .page-item:first-child .page-link {
            border-radius: 20px 0 0 20px !important;
            border-left: 2px #DDD solid !important;
        }

        .page-item:last-child .page-link{
            border-radius: 0 20px 20px 0 !important;
            border-right: 2px #DDD solid !important;
        }

        .hidden{
            display: none;            
        }

        .nav-sidebar .nav-header:first-of-type {
            padding: .75rem 1rem .5rem;
        }

        .nav-link {
            padding: .7rem 1rem;
        }
        
        @media screen and (max-width: 610px) {
            #leads_table tr td:nth-child(2),  #leads_table tr th:nth-child(2){
                display: none;
            }
        }

        @media screen and (max-width: 472px) {
            .content-wrapper {
                background: none;
            }
        }

        @media screen and (max-width: 420px) {
            #leads_table tr td:nth-child(3),  #leads_table tr th:nth-child(3){
                display: none;
            }
        }
    </style> 
@stop

@section('classes_body', $layoutHelper->makeBodyClasses())

@section('body_data', $layoutHelper->makeBodyData())

@section('body')
    <div class="wrapper">

        {{-- Top Navbar --}}
        @if($layoutHelper->isLayoutTopnavEnabled())
            @include('adminlte::partials.navbar.navbar-layout-topnav')
        @else
            @include('adminlte::partials.navbar.navbar')
        @endif

        {{-- Left Main Sidebar --}}
        @if(!$layoutHelper->isLayoutTopnavEnabled())
            @include('adminlte::partials.sidebar.left-sidebar')
        @endif

        {{-- Content Wrapper --}}
        <div class="content-wrapper {{ config('adminlte.classes_content_wrapper') ?? '' }}">

            {{-- Content Header --}}
            <div class="content-header">
                <div class="{{ config('adminlte.classes_content_header') ?: $def_container_class }}">
                    @yield('content_header')
                </div>
            </div>

            {{-- Main Content --}}
            <div class="content">
                <div class="{{ config('adminlte.classes_content') ?: $def_container_class }}">
                    @yield('content')
                </div>
            </div>

        </div>

        {{-- Footer --}}
        @hasSection('footer')
            @include('adminlte::partials.footer.footer')
        @endif

        {{-- Right Control Sidebar --}}
        @if(config('adminlte.right_sidebar'))
            @include('adminlte::partials.sidebar.right-sidebar')
        @endif

    </div>
@stop
   
@section('adminlte_js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
    <script src="{{ asset('js/jquery.maskedinput.js') }}"></script>
    {{-- <script src="{{ asset('vendor/plugins/jquery-validation/jquery.maskedinput.js') }}"></script>  --}}

    <script>
        $("#phone").mask("+38 (099) 999-99-99", {
            completed: function(){
              $("#phone").removeClass('is-invalid');
            },
            onInvalid: function(){
              $("#phone").addClass('is-invalid');
            }            
          });
    </script>
    @stack('js')
    @yield('js')
    
@stop
