<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta
              name="description"           
              content="Website & iPhone & Android Development Company
        with creative solutions.">
        <title>{{__('messages.your')}}{{__('messages.MA')}}</title>
        <link rel="apple-touch-icon" href="../resources/imgs/logo.png">
        <link rel="icon" href="../resources/imgs/logo.png">
        <!-- main css  -->
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">
        <link rel="stylesheet" href="../resources/css/normalize.css" />
        <link rel="stylesheet" href="../resources/css/yourMA.css" />
            <!-- Font Awesome -->
    <link rel="stylesheet" href="../resources/css/all.min.css" />
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
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}}
        </style>            

        <style>
            body {
                
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body  style="direction: rtl;" class="antialiased">

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
                    
                <div  style="direction: ltr;" id="upper-bar" class="upper-bar">
                  <div class="container">
                        <div class="row">
                        <div class="info col-sm text-center text-sm-end">
                                <ul class="list-unstyled ">
                                    <li>
                                    <span class="upp-span "> <i class="fa fa-phone"> </i>  {{__('messages.phone')}}</span> 	&nbsp;<span class="upp-span email"> <i class="far fa-envelope"></i> <a href="mailto:info@your-ma.com?subject=Contact">info@your-ma.com</a></span>
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
    <div style="direction: ltr;" class="header " id="header">
      <div class="container">
        <a href="{{url('/')}}" class="logo">        <div class="image logotop">
          <img  class =""src="../resources/imgs/logo.png" alt="" />
        </div></a>
        <ul class="main-nav">
          <li><a href="{{url('/')}}">{{__('messages.home')}}</a></li>
          <li><a href="{{url('/#pricing')}}">{{__('messages.pricing')}}</a></li>
          <li><a href="#features">{{__('messages.features')}}</a></li>
          <li>
            <a href="#">{{__('messages.otherLinks')}}</a>
            <!-- Start Megamenu -->
            <div class="mega-menu">
              <div class="image">
                <img src="../resources/imgs/megamenu.png" alt="" />
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
                <!-- <li>
                  <a href="#video"><i class="far fa-play-circle fa-fw"></i> Top Videos</a>
                </li> -->
                <!-- <li>
                  <a href="#stats"><i class="far fa-chart-bar fa-fw"></i> Stats</a>
                </li> -->
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
          <h1 class="title">كورس الواجهة الامامية Front-End </h1><br/>
          <p><a href="https://docs.google.com/forms/d/e/1FAIpQLSdEjD3F_oiALMRdDKn1auyNXfgq-oln4pkAr1WLc2k1E0UPxg/viewform"> التسجيل</a> سوف تتعلم كيفية انشاء مواقع ويب وتطبيقات ويب كاملة من البداية الى الاحتراف بمبلغ 600 دولار </p>
          
        </div>
        <div class="image">
          <img src="../resources/imgs/cours.webp" alt="" />
        </div>
      </div>
      <a href="{{url('/frontEnd#frontend-who')}}" class="go-down">
        <i class="fas fa-angle-double-down fa-2x"></i>
      </a>
    </div>
    <!-- End Landing -->

    <!-- Start Articles -->
      <div class="articles" id="articles">
        <div class="container">
          <div class="box">
            <div class="content">
              <p>تبدأ الدورة بأساسيات علوم الحاسوب ومن أبسط المفاهيم البرمجية إلى المفاهيم المتقدمة وأفضل الأساليب المتبعة في البرمجة.</p>
            </div>

          </div>
          <div class="box">
            <div class="content">
              <p>الدورة هي عبارة عن مساق تدريبي كامل يبدأ من الصفر تمامًا وتوصلك إلى مرحلة متقدمة من التعامل مع مختلف التقنيات.</p>
            </div>

          </div>
          <div class="box">
            <div class="content">
              <p>الدورة لا تعلّم الأساسيات فقط بل تضعك على بوابة الاحتراف لتكمل طريقك وتنافس المحترفين.</p> <br> <br><br>
            </div>
          </div>
          <div class="box">
            <div class="content">
              <p>تعتمد الدورة على التطبيق العملي مصحوبًا بالشرح النظري الأساسي .</p>
            </div>
          </div>
          <div class="box">
            <div class="content">
              <p>إلى جانب تعلّم الأساسيات ستتعلم كيف توظف هذه المعلومات في حياتك العملية البرمجية</p>
            </div>
          </div>
          <div class="box">
            <div class="content">
              <p>كيف تتعامل مع مختلف الأنظمة خصوصًا نظام لينكس الشهير بين المبرمجين.</p>
            </div>
          </div>
          
        </div>
      </div>
      <div class="spikes"></div>
    <!-- End Articles -->
    <!-- Start Work Steps -->
    <div style="direction: ltr;"  class="work-steps" id="work-steps">
      <div class="container">
        <img src="../resources/imgs/work-steps.png" alt="" class="image" />
        <div class="info">
          <div class="box">
            <div class="text text-start">
              <h3>المحاضر المهندس محمد الزرفي </h3>
              <p>
              مهندس حاسوب حاصل على شهادة البكلوريوس من العراق و شهادة الماجستير من روسيا الاتحادية مع خبرة 8 سنوات عمل في الشركات العراقية و الأوربية              </p>
            </div>
          </div>
          <div class="box">
            <div class="text text-start">
              <h3>الدعم </h3>
              <p>
              عالم البرمجة هو عالم سريع التطور و لهذا سوف نوفر لكم ندوات دعم فني نقدم من خلالها احدث التقنيات و طرق استخدامها مقابل خصومات كبيرة لطلابنا
              </p>
            </div>
          </div>
          <div class="box">
            <div class="text text-start">
              <h3>مميزات اخرى </h3>
              <p>

              بعد اكمالك الدورة ستكون قادر على العمل من المنزل او اي مكان اخر ...اوقات عمل مناسبة ..عائد مادي ممتاز
              </p>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Work Steps -->
     <!-- Start Features -->
     <div class="featuresFront" id="frontend-who">
      <h2 class="main-title">لمن هذه الدورة ؟</h2>
      <div class="container">
        <div class="box quality">
          <div class="img-holder"><img src="../resources/imgs/features-01.jpg" alt="" /></div>
          <h2> للمبتدئين من الصفر </h2>
          <p>
          <ul class="unstyled">
            <li>لمن لا يمتلك أي خبرة مسبقة في البرمجة ويريد الدخول في هذا المجال الشيق</li>
            <li> لمن يفكر بتغيير مساره المهني ويرغب بأن يصبح مبرمج ولا يعرف من أين يبدأ</li>
            <li> لمن حاول تعلم البرمجة بالسابق وشعر أنها صعبة ولم يتمكن من المواصلة</li>
          </ul></p>
        </div>
        <div class="box time">
          <div class="img-holder"><img src="../resources/imgs/features-02.jpg" alt="" /></div>
          <h2>المطورين المبتدئين</h2>
          <p> 
            <ul class="unstyle">
              <li>للمبرمجين الذين تعلموا احدى لغات البرمجة ذاتياً ويرغبوا بملئ الفراغات وتعلم الأسس </li>
              <li>من يمتلك خبرة بسيطة ويرغب في صقل مهاراته بالتعلّم على أسس قوية بغرض تحديث معلوماته</li>
              <li>من يرغب باكتساب مهارت جديدة تساعده على تحسين دخله كفرصة عمل أفضل أو العمل الحر من الإنترنت</li>
            </ul>
          </p>
        </div>
        <div class="box passion">
          <div class="img-holder"><img src="../resources/imgs/features-03.jpg" alt="" /></div>
          <h2>مختصصو تكنولوجيا المعلومات</h2>
          <p>
          <ul class="unstyle">
              <li> لمن يرغب تعلم تطوير تطبيقات ويب تفاعلية باستخدام مكتبة React.js </li>
              <li>لمن يرغب بتطوير تطبيقات جوال Android و iOS أصيلة باستخدام React Native </li>
              <li>لإنشاء تطبيقات سطح مكتب أساسية </li>
            </ul>
          </p>
        </div>
      </div>
      
    </div>
    <!-- End Features -->


    <!-- start  -->
    <div class="program">
        <div class="container">
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#one" aria-expanded="false" aria-controls="one">
                ليس لدي خبرة في تطوير الويب. هل هذه الدورة صحيحة بالنسبة لي؟
              </button>
                </h2>
                <div id="one" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                </div>
                  <p>
                    نعم ، الدورة مناسبة للمبتدئين تمامًا وليس لديهم خبرة في البرمجة. ولكن من أجل تحقيق النتيجة ، سيتعين عليك محاولة - أداء واجبك المنزلي ، والقراءة الإضافية والمشاركة في مشاريع التخرج. وسوف تساعدك Your MA في الباقي - سنحلل المشاكل المعقدة والإجابة على الأسئلة المتعلقة بموضوع الدرس ، وسنقوم بإعدادك للعمل
                    </p>
                </div>
            </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#two" aria-expanded="false" aria-controls="two">
                    هل تحتاج اللغة الانجليزية 
                    </button>
                    </h2>
                    <div id="two" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                     <p>
                      ليس من الضروري على الإطلاق. سوف تتم ترجمة الوثائق جميع لغات البرمجة إلى اللغة العربية ، وسوف تتذكر أسماء وظائف الكود في عملية التعلم.
                      </p>
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#three" aria-expanded="false" aria-controls="three">
                    كم ساعة في الأسبوع سأحتاج إلى تكريسها لدراستي؟
                    </button>
                    </h2>
                    <div id="three" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <p> الامر يختلف من طالب الى اخر حيث يعتم على قدراتك في التعلم . في  المتوسط سوف تكون هناك 4 دروس في الاسبوع  والدرس من ساعة ونصف الى 3 ساعات سوف يكون هناك تسجيل فديو للمحاضرة حيث تستطيع الوصول لها مدى الحياة
                    </p>
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#four" aria-expanded="false" aria-controls="four">
                    هل سأكون قادرًا على التواصل مع المحاضر؟
                    </button>
                    </h2>
                    <div id="four" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    </div>
                      <p>نعم وسوف يكون هناك مجموعة على التيلجرام وايضا تواصل مباشر والاجابة على الاسئلة خلال المحاضرة </p>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#five" aria-expanded="false" aria-controls="five">
                    هل توجد برامج تقسيط معمول بها؟
                    </button>
                    </h2>
                    <div id="five" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    </div>
                    <p>نعم يمكنك شراء الدورة على اقساط حيث تدفع 50% من قيمة الدورة والباقي يتقسم على اقساط شهرية</p>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#six" aria-expanded="false" aria-controls="six">
                    هل توجد شهادة ؟
                    </button>
                    </h2>
                    <div id="six" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    </div>
                    <p>نعم سوف تحصل على شهادة بعد ان تجتاز الامتحان المقرر في نهاية الدورة صادرة من شركة يور ما المسجلة في روسيا الاتحادية باللغة الروسية والانجليزية [ النسخة الالكترونية مجانا ]    ,  وفي حال طلب نسخة ورقية يتحمل الطالب التكاليف المالية  </p>
                    </div>
                </div>
                
            </div>
            </div>
        </div>
    </div>
    <!-- End -->



    <h2 class="main-title"> ماذا سوف تتعلم في مسار الواجهة الامامية Front-End</h2>

    <div class="program">
        <div class="container">
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Type" aria-expanded="false" aria-controls="Type">
                   انظمة التشغيل ولينكس
                </button>
                </h2>
                <div id="Type" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                </div>
                  <ul class="unstyled">
                    <li>ستتعرف على مختلف أنظمة التشغيل وكيفية استخدامها في مجال البرمجة، وستتعمق بنظام تشغيل لينكس الشائع بين المبرمجين وكيفية التعامل مع سطر الأوامر.</li>
                  </ul>
                </div>
              </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#internet" aria-expanded="false" aria-controls="internet">
                      انترنت- Internet
                    </button>
                  </h2>
                  <div id="internet" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <div class="row">
                        <div class="col-6">
                            <ul class="unstyled">
                              <li> كيف يعمل ال DNS؟</li>
                              <li> ما هو الدومين ؟ </li>
                              <li>ما هي الاستضافة؟</li>
                              <li>كيف يعمل الانترنت؟</li>
                              <li>ما هو HTTP؟</li>
                              <li>ما هو المتصفح وكيف  يعمل؟</li>
                          </ul>
                        </div>
                        <div class="col-6 text-end">
                          <ul class="unstyled">
                            <li>DNS and how it works</li>
                            <li>What is Domain Name </li>
                            <li>What is hosting</li>
                            <li>How does the internet work</li>
                            <li>What is HTTP</li>
                            <li>Browsers and how they work</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#html" aria-expanded="false" aria-controls="html">
                        HTML
                    </button>
                    </h2>
                    <div id="html" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <div class="row">
                        <div class="col-6">
                          <ul class="unstyled">
                            <li>تعلم الأساسيات </li>
                            <li>النماذج والمصادقات</li>
                            <li>الاتفاقيات وأفضل الممارسات</li>
                          </ul>
                        </div>
                        <div class="col-6 text-end">
                          <ul class="unstyled">
                            <li>Learn the basics</li>
                            <li>Forms and Validations</li>
                            <li>Conventions and Best practices</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#css" aria-expanded="false" aria-controls="css">
                      CSS
                    </button>
                    </h2>
                    <div id="css" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    </div>
                      <div class="row">
                        <div class="col-6">
                          <ul class="unstyled">
                            <li>تعلم الأساسيات</li>
                            <li>صنع المخططات وشرح المفاهيم التالية</li>
                            <li>Floats</li>
                            <li>Positionaing</li>
                            <li>Display</li>
                            <li>Box Model</li>
                            <li>CSS Grid</li>
                            <li>Flex Box</li>
                            <li>Responsive design and media Queries</li>
                          </ul>
                        </div>
                        <div class="col-6 text-end">
                          <ul class="unstyled">
                            <li>Learn the basics</li>
                            <li>Making Layouts
                            <li>Floats</li>
                            <li>Positionaing</li>
                            <li>Display</li>
                            <li>Box Model</li>
                            <li>CSS Grid</li>
                            <li>Flex Box</li>
                            <li>Responsive design and media Queries</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#javaScript" aria-expanded="false" aria-controls="javaScript">
                      جافا سكربت [ JavaScript ]
                    </button>
                    </h2>
                    <div id="javaScript" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    </div>
                      <div class="row">
                        <div class="col-6">
                          <ul class="unstyled">
                            <li>الsyntax والمفاهيم الاساسية</li>
                            <li>تعلم ال DOM</li>
                            <li>تعلم API/Ajax</li>
                            <li>تعلم ES6+ جافا سكريبت </li>
                            <li>فهم المفاهيم Hoisting, Event Bubbling, Scope, Prototype, Shadow DOM, strict</li>
                          </ul>
                        </div>
                        <div class="col-6 text-end">
                          <ul class="unstyled">
                            <li> Syntax and Basic Constructs</li>
                            <li>Learn Dom Manipulation</li>
                            <li>Learn Fetch API/Ajax(XHR)</li>
                            <li>ES6+ and modular JavaScript</li>
                            <li>Understand the concepts Hoisting, Event Bubbling, Scope, Prototype, Shadow DOM, strict</li>
                          </ul>
                        </div>
                      </div>

                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#vcs" aria-expanded="false" aria-controls="vcs">
                    أنظمة إدارة الإصدارات [ Version Control Systems ]
                    </button>
                    </h2>
                    <div id="vcs" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    </div>
                        <div class="row">
                          <div class="col-6">
                            <ul class="unstyled">
                              <li>ما هي ولماذا يجب عليك استخدام احدها</li>
                              <li>الاستخدام الاساسي لGit</li>
                              <li>انشاء حساب وتعلم كيف استخدام GitHub</li>
                              <li>خدمات استضافة الريبو GitHub</li>
                            </ul>
                          </div>
                          <div class="col-6 text-end">
                            <ul class="unstyled">
                            <li> What are the and why you should use one</li>
                            <li>Basic Usage of Git</li>
                            <li>Create account and learn to use GitHub</li>
                            <li>Repo hosting services ( GitHub )</li>
                          </ul>
                        </div>
                        </div> 
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#task" aria-expanded="false" aria-controls="task">
                          Task Runners
                      </button>
                    </h2>
                    <div id="task" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    </div>
                    <ul class="unstyled">
                      <li>Gulp هي أداة قوية لبناء الكود الآلي في عملية تطوير الواجهة الأمامية. إنه لا يحسن الموارد فحسب ، بل يكمل تلقائيًا العديد من المهام المتكررة من خلال التكوين أثناء عملية التطوير ، مما يسمح لنا بالتركيز على الكود وتحسين كفاءة العمل.</li>
                    </ul>
                    
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#React" aria-expanded="false" aria-controls="React">
                       اطار العمل [ Pick a Framework ] 
                    </button>
                    </h2>
                    <div id="React" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    </div>
                      <ul class="unstyled">
                        <li>React.js يبدو من اسمها أنها مكتبة مبنية للبرمجة بلغة JavaScript تم بناؤها من قبل شركة فيسبوك، وهي مكتبة متخصصة بواجهات المستخدم، حيث تقدم طريقة سهلة وسلسلة وقوية في الوقت ذاته لبناء الواجهات وتخفف العبء عن المبرمجين أثناء بناء أي واجهة  </li>
                        <li> Redux ريدوكس هي مكتبة جافا سكريبت مفتوحة المصدر لإدارة حالة التطبيق. يستخدم بشكل شائع مع المكتبات مثل ريأكت أو أنجولار لبناء واجهات المستخدم.   </li>
                      </ul>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Modern-css" aria-expanded="false" aria-controls="Modern-css">
                      Modern CSS
                    </button>
                    </h2>
                    <div id="Modern-css" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    </div>
                    <ul class="unstyled">
                      <li>سوف نتعرف على Styled Component  </li>
                      <li>سوف نتعرف على  CSS Module </li>
                    </ul> 
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#CSS-Frameworks" aria-expanded="false" aria-controls="CSS-Frameworks">
                       اطار عمل CSS [ CSS Frameworks ]
                    </button>
                    </h2>
                    <div id="CSS-Frameworks" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    </div>
                    <ul class="unstyled">
                      <li>مع الجافا سكربت Reactstrap</li>
                      <li>مع الجافا سكربتMaterial UI</li>
                      <li>مع CSS Bootstrap</li>
                    </ul> 
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Testing" aria-expanded="false" aria-controls="Testing">
                      Testing your Apps
                    </button>
                    </h2>
                    <div id="Testing" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    </div>
                    <ul class="unstyled">
                      <li> Jest</li>
                      <li> react-testing-library</li>
                      <li>Cypress</li>
                      <li>Enzyme</li>
                    </ul> 
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Static" aria-expanded="false" aria-controls="Static">
                    مولد الموقع الثابت [ Static Site Generators ]
                    </button>
                    </h2>
                    <div id="Static" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    </div>
                      <ul class="unstyled">
                        <li> الـ Next.js هو عبارة عن إطار مبني على الـ React مخصص  للـ Front End وداعم للـ Back End  يهدف إلى مساعدة المطور على صناعة مواقع الويب ذات الصفحات الواحدة (Single Page Application) مثل الـ React بالضبط أو غريمتها Angular و Vuejs</li>
                        <li>إطار العمل GatsbyJS ، هو الطريقة الحديثة لبناء مواقع الويب. حيث أصبح الأداء والأمان وإمكانية الوصول والوصول إلى الأدوات هي الوضع الافتراضي بالنسبة ل Gatsby.</li>
                      </ul>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#mobile" aria-expanded="false" aria-controls="mobile">
                       تطبيقات الموبايل [ Mobile Applications ]
                    </button>
                    </h2>
                    <div id="mobile" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    </div>
                      <ul class="unstyled">
                        <li> React Native  اطار عمل لبرمجة تطبيقات طبيعية عن طريق الجافاسكربت</li>
                      </ul>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#desktop" aria-expanded="false" aria-controls="desktop">
                         تطبيقات سطح المكتب [ Desktop Applications ]
                    </button>
                    </h2>
                    <div id="desktop" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    </div class="row">
                    <div class="col">
                    <ul class="unstyled">
                        <li>إطار العمل "إلكترون" لبرمجة تطبيقات سطح المكتب بلغة جافاسكريبت  Electron</li>
                      </ul>
                    </div>

                    </div>
                </div>
        
            </div>






            </div>
        </div>
    </div>
    <h2 class="main-title"> المشاريع التي سوف نعمل عليها وسوف تكون ضمن معرض اعمالك مع السورس كود </h2>

     <!-- start  -->
     <div style="margin-bottom: 0;" class="program">
        <div class="container">
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#one" aria-expanded="false" aria-controls="one">
                متجر الكتروني
              </button>
                </h2>
                <div id="one" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                </div>
                  <p>
                  تطوير واجهة استخدام حقيقة لمتجر الكتروني كامل من الصفر
                </p>
                </div>
            </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#two" aria-expanded="false" aria-controls="two">
                    تطبيق جوال على React Native
                  </button>
                    </h2>
                    <div id="two" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                     <p>
                     تطبيق حقيقي على React Native
                    </p>
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#three" aria-expanded="false" aria-controls="three">
                    تطبيق باستخدام Next.js
                  </button>
                    </h2>
                    <div id="three" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <p> انشاء تطبيق باستخدام Next.js 
                    </p>
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#four" aria-expanded="false" aria-controls="four">
                  تطبيق على مكتبة React
                  </button>

                    </h2>
                    <div id="four" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    </div>
                      <p>انشاء تطبيق على مكتبة React</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#five" aria-expanded="false" aria-controls="five">
                    موقع متعدد الصفحات   
                  </button>
                    </h2>
                    <div id="five" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    </div>
                    <p>سوف نقوم بانشاء موقع يحتوى على اكثر من 6 صفحات </p>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#six" aria-expanded="false" aria-controls="six">
                    بناء لوحة تحكم لتطبيق ويب
                  </button>
                    </h2>
                    <div id="six" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    </div>
                    <p>سوف نقوم بانشاء لوحة تحكم خاص لادارة الموقع والمدونة</p>
                    </div>
                </div>
                
            </div>
            </div>
        </div>
    </div>
    <!-- End -->

        <!-- start go to top -->
        <div class="scroll-top" style="display: block;">
    <a href="#upper-bar"><i class="fas fa-arrow-up"></i></a>
    </div>
    
    <!-- End go to top -->

    <!-- Start Footer -->
    <div style="direction: ltr;" class="footer">
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
            {{__('messages.businessHours')}}<br/>
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
          <img src="../resources/imgs/gallery-02.png" alt="" />
          <img src="../resources/imgs/gallery-03.jpg" alt="" />
          <img src="../resources/imgs/gallery-01.png" alt="" />
          <img src="../resources/imgs/gallery-04.png" alt="" />
          <img src="../resources/imgs/gallery-05.jpg" alt="" />
          <img src="../resources/imgs/gallery-06.png" alt="" />
        </div>
      </div>
      <p class="copyright"> &copy; {{__('messages.your')}}{{__('messages.MA')}} </p>
    </div>
    <script src="../resources/js/app.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
    <!-- End Footer -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </body>
</html>