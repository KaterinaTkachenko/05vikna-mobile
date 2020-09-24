<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lead;
use App\Work;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $title = "Пластиковые окна Rehau в Днепре и Запорожье";
        $keywords = "Пластиковые окна, окна пвх";
        $description = "Мобильные окна – изготовление, установка и продажа пластиковых окон REHAU в Днепре и Запорожье от производителя. Гарантия качества – 10 лет.";
        return view('home', compact('title', 'keywords', 'description'));
    }
    
    public function about()
    {
        $title = "Компания «Мобильные окна» - официальный представитель REHAU в Днепре и Запорожье!";
        $keywords = "мобильные окна";
        $description = "Изготовление, установка и продажа пластиковых окон - Подробная информация о компании «Мобильные окна» в Днепре и Запорожье.";

        return view('o-nas.about', compact('title', 'keywords', 'description'));
    }

    public function sertifikaty()
    {
        $title = "Сертификаты на пластиковые окна и профили REHAU - Салон энергосберегающих окон РЕХАУ";
        $keywords = "сертификаты REHAU";
        $description = "Изготовление, установка и продажа пластиковых окон. Сертификаты на пластиковые окна и профили REHAU.";

        return view('o-nas.sertifikaty', compact('title', 'keywords', 'description'));
    }

    public function stati()
    {
        $title = "Пластиковые и деревянные окна - Блог Мобильные окна";
        $keywords = "пластиковые окна, металлопластиковые окна, выбор, установка, стекла, фурнитура";
        $description = "Все про пластиковые и деревянные окна: выбор, замер, расчет, установка, стекла, фурнитура и много другое в блоге Мобильных окон.";

        return view('o-nas.stati', compact('title', 'keywords', 'description'));
    }

    public function otzyvy()
    {
        $title = "Отзывы о компании Мобильные окна - окна и двери REHAU";
        $keywords = "отзывы REHAU";
        $description = "Читайте отзывы клиентов о компании Мобильные окна. Изготовление, установка и продажа пластиковых окон и балконов в Днепре и Запорожье.";

        return view('o-nas.otzyvy', compact('title', 'keywords', 'description'));
    }

    public function kalkulyatoronlayn()
    {
        $title = "Оконный калькулятор REHAU — Рассчитать стоимость окон ПВХ";
        $keywords = "калькулятор окон REHAU, цена на окна, стоимость окон";
        $description = "Калькулятор пластиковых окон из профиля REHAU. Удобный онлайн расчет стоимости установки пластиковых окон в Днепре и Запорожье. Для расчета цены, укажите размеры, форму и тип профиля.";
        
        
        return view('nashi-tseny.kalkulyator-onlayn', compact('title', 'keywords', 'description'));
    }

    public function nashiraboty()
    {
        $title = "Выполненные работы по пластиковым окнам и балконам – Мобильные окна";
        $keywords = "выполненные работы";
        $description = "Изготовление, установка и продажа пластиковых окон. Наши работы.";

        $works = Work::get();
        return view('nashi-raboty', compact('works', 'title', 'keywords', 'description'));
    }

    public function nashirabotyInfo($slug)
    {
        $work = Work::where('slug', $slug)->first();
        return view('rabotaInfo', compact('work'));        
    }

    public function aktsii()
    {
        $title = "Акции на пластиковые окна - Купить окна РЕХАУ со скидкой до 50%";
        $keywords = "акции окна";
        $description = "Изготовление, установка и продажа пластиковых окон - Акции и скидки на окна и балконы от «Мобильные окна».";

        return view('aktsii-i-skidki', compact('title', 'keywords', 'description'));
    }

    public function kontakty()
    {
        $title = "Контакты «Мобильные окна» - Офисы продаж окон REHAU в Днепре и Запорожье";
        $keywords = "мобильные окна";
        $description = "Мобильные окна - изготовление, установка и продажа пластиковых окон REHAU в Днепре и Запорожье – Контакты.";

        return view('kontakty.kontakty', compact('title', 'keywords', 'description'));
    }    

    public function plastikovyyeokna()
    {
        $title = "Окна REHAU в Днепре и Запорожье - Купить пластиковые окна РЕХАУ на официальном сайте";
        $keywords = "купить пластиковые окна, окно пвх, пластиковое окно запорожье, пластиковое окно днепр, пластиковые окна";
        $description = "Изготовление, установка и продажа пластиковых окон REHAU в Днепре и Запорожье недорого. Купить окна РЕХАУ по ценам от официального производителя.";
        return view('plastikovyye-okna.plastikovyye-okna', compact('title', 'keywords', 'description'));
    }

    public function rehaueuro60()
    {
        $title = "Профиль REHAU Euro 60 - Цены на окна Рехау Евро 60 - Технические характеристики";
        $keywords = "rehau, окна rehau, профиль рехау, рехау окно, rehau euro 60";
        $description = "Изготовление, установка и продажа пластиковых оконных систем из профиля Rehau Euro 60 в Днепре и Запорожье. Цены на трехкамерные пластиковые окна Рехау Евро 60 от производителя!";
        return view('plastikovyye-okna.rehau-euro-60', compact('title', 'keywords', 'description'));
    }

    public function rehaueuro70()
    {
        $title = "Профиль REHAU Euro 70 - Цены на окна РЕХАУ Евро 70 - Технические характеристики";
        $keywords = "rehau, окна rehau, профиль рехау, рехау окно, rehau euro 70";
        $description = "Изготовление, установка и продажа пластиковых оконных систем из профиля Rehau Euro 70. Цены на пятикамерные пластиковые окна РЕХАУ Евро 70 от производителя!";
        return view('plastikovyye-okna.rehau-euro-70', compact('title', 'keywords', 'description'));
    }

    public function brillant()
    {
        $title = "Профиль REHAU Brillant-Design - Цены на окна РЕХАУ Бриллиант - Технические характеристики";
        $keywords = "rehau, окна rehau, профиль рехау, рехау окно, rehau brillant";
        $description = "Изготовление, установка и продажа пластиковых оконных систем из профиля Rehau Brillant-Design. Цены на пятикамерные пластиковые окна РЕХАУ Бриллиант от производителя!";
        return view('plastikovyye-okna.rehau-brillant', compact('title', 'keywords', 'description'));
    }

    public function synego()
    {
        $title = "Профиль REHAU Synego - Цены на окна РЕХАУ Синего - Технические характеристики";
        $keywords = "rehau, окна rehau, профиль рехау, рехау окно,  rehau synego";
        $description = "Изготовление, установка и продажа пластиковых оконных систем из профиля Rehau Synego. Цены на пятикамерные пластиковые окна РЕХАУ Синего от производителя!";
        return view('plastikovyye-okna.rehau-synego', compact('title', 'keywords', 'description'));
    }

    public function geneo()
    {
        $title = "Профиль REHAU GENEO - Цены на окна ГЕНЕО - Технические характеристики";
        $keywords = "rehau, окна rehau, профиль рехау, рехау окно, rehau geneo";
        $description = "Изготовление, установка и продажа пластиковых оконных систем из профиля Rehau GENEO в Днепре и Запорожье. Цены на пластиковые окна РЕХАУ Генео от производителя!";
        return view('plastikovyye-okna.rehau-geneo', compact('title', 'keywords', 'description'));
    }

    public function laminatsiyey()
    {
        $title = "Купить пластиковые окна с ламинацией - Цены на ламинированные окна REHAU в Днепре и Запорожье";
        $keywords = "ламинация окон, ламинация окон цвета, ламинация профиля окна, ламинированные окна, окно коричневый, окно под дерево, цвет окно";
        $description = "Закажите ламинированные пластиковые окна в компании Мобильные окна. Изготовление, установка и продажа ПВХ-окон с ламинацией из профиля REHAU в Днепре и Запорожье.";
        return view('plastikovyye-okna.okna-s-laminatsiyey', compact('title', 'keywords', 'description'));
    }

    public function steklopakety()
    {
        $title = "Стеклопакеты REHAU - Цены на стеклопакеты в Днепре и Запорожье";
        $keywords = "двойной стеклопакет, двухкамерный стеклопакет, замена стеклопакета, окна рехау стеклопакеты, окна стеклопакеты, пластиковые окна стеклопакеты, пластиковые стеклопакеты, стеклопакеты, тройной стеклопакет";
        $description = "Закажите пластиковые окна со стеклопакетами в компании Мобильные окна. Изготовление, установка и продажа пластиковых окон REHAU со стеклопакетами. Доступные цены. Гарантия 10 лет.";
        return view('plastikovyye-okna.steklopakety', compact('title', 'keywords', 'description'));
    }

    public function setki()
    {
        $title = "Москитные сетки на окна REHAU - Изготовление и продажа - Цены в Днепре и Запорожье";
        $keywords = "москитная сетка, москитная сетка купить, москитная сетка цена";
        $description = "Изготовление, установка и продажа москитных сеток для пластиковых окон из профиля REHAU. Доступные цены. Гарантия 10 лет.";
        
        return view('plastikovyye-okna.moskitnyye-setki', compact('title', 'keywords', 'description'));
    }

    public function podokonniki()
    {
        $title = "Подоконники и откосы для пластиковых окон REHAU - Цены в Днепре и Запорожье";
        $keywords = "купить подоконник, подоконник, подоконник пвх, подоконник пластиковый";
        $description = "Изготовление, установка и продажа подоконников для окон REHAU. Доступные цены. Гарантия 10 лет.";
        return view('plastikovyye-okna.podokonniki', compact('title', 'keywords', 'description'));
    }

    public function otlivy()
    {
        $title = "Отливы для окон REHAU - Изготовление и продажа - Цены в Днепре и Запорожье";
        $keywords = "отлив, отлив купить";
        $description = "Изготовление, установка и продажа отливов для пластиковых окон из профиля REHAU. Доступные цены. Гарантия 10 лет.";
        return view('plastikovyye-okna.otlivy', compact('title', 'keywords', 'description'));
    }

    public function furnitura()
    {
        $title = "Оконная фурнитура MACO, ROTO, GU, WINKHAUS, AXOR для окон REHAU: ручки, аксессуары - Цены в Днепре и Запорожье";
        $keywords = "отлив, отлив купитьmaco, axor, gu, winkhaus, купить фурнитуру для окон, фурнитура для окон, фурнитура для окон и дверей, фурнитура для пластиковых окон";
        $description = "Замена, установка и продажа фурнитуры MACO, ROTO, GU, WINKHAUS, AXOR для пластиковых окон из профиля REHAU. Доступные цены. Гарантия 5 лет.";

        return view('plastikovyye-okna.furnitura', compact('title', 'keywords', 'description'));
    }

    public function derevyannyyeokna()
    {
        $title = "Деревянные окна в Днепре и Запорожье";
        $keywords = "деревянные окна, деревянные окна евро, купить деревянные окна";
        $description = "Деревянные окна на заказ, любой конфигурации и сложности - надежность, долговечность, энергоэффективность, гарантия 5 лет. Характеристики, цены.";

        return view('derevyannyye-okna', compact('title', 'keywords', 'description'));
    }

    public function balkonyilodzhii()
    {
        $title = "Остекление балконов и лоджий под ключ в Днепре и Запорожье - Быстро и недорого";
        $keywords = "балкон, балкон запорожье, балкон ключ, балкон цена, балконы днепр, купить балкон, лоджия под ключ, лоджия ремонт, лоджия цена, обшивка балкона, остекление балконов, отделка балкона, пластиковый балкон, ремонт балкона";
        $description = "Изготовление, остекление и отделка балконов и лоджий недорого в Днепре и Запорожье. Цены на остекление и отделку.";

        return view('balkony-i-lodzhii', compact('title', 'keywords', 'description'));
    }

    public function oknadlyadoma()
    {
        $title = "Купить металлопластиковые окна в Днепре и Запорожье у производителя";
        $keywords = "окна в дом, окна в кирпичном доме, окна в частном доме, пластиковые окна в дом, пластиковый окно, установка окон в дом";
        $description = "Современные металлопластиковые окна в Днепре и Запорожье. Производство -> доставка -> установка -> гарантия - 10 лет! Звоните ☎ 050 322 41 44.";

        return view('okna-dlya-doma', compact('title', 'keywords', 'description'));
    }

    public function dveri()
    {
        $title = "Пластиковые двери REHAU - Изготовление и продажа - Цены в Днепре и Запорожье";
        $keywords = "дверь пвх, дверь цена, купить дверь, купить пластиковую дверь, пластиковые двери, пластиковые двери фото, пластиковые двери цена";
        $description = "Закажите пластиковые двери REHAU в компании Мобильные окна. Изготовление, установка и продажа пластиковых дверей из немецкого профиля REHAU в Днепре и Запорожье по низким ценам!";

        return view('dveri.dveri', compact('title', 'keywords', 'description'));
    }

    public function vkhodnyye()
    {
        $title = "Входные пластиковые двери REHAU в Днепре и Запорожье";
        $keywords = "входной дверь купить, входной дверь цена, входные пластиковые двери для дома цена, дверь входной, пластиковая дверь входная цена, пластиковые двери входные";
        $description = "Закажите входные двери REHAU в компании Мобильные окна. Изготовление, установка и продажа входных пластиковых дверей для домов и коттеджей из немецкого профиля REHAU в Днепре и Запорожье по низким ценам!";

        return view('dveri.vkhodnyye', compact('title', 'keywords', 'description'));
    }

    public function mezhkomnatnyye()
    {
        $title = "Офисные пластиковые двери REHAU - Цены на межкомнатные двери REHAU в Днепре и Запорожье";
        $keywords = "пластиковые двери межкомнатные, раздвижные пластиковые двери";
        $description = "Закажите офисные двери REHAU в компании Мобильные окна. Изготовление, установка и продажа пластиковых офисных дверей из немецкого профиля REHAU в Днепре и Запорожье по низким ценам!";

        return view('dveri.mezhkomnatnyye', compact('title', 'keywords', 'description'));
    }

    public function balkonnyye()
    {
        $title = "Балконные двери REHAU - Изготовление и продажа недорого в Днепре и Запорожье";
        $keywords = "балконный блок установка, балконный блок цена, балконный дверь, купить балконную дверь, пластиковая балконная дверь, пластиковая дверь гармошка";
        $description = "Закажите двери для балкона REHAU в компании Мобильные окна. Изготовление, установка и продажа пластиковых балконных дверей из немецкого профиля REHAU в Днепре и Запорожье по низким ценам!";

        return view('dveri.balkonnyye', compact('title', 'keywords', 'description'));
    }

    public function uslugi()
    {
        $title = "Услуги и сервис - Изготовление, установка и продажа пластиковых окон";
        $keywords = "установка окон, замер окон, вызов замерщика";
        $description = "Услуги и сервис - Изготовление, установка и продажа пластиковых окон.";

        return view('uslugi-i-servis.uslugi-i-servis', compact('title', 'keywords', 'description'));
    }

    public function vyzov()
    {
        $title = "Вызов замерщика пластиковых окон в Днепре и Запорожье";
        $keywords = "замер окон, замер окон днепр, замер окон запорожье";
        $description = "Изготовление, установка и продажа пластиковых окон. Вызов замерщика окон по Днепру и Запорожью! Пластиковые окна REHAU.";

        return view('uslugi-i-servis.vyzov-zamershchika', compact('title', 'keywords', 'description'));
    }

    public function ustanovka()
    {
        $title = "Установка пластиковых окон в Днепре и Запорожье - Цены на монтаж окон ПВХ";
        $keywords = "монтаж окно пластиковый, установка окон, установка окон цена, установка пластиковых окон, установка пластиковых окон цена";
        $description = "Мобильные окна предлагают установку пластиковых окон из профиля REHAU по выгодным ценам в Днепре и Запорожье. Пластиковые окна с установкой от профессионалов с гарантией до 50 лет.";

        return view('uslugi-i-servis.ustanovka-okon', compact('title', 'keywords', 'description'));
    }

    public function dostavka()
    {
        $title = "Доставка пластиковых окон по Днепру и Запорожью - Компания Мобильные окна";
        $keywords = "доставка пластиковых окон";
        $description = "Изготовление, установка и продажа пластиковых окон - Услуги и сервис – Доставка.";

        return view('uslugi-i-servis.dostavka-i-oplata', compact('title', 'keywords', 'description'));
    }

    public function garantiya()
    {
        $title = "Гарантия и сервис пластиковых окон РЕХАУ - Официальный дилер REHAU в Днепре и Запорожье";
        $keywords = "гарантия на окна, регулировка окон, ремонт окон";
        $description = "Изготовление, установка и продажа пластиковых окон - Услуги и сервис - Гарантия и сервис.";

        return view('uslugi-i-servis.garantiya-i-servis', compact('title', 'keywords', 'description'));
    }
}
