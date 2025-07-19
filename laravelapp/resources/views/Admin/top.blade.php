<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <div class="p-5 flex items-center justify-around">
        <h1 class="font-bold">Data Top rank staf terlamb at</h1>
        <a href="{{route('admin.index')}}" class="px-5 py-2 border hover:bg-gray-200">Kembali</a>
    </div>
    <div class="w-full flex justify-center">
        <table class="table w-10/12 text-center">
            <tr class="border p-3">
                <th class="p-3">nama</th>
                <th class="p-3">total</th>
                <th class="p-3">action</th>
            </tr>
            @forelse ($rangking as $item)
            {{-- <h1>{{ $item->nama }}</h1> --}}
            <tr class="border text-center">
                <td class="p-3">{{ $item->nama }}</td>
                <td class="p-3">{{ $item->total_terlambat }}</td>
                <td class="p-3"><a href="{{ route('alasan_toprank', $item->nama) }}">Lihat ALasannya</a></td>
            </tr>

            @empty

            @endforelse
        </table>
    </div>

</body>

</html>