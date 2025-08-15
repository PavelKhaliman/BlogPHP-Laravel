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
                        <a href="{{route('blog.index')}}" class="nav-link">
                            <i class="bi bi-house-door"></i>
                            <p>Главная</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('personal.liked.index')}}" class="nav-link">
                            <i class="nav-icon bi bi-heart"></i>
                            <p>Избранные посты</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('personal.comment.index')}}" class="nav-link">
                            <i class="nav-icon bi bi-chat-dots"></i>
                            <p>Комментарии</p>
                        </a>
                    </li>

                    @can('view', auth()->user())
                    <li class="nav-item">
                        <a href="{{route('admin.category.index')}}" class="nav-link">
                            <i class="nav-icon bi bi-chat-dots"></i>
                            <p>Админ панель</p>
                        </a>
                    </li>
                    @endcan




                </ul>
                <!--end::Sidebar Menu-->
            </nav>
        </div>

    </div>
    <!--end::Sidebar Wrapper-->
</aside>
