<?php





?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="col-sm-3  ms-3" style="border: 2px solid black; padding:0;"> <!--------- Start Profile Area 2nd Column--------->
        <form action="" method="POST" class="mx-3">
                  
          <div class="col-md-9 mt-5 ">
                  
          <label for="w_haircut"><input  type="checkbox" id="w_haircut" name="w_haircut" value="Haircut"> Hair Treatment</label>
          <input type="text" name="whaircut_price mb-3" id="whaircut_price" value="" style="width: 20%; margin-left:5px;">
        

          <label for="w_haircolor"><input type="checkbox" id="w_haircolor" name="w_haircolor" value="Hair color"> Nail Treatment</label>
          <input type="text" name="whair_color_price" id="whair_color_price" value="" style="width: 20%; margin-left:7px;" >
          

          <label for="w_manicure"> <input type="checkbox" id="w_manicure" name="w_manicure" value="Manicure">SkinCare Services</label>
          <input type="text" name="wmanicure_price" id="wmanicure_price" value="" style="width: 20%;margin-left:2px;">

          <label for="w_pedicure"><input type="checkbox" id="w_pedicure" name="w_pedicure" value="Pedicure">Make Up Services</label>
          <input type="text" name="wpedicure_price" id="wpedicure_price" value="" style="width: 20%;margin-left:9px; ">

          <!-- <label for="w_makeup"><input type="checkbox" id="w_makeup" name="w_makeup" value="Make Up">Make Up</label>
          <input type="text" name="wmake_up_price" id="wmake_up_price" value="" style="width: 40%; margin-left:11px;"> -->

          <button type="submit" class="btn btn-dark mt-3" name="nameupdate">Update</button>
          <?php if(isset($passmsg)){echo  $passmsg;} ?>
          <!-- </div> -->
         
        </form>
      </div>
</body>
</html>