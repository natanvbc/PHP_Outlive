<!DOCTYPE html>
<html>
    <?php include("basepage.php"); ?>

    <body class="background">

        <div id="main">
            <center>
                <h1 class="display-3">Register</h1>
            </center>
            <div id="main-login_form-div">

                    <form action="register.php" method="post">
                        <center>
                            <h2 >Username</h2>
                            <input type="text" placeholder="Username" name="username">
                        </center>
                        
                        <center>
                            <h2>Password</h2>
                            <input type="password" placeholder="Password" name="password">
                        </center>
                        
                        <center>
                            <button class="btn border" type="submit" style="color:#f1f0ea;margin-top:20px;">
                                Register
                            </button>
                        </center>
                    </form> 
                

            </div>
        </div>

        <div id="info">

        </div>


    </body> 


</html>