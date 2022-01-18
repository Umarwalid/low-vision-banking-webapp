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

<body style="background-color: grey; ">
<div class="img-container"><img src="assets/LVLOGO.png" style="height: 500px; width: 400px;margin-bottom: 0;"></div>
<div class=createacct>
<p class="labelstyle" style="text-align: center; margin-top: 0px;"> Please fill in your information</p>
<form action="database/signup.inc.php" method="post">
<div class="input">
     <label class="labelstyle" for="fn">Firstname </label>
     <input type="text" class="form-control" name="fn" style="float: left;width: 700px;height: 139px;background: #D6D6D6;border-radius: 10px; font-size:100px;"
      value="" required /><br><br>
         </div>
    
 
<div class="input">
    <label class="labelstyle" for="ln">Lastname </label>  
    <input type="text" class="form-control" name="ln" style="float: left;width: 700px;height: 139px;background: #D6D6D6;border-radius: 10px; font-size:100px;"
    value="" required /><br><br>
 </div>
            
 <div class="input">
    <label class="labelstyle" for="cardno">Debit&nbspcard&nbspnumber</label>
    <input type="text" class="form-control" name="cardno" style="float: left;width: 700px;height: 139px;background: #D6D6D6;border-radius: 10px; font-size:100px;"
    value="" required /><br><br>
</div>
<div class="input">
    <label class="labelstyle" for="ccv">CCV</label>
    <input type="text" class="form-control" name="ccv" style="float: left;width: 700px;height: 139px;background: #D6D6D6;border-radius: 10px; font-size:100px;"
    value="" required /><br><br>   
</div>
<div class="input">
    <label class="labelstyle" for="expiry">Expiry&nbspdate(mm,yy)</label>
    <input type="text" class="form-control" name="expiry" style="float: left;width: 700px;height: 139px;background: #D6D6D6;border-radius: 10px; font-size:100px;"
    value="" required /><br><br>      
</div>
 <div class="input">
    <label class="labelstyle" for="user">Email</label>
    <input type="text" class="form-control" name="email" style="float: left;width: 700px;height: 139px;background: #D6D6D6;border-radius: 10px; font-size:100px;"
    value="" required /><br><br>   
</div>

<div class="input">
    <label class="labelstyle" for="user">UserName</label>
    <input type="text" class="form-control" name="user" style="float: left;width: 700px;height: 139px;background: #D6D6D6;border-radius: 10px; font-size:100px;"
    value="" required /><br><br>   
</div>

<div class="input">
    <label class="labelstyle" for="password">Password</label>
    <input type="password" class="form-control" name="password" style="float: left;width: 700px;height: 139px;background: #D6D6D6;border-radius: 10px; font-size:100px;"
    value="" required /><br><br>        
</div>

<div class="input">
    <label class="labelstyle" for="password"> Confirm Password</label>
    <input type="password" class="form-control" name="passwordRe" style="float: left;width: 700px;height: 139px;background: #D6D6D6;border-radius: 10px; font-size:100px;"
    value="" required /><br><br>        
</div>


<div class="buttonss">
    <div class="buttonpos1"><input type="submit" class="btn btn-primary mb-3" name="createAccount"style="width: 300px; height: 100px;background: #CB0707;   border-radius: 99px;font-size: 50px; border: 2px solid black;" 
    name="account" value="Confirm"></button></div> 

    

<div class="buttonpos2"   id ="backbutton"> <a href="index.php" class="btn btn-primary mb-3" style=" width: 300px; height: 100px;background: #17CB07;
    border-radius: 99px; font-size: 50px; border: 2px solid black;">Back
     </a></div>
 


</form>



    </body>