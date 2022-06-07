<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $name     = $_POST['name'];
      $email    = $_POST['email'];
      $password = $_POST['linkedin'];

      $errors = []; 

      if(empty($name)){   
           
            if (strlen($input)<3)
           {
             echo "Input is too short, minimum is 12 characters (20 max).";
           }
           elseif(strlen($input)>20)
             {
           echo "Input is too long, maximum is 20 characters.";
             } 
         $errors['name'] = 'Field is Required';
      } 

      # validate email . . .
        if(empty($email)){
            $errors['email'] = 'Field is Required';
        }

     # Validate password . . . 
        if(empty($password)){
            $errors['linkedin'] = 'Field is Required';
        }
        
        # Check errors 

         if(count($errors) > 0){

             foreach ($errors as $key => $value) {
                 # code...
                 echo $key.' : '.$value.'<br>';
             }
         }else{
                echo 'Success';
         }

  }

?>