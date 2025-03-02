<!DOCTYPE html>
<html data-shade="glassy" data-rounded="3xlarge" lang="en" data-theme="dark">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sasando - NTT open data</title>
    <meta name="description" content="Modern landing page built with tailus themer" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" media="(prefers-color-scheme: light)" />
    <link rel="icon" type="image/svg+xml" href="/darkfavicon.svg" media="(prefers-color-scheme: dark)" />
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

</head>

<body
    class="bg-white  dark:bg-gray-900 dark:before:fixed dark:before:-z-50 dark:before:inset-0 dark:before:bg-gray-950/50">
    <header id="header" class="group">
        <nav class="fixed overflow-hidden z-20 w-full border-b bg-white/50 dark:bg-gray-950/50 backdrop-blur-2xl">
            <div class="px-6 m-auto max-w-6xl ">
                <div class="flex flex-wrap items-center justify-between py-2 sm:py-4">
                    <div class="w-full items-center flex justify-between lg:w-auto">
                        <a href="/" aria-label="tailus logo">
                            <svg class="text-title h-7" viewBox="0 0 298 84" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M107 30.7857H113.6V16.3429H122.686V30.7857H131.386V38.5H122.686V53.5429C122.686 55.4286 123 56.8429 123.629 57.7857C124.286 58.7286 125.214 59.2 126.414 59.2C127.414 59.2 128.2 59.0143 128.771 58.6429C129.371 58.2714 129.729 58.0143 129.843 57.8714L133.229 64.5143C133.057 64.6857 132.557 64.9714 131.729 65.3714C130.9 65.7714 129.829 66.1429 128.514 66.4857C127.2 66.8286 125.7 67 124.014 67C121.043 67 118.557 66.1143 116.557 64.3429C114.586 62.5714 113.6 59.8 113.6 56.0286V38.5H107V30.7857ZM167.156 65.9714V59.4571C166.928 60.1429 166.27 61.0857 165.185 62.2857C164.128 63.4857 162.67 64.5714 160.813 65.5429C158.985 66.5143 156.813 67 154.299 67C151.013 67 148.056 66.2143 145.428 64.6429C142.799 63.0714 140.728 60.8857 139.213 58.0857C137.699 55.2857 136.942 52.0571 136.942 48.4C136.942 44.7429 137.699 41.5143 139.213 38.7143C140.728 35.9143 142.799 33.7286 145.428 32.1571C148.056 30.5571 151.013 29.7571 154.299 29.7571C156.756 29.7571 158.885 30.1857 160.685 31.0429C162.485 31.9 163.928 32.8857 165.013 34C166.128 35.1143 166.813 36.0857 167.07 36.9143V30.7857H176.156V65.9714H167.156ZM145.985 48.4C145.985 50.6571 146.485 52.6286 147.485 54.3143C148.485 56 149.785 57.3 151.385 58.2143C153.013 59.1286 154.756 59.5857 156.613 59.5857C158.613 59.5857 160.385 59.1143 161.928 58.1714C163.499 57.2286 164.728 55.9286 165.613 54.2714C166.528 52.5857 166.985 50.6286 166.985 48.4C166.985 46.1714 166.528 44.2286 165.613 42.5714C164.728 40.8857 163.499 39.5714 161.928 38.6286C160.385 37.6571 158.613 37.1714 156.613 37.1714C154.756 37.1714 153.013 37.6429 151.385 38.5857C149.785 39.5 148.485 40.8 147.485 42.4857C146.485 44.1714 145.985 46.1429 145.985 48.4ZM186.271 65.9714V30.7857H195.4V65.9714H186.271ZM190.943 20.2429C189.4 20.2429 188.071 19.6857 186.957 18.5714C185.871 17.4571 185.329 16.1286 185.329 14.5857C185.329 13.0429 185.871 11.7143 186.957 10.6C188.071 9.45714 189.4 8.88571 190.943 8.88571C191.971 8.88571 192.914 9.15714 193.771 9.7C194.657 10.2143 195.357 10.9 195.871 11.7571C196.414 12.5857 196.686 13.5286 196.686 14.5857C196.686 16.1286 196.129 17.4571 195.014 18.5714C193.9 19.6857 192.543 20.2429 190.943 20.2429ZM215.437 65.9714H206.222V7H215.437V65.9714ZM234.044 48.0571C234.044 51.4857 234.744 54.2143 236.144 56.2429C237.572 58.2714 239.815 59.2857 242.872 59.2857C245.958 59.2857 248.201 58.2714 249.601 56.2429C251.001 54.2143 251.701 51.4857 251.701 48.0571V30.7857H260.787V49.2143C260.787 52.7571 260.087 55.8714 258.687 58.5571C257.287 61.2143 255.258 63.2857 252.601 64.7714C249.944 66.2571 246.701 67 242.872 67C239.072 67 235.844 66.2571 233.187 64.7714C230.53 63.2857 228.501 61.2143 227.101 58.5571C225.701 55.8714 225.001 52.7571 225.001 49.2143V30.7857H234.044V48.0571ZM284.016 29.7571C285.988 29.7571 287.816 29.9429 289.502 30.3143C291.188 30.6857 292.631 31.1286 293.831 31.6429C295.031 32.1571 295.859 32.5857 296.316 32.9286L292.973 38.5857C292.402 38.1 291.373 37.5429 289.888 36.9143C288.431 36.2857 286.788 35.9714 284.959 35.9714C283.131 35.9714 281.588 36.3 280.331 36.9571C279.073 37.6143 278.445 38.6 278.445 39.9143C278.445 41.2 279.102 42.2286 280.416 43C281.759 43.7714 283.573 44.4143 285.859 44.9286C287.745 45.3571 289.545 45.9571 291.259 46.7286C292.973 47.4714 294.373 48.5429 295.459 49.9429C296.573 51.3143 297.131 53.1571 297.131 55.4714C297.131 57.6714 296.659 59.5143 295.716 61C294.802 62.4571 293.573 63.6286 292.031 64.5143C290.488 65.4 288.773 66.0286 286.888 66.4C285.031 66.8 283.159 67 281.273 67C278.959 67 276.888 66.7714 275.059 66.3143C273.259 65.8571 271.759 65.3286 270.559 64.7286C269.359 64.1 268.502 63.5714 267.988 63.1429L271.331 56.8C272.073 57.5143 273.288 58.2714 274.973 59.0714C276.659 59.8429 278.545 60.2286 280.631 60.2286C282.859 60.2286 284.645 59.8 285.988 58.9429C287.331 58.0857 288.002 56.9429 288.002 55.5143C288.002 54.4571 287.673 53.6 287.016 52.9429C286.388 52.2857 285.516 51.7571 284.402 51.3571C283.288 50.9571 282.045 50.6 280.673 50.2857C279.388 49.9714 278.088 49.5714 276.773 49.0857C275.488 48.5714 274.302 47.9143 273.216 47.1143C272.131 46.2857 271.259 45.2571 270.602 44.0286C269.945 42.8 269.616 41.3571 269.616 39.7C269.616 37.5857 270.288 35.7857 271.631 34.3C272.973 32.8143 274.745 31.6857 276.945 30.9143C279.145 30.1429 281.502 29.7571 284.016 29.7571Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M53.6523 31.5142C53.6523 28.5967 51.2872 26.2316 48.3697 26.2316C45.4522 26.2316 43.0871 28.5967 43.0871 31.5142C43.0871 34.4317 45.4522 36.7968 48.3697 36.7968C51.2872 36.7968 53.6523 34.4317 53.6523 31.5142Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M42.6502 36.769C42.5195 36.7593 42.3875 36.7543 42.2543 36.7543C39.3572 36.7543 37.0087 39.1029 37.0087 42C37.0087 44.8971 39.3572 47.2457 42.2543 47.2457C45.1514 47.2457 47.5 44.8971 47.5 42C47.5 40.92 47.1736 39.9162 46.6141 39.0819C45.0637 38.7237 43.691 37.9013 42.6502 36.769Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M34.8047 39.7898C34.5971 40.4904 34.4857 41.2322 34.4857 42C34.4857 42.7679 34.5971 43.5097 34.8047 44.2102C33.969 46.0163 32.1408 47.2693 30.02 47.2693C27.1098 47.2693 24.7507 44.9102 24.7507 42C24.7507 39.0899 27.1098 36.7308 30.02 36.7308C32.1408 36.7308 33.969 37.9837 34.8047 39.7898Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M48.3708 47.2122C51.2834 47.2122 53.6445 49.5733 53.6445 52.4859C53.6445 55.3984 51.2834 57.7595 48.3708 57.7595C45.4583 57.7595 43.0971 55.3984 43.0971 52.4859C43.0971 51.4104 43.4191 50.4101 43.9718 49.5761C45.5507 49.2193 46.9472 48.3816 47.9994 47.225C48.1221 47.2165 48.246 47.2122 48.3708 47.2122Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M59.7461 42C59.7461 39.0938 57.3901 36.7378 54.4838 36.7378C54.3567 36.7378 54.2306 36.7423 54.1057 36.7512C53.0573 37.8988 51.6691 38.7307 50.1003 39.0877C49.9504 39.3129 49.8173 39.5503 49.703 39.7982C49.909 40.4962 50.0195 41.2352 50.0195 42C50.0195 42.7648 49.909 43.5038 49.703 44.2019C49.8173 44.4497 49.9504 44.6872 50.1003 44.9124C51.6691 45.2694 53.0573 46.1013 54.1057 47.2489C54.2306 47.2578 54.3567 47.2623 54.4838 47.2623C57.3901 47.2623 59.7461 44.9063 59.7461 42Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M40.6028 52.4859C40.6028 51.718 40.7143 50.9761 40.9219 50.2755C40.809 50.0315 40.678 49.7976 40.5306 49.5755C38.9544 49.2187 37.56 48.3825 36.5088 47.2283C36.3856 47.2197 36.2612 47.2153 36.1358 47.2153C36.0102 47.2153 35.8855 47.2197 35.7621 47.2284C34.7111 48.3823 33.317 49.2184 31.7411 49.5753C31.1877 50.4093 30.8653 51.4099 30.8653 52.4859C30.8653 55.3967 33.225 57.7564 36.1358 57.7564C38.2573 57.7564 40.0861 56.503 40.9219 54.6962C40.7143 53.9957 40.6028 53.2538 40.6028 52.4859Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M40.5094 34.4263C40.6608 34.1992 40.795 33.9595 40.9102 33.7094C40.705 33.0126 40.595 32.2752 40.595 31.512C40.595 30.7489 40.705 30.0115 40.9102 29.3147C40.0777 27.5058 38.2492 26.25 36.1274 26.25C33.2213 26.25 30.8654 28.6059 30.8654 31.512C30.8654 32.5894 31.1892 33.5912 31.7448 34.4253C33.3117 34.7828 34.6983 35.6141 35.7457 36.7605C35.8718 36.7695 35.9991 36.7741 36.1274 36.7741C36.2572 36.7741 36.3858 36.7694 36.5132 36.7602C37.5596 35.615 38.9445 34.7843 40.5094 34.4263Z"
                                    fill="currentColor"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M42 84C65.196 84 84 65.196 84 42C84 18.804 65.196 0 42 0C18.804 0 0 18.804 0 42C0 65.196 18.804 84 42 84ZM42 74.518C24.0408 74.518 9.48201 59.9592 9.48201 42C9.48201 24.0408 24.0408 9.48201 42 9.48201C59.9592 9.48201 74.518 24.0408 74.518 42C74.518 59.9592 59.9592 74.518 42 74.518Z"
                                    fill="currentColor"></path>
                            </svg>
                        </a>
                        <div class="flex lg:hidden">
                            <button
                                class="switcher group flex justify-center gap-1.5 items-center rounded-[--btn-radius] outline-2 outline-offset-2 focus-visible:outline outline-primary-600 disabled:bg-gray-200 disabled:text-gray-400 disabled:shadow-none disabled:hover:brightness-100 dark:disabled:bg-gray-500/10 dark:disabled:[background-image:none] dark:disabled:text-gray-700 dark:disabled:shadow-none dark:disabled:border-none text-gray-800 hover:bg-gray-100 active:bg-gray-200/75 dark:text-gray-300 dark:hover:bg-gray-500/10 dark:active:bg-gray-500/15 size-9 relative"
                                aria-label="Switch to dark mode">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-sun m-auto size-[1.125rem] -rotate-180 scale-150 opacity-0 duration-300 dark:rotate-0 dark:scale-100 dark:opacity-100">
                                    <circle cx="12" cy="12" r="4"></circle>
                                    <path d="M12 2v2"></path>
                                    <path d="M12 20v2"></path>
                                    <path d="m4.93 4.93 1.41 1.41"></path>
                                    <path d="m17.66 17.66 1.41 1.41"></path>
                                    <path d="M2 12h2"></path>
                                    <path d="M20 12h2"></path>
                                    <path d="m6.34 17.66-1.41 1.41"></path>
                                    <path d="m19.07 4.93-1.41 1.41"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-moon m-auto size-[1.125rem] absolute inset-0 duration-300 dark:rotate-180 dark:scale-0 dark:opacity-0">
                                    <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"></path>
                                </svg>
                            </button>
                            <button id="menu-btn" aria-label="open menu"
                                class="btn variant-ghost sz-md icon-only relative z-20 -mr-2.5 block cursor-pointer lg:hidden">
                                <svg class="text-title m-auto size-6 transition-[transform,opacity] duration-300 group-data-[state=active]:rotate-180 group-data-[state=active]:scale-0 group-data-[state=active]:opacity-0"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 9h16.5m-16.5 6.75h16.5"></path>
                                </svg>
                                <svg class="text-title absolute inset-0 m-auto size-6 -rotate-180 scale-0 opacity-0 transition-[transform,opacity] duration-300 group-data-[state=active]:rotate-0 group-data-[state=active]:scale-100 group-data-[state=active]:opacity-100"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div
                        class="w-full group-data-[state=active]:h-fit h-0 lg:w-fit flex-wrap justify-end items-center space-y-8 lg:space-y-0 lg:flex lg:h-fit md:flex-nowrap">
                        <div class="mt-6 dark:text-body md:-ml-4 lg:pr-4 lg:mt-0">
                            <ul class="space-y-6 tracking-wide text-base lg:text-sm lg:flex lg:space-y-0">
                                <li>
                                    <a href="#" class="hover:link md:px-4 block">
                                        <span>Dataset</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="hover:link md:px-4 block">
                                        <span>Organisasi</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="hover:link md:px-4 block">
                                        <span>Visualisasi</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="hover:link md:px-4 block">
                                        <span>Infografik</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div
                            class="w-full space-y-2 gap-2 pt-6 pb-4 lg:pb-0 border-t items-center flex flex-col lg:flex-row lg:space-y-0 lg:w-fit lg:border-l lg:border-t-0 lg:pt-0 lg:pl-2">

                            <button
                                class="hidden switcher group lg:flex justify-center gap-1.5 items-center rounded-[--btn-radius] outline-2 outline-offset-2 focus-visible:outline outline-primary-600 disabled:bg-gray-200 disabled:text-gray-400 disabled:shadow-none disabled:hover:brightness-100 dark:disabled:bg-gray-500/10 dark:disabled:[background-image:none] dark:disabled:text-gray-700 dark:disabled:shadow-none dark:disabled:border-none text-gray-800 hover:bg-gray-100 active:bg-gray-200/75 dark:text-gray-300 dark:hover:bg-gray-500/10 dark:active:bg-gray-500/15 size-9 relative"
                                aria-label="Switch to dark mode">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-sun m-auto size-[1.125rem] -rotate-180 scale-150 opacity-0 duration-300 dark:rotate-0 dark:scale-100 dark:opacity-100">
                                    <circle cx="12" cy="12" r="4"></circle>
                                    <path d="M12 2v2"></path>
                                    <path d="M12 20v2"></path>
                                    <path d="m4.93 4.93 1.41 1.41"></path>
                                    <path d="m17.66 17.66 1.41 1.41"></path>
                                    <path d="M2 12h2"></path>
                                    <path d="M20 12h2"></path>
                                    <path d="m6.34 17.66-1.41 1.41"></path>
                                    <path d="m19.07 4.93-1.41 1.41"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-moon m-auto size-[1.125rem] absolute inset-0 duration-300 dark:rotate-180 dark:scale-0 dark:opacity-0">
                                    <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"></path>
                                </svg>
                            </button>
                            <button class="btn variant-neutral sz-sm">
                                <span>Login</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main class="overflow-hidden">
        <section class="relative">
            <video autoplay muted loop class="hero-bg opacity-30 dark:opacity-20"
                style=" position: absolute; overflow-clip-margin: content-box;
                overflow: clip; min-width: 100%;
                min-height: 100vh;
                max-width: 100%;
                max-height: 100vh;
                object-fit: cover;">
                <source src="bg/ntt3.mp4" type="video/mp4" />
            </video>
            <div class="relative pt-24 lg:pt-28">
                <div class="mx-auto px-6 max-w-7xl md:px-12">
                    <div class="text-center sm:mx-auto sm:w-10/12 lg:mr-auto lg:mt-0 lg:w-4/5">

                        <a href="https://tailtips.dev" target="_blank"
                            class="annonce variant-outlined  gap-2 sz-sm w-fit mx-auto group">
                            <span class="annonce-concern sz-xs variant-neutral">Baru</span>
                            <span class="text-title text-nowrap text-sm line-clamp-1">
                                Data Sekolah Kab. Ende 2025
                            </span>
                            <div
                                class="ml-4 scale-75 flex items-center -space-x-3 group-hover:-translate-x-1 transition-transform duration-300">
                                <span
                                    class="w-2.5 translate-y-[-0.3px] -translate-x-px opacity-0 h-[1.5px] rounded bg-gray-950 dark:bg-white origin-left scale-x-0 transition duration-300 group-hover:opacity-100 group-hover:scale-x-100"></span>
                                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    class="size-4 text-gray-950 dark:text-white -translate-x-2 transition duration-300 group-hover:translate-x-px"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </div>
                        </a>
                        <h1
                            class="mt-8 text-wrap text-4xl md:text-5xl font-bold text-title xl:text-5xl xl:[line-height:1.125]">
                            S A S A N D O <br class="hidden sm:block">
                            <div class="text-3xl"> Sistem Analisis dan Statistik Data Integrasi Online.</div>
                        </h1>
                        <p class="text-wrap mx-auto mt-8 max-w-2xl text-lg hidden sm:block text-body">Temukan dataset,
                            visualisasi, infografik, artikel, dan mapset dengan cepat, mudah, dan akurat</p>

                        <div class="mt-8 flex flex-col items-center justify-center gap-4">
                            <div class="w-full">
                                <form action="" class="max-w-xl mx-auto  my-10 lg:my-12">
                                    <div
                                        class="relative grid bg-ui [grid-template-columns:1fr_auto] items-center border pr-3 shadow shadow-gray-950/5 rounded-[calc(var(--btn-radius)+0.75rem)] outline-2 outline-offset-2 outline-primary-600 has-[input:focus]:outline">

                                        <svg class="absolute inset-y-0 left-5 my-auto size-5 pointer-events-none text-caption"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                                d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                                        </svg>


                                        <input autocomplete="email" placeholder="Cari Dataset.."
                                            class="pl-12 h-14 w-full bg-transparent focus:outline-none"
                                            type="email">
                                        <div class="md:pr-1.5 lg:pr-0">
                                            <button title="Start buying" class="btn w-fit variant-primary sz-md">
                                                <span class="btn-label hidden md:block">
                                                    Cari
                                                </span>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="relative size-5 mx-auto md:hidden" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>


                        </div>
                    </div>
                    <div class="-mx-6 relative mt-8 sm:mt-12 max-w-4xl sm:mx-auto pb-36">
                        <div
                            class="absolute inset-0 -top-8 left-1/2 -z-20 h-56 w-full -translate-x-1/2 dark:opacity-10 [background-image:linear-gradient(to_bottom,transparent_98%,theme(colors.gray.200/75%)_98%),linear-gradient(to_right,transparent_94%,_theme(colors.gray.200/75%)_94%)] [background-size:16px_35px] [mask:radial-gradient(black,transparent_95%)]">
                        </div>
                        <div
                            class="absolute top-12 inset-x-0 w-2/3 h-1/3 -z-[1] rounded-full bg-primary-300 dark:bg-white/20 mx-auto blur-3xl">
                        </div>

                        <div class="grid gap-0.5 *:text-center md:grid-cols-3 dark:[--ui-soft-bg:var(--ui-bg)]">
                            <div class="card variant-soft space-y-4 py-12">
                                <div class="text-title text-5xl font-bold">+1200</div>
                                <p class="text-body">TOTAL DATASET</p>
                            </div>
                            <div class="card variant-soft space-y-4 py-12">
                                <div class="text-title text-5xl font-bold">564</div>
                                <p class="text-body">TOTAL INFOGRAFIK</p>
                            </div>
                            <div class="card variant-soft space-y-4 py-12">
                                <div class="text-title text-5xl font-bold">+500</div>
                                <p class="text-body">PTOTAL ORGAMISASI</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="pt-36">
                <div class="mx-auto px-6 max-w-6xl">
                    <div class="text-center">
                        <h2 class="text-3xl text-title font-semibold">Dataset Terbaru</h2>
                        <p class="mt-6 text-body"></p>
                    </div>
                    <div class="mt-12 grid sm:grid-cols-2 lg:grid-cols-3 gap-3">
                        <div class="relative group overflow-hidden card variant-outlined">
                            <div aria-hidden="true"
                                class="inset-0 absolute aspect-video border rounded-full -translate-y-1/2 group-hover:-translate-y-1/4 duration-300 bg-gradient-to-b from-warning-500 to-white dark:from-white dark:to-white blur-2xl opacity-25 dark:opacity-0 dark:group-hover:opacity-5">
                            </div>
                            <div class="relative">
                                <div
                                    class="badge variant-outlined flex relative *:relative *:size-6 *:m-auto size-12 ">
                                    <svg class="text-title" xmlns="http://www.w3.org/2000/svg" width="1em"
                                        height="1em" viewBox="0 0 128 128">
                                        <defs>
                                            <linearGradient id="deviconAstro0" x1="882.997" x2="638.955"
                                                y1="27.113" y2="866.902" gradientTransform="scale(.1)"
                                                gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="currentColor" />
                                                <stop offset="1" stop-color="currentColor" />
                                            </linearGradient>
                                            <linearGradient id="deviconAstro1" x1="1001.68" x2="790.326"
                                                y1="652.45" y2="1094.91" gradientTransform="scale(.1)"
                                                gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#ff1639" />
                                                <stop offset="1" stop-color="#ff1639" stop-opacity="0" />
                                            </linearGradient>
                                        </defs>
                                        <path fill="url(#deviconAstro0)"
                                            d="M81.504 9.465c.973 1.207 1.469 2.836 2.457 6.09l21.656 71.136a90.079 90.079 0 0 0-25.89-8.765L65.629 30.28a1.833 1.833 0 0 0-3.52.004L48.18 77.902a90.104 90.104 0 0 0-26.003 8.778l21.758-71.14c.996-3.25 1.492-4.876 2.464-6.083a8.023 8.023 0 0 1 3.243-2.398c1.433-.575 3.136-.575 6.535-.575H71.72c3.402 0 5.105 0 6.543.579a7.988 7.988 0 0 1 3.242 2.402Zm0 0" />
                                        <path fill="#ff5d01"
                                            d="M84.094 90.074c-3.57 3.055-10.696 5.137-18.903 5.137c-10.07 0-18.515-3.137-20.754-7.356c-.8 2.418-.98 5.184-.98 6.954c0 0-.527 8.675 5.508 14.71a5.671 5.671 0 0 1 5.672-5.671c5.37 0 5.367 4.683 5.363 8.488v.336c0 5.773 3.527 10.719 8.543 12.805a11.62 11.62 0 0 1-1.172-5.098c0-5.508 3.23-7.555 6.988-9.938c2.989-1.894 6.309-4 8.594-8.222a15.513 15.513 0 0 0 1.875-7.41a15.55 15.55 0 0 0-.734-4.735m0 0" />
                                        <path fill="url(#deviconAstro1)"
                                            d="M84.094 90.074c-3.57 3.055-10.696 5.137-18.903 5.137c-10.07 0-18.515-3.137-20.754-7.356c-.8 2.418-.98 5.184-.98 6.954c0 0-.527 8.675 5.508 14.71a5.671 5.671 0 0 1 5.672-5.671c5.37 0 5.367 4.683 5.363 8.488v.336c0 5.773 3.527 10.719 8.543 12.805a11.62 11.62 0 0 1-1.172-5.098c0-5.508 3.23-7.555 6.988-9.938c2.989-1.894 6.309-4 8.594-8.222a15.513 15.513 0 0 0 1.875-7.41a15.55 15.55 0 0 0-.734-4.735m0 0" />
                                    </svg>
                                </div>

                                <div class="mt-6 pb-6 rounded-b-[--card-border-radius]">
                                    <p class="text-body">Amet praesentium deserunt ex commodi tempore fuga voluptatem.
                                        Sit, sapiente.</p>
                                </div>

                                <div class="flex gap-3 -mb-[--card-padding] py-4 border-t">
                                    <a href="#" download="/" class="group btn variant-soft sz-sm">
                                        <span>Download</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            viewBox="0 0 24 24">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="m17 13l-5 5m0 0l-5-5m5 5V6" />
                                        </svg>
                                    </a>
                                    <a href="https://github.com/tailus-ui" class="btn variant-soft sz-sm icon-only">
                                        <span class="sr-only">Source Code</span>
                                        <svg class="size-5" xmlns="http://www.w3.org/2000/svg" width="1em"
                                            height="1em" viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M12 2A10 10 0 0 0 2 12c0 4.42 2.87 8.17 6.84 9.5c.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34c-.46-1.16-1.11-1.47-1.11-1.47c-.91-.62.07-.6.07-.6c1 .07 1.53 1.03 1.53 1.03c.87 1.52 2.34 1.07 2.91.83c.09-.65.35-1.09.63-1.34c-2.22-.25-4.55-1.11-4.55-4.92c0-1.11.38-2 1.03-2.71c-.1-.25-.45-1.29.1-2.64c0 0 .84-.27 2.75 1.02c.79-.22 1.65-.33 2.5-.33c.85 0 1.71.11 2.5.33c1.91-1.29 2.75-1.02 2.75-1.02c.55 1.35.2 2.39.1 2.64c.65.71 1.03 1.6 1.03 2.71c0 3.82-2.34 4.66-4.57 4.91c.36.31.69.92.69 1.85V21c0 .27.16.59.67.5C19.14 20.16 22 16.42 22 12A10 10 0 0 0 12 2" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div href="#" class="relative group overflow-hidden card variant-outlined">
                            <div aria-hidden="true"
                                class="inset-0 absolute aspect-video border rounded-full -translate-y-1/2 group-hover:-translate-y-1/4 duration-300 bg-gradient-to-b from-success-500 to-white dark:from-white dark:to-white blur-2xl opacity-25 dark:opacity-0 dark:group-hover:opacity-5">
                            </div>
                            <div class="relative">
                                <div
                                    class="badge variant-outlined flex relative *:relative *:size-6 *:m-auto size-12 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="0.98em" height="1em"
                                        viewBox="0 0 256 263">
                                        <defs>
                                            <linearGradient id="logosSupabaseIcon0" x1="20.862%" x2="63.426%"
                                                y1="20.687%" y2="44.071%">
                                                <stop offset="0%" stop-color="#249361" />
                                                <stop offset="100%" stop-color="#3ecf8e" />
                                            </linearGradient>
                                            <linearGradient id="logosSupabaseIcon1" x1="1.991%" x2="21.403%"
                                                y1="-13.158%" y2="34.708%">
                                                <stop offset="0%" />
                                                <stop offset="100%" stop-opacity="0" />
                                            </linearGradient>
                                        </defs>
                                        <path fill="url(#logosSupabaseIcon0)"
                                            d="M149.602 258.579c-6.718 8.46-20.338 3.824-20.5-6.977l-2.367-157.984h106.229c19.24 0 29.971 22.223 18.007 37.292z" />
                                        <path fill="url(#logosSupabaseIcon1)" fill-opacity="0.2"
                                            d="M149.602 258.579c-6.718 8.46-20.338 3.824-20.5-6.977l-2.367-157.984h106.229c19.24 0 29.971 22.223 18.007 37.292z" />
                                        <path fill="#3ecf8e"
                                            d="M106.399 4.37c6.717-8.461 20.338-3.826 20.5 6.976l1.037 157.984H23.037c-19.241 0-29.973-22.223-18.008-37.292z" />
                                    </svg>
                                </div>

                                <div class="mt-6 pb-6 rounded-b-[--card-border-radius]">
                                    <p class="text-gray-700 dark:text-gray-300">Amet praesentium deserunt ex commodi
                                        tempore fuga voluptatem. Sit, sapiente.</p>
                                </div>

                                <div class="flex gap-3 -mb-[--card-padding] py-4 border-t">
                                    <a href="#" download="/" class="group btn variant-soft sz-sm">
                                        <span>Download</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            viewBox="0 0 24 24">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="m17 13l-5 5m0 0l-5-5m5 5V6" />
                                        </svg>
                                    </a>
                                    <a href="https://github.com/tailus-ui" class="btn variant-soft sz-sm icon-only">
                                        <span class="sr-only">Source Code</span>
                                        <svg class="size-5" xmlns="http://www.w3.org/2000/svg" width="1em"
                                            height="1em" viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M12 2A10 10 0 0 0 2 12c0 4.42 2.87 8.17 6.84 9.5c.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34c-.46-1.16-1.11-1.47-1.11-1.47c-.91-.62.07-.6.07-.6c1 .07 1.53 1.03 1.53 1.03c.87 1.52 2.34 1.07 2.91.83c.09-.65.35-1.09.63-1.34c-2.22-.25-4.55-1.11-4.55-4.92c0-1.11.38-2 1.03-2.71c-.1-.25-.45-1.29.1-2.64c0 0 .84-.27 2.75 1.02c.79-.22 1.65-.33 2.5-.33c.85 0 1.71.11 2.5.33c1.91-1.29 2.75-1.02 2.75-1.02c.55 1.35.2 2.39.1 2.64c.65.71 1.03 1.6 1.03 2.71c0 3.82-2.34 4.66-4.57 4.91c.36.31.69.92.69 1.85V21c0 .27.16.59.67.5C19.14 20.16 22 16.42 22 12A10 10 0 0 0 12 2" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="relative group overflow-hidden card variant-outlined">
                            <div aria-hidden="true"
                                class="inset-0 absolute aspect-video border rounded-full -translate-y-1/2 group-hover:-translate-y-1/4 duration-300 bg-gradient-to-b from-danger-500 to-white dark:from-white dark:to-white blur-2xl opacity-25 dark:opacity-0 dark:group-hover:opacity-5">
                            </div>
                            <div class="relative">
                                <div
                                    class="badge variant-outlined flex relative *:relative *:size-6 *:m-auto size-12 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="0.95em" height="1em"
                                        viewBox="0 0 256 271">
                                        <defs>
                                            <linearGradient id="logosAngularIcon0" x1="25.071%" x2="96.132%"
                                                y1="90.929%" y2="55.184%">
                                                <stop offset="0%" stop-color="#e40035" />
                                                <stop offset="24%" stop-color="#f60a48" />
                                                <stop offset="35.2%" stop-color="#f20755" />
                                                <stop offset="49.4%" stop-color="#dc087d" />
                                                <stop offset="74.5%" stop-color="#9717e7" />
                                                <stop offset="100%" stop-color="#6c00f5" />
                                            </linearGradient>
                                            <linearGradient id="logosAngularIcon1" x1="21.863%" x2="68.367%"
                                                y1="12.058%" y2="68.21%">
                                                <stop offset="0%" stop-color="#ff31d9" />
                                                <stop offset="100%" stop-color="#ff5be1" stop-opacity="0" />
                                            </linearGradient>
                                        </defs>
                                        <path fill="url(#logosAngularIcon0)"
                                            d="m256 45.179l-9.244 145.158L158.373 0zm-61.217 187.697l-66.782 38.105l-66.784-38.105L74.8 199.958h106.4zM128.001 72.249l34.994 85.076h-69.99zM9.149 190.337L0 45.179L97.627 0z" />
                                        <path fill="url(#logosAngularIcon1)"
                                            d="m256 45.179l-9.244 145.158L158.373 0zm-61.217 187.697l-66.782 38.105l-66.784-38.105L74.8 199.958h106.4zM128.001 72.249l34.994 85.076h-69.99zM9.149 190.337L0 45.179L97.627 0z" />
                                    </svg>
                                </div>

                                <div class="mt-6 pb-6 rounded-b-[--card-border-radius]">
                                    <p class="text-gray-700 dark:text-gray-300">Amet praesentium deserunt ex commodi
                                        tempore fuga voluptatem. Sit, sapiente.</p>
                                </div>
                                <div class="flex gap-3 -mb-[--card-padding] py-4 border-t">
                                    <a href="#" download="/" class="group btn variant-soft sz-sm">
                                        <span>Download</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            viewBox="0 0 24 24">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="m17 13l-5 5m0 0l-5-5m5 5V6" />
                                        </svg>
                                    </a>
                                    <a href="https://github.com/tailus-ui" class="btn variant-soft sz-sm icon-only">
                                        <span class="sr-only">Source Code</span>
                                        <svg class="size-5" xmlns="http://www.w3.org/2000/svg" width="1em"
                                            height="1em" viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M12 2A10 10 0 0 0 2 12c0 4.42 2.87 8.17 6.84 9.5c.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34c-.46-1.16-1.11-1.47-1.11-1.47c-.91-.62.07-.6.07-.6c1 .07 1.53 1.03 1.53 1.03c.87 1.52 2.34 1.07 2.91.83c.09-.65.35-1.09.63-1.34c-2.22-.25-4.55-1.11-4.55-4.92c0-1.11.38-2 1.03-2.71c-.1-.25-.45-1.29.1-2.64c0 0 .84-.27 2.75 1.02c.79-.22 1.65-.33 2.5-.33c.85 0 1.71.11 2.5.33c1.91-1.29 2.75-1.02 2.75-1.02c.55 1.35.2 2.39.1 2.64c.65.71 1.03 1.6 1.03 2.71c0 3.82-2.34 4.66-4.57 4.91c.36.31.69.92.69 1.85V21c0 .27.16.59.67.5C19.14 20.16 22 16.42 22 12A10 10 0 0 0 12 2" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="relative group overflow-hidden card variant-outlined">
                            <div aria-hidden="true"
                                class="inset-0 absolute aspect-video border rounded-full -translate-y-1/2 group-hover:-translate-y-1/4 duration-300 bg-gradient-to-b from-gray-500 to-white dark:from-white dark:to-white blur-2xl opacity-25 dark:opacity-0 dark:group-hover:opacity-5">
                            </div>
                            <div class="relative">
                                <div
                                    class="badge variant-outlined flex relative *:relative *:size-6 *:m-auto size-12 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                        viewBox="0 0 15 15">
                                        <path fill="currentColor"
                                            d="m4.5 4.5l.405-.293A.5.5 0 0 0 4 4.5zm3 9.5A6.5 6.5 0 0 1 1 7.5H0A7.5 7.5 0 0 0 7.5 15zM14 7.5A6.5 6.5 0 0 1 7.5 14v1A7.5 7.5 0 0 0 15 7.5zM7.5 1A6.5 6.5 0 0 1 14 7.5h1A7.5 7.5 0 0 0 7.5 0zm0-1A7.5 7.5 0 0 0 0 7.5h1A6.5 6.5 0 0 1 7.5 1zM5 12V4.5H4V12zm-.905-7.207l6.5 9l.81-.586l-6.5-9zM10 4v6h1V4z" />
                                    </svg>
                                </div>

                                <div class="mt-6 pb-6 rounded-b-[--card-border-radius]">
                                    <p class="text-gray-700 dark:text-gray-300">Amet praesentium deserunt ex commodi
                                        tempore fuga voluptatem. Sit, sapiente.</p>
                                </div>
                                <div class="flex gap-3 -mb-[--card-padding] py-4 border-t">
                                    <a href="#" download="/" class="group btn variant-soft sz-sm">
                                        <span>Download</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            viewBox="0 0 24 24">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="m17 13l-5 5m0 0l-5-5m5 5V6" />
                                        </svg>
                                    </a>
                                    <a href="https://github.com/tailus-ui" class="btn variant-soft sz-sm icon-only">
                                        <span class="sr-only">Source Code</span>
                                        <svg class="size-5" xmlns="http://www.w3.org/2000/svg" width="1em"
                                            height="1em" viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M12 2A10 10 0 0 0 2 12c0 4.42 2.87 8.17 6.84 9.5c.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34c-.46-1.16-1.11-1.47-1.11-1.47c-.91-.62.07-.6.07-.6c1 .07 1.53 1.03 1.53 1.03c.87 1.52 2.34 1.07 2.91.83c.09-.65.35-1.09.63-1.34c-2.22-.25-4.55-1.11-4.55-4.92c0-1.11.38-2 1.03-2.71c-.1-.25-.45-1.29.1-2.64c0 0 .84-.27 2.75 1.02c.79-.22 1.65-.33 2.5-.33c.85 0 1.71.11 2.5.33c1.91-1.29 2.75-1.02 2.75-1.02c.55 1.35.2 2.39.1 2.64c.65.71 1.03 1.6 1.03 2.71c0 3.82-2.34 4.66-4.57 4.91c.36.31.69.92.69 1.85V21c0 .27.16.59.67.5C19.14 20.16 22 16.42 22 12A10 10 0 0 0 12 2" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="relative group overflow-hidden card variant-outlined">
                            <div aria-hidden="true"
                                class="inset-0 absolute aspect-video border rounded-full -translate-y-1/2 group-hover:-translate-y-1/4 duration-300 bg-gradient-to-b from-warning-500 to-white dark:from-white dark:to-white blur-2xl opacity-25 dark:opacity-0 dark:group-hover:opacity-5">
                            </div>
                            <div class="relative">
                                <div
                                    class="badge variant-outlined flex relative *:relative *:size-6 *:m-auto size-12 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="0.73em" height="1em"
                                        viewBox="0 0 256 351">
                                        <defs>
                                            <filter id="logosFirebase0" width="200%" height="200%" x="-50%"
                                                y="-50%" filterUnits="objectBoundingBox">
                                                <feGaussianBlur in="SourceAlpha" result="shadowBlurInner1"
                                                    stdDeviation="17.5" />
                                                <feOffset in="shadowBlurInner1" result="shadowOffsetInner1" />
                                                <feComposite in="shadowOffsetInner1" in2="SourceAlpha" k2="-1"
                                                    k3="1" operator="arithmetic"
                                                    result="shadowInnerInner1" />
                                                <feColorMatrix in="shadowInnerInner1"
                                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.06 0" />
                                            </filter>
                                            <filter id="logosFirebase1" width="200%" height="200%" x="-50%"
                                                y="-50%" filterUnits="objectBoundingBox">
                                                <feGaussianBlur in="SourceAlpha" result="shadowBlurInner1"
                                                    stdDeviation="3.5" />
                                                <feOffset dx="1" dy="-9" in="shadowBlurInner1"
                                                    result="shadowOffsetInner1" />
                                                <feComposite in="shadowOffsetInner1" in2="SourceAlpha" k2="-1"
                                                    k3="1" operator="arithmetic"
                                                    result="shadowInnerInner1" />
                                                <feColorMatrix in="shadowInnerInner1"
                                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.09 0" />
                                            </filter>
                                            <path id="logosFirebase2"
                                                d="m1.253 280.732l1.605-3.131l99.353-188.518l-44.15-83.475C54.392-1.283 45.074.474 43.87 8.188z" />
                                            <path id="logosFirebase3"
                                                d="m134.417 148.974l32.039-32.812l-32.039-61.007c-3.042-5.791-10.433-6.398-13.443-.59l-17.705 34.109l-.53 1.744z" />
                                        </defs>
                                        <path fill="#ffc24a"
                                            d="m0 282.998l2.123-2.972L102.527 89.512l.212-2.017L58.48 4.358C54.77-2.606 44.33-.845 43.114 6.951z" />
                                        <use fill="#ffa712" fill-rule="evenodd" href="#logosFirebase2" />
                                        <use filter="url(#logosFirebase0)" href="#logosFirebase2" />
                                        <path fill="#f4bd62"
                                            d="m135.005 150.38l32.955-33.75l-32.965-62.93c-3.129-5.957-11.866-5.975-14.962 0L102.42 87.287v2.86z" />
                                        <use fill="#ffa50e" fill-rule="evenodd" href="#logosFirebase3" />
                                        <use filter="url(#logosFirebase1)" href="#logosFirebase3" />
                                        <path fill="#f6820c"
                                            d="m0 282.998l.962-.968l3.496-1.42l128.477-128l1.628-4.431l-32.05-61.074z" />
                                        <path fill="#fde068"
                                            d="m139.121 347.551l116.275-64.847l-33.204-204.495c-1.039-6.398-8.888-8.927-13.468-4.34L0 282.998l115.608 64.548a24.126 24.126 0 0 0 23.513.005" />
                                        <path fill="#fcca3f"
                                            d="M254.354 282.16L221.402 79.218c-1.03-6.35-7.558-8.977-12.103-4.424L1.29 282.6l114.339 63.908a23.943 23.943 0 0 0 23.334.006z" />
                                        <path fill="#eeab37"
                                            d="M139.12 345.64a24.126 24.126 0 0 1-23.512-.005L.931 282.015l-.93.983l115.607 64.548a24.126 24.126 0 0 0 23.513.005l116.275-64.847l-.285-1.752z" />
                                    </svg>
                                </div>

                                <div class="mt-6 pb-6 rounded-b-[--card-border-radius]">
                                    <p class="text-gray-700 dark:text-gray-300">Amet praesentium deserunt ex commodi
                                        tempore fuga voluptatem. Sit, sapiente.</p>
                                </div>
                                <div class="flex gap-3 -mb-[--card-padding] py-4 border-t">
                                    <a href="#" download="/" class="group btn variant-soft sz-sm">
                                        <span>Download</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            viewBox="0 0 24 24">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="m17 13l-5 5m0 0l-5-5m5 5V6" />
                                        </svg>
                                    </a>
                                    <a href="https://github.com/tailus-ui" class="btn variant-soft sz-sm icon-only">
                                        <span class="sr-only">Source Code</span>
                                        <svg class="size-5" xmlns="http://www.w3.org/2000/svg" width="1em"
                                            height="1em" viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M12 2A10 10 0 0 0 2 12c0 4.42 2.87 8.17 6.84 9.5c.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34c-.46-1.16-1.11-1.47-1.11-1.47c-.91-.62.07-.6.07-.6c1 .07 1.53 1.03 1.53 1.03c.87 1.52 2.34 1.07 2.91.83c.09-.65.35-1.09.63-1.34c-2.22-.25-4.55-1.11-4.55-4.92c0-1.11.38-2 1.03-2.71c-.1-.25-.45-1.29.1-2.64c0 0 .84-.27 2.75 1.02c.79-.22 1.65-.33 2.5-.33c.85 0 1.71.11 2.5.33c1.91-1.29 2.75-1.02 2.75-1.02c.55 1.35.2 2.39.1 2.64c.65.71 1.03 1.6 1.03 2.71c0 3.82-2.34 4.66-4.57 4.91c.36.31.69.92.69 1.85V21c0 .27.16.59.67.5C19.14 20.16 22 16.42 22 12A10 10 0 0 0 12 2" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="relative group overflow-hidden card variant-outlined">
                            <div aria-hidden="true"
                                class="inset-0 absolute aspect-video border rounded-full -translate-y-1/2 group-hover:-translate-y-1/4 duration-300 bg-gradient-to-b from-info-500 to-white dark:from-white dark:to-white blur-2xl opacity-25 dark:opacity-0 dark:group-hover:opacity-5">
                            </div>
                            <div class="relative">
                                <div
                                    class="badge variant-outlined flex relative *:relative *:size-6 *:m-auto size-12 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                        viewBox="0 0 128 128">
                                        <path fill="#0080ff"
                                            d="M64.142 102.96H39.24V78.522h24.903ZM39.24 122.131H20.373v-19.173H39.24Zm-18.866-19.173H4.53V87.167h15.843Zm43.394 24.814v-24.814c26.41 0 46.784-25.94 36.597-53.388c-3.775-10.15-11.694-18.42-22.26-22.181c-27.167-9.772-53.2 10.527-53.2 36.468H0c0-41.354 40.37-74.064 84.52-60.53c19.242 6.017 34.334 21.055 40.37 40.23c13.581 43.985-19.245 84.214-61.123 84.214Zm0 0" />
                                    </svg>
                                </div>

                                <div class="mt-6 pb-6 rounded-b-[--card-border-radius]">
                                    <p class="text-gray-700 dark:text-gray-300">Amet praesentium deserunt ex commodi
                                        tempore fuga voluptatem. Sit, sapiente.</p>
                                </div>
                                <div class="flex gap-3 -mb-[--card-padding] py-4 border-t">
                                    <a href="#" download="/" class="group btn variant-soft sz-sm">
                                        <span>Download</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            viewBox="0 0 24 24">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="m17 13l-5 5m0 0l-5-5m5 5V6" />
                                        </svg>
                                    </a>
                                    <a href="https://github.com/tailus-ui" class="btn variant-soft sz-sm icon-only">
                                        <span class="sr-only">Source Code</span>
                                        <svg class="size-5" xmlns="http://www.w3.org/2000/svg" width="1em"
                                            height="1em" viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M12 2A10 10 0 0 0 2 12c0 4.42 2.87 8.17 6.84 9.5c.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34c-.46-1.16-1.11-1.47-1.11-1.47c-.91-.62.07-.6.07-.6c1 .07 1.53 1.03 1.53 1.03c.87 1.52 2.34 1.07 2.91.83c.09-.65.35-1.09.63-1.34c-2.22-.25-4.55-1.11-4.55-4.92c0-1.11.38-2 1.03-2.71c-.1-.25-.45-1.29.1-2.64c0 0 .84-.27 2.75 1.02c.79-.22 1.65-.33 2.5-.33c.85 0 1.71.11 2.5.33c1.91-1.29 2.75-1.02 2.75-1.02c.55 1.35.2 2.39.1 2.64c.65.71 1.03 1.6 1.03 2.71c0 3.82-2.34 4.66-4.57 4.91c.36.31.69.92.69 1.85V21c0 .27.16.59.67.5C19.14 20.16 22 16.42 22 12A10 10 0 0 0 12 2" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="pt-36">
                <div class="mx-auto px-6 max-w-6xl">
                    <div class="text-center">
                        <h2 class="text-3xl text-gray-950 dark:text-white font-semibold">Topik Data </h2>
                        <p class="mt-6 text-gray-700 dark:text-gray-300"> Jelajahi 10 kategori data Ntt</p>
                    </div>
                    <div class="mt-12 relative w-fit h-fit sm:mx-auto sm:px-0 -mx-6 px-6 ">
                        <div>
                            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                                <div style="opacity: 1; filter: blur(0px); transform: none;">
                                    <a class="block" href="/dataset?topik=Ekonomi dan Industri">
                                        <div
                                            class="rounded-xl border bg-card  text-card-foreground shadow transition-all hover:shadow-lg">
                                            <div class="flex items-center gap-4 p-6">
                                                <div class="rounded-lg bg-red-100 p-2 text-red-500">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="lucide lucide-building2 h-6 w-6">
                                                        <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path>
                                                        <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path>
                                                        <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"></path>
                                                        <path d="M10 6h4"></path>
                                                        <path d="M10 10h4"></path>
                                                        <path d="M10 14h4"></path>
                                                        <path d="M10 18h4"></path>
                                                    </svg>
                                                </div>
                                                <span class="font-medium">Ekonomi dan Industri</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div style="opacity: 1; filter: blur(0px); transform: none;"><a class="block"
                                        href="/dataset?topik=Lingkungan dan Sumber Daya Alam">
                                        <div
                                            class="rounded-xl border bg-card text-card-foreground shadow transition-all hover:shadow-lg">
                                            <div class="flex items-center gap-4 p-6">
                                                <div class="rounded-lg bg-red-100 p-2 text-red-500"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="lucide lucide-trees h-6 w-6">
                                                        <path
                                                            d="M10 10v.2A3 3 0 0 1 8.9 16H5a3 3 0 0 1-1-5.8V10a3 3 0 0 1 6 0Z">
                                                        </path>
                                                        <path d="M7 16v6"></path>
                                                        <path d="M13 19v3"></path>
                                                        <path
                                                            d="M12 19h8.3a1 1 0 0 0 .7-1.7L18 14h.3a1 1 0 0 0 .7-1.7L16 9h.2a1 1 0 0 0 .8-1.7L13 3l-1.4 1.5">
                                                        </path>
                                                    </svg></div><span class="font-medium">Lingkungan dan Sumber Daya
                                                    Alam</span>
                                            </div>
                                        </div>
                                    </a></div>
                                <div style="opacity: 1; filter: blur(0px); transform: none;"><a class="block"
                                        href="/dataset?topik=Budaya dan Agama">
                                        <div
                                            class="rounded-xl border bg-card text-card-foreground shadow transition-all hover:shadow-lg">
                                            <div class="flex items-center gap-4 p-6">
                                                <div class="rounded-lg bg-red-100 p-2 text-red-500"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="lucide lucide-landmark h-6 w-6">
                                                        <line x1="3" x2="21" y1="22"
                                                            y2="22"></line>
                                                        <line x1="6" x2="6" y1="18"
                                                            y2="11"></line>
                                                        <line x1="10" x2="10" y1="18"
                                                            y2="11"></line>
                                                        <line x1="14" x2="14" y1="18"
                                                            y2="11"></line>
                                                        <line x1="18" x2="18" y1="18"
                                                            y2="11"></line>
                                                        <polygon points="12 2 20 7 4 7"></polygon>
                                                    </svg></div><span class="font-medium">Budaya dan Agama</span>
                                            </div>
                                        </div>
                                    </a></div>
                                <div style="opacity: 1; filter: blur(0px); transform: none;"><a class="block"
                                        href="/dataset?topik=Perlindungan Sosial dan Kesehatan">
                                        <div
                                            class="rounded-xl border bg-card text-card-foreground shadow transition-all hover:shadow-lg">
                                            <div class="flex items-center gap-4 p-6">
                                                <div class="rounded-lg bg-red-100 p-2 text-red-500"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="lucide lucide-users h-6 w-6">
                                                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                                        <circle cx="9" cy="7" r="4"></circle>
                                                        <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                                    </svg></div><span class="font-medium">Perlindungan Sosial dan
                                                    Kesehatan</span>
                                            </div>
                                        </div>
                                    </a></div>
                                <div style="opacity: 1; filter: blur(0px); transform: none;"><a class="block"
                                        href="/dataset?topik=Pembangunan Daerah">
                                        <div
                                            class="rounded-xl border bg-card text-card-foreground shadow transition-all hover:shadow-lg">
                                            <div class="flex items-center gap-4 p-6">
                                                <div class="rounded-lg bg-red-100 p-2 text-red-500"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="lucide lucide-square-chart-gantt h-6 w-6">
                                                        <rect width="18" height="18" x="3" y="3"
                                                            rx="2"></rect>
                                                        <path d="M9 8h7"></path>
                                                        <path d="M8 12h6"></path>
                                                        <path d="M11 16h5"></path>
                                                    </svg></div><span class="font-medium">Pembangunan Daerah</span>
                                            </div>
                                        </div>
                                    </a></div>
                                <div style="opacity: 1; filter: blur(0px); transform: none;"><a class="block"
                                        href="/dataset?topik=Pendidikan dan Tenaga Kerja">
                                        <div
                                            class="rounded-xl border bg-card text-card-foreground shadow transition-all hover:shadow-lg">
                                            <div class="flex items-center gap-4 p-6">
                                                <div class="rounded-lg bg-red-100 p-2 text-red-500"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="lucide lucide-graduation-cap h-6 w-6">
                                                        <path
                                                            d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z">
                                                        </path>
                                                        <path d="M22 10v6"></path>
                                                        <path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path>
                                                    </svg></div><span class="font-medium">Pendidikan dan Tenaga
                                                    Kerja</span>
                                            </div>
                                        </div>
                                    </a></div>
                                <div style="opacity: 1; filter: blur(0px); transform: none;"><a class="block"
                                        href="/dataset?topik=Pemerintahan Umum">
                                        <div
                                            class="rounded-xl border bg-card text-card-foreground shadow transition-all hover:shadow-lg">
                                            <div class="flex items-center gap-4 p-6">
                                                <div class="rounded-lg bg-red-100 p-2 text-red-500"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="lucide lucide-building h-6 w-6">
                                                        <rect width="16" height="20" x="4" y="2"
                                                            rx="2" ry="2"></rect>
                                                        <path d="M9 22v-4h6v4"></path>
                                                        <path d="M8 6h.01"></path>
                                                        <path d="M16 6h.01"></path>
                                                        <path d="M12 6h.01"></path>
                                                        <path d="M12 10h.01"></path>
                                                        <path d="M12 14h.01"></path>
                                                        <path d="M16 10h.01"></path>
                                                        <path d="M16 14h.01"></path>
                                                        <path d="M8 10h.01"></path>
                                                        <path d="M8 14h.01"></path>
                                                    </svg></div><span class="font-medium">Pemerintahan Umum</span>
                                            </div>
                                        </div>
                                    </a></div>
                                <div style="opacity: 1; filter: blur(0px); transform: none;"><a class="block"
                                        href="/dataset?topik=Pendukung Umum">
                                        <div
                                            class="rounded-xl border bg-card text-card-foreground shadow transition-all hover:shadow-lg">
                                            <div class="flex items-center gap-4 p-6">
                                                <div class="rounded-lg bg-red-100 p-2 text-red-500"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="lucide lucide-user-plus h-6 w-6">
                                                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                                        <circle cx="9" cy="7" r="4"></circle>
                                                        <line x1="19" x2="19" y1="8"
                                                            y2="14"></line>
                                                        <line x1="22" x2="16" y1="11"
                                                            y2="11"></line>
                                                    </svg></div><span class="font-medium">Pendukung Umum</span>
                                            </div>
                                        </div>
                                    </a></div>
                                <div style="opacity: 0; filter: blur(4px); transform: translateY(100px);"><a
                                        class="block" href="/dataset?topik=Ketertiban Umum dan Keselamatan">
                                        <div
                                            class="rounded-xl border bg-card text-card-foreground shadow transition-all hover:shadow-lg">
                                            <div class="flex items-center gap-4 p-6">
                                                <div class="rounded-lg bg-red-100 p-2 text-red-500"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="lucide lucide-shield h-6 w-6">
                                                        <path
                                                            d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                                                        </path>
                                                    </svg></div><span class="font-medium">Ketertiban Umum dan
                                                    Keselamatan</span>
                                            </div>
                                        </div>
                                    </a></div>
                                <div style="opacity: 0; filter: blur(4px); transform: translateY(100px);"><a
                                        class="block" href="/dataset?topik=Pertahanan dan Luar Negeri">
                                        <div
                                            class="rounded-xl border bg-card text-card-foreground shadow transition-all hover:shadow-lg">
                                            <div class="flex items-center gap-4 p-6">
                                                <div class="rounded-lg bg-red-100 p-2 text-red-500"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="lucide lucide-globe h-6 w-6">
                                                        <circle cx="12" cy="12" r="10"></circle>
                                                        <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20">
                                                        </path>
                                                        <path d="M2 12h20"></path>
                                                    </svg></div><span class="font-medium">Pertahanan dan Luar
                                                    Negeri</span>
                                            </div>
                                        </div>
                                    </a></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>




    </main>

    <footer class="card variant-outlined !bg-transparent">
        <div class="max-w-6xl mx-auto space-y-16 px-6 py-16 ">
            <div class="flex flex-wrap items-center justify-between gap-4 border-b pb-8">
                <a href="/" aria-label="tailus logo">
                    <svg class="text-title h-7" viewBox="0 0 298 84" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M107 30.7857H113.6V16.3429H122.686V30.7857H131.386V38.5H122.686V53.5429C122.686 55.4286 123 56.8429 123.629 57.7857C124.286 58.7286 125.214 59.2 126.414 59.2C127.414 59.2 128.2 59.0143 128.771 58.6429C129.371 58.2714 129.729 58.0143 129.843 57.8714L133.229 64.5143C133.057 64.6857 132.557 64.9714 131.729 65.3714C130.9 65.7714 129.829 66.1429 128.514 66.4857C127.2 66.8286 125.7 67 124.014 67C121.043 67 118.557 66.1143 116.557 64.3429C114.586 62.5714 113.6 59.8 113.6 56.0286V38.5H107V30.7857ZM167.156 65.9714V59.4571C166.928 60.1429 166.27 61.0857 165.185 62.2857C164.128 63.4857 162.67 64.5714 160.813 65.5429C158.985 66.5143 156.813 67 154.299 67C151.013 67 148.056 66.2143 145.428 64.6429C142.799 63.0714 140.728 60.8857 139.213 58.0857C137.699 55.2857 136.942 52.0571 136.942 48.4C136.942 44.7429 137.699 41.5143 139.213 38.7143C140.728 35.9143 142.799 33.7286 145.428 32.1571C148.056 30.5571 151.013 29.7571 154.299 29.7571C156.756 29.7571 158.885 30.1857 160.685 31.0429C162.485 31.9 163.928 32.8857 165.013 34C166.128 35.1143 166.813 36.0857 167.07 36.9143V30.7857H176.156V65.9714H167.156ZM145.985 48.4C145.985 50.6571 146.485 52.6286 147.485 54.3143C148.485 56 149.785 57.3 151.385 58.2143C153.013 59.1286 154.756 59.5857 156.613 59.5857C158.613 59.5857 160.385 59.1143 161.928 58.1714C163.499 57.2286 164.728 55.9286 165.613 54.2714C166.528 52.5857 166.985 50.6286 166.985 48.4C166.985 46.1714 166.528 44.2286 165.613 42.5714C164.728 40.8857 163.499 39.5714 161.928 38.6286C160.385 37.6571 158.613 37.1714 156.613 37.1714C154.756 37.1714 153.013 37.6429 151.385 38.5857C149.785 39.5 148.485 40.8 147.485 42.4857C146.485 44.1714 145.985 46.1429 145.985 48.4ZM186.271 65.9714V30.7857H195.4V65.9714H186.271ZM190.943 20.2429C189.4 20.2429 188.071 19.6857 186.957 18.5714C185.871 17.4571 185.329 16.1286 185.329 14.5857C185.329 13.0429 185.871 11.7143 186.957 10.6C188.071 9.45714 189.4 8.88571 190.943 8.88571C191.971 8.88571 192.914 9.15714 193.771 9.7C194.657 10.2143 195.357 10.9 195.871 11.7571C196.414 12.5857 196.686 13.5286 196.686 14.5857C196.686 16.1286 196.129 17.4571 195.014 18.5714C193.9 19.6857 192.543 20.2429 190.943 20.2429ZM215.437 65.9714H206.222V7H215.437V65.9714ZM234.044 48.0571C234.044 51.4857 234.744 54.2143 236.144 56.2429C237.572 58.2714 239.815 59.2857 242.872 59.2857C245.958 59.2857 248.201 58.2714 249.601 56.2429C251.001 54.2143 251.701 51.4857 251.701 48.0571V30.7857H260.787V49.2143C260.787 52.7571 260.087 55.8714 258.687 58.5571C257.287 61.2143 255.258 63.2857 252.601 64.7714C249.944 66.2571 246.701 67 242.872 67C239.072 67 235.844 66.2571 233.187 64.7714C230.53 63.2857 228.501 61.2143 227.101 58.5571C225.701 55.8714 225.001 52.7571 225.001 49.2143V30.7857H234.044V48.0571ZM284.016 29.7571C285.988 29.7571 287.816 29.9429 289.502 30.3143C291.188 30.6857 292.631 31.1286 293.831 31.6429C295.031 32.1571 295.859 32.5857 296.316 32.9286L292.973 38.5857C292.402 38.1 291.373 37.5429 289.888 36.9143C288.431 36.2857 286.788 35.9714 284.959 35.9714C283.131 35.9714 281.588 36.3 280.331 36.9571C279.073 37.6143 278.445 38.6 278.445 39.9143C278.445 41.2 279.102 42.2286 280.416 43C281.759 43.7714 283.573 44.4143 285.859 44.9286C287.745 45.3571 289.545 45.9571 291.259 46.7286C292.973 47.4714 294.373 48.5429 295.459 49.9429C296.573 51.3143 297.131 53.1571 297.131 55.4714C297.131 57.6714 296.659 59.5143 295.716 61C294.802 62.4571 293.573 63.6286 292.031 64.5143C290.488 65.4 288.773 66.0286 286.888 66.4C285.031 66.8 283.159 67 281.273 67C278.959 67 276.888 66.7714 275.059 66.3143C273.259 65.8571 271.759 65.3286 270.559 64.7286C269.359 64.1 268.502 63.5714 267.988 63.1429L271.331 56.8C272.073 57.5143 273.288 58.2714 274.973 59.0714C276.659 59.8429 278.545 60.2286 280.631 60.2286C282.859 60.2286 284.645 59.8 285.988 58.9429C287.331 58.0857 288.002 56.9429 288.002 55.5143C288.002 54.4571 287.673 53.6 287.016 52.9429C286.388 52.2857 285.516 51.7571 284.402 51.3571C283.288 50.9571 282.045 50.6 280.673 50.2857C279.388 49.9714 278.088 49.5714 276.773 49.0857C275.488 48.5714 274.302 47.9143 273.216 47.1143C272.131 46.2857 271.259 45.2571 270.602 44.0286C269.945 42.8 269.616 41.3571 269.616 39.7C269.616 37.5857 270.288 35.7857 271.631 34.3C272.973 32.8143 274.745 31.6857 276.945 30.9143C279.145 30.1429 281.502 29.7571 284.016 29.7571Z"
                            fill="currentColor"></path>
                        <path
                            d="M53.6523 31.5142C53.6523 28.5967 51.2872 26.2316 48.3697 26.2316C45.4522 26.2316 43.0871 28.5967 43.0871 31.5142C43.0871 34.4317 45.4522 36.7968 48.3697 36.7968C51.2872 36.7968 53.6523 34.4317 53.6523 31.5142Z"
                            fill="currentColor"></path>
                        <path
                            d="M42.6502 36.769C42.5195 36.7593 42.3875 36.7543 42.2543 36.7543C39.3572 36.7543 37.0087 39.1029 37.0087 42C37.0087 44.8971 39.3572 47.2457 42.2543 47.2457C45.1514 47.2457 47.5 44.8971 47.5 42C47.5 40.92 47.1736 39.9162 46.6141 39.0819C45.0637 38.7237 43.691 37.9013 42.6502 36.769Z"
                            fill="currentColor"></path>
                        <path
                            d="M34.8047 39.7898C34.5971 40.4904 34.4857 41.2322 34.4857 42C34.4857 42.7679 34.5971 43.5097 34.8047 44.2102C33.969 46.0163 32.1408 47.2693 30.02 47.2693C27.1098 47.2693 24.7507 44.9102 24.7507 42C24.7507 39.0899 27.1098 36.7308 30.02 36.7308C32.1408 36.7308 33.969 37.9837 34.8047 39.7898Z"
                            fill="currentColor"></path>
                        <path
                            d="M48.3708 47.2122C51.2834 47.2122 53.6445 49.5733 53.6445 52.4859C53.6445 55.3984 51.2834 57.7595 48.3708 57.7595C45.4583 57.7595 43.0971 55.3984 43.0971 52.4859C43.0971 51.4104 43.4191 50.4101 43.9718 49.5761C45.5507 49.2193 46.9472 48.3816 47.9994 47.225C48.1221 47.2165 48.246 47.2122 48.3708 47.2122Z"
                            fill="currentColor"></path>
                        <path
                            d="M59.7461 42C59.7461 39.0938 57.3901 36.7378 54.4838 36.7378C54.3567 36.7378 54.2306 36.7423 54.1057 36.7512C53.0573 37.8988 51.6691 38.7307 50.1003 39.0877C49.9504 39.3129 49.8173 39.5503 49.703 39.7982C49.909 40.4962 50.0195 41.2352 50.0195 42C50.0195 42.7648 49.909 43.5038 49.703 44.2019C49.8173 44.4497 49.9504 44.6872 50.1003 44.9124C51.6691 45.2694 53.0573 46.1013 54.1057 47.2489C54.2306 47.2578 54.3567 47.2623 54.4838 47.2623C57.3901 47.2623 59.7461 44.9063 59.7461 42Z"
                            fill="currentColor"></path>
                        <path
                            d="M40.6028 52.4859C40.6028 51.718 40.7143 50.9761 40.9219 50.2755C40.809 50.0315 40.678 49.7976 40.5306 49.5755C38.9544 49.2187 37.56 48.3825 36.5088 47.2283C36.3856 47.2197 36.2612 47.2153 36.1358 47.2153C36.0102 47.2153 35.8855 47.2197 35.7621 47.2284C34.7111 48.3823 33.317 49.2184 31.7411 49.5753C31.1877 50.4093 30.8653 51.4099 30.8653 52.4859C30.8653 55.3967 33.225 57.7564 36.1358 57.7564C38.2573 57.7564 40.0861 56.503 40.9219 54.6962C40.7143 53.9957 40.6028 53.2538 40.6028 52.4859Z"
                            fill="currentColor"></path>
                        <path
                            d="M40.5094 34.4263C40.6608 34.1992 40.795 33.9595 40.9102 33.7094C40.705 33.0126 40.595 32.2752 40.595 31.512C40.595 30.7489 40.705 30.0115 40.9102 29.3147C40.0777 27.5058 38.2492 26.25 36.1274 26.25C33.2213 26.25 30.8654 28.6059 30.8654 31.512C30.8654 32.5894 31.1892 33.5912 31.7448 34.4253C33.3117 34.7828 34.6983 35.6141 35.7457 36.7605C35.8718 36.7695 35.9991 36.7741 36.1274 36.7741C36.2572 36.7741 36.3858 36.7694 36.5132 36.7602C37.5596 35.615 38.9445 34.7843 40.5094 34.4263Z"
                            fill="currentColor"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M42 84C65.196 84 84 65.196 84 42C84 18.804 65.196 0 42 0C18.804 0 0 18.804 0 42C0 65.196 18.804 84 42 84ZM42 74.518C24.0408 74.518 9.48201 59.9592 9.48201 42C9.48201 24.0408 24.0408 9.48201 42 9.48201C59.9592 9.48201 74.518 24.0408 74.518 42C74.518 59.9592 59.9592 74.518 42 74.518Z"
                            fill="currentColor"></path>
                    </svg>
                </a>
                <div class="flex gap-3">
                    <a href="https://github.com/tailus-ui" target="blank" aria-label="github"
                        class="size-8 flex *:m-auto text-body hover:text-primary-600 dark:hover:text-primary-500">
                        <svg class="size-5" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                            fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                        </svg>
                    </a>
                    <a href="https://twitter.com/tailus_ui" target="blank" aria-label="twitter"
                        class="size-8 flex *:m-auto rounded-[--btn-border-radius] text-gray-600 dark:text-gray-400 hover:text-primary-600 dark:hover:text-primary-500">
                        <svg class="size-5" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                            viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M18.205 2.25h3.308l-7.227 8.26l8.502 11.24H16.13l-5.214-6.817L4.95 21.75H1.64l7.73-8.835L1.215 2.25H8.04l4.713 6.231zm-1.161 17.52h1.833L7.045 4.126H5.078z" />
                        </svg>
                        </svg>
                    </a>
                    <a href="https://youtube.com/@tailus-ui" target="blank" aria-label="medium"
                        class="size-8 flex *:m-auto rounded-[--btn-border-radius] text-gray-600 dark:text-gray-400 hover:text-primary-600 dark:hover:text-primary-500">
                        <svg class="size-5" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                            viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="m10 15l5.19-3L10 9zm11.56-7.83c.13.47.22 1.1.28 1.9c.07.8.1 1.49.1 2.09L22 12c0 2.19-.16 3.8-.44 4.83c-.25.9-.83 1.48-1.73 1.73c-.47.13-1.33.22-2.65.28c-1.3.07-2.49.1-3.59.1L12 19c-4.19 0-6.8-.16-7.83-.44c-.9-.25-1.48-.83-1.73-1.73c-.13-.47-.22-1.1-.28-1.9c-.07-.8-.1-1.49-.1-2.09L2 12c0-2.19.16-3.8.44-4.83c.25-.9.83-1.48 1.73-1.73c.47-.13 1.33-.22 2.65-.28c1.3-.07 2.49-.1 3.59-.1L12 5c4.19 0 6.8.16 7.83.44c.9.25 1.48.83 1.73 1.73" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-6 sm:grid-cols-4">
                <div>
                    <span class="font-medium text-gray-950 dark:text-white">Enterprise</span>
                    <ul class="mt-4 list-inside space-y-4">
                        <li>
                            <a href="#"
                                class="text-sm text-gray-600 dark:text-gray-400 hover:text-primary-600 dark:hover:text-primary-500">About</a>
                        </li>
                        <li>
                            <a href="#"
                                class="text-sm text-gray-600 dark:text-gray-400 hover:text-primary-600 dark:hover:text-primary-500">Customers</a>
                        </li>
                        <li>
                            <a href="#"
                                class="text-sm text-gray-600 dark:text-gray-400 hover:text-primary-600 dark:hover:text-primary-500">Enterprise</a>
                        </li>
                        <li>
                            <a href="#"
                                class="text-sm text-gray-600 dark:text-gray-400 hover:text-primary-600 dark:hover:text-primary-500">Partners</a>
                        </li>
                        <li>
                            <a href="#"
                                class="text-sm text-gray-600 dark:text-gray-400 hover:text-primary-600 dark:hover:text-primary-500">Jobs</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <span class="text-sm font-medium text-gray-950 dark:text-white">Product</span>
                    <ul class="mt-4 list-inside space-y-4">
                        <li>
                            <a href="#"
                                class="text-sm text-gray-600 dark:text-gray-400 hover:text-primary-600 dark:hover:text-primary-500">Security</a>
                        </li>
                        <li>
                            <a href="#"
                                class="text-sm text-gray-600 dark:text-gray-400 hover:text-primary-600 dark:hover:text-primary-500">Customization</a>
                        </li>
                        <li>
                            <a href="#"
                                class="text-sm text-gray-600 dark:text-gray-400 hover:text-primary-600 dark:hover:text-primary-500">Enterprise</a>
                        </li>
                        <li>
                            <a href="#"
                                class="text-sm text-gray-600 dark:text-gray-400 hover:text-primary-600 dark:hover:text-primary-500">Partners</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <span class="text-sm font-medium text-gray-950 dark:text-white">Docs</span>
                    <ul class="mt-4 list-inside space-y-4">
                        <li>
                            <a href="#"
                                class="text-sm text-gray-600 dark:text-gray-400 hover:text-primary-600 dark:hover:text-primary-500">Introduction</a>
                        </li>
                        <li>
                            <a href="#"
                                class="text-sm text-gray-600 dark:text-gray-400 hover:text-primary-600 dark:hover:text-primary-500">Installation</a>
                        </li>
                        <li>
                            <a href="#"
                                class="text-sm text-gray-600 dark:text-gray-400 hover:text-primary-600 dark:hover:text-primary-500">Utils</a>
                        </li>
                        <li>
                            <a href="#"
                                class="text-sm text-gray-600 dark:text-gray-400 hover:text-primary-600 dark:hover:text-primary-500">Principles</a>
                        </li>
                        <li>
                            <a href="#"
                                class="text-sm text-gray-600 dark:text-gray-400 hover:text-primary-600 dark:hover:text-primary-500">Jargon</a>
                        </li>
                        <li>
                            <a href="#"
                                class="text-sm text-gray-600 dark:text-gray-400 hover:text-primary-600 dark:hover:text-primary-500">Plugin</a>
                        </li>
                        <li>
                            <a href="#"
                                class="text-sm text-gray-600 dark:text-gray-400 hover:text-primary-600 dark:hover:text-primary-500">Customizer</a>
                        </li>
                        <li>
                            <a href="#"
                                class="text-sm text-gray-600 dark:text-gray-400 hover:text-primary-600 dark:hover:text-primary-500">Boilerplates</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <span class="text-sm font-medium text-gray-950 dark:text-white">Community</span>
                    <ul class="mt-4 list-inside space-y-4">
                        <li>
                            <a href="#"
                                class="text-sm text-gray-600 dark:text-gray-400 hover:text-primary-600 dark:hover:text-primary-500">GitHub</a>
                        </li>
                        <li>
                            <a href="#"
                                class="text-sm text-gray-600 dark:text-gray-400 hover:text-primary-600 dark:hover:text-primary-500">Discord</a>
                        </li>
                        <li>
                            <a href="#"
                                class="text-sm text-gray-600 dark:text-gray-400 hover:text-primary-600 dark:hover:text-primary-500">Slack</a>
                        </li>
                        <li>
                            <a href="#"
                                class="text-sm text-gray-600 dark:text-gray-400 hover:text-primary-600 dark:hover:text-primary-500">X
                                / Twitter</a>
                        </li>
                    </ul>

                    <form class="mt-12 max-w-xs w-full">
                        <div
                            class="space-y-2.5 has-[:disabled]:has-[:where(label,span)]:select-none has-[:disabled]:has-[:where(label,span)]:opacity-50 text-gray-950 dark:text-white has-[:disabled]:has-[:where(label,span)]:text-gray-600 dark:has-[:disabled]:has-[:where(label,span)]:text-gray-400">
                            <label class="block font-medium text-sm" for="email">Subscribe to our
                                newsletter</label>
                            <input class="input variant-mixed sz-md" placeholder="Your email" type="email"
                                id="email" required name="email">
                            <span
                                class="hidden peer-disabled:text-gray-600 dark:peer-disabled:text-gray-400 text-gray-500 dark:text-gray-400 text-sm">Helper
                                message</span>
                        </div>
                        <button type="submit" class="btn variant-neutral sz-md mt-3">
                            <span>Subscribe</span>
                        </button>
                    </form>
                </div>
            </div>
            <div class="flex items-center justify-between rounded-md px-6 py-3 card variant-soft">
                <span class="text-title">&copy; tailus 2021 - Present</span>
                <a href="#"
                    class="text-sm text-body hover:text-primary-600 dark:hover:text-primary-500">Licence</a>
            </div>
        </div>
    </footer>
    @vite(['resources/js/main.js'])
</body>

</html>
