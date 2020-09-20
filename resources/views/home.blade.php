@extends('layouts.main-layout')
@section('main')
<div class="container-fluid" id="home">
    <div class="row">
        <div class="col-lg-12 p-0">
            <div id="demo" class="carousel slide" data-ride="carousel">
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../images/slider1.jpg" alt="slider1">
                        <div class="carousel-caption">
                            <h1 class="carouselTitle">СКИДКА 35% НА ОКНА ПВХ</h1>
                            <p>+ подарок, при покупке окон!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../images/slider2.png" alt="slider2">
                        <div class="carousel-caption">
                            <h1 class="carouselTitle">СКИДКА 30% НА ОСТЕКЛЕНИЕ БАЛКОНОВ</h1>
                            <p>энергосберегающий стеклопакет в подарок!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../images/slider3.jpg" alt="slider3">
                        <div class="carousel-caption">
                            <h1 class="carouselTitle">ДОПОЛНИТЕЛЬНАЯ СКИДКА 3%</h1>
                            <p>при оформлении заказа ОНЛАЙН!</p>
                        </div>
                    </div>
                </div>
                <div class="aktsii__item">
                <div class="home__form d-flex justify-content-between align-items-center flex-wrap">
                    <div>
                        <i class="fa fa-user"></i>
                        <input type="text" name="name" id="username" class="form-control user" placeholder="Имя">
                    </div>

                    <div>
                        {{-- <i class="fas fa-phone-alt"></i> --}}
                        <input type="tel" name="phone" id="phone_slider" class="phone form-control" placeholder="Телефон" required>
                    </div>

                    <div>
                        <button class="btn-main submitBtn" onclick="submitForm('Главная', 'Слайдер', '#phone_slider')">Получить скидку</button>
                    </div>
                </div>
                </div>
                <div class="arrBlock">
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <img src="../images/arrprev.png" alt="arrprev">
                        {{-- <span class="carousel-control-prev-icon"></span> --}}
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <img src="../images/arrnext.png" alt="arrnext">
                        {{-- <span class="carousel-control-next-icon"></span> --}}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 benefit justify-content-around">
            <div>
                <img src="../images/benefit-icon.png" alt="benefit-icon">
                <p>Одни из самых низких цен в Днепре и Запорожье</p>
            </div>
            <div>
                <img src="../images/benefit-icon-02.png" alt="benefit-icon-02">
                <p>Контроль качества производства на всех этапах</p>
            </div>
            <div>
                <img src="../images/benefit-icon-03.png" alt="benefit-icon-03">
                <p>Минимальные сроки производства</p>
            </div>
            <div>
                <img src="../images/benefit-icon-04.png" alt="benefit-icon-04">
                <p>Профессиональные монтажники</p>
            </div>
            <div>
                <img src="../images/benefit-icon-05.png" alt="benefit-icon-05">
                <p>Срок гарантийных работ — 5 лет</p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <hr style="align:center; width:100%; color:#dddddd" />
