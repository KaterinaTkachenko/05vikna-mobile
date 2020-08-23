@extends('layouts.main-layout')
@section('main')
    <div class="container garantiya">
        <div class="row">
            <div class="col-lg-12">
                <h1 style="margin: 40px 0">Гарантия и сервис</h1>
                <p>Гарантийные обязательства компании <a href="{{route('about')}}">«Оконные технологии»</a> соответствуют положениям Закона Российской Федерации «О защите прав потребителей» и гарантийным обязательствам немецкой фирмы REHAU, представителем которой является наша компания.</p>
                <div class="garantiya__flex1 d-flex flex-wrap justify-content-between">
                    <div>
                        <h2 class="garantiya__title">НАША ГАРАНТИЯ - ВАША УВЕРЕННОСТЬ</h2>
                        <p>Мы уверенны в качестве наших окон. Высокая гарантия на продукцию подтверждает это</p>
                    </div>
                    <div>
                        <img src="../images/garantiya/garant-big.jpg" alt="Гарантия и серсив">
                    </div>
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