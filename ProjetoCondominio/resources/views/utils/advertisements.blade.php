<x-app-layout>
    {{--     <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight px-4">
            {{ __('Anúncios') }}
        </h2>
    </x-slot> --}}

    {{-- Nav tabs --}}
    <ul class="nav nav-tabs flex navTabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="internal-tab" data-bs-toggle="tab" data-bs-target="#internal-tab-pane"
                type="button" role="tab" aria-controls="internal-tab-pane" aria-selected="true">Anúnicos
                Internos</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="external-tab" data-bs-toggle="tab" data-bs-target="#external-tab-pane"
                type="button" role="tab" aria-controls="external-tab-pane" aria-selected="false">Anúncios
                Externos</button>
        </li>
        <li class="nav-item" role="presentation">
            <div class="search-wrapper">
                <input class="search-input" type="text" placeholder="Search">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    class="feather feather-search" viewBox="0 0 24 24">
                    <defs></defs>
                    <circle cx="11" cy="11" r="8"></circle>
                    <path d="M21 21l-4.35-4.35"></path>
                </svg>
            </div>
        </li>
    </ul>

    <div class="tab-content" id="myTabContent">
        {{-- Tabs content Internal --}}
        <div class="tab-pane fade show active" id="internal-tab-pane" role="tabpanel" aria-labelledby="internal-tab"
            tabindex="0">
            <div class="content">
                <main>
                    <section class="section">
                        <div class="cards">
                            <header class="header flex justify-between header-cards">
                                <h3>Maria</h3>
                                <i class="fa-solid fa-comment-dots"></i>
                            </header>
                            <img src="https://images.pexels.com/photos/848681/pexels-photo-848681.jpeg?cs=srgb&dl=blur-close-up-cold-848681.jpg&fm=jpg"
                                alt="">
                            <p class="titleSale">Viajando</p>
                        </div>
                        <div class="cards">
                            <header class="header flex justify-between header-cards">
                                <h3>Maria</h3>
                                <i class="fa-solid fa-comment-dots"></i>
                            </header>
                            <img src="https://images.pexels.com/photos/848681/pexels-photo-848681.jpeg?cs=srgb&dl=blur-close-up-cold-848681.jpg&fm=jpg"
                                alt="">
                            <p class="titleSale">Viajando</p>
                        </div>
                        <div class="cards">
                            <header class="header flex justify-between header-cards">
                                <h3>Maria</h3>
                                <i class="fa-solid fa-comment-dots"></i>
                            </header>
                            <img src="https://images.pexels.com/photos/356808/pexels-photo-356808.jpeg?cs=srgb&dl=action-adult-adventure-356808.jpg&fm=jpg"
                                alt="">
                            <p class="titleSale">Viajando</p>
                        </div>
                        <div class="cards">
                            <header class="header flex justify-between header-cards">
                                <h3>Maria</h3>
                                <i class="fa-solid fa-comment-dots"></i>
                            </header>
                            <img src="https://images.pexels.com/photos/1878052/pexels-photo-1878052.jpeg?cs=srgb&dl=adventure-cold-downhill-1878052.jpg&fm=jpg"
                                alt="">
                            <p class="titleSale">Viajando</p>
                        </div>
                        <div class="cards">
                            <header class="header flex justify-between header-cards">
                                <h3>Maria</h3>
                                <i class="fa-solid fa-comment-dots"></i>
                            </header>
                            <img src="https://images.pexels.com/photos/848681/pexels-photo-848681.jpeg?cs=srgb&dl=blur-close-up-cold-848681.jpg&fm=jpg"
                                alt="">
                            <p class="titleSale">Viajando</p>
                        </div>
                        <div class="cards">
                            <header class="header flex justify-between header-cards">
                                <h3>Maria</h3>
                                <i class="fa-solid fa-comment-dots"></i>
                            </header>
                            <img src="https://images.pexels.com/photos/356808/pexels-photo-356808.jpeg?cs=srgb&dl=action-adult-adventure-356808.jpg&fm=jpg"
                                alt="">
                            <p class="titleSale">Viajando</p>
                        </div>
                        <div class="cards">
                            <header class="header flex justify-between header-cards">
                                <h3>Maria</h3>
                                <i class="fa-solid fa-comment-dots"></i>
                            </header>
                            <img src="https://images.pexels.com/photos/1878052/pexels-photo-1878052.jpeg?cs=srgb&dl=adventure-cold-downhill-1878052.jpg&fm=jpg"
                                alt="">
                            <p class="titleSale">Viajando</p>
                        </div>
                        <div class="cards">
                            <header class="header flex justify-between header-cards">
                                <h3>Maria</h3>
                                <i class="fa-solid fa-comment-dots"></i>
                            </header>
                            <img src="https://images.pexels.com/photos/848681/pexels-photo-848681.jpeg?cs=srgb&dl=blur-close-up-cold-848681.jpg&fm=jpg"
                                alt="">
                            <p class="titleSale">Viajando</p>
                        </div>
                        <div class="cards">
                            <header class="header flex justify-between header-cards">
                                <h3>Maria</h3>
                                <i class="fa-solid fa-comment-dots"></i>
                            </header>
                            <img src="https://images.pexels.com/photos/1878052/pexels-photo-1878052.jpeg?cs=srgb&dl=adventure-cold-downhill-1878052.jpg&fm=jpg"
                                alt="">
                            <p class="titleSale">Viajando</p>
                        </div>
                        <div class="cards">
                            <header class="header flex justify-between header-cards">
                                <h3>Maria</h3>
                                <i class="fa-solid fa-comment-dots"></i>
                            </header>
                            <img src="https://images.pexels.com/photos/1878052/pexels-photo-1878052.jpeg?cs=srgb&dl=adventure-cold-downhill-1878052.jpg&fm=jpg"
                                alt="">
                            <p class="titleSale">Viajando</p>
                        </div>
                    </section>
                </main>
                <footer>
                    <a href="#"><i class="fa-solid fa-circle-arrow-up fa-2x"></i></a>
                </footer>
            </div>
        </div>

        {{-- Tabs content External --}}
        <div class="tab-pane fade" id="external-tab-pane" role="tabpanel" aria-labelledby="external-tab"
            tabindex="0">
            <div class="content">
                <main>
                    <div class="containerInput">
                        <div class="search-wrapper">
                            <input class="search-input" type="text" placeholder="Search">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="feather feather-search" viewBox="0 0 24 24">
                                <defs></defs>
                                <circle cx="11" cy="11" r="8"></circle>
                                <path d="M21 21l-4.35-4.35"></path>
                            </svg>
                        </div>
                    </div>
                    <section class="section">
                        <div class="cards">
                            <header class="header flex justify-between header-cards">
                                <h3>José</h3>
                                <i class="fa-solid fa-comment-dots"></i>
                            </header>
                            <img src="https://images.pexels.com/photos/848681/pexels-photo-848681.jpeg?cs=srgb&dl=blur-close-up-cold-848681.jpg&fm=jpg"
                                alt="">
                            <p class="titleSale">Viajando</p>
                        </div>
                        <div class="cards">
                            <header class="header flex justify-between header-cards">
                                <h3>Maria</h3>
                                <i class="fa-solid fa-comment-dots"></i>
                            </header>
                            <img src="https://images.pexels.com/photos/848681/pexels-photo-848681.jpeg?cs=srgb&dl=blur-close-up-cold-848681.jpg&fm=jpg"
                                alt="">
                            <p class="titleSale">Viajando</p>
                        </div>
                        <div class="cards">
                            <header class="header flex justify-between header-cards">
                                <h3>Maria</h3>
                                <i class="fa-solid fa-comment-dots"></i>
                            </header>
                            <img src="https://images.pexels.com/photos/356808/pexels-photo-356808.jpeg?cs=srgb&dl=action-adult-adventure-356808.jpg&fm=jpg"
                                alt="">
                            <p class="titleSale">Viajando</p>
                        </div>
                        <div class="cards">
                            <header class="header flex justify-between header-cards">
                                <h3>Maria</h3>
                                <i class="fa-solid fa-comment-dots"></i>
                            </header>
                            <img src="https://images.pexels.com/photos/1878052/pexels-photo-1878052.jpeg?cs=srgb&dl=adventure-cold-downhill-1878052.jpg&fm=jpg"
                                alt="">
                            <p class="titleSale">Viajando</p>
                        </div>

                        <div class="cards">
                            <header class="header flex justify-between header-cards">
                                <h3>Maria</h3>
                                <i class="fa-solid fa-comment-dots"></i>
                            </header>
                            <img src="https://images.pexels.com/photos/848681/pexels-photo-848681.jpeg?cs=srgb&dl=blur-close-up-cold-848681.jpg&fm=jpg"
                                alt="">
                            <p class="titleSale">Viajando</p>
                        </div>
                        <div class="cards">
                            <header class="header flex justify-between header-cards">
                                <h3>Maria</h3>
                                <i class="fa-solid fa-comment-dots"></i>
                            </header>
                            <img src="https://images.pexels.com/photos/356808/pexels-photo-356808.jpeg?cs=srgb&dl=action-adult-adventure-356808.jpg&fm=jpg"
                                alt="">
                            <p class="titleSale">Viajando</p>
                        </div>
                        <div class="cards">
                            <header class="header flex justify-between header-cards">
                                <h3>Maria</h3>
                                <i class="fa-solid fa-comment-dots"></i>
                            </header>
                            <img src="https://images.pexels.com/photos/1878052/pexels-photo-1878052.jpeg?cs=srgb&dl=adventure-cold-downhill-1878052.jpg&fm=jpg"
                                alt="">
                            <p class="titleSale">Viajando</p>
                        </div>
                        <div class="cards">
                            <header class="header flex justify-between header-cards">
                                <h3>Maria</h3>
                                <i class="fa-solid fa-comment-dots"></i>
                            </header>
                            <img src="https://images.pexels.com/photos/848681/pexels-photo-848681.jpeg?cs=srgb&dl=blur-close-up-cold-848681.jpg&fm=jpg"
                                alt="">
                            <p class="titleSale">Viajando</p>
                        </div>
                        <div class="cards">
                            <header class="header flex justify-between header-cards">
                                <h3>Maria</h3>
                                <i class="fa-solid fa-comment-dots"></i>
                            </header>
                            <img src="https://images.pexels.com/photos/1878052/pexels-photo-1878052.jpeg?cs=srgb&dl=adventure-cold-downhill-1878052.jpg&fm=jpg"
                                alt="">
                            <p class="titleSale">Viajando</p>
                        </div>
                        <div class="cards">
                            <header class="header flex justify-between header-cards">
                                <h3>Maria</h3>
                                <i class="fa-solid fa-comment-dots"></i>
                            </header>
                            <img src="https://images.pexels.com/photos/1878052/pexels-photo-1878052.jpeg?cs=srgb&dl=adventure-cold-downhill-1878052.jpg&fm=jpg"
                                alt="">
                            <p class="titleSale">Viajando</p>
                        </div>
                    </section>
                </main>
                <footer>
                    <header>
                        <a href="#"><i class="fa-solid fa-circle-arrow-up fa-2x"></i></a>
                    </header>
                </footer>
            </div>
        </div>
    </div>
</x-app-layout>
