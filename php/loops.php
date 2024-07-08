<h1>Loops</h1>

<h4>While Loop</h4>
<?php
  //WHILE LOOP
$min=0;
while($min<10){
    print $min . "<br>";
    $min++;
}
?>

<h4>Do-While loop</h4>
<?php
//DO-WHILE LOOP
$x=4;
do{
    print $x . "<br>";
    $x++;
}
while($x < 7);
?>

<h4>For loop</h4>
<?php
//for loop
  for($n=3; $n<12; $r++){
    print $n . "<br>";
  }
 ?>

<h4>For loop</h4>
<?php
//for loop
  for($r=14; $r<24; $r+-2){
    print $r . "<br>";
  }
 ?>

<h4>For-each loop</h4>
<?php
//for-each loop
$months=["Jan", "Feb", "Mar", "Apr", "May", "Jun", "July", "Aug", "Sept", "Oct", "Nov", "Dec"];
  foreach($months AS $MONTH){
    print $month . "<br>";
?>
     <select name="" id="">
      <option value=""><?php print $month; ?></option>
      <?php
  }

  ?>
  <select name=""id="">
    <?php
    //while loop
    $y=2014;
    while($y<2030){
        $y++;
    ?>
    <option value=""><?php $y; ?></option>
    <?php
}
?>
</select>
