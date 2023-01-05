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
    <ul class="flex border-2 border-with-600 py-2">
        <li class="mr-3">
            <a class="inline-block border border-blue-500 rounded py-2 px-4 bg-blue-500 hover:bg-blue-700 text-white"
                href="#">Active Pill</a>
        </li>
        <li class="mr-3">
            <a class="inline-block border border-white rounded hover:border-gray-200 text-blue-500 hover:bg-gray-200 py-2 px-4"
                href="#">Pill</a>
        </li>
        <li class="mr-3">
            <a class="inline-block py-2 px-4 text-gray-400 cursor-not-allowed" href="#">Disabled Pill</a>
        </li>
    </ul>
    {{ $slot }}

    @livewireScripts
</body>

</html>
