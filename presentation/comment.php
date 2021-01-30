<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
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
            $(function() {
                // show dropdown on hover
                $(".ui.modal").modal('setting', 'closable', false).modal('show');
              });
        </script>

    </head>

    <body>
        <div class="ui small modal thank">
            <div class="image content">
                <div class="ui medium image"><img src="../img/thx_msg.png"></div>
                <div class="description">
                    <h2>Thank you!</h2>
                    <p>コメントありがとうございます。お返事をご希望の場合、発表者本人よりご返信差し上げます。</p>
                </div>
            </div>
            <div class="actions">
                <button type="button" onclick="history.back()" class="ui large button">戻る</button>
            </div>
        </div>
    </body>
</html>

<!-- csvファイルへの書き込み -->
<?php

date_default_timezone_set('Asia/Tokyo'); // タイムゾーン設定
$data[] = date("Y-m-d H:i"); // コメント日時
$data[] = $_POST['name'];
$data[] = $_POST['email'];
$data[] = $_POST['need-reply'];
$data[] = str_replace(array("\r\n", "\r", "\n"), "<BR>", $_POST['comment']); // 改行を"<br>"に置き換え
// mb_convert_variables('Shift_JIS', 'UTF-8', $data); //文字コードをUTF-8からShiftJISに変更
$csv = fopen('comment.csv', 'a'); //最後行に追加する形で書き込み
fputcsv($csv, $data);
fclose($csv);
