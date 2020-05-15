
<?php  
// $data = file_get_contents('https://api.covid19api.com/summary');
// $coronadata = json_decode($data);
// echo "<pre>";
// print_r($coronadata);
// $data = file_get_contents('https://github.com/covid19Nepal/covid19-nepal-api/blob/master/data.json');
// $ata = json_decode($data);
// echo "<pre>";
// print_r($ata);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include "links.php";?>
    <title>corona</title>
    <script>
      worldData();     
  </script>
</head>
<body> 
<!-- nabvar  -->
<?php include "navbar.php"; ?>
<div class="table-resposive">
    <center><h3>COVID-19 LIVE GLOBAL UPDATE</h3></center>
    <table class="table   text-center" id="tbval1">
        <thead>
        <tr>
        <th>Total Confirmed </th>
        <th>Total Recovered </th>
        <th>Total Death </th>
        <th>New Confirmed </th>
        <th>New Recovered </th>
        <th>New Death </th>
        </tr>
        </thead>
    </table>
    </div>


    <center><h3>COVID-19 LIVE COUNTRIES UPDATE</h3></center>
    <div class="table-resposive">
    
    <table class="table table-bordered table-striped text-center" id="tbval">
        <tr>
        <th>Country </th>
        <th>Total Confirmed </th>
        <th>Total Recovered </th>
        <th>Total Death</th>
        <th>New Confirmed </th>
        <th>New Recovered </th>
        <th>New Death </th>
        </tr>
    </table>
    </div>
   
 <?php include "footer.php"; ?>
   
</body>
</html>