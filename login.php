<!DOCTYPE html>
<html>
<head>  
        <title>Toko Mardood | Login</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body id="bg-login">
    <section class ="bg-login">
    <img src="img.png" alt="Mardood Trans" width="250" class="rounded-circle img-thumbnail" />

    </section>
    <div class="box-login">
        <h2>Login</h2>
        <form action="" method="POST">
            <input type="text" name="user" placeholder="Username" class="input-control">
            <input type="password" name="pass" placeholder="Password"class="input-control" >
            <input type="submit" name="submit" value="Login" class="btn">
        </form>
        <?php
            if(isset($_POST['submit'])){
                session_start();
                include 'db.php';

                $user = $_POST['user'];
                $pass = $_POST['pass'];

                $cek = mysqli_query($conn, "SELECT * FROM td_admin WHERE username ='".$user."' AND password= '".$pass."'");
                if(mysqli_num_rows($cek) > 0) {
                    $d = mysqli_fetch_object($cek);
                    $_SESSION['status_login'] = true;
                    $_SESSION['a_global'] = $d;
                    

                    echo '<script>window.location="dashboard.php"</script>';
                }else {
                    echo '<script>alert("Wah ternyata username dan password salah")</script>';
                };
            }
        ?>
</body>
</html>