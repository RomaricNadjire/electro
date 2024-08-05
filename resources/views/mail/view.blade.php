<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{env('APP_NAME')}}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
       
        @vite('resources/css/app.css', 'resources/js/app.js')
    </head>
    <body>
        <div class="min-w-64 min-h-72 p-4 rounded-md shadow-md bg-white m-auto flex flex-col items-center justify-center gap-4">
            <p class="text-center p-4">{{$text}}</p>
        </div>
    </body>
</html>