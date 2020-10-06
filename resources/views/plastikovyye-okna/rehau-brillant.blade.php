@extends('layouts.main-layout')
@section('main')
    <div class="container rehau_brilliant">
        <div class="row">
            <div class="col-lg-12 rehau60_catalog">
                <h1 style="margin: 40px 0 50px">СОВРЕМЕННЫЙ СТАНДАРТ ОКОН - ОКНА REHAU EURO 70</h1>
                
                <div class="catalog__parambox">
                    <div class="catalogbox__param__value">
                        5 камеры (70мм)
                    </div>
                    <div class="catalogbox__param__title">
                        Профиль    
                    </div>
                    <div class="catalogbox__param__value">
                        40 мм
                    </div>
                    <div class="catalogbox__param__title">
                        Стеклопакет    
                    </div>
                    <div class="catalogbox__param__value">
                        Высококачественная, идеально гладкая, удобная для ухода
                    </div>
                    <div class="catalogbox__param__title">
                        Поверхность  
                    </div>
                    <div class="catalogbox__param__value">
                        Надежная защита от сквозняков, пыли и воды
                    </div>
                    <div class="catalogbox__param__title">
                        2 контура уплотнений
                    </div>
                    <div class="catalogbox__param__value">
                        До класса WK-2 (A) (адаптированный ENV 1627)
                    </div>
                    <div class="catalogbox__param__title">
                        Взломобезопасность
                    </div>
                </div>
                <div class="catalog__img">
                    <img src="../../images/REHAU Brillant/rehau-brillant-design.png" alt="rehau Brillant">
                </div>
                <div class="catalog__content">
                    <h2 class="catalogbox__name">REHAU BRILLANT DESIGN</h2>
                    <button class="btn-main" data-toggle="modal" data-target="#modal-zamer" data-title="Заказать окно" data-msg="Мы перезвоним Вам.">Заказать в 1 клик</button>
                    <div class="catalogbox__calc">
                        <i class="fas fa-plus-circle"></i>
                        <a href="{{route('kalkulyator-onlayn')}}">
                            <span>Рассчитать окно</span>
                        </a>
                    </div>
                </div>

                <div class="catalog__parambox__mobile">
                    <div class="js__showParams">Показать характеристики</div>
                    <div class="catalog__parambox">
                        <div class="catalogbox__param__value">
                            5 камеры (70мм)
                        </div>
                        <div class="catalogbox__param__title">
                            Профиль    
                        </div>
                        <div class="catalogbox__param__value">
                            40 мм
                        </div>
                        <div class="catalogbox__param__title">
                            Стеклопакет    
                        </div>
                        <div class="catalogbox__param__value">
                            Высококачественная, идеально гладкая, удобная для ухода
                        </div>
                        <div class="catalogbox__param__title">
                            Поверхность  
                        </div>
                        <div class="catalogbox__param__value">
                            Надежная защита от сквозняков, пыли и воды
                        </div>
                        <div class="catalogbox__param__title">
                            2 контура уплотнений
                        </div>
                        <div class="catalogbox__param__value">
                            До класса WK-2 (A) (адаптированный ENV 1627)
                        </div>
                        <div class="catalogbox__param__title">
                            Взломобезопасность
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin: 40px 0">
            <div class="col-lg-12">
                <div class="rehau60__title">Комплектация варианта 
                    <span class="highlight">«Изысканная»</span>                  
                </div>

                <div class="rehau60__desc">
                    <p>REHAU BRILLANT DESIGN (Рехау Бриллант Дизайн) – пятикамерная профильная система, монтажная глубина которой составляет 70 мм. Это профильная система класса люкс с глянцевой поверхностью и округлой внешней частью створки. Конструкция из профильной системы REHAU BRILLANT DESIGN имеет высокий коэффициент сопротивления теплопередачи. Данная профильная система армируется металлом не менее 1,5 мм, что придает жесткость конструкции даже при сильных ветровых нагрузках. </p>
                    <p>Окна из профильной системы REHAU BRILLANT DESIGN станут украшением любого дома. Большой выбор цветовых решений, а также возможность изготавливать конструкции разных конфигураций (арочные конструкции, трапеции, косоугольники и, конечно, прямоугольные) дает возможность воплотить в жизнь любые дизайнерские идеи.</p>                    
                </div>

                <div class="rehau60__title">Преимущества профильной системы REHAU BRILLANT DESIGN</div>

                <div class="rehau60__desc">
                    <ul>
                        <li>Элегантный, современный вид и глянцевая поверхность подчеркнут выразительность Вашего дома. Вы можете выбирать между различными цветами и формами;</li>
                        <li>Отличительной чертой профильной системы REHAU BRILLANT являются мягкие скругленные контуры оконной рамы;</li>
                        <li>Глубина профильной системы 70 мм, а сбережение тепла обеспечивают 5 воздушных камер;</li>
                        <li>Благодаря гладкой поверхности и скошенном фальцу окна меньше загрязняются, быстро и легко очищаются водой с добавлением небольшого количества моющего средства и мягкой тканевой салфеткой;</li>
                        <li>В зависимости от Ваших требований к безопасности мы можем предложить соответствующий уровень защиты от взлома в различных комплектациях окна;</li>
                        <li>Окна данной профильной системы обеспечивают выскокую звукоизоляцию (до 43 Дб);</li>
                        <li>Отличная теплоизоляция (R= 0,83 - 0,77 м2°C/Вт) обеспечивает уют и комфорт в любое время года;</li>
                        <li>Два контура уплотнения обеспечивают герметичность задерживая воздушные потоки и предотвращая попадание пыли и влаги снаружи.</li>
                    </ul>
                </div>

                <div class="rehau60__title">Технические характеристики</div>
                <div class="rehau60__tech">
                    <div>
                        <div class="table-border-wrap">
                            <table class="table table-striped table-hover"><tbody><tr><td>Конструкционная глубина</td>
                            <td>70 мм</td>
                            </tr><tr><td>Количество камер</td>
                            <td>5 камеры</td>
                            </tr><tr><td>Максимальная толщина стеклопакета</td>
                            <td>до 40 мм</td>
                            </tr><tr><td>Теплоизоляция</td>
                            <td>R= 0,83 - 0,77 м²°C/Вт</td>
                            </tr><tr><td>Звукоизоляция</td>
                            <td>до Rw,P= 43 дБ</td>
                            </tr><tr><td>Взломобезопасность</td>
                            <td>до класса WK-2 (A) (адаптированный ENV 1627)</td>
                            </tr><tr><td>Воздухопроницаемость</td>
                            <td>класc 4 согласно с EN 12207</td>
                            </tr><tr><td>Водонепроницаемость</td>
                            <td>до класса 9A согласно с EN 12208</td>
                            </tr><tr><td>Уплотнение</td>
                            <td>EPDM</td>
                            </tr><tr><td>Количество контуров</td>
                            <td>2 контура уплотнения притвора</td>
                            </tr></tbody></table></div>
                    </div>
                    <div>
                        <img src="../../images/REHAU Brillant/rehau-brillant-shema.jpg" alt="rehau-brillant-shema" style="width: auto">
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