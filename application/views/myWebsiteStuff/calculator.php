
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
</head>
<body>
  <h1>The Useless Integer Calculator</h1>
  <?php echo form_open('users/returnHome'); ?>

<?php
$data = array(
     
     'class' => 'btn-btn primary',
     'name' => 'returnHome',
     'value' => 'Beans Me up Scotty'

);

?>
<?php echo form_submit($data); ?>
<?php echo form_close(); ?>
<p></p>

<?php
function doYouWantCookie(){

if (isset($_GET['checkBox'])) {
    echo "Here have a cookie";
    echo "<br>";
    $name = "YummyCookie";
    $value = "Warm cookie dough is so good";
    $expiration = time() + (60*60*24*7);
    setcookie($name,$value,$expiration);

    } else {
      echo "No cookies :'(";
      echo "<br>";
    }
}
    ?>

<form>
  <div class="form-group row">
    <label for="inputF" class="col-sm-1 col-form-label">First input</label>
    <div class="col-sm-4">
      <input type="number" class="form-control" name="inputF">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputS" class="col-sm-1 col-form-label">Second Input</label>
    <div class="col-sm-4">
      <input type="number" class="form-control" name="inputS">
    </div>
  </div>
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Operators</legend>
      <div class="col-sm-5">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="add" id="add" value="option1">
          <label class="form-check-label" for="add">
            Addition
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="minus" id="minus" value="option2">
          <label class="form-check-label" for="minus">
            Subtraction
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="divide" id="divide" value="option3">
          <label class="form-check-label" for="divide">
            Division
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="times" id="times" value="option4">
          <label class="form-check-label" for="times">
            Multiplication
          </label>
        </div>
      </div>
    </div>
  </fieldset>
  <div class="form-group row">
    <div class="col-sm-2">Checkbox</div>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="checkBox"id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
          Would you like some cookies?
        </label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" name="submit">Calculate</button>
    </div>
  </div>
</form>

<?php 

if (isset($_GET['submit'])) {

  $val1 = $_GET['inputF'];
  
  $val2 = $_GET['inputS'];

  echo "<br>";

if ($val1 =="" || $val2 =="") {
    echo "You have to have two inputs for this to work";
    echo "<br>";
    //echo $val2 ." ". $val1;
}else{

  if (isset($_GET['add'])) {
    echo "So you want to add " . $val1 . " to " . $val2 .". That is easy peasy lemon squizzy. Your answer is ";
    echo ($val1 + $val2) . "!";
    echo "<br>";
    doYouWantCookie();

  } elseif(isset($_GET['minus'])) { 
    echo "So you want to minus " . $val2 . " from " . $val1 .". That is easy peasy lemon. Your answer is ";
    echo ($val1 - $val2) . "!";
    echo "<br>";
    doYouWantCookie();

  } elseif(isset($_GET['divide'])) { 
    echo "So you want to divide " . $val2 . " into " . $val1 .". That is easy peasy. Your answer is ";
    echo ($val1 / $val2) . "!";
    echo "<br>";
    doYouWantCookie();

  }elseif(isset($_GET['times'])) { 
    echo "So you want to multiple " . $val1 . " with " . $val2 .". That is...";
  ?>
  
     <p id="sleep1" style="display:none"><?php echo " uhhhhh it is..."; ?></p>
<script>
    window.setTimeout(function() {
        document.getElementById('sleep1').style.display = '';
    }, 3000);
</script>
  

    <p id="sleep2" style="display:none"><?php echo " Wait I think i got it!"; ?></p>
<script>
    window.setTimeout(function() {
        document.getElementById('sleep2').style.display = '';
    }, 6000);
</script>

<p id="sleep3" style="display:none"><?php echo " Your answer is " . ($val1 * $val2) . "!"; ?></p>
<script>
    window.setTimeout(function() {
        document.getElementById('sleep3').style.display = '';
    }, 9000);
</script>

 <p id="sleep4" style="display:none"><?php  doYouWantCookie(); ?></p>
<script>
    window.setTimeout(function() {
        document.getElementById('sleep4').style.display = '';
    }, 11000);
</script>

    

<?php
  } else {
  echo "Stahp you're doing it wrong";
  echo "<br>";
  //echo $val2 ." ". $val1;
}

}
} else {
 
}

?>
<p></p>
<em>&copy; 2021</em>
</body>

</html>