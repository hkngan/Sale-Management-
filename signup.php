<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/signup.css">
    <title>Sign up</title>
</head>

<body>
    <div class="overlay">
        <form method="post" action="reg.php">
            <div class="all">
                <header class="head">
                    <h2>Sign up</h2>
                    <p>You don't have an account? Create now!</p>
                </header>
                <br>
                <div>
                    <input class="form-input" id="f" name="fullname" type="text" placeholder="Fullname" required>
                    <br>
                    <input class="form-input" id="u" name="username" type="text" placeholder="@UserName" required>
                    <br>
                    <input class="form-input" id="p" name="password" type="password" placeholder="Password" required>
                    <br>
                    <!-- <input class="form-input" id="txt-ques" name="question" type="text" placeholder="Security Question" required>
                    <br>
                    <input class="form-input" id="txt-ans" name="answer" type="text" placeholder="Answer" required>
                    <br> -->
                </div>
                <div class="others">
                    <button type="submit" name="btn-reg" class="cre">Create</button>
                    <button class="cc" type="reset">Cancle</button>
                </div>
            </div>
        </form>

    </div>
</body>

</html>