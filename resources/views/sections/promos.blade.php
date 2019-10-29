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
                        @include ('partials.promo-cards')
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-3">
                <div class="promos__subscription">
                    @include ('forms.subscription')
                </div>
            </div>
        </div>
    </div>
</div>