<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="{{url('css/app.css')}}">
    </head>
    <body>
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-auto"><a class="header__logo" href="#">
                        <div class="main-logo"><img src="../img/logo.png" alt="company-logo"></div></a></div>
                <div class="col-auto ml-auto">
                    <div class="header__nav">
                        <nav class="nav">
                            <ul class="nav__list">

                                @foreach ($arr as $nav_item)
                                    <li class="nav__item"><a class="nav__link" href="#">{{$nav_item}}</a></li>
                                @endforeach

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="main">
        <div class="companies">
            <div class="container">
                <div class="row">
                    <div class="col-auto">
                        <div class="title">Популярные компании</div>
                    </div>
                    <div class="col-auto ml-auto"><a class="btn btn--glowing-red" href="#">Все компании</a></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-xl-3 mt-4">
                        <div class="card card--companies">
                            <div class="card__header"><img class="card__img" src="assets/img/card.png">
                                <div class="card__badge">
                                    <div>front-end</div>
                                </div><a class="card__name" href="#">it-компания wezom</a>
                                <div class="card__btn card__btn--favorite">
                                    <div class="favorite-icon">
                                        <svg>
                                            <use xlink:href="assets/img/sprite.svg#favorite-icon"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div><a class="card__info" href="#">
                                <div class="card__row">
                                    <div class="card__location">г. Херсон, ул. Советская, 12/14
                                        <div class="card__icon">
                                            <div class="metro-icon">
                                                <svg viewBox="0 0 24 24">
                                                    <use xlink:href="assets/img/sprite.svg#metro-icon"></use>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card__row">
                                    <div class="card__price">
                                        <div class="price">
                                            <div class="price__text">от<span>1 000 000 $</span></div>
                                        </div>
                                    </div>
                                    <div class="card__label">IT<span>решения</span></div>
                                </div></a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-3 mt-4">
                        <div class="card card--companies">
                            <div class="card__header"><img class="card__img" src="assets/img/card.png">
                                <div class="card__badge">
                                    <div>front-end</div>
                                </div><a class="card__name" href="#">it-компания wezom</a>
                                <div class="card__btn card__btn--favorite">
                                    <div class="favorite-icon">
                                        <svg>
                                            <use xlink:href="assets/img/sprite.svg#favorite-icon"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div><a class="card__info" href="#">
                                <div class="card__row">
                                    <div class="card__location">г. Херсон, ул. Советская, 12/14
                                        <div class="card__icon">
                                            <div class="metro-icon">
                                                <svg viewBox="0 0 24 24">
                                                    <use xlink:href="assets/img/sprite.svg#metro-icon"></use>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card__row">
                                    <div class="card__price">
                                        <div class="price">
                                            <div class="price__text">от<span>1 000 000 $</span></div>
                                        </div>
                                    </div>
                                    <div class="card__label">IT<span>решения</span></div>
                                </div></a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-3 mt-4">
                        <div class="card card--companies">
                            <div class="card__header"><img class="card__img" src="assets/img/card.png">
                                <div class="card__badge">
                                    <div>front-end</div>
                                </div><a class="card__name" href="#">it-компания wezom</a>
                                <div class="card__btn card__btn--favorite">
                                    <div class="favorite-icon">
                                        <svg>
                                            <use xlink:href="assets/img/sprite.svg#favorite-icon"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div><a class="card__info" href="#">
                                <div class="card__row">
                                    <div class="card__location">г. Херсон, ул. Советская, 12/14</div>
                                </div>
                                <div class="card__row">
                                    <div class="card__price">
                                        <div class="price">
                                            <div class="price__text"> <span>Цена не известна</span></div>
                                        </div>
                                    </div>
                                </div></a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-3 mt-4">
                        <div class="card card--companies">
                            <div class="card__header"><img class="card__img" src="assets/img/card.png">
                                <div class="card__badge">
                                    <div>front-end</div>
                                </div><a class="card__name" href="#">it-компания wezom
                                    <div>2019</div></a>
                                <div class="card__btn card__btn--favorite">
                                    <div class="favorite-icon">
                                        <svg>
                                            <use xlink:href="assets/img/sprite.svg#favorite-icon"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div><a class="card__info" href="#">
                                <div class="card__row">
                                    <div class="card__location">г. Херсон, ул. Советская, 12/14
                                        <div class="card__icon">
                                            <div class="metro-icon">
                                                <svg viewBox="0 0 24 24">
                                                    <use xlink:href="assets/img/sprite.svg#metro-icon"></use>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card__row">
                                    <div class="card__price">
                                        <div class="price">
                                            <div class="price__text">от<span>1 000 000 $</span></div>
                                        </div>
                                    </div>
                                    <div class="card__label">IT<span>решения</span></div>
                                </div></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="promos">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xl-9">
                        <div class="promos__news">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="title">Предложения и акции</div>
                                </div>
                                <div class="col-auto ml-auto"><a class="btn btn--glowing-red" href="#">Все акции</a></div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6 mt-5"><a href="#">
                                        <div class="promo-card">
                                            <div class="promo-card__header"><img class="promo-card__img" src="assets/img/promo.png">
                                                <div class="promo-card__name">предложение</div>
                                            </div>
                                            <div class="promo-card__info">
                                                <div class="promo-card__text">Лучшее предложение для наших клиентов!</div>
                                                <div class="promo-card__date">22/12/2017</div>
                                            </div>
                                        </div></a></div>
                                <div class="col-12 col-md-6 mt-5"><a href="#">
                                        <div class="promo-card">
                                            <div class="promo-card__header"><img class="promo-card__img" src="assets/img/promo2.png">
                                                <div class="promo-card__name">акция</div>
                                            </div>
                                            <div class="promo-card__info">
                                                <div class="promo-card__text">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона</div>
                                                <div class="promo-card__date">22/12/2017</div>
                                            </div>
                                        </div></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-3">
                        <div class="promos__subscription">
                            <div class="form form--subscription">
                                <form action="#">
                                    <div class="form__header">
                                        <div class="form__title">Подпишитесь на рассылку</div>
                                        <div class="form__subtitle">Будьте всегда в курсе последних новостей и акций!</div>
                                    </div>
                                    <div class="form__body">
                                        <div class="control control--input">
                                            <label class="control__label" for="emailInput">Введите ваш email*</label>
                                            <input class="control__field" type="text" id="emailInput" placeholder="yourmail@gmail.com">
                                        </div>
                                        <div class="control control--submit">
                                            <button class="btn control__btn control__btn--submit" type="submit">подписаться</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-auto">
                    <div class="footer__socials">
                        <div class="footer__title footer__title--social">
                            <div class="socials__title">Мы в соц. сетях</div>
                        </div>
                        <div class="socials"><a href="#">
                                <div class="social">
                                    <svg class="social__icon" viewBox="0 0 21 30">
                                        <use xlink:href="assets/img/sprite.svg#facebook-icon"></use>
                                    </svg>
                                </div></a><a href="#">
                                <div class="social">
                                    <svg class="social__icon" viewBox="0 0 26 23">
                                        <use xlink:href="assets/img/sprite.svg#twitter-icon"></use>
                                    </svg>
                                </div></a><a href="#">
                                <div class="social">
                                    <svg class="social__icon" viewBox="0 0 29 23">
                                        <use xlink:href="assets/img/sprite.svg#youtube-icon"></use>
                                    </svg>
                                </div></a><a href="#">
                                <div class="social">
                                    <svg class="social__icon social__icon--instagram" viewBox="0 0 21 21">
                                        <use xlink:href="assets/img/sprite.svg#instagram-icon"></use>
                                    </svg>
                                </div></a></div>
                    </div>
                </div>
                <div class="col-12 col-sm-auto ml-auto"><a class="footer__copyright" href="#">
                        <div class="copyright">
                            <div class="copyright__img"><img src="assets/img/logo-red.png" alt=""></div>
                            <div class="copyright__text">Разработка сайта
                                <div class="footer__logo">
                                    <svg class="logo-black" viewBox="0 0 53 11">
                                        <use xlink:href="assets/img/sprite.svg#logo-black"></use>
                                    </svg>
                                </div>
                            </div>
                        </div></a></div>
            </div>
        </div>
    </footer>
    </body>
</html>
