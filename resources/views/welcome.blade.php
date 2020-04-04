@extends('layouts.app')

@section('content')
    <div class="container">
        <section class="main-slider">
            <div class="slider__left_block">
                <h1>Мы создаем целостные цифровые продукты, ориентированные на пользователя и интерактивный опыт, которые помогают брендам выделиться.</h1>
                <a class="btn btn-primary" href="">Заказать сайт</a>
            </div>
            <div class="slider__right_block">
                <img src="/img/abstraction.jpg" alt="Rocket" width="450px">
            </div>
        </section>


        <section class="services">
            <div class="service-title">
                <h2>Наши услуги</h2>
                <p>включают разработку цифровых продуктов и брендов для компаний любого размера.</p>
            </div>
            <div class="service-list">
                <div class="service-item">
                    <svg class="service-icon-header" width="70" height="70" viewBox="0 0 70 70"  xmlns="http://www.w3.org/2000/svg">
                        <path class="service_icon" d="M64.1665 0H5.83337C2.61324 0.00382812 0.00382812 2.61324 0 5.83337V64.1666C0.00382812 67.3866 2.61324 69.996 5.83337 69.9999H64.1666C67.3866 69.996 69.996 67.3866 70 64.1665V5.83337C69.996 2.61324 67.3866 0.00382812 64.1665 0ZM67.6665 64.1665C67.6665 66.0994 66.0996 67.6665 64.1665 67.6665H5.83337C3.90044 67.6665 2.33337 66.0996 2.33337 64.1665V11.6666H67.6666L67.6665 64.1665ZM67.6665 9.33336H2.33337V5.83337C2.33337 3.90044 3.90044 2.33337 5.83337 2.33337H64.1666C66.0996 2.33337 67.6666 3.90044 67.6666 5.83337L67.6665 9.33336Z" fill="#3482DE"/>
                        <path class="service_icon" d="M8.16686 4.66663H7.00024C6.35588 4.66663 5.83362 5.18889 5.83362 5.83324C5.83362 6.4776 6.35588 7 7.00024 7H8.16686C8.81121 7 9.33347 6.47774 9.33347 5.83338C9.33347 5.18903 8.81121 4.66663 8.16686 4.66663Z" fill="#3482DE"/>
                        <path class="service_icon" d="M13.2769 4.75998C12.9952 4.6316 12.6718 4.6316 12.3902 4.75998C12.2489 4.81918 12.1187 4.90203 12.0052 5.00498C11.5541 5.46504 11.5541 6.20154 12.0052 6.6616C12.1187 6.76455 12.2489 6.8474 12.3902 6.9066C12.6727 7.03101 12.9944 7.03101 13.2769 6.9066C13.4182 6.8474 13.5484 6.76455 13.6619 6.6616C14.113 6.20154 14.113 5.46504 13.6619 5.00498C13.5484 4.90203 13.4182 4.81918 13.2769 4.75998Z" fill="#3482DE"/>
                        <path class="service_icon" d="M17.9477 4.749C17.5099 4.5673 17.0057 4.66833 16.672 5.00494C16.569 5.11841 16.4862 5.24857 16.427 5.38993C16.3024 5.67239 16.3024 5.99409 16.427 6.27655C16.4862 6.41792 16.569 6.54808 16.672 6.66155C17.132 7.11272 17.8685 7.11272 18.3286 6.66155C18.4315 6.54808 18.5144 6.41792 18.5736 6.27655C18.6389 6.13806 18.6709 5.9863 18.667 5.83318C18.6698 5.35931 18.3855 4.9307 17.9477 4.749Z" fill="#3482DE"/>
                        <path class="service_icon" d="M63.0002 4.66663H23.3336C22.6893 4.66663 22.167 5.18889 22.167 5.83324C22.167 6.4776 22.6893 6.99986 23.3336 6.99986H63.0002C63.6445 6.99986 64.1668 6.4776 64.1668 5.83324C64.1668 5.18889 63.6445 4.66663 63.0002 4.66663Z" fill="#3482DE"/>
                        <path class="service_icon" d="M17.9121 55.5564C17.9651 55.6052 18.0229 55.6487 18.0847 55.6859C22.4763 60.3548 28.6021 63.0017 35.0119 62.9996C41.4216 62.9976 47.5457 60.347 51.9343 55.6754C51.9923 55.6416 52.047 55.6025 52.0977 55.5587C52.136 55.505 52.1696 55.448 52.1981 55.3884C60.385 46.5076 60.385 32.83 52.1981 23.9492L52.1934 23.9468C52.165 23.8872 52.1313 23.8302 52.0931 23.7765C52.0399 23.727 51.9816 23.6832 51.9193 23.6458C47.5297 18.9807 41.4084 16.3354 35.0027 16.3354C28.597 16.3354 22.4757 18.9807 18.0861 23.6458C18.0238 23.6831 17.9655 23.727 17.9123 23.7765C17.8741 23.8302 17.8404 23.8872 17.812 23.9468C9.62501 32.8277 9.62501 46.5052 17.812 55.3861C17.8403 55.4457 17.8738 55.5027 17.9121 55.5564ZM41.3643 59.6712C43.1577 57.5055 44.5075 55.008 45.3368 52.3213V52.3177C46.8025 53.0043 48.1852 53.8551 49.4586 54.854C47.1601 57.052 44.3924 58.6992 41.3643 59.6712ZM51.0688 53.1589C49.5162 51.9134 47.8125 50.8688 45.9984 50.0498C46.7487 47.0328 47.1585 43.9414 47.2199 40.8332H55.9407C55.6982 45.3617 53.988 49.6883 51.0688 53.1589ZM55.9407 38.4998H47.2199C47.1583 35.3917 46.7486 32.3001 45.9984 29.2832C47.8124 28.465 49.516 27.4211 51.0688 26.1764C53.9876 29.6464 55.6976 33.972 55.9407 38.4998ZM49.4588 24.4754C48.1854 25.4743 46.8026 26.3252 45.337 27.0117C44.508 24.3236 43.1582 21.825 41.3645 19.6581C44.3924 20.6303 47.1601 22.2775 49.4588 24.4754ZM36.1669 18.8299C39.0263 19.5788 41.5556 23.017 43.1493 27.8843C40.8979 28.6606 38.5462 29.1081 36.1669 29.2131V18.8299ZM36.1669 31.5477C38.7627 31.4505 41.3311 30.9791 43.7922 30.1477C44.454 32.8847 44.8213 35.6847 44.8877 38.4998H36.1669V31.5477ZM36.1669 40.8332H44.8877C44.8211 43.6476 44.4539 46.4467 43.7922 49.183C41.331 48.3525 38.7627 47.8817 36.1669 47.7853V40.8332ZM36.1669 50.1198C38.5462 50.2252 40.8979 50.6731 43.1493 51.4498C41.5556 56.3171 39.0263 59.7553 36.1669 60.5043V50.1198ZM20.5417 54.8507C21.8155 53.8543 23.1983 53.0057 24.6635 52.3214V52.3178C25.4928 55.0046 26.8427 57.5021 28.636 59.6678C25.6081 58.6958 22.8404 57.0486 20.5417 54.8507ZM33.8336 60.5032C30.9742 59.7542 28.4449 56.316 26.8511 51.4487C29.1026 50.6724 31.4543 50.2249 33.8336 50.1199V60.5032ZM33.8336 47.7853C31.2377 47.8826 28.6695 48.354 26.2083 49.1853C25.5464 46.4482 25.1792 43.6484 25.1128 40.8332H33.8336V47.7853ZM33.8336 38.4998H25.1128C25.1793 35.6855 25.5466 32.8863 26.2083 30.15C28.6695 30.9806 31.2377 31.4513 33.8336 31.5477V38.4998ZM33.8336 18.8286V29.2131C31.4543 29.1077 29.1026 28.6598 26.8511 27.8831C28.4447 23.0159 30.974 19.5777 33.8336 18.8286ZM28.6361 19.6547C26.842 21.8225 25.4921 24.3224 24.6636 27.0117V27.0081C23.198 26.3215 21.8152 25.4707 20.5418 24.4717C22.8404 22.274 25.6081 20.6268 28.6361 19.6547ZM18.9317 26.174C20.4843 27.4195 22.1879 28.4642 24.0021 29.2831C23.2517 32.3001 22.842 35.3915 22.7806 38.4997H14.0597C14.3023 33.9712 16.0125 29.6446 18.9317 26.174ZM22.7806 40.8332C22.8421 43.9414 23.2519 47.033 24.0021 50.0498C22.1881 50.8681 20.4844 51.9119 18.9317 53.1566C16.0129 49.6867 14.3028 45.3609 14.0597 40.8331L22.7806 40.8332Z" fill="#3482DE"/>
                    </svg>

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
