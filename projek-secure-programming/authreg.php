<?php
    require_once('connection.php');
    if(isset($_POST['registerButton'])){
        
        function validate($data){
            $data = trim($data);
            $data =htmlspecialchars(stripslashes($data));
            return $data;
        }
        $password = validate($_POST['Password']);
        $email = validate($_POST['Email']);
        $confirmPassword = validate($_POST['Confirm-Password']);
        $username = validate($_POST['Username']);

        if(empty($email)){
            echo'
            <script>
                alert("Registrasi Gagal, Isi Email");
                window.location.href="register.php";
            </script>
            ';
            exit();
        }

        if(empty($username)){
            echo'
            <script>
                alert("Registrasi Gagal, Isi Username");
                window.location.href="register.php";
            </script>
            ';
            exit();
        }


        if(empty($password)){
            echo'
            <script>
                alert("Registrasi Gagal, Isi Password");
                window.location.href="register.php";
            </script>
            ';
            exit();
        }
        if(empty($confirmPassword)){
            echo'
            <script>
                alert("Registrasi Gagal, Isi Confirm Password");
                window.location.href="register.php";
            </script>
            ';
            exit();
        }

        if($confirmPassword != $password){
            echo'
            <script>
                alert("Registrasi Gagal, Confirm Password Tidak Sama Dengan Password");
                window.location.href="register.php";
            </script>
            ';
            exit();
        }
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $insert = mysqli_query($conn,"INSERT INTO user(Username, Email, Password) values('$username', '$email', '$hashedPassword')");
        if($insert){
            header('location:index.php');
        }
        else{
            echo'
            <script>
                alert("Registrasi Gagal");
                window.location.href="register.php";
            </script>
            ';
        }
    }


?>