<section id="header" class="bg-white shadow-sm">
    <div class="container" style="padding: 1rem 1.5rem">
        <div class="row justify-content-center text-center">
            <div class="col-3 col-lg-3 col-md-3 col-sm-3 firstDiv">
                <a href="/">
                    <img src="../../images/logo.png" alt="logo.png">
                </a>
            </div>
            <div class="col-6 col-lg-6 col-md-6 col-sm-6 align-self-center b-grey">                
                <ul class="d-flex justify-content-center align-items-center header__icons">                    
                    <li>
                        <a href="viber://chat?number=+380503224144">
                        {{-- <a href="viber://add?number=380503224144"> --}}
                            <img src="../../images/viber-grey.png" alt="viber-grey.png" class="header__icon header__viber">
                        </a>
                        <a href="tel:+380503224144">
                            <img src="../../images/phone-grey.png" alt="phone-grey.png" class="header__icon header__tel">
                        </a>
                    </li>
                    <li class="header__phone">
                        <a href="tel:+380503224144">+38 (050) 322 41 44</a>
                    </li>                                              
                    <li class="header__scheduler">Ежедневно с 8:00 до 20:00</li>
                </ul>
                <ul class="d-flex justify-content-center header__menu">
                    <li>
                        <a href="{{route('about')}}" class="header__menu__item">О нас</a>
                        <ul class="dropdown-content">
                            <li><a href="{{route('sertifikaty')}}" class="dropdown-item">Сертификаты</a></li>                            
                            <li><a href="{{route('stati')}}" class="dropdown-item">Статьи</a></li>
                            <li><a href="{{route('otzyvy')}}" class="dropdown-item">Отзывы</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('kalkulyator-onlayn')}}" class="header__menu__item">Наши цены</a>
                        <ul class="dropdown-content">
                            <li><a href="{{route('kalkulyator-onlayn')}}" class="dropdown-item">Калькулятор онлайн</a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('nashi-raboty')}}" class="header__menu__item">Наши работы</a></li>
                    <li><a href="{{route('aktsii-i-skidki')}}" class="header__menu__item">Акции</a></li>
                    <li>
                        <a href="{{route('kontakty')}}" class="header__menu__item">Контакты</a>                                       
                    </li>
                </ul>
            </div>
            <div class="col-3 col-lg-3 col-md-3 col-sm-3 align-self-center text-right btnDiv">                
                <a href="{{route('kalkulyator-onlayn')}}" class="btn-main">Узнать стоимость</a>                
            </div>
        </div>
    </div>
</section>