<!DOCTYPE HTML>
<html>

<head>
    <title>David Hotel</title>
    <link rel="icon" href="davidhotel.png"/>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylesheet.css">

    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="jQuery.js"></script>
    <script src="JavaScript.js"></script>

    <script>
            $(document).ready(function(){
                $('select').formSelect();
            });
    </script>
             

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>

<body>
    <div class="header">
        <h1 style="text-align:center; color: goldenrod; font-family:Montserrat; font-size:350%; margin-top: 20px;"> </a>
        David Group of Hotels</h1>
        <a href="Home.html"><img class="img1" ; src="davidhotel.png"></a>
    </div>

    <div class="topnavbtn ">
        <a class="active" href="index.html">Home</a>
        <a href="https://www.google.com/maps/place/The+Royal+Multicuisine+Restaurant/@18.5995939,73.9126592,15z/data=!4m5!3m4!1s0x0:0x504f9323ffde80d2!8m2!3d18.599596!4d73.9084464">Locate Us</a>
        <a href="#foot" >About</a>
    </div>
    <br>
    <br>


    <div>
        <h2 style="text-align: center; color: goldenrod; font-family: Montserrat; font-size: 200%;"><b>Welcome to David Hotels!</b></h2>
        <h3 style="text-align: center; color: goldenrod; font-family: Montserrat; font-size: 150%; padding-top: 15px;">Please select a Dish of your Choice: </h3>
    </div>


<div class="gridlay">
    <div id="side" class="sidebar" style="margin-top: 50px; font-family: Montserrat;">
        Our Signature Dishes
        <br>
        <br>
        <figure>
            <img src="dish1.png">
            <figcaption>Spring Roll</figcaption>
        </figure>
        <br>
        <figure>
            <img src="dish2.jpg">
            <figcaption>Fried Silky Tofu with Special Garlic Sauce</figcaption>
        </figure>
        <br>
        <figure>
            <img src="dish3.png">
            <figcaption>Pecking Duck</figcaption>
        </figure>
    </div>


    <div>
    <div class="container">
        <select name="item restaurant-dropdown restaurant" class="custom-select custom-select-lg mb-3" id="resto">
          <option disabled>Select Item</option>
        </select>
                            
        <br>

        <div id="ch"></div>
  </div>
</div>
</div>


    <footer id="foot">
        <p style="font-family: Verdana;">Project by: Ayush Kumar<br><br>
        <a href="https://www.gmail.com" style="color: red">ansingh@mitaoe.ac.in</a></p>
        <p>Ayush Kumar | 2020 | © DavidHotel </p>
    </footer>


</body>
</html>