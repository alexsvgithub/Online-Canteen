<?php
session_start();
if(!isset($_SESSION['user'])){
  $_SESSION['message']='not logged in <br> Please Login';

  header('Location: login.php');
}


?>

    <!DOCTYPE html>
    <html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <title>Canteen View</title>
        <link rel="stylesheet" href="style.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstr

        ap/3.4.1/js/bootstrap.min.js"></script> -->


        <script>
            // starting animation
            setTimeout(function() {
                $('#loading').fadeOut('fast');
            }, 2500); // <-- time in milliseconds
        </script>

        <!-- dropdown code here -->





    </head>

    <body>
        <div id="loading">
            <img id="loading-image" src="images/load.gif" alt="Loading..." />
        </div>
        <div class="container">
            <img src="images/logo.png" alt="" style="width:70px; margin:50px 0 0 50px">

            <input type="text" placeholder="Search" id="search" autocomplete="off" value="<?php echo $_SESSION['alex']?>" readonly>

            <div class="logout" >
                <a href="logout.php"><img src="images/logout.svg" width="25px" height="25px" style="float: left;" alt="" ><span>Logout</span></a>
            </div>


            <br>
            <br>
            <div>
                <ul class="menu leftsideMenu">
                    <li class="lo ">

                        <div target="1" class="showSingle" id="landingsite">
                            <img src="images/liveorder.svg" width="25px" height="25px" alt="" style="float: left;padding-right: 10px;"><span>Live Orders</span>
                        </div>
                    </li>
                    <li class="ac ">

                        <div target="2" class="showSingle">
                            <img src="images/addcash.svg" width="25px" height="25px" alt="" style="float: left;padding-right: 10px;"><span>Add Cash</span>
                        </div>
                    </li>
                    <li class="mcm ">

                        <div target="3" class="showSingle">
                            <img src="images/modifymenu.svg" width="25px" height="25px" alt="" style="float: left;padding-right: 10px;"> Modify Menu
                        </div>
                    </li>
                    <li class="m ">

                        <div target="4" class="showSingle">
                            <img src="images/metrics.svg" width="25px" height="25px" alt="" style="float: left;padding-right: 10px;">Metrics
                        </div>
                    </li>
                    <li class="a ">

                        <div target="5" class="showSingle">
                            <img src="images/about.svg" width="25px" height="25px" alt="" style="float: left;padding-right: 10px;">About
                        </div>
                    </li>


                </ul>
            </div>
            <h4 style="position:absolute;bottom: 0;left: 32px; font-family: 'Roboto', sans-serif;color: white;">MES &copy PCE</h4>
            <div class="main">

                <div id="div1" class="targetDiv d1 innerBox qwerty e">
                    <div class="canteen card" style="display: inline-block;">
                        <h2>Live Orders</h2>
                        <div class="innercard">
                            <img src="https://images.app.goo.gl/RupsJaAEFaVRnm2u8" width="100px" height="100px" style="border-radius: 50%; float: left; padding-right: 20px;" alt="">
                            <input type="button" value="Accept" style="float: right;" class="accept">
                            <h3 style="display: inline-block;"><b>Alex Vettithanam</b></h3><br>

                            <p style="display: inline-block;"> Kerala Porota</p>
                            <input type="button" value="Decline" style="float: right;" class="decline">

                        </div>

                        <div class="innercard">
                            <img src="https://images.app.goo.gl/RupsJaAEFaVRnm2u8" width="100px" height="100px" style="border-radius: 50%; float: left; padding-right: 20px;" alt="">
                            <input type="button" value="Accept" style="float: right;" class="accept">
                            <h3 style="display: inline-block;"><b>Aditya Nair</b></h3><br>

                            <p style="display: inline-block;"> Biryani</p>
                            <input type="button" value="Decline" style="float: right;" class="decline">
                        </div>

                        <div class="innercard">
                            <img src="https://images.app.goo.gl/RupsJaAEFaVRnm2u8" width="100px" height="100px" style="border-radius: 50%; float: left; padding-right: 20px;" alt="">
                            <input type="button" value="Accept" style="float: right;" class="accept">
                            <h3 style="display: inline-block;"><b>Siddharth Nair</b></h3><br>

                            <p style="display: inline-block;">Misal Pav</p>
                            <input type="button" value="Decline" style="float: right;" class="decline">
                        </div>

                        <div class="innercard">
                            <img src="https://images.app.goo.gl/RupsJaAEFaVRnm2u8" width="100px" height="100px" style="border-radius: 50%; float: left; padding-right: 20px;" alt="">
                            <input type="button" value="Accept" style="float: right;" class="accept">
                            <h3 style="display: inline-block;"><b>Mohanish Ghate</b></h3><br>

                            <p style="display: inline-block;">Shawarma</p>
                            <input type="button" value="Decline" style="float: right;" class="decline">
                        </div>
                    </div>
                    <div class="canteen card" style="display: inline-block;">
                        <h2>Call Out</h2>
                        <div class="innercard">
                            <img src="https://images.app.goo.gl/RupsJaAEFaVRnm2u8" width="100px" height="100px" style="border-radius: 50%; float: left; padding-right: 20px;" alt="">

                            <h3 style="display: inline-block;"><b>Alex Vettithanam</b></h3><br>

                            <p style="display: inline-block;"> Kerala Porota</p>
                            <input type="button" value="Call Out" style="float: right;" class="button">
                        </div>

                        <div class="innercard">
                            <img src="https://images.app.goo.gl/RupsJaAEFaVRnm2u8" width="100px" height="100px" style="border-radius: 50%; float: left; padding-right: 20px;" alt="">

                            <h3 style="display: inline-block;"><b>Aditya Nair</b></h3><br>

                            <p style="display: inline-block;">Biryani</p>
                            <input type="button" value="Call Out" style="float: right;" class="button">
                        </div>

                        <div class="innercard">
                            <img src="https://images.app.goo.gl/RupsJaAEFaVRnm2u8" width="100px" height="100px" style="border-radius: 50%; float: left; padding-right: 20px;" alt="">

                            <h3 style="display: inline-block;"><b>Siddharth Nair</b></h3><br>

                            <p style="display: inline-block;">Misal Pav</p>
                            <input type="button" value="Call Out" style="float: right;" class="button">
                        </div>

                        <div class="innercard">
                            <img src="https://images.app.goo.gl/RupsJaAEFaVRnm2u8" width="100px" height="100px" style="border-radius: 50%; float: left; padding-right: 20px;" alt="">

                            <h3 style="display: inline-block;"><b>Mohanish Ghate</b></h3><br>

                            <p style="display: inline-block;">Shawarma</p>
                            <input type="button" value="Call Out" style="float: right;" class="button">
                        </div>
                    </div>






                </div>

                <div id="div2" class="targetDiv d2 innerBox qwerty">
                    <div class="Deposite card">
                        <h1>Deposite Money to User Account</h1>
                       <form action="index.html">
                        <fieldset>
                            <legend>Add Virtual Money</legend>
                            <label for="adno" class="lbl">Admission No</label>
                            <input type="text" id="adno" placeholder="Enter Admission No here" required pattern="[a-zA-Z1-9]+"><br><br>
                            <label for="amt" class="lbl">Select Amount</label>
                            <input type="text" id="amt" placeholder="Enter Money to Deposite" required pattern="[1-9]+"><br><br>
                            <button class="button" style="vertical-align:middle"><span>Submit </span></button>
                        </fieldset>
                           </form>
                    </div>
                </div>

                <div id="div3" class="targetDiv d3 innerBox qwerty">


                  <form class="" action="send.php" method="post">
                    <h1 style="color:#009688;">Modify Canteen Menu</h1>
                    <fieldset>
                        <legend>Modify Menu</legend>

                        <span>Product Name</span><input list="browsers" id="fn" name="fname" placeholder="Enter the food item" onkeyup="snameret()"><br>
                          <datalist id="browsers">
                              <?php
                                    require_once 'stu.php';
                                    foreach ($data as $dat) {
                                          echo "<option id='".$dat['id']."' value='".$dat['name']."'>".$dat['name']."</option>";
                                          }
                                ?>
                          </datalist>
                        <span>Enter Group Id</span><input type="text" id="gid" name="gid" placeholder="Enter Group Id" required><br>
                        <span>Postion Id</span><input type="text" id="pos" name="pos" placeholder="position" required><br>
                        <span>Enter Price</span><input type="text" id="price" name="price" placeholder="price" required><br>
                        <span>Select Image</span><input type="file" id="image" name="image" name="filename" accept="image/gif, image/jpeg, image/png" required><br>


                        <button class="button" name="submit" style="vertical-align:middle" onclick="return formValidation();"><span>Submit </span></button>
                    </fieldset>
                  </form>


                </div>

                <div id="div4" class="targetDiv d4 innerBox main">
                    dflldskfjd
                </div>

                <div id="div5" class="targetDiv d5 innerBox main">
                    fjsdkfjsdl


                </div>
            </div>
        </div>

