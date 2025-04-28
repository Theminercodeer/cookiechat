<!DOCTYPE html>
<html>
    <head>
        <title>Cookie Crew</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="3199E2C8-1EE4-4937-AF3F-B1B4561025FD.ico">
        <link rel="stylesheet" media="screen and (max-width: 700px)" href="phone.css">
        <link rel="stylesheet" href="taskbar.css">
        <style>
            @keyframes blue-an {
                0% {color: aquamarine;}
                25% {color: rgb(3, 173, 173);}
                50% {color: aqua;}
                100% {color: aquamarine;}
            }
            body {
                background-image: linear-gradient(180deg, green, rgb(121, 68, 7))
            }
            .CookieHeader p {
                font-size: 2em;
                text-align: center;
                padding: 0;
                margin: 0;
                font-family: "Courgette", cursive;
                animation-name: blue-an;
                animation-duration: 10s;
                animation-iteration-count: infinite;
            }
            .CookieHeader {
                border: 2px;
                background-color: rgb(51, 51, 51);
                border-radius: 12px;
                border-style: ridge;
                width: 50%;
                margin-left: auto;
                margin-right: auto;
            }
            .chat-box {
                border: 3px solid black;
                margin-top: 10px;
                width: 50%;
                height: 85vh;
                margin-left: auto;
                margin-right: auto;
                border-radius: 20px;
                background-color: #b3b3b3;
                border-style: ridge;
            }
            .input-box-fixed {
                padding: 0;
                padding-bottom: 3.5%; 
                border: 2px solid transparent;
            }
            #input-box {
                margin-left: auto;
                margin-right: auto;
                width: 50%;
            }
            #type {
                border-radius: 20px;
                background-color: 6770F0;
                width: 43vw;
                height: 3vh
            }
        </style>
    </head>
    <body>
        <div id="taskbar">
            <div id="taskbar-left">
                <a>menu</a>
                <a>chat</a>
            </div>
        </div>

        <div class="CookieHeader">
            <p>Cookie Crew</p>
        </div>
        <div class="chat-box" id="cb-border">
        </div>
        <div class="input-box-fixed" id="input-box">
            <form action="" class="center-pass">
                <input type="text" id="type"> 
                <input type="submit" id="submit" value="→" style="border-radius: 20px; height: 3vh; font-size: 100%;">
            </form>

        </div>
    </body>



</html>
