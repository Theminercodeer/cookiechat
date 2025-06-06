<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body {
                background-position: top left;
                animation: mymove 30s infinite;
                background: linear-gradient(152deg, rgba(16, 45, 89, 1) 30%, rgba(6, 72, 163, 1) 68%, rgba(0, 212, 255, 1) 97%);
                background-size: cover;
            }
            #login-pass-box {
                padding: 4%;
                border: 4px solid black;
                width: 15vw;
                margin-left: auto;
                margin-right: auto;
                height: 20vh;
                margin-top: 20vh;
                background-color: white;
                border-radius: 20px;
                border-style: outset;

            }
            #password, #fname{
                width: 10vw;
                padding: 0;
                margin: 0;
                margin-right: auto;
                width: 14.5vw;
                height: 2vh;
            }
            #enter-password {
                border: 1px solid black;
            }
            .pass-center {
                padding-top: 10%;
                border: 2px solid transparent;
            }
            input {
                border-radius: 20px;
            }
            #gem-background {

            }
            @keyframes mymove {
                50% {background-position: center;}
            }
        </style>
    </head>
    <body>
        <div id="gem-background"></div>
        <div id="login-pass-box">
            <form action="chat.html" class="pass-center">
                <label for="fname">Username:</label><br>
                <input type="text" id="fname" name="fname"><br>
                <label for="text" name="password">Password:</label><br>
                <input type="password" id="password" name="password"><br>
                <input type="submit" value="Enter" id="enter-password">
            </form>
        </div>

</html>
