@extends('layouts.main-layout')
@section('main')
<div class="container nashi_raboty">
    <div class="row">
        <div class="col-lg-12">
            <h1 style="margin: 50px 0">Примеры наших работ</h1>
            <div class="nashi_raboty__flex1 d-flex flex-wrap justify-content-around">
                @foreach($works as $work)
                    <div class="nashi_raboty_item">
                        <a href="{{route('rabotaInfo', $work->slug)}}">
                        <img src="{{$work->img}}" alt="{{$work->alt}}">
                        <div><h3>{{$work->title}}</h3></a>
                            <p>{!!$work->shortDesc!!}</p>
                            <a href="{{route('rabotaInfo', $work->slug)}}" class="btn-main active">Подробнее</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<div style="position: relative">
    <div class="container-fluid home__zamer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 style="margin: 40px 0">БЕСПЛАТНАЯ КОНСУЛЬТАЦИЯ СПЕЦИАЛИСТА НА ВАШЕМ ОБЪЕКТЕ</h1>
                    <p class="home__zamer__text">Мы проводим полный спектр работ по разработке и изготовлению светопрозрачных конструкций. Закажите выезд специалиста на объект и изложите свои ожидания и требования. Получите исчерпывающую консультацию по интересующему продукту.</p>
                    <div class="home__form__zamer">
                        <div class="form-group d-flex align-items-center flex-wrap">    
                            <i class="fas fa-phone-alt"></i>
                            <input type="tel" name="phone" id="phone_home2" class="phone form-control" placeholder="Телефон"
                                required>
    
                            <button class="btn-main submitBtn" onclick="submitForm('Главная страница', 'Форма', '#phone_home2')">Получить консультацию</button>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</div>
@endsection