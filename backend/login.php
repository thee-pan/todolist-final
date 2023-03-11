<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>ToDo List</title>
    <link rel="stylesheet" href="../style2.css">
</head>

<body>
    <section>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="title">
            <h1>TODO LIST</h1>
        </div>

        <div class="box">
            <div class="square" style="--i:0;"></div>
            <div class="square" style="--i:1;"></div>
            <div class="square" style="--i:2;"></div>
            <div class="square" style="--i:3;"></div>
            <div class="square" style="--i:4;"></div>

            <div class="container">
                <h2>Login</h2>
                <?php
                if (@$_GET['Empty'] == true) {
                ?>
                    <div><?php echo $_GET['Empty'] ?></div>
                <?php
                }
                ?>


                <?php
                if (@$_GET['Invalid'] == true) {
                ?>
                    <div><?php echo $_GET['Invalid'] ?></div>
                <?php
                }
                ?>

                <p>
                <h3>Don't have an account?
                    <a href="signup_index.php">SignUp</a>
                </h3>
                </p>

                <div class="form">
                    <form method="post" action="process.php">
                        <div class="inputbox">
                            <input type="text" name="username" placeholder="Username">
                        </div>
                        <div class="inputbox">
                            <input type="password" name="password" placeholder="Password">
                        </div>
                        <div class="inputbox">
                            <input type="submit" value="Login" name="Login">
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </section>

</body>

</html>