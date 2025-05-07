<!DOCTYPE html>

<html>

    <head>

        <title>Cookie Crew</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="image/gem.ico">
        <link rel="stylesheet" href="css/main.css">

    </head>
    <style>
    .taskbar {
        position: fixed;
        margin-left: auto;
        margin-right: auto;
        width: 98.5%;
        margin: 0;
        padding: 0;
        background-color: #3A59D1;
        border-style: outset;
        margin-bottom: 1%;
        border-radius: 20px;
        overflow: hidden;
        z-index: 10;
    }
    .taskbar a:hover {
        background: white;
        color: black;
        
    }
    @media (max-width: 700px) {
        .taskbar {
            width: 96%;
        }
    }

    .taskbar a {
        overflow: hidden;
        float: left;
        display: block;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        color: white;

    }

    
    .dprofile {
        float: right;
        overflow: hidden;
    }
    .dprofile {
        float: right;
        margin: 0;
        padding: 10px 30px;
        border: none;
        outline: none;
        background-color: transparent;
        background-repeat: no-repeat;
        background-size: 40px 40px;
    }
    
    .profile {
        margin: 0;
        padding: 10px 30px;
        border: none;
        outline: none;
        background-image: url("image/black_gem.png");
        background-color: transparent;
        background-repeat: no-repeat;
        background-size: 40px 40px;
        size: 100px;
    }
    .gem {
        float: right;
    }
    .usermenu {
        border: 2px solid purple;
        border-bottom: 4px solid black;
        padding-top: 20%;
        max-width: 10%;
        list-style-type: none;
        border-radius: 20px;
        overflow: hidden;
        background-color: purple;
        position: fixed;
    }
    .usermenu ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        margin-bottom: 10px;
        
    }
    .usermenu li {
        padding: 10px 15px;
        display: block;
    }
    .usermenu a {
        overflow: hidden;
        text-align: center;
    }
    .usermenu a:hover {
        color: rgb(255, 255, 255);
        border-left: 5px solid black;
    }
    </style>
<body>
    <div class="taskbar">
            <a href='/home.php'>Home</a>
            <a href='#'>Chat</a>
            <a href='#'>News</a>
            <div class="gem">
                <button type="button" onclick="gemMenu()">hi how are you?</button>
            </div>
            
    </div>
    <div class="usermenu">
        <ul>
            <li><a>Username</a></li>
            <li><a>Logout</a></li>
        </ul>
    </div>
    <script>
        function gemMenu() {
            document.body.style.backgroundColor = "green";

        }
    </script>
</body>
</html>
