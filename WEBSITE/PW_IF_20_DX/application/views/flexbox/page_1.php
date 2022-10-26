<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 1</title>
    <style>
        .container {
            border: 5px solid #ffcc5c;
            display: flex;
            justify-content: flex-end; /* try to change this to center for example */
        }

        .home {
            margin-right: auto;
        }

        .container > a {
            padding: 10px;
            text-align: center;
            font-size: 2em;
            color: #ffeead;
        }

        html, body {
            background-color: #ffeead;
            margin: 10px;
        }
        .tengah {
            flex: 1;
        }

        a {
            text-decoration: none;
        }

        .container > a:nth-child(1) {
            background-color: #96ceb4;	
        }

        .container > a:nth-child(2) {
            background-color: #ff6f69;
        }

        .container > a:nth-child(3) {
            background-color: #88d8b0;
        }

    </style>
</head>
<body>
    <nav class="container">
        
        <a href="<?php echo site_url('Tugas') ?>">HOME</a>
        <a href="#" class="tengah">SEARCH</a>
        <a href="#">LOGOUT</a>
    </nav>
    <div>Apa itu Flexbox ?</div>
</body>
</html>