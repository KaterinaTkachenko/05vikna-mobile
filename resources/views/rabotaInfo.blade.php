@extends('layouts.main-layout')
@section('main')
<div class="container rabotaInfo">
    <div class="row">
        <div class="col-lg-12">
            <h1 style="margin: 40px 0px">Остекление и отделка балкона</h1>
            <div class="rabotaInfo__flex1 d-flex flex-wrap justify-content-between mb-5 shadowBox">
                <div class="rabotaInfo__flex1__item1">
                    <img src="{{$work->img}}" alt="{{$work->alt}}"></div>
                <div class="rabotaInfo__flex1__item2 p-4">
                    <h3 style="margin: 0 0 30px">{{$work->title}}</h3>
                    <div>{!!$work->shortDesc!!}</div>                
                </div>
            </div>
            <div class="mb-5">
                {!!$work->fullDesc!!}
            </div>
        </div>
    </div>
</div>

<div class="container-fluid home_page9">
    <div class="container">
        <div class="row justify-content-around calc__info">
            <div class="col-12">                
                <h3 class="calc__choose__action text-center">Выберите необходимое действие</h3>
            </div>
            <div class="col-12 col-lg-4 col-md-6 col-sm-12 text-center">
                <img src="../images/call-icon.png" alt="call-icon.png">
                <button class="btn-main active" data-toggle="modal" data-target="#modal-call">Заказать звонок</button>
                <p class="text-center">Легко рассчитать ориентировочную стоимость</p>
            </div>
            <div class="col-12 col-lg-4 col-md-6 col-sm-12 text-center">
                <img src="../images/zamer-icon.png" alt="zamer-icon.png">
                <button class="btn-main active" data-toggle="modal" data-target="#modal-zamer">Вызвать замерщика</button>
                <p class="text-center">«2 в 1» замер и консультация</p>
            </div>
        </div>
    </div>
</div>
@endsection