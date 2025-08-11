
<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
       <title> داکتریس - سیستم رزرو نوبت پزشک </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Premium Bootstrap 4 Landing Page Template">
        <meta name="keywords" content="Appointment, Booking, System, Dashboard, Health">
        <meta name="author" content="Shreethemes">
        <meta name="email" content="support@shreethemes.in">
        <meta name="website" content=" ">
        <meta name="Version" content="v1.2.0">
        <!-- favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
        <!-- Bootstrap -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <!-- Icons -->
        <link href="{{ asset('assets/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/remixicon.css') }}" rel="stylesheet" type="text/css">
         
        <!-- SLIDER -->
        <link rel="stylesheet" href="{{ asset('assets/css/tiny-slider.css') }}">
        <!-- Iconscout -->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <link href="{{ asset('assets/css/remixicon.css')}}" rel="stylesheet">
        <!-- Css -->
        <link href="{{ asset('assets/css/style-rtl.min.css')}}" rel="stylesheet" type="text/css" id="theme-opt">

    </head>

    <body>
        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
        <!-- Loader -->
        
        <!-- Navbar STart -->
        <header id="topnav" class="navigation sticky">
            <div class="container">
                <!-- Logo container-->
                <div>
                    <a class="logo" href="index.html">
                        <span class="logo-light-mode">
                            <img src="{{ asset('assets/images/logo-dark.png')}}" class="l-dark" height="24" alt="">
                            <img src="{{ asset('assets/images/logo-light.png')}}" class="l-light" height="24" alt="">
                        </span>
                        <img src="{{ asset('assets/images/logo-light.png')}}" height="24" class="logo-dark-mode" alt="">
                    </a>
                </div>
                <!-- End Logo container-->
                
                <!-- Start Mobile Toggle -->
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>
                <!-- End Mobile Toggle -->

                <!-- Start Dropdown -->
                <ul class="dropdowns list-inline mb-0">
                    <li class="list-inline-item mb-0">
                        <a href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <div class="btn btn-icon btn-pills btn-primary"><i data-feather="settings" class="fea icon-sm"></i></div>
                        </a>
                    </li>

                    <li class="list-inline-item mb-0 me-1">
                        <a href="javascript:void(0)" class="btn btn-icon btn-pills btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                            <i class="uil uil-search"></i>
                        </a>
                    </li>

                    <li class="list-inline-item mb-0 me-1">
                        <div class="dropdown dropdown-primary">
                            <button type="button" class="btn btn-pills btn-soft-primary dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/doctors/01.jpg" class="avatar avatar-ex-small rounded-circle" alt=""></button>
                            <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow border-0 mt-3 py-3" style="min-width: 200px;">
                                <a class="dropdown-item d-flex align-items-center text-dark" href="doctor-profile.html">
                                    <img src="{{ asset('assets/images/doctors/01.jpg')}}" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                    <div class="flex-1 ms-2">
                                        <span class="d-block mb-1" >کلوین کارلو</span>
                                        <small class="text-muted"> ارتوپدی </small>
                                    </div>
                                </a>
                                <a class="dropdown-item text-dark" href="doctor-dashboard.html"><span class="mb-0 d-inline-block me-1"><i class="uil uil-dashboard align-middle h6"></i></span>داشبرد</a>
                                <a class="dropdown-item text-dark" href="doctor-profile-setting.html"><span class="mb-0 d-inline-block me-1"><i class="uil uil-setting align-middle h6"></i></span>تنظیمات پروفایل</a>
                                <div class="dropdown-divider border-top"></div>
                                <a class="dropdown-item text-dark" href="login.html"><span class="mb-0 d-inline-block me-1"><i class="uil uil-sign-out-alt align-middle h6"></i></span> خروج</a>
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- Start Dropdown -->
        
                <div id="navigation">
                    <!-- Navigation Menu-->   
                    <ul class="navigation-menu nav-left nav-light">
                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">خانه</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="index.html" class="sub-menu-item">خانه یک</a></li>
                                <li><a href="index-two.html" class="sub-menu-item">خانه دو</a></li>
                                <li><a href="index-three.html" class="sub-menu-item">خانه سه</a></li>
                            </ul>
                        </li>

                        <li class="has-submenu parent-parent-menu-item">
                            <a href="javascript:void(0)">پزشکان</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li class="has-submenu parent-menu-item">
                                    <a href="javascript:void(0)" class="menu-item">داشبرد</a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="doctor-dashboard.html" class="sub-menu-item">داشبرد</a></li>
                                        <li><a href="doctor-appointment.html" class="sub-menu-item">نوبت دهی</a></li>
                                        <li><a href="patient-list.html" class="sub-menu-item">بیماران</a></li>
                                        <li><a href="doctor-schedule.html" class="sub-menu-item">زمانبندی برنامه</a></li>
                                        <li><a href="invoices.html" class="sub-menu-item">فاکتورها</a></li>
                                        <li><a href="patient-review.html" class="sub-menu-item">نظرات</a></li>
                                        <li><a href="doctor-messages.html" class="sub-menu-item">پیام ها</a></li>
                                       <li><a href="doctor-profile.html" class="sub-menu-item">پروفایل</a></li>
                                        <li><a href="doctor-profile-setting.html" class="sub-menu-item">تنظیمات پروفایل</a></li>
                                        <li><a href="doctor-chat.html" class="sub-menu-item">چت</a></li>
                                        <li><a href="login.html" class="sub-menu-item">ورود</a></li>
                                        <li><a href="signup.html" class="sub-menu-item">ثبت‌نام</a></li>
                                        <li><a href="forgot-password.html" class="sub-menu-item">فراموشی رمزعبور</a></li>
                                    </ul>
                                </li>
                                <li><a href="doctor-team-one.html" class="sub-menu-item">پزشکان یک</a></li>
                                <li><a href="doctor-team-two.html" class="sub-menu-item">پزشکان دو</a></li>
                                <li><a href="doctor-team-three.html" class="sub-menu-item">پزشکان سه</a></li>
                            </ul>
                        </li>

                       <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">بیماران</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="patient-dashboard.html" class="sub-menu-item">داشبرد</a></li>
                                <li><a href="patient-profile.html" class="sub-menu-item">پروفایل</a></li>
                                <li><a href="booking-appointment.html" class="sub-menu-item">رزرو نوبت</a></li>
                                <li><a href="patient-invoice.html" class="sub-menu-item">فاکتور</a></li>
                            </ul>
                        </li>

                         <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">داروخانه</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="pharmacy.html" class="sub-menu-item">داروخانه</a></li>
                                <li><a href="pharmacy-shop.html" class="sub-menu-item">فروشگاه</a></li>
                                <li><a href="pharmacy-product-detail.html" class="sub-menu-item">جزییات دارو</a></li>
                                <li><a href="pharmacy-shop-cart.html" class="sub-menu-item">سبد خرید</a></li>
                                <li><a href="pharmacy-checkout.html" class="sub-menu-item">ادامه خرید</a></li>
                                <li><a href="pharmacy-account.html" class="sub-menu-item">اکانت</a></li>
                            </ul>
                        </li>
        
                        <li class="has-submenu parent-parent-menu-item"><a href="javascript:void(0)">صفحات</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="aboutus.html" class="sub-menu-item">درباره ما</a></li>
                                <li><a href="departments.html" class="sub-menu-item">دپارتمان ها</a></li>
                                <li><a href="faqs.html" class="sub-menu-item">سوالات متدوال</a></li>
                                <li class="has-submenu parent-menu-item">
                                    <a href="javascript:void(0)" class="menu-item"> بلاگ </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="blogs.html" class="sub-menu-item">بلاگ</a></li>
                                        <li><a href="blog-detail.html" class="sub-menu-item">جزییات بلاگ</a></li>
                                    </ul>
                                </li>
                                <li><a href="terms.html" class="sub-menu-item">مقررات و سیاست‌ها</a></li>
                                <li><a href="privacy.html" class="sub-menu-item">حفظ حریم شخصی</a></li>
                                <li><a href="error.html" class="sub-menu-item">404 !</a></li>
                                <li><a href="contact.html" class="sub-menu-item">ارتباط با ما</a></li>
                            </ul>
                        </li>
                        <li><a href="../admin/index.html" class="sub-menu-item" target="_blank">ادمین</a></li>
                    </ul><!--end navigation menu-->
                </div><!--end navigation-->
            </div><!--end container-->
        </header><!--end header-->
        <!-- Navbar End -->

    <!-- Start Hero -->
    <section class="bg-half-260 d-table w-100" style="background: url('../assets/images/bg/01.jpg') center;">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row mt-5 mt-lg-0">
                <div class="col-12">
                    <div class="heading-title">
                        <img src="{{ asset('assets/images/logo-icon.png')}}" class="avatar avatar-md-sm" alt="">
                        <h4 class="display-4 fw-bold text-white mt-3 mb-4">آشنایی با <br> بهترین پزشکان </h4>
                        <p class="para-desc text-white-50 mb-0">پزشکانی عالی، اگر برای خود یا خانواده تان به دنبال یک
                            کمک موثر در موارد بیماری و اضطراری یا حتی مشاوره ای ساده نیاز دارید؛ همینجا باشید</p>

                        <div class="mt-4 pt-2">
                            <a href="booking-appointment.html" class="btn btn-primary">رزرو نوبت</a>
                            <p class="text-white-50 mb-0 mt-2"> برای استفاده صحیح لطفا <a href="#" class="text-white">
                                    مقررات و شرایط را بخوانید <i class="ri-arrow-left-line align-middle"></i></a></p>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End Hero -->

    <!-- Start -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="features-absolute bg-white shadow rounded overflow-hidden card-group">
                        <div class="card border-0 bg-light p-4">
                            <i class="ri-heart-pulse-fill text-primary h2 mb-0"></i>
                            <h5 class="mt-1">موارد اضطراری</h5>
                            <p class="text-muted mt-2">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                استفاده از طراحان گرافیک است.</p>
                            <a href="departments.html" class="text-primary"> بیشتر بخوانید <i
                                    class="ri-arrow-left-line align-middle"></i></a>
                        </div>

                        <div class="card border-0 p-4">
                            <i class="ri-dossier-fill text-primary h2 mb-0"></i>
                            <h5 class="mt-1">ساعات کاری پزشکان</h5>
                            <p class="text-muted mt-2">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                استفاده از طراحان گرافیک است.</p>
                            <a href="departments.html" class="text-primary"> بیشتر بخوانید <i
                                    class="ri-arrow-left-line align-middle"></i></a>
                        </div>

                        <div class="card border-0 bg-light p-4">
                            <i class="ri-time-fill text-primary h2 mb-0"></i>
                            <h5 class="mt-1">ساعت کاری </h5>
                            <ul class="list-unstyled mt-2">
                                <li class="d-flex justify-content-between">
                                    <p class="text-muted mb-0">شنبه - جمعه</p>
                                    <p class="text-primary mb-0">8.00 - 20.00</p>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <p class="text-muted mb-0">یکشنبه</p>
                                    <p class="text-primary mb-0">8.00 - 18.00</p>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <p class="text-muted mb-0">شنبه</p>
                                    <p class="text-primary mb-0">8.00 - 14.00</p>
                                </li>
                            </ul>
                            <a href="departments.html" class="text-primary"> بیشتر بخوانید <i
                                    class="ri-arrow-left-line align-middle"></i></a>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="position-relative">
                        <img src="{{ asset('assets/images/about/about-2.png')}}" class="img-fluid" alt="">
                        <div class="play-icon">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#watchvideomodal"
                                class="play-btn video-play-icon">
                                <i class="mdi mdi-play text-primary rounded-circle bg-white shadow"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-7 col-md-6 mt-4 mt-lg-0 pt- pt-lg-0">
                    <div class="ms-lg-4">
                        <div class="section-title">
                            <h4 class="title mb-4">درباره روشهای درمانی ما</h4>
                            <p class="text-muted para-desc">پزشکانی عالی، اگر برای خود یا خانواده تان به دنبال یک کمک
                                موثر در موارد بیماری و اضطراری یا حتی مشاوره ای ساده نیاز دارید؛ همینجا باشید</p>
                            <p class="text-muted para-desc mb-0"> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                                چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف
                                بهبود ابزارهای کاربردی می باشد. </p>
                        </div>

                        <div class="mt-4">
                            <a href="aboutus.html" class="btn btn-primary"> بیشتر بخوانید <i
                                    class="ri-arrow-left-line align-middle"></i></a>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title mb-4 pb-2 text-center">
                        <span class="badge badge-pill badge-soft-primary mb-3">دپارتمان ها</span>
                        <h4 class="title mb-4"> خدمات پزشکی ما </h4>
                        <p class="text-muted mx-auto para-desc mb-0">پزشکانی عالی، اگر برای خود یا خانواده تان به دنبال
                            یک کمک موثر در موارد بیماری و اضطراری یا حتی مشاوره ای ساده نیاز دارید؛ همینجا باشید</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="col-xl-3 col-md-4 col-12 mt-5">
                    <div class="card features feature-primary border-0">
                        <div class="icon text-center rounded-md">
                            <i class="ri-eye-fill h3 mb-0"></i>
                        </div>
                        <div class="card-body p-0 mt-3">
                            <a href="departments.html" class="title text-dark h5"> مراقبت از چشم </a>
                            <p class="text-muted mt-3">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                استفاده از طراحان گرافیک است. </p>
                            <a href="departments.html" class="link"> بیشتر بخوانید <i
                                    class="ri-arrow-left-line align-middle"></i></a>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-xl-3 col-md-4 col-12 mt-5">
                    <div class="card features feature-primary border-0">
                        <div class="icon text-center rounded-md">
                            <i class="ri-psychotherapy-fill h3 mb-0"></i>
                        </div>
                        <div class="card-body p-0 mt-3">
                            <a href="departments.html" class="title text-dark h5"> روان درمانی </a>
                            <p class="text-muted mt-3">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                استفاده از طراحان گرافیک است. </p>
                            <a href="departments.html" class="link"> بیشتر بخوانید <i
                                    class="ri-arrow-left-line align-middle"></i></a>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-xl-3 col-md-4 col-12 mt-5">
                    <div class="card features feature-primary border-0">
                        <div class="icon text-center rounded-md">
                            <i class="ri-stethoscope-fill h3 mb-0"></i>
                        </div>
                        <div class="card-body p-0 mt-3">
                            <a href="departments.html" class="title text-dark h5"> مراقبت های اولیه </a>
                            <p class="text-muted mt-3">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                استفاده از طراحان گرافیک است. </p>
                            <a href="departments.html" class="link"> بیشتر بخوانید <i
                                    class="ri-arrow-left-line align-middle"></i></a>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-xl-3 col-md-4 col-12 mt-5">
                    <div class="card features feature-primary border-0">
                        <div class="icon text-center rounded-md">
                            <i class="ri-capsule-fill h3 mb-0"></i>
                        </div>
                        <div class="card-body p-0 mt-3">
                            <a href="departments.html" class="title text-dark h5"> مراقبت از دندان </a>
                            <p class="text-muted mt-3">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                استفاده از طراحان گرافیک است. </p>
                            <a href="departments.html" class="link"> بیشتر بخوانید <i
                                    class="ri-arrow-left-line align-middle"></i></a>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-xl-3 col-md-4 col-12 mt-5">
                    <div class="card features feature-primary border-0">
                        <div class="icon text-center rounded-md">
                            <i class="ri-microscope-fill h3 mb-0"></i>
                        </div>
                        <div class="card-body p-0 mt-3">
                            <a href="departments.html" class="title text-dark h5"> ارتوپدی </a>
                            <p class="text-muted mt-3">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                استفاده از طراحان گرافیک است. </p>
                            <a href="departments.html" class="link"> بیشتر بخوانید <i
                                    class="ri-arrow-left-line align-middle"></i></a>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-xl-3 col-md-4 col-12 mt-5">
                    <div class="card features feature-primary border-0">
                        <div class="icon text-center rounded-md">
                            <i class="ri-pulse-fill h3 mb-0"></i>
                        </div>
                        <div class="card-body p-0 mt-3">
                            <a href="departments.html" class="title text-dark h5"> قلب و عروق </a>
                            <p class="text-muted mt-3">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                استفاده از طراحان گرافیک است. </p>
                            <a href="departments.html" class="link"> بیشتر بخوانید <i
                                    class="ri-arrow-left-line align-middle"></i></a>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-xl-3 col-md-4 col-12 mt-5">
                    <div class="card features feature-primary border-0">
                        <div class="icon text-center rounded-md">
                            <i class="ri-empathize-fill h3 mb-0"></i>
                        </div>
                        <div class="card-body p-0 mt-3">
                            <a href="departments.html" class="title text-dark h5"> زنان </a>
                            <p class="text-muted mt-3">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                استفاده از طراحان گرافیک است. </p>
                            <a href="departments.html" class="link"> بیشتر بخوانید <i
                                    class="ri-arrow-left-line align-middle"></i></a>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-xl-3 col-md-4 col-12 mt-5">
                    <div class="card features feature-primary border-0">
                        <div class="icon text-center rounded-md">
                            <i class="ri-mind-map h3 mb-0"></i>
                        </div>
                        <div class="card-body p-0 mt-3">
                            <a href="departments.html" class="title text-dark h5"> مغز و اعصاب </a>
                            <p class="text-muted mt-3">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                استفاده از طراحان گرافیک است. </p>
                            <a href="departments.html" class="link"> بیشتر بخوانید <i
                                    class="ri-arrow-left-line align-middle"></i></a>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End -->

    <!-- Start -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <span class="badge badge-pill badge-soft-primary mb-3"> دسترسی</span>
                        <h4 class="title mb-4">ساعات کاری پزشکان</h4>
                        <p class="text-muted mx-auto para-desc mb-0">پزشکانی عالی، اگر برای خود یا خانواده تان به دنبال
                            یک کمک موثر در موارد بیماری و اضطراری یا حتی مشاوره ای ساده نیاز دارید؛ همینجا باشید</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mt-4 pt-2">
                    <div class="table-responsive shadow rounded">
                        <table class="table table-center table-bordered bg-white mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center py-4" style="min-width: 120px;">زمان کاری</th>
                                    <th class="text-center py-4" style="min-width: 200px;">دوشنبه</th>
                                    <th class="text-center py-4" style="min-width: 200px;">سه شنبه</th>
                                    <th class="text-center py-4" style="min-width: 200px;">چهارشنبه</th>
                                    <th class="text-center py-4" style="min-width: 200px;">پنجشنبه</th>
                                    <th class="text-center py-4" style="min-width: 200px;">جمعه</th>
                                    <th class="text-center py-4" style="min-width: 200px;">یکشنبه</th>
                                    <th class="text-center py-4" style="min-width: 200px;">شنبه</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Start -->
                                <tr>
                                    <th class="text-center py-5">09:00 عصر </th>
                                    <td>
                                        <div class="d-flex mb-3">
                                            <img src="{{ asset('assets/images/doctors/01.jpg')}}"
                                                class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                            <div class="me-3">
                                                <h6 class="text-dark mb-0 d-block">کلوین کارلو</h6>
                                                <small class="text-muted"> مراقبت از چشم </small>
                                            </div>
                                        </div>
                                        <small class="bg-soft-primary rounded py-1 px-2 d-block text-center">09:00
                                            عصر - 10:00 عصر </small>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <div class="d-flex mb-3">
                                            <img src="{{ asset('assets/images/doctors/03.jpg')}}"
                                                class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                            <div class="me-3">
                                                <h6 class="text-dark mb-0 d-block">آلیا ادی</h6>
                                                <small class="text-muted"> روان درمانی </small>
                                            </div>
                                        </div>
                                        <small class="bg-soft-primary rounded py-1 px-2 d-block text-center">09:00
                                            عصر - 01:00 صبح </small>
                                    </td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <th class="text-center py-5">11:00 عصر </th>
                                    <td></td>
                                    <td>
                                        <div class="d-flex mb-3">
                                            <img src="{{ asset('assets/images/doctors/02.jpg')}}"
                                                class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                            <div class="me-3">
                                                <h6 class="text-dark mb-0 d-block">کریستسن مورفی</h6>
                                                <small class="text-muted"> زنان </small>
                                            </div>
                                        </div>
                                        <small class="bg-soft-primary rounded py-1 px-2 d-block text-center">11:00
                                            عصر - 04:00 صبح </small>
                                    </td>
                                    <td></td>
                                    <td>
                                        <div class="d-flex mb-3">
                                            <img src="{{ asset('assets/images/doctors/05.jpg')}}"
                                                class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                            <div class="me-3">
                                                <h6 class="text-dark mb-0 d-block">جنیفر بالانس</h6>
                                                <small class="text-muted"> قلب و عروق </small>
                                            </div>
                                        </div>
                                        <small class="bg-soft-primary rounded py-1 px-2 d-block text-center">11:00
                                            عصر - 12:00 صبح </small>
                                    </td>
                                    <td></td>
                                    <td>
                                        <div class="d-flex mb-3">
                                            <img src="{{ asset('assets/images/doctors/04.jpg')}}"
                                                class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                            <div class="me-3">
                                                <h6 class="text-dark mb-0 d-block">تونی کوار</h6>
                                                <small class="text-muted"> ارتوپدی </small>
                                            </div>
                                        </div>
                                        <small class="bg-soft-primary rounded py-1 px-2 d-block text-center">09:00
                                            عصر - 10:00 عصر </small>
                                    </td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <th class="text-center py-5">02:00 صبح </th>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <div class="d-flex mb-3">
                                            <img src="{{ asset('assets/images/doctors/06.jpg')}}"
                                                class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                            <div class="me-3">
                                                <h6 class="text-dark mb-0 d-block">تارا اریگتون</h6>
                                                <small class="text-muted"> مغز و اعصاب </small>
                                            </div>
                                        </div>
                                        <small class="bg-soft-primary rounded py-1 px-2 d-block text-center">02:00 صبح -
                                            04:00 صبح </small>
                                    </td>
                                    <td></td>
                                    <td>
                                        <div class="d-flex mb-3">
                                            <img src="{{ asset('assets/images/doctors/05.jpg')}}"
                                                class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                            <div class="me-3">
                                                <h6 class="text-dark mb-0 d-block">جنیفر بالانس</h6>
                                                <small class="text-muted"> قلب و عروق </small>
                                            </div>
                                        </div>
                                        <small class="bg-soft-primary rounded py-1 px-2 d-block text-center">11:00
                                            عصر - 12:00 صبح </small>
                                    </td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <th class="text-center py-5">04:00 صبح </th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <div class="d-flex mb-3">
                                            <img src="{{ asset('assets/images/doctors/06.jpg')}}"
                                                class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                            <div class="me-3">
                                                <h6 class="text-dark mb-0 d-block">تارا اریگتون</h6>
                                                <small class="text-muted"> مغز و اعصاب </small>
                                            </div>
                                        </div>
                                        <small class="bg-soft-primary rounded py-1 px-2 d-block text-center">04:00 صبح -
                                            05:00 صبح </small>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <div class="d-flex mb-3">
                                            <img src="{{ asset('assets/images/doctors/06.jpg')}}"
                                                class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                            <div class="me-3">
                                                <h6 class="text-dark mb-0 d-block">تارا اریگتون</h6>
                                                <small class="text-muted"> مغز و اعصاب </small>
                                            </div>
                                        </div>
                                        <small class="bg-soft-primary rounded py-1 px-2 d-block text-center">04:30PM -
                                            06:00 صبح </small>
                                    </td>
                                </tr>

                                <tr>
                                    <th class="text-center py-5">06:00 صبح </th>
                                    <td>
                                        <div class="d-flex mb-3">
                                            <img src="{{ asset('assets/images/doctors/03.jpg')}}"
                                                class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                            <div class="me-3">
                                                <h6 class="text-dark mb-0 d-block">آلیا ادی</h6>
                                                <small class="text-muted"> روان درمانی </small>
                                            </div>
                                        </div>
                                        <small class="bg-soft-primary rounded py-1 px-2 d-block text-center">06:00 صبح -
                                            09:00 صبح </small>
                                    </td>
                                    <td></td>
                                    <td>
                                        <div class="d-flex mb-3">
                                            <img src="{{ asset('assets/images/doctors/04.jpg')}}"
                                                class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                            <div class="me-3">
                                                <h6 class="text-dark mb-0 d-block">تونی کوار</h6>
                                                <small class="text-muted"> ارتوپدی </small>
                                            </div>
                                        </div>
                                        <small class="bg-soft-primary rounded py-1 px-2 d-block text-center">07:00 صبح -
                                            08:00 صبح </small>
                                    </td>
                                    <td></td>
                                    <td>
                                        <div class="d-flex mb-3">
                                            <img src="{{ asset('assets/images/doctors/05.jpg')}}"
                                                class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                            <div class="me-3">
                                                <h6 class="text-dark mb-0 d-block">جنیفر بالانس</h6>
                                                <small class="text-muted"> قلب و عروق </small>
                                            </div>
                                        </div>
                                        <small class="bg-soft-primary rounded py-1 px-2 d-block text-center">06:00 صبح -
                                            07:00 صبح </small>
                                    </td>
                                    <td></td>
                                    <td>
                                        <div class="d-flex mb-3">
                                            <img src="{{ asset('assets/images/doctors/03.jpg')}}"
                                                class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                            <div class="me-3">
                                                <h6 class="text-dark mb-0 d-block">آلیا ادی</h6>
                                                <small class="text-muted"> روان درمانی </small>
                                            </div>
                                        </div>
                                        <small class="bg-soft-primary rounded py-1 px-2 d-block text-center">06:00 صبح -
                                            07:00 صبح </small>
                                    </td>
                                </tr>

                                <tr>
                                    <th class="text-center py-5">09:00 صبح </th>
                                    <td></td>
                                    <td>
                                        <div class="d-flex mb-3">
                                            <img src="{{ asset('assets/images/doctors/04.jpg')}}"
                                                class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                            <div class="me-3">
                                                <h6 class="text-dark mb-0 d-block">تونی کوار</h6>
                                                <small class="text-muted"> ارتوپدی </small>
                                            </div>
                                        </div>
                                        <small class="bg-soft-primary rounded py-1 px-2 d-block text-center">09:00 صبح -
                                            10:00 صبح </small>
                                    </td>
                                    <td>
                                        <div class="d-flex mb-3">
                                            <img src="{{ asset('assets/images/doctors/05.jpg')}}"
                                                class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                            <div class="me-3">
                                                <h6 class="text-dark mb-0 d-block">جنیفر بالانس</h6>
                                                <small class="text-muted"> قلب و عروق </small>
                                            </div>
                                        </div>
                                        <small class="bg-soft-primary rounded py-1 px-2 d-block text-center">09:00 صبح -
                                            10:00 صبح </small>
                                    </td>
                                    <td></td>
                                    <td>
                                        <div class="d-flex mb-3">
                                            <img src="{{ asset('assets/images/doctors/04.jpg')}}"
                                                class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                            <div class="me-3">
                                                <h6 class="text-dark mb-0 d-block">تونی کوار</h6>
                                                <small class="text-muted"> ارتوپدی </small>
                                            </div>
                                        </div>
                                        <small class="bg-soft-primary rounded py-1 px-2 d-block text-center">09:00 صبح -
                                            10:00 صبح </small>
                                    </td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <!-- End -->
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-fluid-->
    </section>
    <!--end section-->
    <!-- End -->

    <!-- Start -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title mb-4">پزشکان</h4>
                        <p class="text-muted mx-auto para-desc mb-0">پزشکانی عالی، اگر برای خود یا خانواده تان به دنبال
                            یک کمک موثر در موارد بیماری و اضطراری یا حتی مشاوره ای ساده نیاز دارید؛ همینجا باشید</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="card team border-0 rounded shadow overflow-hidden">
                        <div class="team-img position-relative">
                            <img src="{{ asset('assets/images/doctors/01.jpg')}}" class="img-fluid" alt="">
                            <ul class="list-unstyled team-social mb-0">
                                <li><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i
                                            data-feather="facebook" class="icons"></i></a></li>
                                <li class="mt-2"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i
                                            data-feather="linkedin" class="icons"></i></a></li>
                                <li class="mt-2"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i
                                            data-feather="github" class="icons"></i></a></li>
                                <li class="mt-2"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i
                                            data-feather="twitter" class="icons"></i></a></li>
                            </ul>
                        </div>
                        <div class="card-body content text-center">
                            <a href="doctor-team-one.html" class="title text-dark h5 d-block mb-0">کلوین کارلو</a>
                            <small class="text-muted speciality"> مراقبت از چشم </small>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-xl-3 col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="card team border-0 rounded shadow overflow-hidden">
                        <div class="team-img position-relative">
                            <img src="{{ asset('assets/images/doctors/02.jpg')}}" class="img-fluid" alt="">
                            <ul class="list-unstyled team-social mb-0">
                                <li><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i
                                            data-feather="facebook" class="icons"></i></a></li>
                                <li class="mt-2"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i
                                            data-feather="linkedin" class="icons"></i></a></li>
                                <li class="mt-2"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i
                                            data-feather="github" class="icons"></i></a></li>
                                <li class="mt-2"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i
                                            data-feather="twitter" class="icons"></i></a></li>
                            </ul>
                        </div>
                        <div class="card-body content text-center">
                            <a href="doctor-team-one.html" class="title text-dark h5 d-block mb-0">کریستسن مورفی</a>
                            <small class="text-muted speciality"> زنان </small>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-xl-3 col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="card team border-0 rounded shadow overflow-hidden">
                        <div class="team-img position-relative">
                            <img src="{{ asset('assets/images/doctors/03.jpg')}}" class="img-fluid" alt="">
                            <ul class="list-unstyled team-social mb-0">
                                <li><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i
                                            data-feather="facebook" class="icons"></i></a></li>
                                <li class="mt-2"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i
                                            data-feather="linkedin" class="icons"></i></a></li>
                                <li class="mt-2"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i
                                            data-feather="github" class="icons"></i></a></li>
                                <li class="mt-2"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i
                                            data-feather="twitter" class="icons"></i></a></li>
                            </ul>
                        </div>
                        <div class="card-body content text-center">
                            <a href="doctor-team-one.html" class="title text-dark h5 d-block mb-0">آلیا ادی</a>
                            <small class="text-muted speciality"> روان درمانی </small>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-xl-3 col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="card team border-0 rounded shadow overflow-hidden">
                        <div class="team-img position-relative">
                            <img src="{{ asset('assets/images/bg/01.jpg')}}" class="img-fluid" alt="">
                            <ul class="list-unstyled team-social mb-0">
                                <li><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i
                                            data-feather="facebook" class="icons"></i></a></li>
                                <li class="mt-2"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i
                                            data-feather="linkedin" class="icons"></i></a></li>
                                <li class="mt-2"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i
                                            data-feather="github" class="icons"></i></a></li>
                                <li class="mt-2"><a href="#" class="btn btn-icon btn-pills btn-soft-primary"><i
                                            data-feather="twitter" class="icons"></i></a></li>
                            </ul>
                        </div>
                        <div class="card-body content text-center">
                            <a href="doctor-team-one.html" class="title text-dark h5 d-block mb-0">تونی کوار</a>
                            <small class="text-muted speciality"> ارتوپدی </small>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-12 mt-4 pt-2 text-center">
                    <a href="doctor-team-one.html" class="btn btn-primary">بیشتر بدانید</a>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End -->

    <!-- Start -->
    <section class="section pt-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="video-solution-cta position-relative" style="z-index: 1;">
                        <div class="position-relative">
                            <img src="{{ asset('assets/images/bg/01.jpg')}}" class="img-fluid rounded-md shadow-lg" alt="">
                            <div class="play-icon">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#watchvideomodal"
                                    class="play-btn video-play-icon">
                                    <i class="mdi mdi-play text-primary rounded-circle bg-white shadow-lg"></i>
                                </a>
                            </div>
                        </div>

                        <div class="content">
                            <div class="row" id="counter">
                                <div class="col-md-4 mt-4 pt-2">
                                    <div class="counter-box text-center">
                                        <h1 class="mt-3 text-white title-dark"><span class="counter-value"
                                                data-target="99">10</span>%</h1>
                                        <h5 class="counter-head text-white mb-1">بازخورد مثبت</h5>
                                        <p class="text-white-50 mb-0">از پزشکان</p>
                                    </div>
                                    <!--end counter box-->
                                </div>
                                <!--end col-->

                                <div class="col-md-4 mt-4 pt-2">
                                    <div class="counter-box text-center">
                                        <h1 class="mt-3 text-white title-dark"><span class="counter-value"
                                                data-target="25">2</span>+</h1>
                                        <h5 class="counter-head text-white mb-1">کلینیک های باتجربه</h5>
                                        <p class="text-white-50 mb-0">دارای صلاحیت عالی</p>
                                    </div>
                                    <!--end counter box-->
                                </div>
                                <!--end col-->

                                <div class="col-md-4 mt-4 pt-2">
                                    <div class="counter-box text-center">
                                        <h1 class="mt-3 text-white title-dark"><span class="counter-value"
                                                data-target="1251">95</span>+</h1>
                                        <h5 class="counter-head text-white mb-1">سوال ها و جواب ها</h5>
                                        <p class="text-white-50 mb-0">سوال های شما</p>
                                    </div>
                                    <!--end counter box-->
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row -->
            <div class="feature-posts-placeholder bg-primary"></div>
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End -->

    <!-- Start -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title mb-4">بیماران میگویند</h4>
                        <p class="text-muted mx-auto para-desc mb-0">پزشکانی عالی، اگر برای خود یا خانواده تان به دنبال
                            یک کمک موثر در موارد بیماری و اضطراری یا حتی مشاوره ای ساده نیاز دارید؛ همینجا باشید</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row justify-content-center">
                <div class="col-lg-8 mt-4 pt-2 text-center">
                    <div class="owl-carousel owl-theme client-review-slider">
                        <div class="tiny-slide text-center">
                            <p class="text-muted h6 fw-normal fst-italic">" نرم افزارها شناخت بیشتری را برای طراحان
                                رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می
                                توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد
                                وزمان مورد نیاز است"</p>
                            <img src="{{ asset('assets/images/client/01.jpg')}}"
                                class="img-fluid avatar avatar-small rounded-circle mx-auto shadow my-3" alt="">
                            <ul class="list-unstyled mb-0">
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            </ul>
                            <h6 class="text-primary">- توماس ایسرال <small class="text-muted">مدیریت</small></h6>
                        </div>
                        <!--end customer testi-->

                        <div class="tiny-slide text-center">
                            <p class="text-muted h6 fw-normal fst-italic">"لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در
                                ستون و سطرآنچنان که لازم است "</p>
                            <img src="{{ asset('assets/images/client/02.jpg')}}"
                                class="img-fluid avatar avatar-small rounded-circle mx-auto shadow my-3" alt="">
                            <ul class="list-unstyled mb-0">
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            </ul>
                            <h6 class="text-primary">- کارل اولیور <small class="text-muted"> مشاور </small></h6>
                        </div>
                        <!--end customer testi-->

                        <div class="tiny-slide text-center">
                            <p class="text-muted h6 fw-normal fst-italic">"رای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای
                                متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشت ایجاد
                                کرد. "</p>
                            <img src="{{ asset('assets/images/client/04.jpg')}}"
                                class="img-fluid avatar avatar-small rounded-circle mx-auto shadow my-3" alt="">
                            <ul class="list-unstyled mb-0">
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            </ul>
                            <h6 class="text-primary">- باربارا مینکویچ <small class="text-muted">پزشک</small></h6>
                        </div>
                        <!--end customer testi-->

                        <div class="tiny-slide text-center">
                            <p class="text-muted h6 fw-normal fst-italic">"در این صورت می توان امید داشت که تمام و
                                دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل
                                حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد
                                استفاده قرار گیرد."</p>
                            <img src="{{ asset('assets/images/client/04.jpg')}}"
                                class="img-fluid avatar avatar-small rounded-circle mx-auto shadow my-3" alt="">
                            <ul class="list-unstyled mb-0">
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            </ul>
                            <h6 class="text-primary">- کریستینا اسمیت <small class="text-muted">مدیر</small></h6>
                        </div>
                        <!--end customer testi-->

                        <div class="tiny-slide text-center">
                            <p class="text-muted h6 fw-normal fst-italic">" نرم افزارها شناخت بیشتری را برای طراحان
                                رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می
                                توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد
                                وزمان مورد نیاز است"</p>
                            <img src="{{ asset('assets/images/client/05.jpg')}}"
                                class="img-fluid avatar avatar-small rounded-circle mx-auto shadow my-3" alt="">
                            <ul class="list-unstyled mb-0">
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            </ul>
                            <h6 class="text-primary">- دیت توله <small class="text-muted">توسعه دهنده</small></h6>
                        </div>
                        <!--end customer testi-->

                        <div class="tiny-slide text-center">
                            <p class="text-muted h6 fw-normal fst-italic">"کتابهای زیادی در شصت و سه درصد گذشته، حال و
                                آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای
                                طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. "</p>
                            <img src="../assets/images/client/06.jpg"
                                class="img-fluid avatar avatar-small rounded-circle mx-auto shadow my-3" alt="">
                            <ul class="list-unstyled mb-0">
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            </ul>
                            <h6 class="text-primary">- جیل وب<small class="text-muted"> طراح </small></h6>
                        </div>
                        <!--end customer testi-->
                    </div>
                    <!--end carousel-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <span class="badge badge-pill badge-soft-primary mb-3"> اخبار را بخوانید </span>
                        <h4 class="title mb-4"> آخرین اخبار و وبلاگ ها </h4>
                        <p class="text-muted mx-auto para-desc mb-0">پزشکانی عالی، اگر برای خود یا خانواده تان به دنبال
                            یک کمک موثر در موارد بیماری و اضطراری یا حتی مشاوره ای ساده نیاز دارید؛ همینجا باشید</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card blog blog-primary border-0 shadow rounded overflow-hidden">
                        <img src="{{ asset('assets/images/blog/01.jpg')}}" class="img-fluid" alt="">
                        <div class="card-body p-4">
                            <ul class="list-unstyled mb-2">
                                <li class="list-inline-item text-muted small ms-3"><i
                                        class="uil uil-calendar-alt text-dark h6 ms-1"></i> 20 ام اسفند 1400</li>
                                <li class="list-inline-item text-muted small"><i
                                        class="uil uil-clock text-dark h6 ms-1"></i> 5 دقیقه خوانش </li>
                            </ul>
                            <a href="blog-detail.html" class="text-dark title h5">به راحتی دکتر بیاید و درمان انجام
                                دهید</a>
                            <div class="post-meta d-flex justify-content-between mt-3">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item ms-2 mb-0"><a href="#" class="text-muted like"><i
                                                class="mdi mdi-heart-outline ms-1"></i>33</a></li>
                                    <li class="list-inline-item"><a href="#" class="text-muted comments"><i
                                                class="mdi mdi-comment-outline ms-1"></i>08</a></li>
                                </ul>
                                <a href="blog-detail.html" class="link"> بیشتر بخوانید <i
                                        class="mdi mdi-chevron-left align-middle"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card blog blog-primary border-0 shadow rounded overflow-hidden">
                        <img src="{{ asset('assets/images/blog/02.jpg')}}" class="img-fluid" alt="">
                        <div class="card-body p-4">
                            <ul class="list-unstyled mb-2">
                                <li class="list-inline-item text-muted small ms-3"><i
                                        class="uil uil-calendar-alt text-dark h6 ms-1"></i> 20 ام اسفند 1400</li>
                                <li class="list-inline-item text-muted small"><i
                                        class="uil uil-clock text-dark h6 ms-1"></i> 5 دقیقه خوانش </li>
                            </ul>
                            <a href="blog-detail.html" class="text-dark title h5"> قرنطینه شدن و مراقبت های پزشکی
                                کمتر</a>
                            <div class="post-meta d-flex justify-content-between mt-3">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item ms-2 mb-0"><a href="#" class="text-muted like"><i
                                                class="mdi mdi-heart-outline ms-1"></i>33</a></li>
                                    <li class="list-inline-item"><a href="#" class="text-muted comments"><i
                                                class="mdi mdi-comment-outline ms-1"></i>08</a></li>
                                </ul>
                                <a href="blog-detail.html" class="link"> بیشتر بخوانید <i
                                        class="mdi mdi-chevron-left align-middle"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card blog blog-primary border-0 shadow rounded overflow-hidden">
                        <img src="{{ asset('assets/images/blog/03.jpg')}}" class="img-fluid" alt="">
                        <div class="card-body p-4">
                            <ul class="list-unstyled mb-2">
                                <li class="list-inline-item text-muted small ms-3"><i
                                        class="uil uil-calendar-alt text-dark h6 ms-1"></i> 20 ام اسفند 1400</li>
                                <li class="list-inline-item text-muted small"><i
                                        class="uil uil-clock text-dark h6 ms-1"></i> 5 دقیقه خوانش </li>
                            </ul>
                            <a href="blog-detail.html" class="text-dark title h5">دوره تحقیقات پزشکی فوری برای
                                پزشکان</a>
                            <div class="post-meta d-flex justify-content-between mt-3">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item ms-2 mb-0"><a href="#" class="text-muted like"><i
                                                class="mdi mdi-heart-outline ms-1"></i>33</a></li>
                                    <li class="list-inline-item"><a href="#" class="text-muted comments"><i
                                                class="mdi mdi-comment-outline ms-1"></i>08</a></li>
                                </ul>
                                <a href="blog-detail.html" class="link"> بیشتر بخوانید <i
                                        class="mdi mdi-chevron-left align-middle"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End -->

    <!-- Partners start -->
    <section class="py-4 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                    <img src="{{ asset('assets/images/client/amazon.svg')}}" class="avatar avatar-client" alt="">
                </div>
                <!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                    <img src="{{ asset('assets/images/client/google.svg')}}" class="avatar avatar-client" alt="">
                </div>
                <!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                    <img src="{{ asset('assets/images/client/lenovo.svg')}}" class="avatar avatar-client" alt="">
                </div>
                <!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                    <img src="{{ asset('assets/images/client/paypal.svg')}}" class="avatar avatar-client" alt="">
                </div>
                <!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                    <img src="{{ asset('assets/images/client/shopify.svg')}}" class="avatar avatar-client" alt="">
                </div>
                <!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                    <img src="{{ asset('assets/images/client/spotify.svg')}}" class="avatar avatar-client" alt="">
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Partners End -->

        <!-- Start -->
        <footer class="bg-footer">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-4 mb-0 mb-md-4 pb-0 pb-md-2">
                        <a href="#" class="logo-footer">
                            <img src="../assets/images/logo-light.png" height="22" alt="">
                        </a>
                        <p class="mt-4 me-xl-5">پزشکانی عالی، اگر برای خود یا خانواده تان به دنبال یک کمک موثر در موارد بیماری و اضطراری یا حتی مشاوره ای ساده نیاز دارید؛ همینجا باشید</p>
                    </div><!--end col-->

                    <div class="col-xl-7 col-lg-8 col-md-12">
                        <div class="row">
                            <div class="col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                            <h5 class="text-light footer-head">شرکت</h5>
                            <ul class="list-unstyled footer-list mt-4">
                                <li><a href="aboutus.html" class="text-foot"><i
                                            class="mdi mdi-chevron-left ms-1"></i>درباره ما</a></li>
                                <li><a href="departments.html" class="text-foot"><i
                                            class="mdi mdi-chevron-left ms-1"></i>خدمات</a></li>
                                <li><a href="doctor-team-two.html" class="text-foot"><i
                                            class="mdi mdi-chevron-left ms-1"></i>تیم</a></li>
                                <li><a href="blog-detail.html" class="text-foot"><i
                                            class="mdi mdi-chevron-left ms-1"></i>پروژه ها</a></li>
                                <li><a href="blogs.html" class="text-foot"><i
                                            class="mdi mdi-chevron-left ms-1"></i>بلاگ</a></li>
                                <li><a href="login.html" class="text-foot"><i
                                            class="mdi mdi-chevron-left ms-1"></i>ورود</a></li>
                            </ul>
                        </div><!--end col-->
                            
                            <div class="col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h5 class="text-light title-dark footer-head">دپارتمان ها</h5>
                                <ul class="list-unstyled footer-list mt-4">
                                    <li><a href="departments.html" class="text-foot"><i
                                            class="mdi mdi-chevron-left ms-1"></i>مراقبت از چشم</a></li>
                                <li><a href="departments.html" class="text-foot"><i
                                            class="mdi mdi-chevron-left ms-1"></i>روان درمانی</a></li>
                                <li><a href="departments.html" class="text-foot"><i
                                            class="mdi mdi-chevron-left ms-1"></i>مراقبت از دندان</a></li>
                                <li><a href="departments.html" class="text-foot"><i
                                            class="mdi mdi-chevron-left ms-1"></i> ارتوپدی </a></li>
                                <li><a href="departments.html" class="text-foot"><i
                                            class="mdi mdi-chevron-left ms-1"></i> قلب و عروق </a></li>
                                <li><a href="departments.html" class="text-foot"><i
                                            class="mdi mdi-chevron-left ms-1"></i> زنان </a></li>
                                <li><a href="departments.html" class="text-foot"><i
                                            class="mdi mdi-chevron-left ms-1"></i> مغز و اعصاب </a></li>
                                </ul>
                            </div><!--end col-->
                            
                            <div class="col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h5 class="text-light footer-head">ارتباط با ما </h5>
                                <ul class="list-unstyled footer-list mt-4">
                                    <li class="d-flex align-items-center">
                                        <i data-feather="mail" class="fea icon-sm text-foot align-middle"></i>
                                        <a href="mailto:contact@example.com" class="text-foot me-2">contact@example.com</a>
                                    </li>

                                    <li class="d-flex align-items-center">
                                        <i data-feather="phone" class="fea icon-sm text-foot align-middle"></i>
                                        <a href="tel:+152534-468-854" class="text-foot me-2">+152 534-468-854</a>
                                    </li>

                                    <li class="d-flex align-items-center">
                                        <i data-feather="map-pin" class="fea icon-sm text-foot align-middle"></i>
                                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin" class="video-play-icon text-foot me-2">مشاهده لوکیشن ما</a>
                                    </li>
                                </ul>

                                <ul class="list-unstyled social-icon footer-social mb-0 mt-4">
                                    <li class="list-inline-item"><a href="#" class="rounded-pill"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="rounded-pill"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="rounded-pill"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="rounded-pill"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                                </ul><!--end icon-->
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-5">
                <div class="pt-4 footer-bar">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="text-sm-start text-center">
 <p class="mb-0">1400© داکتریس. ارائه با <i class="mdi mdi-heart text-danger"></i> <a href=" " target="_blank" class="text-reset">AFARIDTEAM</a>.</p>                            </div>
                        </div><!--end col-->
    
                        <div class="col-sm-6 mt-4 mt-sm-0">
                            <ul class="list-unstyled footer-list text-sm-end text-center mb-0">
                                <li class="list-inline-item"><a href="terms.html" class="text-foot me-2">مقررات</a></li>
                                <li class="list-inline-item"><a href="privacy.html" class="text-foot me-2">حریم شخصی</a></li>
                                <li class="list-inline-item"><a href="aboutus.html" class="text-foot me-2">درباره ما</a></li>
                                <li class="list-inline-item"><a href="contact.html" class="text-foot me-2">ارتباط با ما</a></li>
                            </ul>
                        </div><!--end col-->
                    </div><!--end row-->
                </div>
            </div><!--end container-->
        </footer><!--end footer-->
        <!-- End -->

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="btn btn-icon btn-pills btn-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
        <!-- Back to top -->

        <!-- Offcanvas Start -->
        <div class="offcanvas bg-white offcanvas-top" tabindex="-1" id="offcanvasTop">
            <div class="offcanvas-body d-flex align-items-center align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="text-center">
                                <h4>جستجو کنید...</h4>
                                <div class="subcribe-form mt-4">
                                    <form>
                                        <div class="mb-0">
                                            <input type="text" id="help" name="name" class="border bg-white rounded-pill" required="" placeholder="جستجو">
                                            <button type="submit" class="btn btn-pills btn-primary">جستجو</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end container-->
            </div>
        </div>
        <!-- Offcanvas End -->

        <!-- Offcanvas Start -->
        <div class="offcanvas offcanvas-end bg-white shadow" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header p-4 border-bottom">
                <h5 id="offcanvasRightLabel" class="mb-0">
                    <img src="{{ asset('assets/images/logo-dark.png')}}" height="24" class="light-version" alt="">
                    <img src="{{ asset('assets/images/logo-light.png')}}" height="24" class="dark-version" alt="">
                </h5>
                <button type="button" class="btn-close d-flex align-items-center text-dark" data-bs-dismiss="offcanvas" aria-label="Close"><i class="uil uil-times fs-4"></i></button>
            </div>
            <div class="offcanvas-body p-4 px-md-5">
                <div class="row">
                    <div class="col-12">
                        <!-- Style switcher -->
                        <div id="style-switcher">
                            <div>
                                 <ul class="text-center list-unstyled mb-0">
                                   <li class="d-grid"><a href="javascript:void(0)" class="rtl-version t-rtl-light" onclick="setTheme('style-rtl')"><img src="../assets/images/layouts/landing-light-rtl.png" class="img-fluid rounded-md shadow-md d-block" alt=""><span class="text-muted mt-2 d-block">راست چین</span></a></li>
                                    <li class="d-grid"><a href="javascript:void(0)" class="dark-rtl-version t-rtl-dark" onclick="setTheme('style-dark-rtl')"><img src="../assets/images/layouts/landing-dark-rtl.png" class="img-fluid rounded-md shadow-md d-block" alt=""><span class="text-muted mt-2 d-block">راست چین</span></a></li>
                                    <li class="d-grid"><a href="javascript:void(0)" class="dark-version t-dark mt-4" onclick="setTheme('style-dark-rtl')"><img src="../assets/images/layouts/landing-dark-rtl.png" class="img-fluid rounded-md shadow-md d-block" alt=""><span class="text-muted mt-2 d-block">حالت تاریک</span></a></li>
                                    <li class="d-grid"><a href="javascript:void(0)" class="light-version t-light mt-4" onclick="setTheme('style-rtl')"><img src="../assets/images/layouts/landing-light-rtl.png" class="img-fluid rounded-md shadow-md d-block" alt=""><span class="text-muted mt-2 d-block">حالت روشن</span></a></li>
                                    <li class="d-grid"><a href="../admin/index.html" target="_blank" class="mt-4"><img src="../assets/images/layouts/light-dash-rtl.png" class="img-fluid rounded-md shadow-md d-block" alt=""><span class="text-muted mt-2 d-block">دشبرد ادمین</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- end Style switcher -->
                    </div><!--end col-->
                </div><!--end row-->
            </div>

            <div class="offcanvas-footer p-4 border-top text-center">
                <ul class="list-unstyled social-icon mb-0">
                    <li class="list-inline-item mb-0"><a href="https://www.rtl-theme.com/doctris-html-template" target="_blank" class="rounded"><i class="uil uil-shopping-cart align-middle" title="خرید"></i></a></li>
                    <li class="list-inline-item mb-0"><a href=" " target="_blank" class="rounded"><i class="uil uil-dribbble align-middle" title="dribbble"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://www.rtl-theme.com/author/afaridteam/" target="_blank" class="rounded"><i class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://www.rtl-theme.com/author/afaridteam/" target="_blank" class="rounded"><i class="uil uil-instagram align-middle" title="instagram"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://www.rtl-theme.com/author/afaridteam/" target="_blank" class="rounded"><i class="uil uil-twitter align-middle" title="twitter"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://www.rtl-theme.com/author/afaridteam/" class="rounded"><i class="uil uil-envelope align-middle" title="email"></i></a></li>
                    <li class="list-inline-item mb-0"><a href=" " target="_blank" class="rounded"><i class="uil uil-globe align-middle" title="website"></i></a></li>
                </ul><!--end icon-->
            </div>
        </div>
        <!-- Offcanvas End -->

        <!-- MOdal Start -->
        <div class="modal fade" id="watchvideomodal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content video-modal rounded overflow-hidden">
                    <!-- <video class="w-100" controls autoplay muted loop>
                        <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                    </video> -->
                    <!--Browser does not support <video> tag -->
                    <!--If you want to use your own video please set your files path-->

                    <!-- <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/jNTZpfXYJa4?rel=0" title="YouTube video" allowfullscreen></iframe>
                        </div> -->
                    <!--If you want to use the youtube link please try the above code-->

                    <div class="ratio ratio-16x9">
                        <iframe src="https://player.vimeo.com/video/99025203" title="Vimeo video" allowfullscreen=""></iframe>
                    </div>
                    <!--If you want to use the Vimeo link please try the above code-->
                </div>
            </div>
        </div>
        <!-- MOdal End -->
        
        <!-- javascript -->
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <!-- SLIDER -->
        <script src="{{ asset('assets/js/tiny-slider.js') }}"></script>
        <script src="{{ asset('assets/js/tiny-slider-init.js') }}"></script>
        <!-- Counter -->
        <script src="{{ asset('assets/js/counter.init.js') }}"></script>
        <!-- Icons -->
        <script src="{{ asset('assets/js/counter.init.js') }}"></script>
        <!-- Main Js -->
        <script src="{{ asset('assets/js/app.js')}}"></script>
    </body>
</html>