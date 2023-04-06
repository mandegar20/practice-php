<?php 
    // $list = "<ul class='list-group'> ";
    // for ($i = 0; $i <10; $i++){
    //     $list .="<li class='list-item-group'>it is item $i </li>";
    // }
    // $list .= "</ul>";
    // echo $list;

    $warnmsg = "";
    $firstname = "";

        if (isset($_POST['submit'])){
            if(strlen($_REQUEST['firstname']) < 3 || strlen($_REQUEST['firstname']) > 15){
               $warnmsg = "the name must be between threee and fifiteen chracters";
            } else{
                
                $firstname = $_POST['firstname'];
            }
            $field = $_POST['field'];
            $salary = $_POST['salary'];
            $email = $_POST['email'];
       
        }

?>