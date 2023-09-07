<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

    <li class="nav-item menu-open">
        <a href="{{ route('admin.index') }}" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
                Bosh sahifa
            </p>
        </a>

    </li>

    <li class="nav-item">
        <a href="{{ route('admin.years.index') }}" class="nav-link">
            <i class="nav-icon fas fa-calendar"></i>
            <p>
                Jurnal yillari
            </p>
        </a>
    </li>

    <li class="nav-item">
        <a href="{{ route('admin.issues.index') }}" class="nav-link">
            <i class="nav-icon fas fa-list-ol"></i>
            <p>
                Jurnal sonlari
            </p>
        </a>
    </li>

    <li class="nav-item">
        <a href="{{ route('admin.dois.create') }}" class="nav-link">
            <i class="nav-icon fas fa-plus"></i>
            <p>
                Arxiv maqola qo'shish
            </p>
        </a>
    </li>

    {{--Maqolalar--}}
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-file-archive"></i>
            <p>
                Maqolalar
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('admin.articles') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Jami Maqolalar</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.articles') }}?status=accepted" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Qabul qilingan Maqolalar</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.articles') }}?status=rejected" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Rad etilgan Maqolalar</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.dois') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Arxiv Maqolalar</p>
                </a>
            </li>
        </ul>
    </li>

    {{--Yangiliklar--}}
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-newspaper"></i>
            <p>
                E'lonlar
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('admin.news.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>E'lonlar</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.news.create') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>E'lon qo'shish</p>
                </a>
            </li>
        </ul>
    </li>

    {{--Expertlar--}}
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>
                Expertlar
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('admin.experts.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Expertlar</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.experts.create') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Expert qo'shish</p>
                </a>
            </li>
        </ul>

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
