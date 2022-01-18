<?php require "header.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   
    <link rel="icon" type="image/x-icon" href="assets/favicon.png">
</head> 
</head> 

<body style="background-color: grey;">

<div style="padding-left:  34%;padding-right: 34%; "><img src="assets/LVLOGO.png" style="height: 500px; width: 400px;margin-bottom: 0;"></div>

<div class=login>

<p class="labelstyle2" style="text-align: center;"> Low Vision Banking</p>
<form action="database/login.inc.php" method="post">
<div class="input2">
     <label class="labelstyle2" for="user">Username </label>
     
    <input class=inputbox2 name="user" id="user" style="font-size:100px;" >
 </div>
<div class="input2">
    <label class="labelstyle2" for="password">password </label>  
    <input class=inputbox2 type="password"name="password" id="password"  style="font-size:100px;" >
 </div>
  
 <div class="buttonpos1"><button type="submit" name="login-submit" class="btn btn-primary mb-3"style="width: 300px; height: 100px;background: #CB0707;   border-radius: 99px;font-size: 40px; border: 2px solid black;">Confirm
</button></div> 

<div class="buttonpos2"><a href="createacct.php" class="btn btn-primary mb-3" style="width: 300px; height: 100px;background: #0724cb ;
    border-radius: 99px;font-size: 40px; padding-top: 18px; border: 2px solid black;">New Account</a>
    </div> 
</form>
</div>


    </body>