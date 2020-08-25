<section id="sidebar">
    <div class="l-sidebar">
        <div class="sidebar__close text-right">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16px" height="16px">
                <path fill-rule="evenodd" fill="currentColor" d="M16.01 14.941l-1.068 1.069L8 9.068 1.058 16.01-.01 14.941 6.932 8-.01 1.058 1.058-.01 8 6.932 14.942-.01l1.068 1.068L9.068 8l6.942 6.941z"></path>
            </svg>
        </div>
        <ul class="sidebar-menu">
            <li>
                <div class="d-flex justify-content-between">
                    <a href="{{route('about')}}">О нас</a>
                    <i class="fa fa-chevron-down"></i>
                </div>                
                <ul class="dropdown-content hidden">
                    <li><a href="{{route('sertifikaty')}}" class="dropdown-item">Сертификаты</a></li>                    
                    <li><a href="{{route('stati')}}" class="dropdown-item">Статьи</a></li>
                    <li><a href="{{route('otzyvy')}}" class="dropdown-item">Отзывы</a></li>
                </ul>
            </li>
            <li>
                <div class="d-flex justify-content-between">
                    <a href="{{route('kalkulyator-onlayn')}}">Наши цены </a>
                    <i class="fa fa-chevron-down"></i>
                </div>
                <ul class="dropdown-content hidden">
                    <li><a href="{{route('kalkulyator-onlayn')}}" class="dropdown-item">Калькулятор онлайн</a></li>
                </ul>
            </li>
            <li><a href="{{route('nashi-raboty')}}">Наши работы </a></li>
            <li><a href="{{route('aktsii-i-skidki')}}">Акции </a></li>
            <li>
                <div class="d-flex justify-content-between">
                    <a href="{{route('kontakty')}}">Контакты </a>                   
                </div>                           
            </li>
            <li>
                <div class="d-flex justify-content-between">
                    <a href="{{route('plastikovyyeokna')}}">Пластиковые окна </a>
                    <i class="fa fa-chevron-down"></i>
                </div>
                <ul class="dropdown-content hidden">
                    <li><a href="{{route('rehaueuro60')}}" class="dropdown-item">REHAU EURO 60</a></li>
                    <li><a href="{{route('rehaueuro70')}}" class="dropdown-item">REHAU EURO 70</a></li>
                    <li><a href="{{route('brillant')}}" class="dropdown-item">REHAU Brilliant</a></li>
                    <li><a href="{{route('synego')}}" class="dropdown-item">REHAU Synego</a></li>
                    <li><a href="{{route('geneo')}}" class="dropdown-item">REHAU Geneo</a></li>
                    <li><a href="{{route('laminatsiyey')}}" class="dropdown-item">Окна с ламинацией</a></li>
                    <li><a href="{{route('steklopakety')}}" class="dropdown-item">Стеклопакеты</a></li>
                    <li><a href="{{route('setki')}}" class="dropdown-item">Москитные сетки</a></li>
                    <li><a href="{{route('podokonniki')}}" class="dropdown-item">Подоконники</a></li>
                    <li><a href="{{route('otlivy')}}" class="dropdown-item">Отливы</a></li>
                    <li><a href="{{route('furnitura')}}" class="dropdown-item">Фурнитура</a></li>
                </ul>
            </li>
            <li>
                <a href="{{route('derevyannyyeokna')}}">Деревянные окна</a> 
            </li>
            <li>
                <a href="{{route('balkonyilodzhii')}}">Балконы и лоджии</a>
            </li>
            <li>
                <a href="{{route('oknadlyadoma')}}">Окна для дома</a>
            </li>
            <li>
                <div class="d-flex justify-content-between">
                    <a href="{{route('dveri')}}">Двери</a>
                    <i class="fa fa-chevron-down"></i>
                </div>
                <ul class="dropdown-content hidden">
                    <li><a href="{{route('vkhodnyye')}}" class="dropdown-item">Входные</a></li>
                    <li><a href="{{route('mezhkomnatnyye')}}" class="dropdown-item">Межкомнатные</a></li>
                    <li><a href="{{route('balkonnyye')}}" class="dropdown-item">Балконные</a></li>
                </ul>
            </li>
            <li>
                <div class="d-flex justify-content-between">
                    <a href="{{route('uslugi')}}">Услуги и сервис</a>
                    <i class="fa fa-chevron-down"></i>
                </div>
                <ul class="dropdown-content hidden">
                    <li><a href="{{route('vyzov')}}" class="dropdown-item">Вызов замерщика</a></li>
                    <li><a href="{{route('ustanovka')}}" class="dropdown-item">Установка окон</a></li>
                    <li><a href="{{route('dostavka')}}" class="dropdown-item">Доставка и оплата</a></li>
                    <li><a href="{{route('garantiya')}}" class="dropdown-item">Гарантия и сервис</a></li>
                </ul>
            </li>
        </ul>
    </div>
</section>