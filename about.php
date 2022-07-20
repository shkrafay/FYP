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
                <li class="nav-item"><a href="index.php" class="nav-link pl-0">Home</a></li>
                <li class="nav-item"><a href="click-predict.php" class="nav-link">Click & Predict</a></li>
                <li class="nav-item"><a href="monitoring.php" class="nav-link">Intelligent Monitoring</a></li>
                <li class="nav-item"><a href="music.php" class="nav-link">Music for Mood</a></li>
                <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
                <li class="nav-item active"><a href="about.php" class="nav-link">About</a></li>
            </ul>
        </div>
    </div>
</nav>
<section class="hero-wrap hero-wrap-2" style="background-image:url(images/6316.jpg)">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-2 bread">About Us</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i
                        class="ion-ios-arrow-forward"></i></a></span> <a href="about.php"><span>About<i
                        class="ion-ios-arrow-forward"></i></span></a></p>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section ftco-no-pt ftc-no-pb">
    <div class="container">
        <div class="row">
            <div class="col-md-5 order-md-last wrap-about py-5 wrap-about bg-light">
                <div class="text px-4 ftco-animate">
                    <h2 class="mb-4">Abstract of project</h2>
                    <p>Humans usually employ different cues to express their expressions, such as facial expressions,
                        hand gestures and voice. Facial expressions represent up to 55% of human communication while
                        other ways such as oral language are allocated a mere 7% of emotional expression. Therefore,
                        considering facial expressions in an HRI system successfully simulates natural interactions.
                        Indeed, machines can easily interact with humans in as friendly a way as possible when they can
                        analyze facial expressions and figure out their emotional states.</p>
                    <p>We have described our solution which is a hybrid machine learning system that incorporates deep
                        neural networks and other classifiers.</p>
                    <p>Experimental results show that the stated system achieves 78.27% accuracy and 94.06% accuracy on
                        the emotions classifier and drowsiness detector respectively.
                    </p></div>
            </div>
            <div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
                <h2 class="mb-4">Steps Performed</h2>
                <p>Initially, our application would perform these steps to classify human expressions.</p>
                <div class="row mt-5">
                    <div class="col-lg-6">
                        <div class="services-2 d-flex">
                            <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span><i
                                    class="fa fa-camera" aria-hidden="true"></i></span></div>
                            <div class="text">
                                <h3>Take Image</h3>
                                <p>Upload image from PC / Take image from camera.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="services-2 d-flex">
                            <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span><i
                                    class="fa fa-crop" aria-hidden="true"></i></span></div>
                            <div class="text">
                                <h3>Crop to 48*48</h3>
                                <p>Reduce the pixels.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="services-2 d-flex">
                            <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span><i
                                    class="fa fa-filter" aria-hidden="true"></i></span></div>
                            <div class="text">
                                <h3>Grey Scale it</h3>
                                <p>Convert the RGB image into greyscale.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="services-2 d-flex">
                            <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span><i
                                    class="fa fa-paper-plane" aria-hidden="true"></i></span></div>
                            <div class="text">
                                <h3>Pass to API</h3>
                                <p>Pass the pre-processing image to our pre-trained models.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="services-2 d-flex">
                            <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span><i
                                    class="fa fa-cogs" aria-hidden="true"></i></span></div>
                            <div class="text">
                                <h3>Get predictions</h3>
                                <p>Our models classify the expression from image.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="services-2 d-flex">
                            <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span><i
                                    class="fa fa-smile" aria-hidden="true"></i></span></div>
                            <div class="text">
                                <h3>Display</h3>
                                <p>Prediction display to the end-user.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4"><span>Related</span> Work</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 course d-lg-flex ftco-animate">
                <div class="img" style="background-image:url(images/pdf.png); width: 150px; height: 200px"></div>
                <div class="text bg-light p-4">
                    <h4>
                        <a href="https://proceedings.neurips.cc/paper/2016/file/b73dfe25b4b8714c029b37a6ad3006fa-Paper.pdf">Doubly
                            Convolutional Neural Networks</a></h4>
                    <p class="subheading"><span style="color: black">Shuangfei Zhai , Yu Cheng , Weining Lu , Zhongfei (Mark) Zhang </span>
                    </p>
                    <p> In this paper, we propose doubly convolutional neural networks (DCNNs), which significantly
                        improve the performance
                        of CNNs by further exploring this idea.</p>
                </div>
            </div>
            <div class="col-md-6 course d-lg-flex ftco-animate">
                <div class="img" style="background-image:url(images/pdf.png); width: 150px; height: 200px"></div>
                <div class="text bg-light p-4">
                    <h4>
                        <a href="https://www.researchgate.net/publication/317487657_Emotion_recognition_using_facial_expressions">Emotion
                            Recognition Using Facial Expression</a></h4>
                    <p class="subheading"><span style="color: black">Pawel Tarnowski , Marcin Kolodziej , Andrrzej Majkowski</span>
                    </p>
                    <p>In this article there are presented the result of recognition of seven emotional states based on
                        facial expression.</p>
                </div>
            </div>
            <div class="col-md-6 course d-lg-flex ftco-animate">
                <div class="img" style=" background-image:url(images/pdf.png); width: 150px; height: 200px"></div>
                <div class="text bg-light p-4">
                    <h4><a href="https://citeseerx.ist.psu.edu/viewdoc/download?doi=10.1.1.406.8560&rep=rep1&type=pdf">Detecting
                        Boredom in Meetings</a></h4>
                    <p class="subheading"><span style="color: black">Stefan Kroes</span></p>
                    <p> It presents signs of boredom that
                        where observed from the meeting video corpus from the AMI
                        project at the University of Twente.</p>
                </div>
            </div>
            <div class="col-md-6 course d-lg-flex ftco-animate">
                <div class="img" style="background-image:url(images/pdf.png); width: 150px; height: 200px"></div>
                <div class="text bg-light p-4">
                    <h4><a href="http://cs230.stanford.edu/projects_winter_2020/reports/32610274.pdf">FER with Deep
                        Learning</a></h4>
                    <p class="subheading"><span style="color: black">Amil Khanzada , Charles Bai , Ferhat Turker Celepcikay</span>
                    </p>
                    <p>In this paper, we
                        take a deep dive, implementing multiple deep learning models
                        for facial expression recognition (FER). Our goals are twofold:
                        we aim not only to maximize accuracy, but also to apply our
                        results to the real-world.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-gallery">
    <div class="container-wrap">
        <div class="row no-gutters">
            <div class="col-md-3 ftco-animate">
                <span class="gallery img d-flex align-items-center"
                      style="background-image:url(images/happy-girl.jpg)">
                </span>
            </div>
            <div class="col-md-3 ftco-animate">
                <span class="gallery img d-flex align-items-center"
                      style="background-image:url(images/sleepy-man.jpg)">
                </span>
            </div>
            <div class="col-md-3 ftco-animate">
                <span class="gallery img d-flex align-items-center"
                      style="background-image:url(images/shocked-man.jpg)">
                </span>
            </div>
            <div class="col-md-3 ftco-animate">
                <span class="gallery img d-flex align-items-center"
                      style="background-image:url(images/angry-girl.jpg)">
                </span>
            </div>
        </div>
    </div>
