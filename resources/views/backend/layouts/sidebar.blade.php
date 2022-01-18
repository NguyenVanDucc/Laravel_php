<div class="sidebar col-2">
   
    <div class="sidebar__search">
        <input type="text" placeholder="Search" class="search__input">
        <i class="fas fa-search"></i>
    </div>
    <ul class="menu">
        <li class="menu__item">
            <i class="far fa-folder-open"></i>
            <a href="{{ route('faculties.index') }}" class="menu__item-link">Faculty management</a>
        </li>
        <li class="menu__item">
            <i class="fas fa-book"></i>
            <a href="{{ route('subjects.index') }}" class="menu__item-link">Subject management</a>
        </li>
        <li class="menu__item">
            <i class="fas fa-user"></i>
            <a href="" class="menu__item-link">Student management</a>
        </li>
    </ul>
</div>
