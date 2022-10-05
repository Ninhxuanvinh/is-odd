<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>isOdd</title>
</head>
<body>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    @if (session('num'))
        <div class="alert alert-success">
            {{ session('num') }} {{session('message')}}
        </div>
    @endif

    <h1>Nhap so cua ban vao de check xem la han hay le nhe ? </h1>
    <form action="{{route('odd.check')}}" method="post">
        @csrf
        <label for="number">
            <input name="number" id="number" type="number">
        </label>
        <button type="submit">submit</button>
    </form>
</body>
</html>
