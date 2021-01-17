<?php
include("adFormHeader.php");
include("../db.php");
?>
<div class="container-fluid">
  <div class="block-header">
    <h2>Reservation Records</h2>
  </div>
  <div class="card">
    <section class="container">
      <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
        <thead>
          <tr>
            <th>No.</th>
            <th>User</th>
            <th>Start Date & Time</th>
            <th>End Date & Time</th>
            <th>Model</th>
            <th>Total Price (RM)</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sql = "SELECT * FROM reservations";
          $qsql = mysqli_query($connect, $sql);
          $j = 0;
          while ($rs = mysqli_fetch_array($qsql)) {
            $j = $j + 1;
            $sqlpat = "SELECT * FROM users WHERE userID = '$rs[userID]'";
            $qsqlpat = mysqli_query($connect, $sqlpat);
            $rspat = mysqli_fetch_array($qsqlpat);

            $sqldept = "SELECT * FROM bikes WHERE ID='$rs[bikeID]'";
            $qsqldept = mysqli_query($connect, $sqldept);
            $rsdept = mysqli_fetch_array($qsqldept);

            $sqlstat = "SELECT * FROM status WHERE statusID='$rs[status]'";
            $qsqlstat = mysqli_query($connect, $sqlstat);
            $rsstat = mysqli_fetch_array($qsqlstat);

            $rs['totalPrice'] = number_format((float)$rs['totalPrice'], 2, '.', '');
            echo "<tr>
              <td>" . $j . "</td>		
              <td>$rspat[username]<br>$rspat[email]</td>	 
              <td>" . date("d-M-Y", strtotime($rs['startDate'])) . " <br>" . date("H:i A", strtotime($rs['startTime'])) . "</td> 
			        <td>" . date("d-M-Y", strtotime($rs['endDate'])) . "<br> " . date("H:i A", strtotime($rs['endTime'])) . "</td>              
		          <td>$rsdept[Model]</td>
              <td>$rs[totalPrice]</td>
              <td>$rsstat[statusDescription]</td>
              <td><div align='center'>";
            if ($rs['status'] == 4) {
              echo "  <a href='viewReservation.php?delid=$rs[reservationID]' class='btn btn-raised g-bg-blush2'>Delete</a>";
            }
            echo "</center></td></tr>";
          }
          ?>
        </tbody>
      </table>
    </section>
  </div>
</div>
<?php
include("adFormFooter.php");
?>