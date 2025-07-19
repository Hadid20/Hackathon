<?php 
$isExpired = \Carbon\Carbon::parse($qr->created_at)->diffInMinutes(now()) > 60
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    {{-- <h1>hallo {{ auth()->user()->name }}</h1> --}}
    <div class="container w-full flex items-center flex-col">
        <a href="{{ route('absen.create') }}">Absen</a>
        @if ($isExpired)
        <h1>QR expired, Silahkan Hubungi admin untuk lebih lanjut</h1>
        @else
        {!! QrCode::size(200)->generate('http://127.0.0.1:8000/user/absen/create') !!}
        @endif

        <div class="text-center">
            <h1>Scan barcode di atas untuk absen</h1>
            <p>jika ada bantuan silakan hubungin admin</p>
        </div>
    </div>
</body>

</html>