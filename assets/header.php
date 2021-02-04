<!DOCTYPE html>
<!-- 部品を共通化 -->
<!-- 参考：https://nabewakashi.com/php-include -->
<div class="ui fixed inverted compact labeled icon menu">
    <div class="ui container">
        <a href="/2020/index.html" class="item" style="padding-top: 27px;">Data-driven Service Innovationによる社会課題解決を目指す</a>
        <div class="right menu">
            <a href="/2020/index.html" class="ui purple item"><i class="inverted home icon"></i>トップ</a>
            <div class="ui dropdown purple item">
                <i class="inverted file alternate icon"></i>資料リンク
                <div class="menu">
                    <a href="http://www.mi.u-tokyo.ac.jp/consortium/" class="item" target="_blank">データサイエンス・ケースバンク</a>
                    <div class="item">
                        <i class="caret left icon"></i>
                        ポスターセッション
                        <div class="menu">
                            <?php date_default_timezone_set('Asia/Tokyo')?>
                            <?php
                            if(date('Y-m-d H:i') > ('2021-02-09 00:00')):
                            // if(true):
                            ?>
                            <a href='/2020/presentation/student.php' class='item'>学生発表（M1・M2）</a>
                            <?php else:?>
                                <a href='/2020/assets/preparing.php' class='item'>学生発表（M1・M2）</a>
                            <?php endif; ?>
                            <a href="/2020/presentation/project.php" class="item">プロジェクト（Laboratory・Class）</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ui dropdown purple item"><i class="inverted graduation cap icon"></i>つくばの社工
                <div class="menu">
                    <a href="https://www.sk.tsukuba.ac.jp/College/index.php" class="item" target="_blank">社会工学類</a>
                    <a href="https://www.sk.tsukuba.ac.jp/PPS/se/" class="item" target="_blank">サービス工学学位プログラム</a>
                </div>
            </div>
        </div>
    </div>
</div>