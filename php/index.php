<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-type" content="width=device-width" 
        initial-scale="1.0" charset="UTF-8" name="viewport">
        <title>Romance Al Fresco</title>
        <link rel="stylesheet" href="css/style.css">
        

    </head>
    <body>
      <?php include_once("php/nav.php");?>
      <div class="banner">
        <h1>Romance Al Fresco</h1>
      </div>
      <div class="content">
        
        <p>Let Us inspire your next outdoor adventure, 
          where love and nature beautifully intertwine to create 
          unforgettable moments.</p>

      </div>




     
    </body>
    
        <!-- .main_box{
          border: 1px;
          background-color: bisque /in content box  rgb(107,11,167);
          width:100%;
          /*padding:20px 15px; */
                   
          border:10px dashed brown / 1px solid rgb(10, 56,20);
          border radius:10px;
          / in content box margin 3px;
          
           
          .content_box

          contents in contact us
          name,phone,email,address;

          input[type=text](
            padding: 12px 20px;
            width 70;
            border:2px solid color
            border-radius:4px;
            font size: 1.6em;
            box-sizing: border-box;
            margin:8px 0;

            .contact_us label(
              font-size:1.8em;
            )

          )

      
        }  -->

        <?php
    
    echo '<img src="" alt="Icon" class="icon-placeholder">';
    echo '<div class="container">';
    echo '<nav class="menu">';
    echo '<h1>Romance Al Fresco</h1>';
    echo '<ul>';
    echo '<li class="dropdown">';
    echo '<button class="dropbtn">MENU</button>';
    echo '<div class="dropdown-content">';
    echo '<a href="pricing.php">PRICING</a>';
    echo '<a href="booking.php">BOOKING</a>';
    echo '<a href="about.php">ABOUT US</a>';
    echo '<a href="contact.php">CONTACT US</a>';
    echo '</div>';
    echo '</li>';
    echo '</ul>';
    echo '</nav>';

    echo '<div class="slideshow">';
      echo '<img src="C:\xampp1\htdocs\test1\images\pic.9.jpeg" alt="In-doors" class="slide" >';
      echo '<img src="C:\xampp1\htdocs\test1\images\pic.2.jpeg" alt="Beachfront" class="slide">';
      echo '<img src="C:\xampp1\htdocs\test1\images\pic 7.jpeg" alt="Riverside" class="slide">';
      echo '<img src="C:\xampp1\htdocs\test1\images\pic 10.jpeg" alt="Outdoor " class="slide">';
      echo '</div>';
      // Footer content
      $year = date("Y");
      $footer = "<footer><p>&copy $year RomanceAlFresco. All Rights Reserved.</p></footer>";
      
      // Output footer
      print($footer);
      ?>
   

         


  
</html>