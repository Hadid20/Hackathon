<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="{{ route('admin.create') }}">create qr</a>
    <div>
        {{-- {{ $QR}} --}}
    </div>
    <table>
        <tr>
            <td>gambar</td>
            <td>Name</td>
            <td>shift</td>
            <td>status</td>
        </tr>

        @forelse ($users as $item)
        <tr>
            <td><img height="200px" src="{{ asset('/storage/images/'. $item->foto) }}" alt=""></td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->shift }}</td>
            <td>{{ $item->status }}</td>
        </tr>
        @empty

        @endforelse
    </table>
</body>

</html>