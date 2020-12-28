<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> This is the title</title>
    <style>
        h1{
            background-color:#f4645f;
            color: #fff;
            padding: 1em;
            test-align: center;
         }
    </style>
</head>
<body>

    <h1 id="h1">Hello, PHP!</h1>
    <p>This is a paragraph</p>
    <p><?php echo "this is php content"; ?></p>
<script>
    var h1Element = document.getElementById("h1")
    h1Element.onclick = function(){
        alert("this is a javascript alert!");
    }
</script>
</body
</html>
