@foreach($mock->card->cards as $card)
<div class="col-12 col-md-6 col-xl-3 mt-4">
    <div class="card">
        <div class="card__header"><img class="card__img" src="{{asset('img/' . $card->img->filename) }}" alt="{{$card->img->alt}}">
            <div class="card__badge">
                <div>{{$card->badge_text}}</div>
            </div><a class="card__name" href="{{$card->href}}">{{$card->name}}</a>
            <div class="card__btn card__btn--favorite">
                <div class="favorite-icon">
                    <svg>
                        <use xlink:href="{{asset('img') . '/sprite.svg#favorite-icon'}}"></use>
                    </svg>
                </div>
            </div>
        </div>
        <a class="card__info" href="{{$card->href}}">
            <div class="card__row">
                <div class="card__location">{{$card->location}}
                    <div class="card__icon">
                        <div class="metro-icon">
                            <svg viewBox="0 0 24 24">
                                <use xlink:href="{{asset('img') . '/sprite.svg#metro-icon'}}"></use>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card__row">
                <div class="card__price">
                    <div class="price">
                        <div class="price__text"><span>{{$card->price}}</span> </div>
                    </div>
                </div>
                <div class="card__label">{{$card->label}}</div>
            </div>
        </a>
    </div>
</div>
    @endforeach