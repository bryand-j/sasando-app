<header id="header" class="group">
    <nav id="nav"
        class="fixed overflow-hidden lg:overflow-visible z-20 w-full border-b bg-white/50 dark:bg-gray-950/50 backdrop-blur-2xl">
        <div class="px-6 m-auto max-w-6xl ">
            <div class="flex flex-wrap items-center justify-between py-2 sm:py-4">
                <div class="w-full items-center flex justify-between lg:w-auto">
                    <a href="/" aria-label="logo" class="text-xl flex items-center font-bold">
                        <img width="36" height="36" src="logo.png" alt="xls" />
                        <div class="ms-2">SASANDO</div>
                    </a>
                    <div class="flex lg:hidden">
                        <button
                            class="switcher group flex justify-center gap-1.5 items-center rounded-[--btn-radius] outline-2 outline-offset-2 focus-visible:outline outline-primary-600 disabled:bg-gray-200 disabled:text-gray-400 disabled:shadow-none disabled:hover:brightness-100 dark:disabled:bg-gray-500/10 dark:disabled:[background-image:none] dark:disabled:text-gray-700 dark:disabled:shadow-none dark:disabled:border-none text-gray-800 hover:bg-gray-100 active:bg-gray-200/75 dark:text-gray-300 dark:hover:bg-gray-500/10 dark:active:bg-gray-500/15 size-9 relative"
                            aria-label="Switch to dark mode">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-moon m-auto size-[1.125rem] absolute inset-0 duration-300 dark:rotate-180 dark:scale-0 dark:opacity-0">
                                <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"></path>
                            </svg>
                        </button>
                        <button id="menu-btn" aria-label="open menu"
                            class="btn variant-ghost sz-md icon-only relative z-20 -mr-2.5 block cursor-pointer lg:hidden">
                            <svg class="text-title m-auto size-6 transition-[transform,opacity] duration-300 group-data-[state=active]:rotate-180 group-data-[state=active]:scale-0 group-data-[state=active]:opacity-0"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9h16.5m-16.5 6.75h16.5">
                                </path>
                            </svg>
                            <svg class="text-title absolute inset-0 m-auto size-6 -rotate-180 scale-0 opacity-0 transition-[transform,opacity] duration-300 group-data-[state=active]:rotate-0 group-data-[state=active]:scale-100 group-data-[state=active]:opacity-100"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div
                    class="w-full group-data-[state=active]:h-fit h-0 lg:w-fit flex-wrap justify-end items-center space-y-8 lg:space-y-0 lg:flex lg:h-fit md:flex-nowrap overflow-visible">
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
                            <li>
                                <a href="/category" class="hover:link md:px-4 block">
                                    <span>Perangkat</span>
                                </a>
                            </li>
                            <li>
                                <div class="relative z-40">
                                    <a class="dropdown-toggle hover:link md:px-4 flex items-center">
                                        <span class="pointer-events-none select-none">Kota/Kab</span>
                                        <svg class="w-3 h-3 pointer-events-none" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                            class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </a>
                                    <div
                                        class="dropdown-menu absolute hidden shadow-md bg-gray-50/85 dark:bg-gray-950/85 text-body rounded-b-lg pb-2 w-48">
                                        <a href="#" class="block px-6 py-2 hover:link">Kota kupang</a>
                                        <a href="#" class="block px-6 py-2 hover:link">Kab. alor</a>
                                        <a href="#" class="block px-6 py-2 hover:link">Kab. ende</a>

                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>

                    <div
                        class="w-full space-y-2 gap-2 pt-6 pb-4 lg:pb-0 border-t items-center flex flex-col lg:flex-row lg:space-y-0 lg:w-fit lg:border-l lg:border-t-0 lg:pt-0 lg:pl-2">

                        <button
                            class="hidden switcher group lg:flex justify-center gap-1.5 items-center rounded-[--btn-radius] outline-2 outline-offset-2 focus-visible:outline outline-primary-600 disabled:bg-gray-200 disabled:text-gray-400 disabled:shadow-none disabled:hover:brightness-100 dark:disabled:bg-gray-500/10 dark:disabled:[background-image:none] dark:disabled:text-gray-700 dark:disabled:shadow-none dark:disabled:border-none text-gray-800 hover:bg-gray-100 active:bg-gray-200/75 dark:text-gray-300 dark:hover:bg-gray-500/10 dark:active:bg-gray-500/15 size-9 relative"
                            aria-label="Switch to dark mode">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
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
