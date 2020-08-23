@extends('layouts.main-layout')
@section('main')
    <div class="container vyzov_zamer mb-5">
        <div class="row">
            <div class="col-lg-12">
                <h1 style="margin: 40px 0">ЗАКАЗАТЬ БЕСПЛАТНЫЙ ЗАМЕР - ВЫЗОВ ЗАМЕРЩИКА</h1>
                <h3 style="margin: 20px 0 0">Выберите удобный для вас вариант записи на бесплатный замер:</h3>
                <ul class="mt-4">
                    <li><strong>Отправить заявку с этой страницы.</strong>
                        <p>Менеджер нашей компании обязательно Вам перезвонит и проконсультирует Вас по нашей продукции и  согласует дату и время выезда нашего замерщика.</p>
                    </li>
                    <li><strong>Позвонить по телефону: </strong>
                        <p>(050) 322 41 44  и записаться на бесплатный замер в удобное для Вас время.</p>                        
                    </li>
                </ul>
                <p>Мастер по замеру выезжает на Ваш объект в оговоренное заранее время и снимает точные размеры. Заказ можно оформить на месте или в офисе.</p>                
            </div>
        </div>
    </div>

    <div style="position: relative">
        <div class="container-fluid vyzov_zamer home__zamer">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 style="margin: 40px 0 20px">ОТПРАВЬТЕ ЗАЯВКУ</h1>
                        <p class="home__zamer__text">и менеджер перезвонит вам для согласования времени бесплатного замера</p>
                        <div class="home__form__zamer d-flex align-items-center flex-wrap">
                            <div style="position: relative">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <input type="text" name="name" id="username" class="form-control" placeholder="Имя">
                            </div>
                            <div style="position: relative">
                                <i class="fas fa-phone-alt" aria-hidden="true"></i>
                                <input type="tel" name="phone" id="phone_vyzov_zamer" class="phone form-control"
                                    placeholder="Телефон" required="">
                            </div>
                            <div>
                                <button class="btn-main submitBtn"
                                    onclick="submitForm('Вызов замерщика', 'Форма', '#phone_vyzov_zamer')">Отправить</button>
                            </div>
                        </div>
                    </div>
                </div>            
            </div>
        </div>
    </div>
@endsection