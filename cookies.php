<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
  </head>
  <body>

  <div class="container">
      <div class="col-md-5">
<form method="POST" class="col-md-5" enctype= "multipart/form-data">
<br/> <br/>
<h3>Form</h3>


<div class="form-group">
<label for="firstname">Your Name:</label>
<input type="text" id="firstname"class="form-control"
 placeholder="First Name" name="firstname"/>
 <!-- <span class="text-danger"><?php echo $warnmsg; ?></span> -->
</div>
<div class="form-group">
 <label for="email">Email:</label>
 <input type="text" id="email"class="form-control"
  placeholder="Email" name="email"/>
  <!-- <span class="text-danger"><?php  echo $warnmsgemail?> </span> -->
</div>
<div class="form-group">
 <label for="password">Password:</label>
 <input type="password" id="password"class="form-control"
  placeholder="Password" name="password"/>
  <!-- <span class="text-danger"><?php  echo $warnmsgemail?> </span> -->
</div>
<br/>
<div class="form-group">
    <label for="">Photo:</label>
    <input type="file" name="images" class="form-control">
</div>
<br/>
<div class="form-group">

    <input type="submit" name="submit" class="btn btn-danger" value="Register"/>
</div>
</form>
</div>
</div>
<?php
if (isset($_POST['submit'])){
    // 
    $uname = $_POST['firstname'];
    $uemail = $_POST['email'];
    $upass = $_POST['password'];
    ?>
  </body>
  <html></html>