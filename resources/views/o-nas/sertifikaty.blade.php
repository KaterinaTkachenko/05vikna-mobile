@extends('layouts.main-layout')
@section('main')
<div class="container about">
    <div class="row">
        <div class="col-12">
            <h1 style="margin: 40px 0">Сертификаты на продукцию</h1>
        </div>
        <div class="col-12 serifikaty d-flex justify-content-center flex-wrap mb-4">
            <div>
                <img class="image" src="../images/sertifikaty/sertifikat-sootvetstviya-axor.jpg" alt="">                
            </div>
            <div>
                <img class="image" src="../images/sertifikaty/sertifikat-sootvetstviya-REHAU-Brillant-Design-70.jpg" alt="">                
            </div>
            <div>                
                <img class="image" src="../images/sertifikaty/sertifikat-sootvetstviya-REHAU-Euro-Design-60.jpg" alt="">                
            </div>
            <div>                
                <img class="image" src="../images/sertifikaty/sertifikat-sootvetstviya-REHAU-Euro-Design-70.jpg" alt="">                
            </div>
            <div>
                <img class="image" src="../images/sertifikaty/sertifikat-sootvetstviya-REHAU-Geneo.jpg" alt=""></div>
            <div>
                <img class="image" src="../images/sertifikaty/sertifikat-sootvetstviya-REHAU-Synego.jpg" alt=""></div>
            <div>
                <img class="image" src="../images/sertifikaty/sertifikat-sootvetstviya-roto.jpg" alt=""></div>
            <div>
                <img class="image" src="../images/sertifikaty/sertifikat-sootvetstviya-steklopaketov.jpg" alt="">
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