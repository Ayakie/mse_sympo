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
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.4/css/all.css">
        <link rel="stylesheet" href="../css/style_top.css">
        <link rel="stylesheet" href="../css/style_presentation.css">
    </head>

    <body>
        <div class="main">
            
            <!-- header -->
            <?php include('../assets/header.php'); ?>

            <div class="head">
                <div class="ui container">
                    <h2>Project Poster</h2>
                    <div class="ui grid seg-content">
                        <div class="column">
                            <div class="ui raised segment" style="width:70%;margin:0 auto;text-align:left;">
                                <a class="ui orange ribbon label">Laboratory</a>
                                <span>それぞれの研究室で取り組んだ産官学連携研究について紹介します</span>
                                <p></p>
                                <a class="ui teal ribbon label">Class</a>
                                <span>授業内で取り組んだ産官学連携プロジェクトの成果について紹介します</span>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grade">
                <div class="ui purple stackable menu grid" style="font-size: 16px;">
                    <div class="item five wide column">
                        <div class="ui pointing dropdown" style="margin:0 auto;">
                        <?php
                        date_default_timezone_set('Asia/Tokyo');
                        if(date('Y-m-d H:i') > ('2021-02-09 00:00')):
                        // if(true):
                        ?>
                        <div class="text"><a href="student.php">Student</a></div>
                        <i class="dropdown icon"></i>
                        <div class="menu">
                            <a href="student.php#M1" class="item">M1</a>
                            <a href="student.php#M2" class="item">M2</a>
                        </div>
                        <?php else:?>
                            <div class="text"><a href="../assets/preparing.php" style="color: black;">Student</a></div>
                        <?php endif; ?>
                        </div>
                    </div>
                    <div class="active item six wide column">
                        <div class="ui pointing dropdown" style="margin:0 auto;">
                            <div class="text"><a href="#" style="color:purple;">Project</a></div>
                            <i class="dropdown icon"></i>
                            <div class="menu">
                                <a href="#labolatory" class="item">Laboratory</a>
                                <a href="#placemaking" class="item">Class</a>
                            </div>
                        </div>
                    </div>
                    <div class="item five wide column">
                        <div style="margin:0 auto;">
                            <div class="text" ><a href="https://drive.google.com/file/d/1sPB8yJ2Oyrfjx1ek09h2r2tRZTG2ZLt8/preview" target="_blank" style="color:black;"><i class="calendar alternate outline icon"></i>Time Table</a></div>
                        </div>
                    </div>
                </div>
            </div>

            <a id="labolatory" class="anchor"></a>
            <div class="Labo materials">
                <h3>Laboratory</h3>
                <div class="cards-container">
                    <div class="ui cards centered">
                        <!-- card-item -->
                        <div class="card" style="width:400px;">
                            <iframe src="https://drive.google.com/file/d/1Tx7tIi3cBUOO3CtNrD9I-ji2xUiCDOBZ/preview" width="400" height="550"></iframe>
                            <div class="content" style="padding-bottom: 0.6em;">
                                <div class="header" style="padding-bottom: 1rem;">1. データコラボレーション解析技術</div>
                                <div class="ui two column grid">
                                    <div class="column time">
                                        <div>①16:30 ~ 16:50 (PJ-1)</div>
                                        <div>②17:10 ~ 17:30 (PJ-2)</div>
                                    </div>
                                    <div class="column labo">
                                        <div class="ui icon comment button" data-tooltip="コメントする"><i class="ui comment alternate icon"></i></div>
                                        <div class="student-name">岡田研</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- card-item -->
                        <div class="card" style="width:400px;">
                            <iframe src="https://drive.google.com/file/d/18QhaxrlEGFkl3Eukv3pfZgzwIDt78Zi5/preview" width="400" height="550"></iframe>
                            <div class="content" style="padding:1em 0.6em;">
                                <div class="header" style="padding-bottom: 1rem;">2. 謝辞ネットワークから見る学術界の引用関係</div>
                                <div class="ui two column grid">
                                    <div class="column time">
                                        <div>①15:50 ~ 16:10 (PJ-3)</div>
                                        <div>②17:10 ~ 17:30 (PJ-3)</div>
                                    </div>
                                    <div class="column labo">
                                        <div class="ui icon comment button" data-tooltip="コメントする"><i class="ui comment alternate icon"></i></div>
                                        <div class="column student-name">佐野研</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- card-item -->
                        <div class="card" style="width:400px;">
                            <iframe src="https://drive.google.com/file/d/1XEsrwmA686INGYb-GIZeYPdHBRAEGXCD/preview" width="400" height="550"></iframe>
                            <div class="content" style="padding-bottom: 0.6em;">
                                <div class="header" style="padding-bottom: 1rem;">3. つくばみらい市×筑波大学共同研究事業</div>
                                <div class="ui two column grid">
                                    <div class="column time">
                                        <div>①15:30 ~ 15:50 (PJ-1)</div>
                                        <div>②17:10 ~ 17:30 (PJ-1)</div>
                                    </div>
                                    <div class="column labo">
                                        <div class="ui icon comment button" data-tooltip="コメントする"><i class="ui comment alternate icon"></i></div>
                                        <div class="column student-name">大澤研①</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- card-item -->
                        <div class="card" style="width:400px;">
                            <iframe src="https://drive.google.com/file/d/1srnGB057acBAy1FcbJVNRzI12XX-iI0I/preview" width="400" height="550"></iframe>
                            <div class="content" style="padding-bottom: 0.6em;">
                                <div class="header" style="padding-bottom: 1rem;">4. 潮来市×潮来高校×筑波大学　地域連携事業</div>
                                <div class="ui two column grid">
                                    <div class="column time">
                                        <div>①16:10 ~ 16:30 (PJ-2)</div>
                                        <div>②16:50 ~ 17:10 (PJ-3)</div>
                                    </div>
                                    <div class="column labo">
                                        <div class="ui icon comment button" data-tooltip="コメントする"><i class="ui comment alternate icon"></i></div>
                                        <div class="column student-name">大澤研②</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- card-item -->
                        <div class="card" style="width:400px;">
                            <iframe src="https://drive.google.com/file/d/1R3ahFUAmDdGxKazVc5sHwBHsxI3w6A4k/preview" width="400" height="550"></iframe>
                            <div class="content" style="padding-bottom: 0.6em;">
                                <div class="header" style="padding-bottom: 1rem;">5. 筑波大学と天塩町連携による<br>道北地域再生プロジェクト</div>
                                <div class="ui two column grid">
                                    <div class="column time">
                                        <div>①15:50 ~ 16:10 (PJ-1)</div>
                                        <div>②16:30 ~ 16:50 (PJ-2)</div>
                                    </div>
                                    <div class="column labo">
                                        <div class="ui icon comment button" data-tooltip="コメントする"><i class="ui comment alternate icon"></i></div>
                                        <div class="column student-name">大澤研③</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- card-item -->
                        <div class="card" style="width:400px;">
                            <iframe src= "https://drive.google.com/file/d/1mFRC1YOhMZj82rdJvBXKTHkJHjs4xdFQ/preview" width="400" height="550"></iframe>
                            <div class="content" style="padding-bottom: 0.6em;">
                                <div class="header" style="padding-bottom: 1rem;">6. 関東鉄道株式会社との連携事業</div>
                                <div class="ui two column grid">
                                    <div class="column time">
                                        <div>①15:30 ~ 15:50 (PJ-2)</div>
                                        <div>②16:50 ~ 17:10 (PJ-2)</div>
                                    </div>
                                    <div class="column labo">
                                        <div class="ui icon comment button" data-tooltip="コメントする"><i class="ui comment alternate icon"></i></div>
                                        <div class="column student-name">大澤研④</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- card-item -->
                        <div class="card" style="width:400px;">
                            <iframe src= "https://drive.google.com/file/d/1CUM7jL_oRSfrHMDVD-xUk7UnTEqp7q2D/preview" width="400" height="550"></iframe>
                            <div class="content" style="padding-bottom: 0.6em;">
                                <div class="header" style="padding-bottom: 1rem;">7. 筑波大学×鹿島アントラーズ<br>アカデミックアライアンス</div>
                                <div class="ui two column grid">
                                    <div class="column time">
                                        <div>①16:10 ~ 16:30 (PJ-1)</div>
                                        <div>②16:50 ~ 17:10 (PJ-1)</div>
                                    </div>
                                    <div class="column labo">
                                        <div class="ui icon comment button" data-tooltip="コメントする"><i class="ui comment alternate icon"></i></div>
                                        <div class="column student-name">大澤研⑤</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- card-item -->
                        <div class="card" style="width:400px;">
                            <iframe src= "https://drive.google.com/file/d/1QXIJ-dbEzA8e6byu6kreUZW4AkPhaZ5s/preview"　width="400" height="550"></iframe>
                            <div class="content" style="padding-bottom: 0.6em;">
                                <div class="header" style="padding-bottom: 1rem;">8. 観光まちづくりコンテスト</div>
                                <div class="ui two column grid">
                                    <div class="column time">
                                        <div>①15:30 ~ 15:50 (PJ-3)</div>
                                        <div>②16:10 ~ 16:40 (PJ-3)</div>
                                    </div>
                                    <div class="column labo">
                                        <div class="ui icon comment button" data-tooltip="コメントする"><i class="ui comment alternate icon"></i></div>
                                        <div class="column student-name">大澤研⑥</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- card-item -->
                        <div class="card" style="width:400px;">
                            <iframe src="https://drive.google.com/file/d/1pua_HRVMY4IX2AaRkn5MVcskO4GsBFoN/preview" width="400" height="550"></iframe>
                            <div class="content" style="padding-bottom: 0.6em;">
                                <div class="header" style="padding-bottom: 1rem;">9. レゴプロジェクト</div>
                                <div class="ui two column grid">
                                    <div class="column time">
                                        <div>①15:50 ~ 16:10 (PJ-2)</div>
                                        <div>②16:30 ~ 16:50 (PJ-3)</div>
                                    </div>
                                    <div class="column labo">
                                        <div class="ui icon comment button" data-tooltip="コメントする"><i class="ui comment alternate icon"></i></div>
                                        <div class="column student-name">大澤研×安東研</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> <!-- /card-container -->
                </div> <!-- /card-inner -->
            </div> <!-- /materials -->


            <a id="placemaking" class="anchor"></a>
            <div class="placemaking materials">
                <h2>Class</h2>
                <h3>Place Making</h3>
                <div class="ui container seg-content">
                    <div class="ui raised segment">
                        <h4 class="seg-title">講義テーマ</h4>
                        <h5 class="seg-subtitle"><span class="guest-name">With／Afterコロナのキャンパス・プレイスメイキング：感染に負けない学びと創発の場をつくる</span></h5>
                        <p style="margin: 20px; text-align: left;">新型コロナウイルス（COVID-19）の蔓延が、私達の生活に大きな影響を及ぼしている。大学ではオンライン授業を主体とし、長期に亘って入構が制限されてきた。今後は感染対策に努めながら、対面での実習を取り入れるなど、新たなキャンパス・ライフを模索していくこととなる。本講義では、必要な感染対策を前提としながら、大学生・大学院生の行動実態とニーズを踏まえ、安全かつ豊かな大学生活を実現するキャンパスの空間活用アイディアの提案を目的としたグループワークを行う。クラスターの発生を予防しつつ、学生や教職員のクリエイティビティを刺激し、生産性やモチベーションの向上につながる学びの場をいかにつくるか。大学構内の豊かな空間をフル活用し、つくばのまちづくりをも大きく変えていくような、新たなキャンパス・ライフの提案を行った。</p>
                    </div>
                </div>

                <div class="cards-container">
                    <div class="ui cards centered">
                        <!-- card-item -->
                        <div class="card" style="width:400px;">
                            <iframe src="https://drive.google.com/file/d/10rhlbJpmJdj4bupAO6jIuQXxNQDydRab/preview" width="400" height="550"></iframe>
                            <div class="content">
                                <div class="header">10. オンラインに対応した新しいキャンパス</div>
                                <div class="ui two column grid">
                                    <div class="meta eleven wide column" style="margin-top:1em">高野駿・横山司・大沼悠人<br>王瑞康・張若菁</div>
                                    <div class="five wide column" style="margin-top:1em">
                                        <div class="ui comment icon button" data-tooltip="コメントする">
                                            <i class="ui comment alternate icon"></i>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>

                        <!-- card-item -->
                        <div class="card" style="width:400px;">
                            <iframe src="https://drive.google.com/file/d/143lhUqXoWn3d2eNMCzx_Bj7lIXlZdMR1/preview" width="400" height="550"></iframe>
                            <div class="content">
                                <div class="header">11. Creative Hub Tsukuba</div>
                                <div class="ui two column grid">
                                    <div class="meta eleven wide column" style="margin-top:1em">幸坂麻琴・島滉一郎・赵天麒<br>坂内一真・山根真由子</div>
                                    <div class="five wide column" style="margin-top:1em">
                                        <div class="ui comment icon button" data-tooltip="コメントする">
                                            <i class="ui comment alternate icon"></i>
                                        </div>
                                    </div>
                                </div>
                                </div>
                        </div>

                        <!-- card-item -->
                        <div class="card" style="width:400px;">
                            <iframe src="https://drive.google.com/file/d/1YDuYGmz0PxJkdKQ-h4wwNbf5UDqTF7q4/preview" width="400" height="550"></iframe>
                            <div class="content">
                                <div class="header">12. キャンピング・キャンパス</div>
                                <div class="ui two column grid">
                                    <div class="meta eleven wide column" style="margin-top:1em">稲見一貴・翟子涵・塚越皓平<br>杨佳乐・山村悠一朗</div>
                                    <div class="five wide column" style="margin-top:1em">
                                        <div class="ui comment icon button" data-tooltip="コメントする">
                                            <i class="ui comment alternate icon"></i>
                                        </div>
                                    </div>
                                </div>
                                </div>
                        </div>

                        <!-- card-item -->
                        <div class="card" style="width:400px;">
                            <iframe src="https://drive.google.com/file/d/10tDFhDrFIi5cFnT7D6xAQjoT1swe6i7t/preview" width="400" height="550"></iframe>
                            <div class="content">
                                <div class="header">13. 学外者を内包するコワーキングスペース</div>
                                <div class="ui two column grid">
                                    <div class="meta eleven wide column" style="margin-top:1em">森田小百合・郑芯蕊・小川陽平<br>鈴木大喜・山田博也</div>
                                    <div class="five wide column" style="margin-top:1em">
                                        <div class="ui comment icon button" data-tooltip="コメントする">
                                            <i class="ui comment alternate icon"></i>
                                        </div>
                                    </div>
                                </div>
                                </div>
                        </div>

                        <!-- card-item -->
                        <div class="card" style="width:400px;">
                            <iframe src="https://drive.google.com/file/d/1p1alR_5Z3N9kaEOzd4zqvrIF2i59tvtp/preview" width="400" height="550"></iframe>
                            <div class="content" style="padding: 14px 0;">
                                <div class="header">14. 筑波大学中央図書館の空間活用-withコロナ-</div>
                                <div class="ui two column grid">
                                    <div class="meta eleven wide column" style="margin-top:1em">戸田理香子・李超群・五十嵐直輝<br>筌場悠暉・地多佑介</div>
                                    <div class="five wide column" style="margin-top:1em">
                                        <div class="ui comment icon button" data-tooltip="コメントする">
                                            <i class="ui comment alternate icon"></i>
                                        </div>
                                    </div>
                                </div>
                                </div>
                        </div>

                        <!-- card-item -->
                        <div class="card" style="width:400px;">
                            <iframe src="https://drive.google.com/file/d/1PCitKQXqMVLzsJBINts3ZikWNiYyRmVQ/preview" width="400" height="550"></iframe>
                            <div class="content">
                                <div class="header">15. 松美池改革</div>
                                <div class="ui two column grid">
                                    <div class="meta eleven wide column" style="margin-top:1em">黛朋之進・半田滉太朗・王璇<br>安田拓未・瀬川遥子</div>
                                    <div class="five wide column" style="margin-top:1em">
                                        <div class="ui comment icon button" data-tooltip="コメントする">
                                            <i class="ui comment alternate icon"></i>
                                        </div>
                                    </div>
                                </div>
                                </div>
                        </div>



                    </div> <!-- /cards -->
                </div> <!-- /card-container -->
            </div> <!-- /materials -->
            <!-- footer -->
            <?php include('../assets/footer.html'); ?>
            <div id="page_top"><a href="#"></a></div>
            <!-- jQuery -->
            <script src="../js/utils.js"></script>
            <script src="../js/presentation.js"></script>

            <!-- comment modal -->
            <?php date_default_timezone_set('Asia/Tokyo'); ?>
            <div class="ui small modal">
                <?php
                    if (('2021-02-11 00:00' < date('Y-m-d H:i')) && (date('Y-m-d H:i') < '2021-02-14 00:00')):
                    // if (true):
                ?>
                    <i class="close icon"></i>
                    <div class="header">
                        コメント入力フォーム
                    </div>
                    <div class="content">
                        <p>コメント内容は他の方から見えませんので、ご自由にお書きください。</p>
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
                                    <option value="岡田研">1. データコラボレーション解析技術</option>
                                    <option value="佐野研">2. 謝辞ネットワークから見る学術界の引用関係</option>
                                    <option value="大澤研1">3. つくばみらい市×筑波大学共同研究事業</option>
                                    <option value="大澤研2">4. 潮来市×潮来高校×筑波大学 地域連携事業</option>
                                    <option value="大澤研3">5. 筑波大学と天塩町連携による道北地域再生プロジェクト</option>
                                    <option value="大澤研4">6. 関東鉄道株式会社との連携事業</option>
                                    <option value="大澤研5">7. 筑波大学×鹿島アントラーズ アカデミックアライアンス</option>
                                    <option value="大澤研6">8. 観光まちづくりコンテスト</option>
                                    <option value="大澤研x安東研">9. レゴプロジェクト</option>
                                    <option value="1班">10. オンラインに対応した新しいキャンパス</option>
                                    <option value="2班">11. Creative Hub Tsukuba</option>
                                    <option value="3班">12. キャンピング・キャンパス</option>
                                    <option value="4班">13. 学外者を内包するコワーキングスペース</option>
                                    <option value="5班">14. 筑波大学中央図書館の空間活用-withコロナ-</option>
                                    <option value="6班">15. 松美池改革</option>
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
            </div>
        </body>
</html>