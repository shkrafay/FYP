<?php $page = 'click';
include 'includes/header.php' ?>

<section class="hero-wrap hero-wrap-2" style="background-image:url(images/selfie.jpg)">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-2 bread">Click & Predict</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i
                        class="ion-ios-arrow-forward"></i></a></span> <a href="click-predict.php"><span>Predict <i
                        class="ion-ios-arrow-forward"></i></span></a></p>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section ftco-no-pb">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 course d-lg-flex ftco-animate">
                <div class="camera">
                    <video id="video">Video stream not available.</video>
                    <button id="startbutton">Take photo</button>
                </div>
<!--                <canvas id="canvas">-->
<!--                </canvas>-->
<!--                <div class="output">-->
<!--                    <img id="photo" alt="The screen capture will appear in this box.">-->
<!--                </div>-->
            </div>
            <div class="col-md-3"></div>
        </div>
        <div class="row" style="display: none">
            <div class="col-md-3"></div>
            <div class="col-md-6 course d-lg-flex ftco-animate">
                <div class="img" style="background-image:url(images/xcourse-1.jpg.pagespeed.ic.cfYJuZCQDo.jpg)"></div>
                <div class="text bg-light p-4">
                    <h3><a href="#">Arts Lesson</a></h3>
                    <p class="subheading"><span>Class time:</span> 9:00am - 10am</p>
                    <p>Separated they live in. A small river named Duden flows by their place and supplies it with the
                        necessary regelialia. It is a paradisematic country</p>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</section>
<?php include 'includes/footer.php' ?>