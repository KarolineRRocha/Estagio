<div x-data="{ type: 'all' }" class="flex flex-col transition-all h-full overflow:hidden">
    <header class="px-3 z-10 bg-white sticky top-0 w-full py-2">
        <div class="border-b justify-between flex items-center pb-2">
            <div class="flex items-center gap-2">
                <h5 class="titleChat">Conversas</h5>
            </div>
            <button>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                    class="bi bi-filter" viewBox="0 0 16 16">
                    <path
                        d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5m-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5" />
                </svg>
            </button>
        </div>

        {{-- Filters --}}
        <div class="flex gap-3 items-center overflow-x-scroll p-2 bg-white">
            <button @click="type='all'" :class="{ 'bg-blue-100 border-0 text-black': type == 'all' }"
                class="inline-flex justify-center items-center rounded-full gap-x-1 text-sm font-medium px-3 lg:px-5 py-1 lg:py-2.5 border">
                Todas
            </button>

            <button @click="type='deleted'" :class="{ 'bg-blue-100 border-0 text-black': type == 'deleted' }"
                class="inline-flex justify-center items-center rounded-full gap-x-1 text-sm font-medium px-3 lg:px-5 py-1 lg:py-2.5 border">
                Apagadas
            </button>
        </div>
    </header>

    <main class="overflow-y-scroll overflow-hidden grow {{-- h-full  --}}relative" style="contain:content">

        {{-- ChatList --}}
        <ul class="p-2 grid w-full space-y-2 h-full">
            <li
                class="py-2 hover:bg-gray-50 rounded-2xl dark:hover:bg-gray-700/70 trasition-colors duration-150 flex gap-3 relative w-full crusor-pointer px-2">
                <a href="#" class="shrink-0">
                    <img class="user-avatar" style="width:2.5em; height:2.5em"
                        src="{{ /* Auth::user()->avatar ? Auth::user()->avatar :  */ asset('images/profile.png') }}"
                        alt="{{ Auth::user()->name }}">
                </a>
                <aside class="grid grid-cols-12 w-full">
                    <a href="#"
                        class="col-span-11 border-b pb-2 border-gray-200 relative overflow-hidden truncate leading-5 w-full flex-nowrap">

                        {{-- Name and Date --}}
                        <div class="flex justify-between w-full items-center">
                            <h6 class="truncate font-medium tracking-wide text-gray-400">
                                Karoline
                            </h6>
                            <small class="text-gray-700">5d</small>
                        </div>

                        {{-- Message Body --}}
                        <div class="flex gap-x-2 items-center">

                            {{-- Double Tick --}}
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-check2-all" viewBox="0 0 16 16">
                                    <path
                                        d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0" />
                                    <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708" />
                                </svg>
                            </span>

                            {{-- Single Tick --}}
                            {{-- <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                    <path
                                        d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0" />
                                </svg>
                            </span> --}}

                            <p class="grow truncate text-sm font-[100]">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi magni laborum, explicabo
                                maxime adipisci pariatur ea doloribus sint tenetur ipsum eveniet, debitis ab dolor
                                officiis
                                iusto. Inventore soluta esse minima.
                            </p>

                            {{-- Unread Count --}}
                            <span class="font-bold p-px px-2 text-xs shrink-0 rounded-full text-white"
                                style="background-color: var(--blue)">
                                5
                            </span>
                        </div>
                    </a>

                    {{-- Dropdown --}}
                    <div class="col-span-1 flex flex-col text-center my-auto">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                        <path
                                            d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0" />
                                    </svg>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <div class="w-full">
                                    <button class="items-center gap-3 flex w-full px-4 py-2 text-left text-sm leading-5 text-gray-500 hover:bg-gray-100 transition-all duration-150 ease-in-out focus:outline-none focus:bg-gray-100">

                                    </button>
                                </div>
                            </x-slot>
                        </x-dropdown>
                    </div>

                </aside>
            </li>
        </ul>
    </main>
</div>
