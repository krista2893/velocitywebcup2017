<!DOCTYPE html>
<html lang="en">
<head>
      <title>Velocity | Survey</title>

    <!-- meta data -->
    <meta charset="utf-8">
    <meta name="description" content="Webcup Team Velocity">
    <meta name="keywords" content="Velocity, Webcup, 2017">
    <meta name="author" content="TeamVelocity">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end meta data -->

    <!-- CSS libraries -->
    <link rel="stylesheet" href="assets/_css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/_css/toastr.min.css" />
    <link rel="stylesheet" href="assets/_css/bootstrap-datepicker3.css" />
    <link rel="stylesheet" href="assets/_css/bootstrap-multiselect.css" />
    <link rel="stylesheet" href="assets/_css/velocity.css" />
    <link rel="stylesheet" href="assets/_css/font-awesome.css" />
    

    <!-- JS lib -->
    <script src="assets/_js/jquery.min.js"></script>
    <script src="assets/_js/bootstrap.min.js"></script>
    <script src="assets/_js/toastr.min.js"></script>
    <script src="assets/_js/bootstrap-multiselect.js"></script>
    <script src="assets/_js/bootstrap-datepicker.js"></script>
    
    <link href="https://fonts.googleapis.com/css?family=Dosis|Josefin+Sans:300|Open+Sans+Condensed:300" rel="stylesheet">

    <link rel='shortcut icon' href='fav.png' type='image/x-icon'/ >

    <style>

        body, html 
        {
            height: 100%;
            margin: 0;
        }

        .bg1        
        {
            background-image: url("assets/_images/roman_bg.jpg");
            position: relative;         
            height: 100%;           
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        * {
        font-family: Arial, "Free Sans";
    }
   
   * {
        font-family: Arial, "Free Sans";
    }
    #container {
        color: #fff;
  background:#000;
    }
    #container #question {
        display: block;
        padding: 20px;
        font-weight: bold;
        letter-spacing: -3px;
        margin-bottom: 20px;
        padding: 10px;
        font-size: 40px;
    }
    #container div {
        font-weight: bold;
        letter-spacing: -3px;
        background: #0099cc;
        margin-bottom: 15px;
        padding: 10px;
        font-size: 34px;
        color: #ffffff;
        border-left: 20px solid #333;
        width: 400px;
        -webkit-border-radius: 0.5em;
        -moz-border-radius: 0 0.5em 0.5em 0;
        border-radius: 0 1.5em 1.5em 0;
    }
    #container div a {
        border-radius: 0.3em;
        text-decoration: none;
        color: #0099cc;
        padding: 5px 15px;
        background: #333;
        margin: 0 20px;
    }
    #container div a:hover {
        color: #fff;
    }
    body {
        margin: 0;
        padding: 0;
    }

        
    </style>

</head>
<body>

   <div class="bg1">

        <div class="caption_home">
            <span class="border">Take our poll :)
               
            </span><br>

    
        </div>

        <div id="myNav" class="overlay">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                
           <div class="overlay-content">
                <a href="index.php">Home</a>
                <a href="about.php">About</a>
                <a href="activities.php">Activities</a>            
            </div>

        </div>

        <br />
    
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&nbsp;&nbsp;<i class="fa fa-bars" aria-hidden="true"></i></span>

    </div>

    <!-- content -->
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5 col-md-offset-1">
                <div class="form-group">
                    <label for="usr">Your proposed attraction:</label>
                    <input type="text" class="form-control" id="txtAttName">
                </div>
            </div>

            <div class="col-md-2">
                <br />
                <button class="btn btn-default fa" onclick="add_attraction();"><i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i></button>

            </div>
        </div>

        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <?php

    include("conn.php");
    
    $sql = "SELECT * FROM tbl_poll";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) 
    {
        $i = 0;
        // output data of each row
        echo '<div id="container">';
        while($row = $result->fetch_assoc()) 
        {
            $i++;
            $id = $row["id"];
            
            echo '
                <div><span>0</span><a href="">Vote</a>' .$row["attract_name"] . '</div>
               

            ';
        }
        echo '</div>';
    } 
    else {
        echo "0 results";
    }





?>


    
    


        
                <!--<div id="load_tweets"></div>-->
            </div>
        </div>
    </div>

    



    <footer>
        <br /><br />
        <div class="row">
            <div class="col-md-5">

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59467.68529789404!2d-157.8429341432484!3d21.321669425019323!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c006cffad967ba3%3A0x872b278296f1981d!2zTcSBbm9hLCBIb25vbHVsdSwgSEksIFVTQQ!5e0!3m2!1sen!2smu!4v1495297995181" width="400" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>


            <div class="col-md-4">
                <div class="main_page_title">Follow Us</div>

                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <i class="fa fa-facebook fa-2x" aria-hidden="true"></i>
                        <i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
                        <i class="fa fa-google-plus fa-2x" aria-hidden="true"></i>
                        <i class="fa fa-pinterest-p fa-2x" aria-hidden="true"></i>
                        <i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
                    </div>
                </div>
                <br /><br />
                <div class="row">
                    <div class="col-md-12">
                        <img class="img-rounded" src="assets/_images/visa.png" alt="Visa" style="width: 70px; height: 40px;">
                        <img class="img-rounded" src="assets/_images/mastercard.png" alt="master" style="width: 70px; height: 40px;">
                        <img class="img-rounded" src="assets/_images/maestro.png" alt="maestro" style="width: 70px; height: 40px;">
                        <img class="img-rounded" src="assets/_images/amex.png" alt="amex" style="width: 70px; height: 40px;">
                        
                    </div>
                </div>


            </div>

            <div class="col-md-3">

                <img src="assets/_images/logo.jpg" style="width: 200px; height: 200px;" class="img-responsive" />
            </div>



        </div>

        Copyright &copy; 2017 Velocity Webcup. All rights reserved.

    </footer>

    <script>
        function add_attraction()
        {
            var attraction_name = $("#txtAttName").val();
            //alert(attraction_name);
            $.ajax({
                type:'POST',
                data:{attraction_name: attraction_name},
                url:'fn/add_attraction.php',
                success:function(data){                    
                   window.location.reload();
                    
                }
            }); 
        }
    </script>
  
    <script>
       /* $(document).ready(function(){
            
            setInterval(function(){            
                $('#load_tweets').load('fetch_attraction.php').fadeIn("slow");
            }, 8000);
            
        });*/
    </script>
    
    <script>

       $(document).ready(function() {
    $("#container div a").click(function() {
        toastr.success("Vote successfully recorded.");
        $(this).parent().animate({
           width: '+=100px'
        }, 500);

        $(this).prev().html(parseInt($(this).prev().html()) + 1);
        return false;
    });
});

    </script>

    <script src="assets/_js/velocity.js"></script>
</body>
</html>


