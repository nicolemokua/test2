
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/about.css">
</head>
<style>
    body{
        background-color: darksalmon;
    }
</style>
<body>
    <?php 
    // Header content
    echo '<header>';
    echo '<h1>Romance Al Fresco</h1>';
    echo '<nav>';
    echo '<ul>';
    echo '<a href="home.php">HOME </a>';
    echo '<a href="booking.php">Bookings </a>';
    echo '<a href="contact.php">Contact Us </a>';
    echo '<a href="pricing.php">Pricing</a>';
    echo '</ul>';
    echo '</nav>';
    echo '</header>';

    // Main content
    echo '<main>';
    
    // About us section
    echo '<section id="about-us">';
    echo '<h2>Welcome to Romance Al Fresco - </h2>';
    echo '<p>Welcome to "Romance Al Fresco," your go-to resource for crafting enchanting picnic dates in the great outdoors.
     Our website offers everything you need to create magical, memorable experiences, from romantic picnic ideas to practical 
     planning tips. Explore our selection of thoughtfully designed picnic packages, perfect for any occasion—from cozy couples
      getaways to celebratory gatherings with friends and family.';
    echo '<br>';
    echo 'Our expert advice ensures every detail, from gourmet menus to picturesque locations, is covered, making your picnic date effortlessly perfect. Let "Romance Al Fresco" inspire your
        next outdoor adventure, where love and nature beautifully intertwine to create unforgettable moments.</p>';
    echo '</section>';

    // Our values section
    echo '<section id="our-values">';
    echo '<h2>Our Core Values</h2>';
    echo '<ul>';
    echo '<li>Expertise: We possess in-depth knowledge of quality picnic and dates experiences.</li>';
    echo '<li>Personalization: We tailor each picnic ir date to your unique needs and desires.</li>';
    echo '<li>Customer Satisfaction: Your satisfaction is our top priority.</li>';
    echo '<li>Integrity: We operate with honesty and transparency.</li>';
    echo '<li>Sustainability: We promote responsible travel practices.</li>';
    echo '</ul>';
    echo '</section>';

   // Close main content
   echo '</main>';

   // Footer content
   $year = date("Y");
   $footer = "<footer><p>&copy $year RomanceAlFresco. All Rights Reserved.</p></footer>";
   
   // Output footer
   print($footer);
   
  ?>
</body>
</html>
