<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'links.php';?>
    <title>Nepal Fight's Corona</title>
    <?php include 'dbcon.php' ?>
   
<?php 

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $comments = mysqli_real_escape_string($con,$_POST['comments']);
    $insertquery = "INSERT INTO `contactus`( `name`, `email`, `comments`) VALUES ('$name','$email','$comments')";
    $iquery = mysqli_query($con,$insertquery);
    if($iquery){}else{echo "failed";}         
} 
?> 
 
    <script>
      mainData();
      mainData1();
    </script>
</head>
<body>
<?php include 'navbar.php' ?>
<!-- important links -->
<div class="container">
  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">Covid-19 Nepal update</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " data-toggle="tab" href="#menu1">Covid 19 Nepal Daily Update</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " data-toggle="tab" href="#menu2">Covid-19 World update</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
      <!-- corona latest update nepal -->
<section class="corona_update mt-5">

<div class="mb-3">
  <h3 class="text-uppercase text-center">covid-19 Nepal update</h3>
</div>

<div class="d-flex justify-content-around align-items-center">
   
   <div>
      <h1 id="d1"></h1>
      <p>Total Confiremed</p>
   </div>

   <div>
      <h1 id='d2'></h1>
      <p>Total Recovered</p>
   </div>
    
    <div>
      <h1 id='d3'></h1>
      <p>Total Death</p>
   </div>

   <div>
      <h1 id='d4'></h1>
      <p>Total Tested</p>
    </div>
  <div>
      <h1 id='d5'></h1>
      <p>Total Positive</p>
  </div><div>
      <h1 id='d6'></h1>
      <p>Total Negative</p>
  </div>
</div>
</section>
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
      <!-- corona latest update nepal -->
<section class="corona_update mt-5">

<div class="mb-3">
  <h3 class="text-uppercase text-center">Covid 19 Nepal DAILY Update</h3>
</div>

<div class="d-flex justify-content-around align-items-center">
   
   <div>
      <h1 id="d11"></h1>
      <p>Total Confiremed</p>
   </div>

   <div>
      <h1 id='d22'></h1>
      <p>Total Recovered</p>
   </div>
    
    <div>
      <h1 id='d33'></h1>
      <p>Total Death</p>
   </div>

   <div>
      <h1 id='d44'></h1>
      <p>Updated Date</p>
    </div>

</div>
</section>
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
       <!-- corona latest update nepal -->
<section class="corona_update mt-5">

<div class="mb-3">
  <h3 class="text-uppercase text-center">Covid 19 WORLD Update</h3>
</div>

<div class="d-flex justify-content-around align-items-center">
   
   <div>
      <h1 id="d111"></h1>
      <p>Total Confiremed</p>
   </div>

   <div>
      <h1 id='d222'></h1>
      <p>Total Recovered</p>
   </div>
    
    <div>
      <h1 id='d333'></h1>
      <p>Total Death</p>
   </div>


</div>
</section>
    </div>
  </div>
</div>



<div class="main_header">
<div class="row w-1oo h-80">
<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
<div class="left-side w-100 h-100 d-flex justify-content-center align-items-center">
<img src="assets/hand-sanitizer-4972049_1280.png" alt="left" width='300' height='300'>
</div>
</div>
<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
<div class="right side w-100 h-100 d-flex justify-content-center align-items-center">
<h1>
सुरक्षित रहौं र कोरोना भाइरससँग मिलेर लडौं</h1>
</div>
</div>
</div>
</div>



<!-- about -->

<div class="container-fluid sub_section pt-5 pb-5" id="aboutid" >
  <div class="section_header text-center mb-5 mt-4">
   <h1>About Covid-19</h1>
  </div>
   <div class="row pt-5">

    <div class="col-lg-5 col-md-6 col-12 ml-5">
      <img src="assets/covid-4948866_1920.jpg" alt="corona image " class="image-fluid img1">
    </div>

    <div class="col-lg-6  col-md-6 col-12" >
     <h2>what is Coronavirus disease (COVID-19)?</h2>
     <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus. </p>
     <p>Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.</p>
   </div>

   </div>
  </div>

<!-- symptoms -->
<div class="container-fluid pt-5 pb-5" id="symptomsid">

  <div class="section_header text-center mb-5 mt-4">
   <h1>Coronavirus Symptoms</h1>
  </div>
  <div class="row">

   <div class="col-lg-3 col-md-3 col-12 mt-5">
    <figure class="text-center">
    <img src="assets/cough.png" alt="sym" class="img-fluid bg-info" width="120" height="120">
    <figcaption>Cough</figcaption>
    </figure>
   </div>

   <div class="col-lg-3 col-md-3 col-12 mt-5">
    <figure class="text-center">
    <img src="assets/fever.png" alt="sym" class="img-fluid bg-info" width="120" height="120">
    <figcaption>Fever</figcaption>
    </figure>
   </div>

   <div class="col-lg-3 col-md-3 col-12 mt-5">
    <figure class="text-center">
    <img src="assets/Shortness of breath.png" alt="sym" class="img-fluid bg-info" width="120" height="120">
    <figcaption>Sore Throat</figcaption>
    </figure>
   </div>

   <div class="col-lg-3 col-md-3 col-12 mt-5">
    <figure class="text-center">
    <img src="assets/shore in throat.png" alt="sym" class="img-fluid bg-info" width="120" height="120">
    <figcaption>Shortness of Breath</figcaption>
    </figure>
   </div>

  </div>

</div>

<!-- contact us -->
<div class="container-fluid pt-5 pb-5">
<div class="section_header text-center mb-5 mt-4">
 <h1>Contact Us</h1>
</div>
<div class="col-lg-8 offset-lg-2 col-12">
<form method='POST' action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputName">Name</label>
      <input type="text" class="form-control" name="name"  placeholder="Name" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail">Email</label>
      <input type="email" class="form-control" name="email"  placeholder="Email" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Comments</label>
    <textarea class="form-control" name="comments" rows="3"></textarea>
  </div>
    <input type="submit" name="submit" class="btn btn-primary">
    </div>
  </div>
 
</form>
</div>

<?php include 'footer.php'?>
  
</body>
</html>