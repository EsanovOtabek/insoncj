<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

    <li class="nav-item menu-open">
        <a href="{{ route('profile.index') }}" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
                Bosh sahifa
            </p>
        </a>

    </li>


    {{-- Maqolalar --}}
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-file"></i>
            <p>
                Maqolalar
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('profile.article.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Mening Maqolalarim</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('profile.article.create') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Maqola yuborish</p>
                </a>
            </li>
        </ul>

    </li>

    <li class="nav-item">
        <a href="{{ route('profile.settings') }}" class="nav-link">
            <i class="nav-icon fas fa-sliders-h"></i>
            <p>
                Profil sozlamalari
            </p>
        </a>
    </li>


    <li class="nav-item border-top border-bottom border-primary">
        <a href="{{ route('logout') }}" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>
                Chiqish.
            </p>
        </a>
    </li>

</ul>
