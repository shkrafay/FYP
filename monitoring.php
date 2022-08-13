<?php $page = 'monitor';
include 'includes/header.php' ?>
    <section class="hero-wrap hero-wrap-2" style="background-image:url(images/Monitoring.jpg)">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Intelligent Monitoring</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i
                                        class="ion-ios-arrow-forward"></i></a></span> <a href="monitoring.php"><span>Monitoring <i
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
                            class="text-center btn btn-tertiary px-3" id="stop-btn">Stop & Analyze
                    </button>
                </div>
                <div class="col-md-12 mb-5">
                    <div id="initial-btns">
                        <button class="text-center btn btn-primary px-4 py-2" id="start-camera">Start Monitoring
                        </button>
                    </div>
                </div>
                <div class="col-12 mb-5" id="div-canvas" style="display: none; margin-left: auto; margin-right: auto; ">
                    <canvas id="canvas" style="position: relative" width="450" height="350">
                        <div class="output">
                            <img id="photo" alt="The screen capture will appear in this box.">
                        </div>
                    </canvas>
                    <p style="display: none" id="loader">loading...</p>

                    <button style="position: absolute; object-fit: cover; margin-left: -300px; margin-top: 306px"
                            class="text-center btn btn-tertiary px-3" id="check-expression">Check Expressions
                    </button>
                </div>
                <span id="res"></span>
            </div>
        </div>
    </section>
    <script>
        let stream = null;
        let image_data_url = null
        let fileData = null;
        let bool = true;
        let interval = null;
        let camera_button = document.querySelector("#start-camera");
        let video = document.querySelector("#video");
        let stop_button = document.querySelector("#stop-btn");
        let canvas = document.querySelector("#canvas");
        let twoD = canvas.getContext('2d');
        let check_expression = document.querySelector("#check-expression")
        let photo = document.getElementById('photo');
        let class_labels = ['Disgust', 'Angry', 'Happy', 'Sad', 'Surprise', 'Neutral']
        let drowsy = ['Active', 'Drowsy']

        camera_button.addEventListener('click', async function () {
            document.getElementById("vide-sec").style.display = "block";
            document.getElementById("initial-btns").style.display = "none";
            stream = await navigator.mediaDevices.getUserMedia({video: true, audio: false});
            video.srcObject = stream;
            let i = 0;
            while (i < 2) {
                myLoop();
                i++;
            }
        });

        function myLoop() {
            setTimeout(abc, 8000)
        }

        function abc() {
            twoD.drawImage(video, 0, 0, canvas.width, canvas.height);
            image_data_url = canvas.toDataURL('image/jpeg').replace("image/png", "image/octet-stream");
            console.log(image_data_url);
        }


        // stop_button.addEventListener('click', function () {
        //
        //     // document.getElementById("div-canvas").style.display = "block";
        //     // twoD.drawImage(video, 0, 0, canvas.width, canvas.height);
        //     // image_data_url = canvas.toDataURL('image/jpeg').replace("image/png", "image/octet-stream");
        //     // stream.getTracks()[0].stop();
        //     // document.getElementById("vide-sec").style.display = "none"
        // });
        check_expression.addEventListener('click', function () {
            document.getElementById("loader").style.display = "block";
            const blob = dataURItoBlob(image_data_url);
            const data = sendData("http://3.82.119.56:8000/api/getfaceslist/", blob);
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
            ).then(d => {
                console.log(d);
                document.getElementById("loader").style.display = "none";
                for (var i = 0; i < d.length; i++) {
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
                    twoD.strokeStyle = '#00FF00';
                    twoD.stroke();
                }
            });
        }
    </script>
<?php include 'includes/footer.php' ?>