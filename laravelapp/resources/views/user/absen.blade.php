<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <script src="https://unpkg.com/html5-qrcode@2.3.8/html5-qrcode.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>

<body class="w-full flex flex-col items-center p-10">
    <form action="{{ route('absen.store') }}" method="post" enctype="multipart/form-data"
        class="w-10/12 flex flex-col gap-5">
        @csrf
        @method('POST')
        <div class="border p-5">
            <label for="">Foto</label>
            <div class="flex p-5">
                <div class="flex flex-col gap-2">
                    <div id="my-camera"></div>
                    <input class="py-2 px-5 border hover:bg-gray-300" type=button value="Ambil Gambar"
                        onClick="take_snapshot()">
                </div>
                <input type="hidden" name="foto" class="image-tag">
                <div id="result">

                </div>
            </div>
        </div>
        <div class="container flex flex-col gap-2">
            <div class="grid grid-cols-2">
                <label for="shift">Nama</label>
                <input type="text" class="border p-2" name="nama" id="">
            </div>
            <div class="grid grid-cols-2">
                <label for="shift">Shift</label>
                <select name=" shift" id="" class="border p-2">
                    <option value="{{ $qr->shift }}">{{ $qr->shift }}</option>
                </select>
            </div>
            <div class="grid grid-cols-2">
                <label for="shift">Status</label>
                <select name="status" id="" class="border p-2">
                    @if (\Carbon\Carbon::parse($qr->created_at)->diffInMinutes(now()) > 30)
                    <option value="Terlambat">Terlambat</option>
                    @else
                    <option value="Tepat Waktu">Tepat Waktu</option>
                    @endif
                </select>
            </div>
            <div class="grid grid-cols-2">
                <label for="">Alasan:</label>
                <input type="text" name="alasan" class="border p-2">
            </div>
            <div>
                <button type="submit" class="py-2 px-4 border hover:bg-gray-100">Clik me to absen</button>
            </div>
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