<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <title>Document</title>
    <style>
        body {
            text-align: center;
        }
    </style>
    @livewireStyles

</head>

<body class="bg-[#700ef1]">
    {{ $slot }}

    @livewireScripts
</body>

</html>
