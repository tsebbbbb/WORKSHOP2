<html>
     
<head >
    <link rel="stylesheet" href = "style.css">
<body style = 'background-color :pink'>
    <meta charset="utf-8">
    <style>
        div {
            width: 300px;
            height: 580px;
            border: 1px solid black;
            overflow: scroll;
            }
        body {
             background-image:url('https://i.pinimg.com/736x/de/3c/cb/de3ccb582c2ff2764775f34d063443ba.jpg');
             background-repeat: no-repeat;
             background-size: cover;

             }
    </style>
</head>
<center>
<body>
    <?php $multi_x = 47; ?>
    <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>
    <div> 
        <?php for($i = 1; $i <= 24; $i++) {?>
            <?php echo $multi_x ?> x <?php echo $i ?> = <?php echo $multi_x*$i ?><br>
        <?php } ?>
    </div>
</body>
    </center>


</html>