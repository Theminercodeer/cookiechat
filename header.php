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
    overflow: hidden;
    margin-left: auto;
    margin-right: auto;
    width: 99%;

    margin: 0;

    padding: 0;

    background-color: #3A59D1;

    border-style: outset;

    margin-bottom: 1%;

    border-radius: 20px;

}

@media (max-width: 700px) {
    .taskbar {
        width: 96%;
    }
}




      .taskbar a {
         float: left;
         display: block;

         color: white;

          text-align: center;

          padding: 14px 16px;

          text-decoration: none;

       }

    
        .dprofile {
            float: right;
            overflow: hidden;
        }
        .dprofile .profile {
            float: right;
            margin: 0;
            padding: 10px 30px;
            border: none;
            outline: none;
            background-image: url("image/black_gem.png");
            background-color: transparent;
            background-repeat: no-repeat;
            background-size: 40px 40px;
        }
        
       .taskbar a:hover {
           background: white;
       }

       .taskbar a:hover {
           color: black;
       }
        
        .mprofile {
            display: none;
            position: absolute;
            background-color: purple;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 10;
        }
        .mprofile a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none; 
            display: block;
            text-align: right;
        } 
        .dprofile:hover .mprofile {
            display: block;
        }
    </style>
<body>
    <div class='taskbar'>
            <a href='/home.php'>Home</a>
            <a href='#'>Chat</a>
            <a href='#'>News</a>
            <div class="dprofile">
                  <button class="profile"></button>
                  <div class="mprofile">
                       <a>Username</a>
                       <a>Profile</a>
                  </div>
            </div>
    </div>
</body>
</html>
