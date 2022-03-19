@props(["title"])
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="X-UA-Compatible" content="IE=edge" />
    <title>{{$title}}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset("css/app.css")}}" />
    <script src="{{asset("js/app.js")}}" defer></script>
</head>
<body>
    {{$slot}}
</body>
</html>
