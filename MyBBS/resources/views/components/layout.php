<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>My BBS</title>
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
</head>
<body>
    <div class="container">
        {{ $slot }}
    </div>
</body>
</html>
