<?php  $page = 'about';
include 'includes/header.php' ?>
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
<?php include 'includes/footer.php' ?>