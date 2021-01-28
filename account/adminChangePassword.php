<?php
$root = "../";
include $root . 'db.php';

session_start();

if (isset($_POST["submit"])) {
	$sql = "UPDATE admin SET password='$_POST[newpassword]' WHERE password='$_POST[oldpassword]' AND adminID='$_SESSION[adminID]'";
	$qsql = mysqli_query($connect, $sql);
	if (mysqli_affected_rows($connect) == 1) {
		echo "<div class='alert alert-success'>
		 Password updated successfully
	</div>";
	} else {
		echo "<div class='alert alert-warning'>
		 Password failed to update
	</div>";
	}
}
include $root . "account/adHeader.php";
?>
<div class="container-fluid">
	<div class="block-header">
		<h2> Admin's Password</h2>
	</div>
	<div class="row clearfix">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="card">
				<form method="post" action="" name="frmadminprofile" onSubmit="return validateform()">
					<div class="body">
						<div class="row clearfix">
							<div class="col-sm-12">
								<div class="form-group">
									<div class="form-line">
										<input class="form-control" type="password" name="oldpassword" id="oldpassword" placeholder="Old Password" />
									</div>
								</div>
							</div>
						</div>
						<div class="row clearfix">
							<div class="col-sm-12">
								<div class="form-group">
									<div class="form-line">
										<input class="form-control" type="password" name="newpassword" id="newpassword" placeholder="New Password" />
									</div>
								</div>
							</div>
						</div>
						<div class="row clearfix">
							<div class="col-sm-12">
								<div class="form-group">
									<div class="form-line">
										<input class="form-control" type="password" name="password" id="password" placeholder="Confirm Password" />
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							<input type="submit" class="btn btn-raised g-bg-cyan" name="submit" id="submit" value="Submit" />
						</div>
					</div>
				</form>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<?php include $root . "account/adFooter.php"; ?>
	<script type="application/javascript">
		function validateform1() {
			if (document.frmadminchange.oldpassword.value == "") {
				alert("Old password should not be empty..");
				document.frmadminchange.oldpassword.focus();
				return false;
			} else if (document.frmadminchange.newpassword.value == "") {
				alert("New Password should not be empty..");
				document.frmadminchange.newpassword.focus();
				return false;
			} else if (document.frmadminchange.newpassword.value.length < 8) {
				alert("New Password length should be more than 8 characters...");
				document.frmadminchange.newpassword.focus();
				return false;
			} else if (document.frmadminchange.newpassword.value != document.frmadminchange.password.value) {
				alert(" New Password and confirm password should be equal..");
				document.frmadminchange.password.focus();
				return false;
			} else {
				return true;
			}
		}
	</script>
</div>