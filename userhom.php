<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Evergreen Caterers</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
<?php

    session_start();
    include './dbcon.php';
    if(isset($_POST['addtocart']))
    {

      $a=$_POST["rq"];
      //echo "<script> alert('hai');</script>";
      $b=$_POST["rr"];
      $c=$_POST["nm"];

      $k=$_SESSION['login_id'];
      echo $k;
      $sql="INSERT INTO `foodorder`(`login_id`,`name`, `req_quantity`,`total`) VALUES ('$k','$c','$a','$b')";
      $sql3="UPDATE `fooditems` SET `food_quantity`=`food_quantity`-'$a'";
      $result=mysqli_query($con,$sql);
      $result1=mysqli_query($con,$sql3);
      echo"<script>alert('Added To Cart');</script>";

      }
      if(isset($_POST['submit']))
      {
        $pay=$_POST["pay"];
        //echo "<script> alert('hai');</script>";
        if($pay=='opay')
        {
        header('location:offpay.php');
        }
        if($pay=='epay')
        {
        header('location:onpay.php');
        }
      }
?>
<style>
fieldset {
  background-color: #FFFACD;
  color: #CD5C5C;
}
legend {
  padding: 2px;
  border: 1px solid green;
}
</style>
    <head>

    </head>
    <body>

        <div class="gl_userhome_container" name="gl_userhome_container">
        <?php

            if(isset($_GET['f_item_id'])){

                        $id=$_REQUEST['f_item_id'];
                      //  echo $id;
                        $sql1=mysqli_query($con,"SELECT * FROM `fooditems` WHERE f_item_id='$id'  order by food_name;");
                            $records1=mysqli_fetch_array($sql1)
        ?>
        <fieldset>
          <table>
          <tr>
              <td colspan="2" align="center">
              <img src="<?php echo "{$records1['food_image']}"; ?>" alt='' width="380" height="220" /></td>
          </tr>
          <table>
        </fieldset>
        <fieldset>
          <legend>Food Ordering</legend>
                <div class="gl_item_container">
                  <form name="myform" action="#" method="POST" id="form" enctype="multipart/form-data">

                    <table cellpadding="8px" style="font-size:20px;" align="left">
                      <tr>
                      <td>Name:</td>
                      <td><input type="text" name="nm" id="nm" value="<?php echo "{$records1['food_name']}"; ?>" readonly></td>
                      </tr>
                                <tr>
                                <td>Availability:</td>
                                <td><input type="text" name="ql" id="ql" value="<?php echo "{$records1['food_quantity']}"; ?>" readonly></td>
                                </tr>
                                <tr>
                  							<td>Required quantiy:</td>
                  							<td><input type="number" name="rq" id="rq" placeholder="required quantity" min="1" max="<?php echo "{$records1['food_quantity']}"; ?>" Required value="1"></td>
                  							</tr>
                                <tr>
                                <td>Price:</td>
                                <td><input type="text" name="price" id="price" value=" <?php echo "{$records1['food_rate']}"; ?>" readonly></td>
                                </tr>
                                <tr>
                  							<td>Total Cost:</td>
                  							<td><input type="text" name="rr" id="rr" Required readonly></td></td>
                  							</tr>
                                <tr>

                                  <tr>
                  							<td><input type="submit" class="btn btn-imfo btn-read-more" name="addtocart" value="Add To Cart"</a></td>
                  							<td><a href="listfood.php"><input type="button" class="btn btn-imfo btn-read-more" name="Add More Items" value="Add More Items"</a></td>
                  							</tr>

                    </table>

                  </fieldset>

                  <fieldset>
                    <legend>Payment Methods</legend>
                    <table>
                    <tr>
                    <td>PAYMENT</td>

                    <td><input type="radio" name="pay" id="epay" value="epay">Online Payment<br>
                    <input type="radio" name="pay" id="opay" value="opay" >Ofline Payment</td>
                    </tr>
                    <tr>

                    <td>PROCEED TO TRANSACTION:</td>
                    <td><input type="submit" class="btn btn-imfo btn-read-more" name="submit" id="submit" ></td></td>
                    </tr>
                  </table>
                  </fieldset>

                    <hr/>
                  </form>
                </div>


        <?php
                        }

        ?>
        </div>
    </body>
    <script src="js/jquery.js"></script>
    <script>
    $(document).ready(function(){
      $("#rq").on("change",function() {
        $index=$('#rq').val();
        $price=$('#price').val();
        $total=$index*$price;
        $("#rr").val($total);
      })
    })
    </script>
</html>
