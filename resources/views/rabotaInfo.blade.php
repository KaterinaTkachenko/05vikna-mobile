@extends('layouts.main-layout')
@section('main')
<div class="container rabotaInfo">
    <div class="row">
        <div class="col-lg-12">
            <h1 style="margin: 40px 0px">Остекление и отделка балкона</h1>
            <div class="rabotaInfo__flex1 d-flex flex-wrap justify-content-between mb-5 shadowBox">
                <div class="rabotaInfo__flex1__item1">
                    <img src="../images/nashi-raboty/1.png" alt="Наши работы"></div>
                <div class="rabotaInfo__flex1__item2 p-4">
                    <h3 style="margin: 0 0 30px">Описание работ</h3>
                    <ul>
                        <li>Установка окон ПВХ</li>
                        <li>Установка балконного блока</li>
                        <li>Внутренняя отделка балкона</li>
                    </ul>                
                </div>
            </div>
            <div class="mb-5">
                <p>В типовом доме «П-3» остеклили балкон профилем REHAU Euro-Design и утеплили поверхности сооружения. Монтировали окна с глухими и поворотно-откидными створками. Заполнили их двухкамерным стеклопакетом. Белый пластик красиво смотрится в интерьере и на фасаде. Он удобен в эксплуатации и нетребователен к уходу. Окна хорошо защищают помещение от холода, шума, пропускают солнечный свет. Работы были выполнены за два дня. </p>
                <p>Остекление балкона было выполнено в районе Лефортово ЮВАО г. Москвы, м. Авиамоторная. </p>
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