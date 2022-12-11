<?php
 require_once('connection.php');
  if(isset($_POST['loginButton'])){
    function validate($data){
      $data = trim($data);
      $data =htmlspecialchars(stripslashes($data));
      return $data;
  }

    $username = validate($_POST['Username']);
    $password = validate($_POST['Password']);
    if(empty($username)){
      echo'
      <script>
          alert("Login Gagal, Isi Username");
          window.location.href="index.php";
      </script>
      ';
      exit();
    }

    if(empty($password)){
      echo'
      <script>
          alert("Login Gagal, Isi Password");
          window.location.href="index.php";
      </script>
      ';
      exit();
  }

    $check = mysqli_query($conn, "SELECT * FROM user where Username = '$username'");
    $count = mysqli_num_rows($check);
    $passwordData = mysqli_fetch_array($check);
    $passwordNow = $passwordData['Password'];

    if($count >0){    
      if(password_verify($password,$passwordNow)){
        header('location:content.php');
        $_SESSION['IP'] = $_SERVER['REMOTE_ADDR'];
        $_SESSION['Agent'] = $_SERVER['HTTP_USER_AGENT'];
      }
      else{
        echo'
        <script>
            alert("Password Salah");
            window.location.href="index.php";
        </script>
        ';
      }
    }
    else{
      echo'
      <script>
          alert("Login Gagal");
          window.location.href="index.php";
      </script>
      ';
    }
  }
  

?>








































