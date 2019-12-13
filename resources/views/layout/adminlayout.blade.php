@extends('layout.layout')

@yield('variables')

@section('body')

    <section class="hero hero_background">
        <!-- Hero content: will be in the middle -->
        <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="title">
                    Admin Panel
                </h1>
                <h2 class="subtitle">
                    Access level:
                </h2>
            </div>
        </div>

        <!-- Hero footer: will stick at the bottom -->
        <div class="hero-foot">
            <nav class="tabs is-boxed is-fullwidth">
                <div class="container">
                    <ul>
                        <li class="{{ isset($active['dashboard'])?$active['dashboard']:''}}"><a href="/admin/index">Dash Bord</a></li>
                        <li class="{{ isset($active['add'])?$active['add']:''}}"><a href="{{route('add.agency')}}">Add</a></li>
                        <li class="{{ isset($grid)?$grid:''}}"><a>Grid</a></li>
                        <li class="{{ isset($accounts)?$accounts:''}}"><a>Accounts</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </section>



    <div class="row">
        <div class="col-4 sidebar_menu">
            <aside class="menu">
                @foreach($submenulist as $submenu)
                <ul class="menu-list sidebar">
                    <li ><a class="{{isset($active[$submenu->active_class])?$active[$submenu->active_class]:''}}" href="{{route($submenu->link_name)}}">
                            <div class="row">
                                <div class="col-10">
                                    {{ $submenu->menu_name }}
                                </div>
                                <div class="col-2"></div>
                            </div>
                        </a></li>
                </ul>
                @endforeach
            </aside>
            <div class="bottom-space"></div>
        </div>
        <div class="col-8 pt-5">
            @yield('subbody')
        </div>
    </div>






@endsection
