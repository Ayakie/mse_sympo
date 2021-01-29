<!-- php読み込み -->
<?php
require_once('data.php');
require_once('card.php');
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Service engineering symposium</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
        <!-- font -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=Open+Sans&family=Permanent+Marker&display=swap" rel="stylesheet">
        <!-- original style sheet -->
        <link rel="stylesheet" href="../css/style_presentation.css">
        <link rel="stylesheet" href="../css/style_top.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.4/css/all.css">
        <!-- jQuery -->
        <script>
            $(document)
              .ready(function() {
                // show dropdown on hover
                $('.ui.dropdown').dropdown({
                  on: 'hover'
                });
              })
            ;

            // スムーススクロール
            $(function(){
            $('a[href^="#"]').click(function(){
                var speed = 500;
                var href= $(this).attr("href");
                var target = $(href == "#" || href == "" ? 'html' : href);
                var position = target.offset().top;
                $("html, body").animate({scrollTop:position}, speed, "swing");
                return false;
            });
            });

            $(function(){
                $("#button").bind("click",function(){

                var field;
                field = $("#field").val();
                re = new RegExp(field);

                    $(".cards  .card").each(function(){
                        var txt = $(this).find("p").text();
                        if(txt.match(re) != null){
                            $(this).show();
                        }else{
                            $(this).hide();
                        }
                    });
                });

                $("#button2").bind("click",function(){
                    $(".cards .card").show();
                });
            });
        </script>

    </head>

    <body>
        <div class="main">

            <!-- <div class="top-visual"> -->
                <div class="ui fixed inverted compact labeled icon menu">
                    <div class="ui container">
                        <a href="../index.html" class="item" style="padding-top: 27px;">社会工学データサイエンスシンポジウム</a>
                        <div class="right menu">
                            <a href="../index.html" class="ui purple item"><i class="inverted home icon"></i>Home</a>
                            <div class="ui dropdown purple item">
                                <i class="inverted file alternate icon"></i>Material
                                <div class="menu">
                                    <a href="#" class="ui dropdown item">Student
                                    </a>
                                    <a href="Project.html" class="item">Project</a>
                                </div>
                            </div>
                            <div class="ui dropdown purple item"><i class="inverted graduation cap icon"></i>Link
                                <div class="menu">
                                    <a href="https://www.sk.tsukuba.ac.jp/College/index.php" class="item" target="_blank">つくばの社工</a>
                                    <a href="https://www.sk.tsukuba.ac.jp/PPS/se/" class="item" target="_blank">サービス工学学位プログラム</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- </div> -->

            <div class="head">
                <div class="ui container">
                    <h2>Presentation slide</h2>
                    <div class="ui grid seg-content">
                        <div class="column">
                            <div class="ui raised segment" style="width:70%;margin:0 auto;text-align:left;">
                                <a class="ui red ribbon label">M1</a>
                                <span>これから取り組む・これまでに取り組んだ産官学連携研究について、その計画や成果について発表します</span>
                                <p></p>
                                <a class="ui blue ribbon label">M2</a>
                                <span>修士の間に行った産官学連携研究の成果について発表します</span>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content">
            <div class="grade">
                <div class="ui stackable menu grid">
                    <div class="active item three wide column">
                        <div class="ui pointing dropdown" style="margin:0 auto;">
                            <div class="text"><a href="#" style="color:purple;">Student</a></div>
                            <i class="dropdown icon"></i>
                            <div class="menu">
                                <a href="#M1" class="item">M1</a>
                                <a href="#M2" class="item">M2</a>
                            </div>
                        </div>
                    </div>
                    <div class="item three wide grid column">
                        <div class="ui pointing dropdown" style="margin:0 auto;">
                            <div class="text"><a href="Project.html" style="color:black;">Project</a></div>
                            <i class="dropdown icon"></i>
                            <div class="menu">
                                <a href="Project.html#labolatory" class="item">Laboratory</a>
                                <a href="Project.html#placemaking" class="item">Class</a>
                            </div>
                        </div>
                    </div>
                    <div class="item three wide grid column">
                        <div style="margin:0 auto;">
                            <div class="text" ><a href="#" style="color:black;"><i class="calendar alternate outline icon"></i>Time Table</a></div>
                        </div>
                    </div>
                    <div class="item seven wide column">
                        <div class="search-area" style="margin:0 auto;">
                            <form method="get" action="" style="display:inline-block;">
                                <select name="研究分野" class="ui dropdown" id="field" style="margin:0.5em;width:50%;">
                                    <option value="">研究分野を選んでください</option>
                                    <option value="需要予測">需要予測</option>
                                    <option value="network">network</option>
                                    <option value="データ解析">データ解析</option>
                                    <option value="テキストマイニング">テキストマイニング</option>
                                    <option value="都市計画">都市計画</option>
                                </select>
                                <div style="display:inline-block;">
                                    <input type="button" value="絞り込む" id="button" class="ui mini purple button" style="margin:0.5em;">
                                    <input type="button" value="全て表示" id="button2" class="ui mini purple button" style="margin:0.5em;">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <a id="M1" class="anchor"></a>
            <div class="M1 materials">
                <h3>M1</h3>
                <div class="container">
                    <div class="ui cards centered" id="cards">
                        <!-- card-item -->
                        <?php foreach ($rows as $row): $studentData = new Card($row)?>
                            <div class="card" style="width:400px;" id="card">
                                <?php echo $studentData -> getEmbeddedLink() ?>
                                <div class="content" style="padding-bottom: 0.6em;">
                                    <div class="header" style="padding-bottom: 1rem;"><?php echo $studentData -> getSlideNumber() .". ".$studentData -> getTitle() ?></div>
                                    <div class="ui two column grid">
                                        <div class="column time">
                                            <div><?php echo "①".$studentData -> getTime1() ?></div>
                                            <div><?php echo "②".$studentData -> getTime2() ?></div>
                                        </div>
                                        <div class="column student-name"><?php echo $studentData -> getName() ?></div>
                                    </div>
                                </div>
                                <div class="extra content">
                                    <div class="ui two column grid">
                                        <div class="column">
                                                <div class="ui tag labels" style="margin-left: 0em;">
                                                    <p><a class="ui tag label" style="width:100%;text-align:center;"><?php echo $studentData -> getTag1() ?></a></p>
                                                    <?php
                                                    $tag2 = $studentData->getTag2();
                                                    if($tag2 != null) {
                                                        echo "<p><a class='ui teal tag label' style='width:100%;text-align:center;'>{$tag2}</a></p>";
                                                    } else {
                                                        echo "<br>";
                                                    }
                                                    ?>
                                                </div>
                                        </div>
                                        <div class="column youtube-icon">
                                            <button class="ui youtube button right floated" onclick="window.open('https://youtu.be/Oezmni8SklA','_blank')" style="vertical-align: bottom;">
                                            <i class="youtube icon"></i>YouTube
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>

                    </div> <!-- /card-container -->
                </div> <!-- /card-inner -->
            </div> <!-- /materials -->

            <a id="M2" class="anchor"></a>
            <div class="M2 materials">
                <h3>M2</h3>
                <div class="container">
                    <div class="ui cards centered">
                        <!-- card-item -->
                        <?php foreach ($rows as $row): $studentData = new Card($row)?>
                            <div class="card" style="width:400px;" id="card">
                                <?php echo $studentData -> getEmbeddedLink() ?>
                                <div class="content" style="padding-bottom: 0.6em;">
                                    <div class="header" style="padding-bottom: 1rem;"><?php echo $studentData -> getSlideNumber() .". ".$studentData -> getTitle() ?></div>
                                    <div class="ui two column grid">
                                        <div class="column time">
                                            <div><?php echo "①".$studentData -> getTime1() ?></div>
                                            <div><?php echo "②".$studentData -> getTime2() ?></div>
                                        </div>
                                        <div class="column student-name"><?php echo $studentData -> getName() ?></div>
                                    </div>
                                </div>
                                <div class="extra content">
                                    <div class="ui two column grid">
                                        <div class="column">
                                                <div class="ui tag labels" style="margin-left: 0em;">
                                                    <p><a class="ui tag label" style="width:100%;text-align:center;"><?php echo $studentData -> getTag1() ?></a></p>
                                                    <?php
                                                    $tag2 = $studentData->getTag2();
                                                    if($tag2 != null) {
                                                        echo "<p><a class='ui teal tag label' style='width:100%;text-align:center;'>{$tag2}</a></p>";
                                                    } else {
                                                        echo "<br>";
                                                    }
                                                    ?>
                                                </div>
                                        </div>
                                        <div class="column youtube-icon">
                                            <button class="ui youtube button right floated" onclick="window.open('https://youtu.be/Oezmni8SklA','_blank')" style="vertical-align: bottom;">
                                            <i class="youtube icon"></i>YouTube
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div> <!-- /card-container -->
                </div> <!-- /card-inner -->
            </div> <!-- /materials -->

            <div class="voting">
                <button class="ui inverted secondary button" onclick="window.open('https://youtu.be/Oezmni8SklA','_blank')">
                <i class="archive icon"></i>投票はこちらから
                </button>
            </div>

            </div> <!-- /content -->

            <div id="page_top"><a href="#"></a></div>
            <!-- footer -->
            <div class="footer">
                <div class="ui container" style="text-align: left;">
                    <div class="ui divided equal height grid">
                        <div class="six wide column">
                            <h4 class="ui header">主催</h4>
                                <p class="item">
                                    <i class="right triangle icon"></i>
                                    筑波大学大学院 理工情報生命学術院 システム情報工学研究群 社会工学専攻 サービス工学学位プログラム
                                </p>
                                <p class="item">
                                    <i class="right triangle icon"></i>
                                    筑波大学 理工学群 社会工学類
                                </p>
                            <h4 class="header">後援</h4>
                            <div class="ui list">
                                <a href="http://ja.serviceology.org/index.html" target="_blank">
                                    <i class="right triangle icon"></i>
                                    サービス学会</a>
                            </div>
                        </div>
                        <div class="six wide column">
                            <h4 class="ui header">関連リンク</h4>
                            <div class="ui list">
                                <a href="https://www.sk.tsukuba.ac.jp/College/index.php" target="_blank" class="item">
                                    <i class="right triangle icon"></i>
                                    筑波大学 理工学群 社会工学類
                                </a>
                                <a href="https://www.sie.tsukuba.ac.jp/" target="_blank" class="item">
                                    <i class="right triangle icon"></i>
                                    筑波大学大学院 理工情報生命学術院 システム情報工学研究群
                                </a>
                                <ul>
                                    <li><a href="https://www.sk.tsukuba.ac.jp/PPS/pps/" target="_blank">社会工学学位プログラム</a></li>
                                    <li><a href="https://www.sk.tsukuba.ac.jp/PPS/se/" target="_blank">サービス工学学位プログラム</a></li>
                                </ul>
                                <button class="ui facebook button" onclick="window.open('https://www.facebook.com/tsukuba.pps.jp/', '_blank')">
                                    <i class="facebook icon"></i>Facebook
                                </button>
                            </div>
                        </div>
                        <div class="four wide column">
                            <h4 class="ui header">お問い合わせ</h4>
                            <p></p>
                            <div class="ui list">
                                <a href="https://forms.gle/dqCh7VApzngk5qsP6" target="_blank" class="item">
                                    <i class="envelope icon"></i>
                                    サービス工学シンポジウム実行委員会
                                </a>
                                <div class="item" id="tsukuba-footer"><img src="../img/tsukuba_footer.png" width="65%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>