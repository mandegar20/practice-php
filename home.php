<?php 
    // $list = "<ul class='list-group'> ";
    // for ($i = 0; $i <10; $i++){
    //     $list .="<li class='list-item-group'>it is item $i </li>";
    // }
    // $list .= "</ul>";
    // echo $list;
    // $warnmsg = "";
    // $firstname = "";
    // $warnmsgemail = "";
    // $email = "";

        // if (isset($_POST['submit'])){
            // for forms
        //     if($_REQUEST['firstname'] == ""){
        //         $warnmsg = "Please write your name!!";
        //     }
        //    else if(strlen($_REQUEST['firstname']) < 3 || strlen($_REQUEST['firstname']) > 15){
        //        $warnmsg = "the name must be between threee and fifiteen chracters";
        //     } else{
                
        //         $firstname = $_POST['firstname'];
        //     }
        //     if($_REQUEST['email'] == ""){
        //         $warnmsgemail= "Please write an email address!";
        //     } else if(filter_var($_REQUEST['email'],FILTER_VALIDATE_EMAIL)){
        //         $warnmsgemail = "Invalid Email";
        //     } else{
        //         $email = $_REQUEST['email'];
        //     }
        
        //     $field = $_POST['field'];
        //     $salary = $_POST['salary'];
            // $email = $_POST['email'];
       
// ======================= FILES ===============================
            echo "<pre>";
            print_r($_FILES);
            echo "</pre>";
            echo $_FILES["doc"]["size"]/1000 ." kb";
            echo " <br/>  ";
            echo $_FILES["doc"]["name"];

            $source = $_FILES['doc']['tmp_name'];
            $destination = "js/".$_FILES['doc']['name'];
            move_uploaded_file($source, $destination);
            echo "
            <div class='container alert alert-success'>
                Successfully Inserted!!
            </div>
            
            ";
        // }

?>