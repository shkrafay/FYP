<?php $page = 'click';
include 'includes/header.php' ?>
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
                        <div class="col-md-6 mb-3">
                            <button class="text-center btn btn-secondary px-4 py-2">Upload Image</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-5" id="div-canvas" style="display: none; margin-left: auto; margin-right: auto; ">
                    <canvas id="canvas" style="position: relative" width="450" height="350">
                        <div class="output">
                            <img id="photo" alt="The screen capture will appear in this box.">
                        </div>
                    </canvas>
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
        let check_expression = document.querySelector("#check-expression")
        let photo = document.getElementById('photo');

        camera_button.addEventListener('click', async function () {
            document.getElementById("vide-sec").style.display = "block";
            document.getElementById("initial-btns").style.display = "none";
            stream = await navigator.mediaDevices.getUserMedia({video: true, audio: false});
            video.srcObject = stream;
        });

        click_button.addEventListener('click', function () {
            document.getElementById("div-canvas").style.display = "block";
            canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
            image_data_url = canvas.toDataURL('image/jpeg').replace("image/png", "image/octet-stream");
            console.log(image_data_url);
            stream.getTracks()[0].stop();
            document.getElementById("vide-sec").style.display = "none"
            // let image = photo.src;
            // console.log(image);
            // data url of the image
            // console.log(image_data_url);

        });
        check_expression.addEventListener('click', function () {
            // fileData = dataURLtoFile(image_data_url, "imageName.jpg");
            // console.log("Here is JavaScript File Object",fileData)
            const blob = dataURItoBlob(image_data_url);
            const data = sendData("http://3.82.119.56:8000/api/getfaceslist/", blob);
            console.log(data);
            // uploadPicture()
            // downloadImage(image_data_url,"myfile.jpg")
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

            return new Blob([ia], {type:mimeString});
        }
        async function sendData(url, data) {
            const formData  = new FormData();
            formData.append("image", data);

             await fetch(url, {
                dataType: 'file',
                contentType: 'multipart/form-data',
                processData: false,
                method: 'POST',
                body: formData
            }).then(r => {
                 document.getElementById('res').value = r;
             });
        }

        // var download = function(uri, filename, callback){
        //     request.head(uri, function(err, res, body){
        //         console.log('content-type:', res.headers['content-type']);
        //         console.log('content-length:', res.headers['content-length']);
        //
        //         request(uri).pipe(fs.createWriteStream(filename)).on('close', callback);
        //     });
        // };
        //
        // download('https://www.google.com/images/srpr/logo3w.png', 'google.png', function(){
        //     console.log('done');
        // });

        // function downloadImage(data, filename = 'untitled.jpg') {
        //     var a = document.createElement('a');
        //     a.href = data;
        //     a.download = filename;
        //     document.body.appendChild(a);
        //     a.click();
        // }
        //
        // function dataURLtoFile(dataurl, filename) {
        //     var arr = dataurl.split(','), mime = arr[0].match(/:(.*?);/)[1],
        //         bstr = atob(arr[1]), n = bstr.length, u8arr = new Uint8Array(n);
        //     while(n--){
        //         u8arr[n] = bstr.charCodeAt(n);
        //     }
        //     return new File([u8arr], filename, {type:mime});
        // }

        // function dataURItoBlob(dataURI) {
        //     // convert base64/URLEncoded data component to raw binary data held in a string
        //     var byteString;
        //     if (dataURI.split(',')[0].indexOf('base64') >= 0)
        //         byteString = atob(dataURI.split(',')[1]);
        //     else
        //         byteString = unescape(dataURI.split(',')[1]);
        //
        //     // separate out the mime component
        //     var mimeString = dataURI.split(',')[0].split(':')[1].split(';')[0];
        //
        //     // write the bytes of the string to a typed array
        //     var ia = new Uint8Array(byteString.length);
        //     for (var i = 0; i < byteString.length; i++) {
        //         ia[i] = byteString.charCodeAt(i);
        //     }
        //
        //     return new Blob([ia], {type:mimeString});
        // }

        function uploadPicture()
        {
            //Prepare form data
            var formData = new FormData();
            formData.append("image", image);
            formData.append("language", "eng");
            callService(formData);
        }

        function callService(formData)

        {
            //Send OCR Parsing request asynchronously
            jQuery.ajax({
                url: "http://3.82.119.56:8000/api/getfaceslist/",
                data: formData,
                dataType: 'file',
                cache: false,
                contentType: 'multipart/form-data',
                processData: false,
                type: 'POST',
                success: function (ocrParsedResult) {
                    //Get the parsed results, exit code and error message and details
                    console.log("Success!");
                    var parsedResults = ocrParsedResult["ParsedResults"];
                    var ocrExitCode = ocrParsedResult["OCRExitCode"];
                    var isErroredOnProcessing = ocrParsedResult["IsErroredOnProcessing"];
                    var errorMessage = ocrParsedResult["ErrorMessage"];
                    var errorDetails = ocrParsedResult["ErrorDetails"];
                    //If we have got parsed results, then loop over the results to do something
                    if (parsedResults != null) {
                        //Uncomment these lines if parsing multiple results
                        $.each(parsedResults, function (index, value) {
                            var exitCode = value["FileParseExitCode"];
                            var parsedText = value["ParsedText"];
                            var errorMessage = value["ParsedTextFileName"];
                            var errorDetails = value["ErrorDetails"];

                            console.log(parsedText);
                        });
                    }
                }
            });
        }
    </script>
<?php include 'includes/footer.php' ?>