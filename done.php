<?php 

    include(__DIR__ . "/langs.php");

    $lang_rtl = array('ar', 'ur', 'pk');

?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<style>
    .shareit,
    .shareitLink{
        direction: <?php if(in_array($get_lang, $lang_rtl)){echo 'rtl';}else{echo 'ltr';} ?>;
        text-align: <?php if(in_array($get_lang, $lang_rtl)){echo 'right';}else{echo 'left';} ?>;;
    }
</style>

<body>
    
    <div class="container">

        <div class="img-box" text-center>
            <img src="lg.png">
        </div>
        <h3 class="text-center h1-done">Successfully Registered</h3>
        <h4 class="text-center" style="color: #c8135c;">in The Lucky Draw</h4>
        <br>
        <h5 class="text-center">Please wait the draw results</h5>
        <div class="done-img text-center">
            <img src="done.png" alt="">
        </div>
        <br>
        <br>
        <p class="shareit"><?php echo $get2; ?></p>

            <div class="form-group">
                <textarea id="my-text" class="form-control shareitLink" id="exampleFormControlTextarea1" rows="1">https://bit.ly/3qAHGyC</textarea>

    </div>

    <script src="jq.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
