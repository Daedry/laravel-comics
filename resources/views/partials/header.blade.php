<header id="site_header">
    <nav>
        <div class="nav-top">
            <div class="nav-text">
                <p class="txt-left">dc power visa&COPY;</p>
                <p>additional dc site  <i class="fa-solid fa-caret-down"></i></p>
            </div>
        </div>
        <div class="nav-bot">
            <div class="nav-left">
                <!-- @include('partials.logo') -->
                <div class="logo">
                    <a href="{{route('homepage')}}"><img src="{{asset('img/dc-logo.png')}}" alt=""></a>
                </div>
            </div>

            <div class="nav-right">
                <div class="links">
                    <ul>

                        <li>
                            <a href="{{route('characters')}}">
                                characters
                            </a>
                        </li>

                        <li>
                            <a href="{{route('comics')}}">
                                comics
                            </a>
                        </li>

                        <li>
                            <a href="{{route('movies')}}">
                                movies
                            </a>
                        </li>

                        <li>
                            <a href="{{route('tv')}}">
                                tv
                            </a>
                        </li>

                        <li>
                            <a href="{{route('games')}}">
                                games
                            </a>
                        </li>

                        <li>
                            <a href="{{route('collectibles')}}">
                                collectibles
                            </a>
                        </li>

                        <li>
                            <a href="{{route('videos')}}">
                                videos
                            </a>
                        </li>

                        <li>
                            <a href="{{route('fans')}}">
                                fans
                            </a>
                        </li>

                        <li>
                            <a href="{{route('news')}}">
                                news
                            </a>
                        </li>

                        <li>
                            <a href="{{route('shop')}}">
                                shop
                            </a>
                            <i class="fa-solid fa-caret-down"></i>
                        </li>

                    </ul>
                </div>

                <div class="search-box">
                    <input type="search" placeholder="Search "><i class='fa-solid fa-magnifying-glass'></i>

                </div>
            </div>
        </div>


    </nav>
</header>
<!-- /#site_header -->