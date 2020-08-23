@extends('layouts.main-layout')
@section('main')
    <div class="container garantiya">
        <div class="row">
            <div class="col-lg-12">
                <h1 style="margin: 40px 0">Гарантия и сервис</h1>
                <p>Гарантийные обязательства компании <a href="{{route('about')}}">«Оконные технологии»</a> соответствуют положениям Закона Российской Федерации «О защите прав потребителей» и гарантийным обязательствам немецкой фирмы REHAU, представителем которой является наша компания.</p>
                <div class="garantiya__flex1 d-flex flex-wrap justify-content-between shadowBox mb-5">
                    <div class="garant_flex1__item1">
                        <div class="garant_flex1__item11">
                            <h2 class="garantiya__title">НАША ГАРАНТИЯ - ВАША УВЕРЕННОСТЬ</h2>
                            <p>Мы уверенны в качестве наших окон. Высокая гарантия на продукцию подтверждает это</p>
                        </div>
                        <div class="garant__itembox">
                            <div class="garant__item">
                            <div class="garant__title">
                            <div class="garant__title-inner"><span class="garant__title-num">5</span> лет</div>
                            </div>
                            
                            <div class="garant__info">
                            <p>Гарантийное обслуживание на двери и окна</p>
                            </div>
                            </div>
                            
                            <div class="garant__item">
                            <div class="garant__title">
                            <div class="garant__title-inner"><span class="garant__title-num">40</span> лет</div>
                            </div>
                            
                            <div class="garant__info">
                            <p>Гарантия на аксессуары</p>
                            </div>
                            </div>
                            
                            <div class="garant__item">
                            <div class="garant__title">
                            <div class="garant__title-inner"><span class="garant__title-num">20</span> лет</div>
                            </div>
                            
                            <div class="garant__info">
                            <p>Гарантия на стеклопакеты</p>
                            </div>
                            </div>
                            
                            <div class="garant__item">
                            <div class="garant__title">
                            <div class="garant__title-inner"><span class="garant__title-num">10</span> лет</div>
                            </div>
                            
                            <div class="garant__info">
                            <p>Гарантия на фурнитуру</p>
                            </div>
                            </div>
                            
                            <div class="garant__item">
                            <div class="garant__title">
                            <div class="garant__title-inner"><span class="garant__title-num">12</span> лет</div>
                            </div>
                            
                            <div class="garant__info">
                            <p>Гарантия на уплотнитель</p>
                            </div>
                            </div>
                            
                            <div class="garant__item">
                            <div class="garant__title">
                            <div class="garant__title-inner"><span class="garant__title-num">50</span> лет</div>
                            </div>
                            
                            <div class="garant__info">
                            <p>Гарантия на профиль</p>
                            </div>
                            </div>
                            </div>
                    </div>
                    <div>
                        <img src="../images/garantiya/garant-big.jpg" alt="Гарантия и серсив">
                    </div>
                </div> 
                <p>По истечении гарантийного срока мы осуществляем профессиональное постгарантийное обслуживание. Свяжитесь с нами, и наши специалисты ответят на все вопросы, а в случае необходимости — приедут к вам, чтобы на месте решить все проблемы, связанные с эксплуатацией пластиковых окон и дверей.</p>
                <p>В любое время — как в течение гарантийного срока, так и по его окончании — мы выполняем сервисное обслуживание. Вы можете заказать у нам дооборудование двери или окна сетками, проветривателями, фурнитурой и другими дополнительными элементами.</p>
                <p class="alert alert-warning">Получить информацию о гарантийном, постгарантийном и сервисном обслуживании в нашей компании вы можете:</p>
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