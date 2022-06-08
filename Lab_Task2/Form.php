<!DOCTYPE HTML>  
<html>
<body>
    <?php
    $name = $email = $dob = $gender = $degree = $bloodgroup = $word ="";
    $nameErr = $emailErr = $dobErr = $genderErr = $degreErr = $bloodgroupErr = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  // Name......
    if (empty($_POST["name"])) 
    {
        $nameErr = "*Name is required";
      
    }
    elseif(str_word_count($_POST["name"])<2)
    {
      $nameErr = "Contains at least two words";
    }
    
       else {
        $name = $_POST["name"];
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
          $nameErr = "Only letters and white space allowed";
        }
      }
      // E-Mail....

        if (empty($_POST["email"])) {
            $emailErr = "*Email is required";
      }
      
           else {
            $email = $_POST["email"];
            
            if (!filter_var($email , FILTER_VALIDATE_EMAIL)) 
            {
              $emailErr = "*Please type a valid Email address";
            }
          }
          //Date of birth...

          if (empty($_POST["date"])) {
            $dobErr = "*Please Select Date";
          } else {
            $dob = $_POST["date"];
          }
          //Gender...

          if (empty($_POST["gender"])) {
            $genderErr = "*Gender is required";
          } else {
            $gender = $_POST["gender"];
          }
        
          //Degree...

          if (empty($_POST['d'])) {
            $degreErr = "*Degree is required";
          }
          elseif(count($_POST['d'])<2){
            $degreErr = "*At least two of them
            must be selected";
          }
           else {
            $degree = $_POST['d'];
          }

          //Blood Group...

          if(isset($_POST['bloodgrp']) && $_POST['bloodgrp'] == '0')
          {
            $bloodgroupErr ="Must be selected";
          }
          else
          {
            $bloodgroup = $_POST["bloodgrp"];
          }
  }

    ?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: 
  <input type="text" name="name" value="<?php echo $name;?>">
  <span> <?php echo $nameErr;?></span>
  <br> <br>

  Email: 
  <input type="text" name="email" value="<?php echo $email;?>">
  <span> <?php echo $emailErr;?></span>
  <br> <br>

  Date of birth:
  <input type="date" name="dob" value="<?php echo $dob;?>">
  <span> <?php echo $dobErr; ?></span>
  <br> <br>

  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span><?php echo $genderErr;?></span>
  <br><br>

  Degree :
  <input type="checkbox" name="d[]" <?php if (isset($degree) && $degree=="hSC") echo "checked";?> value="h">HSC
  <input type="checkbox" name="d[]" <?php if (isset($degree) && $degree=="SSC") echo "checked";?> value="s">SSC
  
  <input type="checkbox" name="d[]" <?php if (isset($degree) && $degree=="bsc") echo "checked";?>value="b">BSC

  <input type="checkbox" name="d[]"<?php if (isset($degree) && $degree=="msc") echo "checked";?> value="m"> MSC
  <span> <?php echo $degreErr;?></span>
  <br> <br>

  Blood Group:
            <select name="bloodgrp" value="<?php echo $bloodgroup;?>">
                <option value = "0">--Select Blood Group--</option>  
                <option value="A+">A+</option>
                <option value="B+">B+</option>
                <option value="O+">O+</option>              
            </select>
            <span> <?php echo $bloodgroupErr;?></span> 
            <br> <br>

  <input type="submit" name="submit" value="Submit"> 
  </form>

  <?php
  echo "<h2>Your Input:</h2>";
  echo $name;
  echo "<br>";
  echo $email;
  echo "<br>";
  echo $dob;
  echo "<br>";
  echo $gender;
  echo "<br>";
  echo $bloodgroup;
?>
  </body>
  </html>


