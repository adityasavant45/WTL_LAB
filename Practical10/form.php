<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name=$_POST["name"];
        $email=$_POST["email"];
        $contact=$_POST["contact"];
        $gender=$_POST["gender"];
        $dob=$_POST["dob"];
        $password=$_POST["password"];
        $confirm_password=$_POST["confirm_password"];

        if($password==$confirm_password){
            echo "<h2>Form Successfully Submited!<h2>";
            echo "<p><b>Name: </b>".$name."</p>";
            echo "Email: ".$email."<br>";
            echo "Contact: ".$contact."<br>";
            echo "Gender: ".$gender."<br>";
            echo "Date of Birth: ".$dob."<br>";
            echo "Password: ".$password."<br>";
            echo "Confirm Password: ".$confirm_password."<br>";
        }
        else{
            echo "<h2 style='color:red;'>Your password is mismatched!<h2>";
        }
        
    }