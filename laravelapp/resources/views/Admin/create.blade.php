<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    Cretate QR
    <form action="{{ route('admin.store') }}" method="post" enctype="multipart/form-data">
        @method('POST')
        @csrf
        <Label>Shift</Label>
        <input type="hidden" name="link" value="{{ route('admin.index') }}">
        <select name="shift" id="">
            <option value="pagi">Pagi</option>
            <option value="siang">siang</option>
            <option value="malam">malam</option>
        </select>
        <button type="submit">Buat QR</button>
    </form>
</body>

</html>