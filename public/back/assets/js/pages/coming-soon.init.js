$("[data-countdown]").each(function () {
  var n = $(this),
    s = $(this).data("countdown");
  n.countdown(s, function (n) {
    $(this).html(
      n.strftime(
        '<div class="coming-box">%D <span>روز</span></div> <div class="coming-box">%H <span>ساعت</span></div> <div class="coming-box">%M <span>دقیقه</span></div> <div class="coming-box">%S <span>ثانیه</span></div> '
      )
    );
  });
});
