<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false"
            data-auto-scroll="true" data-slide-speed="200">
            {{--            <?php--}}
            {{--                $links = auth()->user()->links->where('parent_id',0)->where('show_in_menu',1);--}}
            {{--            ?>--}}
            {{--            @foreach($links as $link)--}}
            {{--            <li class="nav-item start ">--}}
            {{--                <a href="{{ $link->route=='#'?'#':route($link->route) }}" class="nav-link nav-toggle">--}}
            {{--                    <i class="{{ $link->icon }}"></i>--}}
            {{--                    <span class="title">{{ $link->title }}</span>--}}
            {{--                    @if($link->subMenus->count()>0)--}}
            {{--                        <span class="arrow"></span>--}}
            {{--                    @endif--}}
            {{--                </a>--}}
            {{--                @if($link->subMenus->count()>0)--}}
            {{--                    <ul class="sub-menu">--}}
            {{--                        @foreach($link->subMenus->where('show_in_menu',1) as $subMenu)--}}
            {{--                        <li class="nav-item start ">--}}
            {{--                            <a href="{{ route($subMenu->route) }}" class="nav-link ">--}}
            {{--                                <i class="{{ $subMenu->icon }}"></i>--}}
            {{--                                <span class="title">{{ $subMenu->title }}</span>--}}
            {{--                            </a>--}}
            {{--                        </li>--}}
            {{--                        @endforeach--}}
            {{--                    </ul>--}}
            {{--                @endif--}}
            {{--            </li>--}}
            {{--            @endforeach--}}
            <li class="nav-item start ">
                <a href="{{route('products.index')}}" class="nav-link nav-toggle">
                    <i class="icon-map"></i>
                    <span class="title">product</span>

                    <span class="arrow"></span>

                </a>

            </li>
            <li class="nav-item start ">
            <a href="{{route('order')}}" class="nav-link nav-toggle">
                <i class="fa fa-cube"></i>
                <span class="title">orders</span>
                <span class="arrow"></span>
            </a>
        </li>
            <li class="nav-item start ">
                <a href="{{route('about.index')}}" class="nav-link nav-toggle">
                    <i class="fa fa-briefcase"></i>
                    <span class="title">about</span>
                    <span class="arrow"></span>
                </a>

            </li>
            <li class="nav-item start ">
                <a href="{{route('categories.index')}}" class="nav-link nav-toggle">
                    <i class="icon-support"></i>
                    <span class="title">category</span>
                    <span class="arrow"></span>
                </a>

            </li>
            <li class="nav-item start ">
                <a href="{{route('comments.index')}}" class="nav-link nav-toggle">
                    <i class="fa fa-comment"></i>
                    <span class="title">comments</span>
                    <span class="arrow"></span>
                </a>

            </li>
            <li class="nav-item start ">
                <a href="{{route('post.index')}}" class="nav-link nav-toggle">
                    <i class="fa fa-laptop"></i>
                    <span class="title">posts</span>
                    <span class="arrow"></span>
               </a>
            </i>
            <li class="nav-item start ">
                <a href="{{route('settings')}}" class="nav-link nav-toggle">
                    <i class="fa fa-cogs"></i>
                    <span class="title">settings</span>
                    <span class="arrow"></span>
               </a>
            </i>
              <li class="nav-item start ">
                <a href="{{ route('contactme') }}" class="nav-link nav-toggle">
                    <i class="fa fa-envelope"></i>
                    <span class="title">contact</span>
                    <span class="arrow"></span>
               </a>
            </i>
              <li class="nav-item start ">
                <a href="{{ route('x1') }}" class="nav-link nav-toggle">
                    <i class="fa fa-bullhorn"></i>
                    <span class="title">testimonials</span>
                    <span class="arrow"></span>
               </a>
            </i>
              <li class="nav-item start ">
                <a href="{{ route('post.email') }}" class="nav-link nav-toggle">
                    <i class="fa fa-bell"></i>
                    <span class="title">newsletter</span>
                    <span class="arrow"></span>
               </a>
            </i>
        </ul>
    </div>
</div>
