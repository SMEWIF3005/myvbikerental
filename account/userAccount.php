<?php
include("adHeader.php");
include("../db.php");

session_start();
if (!isset($_SESSION['userID'])) {
    echo "<script>window.location='login.php';</script>";
}

$sqluser = "SELECT * FROM users WHERE userID = '$_SESSION[userID]' ";
$qsqluser = mysqli_query($connect, $sqluser);
$rsuser = mysqli_fetch_array($qsqluser);

?>
<div class="container-fluid">
    <div class="block-header">
        <h2>Dashboard</h2>
        <small class="text-muted">Welcome to MY V Bike Rental</small>
    </div>

    <div class="card">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <div class="alert bg-teal">
                            <h3>Welcome , <?php echo $rsuser['username']; ?> !</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home_animation_1" aria-expanded="true">Reservations History</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile_animation_1" aria-expanded="false">Reservation Records</a></li>
                </ul>

                <!-- Tab panes -->
                <!--
                <div class="tab-content" style="padding: 10px">
                    <div role="tabpanel" class="tab-pane animated flipInX active" id="home_animation_1" aria-expanded="true"> <b>Registration History</b>
                        <h3>You are with us from ?php echo $rsuser['admissiondate']; ?>
                            ?php echo $rsuser['admissiontime']; ?></h3>
                    </div>
                    <div role="tabpanel" class="tab-pane animated flipInX" id="profile_animation_1" aria-expanded="false"> <b>Appointment</b>
                        ?php
                        if (mysqli_num_rows($qsqluserappointment) == 0) {
                        ?>
                            <h3>Appointment records not found.. </h3>
                        ?php
                        } else {
                        ?>
                            <h3>Last Appointment taken on - ?php echo $rsuserappointment['appointmentdate']; ?>
                                ?php echo $rsuserappointment['appointmenttime']; ?> </h3>
                        ?php
                        }
                        ?>
                    </div>
                </div>
                    -->
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>
<?php include("adFooter.php"); ?>