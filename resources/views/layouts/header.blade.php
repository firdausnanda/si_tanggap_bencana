<div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
        <div class="header_top">
            <div class="container-fluid ">
                <div class="contact_nav">
                    <i class=""></i>
                    <a href="">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <span>
                            WhatsApp Satgas : +6285678901234
                        </span>
                    </a>
                    <i class=""></i>
                </div>
            </div>
        </div>
        <div class="header_bottom">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="{{ route('landing.home') }}">
                        <span>
                            Sistem Informasi Tanggap Bencana <br> Tanah Longsor di Poncokusumo Malang
                        </span>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav  ">
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('landing.home') }}">Home </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link">Informasi
                                    <div class="dropdown-content">
                                        <a href="{{ route('landing.kerugian') }}">
                                            <p>Kerugian</p>
                                        </a>
                                        <a href="{{ route('landing.korban') }}">
                                            <p>Korban</p>
                                        </a>
                                        <a href="{{ route('landing.kejadian') }}">
                                            <p>Kejadian</p>
                                        </a>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('landing.lapor') }}"> Lapor </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}"> <i class="fa fa-user" aria-hidden="true"></i>
                                    Login</a>
                            </li>
                            <form class="form-inline">
                                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </form>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- end header section -->
</div>
