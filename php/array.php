Arrays Code
 
<h1>Numeric Arrays</h1>
<?php
//Index Array or Number
#color=array("Black", "Green", "White", "Red",45,78,78.58);
?>

$item=[45,78,45,'Book', 'pen', 'ruler'];

<pre>
  <?php print_r($color); ?>
</pre>

<pre>
  <?php var_damp($color); ?>
</pre>
  

<h1>Associative Array</h1>

<?php
$user_emails=array(
  "Alex" => "aokom@yahoo.com",
  "peter" => "pokam@yahoo.com",
);

?>

<pre>
  <?php print_r($user_emails); ?>
</pre>

<?php print $user_email [ "peter" ]; ?>

<h1>Multi-dimensional Array</h1>

<?php 

$user_details=[
 "Director" => [
   "Fullname" => "Alex Okama",
   "Email" => "Aokama@yahoo.com",
   "Address" => "Mada",
   "Phone" => [
        "Mobile" => "+254723456778",
        "Cell" => "+254767658095",
        "Work" => "+254773980890"
    ],
  ],
  "Secretary" => [
    "Fullname" => "Susan Okama",
    "Email" => "Sokama@yahoo.com",
    "Address" => "Mada",
    "Phone" => [
         "Mobile" => "+254723456778",
         "Cell" => "+254767658095",
         "Work" => "+254773980890"
    ],

],

];
?>

<pre>
<?php print_r($user_details); ?>
</pre>

<?php print $user_details [ "Director" || "Secretary"]; ?>

<?php
  $call["fname"]="Alex";
  $call["lname"]="Okama";
  $call["email"]="Aokama@yahoo.com";

?>

<pre>
    <? print_r($call); ?>
</pre>
