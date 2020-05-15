<!DOCTYPE html>
<html lang="en">
<head>
  <?php  include "links.php"; ?>
    <title>Patient</title>  
</head>
<body>
<!-- nabvar  -->
<?php include "navbar.php" ?>
<div class="table-resposive">
    <center><h3>COVID-19 LIVE PATIENT UPDATE</h3></center>
    <table class="table   text-center" id="tbval">
        <thead>
        <tr>
        <th>Patient Number</th>
        <th>Status</th>
        <th>Age</th>
        <th>Gender</th>
        <th>District</th>
        <th>Notes</th>
        </tr>
        </thead>
    </table>
    </div>
    <script>
        patientData();
    </script>
   <?php include "footer.php" ?>
   
</body>
</html>