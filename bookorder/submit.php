<?php
// Create connection
$conn = new mysqli("localhost", "root", "", "test");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$productname = $_POST['productname'];
	$pdate = $_POST['pdate'];
	$ddate = $_POST['ddate'];
	$pairs = $_POST['pairs'];
	$amount = $_POST['amount'];
$sql = "INSERT INTO contact_us (name, phone, email, address, productname, pdate, ddate, pairs, amount)VALUES ('$name', '$phone', '$email', '$address', '$productname', '$pdate', '$ddate', '$pairs', '$amount')";
//Mail Start//
if ($conn->query($sql) === TRUE) {
	$html="<table><tr><td>Name</td><td>$name</td></tr><tr><td>Phone</td><td>$phone</td></tr><tr><td>Email</td><td>$email</td></tr><tr><td>Address</td><td>$address</td></tr><tr><td>Product Name</td><td>$productname</td></tr><tr><td>Pick Up Date</td><td>$pdate</td></tr><tr><td>Delivery Date</td><td>$ddate</td></tr><tr><td>No Of Pairs</td><td>$pairs</td></tr><tr><td>Amount</td><td>$amount</td></tr></table>";
	
	include('smtp/PHPMailerAutoload.php');
	$mail=new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host="smtp.gmail.com";
	$mail->Port=587;
	$mail->SMTPSecure="tls";
	$mail->SMTPAuth=true;
	$mail->Username="mwebbrella@gmail.com";
	$mail->Password="cewtislcgtgzbqxy";
	$mail->SetFrom("mwebbrella@gmail");
	$mail->addAddress("vs97532@gmail.com");
	$mail->IsHTML(true);
	$mail->Subject="New Contact Us";
	$mail->Body=$html;
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if($mail->send()){
		//echo "Mail send";
	}
	header('Location: ../thankyou.html');
}
 else {
	header('Location: failed.html');
}

$conn->close();
?>