<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <script src="https://unpkg.com/html5-qrcode@2.3.8/html5-qrcode.min.js"></script>
    <title>Document</title>
</head>

<body>
    <form action="{{ route('userabsen') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div>
            <label for="">Foto</label>
            <div id="my-camera"></div>
            <input type=button value="Take Snapshot" onClick="take_snapshot()">
            <input type="hidden" name="foto" class="image-tag">
            <div id="result">

            </div>
        </div>
        <div>
            <label for="shift">nama</label>
            <input type="text" name="nama" id="">
        </div>
        <div>
            <label for="shift">shift</label>
            <input type="text" name="shift" id="">
        </div>
        <div>
            <label for="shift">status</label>
            <input type="text" name="status" id="">
        </div>
        <div>
            <button type="submit">Absen</button>
        </div>
    </form>

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