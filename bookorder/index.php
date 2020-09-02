<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="robots" content="noindex, nofollow">
	<title>Clean Steps-The Shoe Laundry</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" href="../bootstrap-4.4.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../jquery-ui-1.12.1/jquery-ui.css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="../bootstrap-4.4.1-dist/js/jquery.min.js"></script>
	<script src="../bootstrap-4.4.1-dist/js/popper.min.js"></script>
	<script src="../bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<script src="../jquery-ui-1.12.1/jquery-ui.js"></script>
	<link href="../css/bookorder.css" rel="stylesheet">
</head>

<body>
  <!--header-->
 <header>
  <nav class="navbar fixed-top navbar-expand-lg " style="background-color:transparent; "  id="navbar">
      <div class="navbar-brand" href="#"><img src="../image/logo-via-logohub.png"></div>
    <button class="navbar-toggler" style="background-color: white;" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item ">
          <a class="nav-link avi" href="../index.html">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link avi" href="../services.html">SERVICES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link avi" href="../team.html">TEAM</a>
        </li>
        <li class="nav-item">
            <a class="nav-link avi" href="../gallery.html">GALLERY</a>
          </li>
        <li class="nav-item">
            <a class="nav-link avi" href="../bookorder/">BOOKORDER</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
	<div class="container contact form">
		<div class="row">
			<div class="col-md-12">
				<form method="post" id="" action="submit.php">
					<div>
						<div class="row form-group">
							<div class="col-md-4"><img src="../2.jpg" class="avatar"></div>
							<div class="col-md-8">
								<h1>Fill Up Details To Book Order</h1>
							</div>
							<div class="col-25">
								<label class="control-label" for="name">Name</label>
							</div>
							<div class="col-75">
								<input type="text" class="form-control" id="name" name="name" placeholder="Enter Name"
									required>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-25">
								<label class="control-label" for="phone">Mobile Number</label>
							</div>
							<div class="col-75">
								<input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-25">
								<label class="control-label" for="email">Email Id</label>
							</div>
							<div class="col-75">
								<input type="text" class="form-control" id="email" name="email" placeholder="Email">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-25">
								<label class="control-label" for="address">Address</label>
							</div>
							<div class="col-75">
								<textarea id="address" class="form-control" name="address" placeholder="Address"
									style="height:200px"></textarea>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-25">
								<label class="control-label" for="productname">Product Name</label>
							</div>
							<div class="col-75">
								<input type="text" class="form-control" id="productname" name="productname" placeholder="Shoes">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-25">
								<label class="control-label" for="pdate">Pickup Date</label>
							</div>
							<div class="col-75">
								<input type="text" class="form-control" id="pdate" name="pdate" required onchange="run()" placeholder="&#128197;" readonly>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-25">
								<label class="control-label" for="ddate">Delivery Date</label>
							</div>
							<div class="col-75">
								<input type="text" class="form-control" id="ddate" name="ddate" required placeholder="&#128197;" readonly>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-25">
								<label class="control-label" for="pairs">No. of Pairs</label>
							</div>
							<div class="col-75">
								<select id="exampleInputPairs" class="form-control" placeholder="Select" name="pairs"
									id="myselect">
									<option value="0">Select</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
								</select>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-25">
								<label class="control-label" for="amount">Amount To Be Paid</label>
							</div>
							<div class="col-75">
								<!-- <input type="text" id="exampleInputAmount" class="form-control" name="amount" placeholder="Amount"
									> -->
									<div class="0 amt"><input id="myinput" type="text" class="form-control" name="amount" placeholder="Amount" value="INR" readonly/></div>
									<div class="1 amt"><input id="myinput" type="text" class="form-control" name="amount" placeholder="Amount" value="100 INR" readonly/></div>
									<div class="2 amt"><input id="myinput" type="text" class="form-control" name="amount" placeholder="Amount" value="200 INR" readonly/></div>
									<div class="3 amt"><input id="myinput" type="text" class="form-control" name="amount" placeholder="Amount" value="300 INR" readonly/></div>
							</div>
						</div>
						<div class="row form-group">
							<button type="submit" class="btn btn-default" name="submit" id="submit">Submit</button>
							<span style="color:red;" id="msg"></span>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	</div>
	<!--footer-->                            
    <footer>
      <div class="main-content">
        <div class="left box">
          <h2 class="foot-head">About us</h2>
          <div class="content">
            <p1>It is a cleaning centre for washing shoes, toys etc. In India, it is new concept but taking One Step Above where people can 
                  amaze with the outcomes.</p1>
            <div class="social">
                <a href="#"><span class="fab fa-facebook-f"></span></a>
              <a href="#"><span class="fab fa-twitter"></span></a>
                  <a href="#"><span class="fab fa-instagram"></span></a>
                  <a href="#"><span class="fab fa-youtube"></span></a>
            </div>
          </div>
        </div>

        <div class="center box">
          <h2 class="foot-head">Address</h2>
          <div class="content">
            <div class="place">
              <span class="fas fa-map-marker-alt"></span>
              <span class="text">401105,Bhayandar (E), Thane.</span>
            </div>
            <div class="phone">
              <span class="fas fa-envelope"></span>
              <span class="text">theshoelaundry@gmail.com</span>
            </div>
            <!--
            <div class="phone">
              <span class="fas fa-phone-alt"></span>
              <span class="text">+089-765432100</span>
            </div>-->
          </div>
        </div>
        <div class="center box">
          <h2 class="foot-head">Quick Links</h2>
          <div class="content">
          <div class="home">
            <a href="../index.html"><span class="text1">Home</span></a>
          </div>
          <div class="servies">
            <a href="../services.html"><span class="text1">Services</span></a>
          </div>
          <div class="email">
            <a href="../team.html"><span class="text1">Team</span></a>
          </div>
          <div class="email">
            <a href="../gallery.html"><span class="text1">Gallery</span></a>
          </div>
          <div class="email">
            <a href="../bookorder/"><span class="text1">Book Order</span></a>
          </div>
        </div>
        </div>

        <div class="right box">
          <h2 class="foot-head">Contact us</h2>
          <div class="content">
            <form action="#">
              <div class="email">
                <div class="text">Email *</div>
                <input type="email" required>
              </div>
              <div class="msg">
                <div class="text">Message *</div>
                <textarea rows="2" cols="25" required></textarea>
              </div>
              <div class="btn1">
                <button type="submit">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="bottom">
        <center>
          <span class="credit">Created By <a href="#">Vaishnavi </a></span>
          <span class="far fa-copyright"></span><span> 2020 All rights reserved.</span>
        </center>
      </div>
    </footer>
<script>
$(document).ready(function(){
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".amt").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".amt").hide();
            }
        });
    }).change();
});
</script>
	<script>
	$(document).ready(function () {
    $('#pdate').datepicker();
    $('#ddate').datepicker();
});
function run(){
var tt = document.getElementById('pdate').value;
var date = new Date(tt);
var newdate = new Date(date);
newdate.setDate(newdate.getDate() + 2);
var dd = newdate.getDate();
var mm = newdate.getMonth() + 1;
var y = newdate.getFullYear();
var someFormattedDate = mm + '/' + dd + '/' + y;
document.getElementById('ddate').value = someFormattedDate;
}
</script>
	
    </body>
</html>