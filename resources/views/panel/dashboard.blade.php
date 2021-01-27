@extends('panel.layout.master')
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0">دَشبرد</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">نازوکس</a></li>
                                    <li class="breadcrumb-item active">دَشبرد</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
                    <div class="col-xl-8">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body overflow-hidden">
                                                <p class="text-truncate font-size-14 mb-2">تعداد فروش</p>
                                                <h4 class="mb-0">1452</h4>
                                            </div>
                                            <div class="text-primary">
                                                <i class="ri-stack-line font-size-24"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body border-top py-3">
                                        <div class="text-truncate">
                                            <span class="badge badge-soft-success font-size-11"><i
                                                    class="mdi mdi-menu-up"> </i> 2.4% </span>
                                            <span class="text-muted ml-2">از دوره قبل</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body overflow-hidden">
                                                <p class="text-truncate font-size-14 mb-2">درآمد فروش</p>
                                                <h4 class="mb-0"> 38452 تومان</h4>
                                            </div>
                                            <div class="text-primary">
                                                <i class="ri-store-2-line font-size-24"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body border-top py-3">
                                        <div class="text-truncate">
                                            <span class="badge badge-soft-success font-size-11"><i
                                                    class="mdi mdi-menu-up"> </i> 2.4% </span>
                                            <span class="text-muted ml-2">از دوره قبل</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body overflow-hidden">
                                                <p class="text-truncate font-size-14 mb-2">ارزش میانگین </p>
                                                <h4 class="mb-0">150 تومان</h4>
                                            </div>
                                            <div class="text-primary">
                                                <i class="ri-briefcase-4-line font-size-24"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body border-top py-3">
                                        <div class="text-truncate">
                                            <span class="badge badge-soft-success font-size-11"><i
                                                    class="mdi mdi-menu-up"> </i> 2.4% </span>
                                            <span class="text-muted ml-2">از دوره قبل</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="card">
                            <div class="card-body">
                                <div class="float-right d-none d-md-inline-block">
                                    <div class="btn-group mb-2">
                                        <button type="button" class="btn btn-sm btn-light">امروز</button>
                                        <button type="button" class="btn btn-sm btn-light active">هفتگی</button>
                                        <button type="button" class="btn btn-sm btn-light">ماهانه</button>
                                    </div>
                                </div>
                                <h4 class="card-title mb-4"> تجزیه و تحلیل درآمد </h4>
                                <div>
                                    <div id="line-column-chart" class="apex-charts" dir="ltr"></div>
                                </div>
                            </div>

                            <div class="card-body border-top text-center">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="d-inline-flex">
                                            <h5 class="mr-2">12,253 تومان</h5>
                                            <div class="text-success">
                                                <i class="mdi mdi-menu-up font-size-14"> </i>2.2 %
                                            </div>
                                        </div>
                                        <p class="text-muted text-truncate mb-0"> این ماه </p>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="mt-4 mt-sm-0">
                                            <p class="mb-2 text-muted text-truncate"><i
                                                    class="mdi mdi-circle text-primary font-size-10 mr-1"></i> این سال
                                            </p>
                                            <div class="d-inline-flex">
                                                <h5 class="mb-0 mr-2">34,254 تومان</h5>
                                                <div class="text-success">
                                                    <i class="mdi mdi-menu-up font-size-14"> </i>2.1 %
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="mt-4 mt-sm-0">
                                            <p class="mb-2 text-muted text-truncate"><i
                                                    class="mdi mdi-circle text-success font-size-10 mr-1"></i> سال قبل
                                            </p>
                                            <div class="d-inline-flex">
                                                <h5 class="mb-0">32,695 تومان</h5>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="float-right">
                                    <select class="custom-select custom-select-sm">
                                        <option selected>مهر</option>
                                        <option value="1">آبان</option>
                                        <option value="2">آذر</option>
                                        <option value="3">دی</option>
                                    </select>
                                </div>
                                <h4 class="card-title mb-4"> تجزیه و تحلیل فروش </h4>

                                <div id="donut-chart" class="apex-charts"></div>

                                <div class="row">
                                    <div class="col-4">
                                        <div class="text-center mt-4">
                                            <p class="mb-2 text-truncate"><i
                                                    class="mdi mdi-circle text-primary font-size-10 mr-1"></i> محصول آ
                                            </p>
                                            <h5>42 %</h5>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="text-center mt-4">
                                            <p class="mb-2 text-truncate"><i
                                                    class="mdi mdi-circle text-success font-size-10 mr-1"></i> محصول ب
                                            </p>
                                            <h5>26 %</h5>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="text-center mt-4">
                                            <p class="mb-2 text-truncate"><i
                                                    class="mdi mdi-circle text-warning font-size-10 mr-1"></i> محصول س
                                            </p>
                                            <h5>42 %</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown float-right">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown"
                                       aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">گزارش فروش</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">گزارش خروجی</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">سود</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">فعالیت</a>
                                    </div>
                                </div>

                                <h4 class="card-title mb-4"> گزارش درآمد </h4>
                                <div class="text-center">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div>
                                                <div class="mb-3">
                                                    <div id="radialchart-1" class="apex-charts"></div>
                                                </div>

                                                <p class="text-muted text-truncate mb-2"> درآمد هفتگی</p>
                                                <h5 class="mb-0">2,523 تومان</h5>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="mt-5 mt-sm-0">
                                                <div class="mb-3">
                                                    <div id="radialchart-2" class="apex-charts"></div>
                                                </div>

                                                <p class="text-muted text-truncate mb-2"> درآمد ماهانه</p>
                                                <h5 class="mb-0">11,235 تومان</h5>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown float-right">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown"
                                       aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">گزارش فروش</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">گزارش خروجی</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">سود</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">فعالیت</a>
                                    </div>
                                </div>

                                <h4 class="card-title mb-3"> منابع </h4>

                                <div>
                                    <div class="text-center">
                                        <p class="mb-2"> منابع کلی </p>
                                        <h4>7652 تومان</h4>
                                        <div class="text-success">
                                            <i class="mdi mdi-menu-up font-size-14"> </i>2.2 %
                                        </div>
                                    </div>

                                    <div class="table-responsive mt-4">
                                        <table class="table table-hover mb-0 table-centered table-nowrap">
                                            <tbody>
                                            <tr>
                                                <td style="width: 60px;">
                                                    <div class="avatar-xs">
                                                        <div class="avatar-title rounded-circle bg-light">
                                                            <img src="/back/assets/images/companies/img-1.png" alt=""
                                                                 height="20">
                                                        </div>
                                                    </div>
                                                </td>

                                                <td>
                                                    <h5 class="font-size-14 mb-0"> منبع 1</h5>
                                                </td>
                                                <td>
                                                    <div id="spak-chart1"></div>
                                                </td>
                                                <td>
                                                    <p class="text-muted mb-0">2478 تومان</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar-xs">
                                                        <div class="avatar-title rounded-circle bg-light">
                                                            <img src="/back/assets/images/companies/img-2.png" alt=""
                                                                 height="20">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="font-size-14 mb-0"> منبع 2</h5>
                                                </td>

                                                <td>
                                                    <div id="spak-chart2"></div>
                                                </td>
                                                <td>
                                                    <p class="text-muted mb-0">2625 تومان</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar-xs">
                                                        <div class="avatar-title rounded-circle bg-light">
                                                            <img src="/back/assets/images/companies/img-3.png" alt=""
                                                                 height="20">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="font-size-14 mb-0"> منبع 3</h5>
                                                </td>
                                                <td>
                                                    <div id="spak-chart3"></div>
                                                </td>
                                                <td>
                                                    <p class="text-muted mb-0">2856 تومان</p>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="text-center mt-4">
                                        <a href="#" class="btn btn-primary btn-sm">مشاهده بیشتر</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown float-right">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown"
                                       aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">گزارش فروش</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">گزارش خروجی</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">سود</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">فعالیت</a>
                                    </div>
                                </div>

                                <h4 class="card-title mb-4">آخرین فعالیت‌ها</h4>

                                <div data-simplebar style="max-height: 330px;">
                                    <ul class="list-unstyled activity-wid">
                                        <li class="activity-list">
                                            <div class="activity-icon avatar-xs">
                                                        <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                            <i class="ri-edit-2-fill"></i>
                                                        </span>
                                            </div>
                                            <div>
                                                <div>
                                                    <h5 class="font-size-13">28 مهر, 1399 <small class="text-muted">12:07
                                                            قبل‌ازظهر</small></h5>
                                                </div>

                                                <div>
                                                    <p class="text-muted mb-0">پاسخ به نیازهای فعالیتهای داوطلبانه</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="activity-list">
                                            <div class="activity-icon avatar-xs">
                                                        <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                            <i class="ri-user-2-fill"></i>
                                                        </span>
                                            </div>
                                            <div>
                                                <div>
                                                    <h5 class="font-size-13">21 آبان, 1399 <small class="text-muted">08:01
                                                            بعدازظهر</small></h5>
                                                </div>

                                                <div>
                                                    <p class="text-muted mb-0">افزوده شدن به عنوان فعالیت داوطلبانه</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="activity-list">
                                            <div class="activity-icon avatar-xs">
                                                        <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                            <i class="ri-bar-chart-fill"></i>
                                                        </span>
                                            </div>
                                            <div>
                                                <div>
                                                    <h5 class="font-size-13">17 آبان, 1399 <small class="text-muted">09:23
                                                            قبل‌ازظهر</small></h5>
                                                </div>

                                                <div>
                                                    <p class="text-muted mb-0">افزوده شدن به گروه با هم</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="activity-list">
                                            <div class="activity-icon avatar-xs">
                                                        <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                            <i class="ri-mail-fill"></i>
                                                        </span>
                                            </div>
                                            <div>
                                                <div>
                                                    <h5 class="font-size-13">11 آذر, 1399 <small class="text-muted">05:10
                                                            بعدازظهر</small></h5>
                                                </div>

                                                <div>
                                                    <p class="text-muted mb-0">پاسخ به نیاز تامین موجودی</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="activity-list">
                                            <div class="activity-icon avatar-xs">
                                                        <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                            <i class="ri-calendar-2-fill"></i>
                                                        </span>
                                            </div>
                                            <div>
                                                <div>
                                                    <h5 class="font-size-13">07 دی, 1399 <small class="text-muted">12:47
                                                            بعدازظهر</small></h5>
                                                </div>

                                                <div>
                                                    <p class="text-muted mb-0">افزودن فعالیت داوطلبانه</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="activity-list">
                                            <div class="activity-icon avatar-xs">
                                                        <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                            <i class="ri-edit-2-fill"></i>
                                                        </span>
                                            </div>
                                            <div>
                                                <div>
                                                    <h5 class="font-size-13">05 مهر, 1399 <small class="text-muted">03:09
                                                            بعدازظهر</small></h5>
                                                </div>

                                                <div>
                                                    <p class="text-muted mb-0">ساخت یک رویداد برای کمک</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="activity-list">
                                            <div class="activity-icon avatar-xs">
                                                        <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                            <i class="ri-user-2-fill"></i>
                                                        </span>
                                            </div>
                                            <div>
                                                <div>
                                                    <h5 class="font-size-13">02 مهر, 1399 <small class="text-muted">12:07
                                                            قبل‌ازظهر</small></h5>
                                                </div>

                                                <div>
                                                    <p class="text-muted mb-0">پاسخ به نیاز تامین موجودی</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown float-right">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown"
                                       aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">گزارش فروش</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">گزارش خروجی</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">سود</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">فعالیت</a>
                                    </div>
                                </div>

                                <h4 class="card-title mb-4">بازگشت سرمایه براساس لوکیشن</h4>

                                <div id="usa-vectormap" style="height: 196px"></div>

                                <div class="row justify-content-center">
                                    <div class="col-xl-5 col-md-6">
                                        <div class="mt-2">
                                            <div class="clearfix py-2">
                                                <h5 class="float-right font-size-16 m-0">2245 تومان</h5>
                                                <p class="text-muted mb-0 text-truncate">کالیفرنیا:</p>

                                            </div>
                                            <div class="clearfix py-2">
                                                <h5 class="float-right font-size-16 m-0">2245 تومان</h5>
                                                <p class="text-muted mb-0 text-truncate">نوادا:</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-5 offset-xl-1 col-md-6">
                                        <div class="mt-2">
                                            <div class="clearfix py-2">
                                                <h5 class="float-right font-size-16 m-0">2156 تومان</h5>
                                                <p class="text-muted mb-0 text-truncate">مونتانا :</p>

                                            </div>
                                            <div class="clearfix py-2">
                                                <h5 class="float-right font-size-16 m-0">1845 تومان</h5>
                                                <p class="text-muted mb-0 text-truncate">تگزاس :</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mt-4">
                                    <a href="#" class="btn btn-primary btn-sm">بیشتر بخوانید</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body border-bottom">

                                <div class="user-chat-border">
                                    <div class="row">
                                        <div class="col-md-5 col-9">
                                            <h5 class="font-size-15 mb-1">فرید دویدا</h5>
                                            <p class="text-muted mb-0"><i
                                                    class="mdi mdi-circle text-success align-middle mr-1"></i>فعال</p>
                                        </div>
                                        <div class="col-md-7 col-3">
                                            <ul class="list-inline user-chat-nav text-right mb-0">
                                                <li class="list-inline-item">
                                                    <div class="dropdown">
                                                        <button class="btn nav-btn dropdown-toggle" type="button"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-md p-0">
                                                            <form class="p-2">
                                                                <div class="search-box">
                                                                    <div class="position-relative">
                                                                        <input type="text"
                                                                               class="form-control rounded bg-light border-0"
                                                                               placeholder="جستجو...">
                                                                        <i class="mdi mdi-magnify search-icon"></i>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-inline-item d-none d-sm-inline-block">
                                                    <div class="dropdown">
                                                        <button class="btn nav-btn dropdown-toggle" type="button"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            <i class="mdi mdi-cog"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">دیدن پروفایل</a>
                                                            <a class="dropdown-item" href="#">پاک کردن چت</a>
                                                            <a class="dropdown-item" href="#">میوت کردن</a>
                                                            <a class="dropdown-item" href="#">حذف</a>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="list-inline-item">
                                                    <div class="dropdown">
                                                        <button class="btn nav-btn dropdown-toggle" type="button"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            <i class="mdi mdi-dots-horizontal"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">فعالیت</a>
                                                            <a class="dropdown-item" href="#">فعالیت دیگر</a>
                                                            <a class="dropdown-item" href="#">یک فعالیت دیگر</a>
                                                        </div>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chat-widget">
                                    <div class="chat-conversation" data-simplebar style="max-height: 292px;">
                                        <ul class="list-unstyled mb-0 pr-3">
                                            <li>
                                                <div class="conversation-list">
                                                    <div class="chat-avatar">
                                                        <img src="/back/assets/images/users/avatar-2.jpg" alt="">
                                                    </div>
                                                    <div class="ctext-wrap">
                                                        <div class="conversation-name">فرید دویدا</div>
                                                        <div class="ctext-wrap-content">
                                                            <p class="mb-0">
                                                                سلام من الان هستم
                                                            </p>
                                                        </div>
                                                        <p class="chat-time mb-0"><i
                                                                class="mdi mdi-clock-outline align-middle mr-1"></i>
                                                            12:09</p>
                                                    </div>

                                                </div>
                                            </li>

                                            <li class="right">
                                                <div class="conversation-list">
                                                    <div class="ctext-wrap">
                                                        <div class="conversation-name">رامین مهران</div>
                                                        <div class="ctext-wrap-content">
                                                            <p class="mb-0">
                                                                سلام، چه خوب، دوست داری دفعه بعدی کی همو ببینیم؟
                                                            </p>
                                                        </div>

                                                        <p class="chat-time mb-0"><i
                                                                class="bx bx-time-five align-middle mr-1"></i> 10:02</p>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="chat-day-title">
                                                    <span class="title">امروز</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="conversation-list">
                                                    <div class="chat-avatar">
                                                        <img src="/back/assets/images/users/avatar-2.jpg" alt="">
                                                    </div>
                                                    <div class="ctext-wrap">
                                                        <div class="conversation-name">فرید دویدا</div>
                                                        <div class="ctext-wrap-content">
                                                            <p class="mb-0">
                                                                سلام!
                                                            </p>
                                                        </div>
                                                        <p class="chat-time mb-0"><i
                                                                class="mdi mdi-clock-outline align-middle mr-1"></i>
                                                            10:00</p>
                                                    </div>

                                                </div>
                                            </li>

                                            <li class="right">
                                                <div class="conversation-list">
                                                    <div class="ctext-wrap">
                                                        <div class="conversation-name">رامین مهران</div>
                                                        <div class="ctext-wrap-content">
                                                            <p class="mb-0">
                                                                سلام، چه خوب، دوست داری دفعه بعدی کی همو ببینیم؟
                                                            </p>
                                                        </div>

                                                        <p class="chat-time mb-0"><i
                                                                class="bx bx-time-five align-middle mr-1"></i> 10:02</p>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="conversation-list">
                                                    <div class="chat-avatar">
                                                        <img src="/back/assets/images/users/avatar-2.jpg" alt="">
                                                    </div>
                                                    <div class="ctext-wrap">
                                                        <div class="conversation-name">فرید دویدا</div>
                                                        <div class="ctext-wrap-content">
                                                            <p class="mb-0">
                                                                آره خوبه موافقم
                                                            </p>
                                                        </div>

                                                        <p class="chat-time mb-0"><i
                                                                class="bx bx-time-five align-middle mr-1"></i> 10:06</p>
                                                    </div>

                                                </div>
                                            </li>

                                            <li>
                                                <div class="conversation-list">
                                                    <div class="chat-avatar">
                                                        <img src="/back/assets/images/users/avatar-2.jpg" alt="">
                                                    </div>
                                                    <div class="ctext-wrap">
                                                        <div class="conversation-name">فرید دویدا</div>
                                                        <div class="ctext-wrap-content">
                                                            <p class="mb-0">پس خیلی زود میبینمت</p>
                                                        </div>
                                                        <p class="chat-time mb-0"><i
                                                                class="bx bx-time-five align-middle mr-1"></i> 10:06</p>
                                                    </div>

                                                </div>
                                            </li>

                                            <li class="right">
                                                <div class="conversation-list">
                                                    <div class="ctext-wrap">
                                                        <div class="conversation-name">رامین مهران</div>
                                                        <div class="ctext-wrap-content">
                                                            <p class="mb-0">
                                                                چه عالی
                                                            </p>
                                                        </div>

                                                        <p class="chat-time mb-0"><i
                                                                class="bx bx-time-five align-middle mr-1"></i> 10:07</p>
                                                    </div>
                                                </div>
                                            </li>


                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 chat-input-section border-top">
                                <div class="row">
                                    <div class="col">
                                        <div>
                                            <input type="text" class="form-control rounded chat-input pl-3"
                                                   placeholder="اینجا بنویسید...">
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit"
                                                class="btn btn-primary chat-send w-md waves-effect waves-light"><span
                                                class="d-none d-sm-inline-block mr-2">ارسال</span> <i
                                                class="mdi mdi-send"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown float-right">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown"
                                       aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">گزارش فروش</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">گزارش خروجی</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">سود</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">فعالیت</a>
                                    </div>
                                </div>

                                <h4 class="card-title mb-4">آخرین تراکنش‌ها</h4>

                                <div class="table-responsive">
                                    <table class="table table-centered datatable dt-responsive nowrap"
                                           data-page-length="5"
                                           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead class="thead-light">
                                        <tr>
                                            <th style="width: 20px;">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="ordercheck">
                                                    <label class="custom-control-label" for="ordercheck">&nbsp;</label>
                                                </div>
                                            </th>
                                            <th>شناسه سفارش</th>
                                            <th>تاریخ</th>
                                            <th>نام پرداخت کننده</th>
                                            <th>کل</th>
                                            <th>وضعیت پرداخت</th>
                                            <th style="width: 120px;">فعالیت</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                           id="ordercheck1">
                                                    <label class="custom-control-label" for="ordercheck1">&nbsp;</label>
                                                </div>
                                            </td>

                                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#NZ1572</a>
                                            </td>
                                            <td>
                                                04 مهر, 1399
                                            </td>
                                            <td>مهرنا آسوده</td>

                                            <td>
                                                172 تومان
                                            </td>
                                            <td>
                                                <div class="badge badge-soft-success font-size-12">پرداخت شده</div>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="mr-3 text-primary"
                                                   data-toggle="tooltip" data-placement="top" title=""
                                                   data-original-title="ویرایش"><i
                                                        class="mdi mdi-pencil font-size-18"></i></a>
                                                <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip"
                                                   data-placement="top" title="" data-original-title="حذف"><i
                                                        class="mdi mdi-trash-can font-size-18"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                           id="ordercheck2">
                                                    <label class="custom-control-label" for="ordercheck2">&nbsp;</label>
                                                </div>
                                            </td>

                                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#NZ1571</a>
                                            </td>
                                            <td>
                                                03 مهر, 1399
                                            </td>
                                            <td>هانیه شهرا</td>

                                            <td>
                                                165 تومان
                                            </td>
                                            <td>
                                                <div class="badge badge-soft-warning font-size-12">پرداخت نشده</div>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="mr-3 text-primary"
                                                   data-toggle="tooltip" data-placement="top" title=""
                                                   data-original-title="ویرایش"><i
                                                        class="mdi mdi-pencil font-size-18"></i></a>
                                                <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip"
                                                   data-placement="top" title="" data-original-title="حذف"><i
                                                        class="mdi mdi-trash-can font-size-18"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                           id="ordercheck3">
                                                    <label class="custom-control-label" for="ordercheck3">&nbsp;</label>
                                                </div>
                                            </td>

                                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#NZ1570</a>
                                            </td>
                                            <td>
                                                03 مهر, 1399
                                            </td>
                                            <td>دنیا آزاده</td>

                                            <td>
                                                146 تومان
                                            </td>
                                            <td>
                                                <div class="badge badge-soft-success font-size-12">پرداخت شده</div>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="mr-3 text-primary"
                                                   data-toggle="tooltip" data-placement="top" title=""
                                                   data-original-title="ویرایش"><i
                                                        class="mdi mdi-pencil font-size-18"></i></a>
                                                <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip"
                                                   data-placement="top" title="" data-original-title="حذف"><i
                                                        class="mdi mdi-trash-can font-size-18"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                           id="ordercheck4">
                                                    <label class="custom-control-label" for="ordercheck4">&nbsp;</label>
                                                </div>
                                            </td>

                                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#NZ1569</a>
                                            </td>
                                            <td>
                                                02 مهر, 1399
                                            </td>
                                            <td>پندار نیک</td>

                                            <td>
                                                183 تومان
                                            </td>
                                            <td>
                                                <div class="badge badge-soft-success font-size-12">پرداخت شده</div>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="mr-3 text-primary"
                                                   data-toggle="tooltip" data-placement="top" title=""
                                                   data-original-title="ویرایش"><i
                                                        class="mdi mdi-pencil font-size-18"></i></a>
                                                <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip"
                                                   data-placement="top" title="" data-original-title="حذف"><i
                                                        class="mdi mdi-trash-can font-size-18"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                           id="ordercheck5">
                                                    <label class="custom-control-label" for="ordercheck5">&nbsp;</label>
                                                </div>
                                            </td>

                                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#NZ1568</a>
                                            </td>
                                            <td>
                                                01 آذر, 1399
                                            </td>
                                            <td>جینا آهنگ</td>

                                            <td>
                                                160 تومان
                                            </td>
                                            <td>
                                                <div class="badge badge-soft-danger font-size-12">برگشتی</div>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="mr-3 text-primary"
                                                   data-toggle="tooltip" data-placement="top" title=""
                                                   data-original-title="ویرایش"><i
                                                        class="mdi mdi-pencil font-size-18"></i></a>
                                                <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip"
                                                   data-placement="top" title="" data-original-title="حذف"><i
                                                        class="mdi mdi-trash-can font-size-18"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                           id="ordercheck6">
                                                    <label class="custom-control-label" for="ordercheck6">&nbsp;</label>
                                                </div>
                                            </td>

                                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#NZ1567</a>
                                            </td>
                                            <td>
                                                31 آذر, 1399
                                            </td>
                                            <td>حمید ماهایا</td>

                                            <td>
                                                105 تومان
                                            </td>
                                            <td>
                                                <div class="badge badge-soft-warning font-size-12">پرداخت نشده</div>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="mr-3 text-primary"
                                                   data-toggle="tooltip" data-placement="top" title=""
                                                   data-original-title="ویرایش"><i
                                                        class="mdi mdi-pencil font-size-18"></i></a>
                                                <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip"
                                                   data-placement="top" title="" data-original-title="حذف"><i
                                                        class="mdi mdi-trash-can font-size-18"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                           id="ordercheck7">
                                                    <label class="custom-control-label" for="ordercheck7">&nbsp;</label>
                                                </div>
                                            </td>

                                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#NZ1566</a>
                                            </td>
                                            <td>
                                                30 مهر, 1399
                                            </td>
                                            <td>سیما بینا</td>

                                            <td>
                                                112 تومان
                                            </td>
                                            <td>
                                                <div class="badge badge-soft-success font-size-12">پرداخت شده</div>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="mr-3 text-primary"
                                                   data-toggle="tooltip" data-placement="top" title=""
                                                   data-original-title="ویرایش"><i
                                                        class="mdi mdi-pencil font-size-18"></i></a>
                                                <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip"
                                                   data-placement="top" title="" data-original-title="حذف"><i
                                                        class="mdi mdi-trash-can font-size-18"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                           id="ordercheck8">
                                                    <label class="custom-control-label" for="ordercheck8">&nbsp;</label>
                                                </div>
                                            </td>

                                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#NZ1565</a>
                                            </td>
                                            <td>
                                                29 مهر, 1399
                                            </td>
                                            <td>جاسمین کامیار</td>

                                            <td>
                                                123 تومان
                                            </td>
                                            <td>
                                                <div class="badge badge-soft-success font-size-12">پرداخت شده</div>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="mr-3 text-primary"
                                                   data-toggle="tooltip" data-placement="top" title=""
                                                   data-original-title="ویرایش"><i
                                                        class="mdi mdi-pencil font-size-18"></i></a>
                                                <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip"
                                                   data-placement="top" title="" data-original-title="حذف"><i
                                                        class="mdi mdi-trash-can font-size-18"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                           id="ordercheck9">
                                                    <label class="custom-control-label" for="ordercheck9">&nbsp;</label>
                                                </div>
                                            </td>

                                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#NZ1564</a>
                                            </td>
                                            <td>
                                                28 تیر, 1399
                                            </td>
                                            <td>آروان تمدن</td>

                                            <td>
                                                141 تومان
                                            </td>
                                            <td>
                                                <div class="badge badge-soft-success font-size-12">پرداخت شده</div>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="mr-3 text-primary"
                                                   data-toggle="tooltip" data-placement="top" title=""
                                                   data-original-title="ویرایش"><i
                                                        class="mdi mdi-pencil font-size-18"></i></a>
                                                <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip"
                                                   data-placement="top" title="" data-original-title="حذف"><i
                                                        class="mdi mdi-trash-can font-size-18"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                           id="ordercheck10">
                                                    <label class="custom-control-label"
                                                           for="ordercheck10">&nbsp;</label>
                                                </div>
                                            </td>

                                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#NZ1563</a>
                                            </td>
                                            <td>
                                                28 تیر, 1399
                                            </td>
                                            <td>فرهنگ ثمین</td>

                                            <td>
                                                164 تومان
                                            </td>
                                            <td>
                                                <div class="badge badge-soft-warning font-size-12">پرداخت نشده</div>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="mr-3 text-primary"
                                                   data-toggle="tooltip" data-placement="top" title=""
                                                   data-original-title="ویرایش"><i
                                                        class="mdi mdi-pencil font-size-18"></i></a>
                                                <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip"
                                                   data-placement="top" title="" data-original-title="حذف"><i
                                                        class="mdi mdi-trash-can font-size-18"></i></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        1399 © نازوکس.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-right d-none d-sm-block">
                            ارایه با <i class="mdi mdi-heart text-danger"></i> از AFARIDTEAM
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection
