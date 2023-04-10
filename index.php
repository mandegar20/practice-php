<?php
include "./home.php";
?>


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

    <form method="POST" class="col-md-5" enctype= "multipart/form-data">
      <br/> <br/>
      <h3>Form</h3>
      <div class="form-group">
      <label for="">Document</label>
        <input type="file" name="doc" class="form-control">
</div>
         <!-- <label for="firstname">Your Name:</label>
      <input type="text" id="firstname"class="form-control"
       placeholder="First Name" name="firstname"/>
       <span class="text-danger"><?php echo $warnmsg; ?></span>
      </div>
     <div class="form-group">

       <label for="field">Field:</label>
       <input type="text" id="field"class="form-control" 
       placeholder="Your Field" name="field"/>
     </div>
     <div class="form-group">

       <label for="email">Email:</label>
       <input type="text" id="email"class="form-control"
        placeholder="Email" name="email"/>
        <span class="text-danger"><?php  echo $warnmsgemail?> </span>
     </div>
     <div class="form-group">

       <label for="salary">Salary:</label> 
       <input type="text" id="salary"class="form-control" 
       placeholder="Salary" name="salary"/>
     </div> -->
      <br/>
      <input type="submit" name="submit" class="btn btn-danger"  />
    </form>

    <div class="col-md-7 container">
   
    <h3>Employee List</h3>
   
   
<?php
// if(isset($_REQUEST['submit'])){
//   echo $firstname."<br>";
//   echo $field."<br>";
//   echo $email."<br>";
//   echo $salary."<br>";

// }
 ?>
    
    

  
    </div>

    <!-- <div class="container well">
      <span class="fa fa-car"></span>
    </div> -->
    </div>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="jquery.min.js"></script>
  </body>
</html>
