<div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>
  <header class="site-navbar" role="banner">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-12 search-form-wrap js-search-form">
          <form action="#">
            <input type="text" id="s" class="form-control" placeholder="Search...">
            <button class="search-btn" type="submit"><span class="icon-search"></span></button>
          </form>
        </div>
        <div class="col-4 site-logo">
          <a href="index-2.html" class="text-black h2 mb-0">{{ Config('settings.site_name') }}</a>
        </div>
        <div class="col-8 text-right">
          <nav class="site-navigation" role="navigation">
            <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block mb-0">
              <li><a href="{{ route('home') }}">Home</a></li>
              @foreach (App\Models\Category::query()->inRandomOrder()->take(4)->get() as $category)
                <li><a href="">{{ $category->name }}</a></li>
                @endforeach

              <li class="d-none d-lg-inline-block"><a href="#" class="js-search-toggle"><span
                    class="icon-search"></span></a></li>
            </ul>
          </nav>
          <a href="#" class="site-menu-toggle js-menu-toggle text-black d-inline-block d-lg-none"><span
              class="icon-menu h3"></span></a>
        </div>
      </div>
    </div>
  </header>