<?php
include('database/mydb.php');
if (empty($_GET['recipient_code'])) { 
header("location: javascript://history.go(-1)"); 
} 
$stored_recipient_code='';
if (isset($_POST['transfer'])) {
$recipient_code = $_GET['recipient_code'];
$reason = mysqli_real_escape_string($con, $_POST['reason']); 
$amount = mysqli_real_escape_string($con, $_POST['amount']); ;
$sql = mysqli_query($con, "SELECT * FROM transfer_recipient WHERE recipient_code = '$recipient_code'") or die(
mysqli_error()); 
if($sql->num_rows>0){
$data = mysqli_fetch_array($sql); 
$stored_recipient_code = $data['recipient_code']; 
}
if ($recipient_code != $stored_recipient_code) { 

echo "<script> alert('Recipient Code stored does not match with the code recieved');</script>"; 
}
else{
$url = "https://api.paystack.co/transfer";
$fields=[ 
'source' => "balance", 
'amount' => $amount * 100,
'recipient' => $recipient_code, 
 'reason' => $reason 
];
$fields_string = http_build_query($fields); 
//open connection 
$ch = curl_init(); 

curl_setopt($ch, CURLOPT_URL, $url); 
curl_setopt ($ch,CURLOPT_POST, true); 
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string); 
curl_setopt($ch, CURLOPT_HTTPHEADER, array(

"Authorization: Bearer sk_test_5472e7cced04c2535e828fe2a699e1d6febc1cd6", 

"Cache-Control: no-cache", 
));

curl_setopt ($ch,CURLOPT_RETURNTRANSFER, true);
$result - curl_exec($ch);

$initiate = json_decode($result);
$status = $initiate->status;
$message = $initiate->data->status;
$reference = $initiate->data->reference;
$amount = $initiate->data->amount;
$reason = $initiate->data->reason;
$transfer_code - $initiate->data->transfer_code;
$createdAt - $initiate->data->createdAt;

if($status=="success"){
$sql = "INSERT INTO transfer_initiated (reference, amount_in_kobo, reason, status, transfer_code, createdAt) VALUES
('$reference', '$amount', '$reason', ‘$message', '$transfer_code', '$createdAt)";
$result = $con->query($sql);
if(!$result){
echo "<scripts alert('Error: Transfer initiated details could not be stored in the databse'); </script>";
}
else{
header("Location: success.html");
exit();
}
}
else{
    echo "<scripts alert('Error: Could not be initiated contact developer'); </script>";

}
}
}
?>
<html lang="en"> 
<head> 
<meta charset="utf-8"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
<title>initiate</title> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php
$recipient_code = $_GET['recipient_code'];
$sql2 = mysqli_query($con, "SELECT * FROM transfer_recipient WHERE recipient_code = '$recipient_code'") or die(
mysqli_error());
if($sql2->num_rows >0){

$data2 = mysqli_fetch_array($sql2);
$account_name = $data2['account_name'];
}
?>
<body style="background-color: grey;">


<h1 style="text-align: center;">Initiate a Transfer to this Account Name:

<?php
if (empty($account_name)) {
} else
 echo "<p style='color:white;'>".$account_name;"</p>";
?>
</h1>
<div class="verify">

<form method="post" action="">

<div class="input">
    <label class="labelstyle"> Amount </label>  
    <input type="number” class="form-control” name="amount" value="" placeholder="amount to transfer in NGN" 
     style="float: left;width: 700px;height: 139px;background: #D6D6D6;border-radius: 10px;"required  />

 </div>

 <div class="input">
     <label class="labelstyle" > statement</label>
     <input type="text" class="form-control" name="reason" value="" placeholder="reason for the fund transfer" 
style="float: left;width: 700px;height: 139px;background: #D6D6D6;border-radius: 10px;"required />
 </div>
 <div  class="input" style="margin: top 5000px;">
<label>Verify an Account </label> 
<a href="verify.php">VERIFY</a>
</div>


 <div class="buttonpos1"><input type="submit" name="transfer" value="TRANSFER"  class="btn btn-primary mb-3" style="width: 300px; height: 100px;background: red;
    border-radius: 99px;" ><a href> </button></a> 
    </div>
    

<div class="buttonpos2"><a href="mainpage.html"  class="btn btn-primary mb-3" style="width: 300px; height: 100px;background: #17CB07;
    border-radius: 99px;">Back </a>
    </div> 

    </form>
    </div>


</body>
