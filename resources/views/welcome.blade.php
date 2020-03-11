@extends('layouts.app')

@section('content')
    <div class="container">
        <section class="main-slider">
            <div class="slider__left_block">
                <h1>Обслуживаем и создаем успешные сайты с 2016 года</h1>
                <a class="btn btn-primary" href="">Смотреть портфолио</a>
            </div>
            <div class="slider__right_block">
                <img src="/img/rocket.svg" alt="Rocket" width="450px">
            </div>
        </section>


        <section class="services">
            <div class="service-title">
                <h2>Наши услуги</h2>
                <span>включают</span>
                <p>разработку цифровых продуктов и брендов для компаний любого размера.</p>
            </div>
            <div class="service-list">
                <div class="service-item">
                    <img src="/img/web-service-endi.svg" alt="">
                    <h4>Разработка веб-сайтов</h4>
                    <p>Профессиональное создание адаптивных сайтов и интернет-магазинов в Нур-Султане (Астане) и других
                        регионах, подходящие для любой сферы бизнеса.</p>
                    <a href="#">Заказать услугу</a>
                </div>
                <div class="service-item">
                    <img src="/img/mobile-service-endi.svg" alt="">
                    <h4>Мобильные приложения</h4>
                    <p>Мы занимаемся разработкой мобильных приложений уже много лет и за годы работы накопили большой
                        опыт в данной области.</p>
                    <a href="#">Заказать услугу</a>
                </div>
                <div class="service-item">
                    <img src="/img/brand-service-endi.svg" alt="">
                    <h4>Брендинг</h4>
                    <p>У нас работают профессиональные дизайнеры, внимательные к нюансам и способные быстро и
                        качественно создать визуальную составляющую бренда.</p>
                    <a href="#">Заказать услугу</a>
                </div>
                <div class="service-item">
                    <img src="/img/support-service-endi.svg" alt="">
                    <h4>Сервис и поддержка</h4>
                    <p>Полная техническая поддержка работоспособности вашего сайта 24/7, проведем необходимые доработки
                        по контенту, мета-тегам, элементам и дизайну.</p>
                    <a href="#">Заказать услугу</a>
                </div>
            </div>
        </section>
    </div>
@endsection
