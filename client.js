var rec = null;
// *************************************
// jQuery
// *************************************
$(function(){

    var target = $("#first_text");

    if ( typeof webkitSpeechRecognition === 'undefined' ) {
        $("#info").text("使用できません");
        $("#st_btn").prop("disabled", true);
        $("#ed_btn").prop("disabled", true);
    }
    else {
        // インスタンス作成
        rec = new webkitSpeechRecognition();
        // 初期設定
        rec.lang = "ja-JP";
        rec.interimResults = true;
        rec.continuous = true;
        // イベント登録
        rec.onerror = function(){
            console.log("error");
        };
        rec.onnomatch = function(){
            console.log("nomatch");
        };
        rec.onsoundstart = function(){
            console.log("音検知");
        };
        rec.onsoundend = function(){
            console.log("soundend");
        };
        rec.onspeechstart = function(){
            console.log("スピーチ開始");
        };
        rec.onspeechend = function(){
            console.log("スピーチ終了");
        };

        rec.onstart = function(){
            $("#result").text("開始");
        };
        rec.onend = function(){
            $("#result").text("終了");
        };
        // 結果テキストの作成
        rec.onresult = function(ev){
            var obj = ev.results;
            for (var i = ev.resultIndex; i < obj.length; i++ ) {
                if( obj[i].isFinal ) {
                    target.text(obj[i][0].transcript);
                    target = $("<div></div>");
                    $("#speech").append(target);
                }
                else {
                    target.text(obj[i][0].transcript);
                }
            }
        };	

        // ボタンイベント
        $("#st_btn").on("click",function(){
            rec.start();
            $("#st_btn").prop("disabled",true);
        })
        $("#ed_btn").on("click",function(){
            rec.stop();
            $("#st_btn").prop("disabled",false);
        })
    }


});
