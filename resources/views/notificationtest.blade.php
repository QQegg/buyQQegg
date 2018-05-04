<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>test</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        var test = {
            id:"text1",
            title:null,
            context:null,
            number:null,
            test: function () {
                id=document.getElementById("Store_id").value;
                title=document.getElementById("title").value;
                context=document.getElementById("content").value;
                number=document.getElementById("number").value;
                statue=document.getElementById("statue").value;
                if(statue==1){
                    test1.responseID(id,title,context,number);
                    a++;
                }
            }
        }
    </script>
    <meta http-equiv="refresh" content="5;"/>
    </head>
<body>
    @foreach ($noti as $for)
    <script>var a = 1 ;</script>
    <input id="title" name="title" value={{$for['title']}} >
    <input id="content" name="context" value={{$for['content']}} >
    <input id="statue" name="statue" value={{$for['statue']}} >
    <input id="Store_id" name="Store_id" value={{$for['Store_id']}}>
    <input id="number">
    <script>
        document.getElementById('number').value=a;
        test.test();
    </script>
    @endforeach

</body>
</html>
