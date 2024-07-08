
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <?php
    
    echo '<header>';
    echo '<img src="C:\xampp1\htdocs\test1\images\flower image.jpeg" alt="Icon" class="icon-placeholder">';
    echo '<h1>Romance Al Fresco</h1>';
    echo '<nav>';
    echo '<ul style="text-align: right;">';
    echo '<a href="booking.php">BOOKINGS </a>';
    echo '<a href="about.php">ABOUT US </a>';
    echo '<a href="contact.php">CONTACTS </a>';
    echo '</ul>';
    echo '</nav>';
    echo '</header>'; 
    echo '<main>';

    echo '<section id="">';
    echo '<h2></h2>';
    echo '<a href=""></a>';
    echo '</section>';

    
    echo '</main>';
    // Footer content
   $year = date("Y");
   $footer = "<footer><p>&copy $year RomanceAlFresco. All Rights Reserved.</p></footer>";
   
   // Output footer
   print($footer);  
   ?>
</body> 
</html>
