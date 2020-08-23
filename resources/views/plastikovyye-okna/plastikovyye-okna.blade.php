@extends('layouts.main-layout')
@section('main')
    <div class="container" id="plastOkna">
        <div class="row plastOkna__block1">
            <div class="col-lg-12">
                <h1 style="margin: 40px 0">Пластиковые окна REHAU от производителя</h1>
                <p>«Оконные технологии» — надежный поставщик профилей REHAU в Москве. Мы предлагаем оригинальную продукцию немецкого бренда для пластиковых дверей, окон, остекления лоджий, балконов. В ассортименте профили REHAU моделей Blitz-Design, Delight-Design, Brillant-Design, Euro, Geneo, Intelio, Grazio с гарантией качества 5 лет. Все материалы сертифицированы. Сотрудничая снами, вы получаете пластиковые окна REHAU от производителя. Замер проемов, изготовление конструкций, их монтаж выполняются за 5 дней.</p>

                <h2 style="margin: 40px 0 30px">Сравнительная таблица REHAU</h2>
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
                        <a href="{{route('synego')}}"><img src="../../images/plastikovyye-okna/rehau-geneo.png" alt="geneo"></a> 
                        <a href="{{route('synego')}}" target="_blank" rel="noopener noreferrer">Geneo</a>
                    </div>
                    <div>
                        <a href="{{route('geneo')}}"><img src="../../images/plastikovyye-okna/rehau-synego.png" alt="synego"></a> 
                        <a href="{{route('geneo')}}" target="_blank" rel="noopener noreferrer">Synego</a>
                    </div>
                </div>

                <div class="plastOkna__table2">
                    <div style="text-align: left">Уровень тепла</div>
                    <div>0,65 <i class="far fa-sun"></i></div>
                    <div>0,8 <i class="far fa-sun"></i> <i class="far fa-sun"></i></div>
                    <div>0,82 <i class="far fa-sun"></i> <i class="far fa-sun"></i></div>
                    <div>1 <i class="far fa-sun"></i> <i class="far fa-sun"></i> <i class="far fa-sun"></i></div>
                    <div>1,16 <i class="far fa-sun"></i> <i class="far fa-sun"></i> <i class="far fa-sun"></i></div>
                </div>

                <div class="plastOkna__table2">
                    <div style="text-align: left">Снижение шума</div>
                    <div>0,65 <i class="fas fa-volume-up"></i></div>
                    <div>0,8 <i class="fas fa-volume-up"></i></div>
                    <div>0,82 <i class="fas fa-volume-up"></i></div>
                    <div>1 <i class="fas fa-volume-up"></i></div>
                    <div>1,16 <i class="fas fa-volume-up"></i></div>
                </div>
                <div class="plastOkna__table2">
                    <div style="text-align: left">Количество камер</div>
                    <div>0,65 </div>
                    <div>0,8 </div>
                    <div>0,82 </div>
                    <div>1 </div>
                    <div>1,16</div>
                </div>
                <div class="plastOkna__table2">
                    <div style="text-align: left">Ширина профиля, мм</div>
                    <div>0,65 </div>
                    <div>0,8 </div>
                    <div>0,82 </div>
                    <div>1 </div>
                    <div>1,16 </div>
                </div>
                <div class="plastOkna__table2">
                    <div style="text-align: left">Ширина стеклопакета, мм</div>
                    <div>0,65 </div>
                    <div>0,8 </div>
                    <div>0,82 </div>
                    <div>1</div>
                    <div>1,16 </div>
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
                    <button class="btn-main" data-toggle="modal" data-target="#modal-zamer" data-title="Заказать окно" data-msg="Мы перезвоним Вам в течении 2 минут.">Заказать</button>
                </div>
                <div>
                    <img src="../../images/plastikovoye-okno-rehau-otkryvayutsya-dve-stvorki.jpg" alt="plastikovoye-okno-rehau-otkryvayutsya-dve-stvorki">
                    <h4>Одностворчатое окно <br> 900×1400</h4>
                    <p>Rehau E60 <span class="orangeColor">1835</span> грн.</p>
                    <button class="btn-main" data-toggle="modal" data-target="#modal-zamer" data-title="Заказать окно" data-msg="Мы перезвоним Вам в течении 2 минут.">Заказать</button>
                </div>
                <div id="odnostvorchatoye">
                    <img src="../../images/plastikovoye-okno-rehau-dve-stvorki-povorotno-otkidnyye.jpg" alt="plastikovoye-okno-rehau-dve-stvorki-povorotno-otkidnyye">
                    <h4>Одностворчатое окно <br> 900×1400</h4>
                    <p>Rehau E60 <span class="orangeColor">1835</span> грн.</p>
                    <button class="btn-main" data-toggle="modal" data-target="#modal-zamer" data-title="Заказать окно" data-msg="Мы перезвоним Вам в течении 2 минут.">Заказать</button>
                </div>
            </div>
        </div>

        <div class="row plastOkna__block2">
            <div class="col-lg-12">
                <h2 style="margin: 60px 0 40px;">ПВХ-окна REHAU — надежность, удобство, доступные цены</h2>
                <p>Профили REHAU выпускает один из самых известных и крупных на российском рынке производителей. Существует как минимум 6 аргументов выбрать этот бренд.</p>
                <ul>
                    <li>
                        <h4><span class="decimal">1</span> <span style="">Долговечность.</span></h4>
                        Компания REHAU более 70 лет успешно производит полимерные конструкции, в том числе для изготовления оконных систем. Она разработала множество технических решений с превосходными эксплуатационными свойствами. Продукция немецкого бренда востребована во всем мире и известна высоким качеством. В результате испытаний в Научно-исследовательском институте строительной физики РААСН долговечность конструкций оценили в 60 условных лет.
                    </li>
                    <li>
                        <h4><span class="decimal">2</span> <span style="">Долговечность.</span></h4>
                        Компания REHAU более 70 лет успешно производит полимерные конструкции, в том числе для изготовления оконных систем. Она разработала множество технических решений с превосходными эксплуатационными свойствами. Продукция немецкого бренда востребована во всем мире и известна высоким качеством. В результате испытаний в Научно-исследовательском институте строительной физики РААСН долговечность конструкций оценили в 60 условных лет.
                    </li>
                    <li>
                        <h4><span class="decimal">3</span> <span style="">Долговечность.</span></h4>
                        Компания REHAU более 70 лет успешно производит полимерные конструкции, в том числе для изготовления оконных систем. Она разработала множество технических решений с превосходными эксплуатационными свойствами. Продукция немецкого бренда востребована во всем мире и известна высоким качеством. В результате испытаний в Научно-исследовательском институте строительной физики РААСН долговечность конструкций оценили в 60 условных лет.
                    </li>
                    <li>
                        <h4><span class="decimal">4</span> <span style="">Долговечность.</span></h4>
                        Компания REHAU более 70 лет успешно производит полимерные конструкции, в том числе для изготовления оконных систем. Она разработала множество технических решений с превосходными эксплуатационными свойствами. Продукция немецкого бренда востребована во всем мире и известна высоким качеством. В результате испытаний в Научно-исследовательском институте строительной физики РААСН долговечность конструкций оценили в 60 условных лет.
                    </li>
                    <li>
                        <h4><span class="decimal">5</span> <span style="">Долговечность.</span></h4>
                        Компания REHAU более 70 лет успешно производит полимерные конструкции, в том числе для изготовления оконных систем. Она разработала множество технических решений с превосходными эксплуатационными свойствами. Продукция немецкого бренда востребована во всем мире и известна высоким качеством. В результате испытаний в Научно-исследовательском институте строительной физики РААСН долговечность конструкций оценили в 60 условных лет.
                    </li>
                    <li>
                        <h4><span class="decimal">6</span> <span style="">Долговечность.</span></h4>
                        Компания REHAU более 70 лет успешно производит полимерные конструкции, в том числе для изготовления оконных систем. Она разработала множество технических решений с превосходными эксплуатационными свойствами. Продукция немецкого бренда востребована во всем мире и известна высоким качеством. В результате испытаний в Научно-исследовательском институте строительной физики РААСН долговечность конструкций оценили в 60 условных лет.
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