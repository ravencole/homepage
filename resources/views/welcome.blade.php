<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Raven Cole</title>

        <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
    </head>
    <body class="h-screen w-screen">
        <div class="w-full h-full flex bg-black items-center justify-center flex-col">
          <div class="p-2 border-8 border-white flex flex-col items-center justify-center">
            <h1 class="px-4 mb-2 font-bold font-mono text-6xl text-white border-t-4 border-l-4 border-r-4 border-b border-white ">
              Raven Cole
            </h1>
            <div class="w-full flex py-4 border-b-4 border-l-4 border-r-4 border-t border-white justify-center">
              <a class="text-white font-mono text-xl" href="https://github.com/ravencole">GitHub</a>
            </div>
          </div>
        </div>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
