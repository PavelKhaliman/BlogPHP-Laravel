<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!--begin::Sidebar Brand-->
    <div class="sidebar-wrapper" data-overlayscrollbars="host">
        <div class="os-size-observer">
            <div class="os-size-observer-listener"></div>
        </div>
        <div class="" data-overlayscrollbars-viewport="scrollbarHidden overflowXHidden overflowYScroll" tabindex="-1"
             style="margin-right: -16px; margin-bottom: -16px; margin-left: 0px; top: -8px; right: auto; left: -8px; width: calc(100% + 16px); padding: 8px;">
            <nav class="mt-2">
                <!--begin::Sidebar Menu-->
                <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="navigation"
                    aria-label="Main navigation" data-accordion="false" id="navigation">

                    <li class="nav-item">
                        <a href="{{route('main.index')}}" class="nav-link">
                            <i class="bi bi-house-door"></i>
                            <p>Главная</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('personal.main.index')}}" class="nav-link">
                            <i class="bi bi-house-door"></i>
                            <p>ЛК</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('admin.user.index')}}" class="nav-link">
                            <i class="bi bi-people"></i>
                            <p>Пользователи</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('admin.post.index')}}" class="nav-link">
                            <i class="nav-icon bi bi-journal"></i>
                            <p>Посты</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('admin.category.index')}}" class="nav-link">
                            <i class="nav-icon bi bi-list"></i>
                            <p>Категории</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('admin.tag.index')}}" class="nav-link">
                            <i class="bi bi-tags"></i>
                            <p>Тэги</p>
                        </a>
                    </li>

                </ul>
                <!--end::Sidebar Menu-->
            </nav>
        </div>


    <!--end::Sidebar Wrapper-->
</aside>
