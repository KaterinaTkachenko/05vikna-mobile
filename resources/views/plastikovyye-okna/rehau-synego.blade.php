@extends('layouts.main-layout')
@section('main')
<div class="container rehau_synego">
    <div class="row">
        <div class="col-lg-12 rehau60_catalog">
            <h1 style="margin: 40px 0 50px">СОВРЕМЕННЫЙ СТАНДАРТ ОКОН - ОКНА REHAU EURO 70</h1>
            
            <div class="catalog__parambox">
                <div class="catalogbox__param__value">
                    Рама 7 камер, створка 6 камер (80мм)
                </div>
                <div class="catalogbox__param__title">
                    Профиль    
                </div>
                <div class="catalogbox__param__value">
                    51 мм
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
                    2 (AD) / 3 (MD) контура уплотнений
                </div>
                <div class="catalogbox__param__value">
                    До класса RC3
                </div>
                <div class="catalogbox__param__title">
                    Взломобезопасность
                </div>
            </div>
            <div class="catalog__img">
                <img src="../../images/REHAU Synego/rehau-synego.png" alt="rehau-synego">
            </div>
            <div class="catalog__content">
                <h2 class="catalogbox__name">REHAU SYNEGO</h2>
                <button class="btn-main" data-toggle="modal" data-target="#modal-zamer" data-title="Заказать окно" data-msg="Мы перезвоним Вам в течении 2 минут.">Заказать в 1 клик</button>
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
                        Рама 7 камер, створка 6 камер (80мм)
                    </div>
                    <div class="catalogbox__param__title">
                        Профиль    
                    </div>
                    <div class="catalogbox__param__value">
                        51 мм
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
                        2 (AD) / 3 (MD) контура уплотнений
                    </div>
                    <div class="catalogbox__param__value">
                        До класса RC3
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
                <span class="highlight">«Супертеплая»</span>                  
            </div>

            <div class="rehau60__desc">
                <p>REHAU SYNEGO – новая профильная система, позволяющая изготавливать окна на 50% теплее обычных. Профиль REHAU SYNEGO являет собой 7-ми камерную систему повышенной термоизоляции, коэффициент сопротивления теплопередачи которой составляет 1,0 м2°C/Вт. В сочетании с теплым энергоэффективным стеклопакетом коэффициент сопротивления теплопередачи конструкции составит до 1,51 м2°C/Вт. Профильная система REHAU SYNEGO имеет повышенный класс защиты от взлома – класс WK-3 (A).</p>
                <p>Профиль REHAU SYNEGO является экологичным продуктом, соответствующим всем европейским стандартам качества. Конструкции, изготовленные из этого профиля, прошли сертификацию и разрешены к установке в медицинских и детских учреждениях.</p>                    
            </div>

            <div class="rehau60__title">Преимущества профильной системы REHAU BRILLANT DESIGN</div>

            <div class="rehau60__desc">
                <ul>
                    <li>Благодаря высокому уровню теплоизоляции профиль REHAU SYNEGO значительно сократит ваши расходы на отопление и кондиционирование;</li>
                    <li>Звукоизоляция (до 46 дБ) значительно сокращает уровень шума;</li>
                    <li>Среднее уплотнение защитит вас от сквозняков и сырости, а также обеспечит оптимальный притвор, чтобы Вы могли открывать и закрывать окна без дополнительных усилий;</li>
                    <li>Благодаря специальной рецептуре ПВХ и новому усовершенствованному методу изготовления поверхность профиля ещё более гладкая. Благодаря этому грязь не задерживается на поверхности профиля и Ваши окна каждый день сияют как новые;</li>
                    <li>Многочисленные элементы декора и цветовые решения откроют перед Вами широкие архитектурные возможности и Вы сможете создать окно Вашей мечты.</li>                    
                </ul>
            </div>

            <div class="rehau60__title">Технические характеристики</div>
            <div class="rehau60__tech">
                <div>
                    <div class="table-border-wrap">
                        <table class="table table-striped table-hover"><tbody><tr><td>Конструкционная глубина</td>
                        <td>80 мм</td>
                        </tr><tr><td>Количество камер</td>
                        <td>рама 7 камер, створка 6 камер</td>
                        </tr><tr><td>Максимальная толщина стеклопакета</td>
                        <td>до 51 мм</td>
                        </tr><tr><td>Коефициент теплопередачи*</td>
                        <td>2 контура уплотнения створок (SYNEGO AD): Uf = 1,0 Вт/м²K
                           <br> 3 контура уплотнения створок (SYNEGO MD): Uf = 0,94 Вт/м²K</td>
                        </tr><tr><td>Коефициент сопротивления теплопередаче**</td>
                            <td>2 контура уплотнения створок  (SYNEGO AD): Rf = 1,0 м²K/Вт <br>
                                3 контура уплотнения створок  (SYNEGO MD): Rf = 1,06 м²K/Вт</td>
                            </tr><tr>
                                <tr><td>Звукоизоляция</td>
                        <td>до Rw,P= 46 дБ</td>
                        </tr><tr><td>Взломобезопасность</td>
                        <td>до класа RC3</td>
                        </tr><tr><td>Воздухопроницаемость</td>
                        <td>класc 4 согласно с EN 12207</td>
                        </tr><tr><td>Водонепроницаемость</td>
                        <td>до класса 9A согласно с EN 12208</td>
                        </tr><tr><td>Уплотнение</td>
                        <td>RAU-PREN</td>
                        </tr><tr><td>Количество контуров</td>
                        <td>2 (AD) / 3 (MD)</td>
                        </tr></tbody></table></div>
                </div>
                <div>
                    <img src="../../images/REHAU Synego/rehau-synego-shema1.jpg" alt="rehau-synego-shema1" style="width: 80%">
                </div>
                <div>
                    <img src="../../images/REHAU Synego/rehau-synego-shema2.jpg" alt="rehau-synego-shema2" style="width: 80%">
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