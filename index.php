<?php
$json=file_get_contents("https://dweet.io/get/latest/dweet/for/sensors");
$obj=json_decode($json,true);
$temp=$obj["with"][0]["content"]["temperature"];
?>
<!DOCTYPE html>

<html >
  <head>
    <meta charset="UTF-8" http-equiv="refresh" content="1">
    <title>Progress Meter "Thermometer"</title>    
        <link rel="stylesheet" href="css/style.css">
  </head>

  <body>
        <div id="content">

        <div id="thermometer">

            <div class="track">
                <div class="goal">
                    <div class="amount">50</div>
                </div>
                <div class="progress">
                    <div class="amount"><?php echo $temp?> </div>
                </div>
            </div>

        </div>

    </div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

       <script src="js/index.js"></script>

    
    
    
  </body>
</html>