<script type="text/javascript">
  function snameret(){
          let fname = $("#fn").val();
          console.log(fname);
          $.ajax({
                    type:"POST",
                    url:"stu.php",
                    data: 'fname='+fname
                }).done(function(books){
                        // console.log(books);
                        books = JSON.parse(books);
                        console.log(books[0].length);
                        var x=books[0];
                        var y=books[1];
                        var z=books[2];
                        var a=books[3];
                        var b=books[4];
                        var c=books[5];


                        console.log("test 1 = "+x);
                        console.log("test 2 = "+y);
                        console.log("test 3 = "+z);
                        console.log("test 4 = "+a);
                        console.log("test 5 = "+b);
                        console.log("test 6 = "+c);
                        if(books[0].length==1){
                          // item,gid,pos,price,image
                          // $('#fn').val(y);
                          $('#gid').val(b);
                          $('#pos').val(c);
                          $('#price').val(z);
                          $('#image').val(a);

                        }
                        if(books[0].length>1){
                          // item,gid,pos,price,image
                          // $('#fn').val(y);
                          $('#gid').val("");
                          $('#pos').val("");
                          $('#price').val("");
                          $('#image').val("");

                        }
              });


      }
</script>
        <script src="index.js" charset="utf-8"></script>
        <script src="app.js" charset="utf-8"></script>
    </body>

    </html>
