<!DOCTYPE html>
<html lang="en">

<head>
  <title>Mini Blog</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700|Playfair+Display:400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
 </head>

<body>
  <div class="site-wrap">
    @include('frontend.include.header')
    @yield('content')
    @include('frontend.include.footer')
  </div>


  <script src="{{ asset('frontend/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{ asset('frontend/js/jquery-migrate-3.0.1.min.js%2bjquery-ui.js%2bpopper.min.js.pagespeed.jc.JdvTOhp_a4.js')}}"></script>
  <script>
    eval(mod_pagespeed_3UHT1mdFHo);
  </script>
  <script>
    eval(mod_pagespeed_eVrI9UNvs7);
  </script>
  <script>
    eval(mod_pagespeed_ibR0WM8rmG);
  </script>
  <script src="{{ asset ('frontend/js/bootstrap.min.js')}}"></script>
  <script
    src="{{ asset('frontend/js/owl.carousel.min.js%2bjquery.stellar.min.js%2bjquery.countdown.min.js%2bjquery.magnific-popup.min.js.pagespeed.jc.3S4ZYYlTLk.js')}}">
  </script>
  <script>
    eval(mod_pagespeed_hp4TRGNFGr);
  </script>
  <script>
    eval(mod_pagespeed_xafn9tfifR);
  </script>
  <script>
    eval(mod_pagespeed_r3CDYPgZa6);
  </script>
  <script>
    eval(mod_pagespeed__yexyprBvh);
  </script>
  <script src="{{asset('frontend/js/bootstrap-datepicker.min.js%2baos.js%2bmain.js.pagespeed.jc.z6gPHoOd2B.js')}}"></script>
  <script>
    eval(mod_pagespeed__EwcE7_1mp);
  </script>
  <script>
    eval(mod_pagespeed_XfTLd8v2o_);
  </script>
  <script>
    eval(mod_pagespeed_t_McWJOk6o);
  </script>

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
  </script>
  <script defer src="../../../static.cloudflareinsights.com/beacon.min.js"
    data-cf-beacon='{"rayId":"68f9bc9d5d2a1043","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.8.1","si":10}'>
  </script>
</body>

</html>
