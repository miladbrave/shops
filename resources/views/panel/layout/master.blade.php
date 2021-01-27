<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>دَشبرد | نازوکس - قالب مدیریتی رسپانسیو بوت‌سترپ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description"/>
    <meta content="Themesdesign" name="author"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="/back/assets/images/favicon.ico">

    <!-- jquery.vectormap css -->
    <link href="/back/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet"
          type="text/css"/>
    <!-- DataTables -->
    <link href="/back/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
    <!-- Responsive datatable examples -->
    <link href="/back/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet"
          type="text/css"/>
    <!-- Bootstrap Css -->
    <link href="/back/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <!-- Icons Css -->
    <link href="/back/assets/css/icons.min.css" rel="stylesheet" type="text/css"/>
    <!-- App Css-->
    <link href="/back/assets/css/app-rtl.min.css" rel="stylesheet" type="text/css"/>


</head>

<body data-topbar="dark" data-layout="horizontal">

<!-- Begin page -->
<div id="layout-wrapper">

    @include('panel.layout.header')

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
   @yield('content')
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- Right Sidebar -->
<div class="right-bar">
    <div data-simplebar class="h-100">
        <div class="rightbar-title px-3 py-4">
            <a href="javascript:void(0);" class="right-bar-toggle float-right">
                <i class="mdi mdi-close noti-icon"></i>
            </a>
            <h5 class="m-0">تنظیمات</h5>
        </div>

        <!-- Settings -->
        <hr class="mt-0"/>
        <h6 class="text-center mb-0">مدل چینش را انتخاب کنید</h6>

        <div class="p-4">
            <div class="mb-2">
                <img src="/back/assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="custom-control custom-switch mb-3">
                <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked/>
                <label class="custom-control-label" for="light-mode-switch">مود لایت</label>
            </div>

            <div class="mb-2">
                <img src="/back/assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="custom-control custom-switch mb-3">
                <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch"
                       data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css"/>
                <label class="custom-control-label" for="dark-mode-switch">مود تاریک</label>
            </div>

            <div class="mb-2">
                <img src="/back/assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="custom-control custom-switch mb-5">
                <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch"
                       data-appStyle="assets/css/app-rtl.min.css"/>
                <label class="custom-control-label" for="rtl-mode-switch">مود راست‌چین</label>
            </div>


        </div>

    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<script src="/back/assets/libs/jquery/jquery.min.js"></script>
<script src="/back/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/back/assets/libs/metismenu/metisMenu.min.js"></script>
<script src="/back/assets/libs/simplebar/simplebar.min.js"></script>
<script src="/back/assets/libs/node-waves/waves.min.js"></script>

<!-- apexcharts -->
<script src="/back/assets/libs/apexcharts/apexcharts.min.js"></script>

<!-- jquery.vectormap map -->
<script src="/back/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/back/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js"></script>

<!-- Required datatable js -->
<script src="/back/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/back/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

<!-- Responsive examples -->
<script src="/back/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="/back/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<script src="/back/assets/js/pages/dashboard.init.js"></script>
<script src="/back/assets/js/app.js"></script>
<script>
    var aa = 'n';
    //alert($("#dragme").width() - $(window).width())


    var holder = -($("#dragme").width() - $(window).width());
    //Make the DIV element draggagle:


    dragElement(document.getElementById("dragme"));

    function dragElement(elmnt) {

        var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
        if (document.getElementById(elmnt /*.id + "header"*/)) {
            /* if present, the header is where you move the DIV from:*/
            document.getElementById(elmnt /*.id + "header"*/).onmousedown = dragMouseDown;
        } else {
            /* otherwise, move the DIV from anywhere inside the DIV:*/
            elmnt.onmousedown = dragMouseDown;
        }

        function dragMouseDown(e) {
            e = e || window.event;
            e.preventDefault();
            // get the mouse cursor position at startup:
            pos3 = e.clientX;
            //pos4 = e.clientY;
            document.onmouseup = closeDragElement;
            // call a function whenever the cursor moves:
            document.onmousemove = elementDrag;
        }

        function elementDrag(e) {
            e = e || window.event;
            e.preventDefault();
            //calculate the new cursor position:
            pos1 = pos3 - e.clientX;
            //pos2 = pos4 - e.clientY;
            pos3 = e.clientX;
            //pos4 = e.clientY;
            //set the element's new position:
            //elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
            if (aa != 'n' && elmnt.offsetLeft - pos1 < aa) {
                return false;
            }
            if (aa != 'n' && elmnt.offsetLeft - pos1 > 20) {
                return false;
            }
            if (aa == 'n')
                aa = elmnt.offsetLeft - pos1;
            elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
            elmnt.style.right = (elmnt.offsetLeft - pos1) + "px" + $("#dragme").width();
            // console.log(elmnt.style.left,elmnt.style.right);
            // return false;
        }

        function closeDragElement() {
            /* stop moving when mouse button is released:*/
            document.onmouseup = null;
            document.onmousemove = null;
        }
    }

    var holder = ($("#dragme").width() - $(window).width());
    var y = 0;
    var oldy = 0;

    function myFunction(event, e) {


        console.log("test " + holder);
        if (y + event.deltaY >= 0)
            return;
        if ((y + event.deltaY) * 10 <= (holder * -1))
            return;
        y = event.deltaY + y;
        $("#dragme").css("left", y * 10);
    }

    document.getElementById("dragme").onmouseenter = function () {
        disableScroll();
    };

    document.getElementById("dragme").onmouseleave = function () {

        enableScroll();

    };

    function preventDefault(e) {
        e.preventDefault();
    }

    function preventDefaultForScrollKeys(e) {
        if (keys[e.keyCode]) {
            preventDefault(e);
            return false;
        }
    }

    // modern Chrome requires { passive: false } when adding event
    var supportsPassive = false;
    try {
        window.addEventListener("test", null, Object.defineProperty({}, 'passive', {
            get: function () {
                supportsPassive = true;
            }
        }));
    } catch (e) {
    }

    var wheelOpt = supportsPassive ? {passive: false} : false;
    var wheelEvent = 'onwheel' in document.createElement('div') ? 'wheel' : 'mousewheel';

    // call this to Disable
    function disableScroll() {
        window.addEventListener('DOMMouseScroll', preventDefault, false); // older FF
        window.addEventListener(wheelEvent, preventDefault, wheelOpt); // modern desktop
        window.addEventListener('touchmove', preventDefault, wheelOpt); // mobile
        window.addEventListener('keydown', preventDefaultForScrollKeys, false);
    }

    // call this to Enable
    function enableScroll() {
        window.removeEventListener('DOMMouseScroll', preventDefault, false);
        window.removeEventListener(wheelEvent, preventDefault, wheelOpt);
        window.removeEventListener('touchmove', preventDefault, wheelOpt);
        window.removeEventListener('keydown', preventDefaultForScrollKeys, false);
    }
</script>
</body>

</html>
