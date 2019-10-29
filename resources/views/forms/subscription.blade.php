<div class="form form--subscription">
    <form action="#">
        <div class="form__header">
            <div class="form__title">{{$mock->subscription_form->subscription_form->title}}</div>
            <div class="form__subtitle">{{$mock->subscription_form->subscription_form->subtitle}}</div>
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