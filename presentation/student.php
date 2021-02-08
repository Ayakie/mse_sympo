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

    </head>

    <body>
        <div class="main">

            <!-- header -->
            <?php include('../assets/header.php'); ?>

            <div class="head">
                <div class="ui container">
                    <h2>Presentation slides</h2>
                    <div class="ui grid seg-content">
                        <div class="column">
                            <div class="ui raised segment" style="width:75%;margin:0 auto;text-align:left;">
                                <p class="ui red ribbon label">修士１年（M1）</p>
                                <span>これから取り組む・これまでに取り組んだ産官学連携研究について、その計画や成果について発表します</span>
                                <p></p>
                                <p class="ui blue ribbon label">修士２年（M2）</p>
                                <span>修士の間に行った産官学連携研究の成果について発表します</span>
                                <p></p>
                                <!-- <div class="column" style="text-align: center; font-size: 16px;">投票は<a href="#voting-button">こちら</a>から</div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content">

            <!-- メニュー -->
            <div class="grade">
                <div class="ui stackable menu grid" style="font-size: 16px;">
                    <div class="active item two wide column">
                        <div class="ui pointing dropdown" style="margin:0 auto;">
                            <div class="text"><a href="#" style="color:purple;">Student</a></div>
                            <i class="dropdown icon"></i>
                            <div class="menu">
                                <a href="#M1" class="item">M1</a>
                                <a href="#M2" class="item">M2</a>
                            </div>
                        </div>
                    </div>
                    <div class="item two wide grid column">
                        <div class="ui pointing dropdown" style="margin:0 auto;">
                            <div class="text"><a href="project.php" style="color:black;">Project</a></div>
                            <i class="dropdown icon"></i>
                            <div class="menu">
                                <a href="project.php#labolatory" class="item">Laboratory</a>
                                <a href="project.php#placemaking" class="item">Class</a>
                            </div>
                        </div>
                    </div>
                    <div class="item three wide grid column">
                        <div style="margin:0 auto;">
                            <div class="text" ><a href="https://drive.google.com/file/d/1sPB8yJ2Oyrfjx1ek09h2r2tRZTG2ZLt8/preview" target="_blank" style="color:black;"><i class="calendar alternate outline icon"></i>Time Table</a></div>
                        </div>
                    </div>
                    <div class="item nine wide column">
                        <div class="search-area" style="margin:0 auto;">
                            <form method="get" action="" style="display:inline-block;">
                                <select name="研究分野" class="ui dropdown" id="field" style="margin:0.5em;width:50%;">
                                    <option value="">研究分野を選んでください</option>
                                    <?php
                                    foreach ($tagList as $tag) {
                                        echo "<option value={$tag}>{$tag}</option>";
                                    };
                                    ?>
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
            
            <!-- M1 スライドセクション -->
            <a id="M1" class="anchor"></a>
            <div class="M1 materials">
                <div class="ui centered grid">
                    <h3 class="six wide column" style="text-align: right;">M 1</h3>
                    <div class="six wide column" style="padding-left: 50px;">
                        <button class="ui inverted secondary large button" onclick="window.open('https://forms.gle/uDWLYMFK1sjGvLoeA','_blank')" data-tooltip="面白い！と思った研究を最大3つお選びください。この投票結果で、優秀発表賞が決まります。"><i class="archive icon"></i> 投票する（M1）</a>
                    </div>
                </div>
                <div class="container">
                    <div class="ui cards centered" id="cards">
                        <!-- card example -->
                        <div class="slide purple card" style="width: 400px;">
                            <img src="../img/slide_example.png" width="100%">
                            <div class="content">
                                <div class="header" style="margin-top: 40px;">(スライド番号).研究タイトル</div>
                                <div class="ui grid">
                                    <div class="ten wide column time">
                                        <div>①発表時間１(Remoテーブル)</div>
                                        <div>②発表時間２(Remoテーブル)</div>
                                        <div>メニューのTime Tableをご確認ください</div>
                                    </div>
                                    <div class="six wide column student-name">発表者名</div>
                                </div>
                            </div>
                            <div class="extra content">
                                <div class="ui two column grid">
                                    <div class="column">
                                        <div class="ui tag labels">
                                            <p><a class="ui tag label">研究分野①</a></p>
                                            <p><a class="ui tag label">研究分野②</a></p>
                                        </div>
                                    </div>
                                    <div class="column youtube-icon">
                                        <div class="ui icon button" data-tooltip="研究に対する感想や応援等を、是非コメントください。"><i class="ui comment alternate icon"></i></div>
                                        <a class="ui watching button right floated" style="font-size: 12px; padding:1em 0.8em;"><i class="video icon"></i>発表動画を観る</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- card-item -->
                        <?php foreach ($m1 as $row): $studentData = new Card($row)?>
                        <div class="slide card" style="width:400px;" id="card">
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
                                            <?php
                                            $tag1 = $studentData->getTag1();
                                            echo "<p><a class='ui tag label {$studentData->getTagColor($tag1, $tagList, $colorsDict)}'>{$tag1}</a></p>";
                                            $tag2 = $studentData->getTag2();
                                            if($tag2 != null) {
                                                echo "<p><a class='ui tag label {$studentData->getTagColor($tag2, $tagList, $colorsDict)}'>{$tag2}</a></p>";
                                            } else {
                                                echo "<br>";
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="column youtube-icon">
                                        <?php
                                        echo "<div class='ui comment icon button' data-tooltip='コメントする' id='card'.{$studentData->getSlideNumber()}>"
                                        ?>
                                        <i class="ui comment alternate icon"></i></div>
                                    
                                    <!-- 動画リンク -->
                                    <?php if(date('Y-m-d H:i') > ('2021-02-10 00:00')):?>
                                        <a href=<?php echo $studentData -> getYoutubeLink() ?> target="_blank" class="ui watching button right floated" style="font-size: 12px; padding:1em 0.8em;">
                                    <?php else:?>
                                        <a href="../assets/preparing.php" class="ui watching button right floated" style="font-size: 12px; padding:1em 0.8em;">
                                    <?php endif; ?>
                                    <i class="video icon"></i>発表動画を観る</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
            
            <!-- M2 スライドセクション -->
            <a id="M2" class="anchor"></a>
            <div class="M2 materials">
                <div class="ui centered grid">
                    <h3 class="six wide column" style="text-align: right;">M 2</h3>
                    <div class="six wide column" style="padding-left: 50px;">
                        <button class="ui inverted secondary large button" onclick="window.open('https://forms.gle/yFU1X6A6KBrRJ9nH7','_blank')" data-tooltip="面白い！と思った研究を最大3つお選びください。この投票結果で、優秀発表賞が決まります。"><i class="archive icon"></i> 投票する（M2）</a>
                    </div>
                </div>
                <div class="container">
                    <div class="ui cards centered">
                        
                        <!-- card-item -->
                        <?php foreach ($m2 as $row): $studentData = new Card($row)?>
                        <div class="slide card" style="width:400px;" id="card">
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
                                            <?php
                                            $tag1 = $studentData->getTag1();
                                            echo "<p><a class='ui tag label {$studentData->getTagColor($tag1, $tagList, $colorsDict)}'>{$tag1}</a></p>";
                                            $tag2 = $studentData->getTag2();
                                            if($tag2 != null) {
                                                echo "<p><a class='ui tag label {$studentData->getTagColor($tag2, $tagList, $colorsDict)}'>{$tag2}</a></p>";
                                            } else {
                                                echo "<br>";
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="column youtube-icon">
                                        <?php
                                        echo "<div class='ui comment icon button' data-tooltip='コメントする' id='card'.{$studentData->getSlideNumber()}>"
                                        ?>
                                        <i class="ui comment alternate icon"></i></div>
                                        <a href=<?php echo $studentData -> getYoutubeLink() ?> target="_blank" class="ui watching button right floated" style="font-size: 12px; padding:1em 0.8em;">
                                        <i class="video icon"></i>発表動画を観る</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>

            <!-- comment modal -->
            <?php date_default_timezone_set('Asia/Tokyo'); ?>
            <div class="ui small modal">
                <?php
                    if (('2021-02-11 00:00' < date('Y-m-d H:i')) && (date('Y-m-d H:i') < '2021-02-14 00:00')):
                    // if (true):
                ?>
                    <i class="close icon"></i>
                    <div class="header">
                        研究に対する感想や応援等を、是非コメントください。
                    </div>
                    <div class="scrolling content">
                        <p>コメント内容は他の方から見えませんので、ご自由にお書きください。</p>
                        <!--  " -->
                        <form class="ui form" method="POST" action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSe0UsuM9GCUMzOqkISNLjVpwDwSbQFo5Wnw3vqEiAeLFGdYdg/formResponse" target="hidden_iframe" onsubmit="submitted=true";>
                            <p>
                                <div class="required field">
                                    <label>1. お名前（必須）</label>
                                    <input class="required-form" type="text" name="entry.1993511996" placeholder="社工 花子" id="name">
                                </div>
                            </p>
                            <div class="field">
                                <label>2. メールアドレス（返事を希望の場合）</label>
                                <input name="entry.1741669450" placeholder="aaabbb@gmail.com" id="email">
                            </div>
                            <div class="field">
                                <div class="ui checkbox">
                                    <input type="checkbox" tabindex="0" class="hidden" name="entry.846302703" value="yes">
                                    <label>返信を希望する</label>
                                </div>
                            </div>
                            <div class="required field">
                                <label>3. スライド番号および発表者名（必須）</label>
                                <select name="entry.1978908169" class="ui fluid dropdown" id="slideNumber">
                                    <option value="">コメントするスライド</option>
                                    <?php
                                    $memberList = $studentData -> getMemberList();
                                    $cnt = count($memberList) -1;
                                    for ($i=0; $i<=$cnt; $i++) {
                                        echo "<option value={$memberList[$i]}>".$memberList[$i]."</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="required field">
                                <label>4. 発表内容へのコメントまたは質問（必須）</label>
                                <textarea name="entry.825151473" rows="4" placeholder="発表スライドや動画に対する感想や質問等を10文字以上でご自由にお書きください。半角文字のみは不可。" id="comment"></textarea>
                            </div>
                            <div class="ui error message"></div>
                            <div class="actions">
                                <div class="ui cancel button">
                                    キャンセル
                                </div>
                                <button class="ui comment-submit button" type="submit">送信する</button>
                            </div>
                        </form>
                        <script type="text/javascript">submitted = false;</script>
                        <iframe name="hidden_iframe" id="hidden_iframe" style="display:none;" onload="if(submitted){window.location='comment.php';}"></iframe>
                    </div>
                <?php else: ?>
                    <div class="image content">
                        <div class="ui medium image"><img src="../img/out_of_time.png" alt=""></div>
                        <div class="description">
                            <h2 style="margin: 30px;">Sorry...</h2>
                            <p>ただいまコメントを受け付けておりません。<br>受付時間は 2021.2.11 00:00 ~ 2021.2.14 00:00 です。</p>
                        </div>
                    </div>
                    <div class="actions">
                        <div class="ui cancel button">戻る</div>
                    </div>
                <?php endif; ?>
            </div>

            </div> <!-- /content 終わり-->

            <div id="page_top"><a href="#"></a></div>
            
            <!-- footer -->
            <?php include('../assets/footer.html'); ?>
        </div>
        <!-- jQuery -->
        <script type="text/javascript" src="../js/utils.js"></script>
        <script type="text/javascript" src="../js/presentation.js"></script>
    </body>
</html>