</div>    

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 style="margin: 40px 0">Пластиковые окна в Днепре и Запорожье: производство, продажа и установка</h1>
            <p>Компания «Мобільні вікна» изготавливает, доставляет и устанавливает пластиковые окна REHAU из оригинального профиля. Заказывайте у нас сертифицированные изделия с установкой по ГОСТ недорого. На профили мы даем гарантию 50 лет, предлагаем клиентам удобный сервис и выгодные условия оплаты. Наша компания делает упор на быстрое и мобильное обслуживание клиента.</p>   
            <p>Мобильный офис – это услуга, которая позволит Вам не выходя из дома: заказать и установить окна. Вызвать замерщика-менеджера, заключить договор, оплатить в любой удобной для Вас форме и получить монтаж окна после его изготовления. И все это можно сделать не выходя из дома. Чтобы сделать заказ позвоните по телефону на сайте. Бесплатно вызвать замерщика можно через форму вверху страницы.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-12 home__page2 justify-content-around">
            <div>
                <a href="{{route('plastikovyyeokna')}}"><img src="../images/okno.jpg" alt="okno"></a>
                <h4>Пластиковые окна<br>от <span class="orangeColor">1135 грн/кв.м</span></h4> 
                <h4>Климат контроль<br><span class="orangeColor">В ПОДАРОК</span></h4>
            </div>
            <div>
                <a href="{{route('balkonyilodzhii')}}"><img src="../images/balkon.jpg" alt="balkon"></a>
                <h4>Балконы и лоджии<br>от <span class="orangeColor">1145 грн/кв.м</span></h4> 
                <h4>Климат контроль <br><span class="orangeColor">В ПОДАРОК</span></h4>
            </div>
            <div>
                <a href="{{route('dveri')}}"><img src="../images/dveri.jpg" alt="dveri"></a>
                <h4>Двери <br>от <span class="orangeColor">1223 грн/кв.м</span></h4> 
                <h4>Климат контроль<br><span class="orangeColor">В ПОДАРОК</span></h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <h1 style="margin: 40px 0">Цены на наши пластиковые окна</h1>
        </div>
        <div class="col-lg-12 home__prices">
            <div >
                <img src="../images/plastikovoye-okno-rehau-odnostvorchatoye.jpg" alt="plastikovoye-okno-rehau-odnostvorchatoye">
                <h4>Одностворчатое окно <br> 900×1400</h4>
                <p>Rehau E60 <span class="orangeColor">1835</span> грн.</p>
                <button class="btn-main" data-toggle="modal" data-target="#modal-zamer" data-title="Заказать окно" data-msg="Мы перезвоним Вам в течении 2 минут.">Заказать</button>
            </div>
            <div>
                <img src="../images/plastikovoye-okno-rehau-otkryvayutsya-dve-stvorki.jpg" alt="plastikovoye-okno-rehau-otkryvayutsya-dve-stvorki">
                <h4>Одностворчатое окно <br> 900×1400</h4>
                <p>Rehau E60 <span class="orangeColor">1835</span> грн.</p>
                <button class="btn-main" data-toggle="modal" data-target="#modal-zamer" data-title="Заказать окно" data-msg="Мы перезвоним Вам в течении 2 минут.">Заказать</button>
            </div>
            <div id="odnostvorchatoye">
                <img src="../images/plastikovoye-okno-rehau-dve-stvorki-povorotno-otkidnyye.jpg" alt="plastikovoye-okno-rehau-dve-stvorki-povorotno-otkidnyye">
                <h4>Одностворчатое окно <br> 900×1400</h4>
                <p>Rehau E60 <span class="orangeColor">1835</span> грн.</p>
                <button class="btn-main" data-toggle="modal" data-target="#modal-zamer" data-title="Заказать окно" data-msg="Мы перезвоним Вам в течении 2 минут.">Заказать</button>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <h1 style="margin: 40px 0">Цены на балконный блок</h1>
        </div>
        <div class="col-lg-12 home__prices">
            <div>
                <img src="../images/plastikovyy-balkonnyy-blok-rehau-glukhaya-stvorka-dver.jpg" alt="plastikovyy-balkonnyy-blok-rehau-glukhaya-stvorka-dver" style="height: 304px;">
                <h4>Балконный блок <br> 800×1420 + 700×2160</h4>
                <p>Rehau E60 <span class="orangeColor">3835</span> грн.</p>
                <button class="btn-main" data-toggle="modal" data-target="#modal-zamer" data-title="Заказать балконный блок" data-button="Заказать" data-msg="Мы перезвоним Вам в течении 2 минут.">Заказать</button>
            </div>
            <div>
                <img src="../images/plastikovyy-balkonnyy-blok-rehau-povorotno-otkidnaya-i-glukhaya-stvorka-dver.jpg" alt="plastikovyy-balkonnyy-blok-rehau-povorotno-otkidnaya-i-glukhaya-stvorka-dver" style="width:100%">
                <h4>Балконный блок <br> 1460×1420 + 700×2160</h4>
                <p>Rehau E60 <span class="orangeColor">4135</span> грн.</p>
                <button class="btn-main" data-toggle="modal" data-target="#modal-zamer" data-title="Заказать балконный блок" data-button="Заказать" data-msg="Мы перезвоним Вам в течении 2 минут." data-page="Главная страница">Заказать</button>
            </div>
            <div>
                <img src="../images/plastikovyy-balkonnyy-blok-rehau-povorotno-otkidnaya-stvorka-dver.jpg" alt="plastikovyy-balkonnyy-blok-rehau-povorotno-otkidnaya-stvorka-dver" style="height: 304px;">
                <h4>Балконный блок <br> 600×1420 + 700×2160</h4>
                <p>Rehau E60 <span class="orangeColor">3835</span> грн.</p>
                <button class="btn-main" data-toggle="modal" data-target="#modal-zamer" data-title="Заказать балконный блок" data-button="Заказать" data-msg="Мы перезвоним Вам в течении 2 минут.">Заказать</button>
            </div>
        </div>
    </div>

    <div class="row" style="margin-bottom: 20px">
        <div class="col-12">
            <h1 style="margin: 40px 0">Цены на рамы для балконов и лоджий</h1>
        </div>
        <div class="col-lg-12 home__prices">
            <div>
                <img src="../images/okno-na-balkon.jpg" alt="plastikovyy-balkonnyy-blok-rehau-glukhaya-stvorka-dver">
                <h4>Балконное окно <br> 1700×1450</h4>
                <p>Rehau E60 <span class="orangeColor">1935</span> грн.</p>
                <button class="btn-main" data-toggle="modal" data-target="#modal-zamer" data-title="Заказать балконное окно" data-button="Заказать" data-msg="Мы перезвоним Вам в течении 2 минут.">Заказать</button>
            </div>
            <div>
                <img src="../images/rama-na-balkon-rehau-3-m.jpg" alt="rama-na-balkon-rehau-3-m">
                <h4>Балконная рама <br> 3000×1450</h4>
                <p>Rehau E60 <span class="orangeColor">7835</span> грн.</p>
                <button class="btn-main" data-toggle="modal" data-target="#modal-zamer" data-title="Заказать балконную раму" data-button="Заказать" data-msg="Мы перезвоним Вам в течении 2 минут.">Заказать</button>
            </div>
            <div>
                <img src="../images/rama-na-balkon-rehau-6-m.jpg" alt="rama-na-balkon-rehau-6-m">
                <h4>Балконная рама <br> 6000×1450</h4>
                <p>Rehau E60 <span class="orangeColor">10550</span> грн.</p>
                <button class="btn-main" data-toggle="modal" data-target="#modal-zamer" data-title="Заказать балконную раму" data-button="Заказать" data-msg="Мы перезвоним Вам в течении 2 минут.">Заказать</button>
            </div>
        </div>
    </div>
