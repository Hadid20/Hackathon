<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="w-full flex justify-center p-10">
    <div class="flex flex-col gap-3">
        <h1>Atas Nama : <br> {{ $nama }}</h1>
        {{-- <p>presentase kehadiran {{ $hasil }}</p> --}}
        <a href="{{ route('toprank') }}" class="px-5 py-2 border w-fit">Kembali</a>
    </div>
    <table class="w-11/12">
        <tr class="border">
            <th class="p-2">Tanggal</th>
            <th class="p-2">Alasan</th>
        </tr>
        @forelse ($data as $item)
        <tr class="border">
            <td class="p-2">{{ $item->created_at }}</td>
            <td class="p-2">{{ $item->alasan }}</td>
        </tr>
        @empty

        @endforelse
    </table>
</body>

</html>