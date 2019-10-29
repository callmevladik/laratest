<nav class="nav">
    <ul class="nav__list">
        @foreach ($mock->menu->menu_items as $menu_item)
            <li class="nav__item"><a class="nav__link" href="{{$menu_item->href}}">{{$menu_item->text}}</a></li>
        @endforeach
    </ul>
</nav>
