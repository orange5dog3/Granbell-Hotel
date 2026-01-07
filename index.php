<?php 
include 'functions.php';
include 'header.php'; 
?>

<main class="top header-padding">
    <div class="top__fv">
        <div class="top__fv-title">
            <img src="image/top/image_top_fv-title.svg" alt="その街らしいおもてなしを">
        </div>
        <div class="top__fv-image">
            <picture>
                <source media="(min-width: 768px)" srcset="image/top/image_top_fv_pc.png">
                <img src="image/top/image_top_fv_sp.png" alt="GRANBELL HOTEL GROUP">
            </picture>
        </div>
    </div>

    <div class="top__vertical-writing">
        <div class="top__vertical-writing__bg">
            <picture>
                <source media="(min-width: 768px)" srcset="image/top/image_top_orange_ball_pc.png">
                <img src="image/top/image_top_orange_ball_sp.png" alt="">
            </picture>
        </div>
        <div class="inner">
            <div class="top__vertical-writing-box">
                <p>
                    それぞれの街が持つ<br>
                    特有の文化。<br>
                    その季節にしか<br>
                    味わえない<br>
                    非日常空間。
                </p>
            </div>
        </div>
    </div>





    <section class="top__vision">
        <div class="top__vision__bg1">
            <picture>
                <source media="(min-width: 768px)" srcset="image/top/image_top_orangeblue_ball_pc.png">
                <img src="image/top/image_top_orangeblue_ball_sp.png" alt="">
            </picture>
        </div>
        <div class="top__vision__bg2">
            <picture>
                <source media="(min-width: 768px)" srcset="image/top/image_top_blue_ball_pc.png">
                <img src="image/top/image_top_blue_ball_sp.png" alt="">
            </picture>
        </div>

        <div class="inner">

            <h2 class="section-title">VISION<br><span>私たちのビジョン</span></h2>
            <p>
                その素晴らしさを、ホテルを通してもっと伝えたい。
                <br>
                <br>

                グランベルホテルは、そんな想いを何よりも大切にしています。
                <br>
                <br>

                リゾートホテルや都市型ホテル、ブライダルから海外まで
                <br>
                既存の「枠」に捉われず、日々新たなチャレンジを今後も続けます。
                <br>
                何よりもお客様のために。
                <br>
                <br>
                さあ、ホテルの常識を、
                <br>
                私たちと共に変えていきましょう。
            </p>
        </div>
    </section>

    <section class="top__about">
        <div class="inner">
            <h2 class="section-title color-white">ABOUT US<br><span>はじめに</span></h2>

            <div class="top__about__flex-parent">
                <div class="c-round-box c-box color-base-white-bg top__about-box">
                    <div class="c-box-image">
                        <img src="image/top/logo_top_about1.svg" alt="">
                    </div>
                    <div class="c-box-text">
                        <div class="c-box-text-title">
                            <h3>COMPANY DATA</h3>
                            <p>数字が語るグランベルホテル</p>
                        </div>
                        <p class="c-box-text-content">数字の裏にあるのは、社員一人ひとりの成長と挑戦の軌跡。<br>
                            自分らしく力を発揮できる環境が、グランベルホテルの未来を創り続けています。</p>
                    </div>
                    <a href="#" class="c-box-link">
                        <?php echo get_icon_triangle(); ?>
                    </a>
                </div>
                <div class="top__about__flex-child">
                    <div class="c-round-box c-box color-base-white-bg top__about-box">
                        <div class="c-box-image">
                            <img src="image/top/logo_top_about2.svg" alt="">
                        </div>
                        <div class="c-box-text">
                            <div class="c-box-text-title">
                                <h3>TRANSFORMATION</h3>
                                <p>グランベルホテルの枠を<br>超えた挑戦</p>
                            </div>
                        </div>
                        <a href="#" class="c-box-link">
                            <?php echo get_icon_triangle(); ?>
                        </a>
                    </div>
                    <div class="c-round-box c-box color-base-white-bg top__about-box">
                        <div class="c-box-image">
                            <img src="image/top/logo_top_about3.svg" alt="">
                        </div>
                        <div class="c-box-text">
                            <div class="c-box-text-title">
                                <h3>PHILOSOPHY</h3>
                                <p>グランベルホテルの<br>ぶれない経営理念</p>
                            </div>
                        </div>
                        <a href="#" class="c-box-link">
                            <?php echo get_icon_triangle(); ?>
                        </a>
                    </div>

                </div>
            </div>



        </div>


    </section>

    <section class="top__company">
        <div class="top__company__bg">
            <img src="image/top/bg_top_company.png" alt="">
        </div>

        <div class="top__company__inner">
            <h2 class="section-title">COMPANY<br><span>会社を知る</span></h2>

            <div class="top__company-location">
                <h3>私たちの拠点</h3>

                <div class="top__company-grid">
                    <div class="top__company__grid-top">
                        <div class="top__company__grid-box">
                            <div class="top__company__grid__box-image">
                                <picture>
                                    <source media="(min-width: 768px)" srcset="image/top/image_top_company1_pc.jpg">
                                    <img src="image/top/image_top_company1_sp.jpg" alt="リゾートホテル">
                                </picture>
                            </div>
                            <div class="top__company__grid__box-text">
                                <h4>リゾートホテル</h4>
                                <p>日々の喧騒を抜け出す絶景のリゾートステイ</p>
                            </div>
                        </div>
                    </div>

                    <div class="top__company__grid top__company__grid-middle">
                        <div class="top__company__grid-box">
                            <div class="top__company__grid__box-image">
                                <picture>
                                    <source media="(min-width: 768px)" srcset="image/top/image_top_company2_pc.jpg">
                                    <img src="image/top/image_top_company2_sp.jpg" alt="海外">
                                </picture>
                            </div>
                            <div class="top__company__grid__box-text">
                                <h4>海外</h4>
                                <p>どこまでも広がるオーシャンビュー</p>
                            </div>
                        </div>
                        <div class="top__company__grid-box">
                            <div class="top__company__grid__box-image">
                                <picture>
                                    <source media="(min-width: 768px)" srcset="image/top/image_top_company3_pc.jpg">
                                    <img src="image/top/image_top_company3_sp.jpg" alt="ブライダル">
                                </picture>
                            </div>
                            <div class="top__company__grid__box-text">
                                <h4>ブライダル</h4>
                                <p>軽井沢で迎えるはじまりの日</p>
                            </div>
                        </div>
                    </div>

                    <div class="top__company__grid top__company__grid-bottom">
                        <div class="top__company__grid-box">
                            <div class="top__company__grid__box-image">
                                <picture>
                                    <source media="(min-width: 768px)" srcset="image/top/image_top_company4_pc.jpg">
                                    <img src="image/top/image_top_company4_sp.jpg" alt="都市型ホテル">
                                </picture>
                            </div>
                            <div class="top__company__grid__box-text">
                                <h4>都市型ホテル</h4>
                                <p>その街ごとに異なる洗練されたデザイン</p>
                            </div>
                        </div>

                        <div class="top__company__grid-box">
                            <div class="top__company__grid__box-image">
                                <picture>
                                    <source media="(min-width: 768px)" srcset="image/top/image_top_company5_pc.jpg">
                                    <img src="image/top/image_top_company5_sp.jpg" alt="旅館">
                                </picture>
                            </div>
                            <div class="top__company__grid__box-text">
                                <h4>旅館</h4>
                                <p>四季の彩りと木のぬくもりに包まれた至福の滞在</p>
                            </div>
                        </div>
                    </div>

                </div>
                
                <a href="#" class="c-btn c-black-btn top__company__location-btn">
                    <span>拠点を知る</span>
                    <?php echo get_icon_triangle(); ?>
                </a>


            </div>

            <div class="top__company-environment">
                <h3>様々なポジションで<br>マルチタスクに挑戦できる環境</h3>

                <div class="top__company-flex">
                    <div class="top__company__flex-box  c-round-box color-white-bg">
                        <div class="top__company__flex__box-image">
                            <img src="image/top/logo_top_company1.svg" alt="宿泊部門">
                        </div>
                        <p>宿泊部門</p>
                    </div>
                    <div class="top__company__flex-box c-round-box color-white-bg">
                        <div class="top__company__flex__box-image">
                            <img src="image/top/logo_top_company2.svg" alt="料飲部門">
                        </div>
                        <p>料飲部門</p>
                    </div>
                    <div class="top__company__flex-box c-round-box color-white-bg">
                        <div class="top__company__flex__box-image">
                            <img src="image/top/logo_top_company3.svg" alt="調理部門">
                        </div>
                        <p>調理部門</p>
                    </div>
                    <div class="top__company__flex-box c-round-box color-white-bg">
                        <div class="top__company__flex__box-image">
                            <img src="image/top/logo_top_company4.svg" alt="管理部門">
                        </div>
                        <p>管理部門</p>
                    </div>
                    <div class="top__company__flex-box c-round-box color-white-bg">
                        <div class="top__company__flex__box-image">
                            <img src="image/top/logo_top_company5.svg" alt="営業部門">
                        </div>
                        <p>営業部門</p>
                    </div>
                </div>

                <a href="#" class="c-btn c-black-btn top__company__environment-btn">
                    <span>ポジションを知る</span>
                    <?php echo get_icon_triangle(); ?>
                </a>
            </div>
        </div>
    </section>

    <section class="top__career">
        <div class="inner">
            <h2 class="section-title">CAREER<br><span>描けるキャリア</span></h2>

            <div class="top__career-grid">

                <div class="top__career__grid-box">
                    <div class="top__career__grid__box-image">
                        <picture>
                            <source media="(min-width: 768px)" srcset="image/top/image_top_career_pc.png">
                            <img src="image/top/image_top_career_sp.png" alt="キャリア">
                        </picture>
                    </div>
                    <div class="top__career__grid__box-number">
                        <h3>01</h3>
                        <p>Granbell Hotel Group<br><span>CAREER</span></p>
                    </div>
                    <div class="top__career__grid__box-text">
                        <p class="top__career__grid__box-text-title">都市型ホテル/支配人</p>
                        <p class="top__career__grid__box-text-content">目指すは日本一のホテル。<br>
                            視野は広く、視点は高く<br>
                            ホテル業務にマルチに関わる</p>
                        <div class="top__career__grid__box-btn">
                            <a href="#" class="c-btn c-white-btn">
                                <span>詳しく知る</span>
                                <?php echo get_icon_triangle(); ?>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="top__career__grid-box">
                    <div class="top__career__grid__box-image">
                        <picture>
                            <source media="(min-width: 768px)" srcset="image/top/image_top_career_pc.png">
                            <img src="image/top/image_top_career_sp.png" alt="キャリア">
                        </picture>
                    </div>
                    <div class="top__career__grid__box-number">
                        <h3>02</h3>
                        <p>Granbell Hotel Group<br><span>CAREER</span></p>
                    </div>
                    <div class="top__career__grid__box-text">
                        <p class="top__career__grid__box-text-title">リゾートホテル/フロント</p>
                        <p class="top__career__grid__box-text-content">若手ならではの視点で<br>
                            ラグジュアリーホテルの<br>
                            サービスを考える</p>
                        <div class="top__career__grid__box-btn">
                            <a href="#" class="c-btn c-white-btn">
                                <span>詳しく知る</span>
                                <?php echo get_icon_triangle(); ?>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="top__career__grid-box">
                    <div class="top__career__grid__box-image">
                        <picture>
                            <source media="(min-width: 768px)" srcset="image/top/image_top_career_pc.png">
                            <img src="image/top/image_top_career_sp.png" alt="キャリア">
                        </picture>
                    </div>
                    <div class="top__career__grid__box-number">
                        <h3>03</h3>
                        <p>Granbell Hotel Group<br><span>CAREER</span></p>
                    </div>
                    <div class="top__career__grid__box-text">
                        <p class="top__career__grid__box-text-title">リゾートホテル/レストラン</p>
                        <p class="top__career__grid__box-text-content">最高の時間と空間を<br>
                            最高の仲間と<br>
                            共につくりあげていく</p>
                        <div class="top__career__grid__box-btn">
                            <a href="#" class="c-btn c-white-btn">
                                <span>詳しく知る</span>
                                <?php echo get_icon_triangle(); ?>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="top__career__grid-box">
                    <div class="top__career__grid__box-image">
                        <picture>
                            <source media="(min-width: 768px)" srcset="image/top/image_top_career_pc.png">
                            <img src="image/top/image_top_career_sp.png" alt="キャリア">
                        </picture>
                    </div>
                    <div class="top__career__grid__box-number">
                        <h3>04</h3>
                        <p>Granbell Hotel Group<br><span>CAREER</span></p>
                    </div>
                    <div class="top__career__grid__box-text">
                        <p class="top__career__grid__box-text-title">都市型ホテル/マネージャー</p>
                        <p class="top__career__grid__box-text-content">リゾート・海外・都市型<br>
                            それぞれで得た経験で<br>
                            ホテル全体をマネジメントする</p>
                        <div class="top__career__grid__box-btn">
                            <a href="#" class="c-btn c-white-btn">
                                <span>詳しく知る</span>
                                <?php echo get_icon_triangle(); ?>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="top__career__grid-box">
                    <div class="top__career__grid__box-image">
                        <picture>
                            <source media="(min-width: 768px)" srcset="image/top/image_top_career_pc.png">
                            <img src="image/top/image_top_career_sp.png" alt="キャリア">
                        </picture>
                    </div>
                    <div class="top__career__grid__box-number">
                        <h3>05</h3>
                        <p>Granbell Hotel Group<br><span>CAREER</span></p>
                    </div>
                    <div class="top__career__grid__box-text">
                        <p class="top__career__grid__box-text-title">都市型ホテル/調理</p>
                        <p class="top__career__grid__box-text-content">作り手によって味も見た目も<br>
                            変わる魔法のような料理で<br>
                            お客様を笑顔に</p>
                        <div class="top__career__grid__box-btn">
                            <a href="#" class="c-btn c-white-btn">
                                <span>詳しく知る</span>
                                <?php echo get_icon_triangle(); ?>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="top__career__grid-box">
                    <div class="top__career__grid__box-image">
                        <picture>
                            <source media="(min-width: 768px)" srcset="image/top/image_top_career_pc.png">
                            <img src="image/top/image_top_career_sp.png" alt="キャリア">
                        </picture>
                    </div>
                    <div class="top__career__grid__box-number">
                        <h3>06</h3>
                        <p>Granbell Hotel Group<br><span>CAREER</span></p>
                    </div>
                    <div class="top__career__grid__box-text">
                        <p class="top__career__grid__box-text-title">リゾートホテル/支配人</p>
                        <p class="top__career__grid__box-text-content">新たなチャレンジを続け<br>
                            支配人として<br>
                            ホテルの価値を高めていく</p>
                        <div class="top__career__grid__box-btn">
                            <a href="#" class="c-btn c-white-btn">
                                <span>詳しく知る</span>
                                <?php echo get_icon_triangle(); ?>
                            </a>
                        </div>
                    </div>
                </div>



            </div>


        </div>
    </section>

    <section class="top__recruit">
        <div class="inner">
            <h2 class="section-title">RECRUIT<br><span>採用情報</span></h2>
        </div>

        <div class="top__recruit-box top__recruit__box color-gray-bg">
            <div class="inner">
                <p class="top__recruit__box-number">01</p>
                <p class="top__recruit__box-outline">募集要項</p>
                <p class="top__recruit__box-title">あなたに合ったポジションと<br>働き方を見つけてください。</p>
                <p class="top__recruit__box-content">
                    あなたの挑戦が活きるフィールドを、全国にご用意しています。<br>総合職・勤務地限定職、さまざま働き方があります。
                </p>
                <div class="top__recruit__box-btn">
                    <a href="#" class="c-btn c-black-btn">
                        <span>募集要項を見る</span>
                        <?php echo get_icon_triangle(); ?>
                    </a>
                </div>
            </div>
        </div>

        <div class="top__recruit-box top__recruit__box color-accent-bg top__recruit__box-negative-margin">
            <div class="inner">
                <p class="top__recruit__box-number">02</p>
                <p class="top__recruit__box-outline">採用チームからのメッセージ</p>
                <p class="top__recruit__box-title">若手もベテランも、<br>想いを形にできる場所。</p>
                <p class="top__recruit__box-content">
                私たちは、あなたの「やってみたい」を全力で応援します。<br>一歩踏み出す勇気が、未来のグランベルをつくります。
                </p>
                <div class="top__recruit__box-btn">
                    <a href="#" class="c-btn c-black-btn">
                        <span>先輩の声を見る</span>
                        <?php echo get_icon_triangle(); ?>
                    </a>
                </div>  
            </div>
        </div>

        <div class="top__recruit-box top__recruit__box color-gray-bg top__recruit__box-negative-margin">
            <div class="inner">
                <p class="top__recruit__box-number">03</p>
                <p class="top__recruit__box-outline">福利厚生&社員寮紹介</p>
                <p class="top__recruit__box-title">「働きやすさ」も<br>「暮らしやすさ」も大切に。</p>
                <p class="top__recruit__box-content">
                    安心して長く働ける制度と、成長を支える教育環境。<br>“人”の可能性を育てる仕組みが、ここにはあります。
                </p>
                <div class="top__recruit__box-btn">
                    <a href="#" class="c-btn c-black-btn">
                        <span>福利厚生を見る</span>
                        <?php echo get_icon_triangle(); ?>
                    </a>
                </div>
            </div>
        </div>

        <div class="top__recruit-box top__recruit__box color-accent-bg top__recruit__box-negative-margin">
            <div class="inner">
                <p class="top__recruit__box-number">04</p>
                <p class="top__recruit__box-outline">採用FAQ</p>
                <p class="top__recruit__box-title">働く前に気になること、<br>まとめてご紹介。</p>
                <p class="top__recruit__box-content">
                    仕事の流れからキャリアアップまで、リアルな疑問にお答えします。<br>“未来の自分”を具体的に思い描けるはずです。
                </p>
                <div class="top__recruit__box-btn">
                    <a href="#" class="c-btn c-black-btn">
                        <span>FAQを見る</span>
                        <?php echo get_icon_triangle(); ?>
                    </a>
                </div>
            </div>
        </div>

    </section>

    <div class="top__join-the-team">
        <div class="top__join-the-team__track">
            <div class="top__join-the-team__content">
                <p>JOIN THE TEAM</p>
                <p>JOIN THE TEAM</p>
                <p>JOIN THE TEAM</p>
            </div>
            <div class="top__join-the-team__content">
                <p>JOIN THE TEAM</p>
                <p>JOIN THE TEAM</p>
                <p>JOIN THE TEAM</p>
            </div>
        </div>
    </div>



</main>
<?php include 'footer.php'; ?>