<?php
$subtitle = 'Reservation';
$nav = "rent";
$root = "../";
include $root . 'header.php';
include_once($root . "db.php");
?>
<?php
$bike = null;
if (isset($_GET['bike']) && $_GET['bike'] != '') {
	$bike = $_GET['bike'];
	$sql = "SELECT models.model AS model, brands.brand AS brand, models.product_code AS product_code, models.price AS price, models.img AS img FROM models INNER JOIN brands ON models.brand = brands.id WHERE models.product_code=$bike";
	$result = $connect->query($sql);
}


if (isset($_POST['add'])) {
	$Name       = strip_tags(trim($_POST['Name']));
	$SurName    = strip_tags(trim($_POST['SurName']));
	$Birdhday   = strip_tags(trim($_POST['Birdhday']));
	$Email      = strip_tags(trim($_POST['Email']));
	$Phone      = strip_tags(trim($_POST['Phone']));
	$RentSTART  = strip_tags(trim($_POST['RentSTART']));
	$STARTTime	= strip_tags(trim($_POST['STARTTime']));
	$RentEND    = strip_tags(trim($_POST['RentEND']));
	$ENDTime	= strip_tags(trim($_POST['ENDTime']));
	$Coments    = strip_tags(trim($_POST['Coments']));

	$mysqli = new mysqli("localhost", "root", "", "sme_db");

	$mysqli->query("INSERT INTO reservation(Name,SurName,Birdhday,Email,Phone,RentSTART,STARTTime,RentEND,ENDTime,Coments) 
                VALUES ('$Name','$SurName','$Birdhday','$Email','$Phone','$RentSTART','$STARTTime','$RentEND','$ENDTime','$Coments')");

	$mysqli->close();

	//$result='<div class="alert alert-success"><h3><span class="glyphicon glyphicon-ok"></span> Order complete!</h3><h4>We will get in touch with you soon.</h4></div>';
}
?>

<link rel="stylesheet" type="text/css" href="<?php echo $root ?>assets/css/form.css">

<body>

	<?php include $root . 'navbar.php' ?>
	<section>
		<?php include $root . 'sidenavigation.php' ?>
		<div class="container my-4">
			<h3>Please fill in this form</h3>

			<form method="post" action="reservation.php">

				<div class="row selection">
					<div class="col-sm-3 selector">
						<!--By default, the first item in the drop-down list is selected.
								To define a pre-selected option, add the selected attribute to 
								the option:-->
						<label for="bike_id">Choose a bike</label>
						<select class="form-control" id="bike_id" name="bike">
							<option value="01">Kawasaki Ninja 300</option>
							<option value="02">Honda CBR500</option>
							<option value="03">Honda CBR 125R</option>
							<option value="04">Suzuki GSX600</option>
							<option value="05">Yamaha R1</option>
							<option value="06">Yamaha R6</option>
							<option value="07">Yamaha YZF R125 ABS</option>
							<option value="08">Kawasaki GTR 1400</option>
							<option value="09">Honda MSX125</option>
							<option value="10">Suzuki DR350</option>
							<option value="11">Yamaha FZ S Fi</option>
							<option value="12">Yamaha MT 125</option>
							<option value="13">Yamaha XT1200</option>
							<option value="14">Yamaha YBR 125</option>
							<option value="15">Yamaha Midnight Star XVS1300A</option>
							<option value="16">Suzuki Intruder M800Z</option>
						</select>
					</div>

					<div class="col-sm-9 dates">
						<div class="col-sm-4" id="pick-up-date">
							<label for="date-input" class="col-sm-3 col-form-label">Pick up date</label>
							<input class="form-control" type="date" name="RentSTART" id="setDatePick">
						</div>

						<div class="col-sm-1">
						</div>


						<div class="col-sm-4" id="pick-up-time">
							<label for="time-input" class="col-sm-4 col-form-label">Time</label>

							<input class="form-control" type="time" name="STARTTime" id="setTimePick">

						</div>
					</div>
				</div>
				<div class="row selection">
					<div class="col-sm-3">
					</div>

					<div class="col-sm-9 dates">
						<div class="col-sm-4" id="drop-off-date">
							<label for="date-input" class="col-sm-3 col-form-label">Drop off date</label>
							<input class="form-control" type="date" name="RentEND" id="setDateDrop">
						</div>
						<div class="col-sm-1">
						</div>
						<div class="col-sm-4" id="drop-off-time">
							<label for="example-time-input" class="col-sm-4 col-form-label">Time</label>
							<input class="form-control" type="time" name="ENDTime" id="setTimeDrop">
						</div>
					</div>
				</div>
				<div class="row" id="pricing">
					<div class="col-sm-9" id="invisible">
					</div>
					<div class="col-sm-3">
						<label class="col-sm-12">
							<h4>Final price</h4>
						</label>
						<div class="col-sm-12 price">

							<h4>50 $</h4>
						</div>
					</div>
				</div>
				<div class="col-sm-6 personal-details">
					<div class="row" id="FullName">
						<label for="name" class="col-sm-12 col-form-label">First name</label>
						<input class="form-control" type="text" name="Name" id="name">
					</div>

					<div class="row" id="SurName">
						<label for="SurName" class="col-sm-12 col-form-label">Last name</label>
						<input class="form-control" type="text" name="SurName" id="SurName">
					</div>

					<div class="row" id="YOB">
						<label for="yearOfBirth" class="col-sm-12 col-form-label">Year of Birth</label>
						<input class="form-control" type="date" name="Birdhday" id="yearOfBirth">
					</div>

					<div class="row" id="email">
						<label for="email" class="col-sm-12 col-form-label">Email</label>
						<input class="form-control" type="text" name="Email" id="Email">
					</div>

					<div class="row" id="phone">
						<label for="phone" class="col-sm-12 col-form-label">Phone</label>
						<input class="form-control" type="text" name="Phone" id="Phone">
					</div>
				</div>

				<div class="col-sm-6 comment">
					<div class="row" id="comment">
						<label for="message" class="col-sm-12 col-form-label" id="message"> Comments</label>
						<div class="col-sm-12" id="messageZone">
							<textarea class="form-control" name="Coments"></textarea>
						</div>
					</div>
				</div>
				<div class="col-sm-12 checkbox">
					<input type="checkbox" id="c1" name="cc" />
					<label for="c1"><span></span><a id="contract">I accept the conditions.</a></label>
				</div>

				<div class="col-sm-12 submit">
					<div id="sendButton">
						<button type="submit" id="submit" name="add">Place order</button>
					</div>
				</div>
			</form>

			<div class="col-sm-2">
			</div>
		</div>
	</section>
	<?php include $root . 'footer.html' ?>
</body>

</html>