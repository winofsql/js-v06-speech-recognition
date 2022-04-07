<!DOCTYPE html>
<html>
<head>
<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
<meta charset="utf-8">
<title>音声認識</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/encoding-japanese/2.0.0/encoding.min.js"></script>

<script src="client.js?_=<?= time() ?>"></script>

<style>
#result {
    font-size: 18px;
    font-weight: bold;
}

#speech {
    font-size: 24px;
}

/* PC */
@media screen and ( min-width:480px ) {
    #content {
        margin: 26px;
    }
    #text {
        width: 480px;
        height: 360px
    }
}
/* スマホ */
@media screen and ( max-width:479px ) {
    #content {
        padding: 0px;
    }
    .btn {
        width: 100%;
    }
    #text {
        width: 100%;
        height: 400px
    }
}
</style>

</head>
<body>
<h3 class="alert alert-primary"><a href="control.php">音声認識</a></h3>
<div id="content">
    <div>
        <input type="button" class="btn btn-secondary me-4" value="開始" id="st_btn">
        <input type="button" class="btn btn-secondary me-4" value="終了" id="ed_btn">
        <a href="." class="btn btn-secondary">フォルダ</a>
    </div>

    <div id="result" class="m-4 btn btn-info">　　</div>

    <div id="speech" class="ms-4">
        <div id="first_text"></div>
    </div>
</div>
</body>
</html>
