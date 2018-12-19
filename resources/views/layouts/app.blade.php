<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
</head>
<body>

<style>

    .context-dark, .bg-gray-dark, .bg-primary {
        color: rgba(255, 255, 255, 0.8);
    }

    .footer-classic a, .footer-classic a:focus, .footer-classic a:active {
        color: #ffffff;
    }
    .nav-list li {
        padding-top: 5px;
        padding-bottom: 5px;
    }

    .nav-list li a:hover:before {
        margin-left: 0;
        opacity: 1;
        visibility: visible;
    }

    ul, ol {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .social-inner {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
        padding: 23px;
        font: 900 13px/1 "Lato", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        text-transform: uppercase;
        color: rgba(255, 255, 255, 0.5);
    }
    .social-container .col {
        border: 1px solid rgba(255, 255, 255, 0.1);
    }
    .nav-list li a:before {
        content: "\f14f";
        font: 400 21px/1 "Material Design Icons";
        color: #4d6de6;
        display: inline-block;
        vertical-align: baseline;
        margin-left: -28px;
        margin-right: 7px;
        opacity: 0;
        visibility: hidden;
        transition: .22s ease;
    }

    aside#sidebar{
    float: right;
    width:50%;
    margin-top: 10px;
    }

    article#main-col{
        float: left;
        width: 35%;
    }

    /*newsbox*/
    /*HYPER LINK*/
a:hover{
    
}
a, a:focus , a:hover{ 
  text-decoration: none;
  color: inherit;
}
 a:hover, .btn{
    outline:none!important;
}

/*ROUNDED CORNER*/
*{
  -webkit-border-radius: 0 !important;
     -moz-border-radius: 0 !important;
          border-radius: 0 !important;
}
/*CATEGORIES BADGE*/
.badge {
    font-weight: 600;
    font-size: 13px;
    color: white;
    background-color: #289dcc;
}
/*FEATURED*/
.mg-2, .mg-4{
    margin-left:-20px;
}
.linkfeat{
    background: rgba(76,76,76,0);
    background: -moz-linear-gradient(top, rgba(76,76,76,0) 0%, rgba(48,48,48,0) 49%, rgba(19,19,19,1) 100%);
    background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(76,76,76,0)), color-stop(49%, rgba(48,48,48,0)), color-stop(100%, rgba(19,19,19,1)));
    background: -webkit-linear-gradient(top, rgba(76,76,76,0) 0%, rgba(48,48,48,0) 49%, rgba(19,19,19,1) 100%);
    background: -o-linear-gradient(top, rgba(76,76,76,0) 0%, rgba(48,48,48,0) 49%, rgba(19,19,19,1) 100%);
    background: -ms-linear-gradient(top, rgba(76,76,76,0) 0%, rgba(48,48,48,0) 49%, rgba(19,19,19,1) 100%);
    background: linear-gradient(to bottom, rgba(76,76,76,0) 0%, rgba(48,48,48,0) 49%, rgba(19,19,19,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4c4c4c', endColorstr='#131313', GradientType=0 );
}

.dropdown-menu {
    
    z-index: 1000;
    display: none;
    float: left;
    min-width: 10rem;
    padding: .5rem 0;
    margin: .125rem 0 0;
    font-size: 1rem;
    color: #212529;
    text-align: left;
    list-style: none;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.15);
    border-radius: .25rem;
}

</style>



<div id="app">
    @include('inc.navbar')
    <div class="container">
        @include('inc.messages')



        @yield('content')

    </div>

</div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'article-ckeditor' );
</script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

</body>

<footer class="section footer-classic context-dark bg-image" style="background: #2d3246;">
    <div class="container">
        <div class="row row-30">
            <div class="col-md-4 col-xl-5">
                <div class="pr-xl-4"><a class="brand" href="index.html"><img class="brand-logo-light" src="images/agency/logo-inverse-140x37.png" alt="" width="140" height="37" srcset="images/agency/logo-retina-inverse-280x74.png 2x"></a>
                    <p>We are an award-winning creative agency, dedicated to the best result in web design, promotion, business consulting, and marketing.</p>
                    <!-- Rights-->
                    <p class="rights"><span>©  </span><span class="copyright-year">2018</span><span> </span><span>Waves</span><span>. </span><span>All Rights Reserved.</span></p>
                </div>
            </div>
            <div class="col-md-4">
                <h5>Contacts</h5>
                <dl class="contact-list">
                    <dt>Address:</dt>
                    <dd>Thankot,Kathmandu</dd>
                </dl>
                <dl class="contact-list">
                    <dt>email:</dt>
                    <dd><a href="mailto:#">Kabingurung99@gmail.com</a></dd>
                </dl>
                <dl class="contact-list">
                    <dt>phones:</dt>
                    <dd><a href="tel:#">+977 9818350940</a> <span>or</span> <a href="tel:#">+977 9818899398</a>
                    </dd>
                </dl>
            </div>
            <div class="col-md-4 col-xl-3">
                <h5>Links</h5>
                <ul class="nav-list">
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/services">Services</a></li>
                    <li><a href="/posts">Blogs</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row no-gutters social-container">
        <div class="col"><a class="social-inner" href="https://www.facebook.com/"><span class="icon mdi mdi-facebook"></span><span>Facebook</span></a></div>
        <div class="col"><a class="social-inner" href="https://www.instagram.com/"><span class="icon mdi mdi-instagram"></span><span>instagram</span></a></div>
        <div class="col"><a class="social-inner" href="https://twitter.com/"><span class="icon mdi mdi-twitter"></span><span>twitter</span></a></div>
        <div class="col"><a class="social-inner" href="https://mail.google.com/"><span class="icon mdi mdi-youtube-play"></span><span>google</span></a></div>
    </div>
</footer>

</html>
