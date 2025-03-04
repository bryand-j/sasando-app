<header id="header" class="group">
    <nav class="fixed overflow-visible z-20 w-full border-b bg-white/50 dark:bg-gray-950/50 backdrop-blur-2xl">
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
                            <li>
                                <a data-dropdown-trigger data-dropdown-id="myDropdown"
                                    class="hover:link md:px-4 sz-md flex items-center cursor-pointer">
                                    <span class="btn-label">Kota/Kab</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        class="size-4">
                                        <path fill-rule="evenodd"
                                            d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                                <ul role="menu" id="myDropdown" tabindex="-1" aria-labelledby="menubutton1"
                                    aria-activedescendant="mi1"
                                    class="bg-ui invisible  fixed left-[--fx-popper-placement-x] top-[--fx-popper-placement-y] z- w-40 overflow-hidden rounded-[calc(var(--btn-radius)+0.25rem)] border p-1 shadow-lg data-[state=open]:visible data-[state=open]:opacity-100 ">

                                    <li id="mi2" role="menuitem">
                                        <a href="#"
                                            class="btn sz-md justify-start hover:bg-primary-400 hover:text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z">
                                                </path>
                                            </svg>
                                            Kota Kupang
                                        </a>
                                    </li>
                                    <li class="mx-3.5 my-1">
                                        <hr />
                                    </li>
                                    <li id="mi2" role="menuitem">
                                        <a href="#"
                                            class="btn sz-md justify-start hover:bg-primary-400 hover:text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" class="size-4">
                                                <path
                                                    d="M10.75 2.75a.75.75 0 0 0-1.5 0v8.614L6.295 8.235a.75.75 0 1 0-1.09 1.03l4.25 4.5a.75.75 0 0 0 1.09 0l4.25-4.5a.75.75 0 0 0-1.09-1.03l-2.955 3.129V2.75Z">
                                                </path>
                                                <path
                                                    d="M3.5 12.75a.75.75 0 0 0-1.5 0v2.5A2.75 2.75 0 0 0 4.75 18h10.5A2.75 2.75 0 0 0 18 15.25v-2.5a.75.75 0 0 0-1.5 0v2.5c0 .69-.56 1.25-1.25 1.25H4.75c-.69 0-1.25-.56-1.25-1.25v-2.5Z">
                                                </path>
                                            </svg>
                                            Kab. ende
                                        </a>
                                    </li>
                                    <li id="mi3" role="menuitem">
                                        <a href="#"
                                            class="btn sz-md justify-start hover:bg-primary-400 hover:text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                fill="currentColor" class="size-4">
                                                <path
                                                    d="M3 2a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H3Z">
                                                </path>
                                                <path fill-rule="evenodd"
                                                    d="M3 6h10v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V6Zm3 2.75A.75.75 0 0 1 6.75 8h2.5a.75.75 0 0 1 0 1.5h-2.5A.75.75 0 0 1 6 8.75Z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            Archive
                                        </a>
                                    </li>
                                    <li id="mi2" role="menuitem">
                                        <a href="#"
                                            class="btn sz-md justify-start hover:bg-primary-400 hover:text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                fill="currentColor" class="size-4">
                                                <path fill-rule="evenodd"
                                                    d="M5 3.25V4H2.75a.75.75 0 0 0 0 1.5h.3l.815 8.15A1.5 1.5 0 0 0 5.357 15h5.285a1.5 1.5 0 0 0 1.493-1.35l.815-8.15h.3a.75.75 0 0 0 0-1.5H11v-.75A2.25 2.25 0 0 0 8.75 1h-1.5A2.25 2.25 0 0 0 5 3.25Zm2.25-.75a.75.75 0 0 0-.75.75V4h3v-.75a.75.75 0 0 0-.75-.75h-1.5ZM6.05 6a.75.75 0 0 1 .787.713l.275 5.5a.75.75 0 0 1-1.498.075l-.275-5.5A.75.75 0 0 1 6.05 6Zm3.9 0a.75.75 0 0 1 .712.787l-.275 5.5a.75.75 0 0 1-1.498-.075l.275-5.5a.75.75 0 0 1 .786-.711Z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            Delete
                                        </a>
                                    </li>
                                </ul>
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
