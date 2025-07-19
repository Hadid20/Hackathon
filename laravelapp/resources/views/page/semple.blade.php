<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <title>Document</title>
</head>

<body>
    <h1>HelloWorld</h1>
    <div>{{ $QR }}</div>
    <div id="my-camera"></div>
    <input type=button value="Take Snapshot" onClick="take_snapshot()">
    <input type="hidden" name="image" class="image-tag">
    <div id="result"></div>
    <img src="" alt="">

    <script>
        Webcam.set({
            width: 490,
            height: 350,
            image_format: 'jpeg',
            jpeg_quality: 90
        })

        Webcam.attach("my-camera")

         function take_snapshot() {
        Webcam.snap( function(data_uri) {
            $(".image-tag").val(data_uri);
            document.getElementById('result').innerHTML ='<img src="'+data_uri+'"/>';
        } );
    }
    </script>
</body>

</html>