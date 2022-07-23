<?php  $page = 'index';
include 'includes/header.php' ?>

<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image:url(images/bg1.jpg)">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center"
                 data-scrollax-parent="true">
                <div class="col-md-8 text-center ftco-animate">
                    <h1 class="mb-4">Facial expressions are <span>55% of Communication</span></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="slider-item" style="background-image:url(images/bg2.jpg)">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center"
                 data-scrollax-parent="true">
                <div class="col-md-8 text-center ftco-animate">
                    <h1 class="mb-4">Detect Your<span> Facial Expressions</span></h1>
                    <p><a href="click-predict.php" class="btn btn-secondary px-4 py-3 mt-3">Find Now</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-services ftco-no-pb">
    <div class="container-wrap">
        <div class="row no-gutters">
            <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-primary">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span><i class="fa fa-camera-retro" aria-hidden="true"></i></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Detect Emotions</h3>
                        <ul>
                            <li>Click / Upload image</li>
                            <li>Hit predict</li>
                            <li>Emotions of every face</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-tertiary">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Detect Boredom</h3>
                        <ul>
                            <li>Click / Upload image</li>
                            <li>Hit predict</li>
                            <li>Detect drowsiness</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-fifth">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span><i class="fa fa-video-camera" aria-hidden="true"></i></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Intelligent Monitoring</h3>
                        <ul>
                            <li>Analyze expressions in video.</li>
                            <li>Generates report of session.</li>
                            <li>Notify the user (If bored)</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-quarternary">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span><i class="fa fa-music" aria-hidden="true"></i></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Music for Mood</h3>
                        <ul>
                            <li>Detect Emotions in image.</li>
                            <li>Determine all expressions.</li>
                            <li>Suggest playlists accordingly.</li>
                        </ul>
                    </div>
                </div>
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
<section class="ftco-section ftco-no-pb">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4"><span>Classified</span> Expressions</h2>
                <p>There are seven emotional expressions
                    universal to people all over the world: happiness, sadness, surprise, fear, anger, disgust, and
                    contempt.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch"
                             style="background-image:url(images/h.jpg)"></div>
                    </div>
                    <div class="text pt-3 text-center">
                        <span class="position mb-2">Happy</span>
                        <div class="faded">
                            <!--                            <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>-->
                            <ul class="ftco-social text-center">
                                <li class="ftco-animate"><i class="fa-solid fa-face-laugh-beam"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch"
                             style="background-image:url(images/s.jpg)"></div>
                    </div>
                    <div class="text pt-3 text-center">
                        <span class="position mb-2">Sad</span>
                        <div class="faded">
                            <!--                            <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>-->
                            <ul class="ftco-social text-center">
                                <li class="ftco-animate"><i style="color: yellow" class="fa-solid fa-face-sad-tear"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch"
                             style="background-image:url(images/a.jpg)"></div>
                    </div>
                    <div class="text pt-3 text-center">
                        <span class="position mb-2">Anger</span>
                        <div class="faded">
                            <!--                            <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>-->
                            <ul class="ftco-social text-center">
                                <li class="ftco-animate"><i class="fa-solid fa-face-angry"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch"
                             style="background-image:url(images/sur.jpg)"></div>
                    </div>
                    <div class="text pt-3 text-center">
                        <span class="position mb-2">Surprise</span>
                        <div class="faded">
                            <!--                            <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>-->
                            <ul class="ftco-social text-center">
                                <li class="ftco-animate"><i class="fa-solid fa-face-surprise"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch"
                             style="background-image:url(images/f.jpg)"></div>
                    </div>
                    <div class="text pt-3 text-center">
                        <span class="position mb-2">Fear</span>
                        <div class="faded">
                            <!--                            <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>-->
                            <ul class="ftco-social text-center">
                                <li class="ftco-animate"><i class="fa-solid fa-face-fearful"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch"
                             style="background-image:url(images/d.jpg)"></div>
                    </div>
                    <div class="text pt-3 text-center">
                        <span class="position mb-2">Disgust</span>
                        <div class="faded">
                            <!--                            <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>-->
                            <ul class="ftco-social text-center">
                                <li class="ftco-animate"><i class="fa-solid fa-face-woozy"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch"
                             style="background-image:url(images/yawning-student.jpg)"></div>
                    </div>
                    <div class="text pt-3 text-center">
                        <span class="position mb-2">Drwosy</span>
                        <div class="faded">
                            <!--                            <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>-->
                            <ul class="ftco-social text-center">
                                <li class="ftco-animate"><i class="fa-solid fa-face-woozy"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch"
                             style="background-image:url(images/ximage_6.jpg.pagespeed.ic.JWa_lZT-6W.jpg)"></div>
                    </div>
                    <div class="text pt-3 text-center">
                        <span class="position mb-2">Active</span>
                        <div class="faded">
                            <!--                            <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>-->
                            <ul class="ftco-social text-center">
                                <li class="ftco-animate"><i class="fa-solid fa-face-woozy"></i></li>
                            </ul>
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
<section class="ftco-section ftco-counter img" id="section-counter" style="background-image:url(images/18300.jpg); background-attachment: fixed;"
         data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section heading-section-black ftco-animate">
                <h2 class="mb-4" style="color: #fda638"><span>Our</span> Models</h2>
                <p>These are our two models that classify the human expressions.</p>
            </div>
        </div>
        <div class="row d-md-flex align-items-center justify-content-center">
            <div class="col-lg-12">
                <div class="row d-md-flex align-items-center">
                    <div>
                        <div class="text"><span><h2 class="font-weight-bold" style="color: #fda638">CCN</h2></span></div>
                        <div class="text"><span>(Drowsiness Detection)</span></div>
                    </div>

                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">

                            <div class="icon"><span class="flaticon-doctor"></span></div>
                            <div class="text" >
                                <strong class="number" data-number="94">0</strong>
                                <span class="font-weight-bold">Accuracy</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="icon"><span class="flaticon-doctor"></span></div>
                            <div class="text">
                                <strong class="number" data-number="90">0</strong>
                                <span class="font-weight-bold" >Precision</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="icon"><span class="flaticon-doctor"></span></div>
                            <div class="text">
                                <strong class="number" data-number="99">0</strong>
                                <span class="font-weight-bold">Recall</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="icon"><span class="flaticon-doctor"></span></div>
                            <div class="text">
                                <strong class="number" data-number="93">0</strong>
                                <span class="font-weight-bold">F1 Score</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-md-flex align-items-center justify-content-center">
            <div class="col-lg-12">
                <div class="row d-md-flex align-items-center">
                    <div>
                        <div class="text"><span><h2 class="font-weight-bold" style="color: #fda638">DCCN</h2></span></div>
                        <div class="text"><span>(Emotion Detection)</span></div>
                    </div>

                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="icon"><span class="flaticon-doctor"></span></div>
                            <div class="text">
                                <strong class="number" data-number="78">0</strong>
                                <span class="font-weight-bold">Accuracy</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="icon"><span class="flaticon-doctor"></span></div>
                            <div class="text">
                                <strong class="number" data-number="77">0</strong>
                                <span class="font-weight-bold">Precision</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="icon"><span class="flaticon-doctor"></span></div>
                            <div class="text">
                                <strong class="number" data-number="75">0</strong>
                                <span class="font-weight-bold">Recall</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="icon"><span class="flaticon-doctor"></span></div>
                            <div class="text">
                                <strong class="number" data-number="79">0</strong>
                                <span class="font-weight-bold">F1 Score</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4"><span>Recent</span> Blog</h2>
                <p>Separated they live in. A small river named Duden flows by their place and supplies it with the
                    necessary regelialia. It is a paradisematic country</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20 d-flex align-items-end"
                       style="background-image:url(images/ximage_1.jpg.pagespeed.ic.GfOOGISj5K.jpg)">
                        <div class="meta-date text-center p-2">
                            <span class="day">27</span>
                            <span class="mos">January</span>
                            <span class="yr">2019</span>
                        </div>
                    </a>
                    <div class="text bg-white p-4">
                        <h3 class="heading"><a href="#">Skills To Develop Your Child Memory</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                        <div class="d-flex align-items-center mt-4">
                            <p class="mb-0"><a href="#" class="btn btn-secondary">Read More <span
                                    class="ion-ios-arrow-round-forward"></span></a></p>
                            <p class="ml-auto mb-0">
                                <a href="#" class="mr-2">Admin</a>
                                <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20 d-flex align-items-end"
                       style="background-image:url(images/ximage_2.jpg.pagespeed.ic.HLtXX9Vpl-.jpg)">
                        <div class="meta-date text-center p-2">
                            <span class="day">27</span>
                            <span class="mos">January</span>
                            <span class="yr">2019</span>
                        </div>
                    </a>
                    <div class="text bg-white p-4">
                        <h3 class="heading"><a href="#">Skills To Develop Your Child Memory</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                        <div class="d-flex align-items-center mt-4">
                            <p class="mb-0"><a href="#" class="btn btn-secondary">Read More <span
                                    class="ion-ios-arrow-round-forward"></span></a></p>
                            <p class="ml-auto mb-0">
                                <a href="#" class="mr-2">Admin</a>
                                <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20 d-flex align-items-end"
                       style="background-image:url(images/ximage_3.jpg.pagespeed.ic.wJszX91lUA.jpg)">
                        <div class="meta-date text-center p-2">
                            <span class="day">27</span>
                            <span class="mos">January</span>
                            <span class="yr">2019</span>
                        </div>
                    </a>
                    <div class="text bg-white p-4">
                        <h3 class="heading"><a href="#">Skills To Develop Your Child Memory</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                        <div class="d-flex align-items-center mt-4">
                            <p class="mb-0"><a href="#" class="btn btn-secondary">Read More <span
                                    class="ion-ios-arrow-round-forward"></span></a></p>
                            <p class="ml-auto mb-0">
                                <a href="#" class="mr-2">Admin</a>
                                <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'includes/footer.php' ?>

