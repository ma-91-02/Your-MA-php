<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" @if (app()->getLocale() == 'ar')
dir="rtl"
@else
dir="ltr"
@endif
>



<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="{{__(('messages.website_iphone_android'))}}">
  <title>{{__('messages.your')}}{{__('messages.MA')}}</title>
  <link rel="apple-touch-icon" href="resources/imgs/logo.png">
  <link rel="icon" href="resources/imgs/logo.png">
  <!-- main css  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('resources/css/normalize.css') }}" />
  <link rel="stylesheet" href="{{ asset('resources/css/yourMA.css') }}" />
  <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/yourMA.css') }}" /> -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="resources/css/all.min.css" />
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@700&display=swap" rel="stylesheet">
  <!-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> -->
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&display=swap" rel="stylesheet" />



  <style>
    /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
    html {
      line-height: 1.15;
      -webkit-text-size-adjust: 100%
    }

    body {
      margin: 0
    }

    a {
      background-color: transparent
    }

    [hidden] {
      display: none
    }

    html {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
      line-height: 1.5
    }

    *,
    :after,
    :before {
      box-sizing: border-box;
      border: 0 solid #e2e8f0
    }

    a {
      color: inherit;
      text-decoration: inherit
    }

    svg,
    video {
      display: block;
      vertical-align: middle
    }

    video {
      max-width: 100%;
      height: auto
    }

    .bg-white {
      --bg-opacity: 1;
      background-color: #fff;
      background-color: rgba(255, 255, 255, var(--bg-opacity))
    }

    .bg-gray-100 {
      --bg-opacity: 1;
      background-color: #f7fafc;
      background-color: rgba(247, 250, 252, var(--bg-opacity))
    }

    .border-gray-200 {
      --border-opacity: 1;
      border-color: #edf2f7;
      border-color: rgba(237, 242, 247, var(--border-opacity))
    }

    .border-t {
      border-top-width: 1px
    }

    .flex {
      display: flex
    }

    .grid {
      display: grid
    }

    .hidden {
      display: none
    }

    .items-center {
      align-items: center
    }

    .justify-center {
      justify-content: center
    }

    .font-semibold {
      font-weight: 600
    }

    .h-5 {
      height: 1.25rem
    }

    .h-8 {
      height: 2rem
    }

    .h-16 {
      height: 4rem
    }

    .text-sm {
      font-size: .875rem
    }

    .text-lg {
      font-size: 1.125rem
    }

    .leading-7 {
      line-height: 1.75rem
    }

    .mx-auto {
      margin-left: auto;
      margin-right: auto
    }

    .ml-1 {
      margin-left: .25rem
    }

    .mt-2 {
      margin-top: .5rem
    }

    .mr-2 {
      margin-right: .5rem
    }

    .ml-2 {
      margin-left: .5rem
    }

    .mt-4 {
      margin-top: 1rem
    }

    .ml-4 {
      margin-left: 1rem
    }

    .mt-8 {
      margin-top: 2rem
    }

    .ml-12 {
      margin-left: 3rem
    }

    .-mt-px {
      margin-top: -1px
    }

    .max-w-6xl {
      max-width: 72rem
    }

    .min-h-screen {
      min-height: 100vh
    }

    .overflow-hidden {
      overflow: hidden
    }

    .p-6 {
      padding: 1.5rem
    }

    .py-4 {
      padding-top: 1rem;
      padding-bottom: 1rem
    }

    .px-6 {
      padding-left: 1.5rem;
      padding-right: 1.5rem
    }

    .pt-8 {
      padding-top: 2rem
    }

    .fixed {
      position: fixed
    }

    .relative {
      position: relative
    }

    .top-0 {
      top: 0
    }

    .right-0 {
      right: 0
    }

    .shadow {
      box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
    }

    .text-center {
      text-align: center
    }

    .text-gray-200 {
      --text-opacity: 1;
      color: #edf2f7;
      color: rgba(237, 242, 247, var(--text-opacity))
    }

    .text-gray-300 {
      --text-opacity: 1;
      color: #e2e8f0;
      color: rgba(226, 232, 240, var(--text-opacity))
    }

    .text-gray-400 {
      --text-opacity: 1;
      color: #cbd5e0;
      color: rgba(203, 213, 224, var(--text-opacity))
    }

    .text-gray-500 {
      --text-opacity: 1;
      color: #a0aec0;
      color: rgba(160, 174, 192, var(--text-opacity))
    }

    .text-gray-600 {
      --text-opacity: 1;
      color: #718096;
      color: rgba(113, 128, 150, var(--text-opacity))
    }

    .text-gray-700 {
      --text-opacity: 1;
      color: #4a5568;
      color: rgba(74, 85, 104, var(--text-opacity))
    }

    .text-gray-900 {
      --text-opacity: 1;
      color: #1a202c;
      color: rgba(26, 32, 44, var(--text-opacity))
    }

    .underline {
      text-decoration: underline
    }

    .antialiased {
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale
    }

    .w-5 {
      width: 1.25rem
    }

    .w-8 {
      width: 2rem
    }

    .w-auto {
      width: auto
    }

    .grid-cols-1 {
      grid-template-columns: repeat(1, minmax(0, 1fr))
    }

    @media (min-width:640px) {
      .sm\:rounded-lg {
        border-radius: .5rem
      }

      .sm\:block {
        display: block
      }

      .sm\:items-center {
        align-items: center
      }

      .sm\:justify-start {
        justify-content: flex-start
      }

      .sm\:justify-between {
        justify-content: space-between
      }

      .sm\:h-20 {
        height: 5rem
      }

      .sm\:ml-0 {
        margin-left: 0
      }

      .sm\:px-6 {
        padding-left: 1.5rem;
        padding-right: 1.5rem
      }

      .sm\:pt-0 {
        padding-top: 0
      }

      .sm\:text-left {
        text-align: left
      }

      .sm\:text-right {
        text-align: right
      }
    }

    @media (min-width:768px) {
      .md\:border-t-0 {
        border-top-width: 0
      }

      .md\:border-l {
        border-left-width: 1px
      }

      .md\:grid-cols-2 {
        grid-template-columns: repeat(2, minmax(0, 1fr))
      }
    }

    @media (min-width:1024px) {
      .lg\:px-8 {
        padding-left: 2rem;
        padding-right: 2rem
      }
    }

    @media (prefers-color-scheme:dark) {
      .dark\:bg-gray-800 {
        --bg-opacity: 1;
        background-color: #2d3748;
        background-color: rgba(45, 55, 72, var(--bg-opacity))
      }

      .dark\:bg-gray-900 {
        --bg-opacity: 1;
        background-color: #1a202c;
        background-color: rgba(26, 32, 44, var(--bg-opacity))
      }

      .dark\:border-gray-700 {
        --border-opacity: 1;
        border-color: #4a5568;
        border-color: rgba(74, 85, 104, var(--border-opacity))
      }

      .dark\:text-white {
        --text-opacity: 1;
        color: #fff;
        color: rgba(255, 255, 255, var(--text-opacity))
      }

      .dark\:text-gray-400 {
        --text-opacity: 1;
        color: #cbd5e0;
        color: rgba(203, 213, 224, var(--text-opacity))
      }

      .dark\:text-gray-500 {
        --tw-text-opacity: 1;
        color: #6b7280;
        color: rgba(107, 114, 128, var(--tw-text-opacity))
      }
    }
  </style>

  <style>
    body {

      font-family: 'Nunito', sans-serif;
    }
  </style>
