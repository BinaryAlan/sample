<!DOCTYPE html>
<html>
<head>
    <title>@yield('title','Sample') - Laravel新手入门教程</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
@include("layouts._header")
<div class="container">
@include('shared._message')
@yield("content")
@include("layouts._footer")
</div>
</body>
</html>