</section>
<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6 col-lg-5">
                <div class="ftco-footer-widget mb-5">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">GIFT University, near GIFT University Chowk, Lohian Wala, Gujranwala, Punjab 52250</span>
                            </li>
                            <li><a href="#"><span class="icon icon-phone"></span><span
                                    class="text">+92 300 1234567</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span class="text"><span
                                    class="__cf_email__" data-cfemail="f39a9d959cb38a9c8681979c9e929a9ddd909c9e">[181370137@gift.edu.pkover]</span></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-5 ml-md-4">
                    <h2 class="ftco-heading-2">Links</h2>
                    <ul class="list-unstyled">
                        <li><a href="index.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                        <li><a href="click-predict.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Click & Predict</a></li>
                        <li><a href="monitoring.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Deparments</a></li>
                        <li><a href="blog.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
                        <li><a href="music.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
                        <li><a href="about.php"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-5">
                    <h2 class="ftco-heading-2">Subscribe Us!</h2>
                    <form action="#" class="subscribe-form">
                        <div class="form-group">
                            <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                            <input type="submit" value="Subscribe" class="form-control submit px-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js%2bpopper.min.js%2bbootstrap.min.js.pagespeed.jc.6rS3Cn6ZxM.js"></script>
<script>eval(mod_pagespeed_YgNxllFXD4);</script>
<script>eval(mod_pagespeed_UDmpTSObsH);</script>
<script>eval(mod_pagespeed_uRER00OAmW);</script>
<script src="js/jquery.easing.1.3.js%2bjquery.waypoints.min.js%2bjquery.stellar.min.js%2bowl.carousel.min.js.pagespeed.jc.Mgo9OYOi5G.js"></script>
<script>eval(mod_pagespeed_1gCYGiHbM9);</script>
<script>eval(mod_pagespeed_8EvmmGDyCK);</script>
<script>eval(mod_pagespeed_1DoCc_EEAp);</script>
<script>eval(mod_pagespeed_2mnIkk1i4p);</script>
<script src="js/jquery.magnific-popup.min.js%2baos.js%2bjquery.animateNumber.min.js%2bscrollax.min.js%2bgoogle-map.js%2bmain.js.pagespeed.jc.eIhfEvsAmk.js"></script>
<script>eval(mod_pagespeed_bGDXmnGcnW);</script>
<script>eval(mod_pagespeed_UGjS7Lz9kp);</script>
<script>eval(mod_pagespeed_kYUzhmgmTg);</script>
<script>eval(mod_pagespeed_jIUsHblPht);</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script>
<script>eval(mod_pagespeed_E5v$mbbxth);</script>
<script>eval(mod_pagespeed_wBb5LK83Ja);</script>
</body>

</html>
