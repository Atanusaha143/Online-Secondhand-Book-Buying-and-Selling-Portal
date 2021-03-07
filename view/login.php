<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' href='./images/favicon.png'>
    <title>eBookShelf</title>
</head>
<body background="../images/background.jpg">
    <?php include('./header.php'); ?>
    <div width='100px'>
        <form action='../controller/logincheck.php' method="POST">
            <fieldset>
                <legend>
                    <b>LOG IN</b>
                </legend>
                <table align="center">
                    <tr>
                        <td align="right">Username:</td>
                        <td><input type='text' name='username'/></td>
                    </tr>
                    <tr>
                        <td align="right">Password:</td>
                        <td><input type='password' name='password'/></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2"><input type='submit' value="Log In"></td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2"><a href="./forgot.php">Forgot Password?</a></td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2"><a href="./forgot.php">Sign up</a></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </div>
</body>
</html>