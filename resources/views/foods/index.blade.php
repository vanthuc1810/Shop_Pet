<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Index web
    <form action="/foods/1" method="post">
        @csrf
        @method('put')
        <button type="submit">SUBMIT</button>
    </form>
</body>
</html>