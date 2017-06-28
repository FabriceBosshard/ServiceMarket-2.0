<?php

  include('dbconnect.php');

  $old_pw = md5($_POST['old_pw']);
  $new_pw = md5($_POST['new_pw']);
  $conf_pw = md5($_POST['conf_pw']);
  $email = mysqli_real_escape_string($conn,$_POST['email']);


  if(empty($old_pw) || empty($new_pw) || empty($conf_pw) || empty($email)){
    echo "<div class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Please fill all the fields!</div>";
    exit(0);
  }else {
    if($old_pw == $new_pw){
      echo "<div class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Dont choose the same password</div>";
      exit();
    }
    if($conf_pw <> $new_pw){
      echo "<div class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>new Password doesn't match</div>";
      exit();
    }
    if(strlen($new_pw) < 9 ){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Password is weak</b>
			</div>
		";
		exit();
		}
  }

    @changePassword();

    function changePassword(){
      $sql="UPDATE user_info SET password = '$new_pw' WHERE password = '$old_pw' AND email='$email' LIMIT 1";
      $run_query=mysqli_query($conn,$sql);
      $count = mysqli_num_rows($run_query);
      if($count == 1){
        echo "
            <div class='alert alert-success'>
              <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
              Click <b><a href='index.php'>here</a></b> to go to Homepage.
            </div>
        ";
      }
      else {
        echo "
            <div class='alert alert-danger alert-dismissible'>
              <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
              Password change failed. Click <b><a href='index.php'>here</a></b> to go back.
            </div>
        ";
      }
    }


 ?>
