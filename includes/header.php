<!DOCTYPE html>
<html lang="en">

<head>
    <title>Expressions</title>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
          integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <style>
        #video {
            border: 1px solid black;
            box-shadow: 2px 2px 3px black;
            width:400px;
            height:300px;
        }

        #photo {
            border: 1px solid black;
            box-shadow: 2px 2px 3px black;
            width:400px;
            height:300px;
        }

        #canvas {
            display:none;
        }

        .camera {
            width: 340px;
            display:inline-block;
        }

        .output {
            width: 340px;
            display:inline-block;
            vertical-align: top;
        }

    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex align-items-center">
        <a class="navbar-brand" style="font-family: 'Shadows Into Light', cursive;" href="index.php">Facial Sentiment
            Analyzer</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?php if($page == 'index') echo 'active'; ?>"><a href="index.php" class="nav-link pl-0">Home</a></li>
                <li class="nav-item <?php if($page == 'click') echo 'active'; ?>"><a href="click-predict.php" class="nav-link">Click & Predict</a></li>
                <li class="nav-item <?php if($page == 'monitor') echo 'active'; ?>"><a href="monitoring.php" class="nav-link">Intelligent Monitoring</a></li>
                <li class="nav-item <?php if($page == 'music') echo 'active'; ?>"><a href="music.php" class="nav-link">Music for Mood</a></li>
                <li class="nav-item <?php if($page == 'blog') echo 'active'; ?>"><a href="blog.php" class="nav-link">Blog</a></li>
                <li class="nav-item <?php if($page == 'about') echo 'active'; ?>"><a href="about.php" class="nav-link">About</a></li>
            </ul>
        </div>
    </div>
</nav>
