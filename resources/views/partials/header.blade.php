<header id="site_header">
    <div class="header_top">
        <div class="container row">
            <div>DC POWERS<sup>SM</sup> VISA <span>©</span></div>
            <div>ADDITIONAL DC SITES</div>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.header_top -->
    <div class="header_nav">
        <div class="container">
            <div class="row">
                <div class="logo">
                    <img src="{{asset('img/dc-logo.png')}}" alt="">
                </div>
                <!-- /.logo -->
                <nav id="site_nav">
                    <ul>
                        @foreach($links as $link)
                        <li><a href="/{{$link}}">{{$link}}</a></li>
                        @endforeach
                    </ul>
                </nav>
                <div class="search">Search</div>
                <!-- /#site_nav -->
            </div>

        </div>
        <!-- /.container -->
    </div>
    <!-- /.header_nav -->
    <div class="header_jumbo">
        <div class="container">
            
        </div>
        <!-- /.container -->
    </div>
    <!-- /.header_jumbo -->
</header>
<!-- /#site_header -->