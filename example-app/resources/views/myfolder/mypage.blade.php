<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
     body {
             background-image:url('https://wallpaperaccess.com/full/6843267.jpg');
             background-repeat: no-repeat;
             background-size: cover;
        }


        h1{
            color: rgb(66, 91, 140);
            font-size: 100px;
            font-family:unset;
        }

</style>

<body>
    <div align="center">
    <h1>Multiplication table</h1>
    <form method="post" action="/my-route">
        @csrf
        <input type="text" name="myinput" style="width:250px; height:120; font-size:20px;">
        <button type="submit"style="width:80px; height:40; font-size:14px;">Submit</button>
    </form>
    </div>
</body>

</html>
