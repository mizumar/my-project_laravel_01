<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello/Index</title>
    <style>
        body {
            font-size: 16pt;
            color: #999;
        }

        h1 {
            font-size: 100pt;
            text-align: right;
            color: #eee;
            margin: -40px 0px -50px 0px;
        }
    </style>
</head>

<body>
    <h1>Index2</h1>
    <p><?php echo $msg; ?></p>
    <!-- リスト3-10 -->
    <p><b>リスト3-10</b> ID = <?php echo $id ?></p>
    <p>http://127.0.0.1:8001/hello?id=?????</p>
    <p><?php echo date("Y年n月j日"); ?></p>
</body>

</html>