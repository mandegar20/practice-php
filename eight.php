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
    
    <div class="col-md-7">
<div class="container">
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
  <input type="file" name="images" class="form-control">

   <!--
     
<div class="form-group">

 <label for="field">Field:</label>
 <input type="text" id="field"class="form-control" 
 placeholder="Your Field" name="field"/>
</div>

<div class="form-group">

 <label for="salary">Salary:</label> 
 <input type="text" id="salary"class="form-control" 
 placeholder="Salary" name="salary"/>
</div> 
-->
<br/>
<input type="submit" name="submit" class="btn btn-danger"  />
</form>
</div>
</div>
<div class="col-md-5">
    <div class="container">
        <h3>Employee List</h3>
        <?php   
        // open files

        $file = fopen("emp.txt", "r");
        // //just reads one one chracter
        // echo fgetc($file);
        // //reads one line
        // echo fgets($file);
        // // we should use loop to read up to end of the file
        // feof = file end of file      finding end of file
        // while(!feof($file)){
        //     echo fgets($file)."<br/>";
        // }
        // fclose($file);
       
        
        
        ?>
    </div>
</div>

<?php
if (isset($_POST['submit'])){
    // 
    // $uname = $_POST['firstname'];
    // $uemail = $_POST['email'];
    // $upass = $_POST['password'];
    // $src = $_FILES['images']['tmp_name'];
    // $des = "js/".time().$_FILES['images']['name'];
    // move_uploaded_file($src, $des);


    // // Write a .txt file
    // $info = "
    // username = $uname \r\n
    // useremail = $uemail \r\n
    // userpass = $upass \r\n
    // ------------------------------------
    // ";
    // $f = fopen("emp.txt", "a+");
    // fwrite($f, $info);
    // fclose($f);
    echo " <br/> <div class='container alert alert-success'>
        Successfully Inserted!!
     </div>";
     fopen("text.docx", "x");
     // delete file
     unlink("text.docx");
     copy("emp.txt", "js/text.txt");
     unlink("js/text.txt");
     //make a folder
    //  mkdir("Modal");
     //delete folder
    //  rmdir("Modal");
    //rename
    //  rename();

    // read files from start to end
    //  $filetoread =fread($file, filesize("emp.txt"));
    //  echo $filetoread;
}
?>

</body>
</html>