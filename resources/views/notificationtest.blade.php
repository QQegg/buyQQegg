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
                id="text1"
                title=document.getElementById("title").value;
                context=document.getElementById("content").value;
                number=document.getElementById("number").value;
                test1.responseID(id,title,context,number);
            }
        }
    </script>
    </head>
<body>
    @foreach ($noti as $for)
    <script>var a = 1 ;</script>
    <input id="id" name="title">
        <input id="title" name="title" value={{$for['title']}} >
        <input id="content" name="context" value={{$for['content']}} >
        <input id="number">
        <script>
            document.getElementById('number').value=a;
            a++;
            test.test();
        </script>
    @endforeach
</body>
</html>
