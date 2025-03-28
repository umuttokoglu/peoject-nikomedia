<header id="mad-header" class="mad-header">
    <div class="mad-header-section--sticky-xl">
        <div class="container-fluid">
            <div class="mad-header-items">
                <div class="mad-header-item">
                    <a href="{{ route('home') }}" class="mad-logo">
                        <img src="{{ asset('assets/images/logo.svg') }}" alt="{{ config('app.name') }}"/>
                    </a>
                </div>

                <div class="mad-header-item">
                    <nav class="mad-navigation-container">
                        <ul class="mad-navigation mad-navigation--vertical-sm">
                            <a href="{{ route('home') }}">Anasayfa</a>
                            <a href="pages_about.html">Hakkımızda</a>
                            <a href="pages_contact_v1.html">İletişim</a>
                            <a href="blog_masonry.html">Blog</a>
                        </ul>
                    </nav>

                    <div class="mad-col">
                        <a href="pages_book.html" class="btn">Bizimle İletişime Geçin</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
