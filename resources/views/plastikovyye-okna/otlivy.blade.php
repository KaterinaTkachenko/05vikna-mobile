@extends('layouts.main-layout')
@section('main')
<div class="container">
    <div class="row otlivi">
        <div class="col-lg-12">
            <h1 style="margin: 40px 0">Козырьки, отливы, нащельники</h1>
            <p>Козырьки, отливы и нащельники делаются из листового металла на специальном гибочном станке. Это позволяет сделать сложную конфигурацию элемента для лучших эстетических и эксплуатационных характеристик. Лицевая поверхность может быть как оцинкованная так и крашенная под цвет окон.</p>
            <div class="otlivi_pic">
                <img src="../../images/otlivi/otlivy-kozyrki-nashchelniki.png" alt="Козырьки, отливы, нащельники">
                <p class="otlivi_pic_text">Обязательные элементы для балконов и лоджий — разных цветов и конфигураций. Материал — металл</p>
            </div>

            <h2 style="margin: 40px 0 20px">Отливы для окон, балконов и лоджий</h2>
            <p>Отливы устанавливаются с наружной стороны окон и предназначены для стека воды вовремя дождя, а также для защиты монтажной пены в зоне подоконного профиля. Важно правильно подобрать нужную ширину отлива, ведь если он будет очень коротким — возможно затекание воды под отливом, а если очень широкий — не избежать грохота вовремя сильного дождя.</p>

            <h2 style="margin: 40px 0 20px">Козырьки для балконов и лоджий</h2>
            <p>Козырьки применяются при остеклении балконов и лоджий и предназначены для отвода дождевых вод с целью защиты конструкции от протекания. Очень важно, чтобы замерщик выбрал правильную конфигурацию и нужную ширину козырька. Сложная конфигурация козырька позволяет сделать нужный уклон и стык козырька к плите, что в свою очередь не оставляет шансов для протекания балкона или лоджии. Что касается ширины козырька, то здесь такая же ситуация как и с отливом — короткий козырек может протекать, а слишком длинный будет сильно шуметь. По необходимости, стыки козырьков могут обрабатываться силиконом.</p>
            <p>Если Ваш балкон слит с жилым помещением или если Вы устанавливаете панорамные окна в комнате, стоит обратить внимание на звукопоглощающие козырьки. Специальное ворсистое негорючее покрытие козырька полностью ликвидирует весь шум от капель даже очень сильного дождя. Такой козырек обойдется Вам несколько дороже обычного, но он действительно этого стоит.</p>

            <h2 style="margin: 40px 0 20px">Нащельники для балконов и лоджий</h2>
            <p>Нащельники, как правило, применяются при остеклении балконов и лоджий. Это связанно с тем, что в отличии от окон, которые устанавливаются в проемы с четвертями, монтажный шов балконов и лоджий остается видимым и незащищенным от влаги и воздействия ультрафиолетовых лучей. Нащельники прикручиваются с одной стороны к металлопластиковой раме, а с другой — к стене дома. В отдельных случаях, нащельник может применяться на стыке двух конструкций.</p>
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