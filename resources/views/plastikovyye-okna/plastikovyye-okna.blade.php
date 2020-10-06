@extends('layouts.main-layout')
@section('main')
    <div class="container" id="plastOkna">
        <div class="row plastOkna__block1">
            <div class="col-lg-12">
                <h1 style="margin: 40px 0">Пластиковые окна REHAU от производителя</h1>
                <p>Компания «Мобильные окна» изготавливает, доставляет и устанавливает пластиковые окна REHAU из оригинального профиля. В ассортименте профили REHAU моделей Euro 60, Euro design 70, Brillant design, Geneo, Synego. Заказывайте у нас сертифицированные изделия с установкой по ГОСТ недорого. На профили мы даем гарантию 50 лет, предлагаем клиентам удобный сервис и выгодные условия оплаты. Наша компания делает упор на быстрое и мобильное обслуживание клиента.</p>

                <h2 style="margin: 40px 0 30px">Сравнительная таблица REHAU</h2>
                <div class="d-none d-lg-block">
                    <div class="plastOkna__table1">
                        <div style="align-self: center">
                            <img src="../../images/plastikovyye-okna/okna-rehau.jpg" alt="okna-rehau" style="width: 100%; height: auto">
                        </div>
                        <div>
                            <a href="{{route('rehaueuro60')}}">
                                <img src="../../images/plastikovyye-okna/rehau-euro-60.png" alt="euro-60">
                            </a>
                            <a href="{{route('rehaueuro60')}}" target="_blank" rel="noopener noreferrer">Euro-60</a>
                        </div>
                        <div>
                            <a href="{{route('rehaueuro70')}}"><img src="../../images/plastikovyye-okna/rehau-euro-design-70.png" alt="euro-design-70"></a> 
                            <a href="{{route('rehaueuro70')}}" target="_blank" rel="noopener noreferrer">Euro-design-70</a>
                        </div>
                        <div>
                            <a href="{{route('brillant')}}"><img src="../../images/plastikovyye-okna/rehau-brillant-design.png" alt="brillant-design"></a> 
                            <a href="{{route('brillant')}}" target="_blank" rel="noopener noreferrer">Brillant-design</a>
                        </div>
                        <div>
                            <a href="{{route('geneo')}}"><img src="../../images/plastikovyye-okna/rehau-geneo.png" alt="geneo"></a> 
                            <a href="{{route('geneo')}}" target="_blank" rel="noopener noreferrer">Geneo</a>
                        </div>
                        <div>
                            <a href="{{route('synego')}}"><img src="../../images/plastikovyye-okna/rehau-synego.png" alt="synego"></a> 
                            <a href="{{route('synego')}}" target="_blank" rel="noopener noreferrer">Synego</a>
                        </div>
                    </div>
                    <div class="plastOkna__table2">
                        <div style="text-align: left">Уровень тепла</div>
                        <div>0,62 <i class="far fa-sun"></i></div>
                        <div>0,77 <i class="far fa-sun"></i> <i class="far fa-sun"></i></div>
                        <div>0,83 <i class="far fa-sun"></i> <i class="far fa-sun"></i></div>
                        <div>1,06 <i class="far fa-sun"></i> <i class="far fa-sun"></i> <i class="far fa-sun"></i></div>
                        <div>1,16 <i class="far fa-sun"></i> <i class="far fa-sun"></i> <i class="far fa-sun"></i></div>
                    </div>
                    <div class="plastOkna__table2">
                        <div style="text-align: left">Снижение шума</div>
                        <div>41 <i class="fas fa-volume-up"></i></div>
                        <div>43 <i class="fas fa-volume-up"></i></div>
                        <div>43 <i class="fas fa-volume-up"></i></div>
                        <div>46 <i class="fas fa-volume-up"></i></div>
                        <div>47 <i class="fas fa-volume-up"></i></div>
                    </div>
                    <div class="plastOkna__table2">
                        <div style="text-align: left">Количество камер</div>
                        <div>3 </div>
                        <div>5 </div>
                        <div>5-6 </div>
                        <div>6-7 </div>
                        <div>6 </div>
                    </div>
                    <div class="plastOkna__table2">
                        <div style="text-align: left">Ширина профиля, мм</div>
                        <div>60 </div>
                        <div>70 </div>
                        <div>70 </div>
                        <div>80 </div>
                        <div>86 </div>
                    </div>
                    <div class="plastOkna__table2">
                        <div style="text-align: left">Ширина стеклопакета, мм</div>
                        <div>32 </div>
                        <div>40 </div>
                        <div>41 </div>
                        <div>51 </div>
                        <div>53 </div>
                    </div>
                </div>

                <div class="plastOkna__adaptive d-lg-none d-flex justify-content-between">
                    <div class="plastOkna__adaptive__first">
                        <a href="{{route('rehaueuro60')}}" target="_blank" >
                            <img src="../../images/plastikovyye-okna/rehau-euro-60.png" alt="euro-60">
                            <div class="text-center mt-3"><b>Euro-60</b></div>
                        </a>                     
                    </div>
                    <div class="plastOkna__adaptive__second">
                        <div style="text-align: left">Уровень тепла - 0,62 <i class="far fa-sun"></i></div>
                        <div style="text-align: left">Снижение шума - 41 <i class="fas fa-volume-up"></i></div>
                        <div style="text-align: left">Количество камер - 3 </div>
                        <div style="text-align: left">Ширина профиля - 60 мм </div>
                        <div style="text-align: left">Ширина стеклопакета - 32 мм </div>
                    </div>
                
                </div>
                <hr class="d-lg-none" style="background: #FF802C;">

                <div class="plastOkna__adaptive d-lg-none d-flex justify-content-between">
                    <div class="plastOkna__adaptive__first">
                        <a href="{{route('rehaueuro70')}}" target="_blank" >
                            <img src="../../images/plastikovyye-okna/rehau-euro-design-70.png" alt="euro-70">
                            <div class="text-center mt-3"><b>Euro-70</b></div>
                        </a>                     
                    </div>
                    <div class="plastOkna__adaptive__second">
                        <div style="text-align: left">Уровень тепла - 0,77 <i class="far fa-sun"></i><i class="far fa-sun"></i></div>
                        <div style="text-align: left">Снижение шума - 43 <i class="fas fa-volume-up"></i></div>
                        <div style="text-align: left">Количество камер - 5 </div>
                        <div style="text-align: left">Ширина профиля - 70 мм </div>
                        <div style="text-align: left">Ширина стеклопакета - 40 мм </div>
                    </div>                
                </div>
                <hr class="d-lg-none" style="background: #FF802C;">
                
                <div class="plastOkna__adaptive d-lg-none d-flex justify-content-between">
                    <div class="plastOkna__adaptive__first">
                        <a href="{{route('brillant')}}" target="_blank" >
                            <img src="../../images/plastikovyye-okna/rehau-brillant-design.png" alt="rehau-brillant-design">
                            <div class="text-center mt-3"><b>Brillant-design</b></div>
                        </a>                     
                    </div>
                    <div class="plastOkna__adaptive__second">
                        <div style="text-align: left">Уровень тепла - 0,83 <i class="far fa-sun"></i><i class="far fa-sun"></i></div>
                        <div style="text-align: left">Снижение шума - 43 <i class="fas fa-volume-up"></i></div>
                        <div style="text-align: left">Количество камер - 5-6 </div>
                        <div style="text-align: left">Ширина профиля - 70 мм </div>
                        <div style="text-align: left">Ширина стеклопакета - 41 мм </div>
                    </div>                
                </div>
                <hr class="d-lg-none" style="background: #FF802C;">
                
                <div class="plastOkna__adaptive d-lg-none d-flex justify-content-between">
                    <div class="plastOkna__adaptive__first">
                        <a href="{{route('geneo')}}" target="_blank" >
                            <img src="../../images/plastikovyye-okna/rehau-geneo.png" alt="geneo">
                            <div class="text-center mt-3"><b>Geneo</b></div>
                        </a>                     
                    </div>
                    <div class="plastOkna__adaptive__second">
                        <div style="text-align: left">Уровень тепла - 1,06 <i class="far fa-sun"></i><i class="far fa-sun"></i><i class="far fa-sun"></i></div>
                        <div style="text-align: left">Снижение шума - 46 <i class="fas fa-volume-up"></i></div>
                        <div style="text-align: left">Количество камер - 6-7 </div>
                        <div style="text-align: left">Ширина профиля - 80 мм </div>
                        <div style="text-align: left">Ширина стеклопакета - 51 мм </div>
                    </div>                
                </div>
                <hr class="d-lg-none" style="background: #FF802C;">

                <div class="plastOkna__adaptive d-lg-none d-flex justify-content-between">
                    <div class="plastOkna__adaptive__first">
                        <a href="{{route('synego')}}" target="_blank" >
                            <img src="../../images/plastikovyye-okna/rehau-synego.png" alt="Synego">
                            <div class="text-center mt-3"><b>Synego</b></div>
                        </a>                     
                    </div>
                    <div class="plastOkna__adaptive__second">
                        <div style="text-align: left">Уровень тепла 1,16 <i class="far fa-sun"></i><i class="far fa-sun"></i><i class="far fa-sun"></i></div>
                        <div style="text-align: left">Снижение шума 47 <i class="fas fa-volume-up"></i></div>
                        <div style="text-align: left">Количество камер 6 </div>
                        <div style="text-align: left">Ширина профиля - 86 мм </div>
                        <div style="text-align: left">Ширина стеклопакета - 53 мм </div>
                    </div>
                </div>
                <hr style="background: #FF802C;">
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <h2 style="margin: 40px 0">Цены на наши пластиковые окна</h2>
            </div>
            <div class="col-lg-12 home__prices">
                <div >
                    <img src="../../images/plastikovoye-okno-rehau-odnostvorchatoye.jpg" alt="plastikovoye-okno-rehau-odnostvorchatoye">
                    <h4>Одностворчатое окно <br> 900×1400</h4>
                    <p>Rehau E60 <span class="orangeColor">1835</span> грн.</p>
                    <button class="btn-main" data-toggle="modal" data-target="#modal-zamer" data-title="Заказать окно" data-msg="Мы перезвоним Вам.">Заказать</button>
                </div>
                <div>
                    <img src="../../images/plastikovoye-okno-rehau-otkryvayutsya-dve-stvorki.jpg" alt="plastikovoye-okno-rehau-otkryvayutsya-dve-stvorki">
                    <h4>Двухстворчатое окно <br> 1300×1400</h4>
                    <p>Rehau E60 <span class="orangeColor">2535</span> грн.</p>
                    <button class="btn-main" data-toggle="modal" data-target="#modal-zamer" data-title="Заказать окно" data-msg="Мы перезвоним Вам.">Заказать</button>
                </div>
                <div id="odnostvorchatoye">
                    <img src="../../images/plastikovoye-okno-rehau-dve-stvorki-povorotno-otkidnyye.jpg" alt="plastikovoye-okno-rehau-dve-stvorki-povorotno-otkidnyye">
                    <h4>Трехстворчатое окно <br> 2100×1400</h4>
                    <p>Rehau E60 <span class="orangeColor">3435</span> грн.</p>
                    <button class="btn-main" data-toggle="modal" data-target="#modal-zamer" data-title="Заказать окно" data-msg="Мы перезвоним Вам.">Заказать</button>
                </div>
            </div>
        </div>

        <div class="row plastOkna__block2">
            <div class="col-lg-12">
                <h2 style="margin: 60px 0 40px;">ПВХ-окна REHAU — надежность, удобство, доступные цены</h2>
                <p>«Мобильные окна» в Днепре и Запорожье являются производителем металлопластиковых конструкций (окон, дверей, раздвижных систем, балконов и лоджий) из немецкого профиля Rehau. Вся продукция сертифицирована и соответствует украинским и европейским стандартам качества. Существует как минимум 6 аргументов выбрать этот бренд.</p>
                <ul>
                    <li>
                        <h4><span class="decimal">1</span> <span style="">Долговечность.</span></h4>
                        Компания REHAU более 70 лет успешно производит полимерные конструкции, в том числе для изготовления оконных систем. Она разработала множество технических решений с превосходными эксплуатационными свойствами. Продукция немецкого бренда востребована во всем мире и известна высоким качеством. В результате испытаний долговечность конструкций оценили в 60 условных лет.
                    </li>
                    <li>
                        <h4><span class="decimal">2</span> <span style="">Экономия тепла до 76%.</span></h4>
                        Через оконный проем уходит больше всего тепла. Учитывая этот факт, при разработке оконных профилей REHAU повышенное внимание уделяют теплоизоляции. Конструкции надежно блокируют теплый воздух, отражают его обратно в помещение, одновременно защищая комнату от холода. После монтажа оконных систем тепло внутри сохраняется значительно лучше — вы можете экономить на отоплении.
                    </li>
                    <li>
                        <h4><span class="decimal">3</span> <span style="">Разнообразие форм.</span></h4>
                        Проектируя окна, двери из ПВХ, специалисты вынуждены подстраиваться под тренды архитектуры, дизайна. Справляться с этой непростой задачей помогают оконные профили REHAU. Из них можно изготавливать различные по конфигурации и форме окна: классические прямоугольные, круглые, многогранные. Современное оборудование и технологии под управлением наших мастеров позволяют воплощать даже самые сложные идеи.
                    </li>
                    <li>
                        <h4><span class="decimal">4</span> <span style="">Широкий выбор цветов.</span></h4>
                        Белые пластиковые окна стали классикой, но цветные с <a href="{{route('laminatsiyey')}}">ламинацией</a> также популярны. Желающим выделить фасад дома, установив оригинальные окна, рекомендуем цветные изделия.
                    </li>
                    <li>
                        <h4><span class="decimal">5</span> <span style="">Защита от шума и непрошенных гостей.</span></h4>
                        Статистика показывает: 80% краж совершается после проникновения злоумышленников на объект через окна или балконные двери. Из-за высокой надежности профильных систем в настоящее время свыше 49% воров терпят неудачу.
                    </li>
                    <li>
                        <h4><span class="decimal">6</span> <span style="">Максимальное естественное освещение.</span></h4>
                        Вам неуютно, неудобно находиться в комнате из-за недостаточной освещенности? Решите проблему, заказав окно от REHAU в компании «Мобильные окна». Конструкция из стекла и пластика с высокой светопропускной способностью поможет вам создать комфортную обстановку, сэкономив на электроэнергии.
                    </li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h2 style="margin: 40px 0">С нами удобно работать</h2>
                <div class="home__tasks justify-content-between">
                    <div>
                        <img src="../../images/work.jpg" alt="work">
                        <h4>Консультация</h4>
                        <p>Даем исчерпывающие ответы на вопросы, касающиеся установки и эксплуатации оконных систем.</p>
                    </div>
                    <div>
                        <img src="../../images/work-02.jpg" alt="work-02">
                        <h4>Выезд на замер</h4>
                        <p>Снятие замеров, подбор оптимальной конфигурации для Вашего задания.</p>
                    </div>
                    <div>
                        <img src="../../images/work-03.jpg" alt="work-03">
                        <h4>Подписание договора</h4>
                        <p>Оформление необходимой документации по сотрудничеству.</p>
                    </div>
                    <div>
                        <img src="../../images/work-04.jpg" alt="work-04">
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

    <div style="position: relative">
        <div class="container-fluid home__zamer">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 style="margin: 40px 0">БЕСПЛАТНАЯ КОНСУЛЬТАЦИЯ СПЕЦИАЛИСТА НА ВАШЕМ ОБЪЕКТЕ</h2>
                        <p class="home__zamer__text">Мы проводим полный спектр работ по разработке и изготовлению светопрозрачных конструкций. Закажите выезд специалиста на объект и изложите свои ожидания и требования. Получите исчерпывающую консультацию по интересующему продукту.</p>
                        <div class="home__form__zamer">
                            <div class="form-group d-flex align-items-center flex-wrap">    
                                <i class="fas fa-phone-alt"></i>
                                <input type="tel" name="phone" id="phone_plastOkna" class="phone form-control" placeholder="Телефон"
                                    required>
        
                                <button class="btn-main submitBtn" onclick="submitForm('Пластиковые окна', 'Форма', '#phone_plastOkna')">Получить консультацию</button>
                            </div>
                        </div>
                    </div>
                </div>            
            </div>
        </div>
    </div>
@endsection