@extends('layouts.main-layout')
@section('main')
    <div class="container dostavka">
        <div class="row">
            <div class="col-lg-12">
                <h1 style="margin: 40px 0">Доставка и оплата</h1>
                <h2 style="margin: 20px 0 40px">Оплата</h2>
                <div class="dostavka__flex1 d-flex flex-wrap justify-content-between ">
                    <div>
                        <p>Оформляя заявку у нас, вы вносите предоплату в размере 70–100 % от суммы заказа.</p>
                        <p>Оплата осуществляется одним из следующих способов:</p>
                        <ul>
                            <li><strong>Безналичный расчет.</strong> Мы заключаем договор с заказчиком и выставляем ему счет. Физические лица после заключения договора могут оплатить заказ посредством перевода средств на расчетный счет нашей компании.</li>
                            <li><strong> Оплата банковской картой.</strong> Вы можете оплатить заказ такими картами, как MasterCard, MasterCard Electronic, Maestro, Visa, Visa Electron, Diners Club.</li>
                        </ul>
                    </div>
                    <div class="text-center">
                        <img src="../images/dostavka/oplata-i-dostavka.jpg" alt="Оплата и доставка">
                    </div>
                </div>
                <h2 style="margin: 40px 0">Доставка пластиковых окон</h2>
                <p class="mb-5">Доставка заказа осуществляется силами компании в указанный в договоре день установки. Для защиты от возможных повреждений для транспортировки используется специализированный грузовой транспорт и необходимое оборудование.</p>                                
                <p class="alert alert-warning">Уточнить условия оплаты и доставки заказа вы можете:</p>
                <ul class="mb-5">
                    <li>по электронной почте info@okno.ru;</li>
                    <li>по телефону +7 (499) 116-30-07.</li>
                </ul>
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