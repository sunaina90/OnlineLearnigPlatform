<?php
session_start();
include "db_conn.php";

if(isset($_POST['uname']) && isset($_POST['psw'])) {
    
    function validate($data) {
        $data = trim($data);
        $data=stripcslashes($data);
        $data=htmlspecialchars($data);
        return data;
    }
}

    $uname = validate($_POST['uname']);
    $pws = validate($_POST['pws']);
    
    if(empty($uname)) {
        header("Location: index.php?err = User Name is required");
        exit();
    }
    else if (empty($pws)){
        header("Location: index.php?error= Password is required");
        exit();
    }


    $sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pws'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 1 ) {
        $row = mysqli_fetch_assoc($result);
        if($row['user_name'] === $uname && $row['password'] === $pws){
            echo "Logged In ";
            $_SESSION['user_name'] = $row['user_name'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['id'];
            header("Location: home.php");
        }
        else{
            header("Location: index.php?error=Incorrect Username or Password ");
        }
    }
    else{
        header("location: index.php");
        exit();
    }

?>

