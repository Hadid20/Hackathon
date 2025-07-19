<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <div>
            <form action="{{ route('register')}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div>
                    <label for="">name</label>
                    <input type="text" name="name" id="">
                </div>
                <div>
                    <label for="">email</label>
                    <input type="email" name="email" id="">
                </div>
                <div>
                    <label for="">password</label>
                    <input type="password" name="password" id="">
                </div>
                <div>
                    <button type="submit">login</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>