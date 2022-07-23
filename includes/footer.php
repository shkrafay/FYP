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
                        <li><a href="monitoring.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Monitoring</a></li>
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
<script>
    (function() {
        // The width and height of the captured photo. We will set the
        // width to the value defined here, but the height will be
        // calculated based on the aspect ratio of the input stream.

        let width = 320;    // We will scale the photo width to this
        let height = 0;     // This will be computed based on the input stream

        // |streaming| indicates whether or not we're currently streaming
        // video from the camera. Obviously, we start at false.

        let streaming = false;

        // The various HTML elements we need to configure or control. These
        // will be set by the startup() function.

        let video = null;
        let canvas = null;
        let photo = null;
        let startbutton = null;

        function showViewLiveResultButton() {
            if (window.self !== window.top) {
                // Ensure that if our document is in a frame, we get the user
                // to first open it in its own tab or window. Otherwise, it
                // won't be able to request permission for camera access.
                document.querySelector(".contentarea").remove();
                const button = document.createElement("button");
                button.textContent = "View live result of the example code above";
                document.body.append(button);
                button.addEventListener('click', () => window.open(location.href));
                return true;
            }
            return false;
        }

        function startup() {
            if (showViewLiveResultButton()) { return; }
            video = document.getElementById('video');
            canvas = document.getElementById('canvas');
            photo = document.getElementById('photo');
            startbutton = document.getElementById('startbutton');

            navigator.mediaDevices.getUserMedia({video: true, audio: false})
                .then(function(stream) {
                    video.srcObject = stream;
                    video.play();
                })
                .catch(function(err) {
                    console.log("An error occurred: " + err);
                });

            video.addEventListener('canplay', function(ev){
                if (!streaming) {
                    height = video.videoHeight / (video.videoWidth/width);

                    // Firefox currently has a bug where the height can't be read from
                    // the video, so we will make assumptions if this happens.

                    if (isNaN(height)) {
                        height = width / (4/3);
                    }

                    video.setAttribute('width', width);
                    video.setAttribute('height', height);
                    canvas.setAttribute('width', width);
                    canvas.setAttribute('height', height);
                    streaming = true;
                }
            }, false);

            startbutton.addEventListener('click', function(ev){
                takepicture();
                ev.preventDefault();
            }, false);

            clearphoto();
        }

        // Fill the photo with an indication that none has been
        // captured.

        function clearphoto() {
            const context = canvas.getContext('2d');
            context.fillStyle = "#AAA";
            context.fillRect(0, 0, canvas.width, canvas.height);

            const data = canvas.toDataURL('image/png');
            photo.setAttribute('src', data);
        }

        // Capture a photo by fetching the current contents of the video
        // and drawing it into a canvas, then converting that to a PNG
        // format data URL. By drawing it on an offscreen canvas and then
        // drawing that to the screen, we can change its size and/or apply
        // other changes before drawing it.

        function takepicture() {
            const context = canvas.getContext('2d');
            if (width && height) {
                canvas.width = width;
                canvas.height = height;
                context.drawImage(video, 0, 0, width, height);

                const data = canvas.toDataURL('image/png');
                photo.setAttribute('src', data);
            } else {
                clearphoto();
            }
        }

        // Set up our event listener to run the startup process
        // once loading is complete.
        window.addEventListener('load', startup, false);
    })();


</script>
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