</head>

<body class="antialiased" >

  <!-- Start this code for login for future -->

  <!-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                            @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                    @auth
                                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                                    @else
                                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                        @endif
                                    @endauth
                                </div>
                            @endif -->
  <!-- End this code  -->


  <!-- Start Upper bar -->

  <div id="upper-bar" class="upper-bar">
    <div class="container">
      <div class="row">
        <div class="info col-sm text-center text-sm-end">
          <ul class="list-unstyled ">
            <li>
              <span class="upp-span"> <i class="fa fa-phone"> </i> {{__('messages.phone')}}</span> &nbsp;<span class="upp-span email"> <i class="far fa-envelope"></i> <a href="mailto:info@your-ma.com?subject=Contact">info@your-ma.com</a></span>
            </li>
          </ul>
        </div>
        <div class="lang col-sm text-center text-sm-start">
          <ul class="list-unstyled ">
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <li>
              <a style="color: #fff;" class="upp-span" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                {{ $properties['native'] }}
              </a>
            </li>
            @endforeach
          </ul>
        </div>

      </div>
    </div>
  </div>

  <!-- End upper bar -->

  <!-- Start Header -->
  <div class="header " id="header">
    <div class="container">
      <a href="{{url('/')}}" class="logo">
        <div class="image logotop">
          <img class="" src="resources/imgs/logo.png" alt="" />
        </div>
      </a>
      <ul class="main-nav">
        <li style="color: #fff;"><a href="{{url('/')}}">{{__('messages.home')}}</a></li>

        @if (app()->getLocale() == 'ar')
        <li>

          <a style="color: #fff;" href="https://your-ma.com/blog/">المدونة</a>
        </li>
        @endif

        <li style="color: #fff;"><a href="{{url('/#pricing')}}">{{__('messages.pricing')}}</a></li>
        <li style="color: #fff;"><a href="#features">{{__('messages.features')}}</a></li>
        <li>
          <a style="color: #fff;" href="#">{{__('messages.otherLinks')}}</a>
          <!-- Start Megamenu -->
          <div class="mega-menu">
            <div class="image">
              <img src="resources/imgs/megamenu.png" alt="" />
            </div>
            <ul class="links">
              <!-- <li>
                  <a href="#testimonials"><i class="far fa-comments fa-fw"></i> {{__('messages.testimonials')}}</a>
                </li> -->
              <li>
                <a href="{{url('/#team')}}"><i class="far fa-user fa-fw"></i> {{__('messages.teamMembers')}}</a>
              </li>
              <li>
                <a href="{{url('/#services')}}"><i class="far fa-building fa-fw"></i> {{__('messages.service')}}</a>
              </li>
              <li>
                <a href="{{url('/#our-skills')}}"><i class="far fa-check-circle fa-fw"></i> {{__('messages.ourSkills')}}</a>
              </li>
              <li>
                <a href="{{url('/home#work-steps')}}"><i class="far fa-clipboard fa-fw"></i> {{__('messages.howItWork')}}</a>
              </li>
            </ul>
            <ul class="links">
              <li>
                <a href="{{url('/#events')}}"><i class="far fa-calendar-alt fa-fw"></i> {{__('messages.latestEvents')}}</a>
              </li>
              <li>
                <a href="{{url('/#gallery')}}"><i class="fas fa-server fa-fw"></i> {{__('messages.gallery')}}</a>
              </li>
              <li>
                <a href="{{url('/#discount')}}"><i class="fas fa-percent fa-fw"></i> {{__('messages.requestDiscount')}}</a>
              </li>
            </ul>
          </div>
          <!-- End Megamenu -->
        </li>
      </ul>
    </div>
  </div>
  <!-- End Header -->
  <!-- Start Landing -->
  <div class="landing">
    <div class="container">
      <div class="text">
        <h1>{{__(('messages.welcome'))}} <br /> <span class="title"> {{__('messages.your')}}{{__('messages.MA')}}</span></h1>
        <p>{{__(('messages.website_iphone_android'))}}</p>
      </div>
      <div class="image">
        <img src="resources/imgs/logo.png" alt="" />
      </div>
    </div>
    <a href="{{url('/#events')}}" class="go-down">
      <i class="fas fa-angle-double-down fa-2x"></i>
    </a>
  </div>
  <!-- End Landing -->
  <!-- Start Articles -->
  <!-- <div class="articles" id="articles">
        <h2 class="main-title">{{__('messages.articles')}}</h2>
        <div class="container">
          <div class="box">
            <img src="resources/imgs/cat-01.jpg" alt="" />
            <div class="content">
              <h3>Test Title</h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
            </div>
            <div class="info">
              <a href="#">Read More</a>
              <i class="fas fa-long-arrow-alt-right"></i>
            </div>
          </div>
          <div class="box">
            <img src="resources/imgs/cat-02.jpg" alt="" />
            <div class="content">
              <h3>Test Title</h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
            </div>
            <div class="info">
              <a href="#">Read More</a>
              <i class="fas fa-long-arrow-alt-right"></i>
            </div>
          </div>
          <div class="box">
            <img src="resources/imgs/cat-03.jpg" alt="" />
            <div class="content">
              <h3>Test Title</h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
            </div>
            <div class="info">
              <a href="#">Read More</a>
              <i class="fas fa-long-arrow-alt-right"></i>
            </div>
          </div>
          <div class="box">
            <img src="resources/imgs/cat-04.jpg" alt="" />
            <div class="content">
              <h3>Test Title</h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
            </div>
            <div class="info">
              <a href="#">Read More</a>
              <i class="fas fa-long-arrow-alt-right"></i>
            </div>
          </div>
          <div class="box">
            <img src="resources/imgs/cat-05.jpg" alt="" />
            <div class="content">
              <h3>Test Title</h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
            </div>
            <div class="info">
              <a href="#">Read More</a>
              <i class="fas fa-long-arrow-alt-right"></i>
            </div>
          </div>
          <div class="box">
            <img src="resources/imgs/cat-06.jpg" alt="" />
            <div class="content">
              <h3>Test Title</h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
            </div>
            <div class="info">
              <a href="#">Read More</a>
              <i class="fas fa-long-arrow-alt-right"></i>
            </div>
          </div>
          <div class="box">
            <img src="resources/imgs/cat-07.jpg" alt="" />
            <div class="content">
              <h3>Test Title</h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
            </div>
            <div class="info">
              <a href="#">Read More</a>
              <i class="fas fa-long-arrow-alt-right"></i>
            </div>
          </div>
          <div class="box">
            <img src="resources/imgs/cat-08.jpg" alt="" />
            <div class="content">
              <h3>Test Title</h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
            </div>
            <div class="info">
              <a href="#">Read More</a>
              <i class="fas fa-long-arrow-alt-right"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="spikes"></div> -->
  <!-- End Articles -->
  <!-- Start Events -->
  <div class="events" id="events">
    <!-- <div class="dots dots-up"></div> -->
    <!-- <div class="dots dots-down"></div> -->
    <h2 class="main-title">{{__('messages.latestEvents')}}</h2>
    <div class="container">
      <img src="resources/imgs/events.png" alt="" />
      <div class="info">
        <div class="time">
          <div class="unit">
            <span id="days"></span>
            <span>{{__('messages.days')}}</span>
          </div>
          <div class="unit">
            <span id="hours"></span>
            <span>{{__('messages.hours')}}</span>
          </div>
          <div class="unit">
            <span id="minutes"></span>
            <span>{{__('messages.minutes')}}</span>
          </div>
          <div class="unit">
            <span id="seconds"></span>
            <span>{{__('messages.seconds')}}</span>
          </div>
        </div>
        <h2 class="title">{{__('messages.eventTitle1')}}</h2>
        <p class="description">
          {{__('messages.eventContent1')}}<br />
          <a href="{{url('/frontEnd')}}" target="_blank">{{__('messages.moreCours')}}</a>
        </p>
        <h2 class="title">{{__('messages.eventTitle2')}}</h2>
        <p class="description">
          {{__('messages.eventContent2')}}<br />
          <a href="{{url('/backEnd')}}" target="_blank">{{__('messages.moreCours')}}</a>
        </p>
      </div>
      <!-- <div class="subscribe">
          <form action="">
            <input type="email" placeholder="{{__('messages.enterYourEmail')}}" />
            <input type="submit" value="{{__('messages.subscribe')}}" />
          </form>
        </div> -->
    </div>
  </div>
  <!-- End Events -->
  <!-- Start Pricing -->
  <div class="pricing" id="pricing">
    <div class="dots dots-up"></div>
    <div class="dots dots-down"></div>
    <h2 class="main-title">{{__('messages.pricing')}}</h2>
    <div class="container">
      <div class="box">
        <div class="title">{{__('messages.tp0')}}</div>
        <div class="price">
          <span class="amount">{{__('messages.pp0')}}</span>
          <span class="time">{{__('messages.pcsh01')}}</span>
        </div>
        <ul>
          <li>{{__('messages.pcsh03')}}</li>
          <li>{{__('messages.pcsh04')}}</li>
          <li>{{__('messages.pcsh05')}}</li>
          <br /><br /><br /><br /><br /><br />
        </ul>
        <a href="{{url('/pricing#landingPage')}}">{{__('messages.more')}}</a>
      </div>
      <div class="box">
        <div class="title">{{__('messages.tp1')}}</div>
        <div class="price">
          <span class="amount">{{__('messages.pp1')}}</span>
          <span class="time">{{__('messages.pcsh11')}}</span>
        </div>
        <ul>
          <li>{{__('messages.pcsh13')}}</li>
          <li>{{__('messages.pcsh14')}}</li>
          <li>{{__('messages.pcsh15')}}</li>
          <br /><br /><br /><br /><br /><br />
        </ul>
        <a href="{{url('/pricing#landingPage')}}">{{__('messages.more')}}</a>
      </div>
      <div class="box">
        <div class="title">{{__('messages.tp2')}}</div>
        <div class="price">
          <span class="amount">{{__('messages.pp2')}}</span>
          <span class="time">{{__('messages.pcsh21')}}</span>
        </div>
        <ul>
          <li>{{__('messages.pcsh23')}}</li>
          <li>{{__('messages.pcsh24')}}</li>
          <li>{{__('messages.pcsh25')}}</li>
          <br /><br /><br /><br /><br /><br />
        </ul>
        <a href="{{url('/pricing#landingPage')}}">{{__('messages.more')}}</a>
      </div>
      <div class="box">
        <div class="title">{{__('messages.tp3')}}</div>
        <div class="price">
          <span class="amount">{{__('messages.pp3')}}</span>
          <span class="time">{{__('messages.pcsh31')}}</span>
        </div>
        <ul>
          <li>{{__('messages.pcsh33')}}</li>
          <li>{{__('messages.pcsh34')}}</li>
          <li>{{__('messages.pcsh35')}}</li>
          <br /><br /><br /><br /><br /><br />
        </ul>
        <a href="{{url('/pricing#landingPage')}}">{{__('messages.more')}}</a>
      </div>
      <div class="box">
        <div class="title">{{__('messages.tp4')}}</div>
        <div class="price">
          <span class="amount">{{__('messages.pp4')}}</span>
          <span class="time">{{__('messages.pcsh41')}}</span>
        </div>
        <ul>
          <li>{{__('messages.pcsh43')}}</li>
          <li>{{__('messages.pcsh44')}}</li>
          <li>{{__('messages.pcsh45')}}</li>
          <br /><br /><br /><br /><br /><br />
        </ul>
        <a href="{{url('/pricing#landingPage')}}">{{__('messages.more')}}</a>
      </div>
      <div class="box">
        <div class="title">{{__('messages.tp5')}}</div>
        <div class="price">
          <span class="amount">{{__('messages.pp5')}}</span>
          <span class="time">{{__('messages.pcsh51')}}</span>
        </div>
        <ul>
          <li>{{__('messages.pcsh53')}}</li>
          <li>{{__('messages.pcsh54')}}</li>
          <li>{{__('messages.pcsh55')}}</li>
          <br /><br /><br /><br /><br /><br />
        </ul>
        <a href="{{url('/pricing#landingPage')}}">{{__('messages.more')}}</a>
      </div>
      <div class="box">
        <div class="title">{{__('messages.tp6')}}</div>
        <div class="price">
          <span class="amount">{{__('messages.pp6')}}</span>
          <span class="time">{{__('messages.pcsh61')}}</span>
        </div>
        <ul>
          <li>{{__('messages.pcsh63')}}</li>
          <li>{{__('messages.pcsh64')}}</li>
          <li>{{__('messages.pcsh65')}}</li>
          <br /><br /><br /><br /><br /><br />
        </ul>
        <a href="{{url('/pricing#landingPage')}}">{{__('messages.more')}}</a>
      </div>
    </div>
  </div>
  <!-- End Pricing -->
  <!-- Start Features -->
  <div class="features" id="features">
    <h2 class="main-title">{{__('messages.features')}}</h2>
    <div class="container">
      <div class="box quality">
        <div class="img-holder"><img src="resources/imgs/features-01.jpg" alt="" /></div>
        <h2>{{__('messages.quality')}}</h2>
        <p>{{__('messages.qualityContent')}}</p>
        <a href="#">{{__('messages.more')}}</a>
      </div>
      <div class="box time">
        <div class="img-holder"><img src="resources/imgs/features-02.jpg" alt="" /></div>
        <h2>{{__('messages.time')}}</h2>
        <p> {{__('messages.timeContent')}}</p>
        <a href="#">{{__('messages.more')}}</a>
      </div>
      <div class="box passion">
        <div class="img-holder"><img src="resources/imgs/features-03.jpg" alt="" /></div>
        <h2>{{__('messages.passion')}}</h2>
        <p>{{__('messages.passionContent')}}</p>
        <a href="#">{{__('messages.more')}}</a>
      </div>
    </div>
  </div>
  <!-- End Features -->
  <!-- Start Gallery -->
  <div class="gallery" id="gallery">
    <h2 class="main-title">{{__('messages.gallery')}}</h2>
    <div class="container">
      <a href="http://theme1.your-ma.com/" target="_blank">
        <div class="box">
          <div class="image">
            <img src="resources/imgs/theme1.png" alt="" />
          </div>
        </div>
      </a>
      <a href="http://theme2.your-ma.com/" target="_blank">
        <div class="box">
          <div class="image">
            <img src="resources/imgs/theme2.png" alt="" />
          </div>
        </div>
      </a>
      <a href="http://theme3.your-ma.com/" target="_blank">
        <div class="box">
          <div class="image">
            <img src="resources/imgs/theme3.png" alt="" />
          </div>
        </div>
      </a>
      <a href="http://theme4.your-ma.com/" target="_blank">
        <div class="box">
          <div class="image">
            <img src="resources/imgs/theme4.png" alt="" />
          </div>
        </div>
      </a>
    </div>
  </div>
  <!-- End Gallery -->
  <!-- Start Team -->
  <div class="team" id="team">
    <h2 class="main-title">{{__('messages.teamMembers')}}</h2>
    <div class="container">
      <div class="box">
        <div class="data">
          <img src="resources/imgs/saif.jpg" alt="" />
          <div class="social">
            <a href="#">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
              <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="#">
              <i class="fab fa-youtube"></i>
            </a>
          </div>
        </div>
        <div class="info">
          <h3>{{__('messages.saif')}} </h3>
          <p>{{__('messages.saifContent')}}</p>
        </div>
      </div>
      <div class="box">
        <div class="data">
          <img src="resources/imgs/ceo.jpg" alt="" />
          <div class="social">
            <a href="#">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
              <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="#">
              <i class="fab fa-youtube"></i>
            </a>
          </div>
        </div>
        <div class="info">
          <h3>{{__('messages.mohamedAlzurfi')}} </h3>
          <p>{{__('messages.mohamedContent')}}</p>
        </div>
      </div>
      <div class="box">
        <div class="data">
          <img src="resources/imgs/alina.jpg" alt="" />
          <div class="social">
            <a href="#">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
              <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="#">
              <i class="fab fa-youtube"></i>
            </a>
          </div>
        </div>
        <div class="info">
          <h3>{{__('messages.alina')}}</h3>
          <p>{{__('messages.alinaContent')}}</p>
        </div>
      </div>
    </div>
  </div>
  <div class="spikes"></div>
  <!-- End Team -->
  <!-- Start Testimonials -->
  <!-- <div class="testimonials" id="testimonials">
        <h2 class="main-title">{{__('messages.testimonials')}}</h2>
        <div class="container">
          <div class="box">
            <img src="resources/imgs/avatar-01.png" alt="" />
            <h3>Mohamed Farag</h3>
            <span class="title">Full Stack Developer</span>
            <div class="rate">
              <i class="filled fas fa-star"></i>
              <i class="filled fas fa-star"></i>
              <i class="filled fas fa-star"></i>
              <i class="filled fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores et reiciendis voluptatum, amet est natus
              quaerat ducimus
            </p>
          </div>
          <div class="box">
            <img src="resources/imgs/avatar-02.png" alt="" />
            <h3>Mohamed Ibrahim</h3>
            <span class="title">Full Stack Developer</span>
            <div class="rate">
              <i class="filled fas fa-star"></i>
              <i class="filled fas fa-star"></i>
              <i class="filled fas fa-star"></i>
              <i class="filled fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores et reiciendis voluptatum, amet est natus
              quaerat ducimus
            </p>
          </div>
          <div class="box">
            <img src="resources/imgs/avatar-03.png" alt="" />
            <h3>Shady Nabil</h3>
            <span class="title">Full Stack Developer</span>
            <div class="rate">
              <i class="filled fas fa-star"></i>
              <i class="filled fas fa-star"></i>
              <i class="filled fas fa-star"></i>
              <i class="filled fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores et reiciendis voluptatum, amet est natus
              quaerat ducimus
            </p>
          </div>
          <div class="box">
            <img src="resources/imgs/avatar-04.png" alt="" />
            <h3>Amr Hendawy</h3>
            <span class="title">Full Stack Developer</span>
            <div class="rate">
              <i class="filled fas fa-star"></i>
              <i class="filled fas fa-star"></i>
              <i class="filled fas fa-star"></i>
              <i class="filled fas fa-star"></i>
              <i class="filled fas fa-star"></i>
            </div>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores et reiciendis voluptatum, amet est natus
              quaerat ducimus
            </p>
          </div>
          <div class="box">
            <img src="resources/imgs/avatar-05.png" alt="" />
            <h3>Sherief Ashraf</h3>
            <span class="title">Full Stack Developer</span>
            <div class="rate">
              <i class="filled fas fa-star"></i>
              <i class="filled fas fa-star"></i>
              <i class="filled fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores et reiciendis voluptatum, amet est natus
              quaerat ducimus
            </p>
          </div>
          <div class="box">
            <img src="resources/imgs/avatar-06.png" alt="" />
            <h3>Osama Mohamed</h3>
            <span class="title">Full Stack Developer</span>
            <div class="rate">
              <i class="filled fas fa-star"></i>
              <i class="filled fas fa-star"></i>
              <i class="filled fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores et reiciendis voluptatum, amet est natus
              quaerat ducimus
            </p>
          </div>
        </div>
      </div> -->
  <!-- End Testimonials -->

  <!-- Start Services -->
  <div class="services" id="services">
    <h2 class="main-title">{{__('messages.service')}}</h2>
    <div class="container">
      <div class="box">
        <i class="fas fa-pen-nib fa-4x"></i>
        <h3>{{__('messages.webDesign')}}</h3>
        <div class="info">
          <a href="#">Details</a>
        </div>
      </div>
      <div class="box">
        <i class="fas fa-laptop-code fa-4x"></i>
        <h3>{{__('messages.webDevelopment')}}</h3>
        <div class="info">
          <a href="#">Details</a>
        </div>
      </div>
      <div class="box">
        <i class="fab fa-android fa-4x"></i>
        <h3>{{__('messages.androidApp')}}</h3>
        <div class="info">
          <a href="#">Details</a>
        </div>
      </div>
      <div class="box">
        <i class="fab fa-apple fa-4x"></i>
        <h3>{{__('messages.iphoneApp')}}</h3>
        <div class="info">
          <a href="#">Details</a>
        </div>
      </div>
      <div class="box">
        <i class="fas fa-graduation-cap fa-4x"></i>

        <h3>{{__('messages.educationalCourses')}}</h3>
        <div class="info">
          <a href="#">Design</a>
        </div>
      </div>
      <div class="box">

        <i class="fas fa-rocket fa-4x"></i>
        <h3>{{__('messages.service')}}</h3>
        <div class="info">
          <a href="#">Details</a>
        </div>
      </div>
    </div>
  </div>
  <!-- End Services -->
  <!-- Start Skills -->
  <div class="our-skills" id="our-skills">
    <h2 class="main-title">{{__('messages.ourSkills')}}</h2>
    <div class="container">
      <img src="resources/imgs/skills.png" alt="" />
      <div class="skills">
        <div class="skill">
          <h3>HTML <span>80%</span></h3>
          <div class="the-progress">
            <span style="width: 80%"></span>
          </div>
        </div>
        <div class="skill">
          <h3>CSS <span>85%</span></h3>
          <div class="the-progress">
            <span style="width: 85%"></span>
          </div>
        </div>
        <div class="skill">
          <h3>JavaScript <span>85%</span></h3>
          <div class="the-progress">
            <span style="width: 85%"></span>
          </div>
        </div>
        <div class="skill">
          <h3>PHP <span>90%</span></h3>
          <div class="the-progress">
            <span style="width: 90%"></span>
          </div>
        </div>
        <div class="skill">
          <h3>Laravel <span>88%</span></h3>
          <div class="the-progress">
            <span style="width: 88%"></span>
          </div>
        </div>
        <div class="skill">
          <h3>Wordpress <span>80%</span></h3>
          <div class="the-progress">
            <span style="width: 80%"></span>
          </div>
        </div>
        <div class="skill">
          <h3>React <span>85%</span></h3>
          <div class="the-progress">
            <span style="width: 85%"></span>
          </div>
        </div>
        <div class="skill">
          <h3>React Native <span>90%</span></h3>
          <div class="the-progress">
            <span style="width: 90%"></span>
          </div>
        </div>
        <div class="skill">
          <h3>Next.js <span>80%</span></h3>
          <div class="the-progress">
            <span style="width: 80%"></span>
          </div>
        </div>
        <div class="skill">
          <h3>Node.js <span>80%</span></h3>
          <div class="the-progress">
            <span style="width: 80%"></span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Skills -->
  <!-- Start Work Steps -->
  <div class="work-steps" id="work-steps">
    <h2 class="main-title">{{__('messages.howItWork')}}</h2>
    <div class="container">
      <img src="resources/imgs/work-steps.png" alt="" class="image" />
      <div class="info">
        <div class="box">
          <img src="resources/imgs/work-steps-1.png" alt="" />
          <div class="text">
            <h3>{{__('messages.businessAnalysis')}}</h3>
            <p>
              {{__('messages.businessAnalysisContent')}}
            </p>
          </div>
        </div>
        <div class="box">
          <img src="resources/imgs/work-steps-2.png" alt="" />
          <div class="text">
            <h3>{{__('messages.businessDesign')}}</h3>
            <p>
              {{__('messages.businessDesignContent')}}
            </p>
          </div>
        </div>
        <div class="box">
          <img src="resources/imgs/work-steps-3.png" alt="" />
          <div class="text">
            <h3>{{__('messages.Developement')}}</h3>
            <p>
              {{__('messages.DevelopementContent')}}
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Work Steps -->

  <!-- Start Videos -->
  <!-- <div class="videos" id="videos">
        <h2 class="main-title">Top Videos</h2>
        <div class="container">
            <div class="holder">
            <div class="list">
                <div class="name">
                Top Videos
                <i class="fas fa-random"></i>
                </div>
                <ul>
                <li>How To Create Sub Domain<span>05:18</span></li>
                <li>Playing With The DNS <span>03:18</span></li>
                <li>Everything About The Virtual Hosts <span>05:25</span></li>
                <li>How To Monitor Your Website <span>04:16</span></li>
                <li>Uncharted Beating The Last Boss <span>07:48</span></li>
                <li>Ys Oath In Felghana Overview <span>03:12</span></li>
                <li>Ys Series All Games Ending <span>08:10</span></li>
                </ul>
            </div>
            <div class="preview">
                <img src="resources/imgs/video-preview.jpg" alt="" />
                <div class="info">Everything About The Virtual Hosts</div>
            </div>
            </div>
        </div>
        </div> -->
  <!-- End Videos -->
  <!-- Start Stats -->
  <!-- <div class="stats" id="stats">
        <h2>Our Awesome Stats</h2>
        <div class="container">
          <div class="box">
            <i class="far fa-user fa-2x fa-fw"></i>
            <span class="number">300</span>
            <span class="text">Clients</span>
          </div>
          <div class="box">
            <i class="fas fa-code fa-2x fa-fw"></i>
            <span class="number">400</span>
            <span class="text">Projects</span>
          </div>
          <div class="box">
            <i class="fas fa-globe-asia fa-2x fa-fw"></i>
            <span class="number">12</span>
            <span class="text">Countries</span>
          </div>
          <div class="box">
            <i class="far fa-money-bill-alt fa-2x fa-fw"></i>
            <span class="number">500K</span>
            <span class="text">Money</span>
          </div>
        </div>
      </div> -->
  <!-- End Stats -->

  <!-- Start Discount -->
  <!-- <div class="discount" id="discount">
      <div class="image">
        <div class="content">
          <h2>We Have A Discount</h2>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi asperiores consectetur, recusandae
            ratione provident necessitatibus, cumque delectus commodi fuga praesentium beatae. Totam vel similique
            laborum dicta aperiam odit doloribus corporis.
          </p>
          <img src="resources/imgs/discount.png" alt="" />
        </div>
      </div>
      <div class="form">
        <div class="content">
          <h2>{{__('messages.requestDiscount')}}</h2>
          <form action="">
            <input class="input" type="text" placeholder="Your Name" name="name" />
            <input class="input" type="email" placeholder="Your Email" name="email" />
            <input class="input" type="text" placeholder="Your Phone" name="mobile" />
            <textarea class="input" placeholder="Tell Us About Your Needs" name="message"></textarea>
            <input type="submit" value="Send" />
          </form>
        </div>
      </div>
    </div> -->
  <!-- End Discount -->

  <!-- start go to top -->
  <div class="scroll-top" style="display: block;">
    <a href="#upper-bar"><i class="fas fa-arrow-up"></i></a>
  </div>

  <!-- End go to top -->
  <!-- Start Footer -->
  <div class="footer">
    <div class="container">
      <div class="box">
        <h3>{{__('messages.your')}}{{__('messages.MA')}}</h3>
        <ul class="social">
          <li>
            <a href="https://www.facebook.com/Your-MA-102030702098496" class="facebook">
              <i class="fab fa-facebook-f"></i>
            </a>
          </li>
          <li>
            <a href="https://www.youtube.com/channel/UCoyfWHRcfOvnh7asK7s4-gQ" class="youtube">
              <i class="fab fa-youtube"></i>
            </a>
          </li>
          <li>
            <a href="https://twitter.com/MohammedZurfi" class="twitter">
              <i class="fab fa-vk"></i>
            </a>
          </li>
          <li>
            <a href="https://t.me/joinchat/Yn78bk9MxKcxOTJi" class="twitter">
              <i class="fab fa-telegram-plane"></i>
            </a>
          </li>
        </ul>
        <p class="text">
          {{__(('messages.website_iphone_android'))}}
        </p>
      </div>
      <div class="box">
        <ul class="links">
          <li><a href="{{url('/')}}">{{__('messages.home')}}</a></li>
          <li><a href="{{url('/#pricing')}}">{{__('messages.pricing')}}</a></li>
          <li><a href="#features">{{__('messages.features')}}</a></li>
        </ul>
      </div>
      <div class="box">
        <div class="line">
          <i class="fas fa-map-marker-alt fa-fw"></i>
          <div class="info">{{__('messages.addres')}}</div>
        </div>
        <div class="line">
          <i class="far fa-clock fa-fw"></i>
          <div class="info">
            {{__('messages.businessHours')}}<br />
            {{__('messages.businessDays')}}
          </div>
        </div>
        <div class="line">
          <i class="fas fa-phone-volume fa-fw"></i>
          <div class="info">
            <span>+79005138049</span>
          </div>
        </div>
      </div>
      <div class="box footer-gallery">
        <img src="resources/imgs/theme1.png" alt="" />
        <img src="resources/imgs/gallery-02.png" alt="" />
        <img src="resources/imgs/gallery-03.jpg" alt="" />
        <img src="resources/imgs/gallery-04.png" alt="" />
        <img src="resources/imgs/gallery-05.jpg" alt="" />
        <img src="resources/imgs/gallery-06.png" alt="" />
      </div>
    </div>
    <p class="copyright"> &copy; {{__('messages.your')}}{{__('messages.MA')}} </p>
  </div>
  <script src="resources/js/app.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
  <!-- End Footer -->
</body>

</html>