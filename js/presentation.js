$(document)
    .ready(function() {
    // タグ絞り込み
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

        // モーダル(コメントフォーム)
        $('.ui.modal').modal('setting', 'detachable', false)
        $('.comment.icon.button').click(function() {
            $('.ui.modal')
            .modal('setting', 'closable', false)
            .modal('show');
        });

        // Form vaidation
        $('.ui.form').form({
            fields: {
                name: {
                    identifier: 'name',
                    rules: [{
                        type: 'empty',
                        prompt: 'お名前は必須項目です'
                    }]
                },
                email: {
                    identifier: 'email',
                    optional: true,
                    rules: [{
                        type: 'email',
                        prompt: '有効なアドレスをご記入ください'
                    }]
                },
                slideNumber: {
                    identifier: 'slideNumber',
                    rules: [{
                        type: 'empty',
                        prompt: 'コメントするスライド番号を選択してください'
                    }]
                },
                comment: {
                    identifier: 'comment',
                    rules: [
                        {type: 'minLength[10]',
                        prompt: '10文字以上でお書きください'},
                        {type: 'regExp[/[^A-Za-z0-9]/]',
                        prompt: '半角文字のみは禁止です'}
                    ]
                }
            }
        })
    });