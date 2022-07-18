<?php 
    include_once "config.php";
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);


    if(!empty($fname) && !empty($fname) && !empty($lname) && !empty($email) && !empty($password) ){
        // let's check user email is valid or not
        if(filter_var($email ,FILTER_VALIDATE_EMAIL)){
            // lets check that email already exist in the data base
            $sql = mysqli_query($con, "SELECT emil From  users where email = '{$email}'");
            if(mysqli_num_rows($sql) > 0 ){
                echo "$email - already exist!";
            }else{
               

            }
        }else{
            echo"$email - this is not a valid email! ";
        }
    }else{
        echo "All iput field are required!";
    }
?>