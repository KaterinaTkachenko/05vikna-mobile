@extends('layouts.main-layout')
@section('main')
<div class="container rehau_geneo">
    <div class="row">
        <div class="col-lg-12 rehau60_catalog">
            <h1 style="margin: 40px 0 50px">СОВРЕМЕННЫЙ СТАНДАРТ ОКОН - ОКНА REHAU EURO 70</h1>
            
            <div class="catalog__parambox">
                <div class="catalogbox__param__value">
                    6 камеры (86мм)
                </div>
                <div class="catalogbox__param__title">
                    Профиль    
                </div>
                <div class="catalogbox__param__value">
                    44 мм
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
                    3 контура уплотнений
                </div>
                <div class="catalogbox__param__value">
                    До класса WK-3 (A) (адаптированный ENV 1627)
                </div>
                <div class="catalogbox__param__title">
                    Взломобезопасность
                </div>
            </div>
            <div class="catalog__img">
                <img src="../../images/REHAU euro 70/rehau-euro-design-70.png" alt="rehau-euro-design-70">
            </div>
            <div class="catalog__content">
                <h2 class="catalogbox__name">REHAU GENEO</h2>
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
                        6 камеры (86мм)
                    </div>
                    <div class="catalogbox__param__title">
                        Профиль    
                    </div>
                    <div class="catalogbox__param__value">
                        44 мм
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
                        3 контура уплотнений
                    </div>
                    <div class="catalogbox__param__value">
                        До класса WK-3 (A) (адаптированный ENV 1627)
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
                <span class="highlight">«Максимальная»</span>                  
            </div>

            <div class="rehau60__desc">
                <p>REHAU GENEO (Рехау Генео) - это инновационный продукт от компании REHAU. Это уникальная 6-ти камерная профильная система глубиной 86 мм,  изготовленная из материала RAU-FIPRO. Основа профиля усилена стекло-фиброй (удельный предел прочности стекловолокна втрое выше, чем у стали, а модуль упругости более чем в 15 раз выше, чем у бетона).</p>
                <p>Окна из профиля REHAU GENEO – это прекрасное решение для пассивных домов и домов с низким потреблением энергоресурсов, поскольку имеют самые высокие показатели по теплоизоляции.</p>                
            </div>

            <div class="rehau60__title">Преимущества профильной системы REHAU GENEO</div>

            <div class="rehau60__desc">
                <ol>
                    <li>Благодаря отсутствию металлического армирования эта система на 40% легче остальных:
                        <ul>
                            <li>удобность транспортировки;</li>
                            <li>скорость монтажа конструкции;</li>
                            <li>снижение нагрузки на здание;</li>
                            <li>снижение веса створки, что упрощает процесс открытия и закрытия конструкции, продлевая термин службы фурнитуры.</li>
                        </ul>
                    </li>
                    <li>Максимальная прочность и жесткость конструкций - наличие армирующего слоя в углах приводит к большей стабильности сваренной конструкции.</li>
                    <li>Полная герметичность за счёт наличия дополнительного центрального контура уплотнения.</li>
                    <li>Разнообразные формы и размеры окон, элегантный дизайн, который отражает последние тенденции европейской архитектуры.</li>
                    <li>Отличная взломобезопасность и уровень шумоизоляции, который нельзя было достичь до сегодняшнего дня.</li>
                    <li>Абсолютный комфорт эксплуатации, который достигается за счёт:
                        <ul>
                            <li>уплотнителей нового поколения из материала RAU PREN, которые позволяют снизить усилия закрытия створок на 10%;</li>
                            <li>гладкая антистатическая поверхность, которая облегчает уход за окнами;</li>
                            <li>наклонный фальц, который осуществляет отвод влаги.</li>                            
                        </ul>
                    </li>
                </ol>               
            </div>

            <div class="rehau60__title">Технические характеристики</div>
            <div class="rehau60__tech">
                <div>
                    <div class="table-border-wrap">
                        <table class="table table-striped table-hover"><tbody><tr><td>Конструкционная глубина</td>
                        <td>86 мм</td>
                        </tr><tr><td>Количество камер</td>
                        <td>6 камеры</td>
                        </tr><tr><td>Максимальная толщина стеклопакета</td>
                        <td>до 44 мм</td>
                        </tr><tr><td>Теплоизоляция</td>
                        <td>R= 1,16 м²°C/Вт</td>
                        </tr><tr><td>Звукоизоляция</td>
                        <td>до Rw,P= 46 дБ</td>
                        </tr><tr><td>Взломобезопасность</td>
                        <td>до класса WK-3 (A) (адаптированный ENV 1627)</td>
                        </tr><tr><td>Воздухопроницаемость</td>
                        <td>класc 4 согласно с EN 12207</td>
                        </tr><tr><td>Водонепроницаемость</td>
                        <td>до класса 9A согласно с EN 12208</td>
                        </tr><tr><td>Уплотнение</td>
                        <td>RAU-PREN</td>
                        </tr><tr><td>Количество контуров</td>
                        <td>3 контура уплотнения притвора</td>
                        </tr></tbody></table></div>
                </div>
                <div>
                    <img src="../../images/REHAU Geneo/rehau-geneo-shema.jpg" alt="rehau-geneo-shema" style="width: auto">
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