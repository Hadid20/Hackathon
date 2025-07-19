<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class=" flex justify-center">
    <div class=" max-w-10/12 flex flex-col gap-5 p-10">

        <div>
            <a href="{{ route('admin.create') }}" class="py-2 px-5 hover:bg-gray-300 border">create qr</a>
            <a href="{{ route('toprank') }}" class="py-2 px-5 hover:bg-gray-300 border">Top rank</a>
            {{-- {{ $QR}} --}}
        </div>
        <table class="table w-full text-center">
            <tr class="border">
                <td class="p-5">gambar</tdcc>
                <td class="p-5">Name</td>
                <td class="p-5">shift</td>
                <td class="p-5">status</td>
                <td class="p-5">alasan</td>
            </tr>

            @forelse ($users as $item)
            <tr class="border">
                <td class="p-5 flex justify-center"><img class="h-[200px]"
                        src="{{ asset('/storage/images/'. $item->foto) }}" alt=""></td>
                <td class="p-5">{{ $item->nama }}</td>
                <td class="p-5">{{ $item->shift }}</td>
                <td class="p-5">{{ $item->status }}</td>
                <td class="p-5">{{ $item->alasan }}</td>
            </tr>
            @empty

            @endforelse
        </table>
    </div>

</body>

</html>