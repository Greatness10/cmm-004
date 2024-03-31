<?php
include 'conn.php';

//Values
if(isset($_POST['name'])){
    $name= $_POST['name'];
} else {
    $name= '';
}

if(isset($_POST['email'])){
    $email= $_POST['email'];
} else {
    $email= '';
}

if(isset($_POST['pass'])){
    $password= $_POST['pass'];
} else {
    $password= '';
}

if(isset($_POST['confirmpass'])){
    $confirmpass= $_POST['confirmpass'];
} else {
    $confirmpass= '';
}

// $email= $_POST['email'];
// $username= $_POST['username'];
// $password= $_POST['password'];
// $confirmpass= $_POST['confirmpass'];
// $user= $_POST['user'];
// $email= $_REQUEST['email'];
$errMsg='';

if(isset($_POST['email']) && isset($_POST['pass']) ){
    $query1 = "SELECT email from users where email='$email'";
    $user = mysqli_query($mysqli, $query1);
    $userArray = $user -> fetch_array(MYSQLI_NUM);
    if($userArray==[]){
        $sql = "INSERT INTO users (email, username, password) VALUES ('$email', '$name', '$password')";
        $result = mysqli_query($mysqli, $sql);

        // header("Location: login.php");
        die();
        // // Fetch all
        // mysqli_fetch_all($result, MYSQLI_ASSOC);
        print($result);
    } else {
        echo $userArray[0];
    }
    // if($confirmpass!='' && $confirmpass==$password){
        
    //     if($userArray==[]){
    //         $sql = "INSERT INTO users (email, username, password) VALUES ('$email', '$name', '$password')";
    //         $result = mysqli_query($mysqli, $sql);

    //         header("Location: login.php");
    //         die();
    //         // // Fetch all
    //         // mysqli_fetch_all($result, MYSQLI_ASSOC);
    //         print($result);
    //     }
    // } 
}
// else {
//     $errMsg= 'passwords do not match';
//     echo $errMsg;  
// }





// Free result set
// mysqli_free_result($result);


//Values 
if(isset($_POST['loginemail'])){
    $loginemail= $_POST['loginemail'];
} else {
    $loginemail= '';
}

if(isset($_POST['loginpass'])){
    $loginpass= $_POST['loginpass'];
} else {
    $loginpass= '';
}


// $email= $_POST['email'];
// $username= $_POST['username'];
// $password= $_POST['password'];
// $confirmpass= $_POST['confirmpass'];
// $user= $_POST['user'];
// $email= $_REQUEST['email'];
$errMsg='';



if(isset($_POST['loginemail']) && isset($_POST['loginpass']) ){
    $sql= "SELECT email, password, username from users where email= '$loginemail'";
    $result = mysqli_query($mysqli, $sql);
    $row = $result -> fetch_array(MYSQLI_NUM);
    if ($loginpass==$row[1]) {
        session_start();
        $_SESSION['loggedin'] = "true";
        $_SESSION['name'] = $row[2];
        header("Location: Clone.php");
    } 




    // // Fetch all
    // mysqli_fetch_all($result, MYSQLI_ASSOC);
    print($row[0]);
} 
// else {
//     $errMsg= 'invalid username or password';
//     echo $errMsg;  
// }



// Free result set
// mysqli_free_result($result);

mysqli_close($mysqli);
?>
<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="css/login.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width,  initial-scale=1.0">
    <title>The Mane Event</title>
    <link rel="stylesheet"
        href="css/login.css">
</head>

<body>
    <header>
        <h1 class="heading">The Mane Event</h1>
        <h3 class="title">Sliding Login & Registration Form</h3>
    </header>

    <!-- container div -->
    <div class="container">

        <!-- upper button section to select
            the login or signup form -->
        <div class="slider"></div>
        <div class="btn">
            <button class="login">Signup</button>
            <button class="signup">Login</button>
        </div>

        <!-- Form section that contains the
            login and the signup form -->
        <div class="form-section">

            <!-- signup form -->
            <form method='post' action="login.php">
            <div class="signup-box">
                <input name='name' type="text"
                    class="name ele"
                    placeholder="Enter your name">
                <input name='email' type="email"
                    class="email ele"
                    placeholder="youremail@email.com">
                    <?php
                        if(isset($_POST['email'])){
                            if($userArray!=[]){
                                echo '<small>user with this email already exists</small>';
                            } 
                        }
                    ?>
                <input name='pass' type="password"
                    class="password ele"
                    placeholder="password">
                <input name='confirmpass' type="password"
                    class="password ele"
                    placeholder="Confirm password">
                    <?php if(isset($_POST['confirmpass'])){
                        if ($confirmpass!=$password) {
                            echo '<small>passwords do not match</small>';
                        }
                        }?>
                <button class="clkbtn">Signup</button>
            </div>
            </form>

            <!-- login form -->
            <form action="" method="post">
            <div class="login-box">
                <input type="email"
                    name='loginemail'
                    class="email ele"
                    placeholder="youremail@email.com">
                    <?php
                        if(isset($_POST['loginemail']) && isset($_POST['loginpass']) ){
                            if($row!=[]){

                            }
                         
                        }   
                    ?>
                <input type="password"
                name='loginpass'
                    class="password ele"
                    placeholder="password">
                    <?php
                        if(isset($_POST['loginemail']) && isset($_POST['loginpass']) ){
                            if ($loginpass!=$row[1]) {
                               echo '<small style="color: red">invalid username or password</small>';
                            } 
                        }   
                    ?>
                <button class="clkbtn">Login</button>
            </div>
            </form>
        </div>
    </div>
    <script src="js/jquery-3.6.0.min.js"></script>
</body>
<script src="js/login.js"></script>
</html>