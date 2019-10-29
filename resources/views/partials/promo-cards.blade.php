@foreach ($mock->promo_card->promo_cards as $promo_card)
<div class="col-12 col-md-6 mt-5">
    <a href="{{$promo_card->href}}">
        <div class="promo-card">
            <div class="promo-card__header"><img class="promo-card__img" src="{{asset('img/' . $promo_card->img->filename)}}" alt="{{$promo_card->img->alt}}">
                <div class="promo-card__name">{{$promo_card->name}}</div>
            </div>
            <div class="promo-card__info">
                <div class="promo-card__text">{{$promo_card->text}}</div>
                <div class="promo-card__date">{{$promo_card->date}}</div>
            </div>
        </div>
    </a>
</div>
    @endforeach