</div>

<div style="position: relative">
    <div class="container-fluid home__zamer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 style="margin: 40px 0">БЕСПЛАТНАЯ КОНСУЛЬТАЦИЯ СПЕЦИАЛИСТА НА ВАШЕМ ОБЪЕКТЕ</h1>
                    <p class="home__zamer__text">Мы проводим полный спектр работ по разработке и изготовлению светопрозрачных конструкций. Закажите выезд специалиста на объект и изложите свои ожидания и требования. Получите исчерпывающую консультацию по интересующему продукту.</p>
                    <div class="home__form__zamer">
                        <div class="form-group d-flex align-items-center flex-wrap">    
                            <i class="fas fa-phone-alt"></i>
                            <input type="tel" name="phone" id="phone_home2" class="phone form-control" placeholder="Телефон"
                                required>
    
                            <button class="btn-main submitBtn" onclick="submitForm('Главная страница', 'Форма', '#phone_home2')">Получить консультацию</button>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 home__page7">
            <h1 style="margin: 50px 0 40px">«Мобильные окна» – надежный производитель пластиковых окон REHAU</h1>
            <p>Мы занимаемся продажей, сервисом и монтажом металлопластиковых окон более 17 лет. За годы своей работы смонтировали тысячи окон, балконов и дверей в квартиры и частные дома. Тысячи людей получили комфорт, уют и безопасность в своих помещениях благодаря ответственному подходу  к каждому клиенту.</p>
            <p style="margin: 20px 0 40px">Строительные компании и частные лица сотрудничают с нами по следующим причинам:</p>
            <ul>
                <li>
                    <h3>Поставка окон и комплектующих по ценам производителя.</h3>
                    <span>Являясь официальным партнером немецкого концерна, мы поставляем качественные материалы в минимальные сроки недорого.</span>
                </li>
                <li>
                    <h3>Разнообразие решений.</h3>
                    <span>Более 17 лет плодотворно работая в области изготовления, поставки и монтажа ПВХ-окон, мы предлагаем клиентам в Днепре и Запорожье пластиковые окна в различном исполнении и с разнообразным декором.</span>
                </li>
                <li>
                    <h3>Заказы любой сложности и объема.</h3>
                    <span>Благодаря высококлассному сервису и передовым технологиям. Контроль качества выполняется на каждом этапе производства.</span>
                </li>
                <li>
                    <h3>Качественная продукция с гарантией 50 лет.</h3>
                    <span>Надежность и долговечность изделий подтверждается сертификатами качества. На установленный профиль действует гарантия 50 лет.</span>
                </li>
                <li>
                    <h3>Выгодные условия покупки.</h3>
                    <span>У нас регулярно появляются специальные предложения, акции.</span>
                </li>
                <li>
                    <h3>Быстрое изготовление и монтаж окон.</h3>
                    <span>Изготавливаем окна в течение 7дней. На отделку и установку уходит 1–2 дня. Оперативность монтажных работ не уменьшает их качества. Монтажники специально обучены и аттестованы немецким концерном. Мы не экономим на качестве инструментов. Используем только те, что помогают безупречно выполнить установку изделий. Вы можете заказать у нас ПВХ-окна и быть уверены, что не придется обслуживать их по гарантии. Мы выполняем современные монтажные требования в полном объеме. Используем нормативное число крепежных деталей. Соблюдаем уровень в различных плоскостях. Делаем полноценный монтажный шов. Наши окна открываются без трения и дефектов. Наши специалисты могут гарантировать: повреждения откосов и стен при проводимых ими демонтажных работах минимальны.</span>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="container-fluid home__oplata">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 style="margin: 40px 0 50px">Мы принимаем к оплате:</h1>
                <div class="home__oplata__content d-flex flex-wrap justify-content-between" >
                    <div class="bg-white shadow-sm" style="padding: 0 25px; display: table;">
                        <p style="height: 82px; display:table-cell; vertical-align: middle; text-align: center;">Наличный расчет</p> 
                    </div>
                    <div class="bg-white shadow-sm" style="padding: 0 25px; display: table;">
                        <p style="height: 82px; display:table-cell; vertical-align: middle; text-align: center;">Безналичный расчет</p> 
                    </div>
                    <div><img src="../images/visa.png" alt="visa"></div>
                    <div><img src="../images/master-card.png" alt="master-card"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 style="margin: 40px 0">С нами удобно работать</h1>
            <div class="home__tasks justify-content-between">
                <div>
                    <img src="../images/work.jpg" alt="work">
                    <h4>Консультация</h4>
                    <p>Даем исчерпывающие ответы на вопросы, касающиеся установки и эксплуатации оконных систем.</p>
                </div>
                <div>
                    <img src="../images/work-02.jpg" alt="work-02">
                    <h4>Выезд на замер</h4>
                    <p>Снятие замеров, подбор оптимальной конфигурации для Вашего задания.</p>
                </div>
                <div>
                    <img src="../images/work-03.jpg" alt="work-03">
                    <h4>Подписание договора</h4>
                    <p>Оформление необходимой документации по сотрудничеству.</p>
                </div>
                <div>
                    <img src="../images/work-04.jpg" alt="work-04">
                    <h4>Монтаж</h4>
                    <p>Демонтаж старых окон и установка новой конструкции.</p>
                </div>
                <div>
                    <img src="../images/work-05.jpg" alt="work-05">
                    <h4>Послегарантийное обслуживание</h4>
                    <p>В любое время мы готовы помочь Вам с решением проблем, связанных с эксплуатацией пластиковых окон.</p>
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