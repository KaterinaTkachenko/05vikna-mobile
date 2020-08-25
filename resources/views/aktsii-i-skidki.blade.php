@extends('layouts.main-layout')
@section('main')
<div class="container aktsii">
    <div class="row">
        <div class="col-lg-12">
            <h1 style="margin: 40px 0">Акции и скидки на пластиковые окна</h1>
            <div class="aktsii__item">
                <div class="aktsii__caption">
                    <h1 class="aktsii__title">СКИДКА 35% НА ОКНА ПВХ</h1>
                    <p>+ подарок, при покупке окон!</p>
                </div>
                <img src="../images/slider1.jpg" alt="slider1">                
                <div class="home__form d-flex justify-content-between align-items-center flex-wrap">
                    <div>
                        <i class="fa fa-user"></i>
                        <input type="text" name="name" id="username" class="form-control user" placeholder="Имя">
                    </div>

                    <div>
                        <i class="fas fa-phone-alt"></i>
                        <input type="tel" name="phone" id="phone_aktsii1" class="phone form-control" placeholder="Телефон" required>
                    </div>

                    <div>
                        <button class="btn-main submitBtn" onclick="submitForm('Акции и скидки', 'Форма', '#phone_aktsii1')">Получить скидку</button>
                    </div>
                </div>
            </div>
            <div class="aktsii__item">
                <div class="aktsii__caption">
                    <h1 class="aktsii__title">СКИДКА 30% НА ОСТЕКЛЕНИЕ БАЛКОНОВ</h1>
                    <p>энергосберегающий стеклопакет в подарок!</p>
                </div>
                <img src="../images/slider2.png" alt="slider2">            
                <div class="home__form d-flex justify-content-between align-items-center flex-wrap">
                    <div>
                        <i class="fa fa-user"></i>
                        <input type="text" name="name" id="username" class="form-control user" placeholder="Имя">
                    </div>

                    <div>
                        <i class="fas fa-phone-alt"></i>
                        <input type="tel" name="phone" id="phone_aktsii2" class="phone form-control" placeholder="Телефон" required>
                    </div>

                    <div>
                        <button class="btn-main submitBtn" onclick="submitForm('Акции и скидки', 'Форма', '#phone_aktsii2')">Получить скидку</button>
                    </div>
                </div>
            </div>
            <div class="aktsii__item">
                <div class="aktsii__caption">
                    <h1 class="aktsii__title">ДОПОЛНИТЕЛЬНАЯ СКИДКА 3%</h1>
                    <p>при оформлении заказа ОНЛАЙН!</p>
                </div>
                <img src="../images/slider3.jpg" alt="slider3">                
                <div class="home__form d-flex justify-content-between align-items-center flex-wrap">
                    <div>
                        <i class="fa fa-user"></i>
                        <input type="text" name="name" id="username" class="form-control user" placeholder="Имя">
                    </div>

                    <div>
                        <i class="fas fa-phone-alt"></i>
                        <input type="tel" name="phone" id="phone_aktsii3" class="phone form-control" placeholder="Телефон" required>
                    </div>

                    <div>
                        <button class="btn-main submitBtn" onclick="submitForm('Акции и скидки', 'Форма', '#phone_aktsii3')">Получить скидку</button>
                    </div>
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