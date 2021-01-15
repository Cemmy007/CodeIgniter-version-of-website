<div><h1>Advent Calender generator</h1></div>
<div><h3>Honestly don't know why I made this</h3></div>




<?php echo form_open('users/returnHome'); ?>

<?php
$data = array(
     
     'class' => 'btn-btn primary',
     'name' => 'returnHome',
     'value' => 'ET phone home'

);

?>
<?php echo form_submit($data); ?>
<?php echo form_close(); ?>
<p></p>
<a href="<?php echo base_url();?>users/adventCalender">Randomise<span class="sr-only">(current)</span></a>
<p></p>
<?php


$chocolate = array("Smarties","Mars Bar","Milky Way bar","Snickers","Kinder Bueno","Kinder Bueno white","Twix","Maltesers","Flake","Crunchie","Galaxy","Kit Kat","Kit Kat Chuncky", "Double Decker","Ripple Bar", "Caramel","Aero Orange","Haribo Star Mix", "Haribo SuperMix","Strawberry pencils","Fruit Pastilles","DrumStick Squishies","Minstrels","Skittles","Starburst");




$chocNum = count($chocolate);
$date = 1;

//echo " Array count is " . $chocNum . "  <br>";

/*do  {
	$num = rand(0,$chocNum);
    echo $num;
    echo($chocolate[$num]);
    unset($chocolate[$num]);  //Attempt one
    array_shift($chocolate);
	$chocNum=-1;

	echo count($chocolate);
	echo "<br>";

} while ( $chocNum > 1); */

/*
while ($chocNum > 1) {
	
$num = rand(0,$chocNum);

echo "Randon number is ". $num. " <br>";

print_r($chocolate);

echo "<br>".($chocolate[$num])."<br>";

unset($chocolate[$num]);

array_values($chocolate);                    //This is the testing version of attempt 2

sort($chocolate);

print_r($chocolate);

echo "<br>".($chocolate[$num])."<br>";

$chocNum= $chocNum-1;

echo "Choc number is now ". $chocNum. " <br>";

} */

while ($chocNum > 1) {
	
$num = rand(0,($chocNum - 1));

echo "<br>".$date.". ".($chocolate[$num])."<br>";

unset($chocolate[$num]);

array_values($chocolate);                    //This is the testing version of attempt 2

sort($chocolate);

$chocNum = $chocNum - 1;

$date = $date + 1;	


}

?>
