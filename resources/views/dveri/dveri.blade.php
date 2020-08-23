@extends('layouts.main-layout')
@section('main')
    <div class="container dveri">
        <div class="row">
            <div class="col-lg-12">
                <h1 style="margin: 40px 0">Двери REHAU - гарантированное качество</h1>
                <p>ПВХ-двери REHAU с превосходной эргономикой хорошо защищают от уличного шума, осадков, холода, могут устанавливаться в сложных условиях эксплуатации, эффектно смотрятся, износоустойчивы и прочны. Мы предлагаем пластиковые двери REHAU в Москве. Варианты остекления разнообразны по конфигурации и цвету профиля.</p>

                <div class="dveri__flex1 d-flex flex-wrap justify-content-between">
                    <div>
                        <img src="../images/dveri/img_03.png" alt="">
                        <p>Самые доступные цены</p>
                    </div>
                    <div>
                        <img src="../images/dveri/img_05.png" alt="">
                        <p>Контроль качества на каждой стадии изготовления</p>
                    </div>
                    <div>
                        <img src="../images/dveri/img_07.png" alt="">
                        <p>Оперативность изготовления</p>
                    </div>
                    <div>
                        <img src="../images/dveri/img_09.png" alt="">
                        <p>Монтаж выполняют профессионалы</p>
                    </div>
                    <div>
                        <img src="../images/dveri/img_11.png" alt="">
                        <p>Гарантия на монтаж 5 лет</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <hr style="align:center; width:100%; color:#dddddd" />
    </div>

    <div class="container dveri">
        <div class="row">
            <div class="col-12">
                <h2 style="margin: 40px 0">Металлопластиковые двери REHAU для комфорта и уюта</h2>
                <div class="dveri__flex2 d-flex flex-wrap justify-content-around">
                    <div class="shadowBox">
                        <a href="{{route('balkonnyye')}}">
                            <img src="../images/dveri/dveri-balkonnyye.png" alt="Балконные двери">                    
                            <h4 class="dveri__flex2__title">Балконные двери</h4>
                        </a>
                        <p class="text-center">от <span class="dveri__flex2__price">2000</span> грн.</p>
                        <a href="{{route('balkonnyye')}}" class="btn-main">Подробнее</a>
                    </div>
                    <div class="shadowBox">
                        <a href="{{route('vkhodnyye')}}">
                            <img src="../images/dveri/dveri-vkhodnyye.png" alt="Входные двери">
                            <h4 class="dveri__flex2__title">Входные двери</h4>
                        </a>
                        <p class="text-center">от <span class="dveri__flex2__price">2000</span> грн.</p>
                        <a href="{{route('vkhodnyye')}}" class="btn-main">Подробнее</a>
                    </div>
                    <div class="shadowBox">
                        <a href="{{route('mezhkomnatnyye')}}">
                            <img src="../images/dveri/dveri-mezhkomnatnyye.png" alt="Межкомнатные двери">
                            <h4 class="dveri__flex2__title">Межкомнатные двери</h4>                        
                        </a>
                        <p class="text-center">от <span class="dveri__flex2__price">2000</span> грн.</p>
                        <a href="{{route('mezhkomnatnyye')}}" class="btn-main">Подробнее</a>
                    </div>
                </div>

                <p>Пластиковые дверные системы гарантируют покой и тишину, надежно защищают от незваных гостей и украшают дом снаружи и изнутри. Они удачно дополняют здания с любым дизайном. Заказать двери из профиля немецкого бренда высокого качества с любыми габаритами, конфигурацией и оформлением вы можете в «Оконных технологиях». Мы изготавливаем конструкции с высокими эксплуатационными параметрами, разными механизмами открывания, профильными фактурами. В нашем каталоге представлены разнообразные пластиковые двери REHAU: входные, межкомнатные, для балконов, офисов.</p>

                <div class="dveri__flex3 shadowBox d-flex flex-wrap justify-content-between">
                    <div class="dveri__flex3__item1">
                        <img src="../images/dveri/dvernoy-plastikovyy-profil-REHAU-60-mm.jpg" alt="REHAU-60">
                    </div>
                    <div class="dveri__flex3__item2">
                        <h4>Дверной пластиковый профиль REHAU 60 мм</h4> 
                        <p>Сочетание надежной теплоизоляции и эффектного дизайна. Установка входной конструкций из ПВХ дает необходимый уровень тишины. У них 4 коробки и 2 створки, стеклянное наполнение до 33 мм.</p>
                        <p><strong>Преимущества:</strong></p>
                        <ul>
                            <li>Взломобезопасность и стабильность: запирающие механизмы прикрепляются к 3 пластиковым стенкам и металлокаркасу.</li>
                            <li>Усовершенствованные статические характеристики, надежная теплоизоляция.</li>
                            <li>Безупречно ровная износоустойчивая поверхность.</li>
                            <li>Разнообразное исполнение.</li>
                            <li>Защита от ветра, осадков, холода, шума, легкость обслуживания.</li>
                            <li>Предусмотрены беспороговые конструкции.</li>
                        </ul>
                    </div>
                </div>
                
                <div class="dveri__flex3 shadowBox d-flex flex-wrap justify-content-between flex-lg-row-reverse">
                    <div class="dveri__flex3__item1">
                        <img src="../images/dveri/dvernoy-plastikovyy-profil-REHAU-70-mm.jpg" alt="REHAU-70">
                    </div>                  
                    <div class="dveri__flex3__item2">
                        <h4>Дверной пластиковый профиль REHAU 70 мм</h4> 
                        <p>Элегантно смотрится и хорошо удерживает тепло. Удачно дополняет интерьеры разных стилей и надежно защищает от холода. Очень прочный — у профиля 4 камеры, увеличена глубина монтажа, есть стальное армирование.</p>
                        <p><strong>Особенности:</strong></p>
                        <ul>
                            <li>Монтажная глубина до 70 мм.</li>
                            <li>5 выгодных сторон пластика 70 мм.</li>
                            <li>Коэффициент теплоизоляции — 1,7 Вт/м2°К.</li>
                            <li>Высокая звукоизоляция.</li>
                            <li>Элегантный вид.</li>
                            <li>Двухконтурное уплотнение обеспечивает герметичность.</li>                            
                            <li>Идеально ровная поверхность нетребовательна в уходе и удобна.</li>
                        </ul>
                    </div>                    
                </div>  

                <h2 style="margin: 50px 0 30px">С нами удобно работать</h2>
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

                <p style="margin: 20px 0 40px">Купить пластиковую дверь REHAU — значит сделать выбор в пользу качества и безупречной эстетики. Это идеальное решение для монтажа в административных, офисных, торговых зданиях. Дверь может устанавливаться и в коттеджах, квартира, обеспечивает комфорт, тишину, тепло- и звукозащиту. В «Оконных технологиях» цены на ПВХ-двери REHAU доступны, а качество продукции неизменно высокое. Заказывайте изделия для оформления дверных проемов в нашей компании по телефону или оставив заявку на обратный звонок.</p>                
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