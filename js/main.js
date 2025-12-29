// ==========================================================================
// hamburger
// ==========================================================================

$(".hamburger-trigger").click(
    function() {
    $(".hamburger-menu").toggleClass("active")
    $(".hamburger").toggleClass("active")
    $("#hamburger-bg").toggleClass("active")
    
     // メニュー開閉状態に応じてbodyへフラグを付与
    const menuOpen = $(".hamburger-menu").hasClass("active");
    $("body").toggleClass("menu-open", menuOpen);
});



// ==========================================================================
// footer accordion
// ==========================================================================


$(".footer__accordion-trigger").click(function(){
  var $item = $(this).closest(".question__box-item");
  var $answer = $item.find(".question__card-a");

  $item.toggleClass("is-open");

  if ($item.hasClass("is-open")) {
      $answer
        .css("display", "flex")
        .hide()
        .slideDown(300);
  } else {
      $answer.slideUp(300, function() {
        $(this).css("display", "none");
      });
  }
});

// ==========================================================================
// fixed-btn
// ==========================================================================
$(function () {
    const $fixedBtn = $("#fixed-btn");
    // const $fv = $(".top__fv");
    const $cta = $(".c-cta");
  
    let ctaInView = false; // c-ctaが見えているかのフラグ
  
    // 表示/非表示をまとめて制御
    const applyVisibility = () => {
      // cta が見えていないときのみ表示
      if (!ctaInView) {
        $fixedBtn.addClass("is-visible");
      } else {
        $fixedBtn.removeClass("is-visible");
      }
    };
  
    // スクロール・リサイズ時に判定
    $(window).on("scroll resize", applyVisibility);
  
    // c-cta が「1pxでも」画面に入ったら非表示
    if ($cta.length) {
      const observer = new IntersectionObserver(
        (entries) => {
          entries.forEach((entry) => {
            ctaInView = entry.isIntersecting;
            applyVisibility();
          });
        },
        {
          threshold: 0, // ← 1pxでも入った瞬間に反応
        }
      );
      observer.observe($cta[0]);
    } else {
      // c-ctaが存在しない場合は常に表示
      ctaInView = false;
    }
  
    // 初回チェック
    applyVisibility();
});