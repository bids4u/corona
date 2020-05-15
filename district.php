
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "links.php";?>
    <title>District</title>
</head>
<body>
<!-- nabvar  -->
<?php include "navbar.php" ?>
<div class="table-resposive">
    <center><h3>COVID-19 LIVE  UPDATE NEPAL</h3></center>
    <table class="table table-bordered table-striped text-center" id="tbval">
        <thead>
        <tr>
        <th>Province </th>
        <th>District</th>
        <th>Total Confirmed </th>
        </tr>
        </thead>
    </table>
    </div>
    <script> 
    districtData();
    </script>
    <!-- top cursor button -->
<div class="container scrolltop float-right pr-5">
<i class="fa fa-arrow-up" onCLick="topFunction()" id="myBtn"></i>
</div>


<!-- footer -->
<?php include "footer.php"; ?>

</body>
</html>