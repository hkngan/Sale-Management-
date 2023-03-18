<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="forgotpass.css">
    <title>Forgot Password</title>
</head>

<body>
    <div class="all">
        <form>
            <div class="box">
                <header class="head">
                    <h2>You have trouble when you login?</h2> <br>
                    <p>Using your username to change password.</p>
                </header>
                <div>
                    <input class="input-type" id="username" type="text" placeholder="@username" required>
                    <br>
                    <input class="input-type" id="ser_que" type="text" placeholder="Security Question" required>
                    <br>
                    <input class="input-type" id="ans" type="text" placeholder="Answer" required>
                    <br>
                    <input class="input-type" id="pass" type="password" placeholder="Password" required>
                    <br>
                    <input class="input-type" id="comf" type="password" placeholder="Comfirm password" required>
                    <div class="others">
                        <button class="submits change" >Change
                            Password</button>
                        <button class="submits cancle" type="reset">Cancle</button>
                    </div>
                </div>
            </div>
        </form>

    </div>
</body>

</html>