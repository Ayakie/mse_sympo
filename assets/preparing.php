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
        <div class="ui small modal">
            <div class="image content">
                <div class="ui large image">
                    <img src="../img/preparing.png">
                </div>
                <div class="discription">
                    <h2 style="margin: 30px;">In progress...</h2>
                    <p>学生発表のコンテンツ公開は9日の予定です。</p>
                    <p>公開まで今しばらくお待ちください。</p>
                </div>
            </div>
            <div class="actions">
                <button type="button" onclick="history.back()" class="ui large button">戻る</button>
            </div>
        </div>
    </body>
    
</html>