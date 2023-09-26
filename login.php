
<?php
    session_start();
    include 'koneksi.php';

    if(isset($_POST['login'])){

        // check ketersediaan akun
        $cek = mysqli_query($conn, "SELECT * FROM tab_login WHERE username = '".htmlspecialchars($_POST['user'])."' AND password = '".MD5(htmlspecialchars($_POST['pass']))."'");

        if(mysqli_num_rows($cek) > 0) {
            $a = mysqli_fetch_object($cek);          
            $_SESSION['id'] = $a->username;
            
            
            echo '<script>window.location="tables.php"</script>';
        }else{
            echo '<script>alert("Username atau Password yang anda masukan salah!")</script>';
        }
    }

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Admin</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>
<body>

    <!-- bagian main login -->
    <section class="main-login">

        <div class="box-login">
            <h2>Masuk Admin</h2>
            <!--Bagian Form Login-->
            <form action="" method="post">

                <div class="box">
                    <table>
                        <tr>
                            <td>Username</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="user" class="input-control">
                            </td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>:</td>
                            <td>
                                <input type="password" name="pass" class="input-control">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <input type="submit" name="login" value="Masuk" class="btn-login">
                            </td>
                        </tr>
                    </table>
                </div>

            </form>
        </div>

    </section>

</body>
</html>