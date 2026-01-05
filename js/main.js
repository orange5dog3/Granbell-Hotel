// ==========================================================================
// hamburger
// ==========================================================================

$(".hamburger-trigger").click(
    function () {
        $(".hamburger-menu").toggleClass("active")
        $(".hamburger").toggleClass("active")
        $("#hamburger-bg").toggleClass("active")

        // メニュー開閉状態に応じてbodyへフラグを付与
        const menuOpen = $(".hamburger-menu").hasClass("active");
        $("body").toggleClass("menu-open", menuOpen);
    });



// ==========================================================================
// accordion (footer & hamburger menu)
// ==========================================================================
$('.js-accordion-trigger').on('click', function () {
    // SPサイズ（767px以下）のみアコーディオンを有効化
    // ヘッダー（ハンバーガー）はPC時は非表示のため影響なし
    if (window.innerWidth <= 767) {
        const $content = $(this).next('.js-accordion-content');

        // アコーディオンの開閉
        $content.stop(true, true).slideToggle(300);

        // 親要素にクラスを付与して矢印を回転させる
        $(this).parent().toggleClass('is-open');
    }
});

// ==========================================================================
// modal
// ==========================================================================

//「開く」がクリックされた場合
$('.modal-trigger').on('click', function () {
    // data-target属性の値を取得
    var target = $(this).data('target');
    // 対応するidのモーダルを表示
    $('#' + target).show();

    $('body').css('overflow-y', 'hidden');  // 本文の縦スクロールを無効
});

//「閉じる」がクリックされた場合
$('.js-modal-close').on('click', function () {
    $('.modal-window').hide();

    $('body').css('overflow-y', 'auto');     // 本文の縦スクロールを有効
});