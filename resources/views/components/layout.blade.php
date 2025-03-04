<!DOCTYPE html>
<html data-shade="glassy" data-rounded="3xlarge" class="scroll-smooth" lang="en" data-theme="dark">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sasando - NTT open data</title>
    <meta name="description" content="Modern landing page built with tailus themer" />
    <link rel="icon" type="image/svg+xml" href="favicon.svg" media="(prefers-color-scheme: light)" />
    <link rel="icon" type="image/svg+xml" href="darkfavicon.svg" media="(prefers-color-scheme: dark)" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body
    class="bg-gray-50  dark:bg-gray-950 dark:before:fixed dark:before:-z-50 dark:before:inset-0 dark:before:bg-gray-950/50">
    <x-header></x-header>
    {{ $slot }}
    <x-footer></x-footer>

    @vite(['resources/js/main.js'])
</body>

</html>
