<div class="socials">
    @foreach ($mock->social->socials as $social)
        <a href="{{$social->href}}">
            <div class="social">
                <svg class="social__icon" >
                    <use xlink:href="{{asset('img') . '/sprite.svg#' . $social->icon}}"></use>
                </svg>
            </div>
        </a>
    @endforeach
</div>