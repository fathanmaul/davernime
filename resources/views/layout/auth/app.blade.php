<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="dim">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', '')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    @yield('meta')

    @stack('style')
</head>

<body class="bg-base-300">
    <div class="h-screen">
        <div class="w-full h-full flex flex-col items-center justify-center gap-4 px-6">
            <div class="flex flex-col items-center gap-2">
                <svg class="size-8 dark:fill-current" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100"
                    height="100" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M 1.5 0 C 0.672 0 0 0.672 0 1.5 C 0 2.328 0.672 3 1.5 3 C 1.676 3 1.843 2.9642031 2 2.9082031 L 2 6.5898438 C 2 6.8498437 2.1090625 7.1090625 2.2890625 7.2890625 L 2.9609375 7.9609375 C 3.9709375 7.1109375 5.3 6.31 7 5.75 L 7 4.6796875 C 7 4.2696875 6.7491406 3.9 6.3691406 3.75 L 2.7636719 2.3027344 C 2.9116719 2.0697344 3 1.796 3 1.5 C 3 0.672 2.328 0 1.5 0 z M 22.5 0 C 21.672 0 21 0.672 21 1.5 C 21 1.796 21.088328 2.0697344 21.236328 2.3027344 L 17.630859 3.75 C 17.250859 3.9 17 4.2696875 17 4.6796875 L 17 5.75 C 18.7 6.31 20.029063 7.1109375 21.039062 7.9609375 L 21.710938 7.2890625 C 21.890937 7.1090625 22 6.8498438 22 6.5898438 L 22 2.9082031 C 22.157 2.9642031 22.324 3 22.5 3 C 23.328 3 24 2.328 24 1.5 C 24 0.672 23.328 0 22.5 0 z M 12 7 C 11.82 7 11.640703 6.9997656 11.470703 7.0097656 C 11.290703 7.0097656 11.119219 7.0190625 10.949219 7.0390625 C 9.3992187 7.1290625 8.09 7.4508594 7 7.8808594 C 5.95 8.3008594 5.1001562 8.8196094 4.4101562 9.3496094 C 3.8801562 9.7596094 3.4591406 10.190078 3.1191406 10.580078 C 3.0991406 10.590078 3.0898437 10.609141 3.0898438 10.619141 C 2.0498437 11.999141 1.5 13.580469 1.5 15.230469 C 1.5 17.880469 2.9201562 20.249844 5.1601562 21.839844 C 6.8001562 23.169844 9.23 24 12 24 C 14.77 24 17.199844 23.169844 18.839844 21.839844 C 21.079844 20.249844 22.5 17.880469 22.5 15.230469 C 22.5 13.610469 21.980469 12.049219 20.980469 10.699219 C 20.980469 10.699219 20.980703 10.689687 20.970703 10.679688 C 20.620703 10.259688 20.159844 9.7996094 19.589844 9.3496094 C 18.899844 8.8196094 18.05 8.3008594 17 7.8808594 C 15.79 7.4008594 14.319063 7.0697656 12.539062 7.0097656 C 12.359063 6.9997656 12.18 7 12 7 z M 12 8.75 C 13.12 8.75 14 9.52 14 10.5 C 14 11.48 13.12 12.25 12 12.25 C 10.88 12.25 10 11.48 10 10.5 C 10 9.52 10.88 8.75 12 8.75 z M 7.7402344 14.470703 C 7.9202344 14.470703 8.0997656 14.519375 8.2597656 14.609375 L 10.529297 15.949219 C 11.429297 16.489219 12.529219 16.509297 13.449219 16.029297 L 15.960938 14.710938 C 16.280938 14.540938 16.649687 14.550703 16.929688 14.720703 C 18.269687 15.540703 19 16.610469 19 17.730469 C 19 20.040469 15.79 22 12 22 C 8.21 22 5 20.040469 5 17.730469 C 5 16.550469 5.8405469 15.400078 7.3105469 14.580078 C 7.4405469 14.500078 7.5902344 14.470703 7.7402344 14.470703 z M 8 16 C 7.25 16 6.6699219 16.66 6.6699219 17.5 C 6.6699219 18.34 7.25 19 8 19 C 8.75 19 9.3300781 18.34 9.3300781 17.5 C 9.3300781 16.66 8.75 16 8 16 z M 16 16 C 15.25 16 14.669922 16.66 14.669922 17.5 C 14.669922 18.34 15.25 19 16 19 C 16.75 19 17.330078 18.34 17.330078 17.5 C 17.330078 16.66 16.75 16 16 16 z M 12 18.330078 A 1 0.67 0 0 0 12 19.669922 A 1 0.67 0 0 0 12 18.330078 z">
                    </path>
                </svg>
                @yield('heading_title', '<h1>Log into your account</h1>')
            </div>
            @yield('content')
        </div>
    </div>
</body>

</html>
