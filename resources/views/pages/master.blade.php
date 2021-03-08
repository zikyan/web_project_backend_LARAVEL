
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="{{ asset('js/form.js') }}"></script>
 
    <title>Zikhar - @yield('title')</title>
</head>

<header>

    <div class="row">

        <div class="col-lg-6">
            <div class="logoz">
                <a href="/"><img src="{{ asset('images/zikhar_logo_black.png') }}" alt="logo"></a>
            </div>
        </div>

        <div class="col-lg-6">
            <div  class="social">
                <ul>
                    <li><a target="_blank" href="https://www.facebook.com/"><img src="{{ asset('images/facebook.png') }}" alt="social-meida icons"></a></li>
                    <li><a target="_blank" href="https://www.instagram.com/"><img src="{{ asset('images/instagram.png') }}" alt="social-meida icons"></a></li>
                    <li><a target="_blank" href="https://www.twitter.com/"><img src="{{ asset('images/twitter.png') }}" alt="social-meida icons"></a></li>
                    <li><a target="_blank" href="https://www.pinterest.com/"><img src="{{ asset('images/pinterest.png') }}" alt="social-meida icons"></a></li>
                    <li><a target="_blank" href="https://www.linkedin.com/"><img src="{{ asset('images/linkedin.png') }}" alt="social-meida icons"></a></li>
                </ul>
            </div>    
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <nav>
                <ul>
                    <li> <a href="/">Home</a></li>
                    <li> <a href="/products">Products</a></li>
                    <li> <a href="/about">About Us</a></li>
                    <li> <a href="/contact">Contact Us</a></li>
                    @if((!session()->has('username') && !session()->has('adminuser')))

                    <li> <a class='btn btn-primary' href="/login">Login</a></li>

                    <li> <a class='btn btn-primary' href="/register">Signup</a></li>

                    @endif


                    @if (session()->has('username') || session()->has('adminuser'))
                    <li> <a class='btn btn-primary' href="/logout">Logout</a></li>
                    @endif

                    {{-- @if (Cookie::get('username') !== null)
                    <li> <a class='btn btn-primary' href="/logout">Logout</a></li>
                    @endif --}}

                    {{-- @if(cookie()->has('username') || session()->has('adminuser'))
                    <li> <a class='btn btn-primary' href="/logout">Logout</a></li>
                    @endif --}}
                    <!-- <li><form method="post"><input class="btn btn-primary" type="submit" value="Login" name="login"></form></li>
                    <li><form method="post"><input class="btn btn-primary" type="submit" value="Logout" name="logout"></form></li> -->
                    
</ul>
</nav>    
  </header>


  @section('content')
      
  @show


  <div class="row">
    <footer>
      
            <div class="footer-menu">
              <ul>
                  <li> <a href="/">Home</a></li>
                  <li> <a href="/products">Products</a></li>
                  <li> <a href="/about">About Us</a></li>
                  <li> <a href="/contact">Contact Us</a></li>
              </ul>
            </div>

            <div class="footer-social">
              <ul>
                  <li><a target="_blank" href="https://www.facebook.com/"><img src="{{ asset('images/facebook.png') }}" alt="social-meida icons"></a></li>
                  <li><a target="_blank" href="https://www.instagram.com/"><img src="{{ asset('images/instagram.png') }}" alt="social-meida icons"></a></li>
                  <li><a target="_blank" href="https://www.twitter.com/"><img src="{{ asset('images/twitter.png') }}" alt="social-meida icons"></a></li>
                  <li><a target="_blank" href="https://www.pinterest.com/"><img src="{{ asset('images/pinterest.png') }}" alt="social-meida icons"></a></li>
                  <li><a target="_blank" href="https://www.linkedin.com/"><img src="{{ asset('images/linkedin.png') }}" alt="social-meida icons"></a></li>
                  
              </ul>
          </div>

          <div class="copyright-text">
              <p>© Copyright 2020 Zikhar.com - All Rights Reserved</p>
          </div>
      </footer>
    </div>

</html>