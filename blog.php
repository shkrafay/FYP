<?php $page = 'blog';
$file = fopen("files/happyBlog.csv", "r");
$firstElement = true;
include 'includes/header.php';
?>
    <section class="hero-wrap hero-wrap-2" style="background-image:url(images/reading.jpg)">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Our Blog</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i
                                        class="ion-ios-arrow-forward"></i></a></span> <a href="blog.php"><span>Blog <i
                                        class="ion-ios-arrow-forward"></i></span></a></p>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            <?php
            while (!feof($file)) {
                $array_1 = fgetcsv($file);
                if ($firstElement) {
                    $firstElement = false;
                } else if ($array_1[1] != "") {
                    ?>
                    <div class="col-md-6 col-lg-4 ftco-animate">
                        <div class="blog-entry card" style="height:75%">
                            <a href="#" class="block-20 d-flex align-items-end"
                               style="background-image:url(<?php
                               if (is_null($array_1[4]) || strlen($array_1[4]) < 10) {
                                   echo 'images/img-rep.jpg';
                               } else {
                                   echo $array_1[4];
                               } ?>)">
                                <div class="meta-date text-center p-2">
                                    <span class="day">27</span>
                                    <span class="mos">January</span>
                                    <span class="yr">2019</span>
                                </div>
                            </a>
                            <div class="text bg-white p-4">
                                <h3 class="heading"><a href="#"><?php echo $array_1[1]; ?></a></h3>
                                <p><?php echo substr($array_1[2], 0, 120); ?>...</p>
                                <div class="d-flex align-items-center mt-4">
                                    <p class="mb-0 font-weight-bold">Writer:</p>
                                    <p class="ml-auto mb-0">
                                        <span class="mr-2"><?php echo $array_1[0]; ?></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            fclose($file);
            ?>
        </div>
        <br> <br>
        <!--        <div class="row no-gutters my-5">-->
        <!--            <div class="col text-center">-->
        <!--                <div class="block-27">-->
        <!--                    <ul>-->
        <!--                        <li><a href="#"><i class="ion-ios-arrow-back"></i></a></li>-->
        <!--                        <li class="active"><span>1</span></li>-->
        <!--                        <li><a href="#">2</a></li>-->
        <!--                        <li><a href="#">3</a></li>-->
        <!--                        <li><a href="#">4</a></li>-->
        <!--                        <li><a href="#">5</a></li>-->
        <!--                        <li><a href="#"><i class="ion-ios-arrow-forward"></i></a></li>-->
        <!--                    </ul>-->
        <!--                </div>-->
        <!--    </div>-->
        <!--    </div>-->
    </div>
<?php include 'includes/footer.php' ?>