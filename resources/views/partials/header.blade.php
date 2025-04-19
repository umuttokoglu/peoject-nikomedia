<header id="mad-header" class="mad-header">
    <div class="mad-header-section--sticky-xl">
        <div class="container-fluid">
            <div class="mad-header-items">
                <div class="mad-header-item">
                    <a href="{{ route('home') }}" class="mad-logo">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="{{ config('app.name') }}"/>
                    </a>
                </div>

                <div class="mad-header-item">
                    <nav class="mad-navigation-container">
                        <ul class="mad-navigation mad-navigation--vertical-sm">
                            <a href="{{ route('home') }}">Anasayfa</a>
                            <li class="menu-item menu-item-has-children">
                                <a href="#">Terapiler</a>
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="#">Terapi 1</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#">Terapi 2</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#">Terapi 3</a>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#">Terapi 4</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item">
                                                <a href="#">Terapi 4 - 1</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="#">Terapi 4 - 2</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="#">Terapi 4 - 3</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#">Terapi 5</a>
                                    </li>
                                </ul>
                            </li>
                            <a href="#">Hakkımızda</a>
                            <a href="#">İletişim</a>
                            <a href="#">Blog</a>
                        </ul>
                    </nav>

                    <div class="header-right">
                        <div class="header-phone">
                            <i class="fa fa-phone" style="color:white;"></i> <a href="tel:+905340100110">+90 (534) 010 0110</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
