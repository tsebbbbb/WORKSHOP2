<html>
    <head>
        <meta charset="utf-8" />
        <style>
           h1{
            color: rgb(255, 245, 212);
            font-size: 70px;
            font-family:initial;
           }
           div{
            color: rgb(255, 245, 212);
            font-size: 25px;
            background-color: rgb(157, 194, 167);
            width: 220px;
            height: 380px;
            border: 1px solid rgb(79, 115, 117);
            overflow-y: scroll;
            font-family: initial;
           }
           div:hover{
            width: 240px;
            height: 400px;
            background-color: rgb(139, 155, 201);
            box-shadow: 10px 5px rgb(237, 166, 166);
           }
           body {
             background-image:url('https://wallpaperaccess.com/full/4761498.jpg');
             background-repeat: no-repeat;
             background-size: cover;

             }
        </style>
    </head>
    <body>
        <center>
        <h1>Multiplication table {{$myinput}}</h1>
        <div class="container">
            <div class="table">
            <?php
            for ($i=1; $i <=24 ; $i++) {
               echo " $myinput  x  $i  =  ".($myinput * $i)."<br/>";
            }
            ?>
        </div>
    </div>
    </center>
    </body>
</html>
