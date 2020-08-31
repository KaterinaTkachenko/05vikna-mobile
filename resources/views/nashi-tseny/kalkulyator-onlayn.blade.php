@extends('layouts.main-layout')
@section('main')
<div class="container" id="calc">
    <div class="row">
        <div class="col-12">
            <h1>Калькулятор пластиковых окон</h1>
        </div>             
        {{-- <div class="row calc d-flex "> --}}
        <div class="l-column col-12 col-lg-6 col-md-12 col-sm-12">
            <div class="calc__box">
                <h3>Что рассчитать?</h3>
                <div class="calc__box1 d-flex justify-content-between">
                    <select size="1" class="select1">
                        <option value="Окна">Окна</option>
                        <option value="Двери">Двери</option>
                    </select>
                    <ul class="calc__lay__selector d-flex justify-content-end wins">
                        <li class="calc_active" data-wins-section = "1" data-name ="Односекционное окно">
                            <img src="../../images/lay1-thumb.png" title="Односекционное окно">
                        </li>
                        <li data-wins-section = "2" data-name ="Двухсекционное окно">
                            <img src="../../images/lay2-thumb.png" title="Двухсекционное окно">
                        </li>
                        <li data-wins-section = "3" data-name ="Трёхсекционное окно">
                            <img src="../../images/lay3-thumb.png" title="Трёхсекционное окно">
                        </li>
                        <li data-wins-section = "4" data-name ="Четырёхсекционное окно">
                            <img src="../../images/lay4-thumb.png" title="Четырёхсекционное окно">
                        </li>
                    </ul>                    

                    <ul class="calc__lay__selector d-flex justify-content-start doors hidden">
                        <li class="calc_doors_active" data-doors-section = "1" data-name ="Дверь">
                            <img src="../../images/layd-thumb.png" title="Дверь">
                        </li>
                        <li data-doors-section = "2" data-name ="Односекционное окно и дверь">
                            <img src="../../images/lay1d-thumb.png" title="Односекционное окно и дверь">
                        </li>
                        <li data-doors-section = "3" data-name ="Двухсекционное окно и дверь">
                            <img src="../../images/lay2d-thumb.png" title="Двухсекционное окно и дверь">
                        </li>
                    </ul>
                </div>
            </div>            
            <div class="calc__box calc__box2">
                <h3>Дополнительные опции</h3>
                <div class="d-flex justify-content-between calc__choose__params">
                    <label>Тип профиля</label>
                    <select size="1" class="select2">
                        <option value="REHAU euro 60">REHAU euro 60</option>
                        <option value="REHAU euro 70">REHAU euro 70</option>
                        <option value="REHAU Brillant">REHAU Brillant</option>
                        <option value="REHAU Synego">REHAU Synego</option>
                        <option value="REHAU Geneo">REHAU Geneo</option>
                    </select>
                </div>
                <div class="d-flex justify-content-between calc__choose__params">
                    <label>Стеклопакет</label>
                    <select size="1" class="select3">
                        <option value="Стандартный">Стандартный</option>
                        <option value="Теплосберегающий">Теплосберегающий</option>
                        <option value="Солнцезащитный">Солнцезащитный</option>
                        <option value="Шумозащитный">Шумозащитный</option>
                    </select>
                </div>
                <div class="d-flex justify-content-between calc__choose__params">
                    <label>Ширина подоконника</label>
                    <select size="1" class="select4">
                        <option value="Нет">Нет</option>
                        <option value="150 мм">150 мм</option>
                        <option value="200 мм">200 мм </option>
                        <option value="250 мм">250 мм</option>
                        <option value="300 мм">300 мм</option>
                        <option value="350 мм">350 мм</option>
                        <option value="400 мм">400 мм</option>
                        <option value="450 мм">450 мм</option>
                        <option value="500 мм">500 мм</option>
                    </select>
                </div>
                <div class="d-flex justify-content-between calc__choose__params">
                    <label>Ширина отлива</label>
                    <select size="1" class="select5">
                        <option value="Нет">Нет</option>
                        <option value="Менее 100 мм">Менее 100 мм</option>
                        <option value="100-200 мм">100-200 мм</option>
                        <option value="200-250 мм">200-250 мм</option>
                        <option value="250-400 мм">250-400 мм</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="r-column col-12 col-lg-6 col-md-12 col-sm-12">
            <div class="calc__box">
                <h3>Задайте параметры</h3>
                <div class="b-helpinfo">
                    <div class="wincalc-clear"></div>
                </div>
                <div class="calc__params__img d-flex justify-content-center text-center">
                   <div class="slideshow-container">                        
                        <div class="mySlides1" onclick="plusSlides(1,0)">
                          <img src="../../images/leaf-x.png">
                          <div class="wincalc-layout-label" label-id="leaf_left" >Глухая створка</div>
                        </div>          
                        <div class="mySlides1" onclick="plusSlides(1,0)">
                          <img src="../../images/leaf-l.png">
                          <div class="wincalc-layout-label" label-id="leaf_left" >Повортная влево</div>
                        </div>                
                        <div class="mySlides1" onclick="plusSlides(1,0)">
                          <img src="../../images/leaf-lu.png">
                          <div class="wincalc-layout-label" label-id="leaf" >Повортно/откидная левая</div>
                        </div>
                        <div class="mySlides1" onclick="plusSlides(1,0)">
                            <img src="../images/leaf-r.png" alt="slider4">
                            <div class="wincalc-layout-label" label-id="leaf" >Повортная вправо</div>                              
                        </div>
                        <div class="mySlides1" onclick="plusSlides(1,0)">
                            <img src="../images/leaf-ru.png" alt="slider5">
                            <div class="wincalc-layout-label" label-id="leaf" >Повортная/откидная правая</div>                               
                        </div>

                        <div class="sizer-up" title="Ширина" style="position: absolute; left: 1px; top: -13px; width: 98px; height: 12px;"><div class="sizer-up-line" style="position: absolute; left: 0px; top: 5px; width: 98px;"></div><div class="sizer-up-arrow1" style="position: absolute; left: 0px; top: 0px;"></div><div class="sizer-up-arrow2" style="position: absolute; left: 84px; top: 0px;"></div><input type="text" name="width" maxlength="4" value="700" style="position: absolute; left: 21px; top: -13.5px;"></div>

                        <div class="sizer-right" title="Высота" style="position: absolute; left: 101px; top: 0px; width: 12px; height: 198px;"><div class="sizer-right-line" style="position: absolute; left: 13px; top: 0px; height: 198px;"></div><div class="sizer-right-arrow1" style="position: absolute; left: 7.5px; top: 0px;"></div><div class="sizer-right-arrow2" style="position: absolute; left: 7.5px; top: 186px;"></div><input type="text" name="height" maxlength="4" value="1500" style="position: absolute; left: -10px; top: 85.5px;"></div>
                    </div>
                </div>
            </div>
            <div class="calc__box">
                <h3>Введите контактные данные</h3>
                <div>
                    <div class="d-flex justify-content-between calc__box__form">
                        <div class="wrapper">
                            <i class="fa fa-user"></i>
                            <input type="text" name="name" id="username" class="form-control" placeholder="Имя">
                        </div>
                        <div class="wrapper">
                            <i class="fas fa-phone-alt"></i>
                            <input type="tel" name="phone" id="phone_calc" class="phone form-control" placeholder="Телефон" required>
                        </div>
                    </div>
                    <div class="text-center calc__btnDiv">
                        <button class="btn-main submitBtn"
                            onclick="submitForm('Калькулятор онлайн', 'Форма', '#phone_calc')">Рассчитать</button>                                                    
                    </div>                    
                </div>
            </div>
        </div>
    </div>
    <div class="row calc__usage">
        <div class="col-12">
            <h2>Как пользоваться оконным калькулятором?</h2>
            <p>Для Вашего удобства расчет стоимости пластикового окна мы разделили на четыре этапа:</p>
            <ol>
                <li>Выбор типа окна/двери.</li>
                <li>Настройка габаритов и свойств элементов конструкции.</li>
                <li>Указание дополнительных характеристик.</li>
                <li>Расчет стоимости окна/двери.</li>
            </ol>
            <p>Калькулятор окон Rehau поможет Вам быстро узнать стоимость нужной конструкции по указанным параметрам. После заполнения всех полей калькулятора, наши менеджеры сразу начнут расчеты в профессиональной программе. Вам перезвонят по телефону и озвучат предложение на установку окон с точной ценой. В случае любых вопросов, свяжитесь, пожалуйста, с нами по телефону.</p>            
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