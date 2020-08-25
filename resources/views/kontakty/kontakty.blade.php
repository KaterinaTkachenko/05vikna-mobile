@extends('layouts.main-layout')
@section('main')
<div class="container kontakty">
    <div class="row">
        <div class="col-lg-12">
            <h1 style="margin: 40px 0">Офис продаж окон REHAU</h1>
            <p>Мы дорожим каждым заказчиком и готовы рассматривать индивидуальные схемы сотрудничества, гарантируя безупречное качество, неповторимый комфорт, стильный дизайн и приемлемые цены. Прочитайте подробнее о наглядных преимуществах окон REHAU.</p>
            <div class="kontakty__flex1 d-flex flex-wrap justify-content-around justify-content-lg-between mt-5 mb-5">
                <div>
                    <img src="../../images/kontakty/contacts-icon.png" alt="">
                    <p class="kontakty__flex1__title">Офис и шоурум</p>
                    <p>Москва, ул. Борисовские Пруды, 16К2</p>                    
                </div>
                <div>
                    <img src="../../images/kontakty/contacts-icon-02.png" alt="">
                    <p class="kontakty__flex1__title">Телефон</p>
                    <p>+38(097) 111 11 11</p>                    
                </div>
                <div>
                    <img style="padding-bottom: 10px;" src="../../images/kontakty/contacts-icon-03.png" alt="" class="kontakty__email">
                    <p class="kontakty__flex1__title">E-mail</p>
                    <p>viknamobile@ gmail.com</p>                    
                </div>
                <div>
                    <img src="../../images/kontakty/contacts-icon-04.png" alt="">
                    <p class="kontakty__flex1__title">График работы</p>
                    <p>Ежедневно с 10:00 до 19:00</p>                    
                </div>
            </div>            
        </div>
    </div>
</div>
<div class="container-fluid kontakty__fluid">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 p-lg-5 p-2 mb-lg-5 m-auto">            
            <form action="" method="POST" class="kontakty__form">
                <h2 style="margin: 0 0 30px">Свяжитесь с нами</h2>
                <div class="form-input">
                    <input type="text" name="name" class="form-control" placeholder="Имя">
                </div>
                <div class="form-input">
                    <input type="tel" name="phone" id="phone_kontakty" class="phone form-control" placeholder="Телефон*"
                        required>
                </div>
                <div class="form-input">
                    <textarea name="comment" id="comment" rows="10" class="phone form-control"
                        placeholder="Комментарий"></textarea>
                </div>
                <div class="form-input">
                    <button class="btn-main submitBtn"
                        onclick="submitForm('Контакты', 'Форма', '#phone_kontakty')">Отправить</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection