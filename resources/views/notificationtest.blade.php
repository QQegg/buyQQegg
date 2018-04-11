<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>test</title>
    <?php
        foreach ($noti as $for)
            dd($for);
            array_push($info['title'],$for['title']);
            array_push($info['content'],$for['content']);
    ?>
    <script type="text/javascript">
        function test(){
            var title="<?php echo $for['title']; ?>";
            var content="<?php echo $info['content']; ?>";
            title.count();
            client.responseID(title.count());
            client.responseTitle(title);
            client.responssContent(content);
            //client 改為beaconid
            //連接controller找尋beaconID
            //回傳相應的 通知數 通知標題 通知內容
        }
    </script>
</head>
<body>
<script> //timer countdown
    // 標準時間
    var countDownDate = new Date().getTime();
    // Update the count down every 1 second
    var x = setInterval(function() {
        // 比較時間
        var now = new Date().getTime();
        // 時間比較
        var distance = now - countDownDate;
        // 如果有超過固定時間 進行推播更新
        if (distance > 100) {
            test();
            countDownDate = new Date().getTime()
        }
    },1000);
</script>
<br/>
</body>
</html>
