<?php 

    include(__DIR__ . "/langs.php");
    $lang_rtl = array('ar', 'ur', 'pk');

?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<style>
    .h3{
        direction: <?php if(in_array($get_lang, $lang_rtl)){echo 'rtl';}else{echo 'ltr';} ?>;
        text-align: <?php if(in_array($get_lang, $lang_rtl)){echo 'right';}else{echo 'left';} ?>;;
    }
</style>

<body>
    
    <div class="container">

        <div class="img-box" text-center>
            <img src="lg.png">
        </div>
        
        <h3 class="h3">
            <?php echo $get1; ?>
        </h3>
        <form action="done.php">
            
            <div class="form-group">
              <label for="inputAddress">Full name  : </label>
              <input type="text" class="form-control" id="inputAddress" required="required">
            </div>

            <div class="form-group">
                <label for="inputAddress">Mobile number  : </label>
                <input type="number" class="form-control" id="inputAddress" required="required">
              </div>

            <div class="form-group">
              <label for="inputAddress2">City : </label>
              <input type="text" class="form-control" id="inputAddress2" required="required">
            </div>

            <div class="form-group">
                <label for="inputAddress2">Street : </label>
                <input type="text" class="form-control" id="inputAddress2" required="required">
            </div>
            <div class="form-group">
                <label for="inputAddress2">Gender : </label>
                <select class="form-control">
                    <option>Male</option>
                    <option>Female</option>
                </select>
            </div>

            <!-- <a class="btn btn-primary" href="next.html">ارسال</a> -->
            <button class="btn btn-primary mb-4">SUBMIT</button>

          </form>
    </div>

    <script src="jq.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
