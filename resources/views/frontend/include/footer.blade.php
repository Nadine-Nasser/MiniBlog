<div class="site-footer">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-4">
          <h3 class="footer-heading mb-4">About Us</h3>
          <p>{{config('settings.About Us')}}</p>
        </div>
        <div class="col-md-3 ml-auto">

          <ul class="list-unstyled float-left mr-5">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Advertise</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Subscribes</a></li>
          </ul>
          <ul class="list-unstyled float-left">
              @foreach (App\Models\Category::query()->inRandomOrder()->take(4)->get() as $category)
              <li><a href="#">{{ $category->name }}</a></li>
              @endforeach
          </ul>
        </div>
        <div class="col-md-4">
          <div>
            <h3 class="footer-heading mb-4">Connect With Us</h3>
            <p>
              <a href="{{ config("settings.facebook_link") }}" target="_blank"><span class="icon-facebook pt-2 pr-2 pb-2 pl-0"></span></a>
              <a href="{{ config("settings.insta_link") }}"><span class="icon-instagram p-2"></span></a>
              <a href="{{ config("settings.twitter_link") }}"><span class="icon-twitter p-2"></span></a>
              <a href="{{ config("settings.linkedin_link") }}"><span class="icon-rss p-2"></span></a>
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 text-center">
          <p>

            Copyright &copy; <script>
              document.write(new Date().getFullYear());
            </script> All rights reserved | This template is made with <i class="icon-heart text-danger"
              aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank">Colorlib</a>

          </p>
        </div>
      </div>
    </div>
  </div>
