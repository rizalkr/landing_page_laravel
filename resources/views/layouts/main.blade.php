<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    @include('atomic.navbar')
    @include('gallery')
    @include('services')
    <div class="flex justify-center">
        @include('form')
    </div>
    <div class="mt-5">
         @include('footer')
    </div>
</body>
</html>