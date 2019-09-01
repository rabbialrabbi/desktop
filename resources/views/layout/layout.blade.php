<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">

    <title>@yield('title')</title>
</head>
<body>





<div id="app" class="up-header wrapper">
    <div class="row">
        <div class="col-3">
            <div class="up-header_left">
                <p>eTicket<span> .com</span></p>
            </div>
        </div>
        <div class="col-6">
            <div class="up-header_menu">
                <ul>
                    <li id="home_menu"  class="up-header_menu-li">
                        <div class="up-header_menu-bar">
                        <div id="home_bar" class="up-header_menu-display"></div>
                        </div>
                        <a id="home_anchor" class="anchor " href="/ticket">Home</a>
                    </li>
                    <li  class="up-header_menu-li ">
                        <div class="up-header_menu-bar">
                            <div   class="up-header_menu-display "></div>
                        </div>
                        <a class="anchor"   href="#">Contact</a>
                    </li>
                    <li  class="up-header_menu-li">
                        <div class="up-header_menu-bar">
                            <div  class="up-header_menu-display"></div>
                        </div>
                        <a class="anchor"  href="#">FAQ</a></li>
                    <li id="about_menu"  class="up-header_menu-li">
                        <div class="up-header_menu-bar">
                            <div id="about_bar"  class="up-header_menu-display"></div>
                        </div>
                        <a id="about_anchor" class="anchor" href="/">About</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-3">
            <div class="up-header_right">
                <div class="row">
                    <div class="up-header_right-center">
                        <img src="{{asset('image/user.png')}}" alt="account">
                    </div>
                </div>
                <div class="row">
                    <div class="up-header_right-center">
                        <div class="dropdown-hover">
                            <span>My Account </span><i class="fas fa-chevron-down"></i>
                        </div>

                    </div>
                </div>

                <div class="up-header_right-dropdown">
                    <div class="row">
                        <div class="dropdown-img">
                            <img src="{{asset('image/avatar.jpg')}}" alt="account-logo" >
                        </div>
                    </div>
                    <div class="row">

                        <div class="dropdown-button">
                            <button>Sign In</button>
                            <button>Register</button>
                        </div>
                        {{--<div class="dropdown-button">--}}
                            {{--<button>LogIn</button>--}}
                            {{--<button>Register</button>--}}
                        {{--</div>--}}

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@yield('body')



<div class="footer">
    <p class="wrapper">CopyRight @ 2019</p>

</div>

<script src="{{asset('js/app.js')}}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script>

          let active_menu =  '@yield('menu')';

          switch (active_menu) {
             case 'home':{
                 document.getElementById('home_menu').className += ' menu-active';
                 document.getElementById('home_bar').className += ' bar-active';
                 document.getElementById('home_anchor').className += ' anchor-active';
                 break
              }
              case 'about':{
                  document.getElementById('about_menu').className += ' menu-active';
                  document.getElementById('about_bar').className += ' bar-active';
                  document.getElementById('about_anchor').className += ' anchor-active';
                  break
              }
              case 'contact':{
                  document.getElementById('contact_menu').className += ' menu-active';
                  document.getElementById('contact_bar').className += ' bar-active';
                  document.getElementById('contact_anchor').className += ' anchor-active';
                  break
              }
              case 'faq':{
                  document.getElementById('faq_menu').className += ' menu-active';
                  document.getElementById('faq_bar').className += ' bar-active';
                  document.getElementById('faq_anchor').className += ' anchor-active';
                  break
              }
          }
    let menu = document.getElementsByClassName('up-header_menu-li');
    let bar = document.getElementsByClassName('up-header_menu-display');
    let anchor = document.getElementsByClassName('anchor');

    for(let i = 0; i< menu.length; i++){
        menu[i].addEventListener('click', function () {

            // add bar-active class in up-header_menu-display class
            let curentMenu = document.getElementsByClassName('menu-active');
            curentMenu[0].className= curentMenu[0].className.replace('menu-active', '');
            menu[i].className += ' menu-active';

            // add bar-active class in up-header_menu-display class
            let curentBar = document.getElementsByClassName('bar-active');
            curentBar[0].className= curentBar[0].className.replace('bar-active', '');
            bar[i].className += ' bar-active';

            // add anchor-active class in anchor class
            let curentAnchor = document.getElementsByClassName('menu-active');
            curentAnchor[0].className= curentAnchor[0].className.replace('anchor-active', '');
            anchor[i].className += ' anchor-active';
        })
    }
</script>

</body>
</html>






