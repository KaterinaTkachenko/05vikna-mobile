@extends('layouts.main-layout')
@section('main')
<div class="container stati">
    <div class="row">
        <div class="col-12">
            <h1 style="margin: 40px 0">Статьи</h1>
        </div>
        <div class="col-lg-2 d-none d-lg-block">
            <ul class="about__hrefs">
                <li>
                    <a href="{{route('about')}}">О нас</a>
                </li>
                <li>
                    <a href="{{route('sertifikaty')}}">Сертификаты</a>
                </li>
                <li>
                    <a href="{{route('otzyvy')}}">Отзывы</a>
                </li>
            </ul>
        </div>
        <div class="col-lg-10 col-md-12 col-sm-12 col-12 about__content mb-5">
            <div class="stati__flex1 d-flex flex-wrap justify-content-around">
                @foreach($articles as $article)
                    <div class="stati__item shadowBox mb-5">
                    <a href="{{route('articleInfo', $article->slug)}}">
                        <img src="{{$article->img}}" alt="{{$article->name}}"></a>
                        <div class="stati__item__desc p-4">
                            <a href="{{route('articleInfo', $article->slug)}}">
                                <div class="stati__item__date">{{Carbon\Carbon::parse($article->date)->format('d.m.Y')}}</div>
                                <h3>{{$article->name}}</h3>
                            </a>
                        </div>
                    </div>
                @endforeach
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