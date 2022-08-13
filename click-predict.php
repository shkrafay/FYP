<?php $page = 'click';
include 'includes/header.php' ?>
    <style>
        spinner-border {

        to {
            transform: rotate(360deg)
        }

        }
        @keyframes spinner-border {
            to {
                transform: rotate(360deg)
            }
        }

        .spinner-border {
            display: inline-block;
            width: 2rem;
            height: 2rem;
            vertical-align: -.125em;
            border: .25em solid currentColor;
            border-right-color: transparent;
            border-radius: 50%;
            -webkit-animation: .75s linear infinite spinner-border;
            animation: .75s linear infinite spinner-border
        }

        .spinner-border-sm {
            width: 1rem;
            height: 1rem;
            border-width: .2em
        }

        @-webkit-keyframes spinner-grow {
            0% {
                transform: scale(0)
            }
            50% {
                opacity: 1;
                transform: none
            }
        }

        @keyframes spinner-grow {
            0% {
                transform: scale(0)
            }
            50% {
                opacity: 1;
                transform: none
            }
        }

        .spinner-grow {
            display: inline-block;
            width: 2rem;
            height: 2rem;
            vertical-align: -.125em;
            background-color: currentColor;
            border-radius: 50%;
            opacity: 0;
            -webkit-animation: .75s linear infinite spinner-grow;
            animation: .75s linear infinite spinner-grow
        }

        .spinner-grow-sm {
            width: 1rem;
            height: 1rem
        }

        @media (prefers-reduced-motion: reduce) {
            .spinner-border, .spinner-grow {
                -webkit-animation-duration: 1.5s;
                animation-duration: 1.5s
            }
        }
    </style>
    <section class="hero-wrap hero-wrap-2" style="background-image:url(images/selfie-1.jpg)">
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
        <div class="container mb-5">
            <div class="row">
                <div class="col-md-12 text-center" id="vide-sec" style="display: none;">
                    <video style="position: relative" id="video" width="450" height="350" autoplay></video>
                    <button style="position: absolute; object-fit: cover; margin-left: -280px; margin-top: 300px"
                            class="text-center btn btn-tertiary px-3" id="click-photo">Click Photo
                    </button>
                </div>
                <div class="col-md-12 mb-5">
                    <div class="row" id="initial-btns">
                        <div class="col-md-6 mb-3">
                            <button class="text-center btn btn-primary px-4 py-2 float-lg-right" id="start-camera">Take
                                an Image
                            </button>
                        </div>
                        <style>
                            input[type="file"] {
                                display: none;
                            }
                        </style>
                        <div class="col-md-6 mb-3">
                            <label class="text-center btn btn-secondary px-4 py-2" >
                                <input type="file" accept="image/png, image/gif, image/jpeg">
                                <i class="fa fa-cloud-upload"></i> Custom Upload
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-5" id="div-canvas" style="display: none; margin-left: auto; margin-right: auto; ">
                    <canvas id="canvas" style="position: relative" width="450" height="350">
                        <div class="output">
                            <img id="photo" alt="The screen capture will appear in this box.">
                        </div>
                    </canvas><p style="display: none" id="loader">loading...</p>

                    <button style="position: absolute; object-fit: cover; margin-left: -300px; margin-top: 306px"
                            class="text-center btn btn-tertiary px-3" id="check-expression">Check Expressions
                    </button>
                </div>
                <span id="res"></span>
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>
        let stream = null;
        let image_data_url = null
        let fileData = null;
        let camera_button = document.querySelector("#start-camera");
        let video = document.querySelector("#video");
        let click_button = document.querySelector("#click-photo");
        let canvas = document.querySelector("#canvas");
        let twoD = canvas.getContext('2d');
        let check_expression = document.querySelector("#check-expression")
        let photo = document.getElementById('photo');
        let class_labels = ['Disgust', 'Angry', 'Happy', 'Sad', 'Surprise', 'Neutral']
        let drowsy = ['Active','Drowsy']

        camera_button.addEventListener('click', async function () {
            document.getElementById("vide-sec").style.display = "block";
            document.getElementById("initial-btns").style.display = "none";
            stream = await navigator.mediaDevices.getUserMedia({video: true, audio: false});
            video.srcObject = stream;
        });

        click_button.addEventListener('click', function () {
            document.getElementById("div-canvas").style.display = "block";
            twoD.drawImage(video, 0, 0, canvas.width, canvas.height);
            image_data_url = canvas.toDataURL('image/jpeg').replace("image/png", "image/octet-stream");
            stream.getTracks()[0].stop();
            document.getElementById("vide-sec").style.display = "none"
        });
        check_expression.addEventListener('click', function () {
            document.getElementById("loader").style.display="block";
            const blob = dataURItoBlob(image_data_url);
            const data = sendData("http://54.197.39.75:8000/api/getfaceslist/", blob);
            console.log(data);
        });


        function dataURItoBlob(dataURI) {
            // convert base64/URLEncoded data component to raw binary data held in a string
            var byteString;
            if (dataURI.split(',')[0].indexOf('base64') >= 0)
                byteString = atob(dataURI.split(',')[1]);
            else
                byteString = unescape(dataURI.split(',')[1]);

            // separate out the mime component
            var mimeString = dataURI.split(',')[0].split(':')[1].split(';')[0];

            // write the bytes of the string to a typed array
            var ia = new Uint8Array(byteString.length);
            for (var i = 0; i < byteString.length; i++) {
                ia[i] = byteString.charCodeAt(i);
            }

            return new Blob([ia], {type: mimeString});
        }

        async function sendData(url, data) {
            const formData = new FormData();
            formData.append("image", data);

            await fetch(url, {
                dataType: 'file',
                contentType: 'multipart/form-data',
                processData: false,
                method: 'POST',
                body: formData
            }).then(r =>
                r.json()
            ).then(d=>{
                console.log(d);

                // const prev=JSON.parse(localStorage.getItem("image"))
                // localStorage.setItem("image",JSON.stringify([...prev,...d]))

                document.getElementById("loader").style.display="none";
                for(var i=0;i<d.length;i++){
                    let pred = class_labels[d[i]?.pred]
                    let detc = drowsy[d[i]?.detc]
                    let x = d[i]?.coord?.x;
                    let y = d[i]?.coord?.y
                    let w = d[i]?.coord?.w;
                    let h = d[i]?.coord?.h;
                    twoD.font = "bold 18px verdana, sans-serif "
                    twoD.fillStyle = "#ff0000";
                    twoD.fillText(`${pred}, ${detc}`, x, y);
                    twoD.beginPath();
                    twoD.rect(x, y, w, h);
                    twoD.strokeStyle ='#00FF00';
                    twoD.stroke();
                }
            });
        }
    </script>
<?php include 'includes/footer.php' ?>