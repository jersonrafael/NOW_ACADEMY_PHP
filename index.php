<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="etc/css/font.css">
    <link rel="stylesheet" href="etc/css/hamburguer-menu.css">
    <title></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="etc/js/jquery.js"></script>
</head>

<body>
    <header
        class="flex justify-between items-center px-4 bg-[#041e41] shadow-[0_3px_10px_rgb(0,0,0,0.2)] border-b-[1px] border-black h-16">
        <img src="" alt="now" class="">

        <nav class="flex items-center md:gap-x-4 text-white" id="web-sections">
            <ul class="flex gap-x-2 md:gap-x-4 text-[12px] xl:text-base">
                <li><a href="" id="heavitas-font">Languages</a></li>
                <li><a href="" id="heavitas-font">Courses</a></li>
                <li><a href="" id="heavitas-font">Contact</a></li>
            </ul>
            <a href=""
                class="text-[12px] xl:text-xl md:px-12 md:py-2 bg-[#fff] text-[#041e41] rounded-full hover:shadow-[0_3px_10px_rgb(0,0,0,0.2)] transition-shadow ease-in-out delay-75"
                id="heavitas-font">Get start</a>
        </nav>

        <div id="phone-hamburguer-menu" class="bg-orange-600">
            <nav class="fixed translate-x-[100%] translate:duration-700 top-0 left-0 right-0 bottom-0 bg-[#041e41] text-white pt-2 list-none flex justify-start"
                id="hamburguer-menu">
                <div class="w-[100%]">
                    <header class="w-[100%] py-4">
                        <a href="">
                            <img src="" alt="now">
                        </a>
                    </header>
                    <div class="bg-white h-full text-[#041e41]">
                        <ul class="mx-2 text-2xl">
                            <li>Languages</li>
                            <li>Other</li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="text-white bg-yellow-200">
                <div id="open-menu">\\\</div>
                <div class="hidden absolute top-[25px] z-100" id="close-menu">X</div>
            </div>
        </div>

    </header>

    <main class="py-8 bg-[#041e41] xl:h-screen">

        <div class="flex justify-around flex-wrap items-center text-white">
            <div class="">
                <span>Line</span>
                <h1 class="text-xl xl:text-6xl text-center md:text-left" id="heavitas-font">The time it's NOW</h1>

                <div class="xl:text-2xl ">
                    <p class="md:w-[400px] xl:w-[650px] line-clamp-3 md:line-clamp-none text-center md:text-left">Lorem
                        ipsum dolor
                        sit amet consectetur adipisicing elit. Quasi, nam velit nulla
                        libero adipisci
                        eveniet expedita reprehenderit animi culpa repellendus, molestias porro officiis blanditiis
                        corporis
                        eaque laboriosam? Adipisci, distinctio beatae?</p>
                </div>
                <div>
                    <div class="flex justify-center md:justify-normal">
                        <a href=""
                            class="bg-[#fff] px-8 md:px-16 py-2 md:py-4 inline-block my-4 md:text-md text-[#041e41] rounded-full hover:shadow-[0_3px_10px_rgb(0,0,0,0.2)] transition-shadow ease-in-out delay-75"
                            id="heavitas-font">Let's Talk</a>
                    </div>
                </div>
            </div>

            <div class="flex items-end">
                <img src="etc/img/cell.png" alt="phone" class="relative left-10 hidden xl:w-[180px] xl:h-[360px] bg-contain bg-no-repeat">
                <img src="etc/img/cell.png" alt="phone" class="relative z-10 xl:w-[210px]">
                <img src="etc/img/cell.png" alt="phone" class="relative  hidden right-10 xl:w-[180px] xl:h-[360px]">
            </div>

        </div>

        <div>
            <ul class="flex justify-center h-16 my-12">
                <div
                    class="flex items-center justify-center rounded-full border-b-2 border-[#f80000] bg-[#fff] w-4/5 md:w-3/5 shadow-xl text-xl text-[#041e41] ">
                    <li class="text-sm md:text-xl xl:text-2xl border-r-2 border-[#f80000] px-2">
                        <a href="" id="heavitas-font">Someting</a>
                    </li>
                    <li class="text-sm md:text-xl xl:text-2xl border-r-2 border-[#f80000] px-2">
                        <a href="" id="heavitas-font">Someting</a>
                    </li>
                    <li class="text-sm md:text-xl xl:text-2xl border-r-2 border-[#f80000] px-2">
                        <a href="" id="heavitas-font">Someting</a>
                    </li>
                </div>
            </ul>
        </div>
    </main>


    <section class="flex justify-center items-center h-[700px] text-[#041e41]">
        <p class="text-center text-md md:text-xl xl:text-4xl w-[1000px]" id="heavitas-font">"Lorem, ipsum dolor sit amet
            consectetur
            adipisicing elit. Tempore
            amet vitae
            molestiae eum? Maiores, deserunt
            ex veniam necessitatibus quibusdam eum in laborum eveniet sequi, laboriosam tenetur ut voluptatum, aliquam
            sed!"</p>
    </section>

    <section class="bg-[#041e41] h-[700px] flex items-center justify-center">
        <div>
            <h2 class="text-white text-center text-6xl" id="heavitas-font">How its Work</h2>
            <label for="">line</label>

            <div class="flex justify-center items-center">
                <img src="etc/img/cell2.png" alt="" id="cell-img" class="w-[500px]">
                <ul class="text-[#c6c5c5] text-2xl flex items-center justify-center" id="li-gallery-elements">
                    <div>
                        <li class="my-4 flex items-center justify-center gap-x-4" id="btn-learn-1"
                            data-img="etc/img/cell2.png">
                            <p class="p-with-img">|</p>
                            <h2 id="heavitas-font">1.Learn</h2>
                        </li>
                        <li class="my-4 flex items-center justify-center gap-x-4" id="btn-learn-2"
                            data-img="etc/img/cell3.png">
                            <p class="p-with-img">|</p>
                            <h2 id="heavitas-font">2.Learn</h2>
                        </li>
                        <li class="my-4 flex items-center justify-center gap-x-4" id="btn-learn-3"
                            data-img="etc/img/cell4.png">
                            <p class="p-with-img">|</p>
                            <h2 id="heavitas-font">3.Learn</h2>
                        </li>
                        <li class="my-4 flex items-center justify-center gap-x-4" id="btn-learn-4"
                            data-img="etc/img/cell5.png">
                            <p class="p-with-img">|</p>
                            <h2 id="heavitas-font">4.Learn</h2>
                        </li>
                    </div>
                </ul>

            </div>
            <ul class="text-[#c6c5c5] text-2xl flex items-center justify-center" id="phone-gallery-buttons">
                <div class="flex gap-x-4">
                    <h2 id="previous-image">
                        < <h2 id="next-image">>
                    </h2>
                </div>
            </ul>
        </div>
    </section>

    <section class="bg-[#041e41] py-8">
        <h2 class="text-white text-center text-6xl my-4" id="heavitas-font">Why NOW</h2>

        <div class="flex justify-center flex-wrap gap-y-2 gap-x-8 my-6 items-center">
            <img src="etc/img/gallery-1.jpg" alt="image-1" class="w-[300px]">

            <div class="xl:w-[700px] text-2xl text-white">
                <h2 class="text-4xl">Title</h2>
                <p class="text-sm">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, ullam expedita in quia, nemo
                    aspernatur sint minus sequi ab magnam eos nesciunt molestias ex nobis aperiam fugit quas cupiditate
                    maiores.
                </p>
            </div>
        </div>

        <div class="flex justify-center flex-wrap gap-y-2 gap-x-12 my-6 items-center">

            <img src="etc/img/gallery-2.jpg" alt="image-1" class="w-[300px]">
            <div class="xl:w-[700px] text-2xl text-white">
                <h2 class="text-4xl">Title</h2>
                <p class="text-sm">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, ullam expedita in quia, nemo
                    aspernatur sint minus sequi ab magnam eos nesciunt molestias ex nobis aperiam fugit quas cupiditate
                    maiores.
                </p>
            </div>

        </div>

        <div class="flex justify-center flex-wrap gap-y-2 gap-x-12 my-6 items-center">
            <img src="etc/img/gallery-3.jpg" alt="image-1" class="w-[300px]">

            <div class="xl:w-[700px] text-2xl text-white">
                <h2 class="text-4xl">Title</h2>
                <p class="text-sm">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, ullam expedita in quia, nemo
                    aspernatur sint minus sequi ab magnam eos nesciunt molestias ex nobis aperiam fugit quas cupiditate
                    maiores.
                </p>
            </div>
        </div>
    </section>

    <section class="flex justify-center items-center bg-[#fff] px-4 xl:h-[600px]">
        <div class="">
            <h2 class="text-[#041e41] text-center text-4xl md:text-6xl" id="heavitas-font">Que dicen nuestros clientes
            </h2>

            <div class="flex justify-center flex-wrap xl:flex-nowrap gap-x-4 text-[#041e41] my-12">
                <div>
                    <span>


                        <div class="flex items-center">
                            <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="w-4 h-4 ms-1 text-gray-300 dark:text-gray-500" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                        </div>

                    </span>
                    <p class="my-8">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, perspiciatis itaque
                        temporibus
                        corporis
                        eveniet omnis voluptatem rerum voluptatum quibusdam culpa! Voluptatem temporibus, iure quibusdam
                        eius
                        nobis ab ex similique ipsam!"</p>
                    <span>
                        <img class="w-10 h-10 rounded-full"
                            src="https://icons.veryicon.com/png/o/miscellaneous/standard/avatar-15.png"
                            alt="Rounded avatar">
                    </span>
                </div>

                <div>
                    <span>


                        <div class="flex items-center">
                            <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="w-4 h-4 ms-1 text-gray-300 dark:text-gray-500" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                        </div>

                    </span>
                    <p class="my-8">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, perspiciatis itaque
                        temporibus
                        corporis
                        eveniet omnis voluptatem rerum voluptatum quibusdam culpa! Voluptatem temporibus, iure quibusdam
                        eius
                        nobis ab ex similique ipsam!"</p>
                    <span>
                        <img class="w-10 h-10 rounded-full"
                            src="https://icons.veryicon.com/png/o/miscellaneous/standard/avatar-15.png"
                            alt="Rounded avatar">
                    </span>
                </div>

                <div>
                    <span>


                        <div class="flex items-center">
                            <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="w-4 h-4 ms-1 text-gray-300 dark:text-gray-500" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                        </div>

                    </span>
                    <p class="my-8">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, perspiciatis itaque
                        temporibus
                        corporis
                        eveniet omnis voluptatem rerum voluptatum quibusdam culpa! Voluptatem temporibus, iure quibusdam
                        eius
                        nobis ab ex similique ipsam!"</p>
                    <span>
                        <img class="w-10 h-10 rounded-full"
                            src="https://icons.veryicon.com/png/o/miscellaneous/standard/avatar-15.png"
                            alt="Rounded avatar">
                    </span>
                </div>
            </div>
        </div>
    </section>

    <section>
        <h2 class="text-6xl text-center" id="heavitas-font">Planes</h2>
        <label for="">Line</label>

        <div class="flex justify-center flex-wrap gap-y-4 gap-x-8">
            <div class="shadow-[0_3px_10px_rgb(0,0,0,0.2)] px-4 py-4 h-[500px] w-[350px] rounded-xl">
                <h2 class="text-4xl bg-green-200 px-4 py-2 rounded-md" id="heavitas-font">Free Plan</h2>
                <ul class="text-2xl my-4">
                    <li class="flex items-center gap-x-4 my-4">
                        <label for="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                class="bi bi-check2 text-green-200" viewBox="0 0 16 16">
                                <path
                                    d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0" />
                            </svg>
                        </label>
                        <p>1 lorem test plan</p>
                    </li>
                    <li class="flex items-center gap-x-4 my-4">
                        <label for="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                class="bi bi-check2 text-green-200" viewBox="0 0 16 16">
                                <path
                                    d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0" />
                            </svg>
                        </label>
                        <p>2 lorem test plan</p>
                    </li>
                    <li class="flex items-center gap-x-4 my-4">
                        <label for="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                class="bi bi-check2 text-green-200" viewBox="0 0 16 16">
                                <path
                                    d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0" />
                            </svg>
                        </label>
                        <p>3 lorem test plan</p>
                    </li>
                    <li class="flex items-center gap-x-4 my-4">
                        <label for="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                class="bi bi-check2 text-green-200" viewBox="0 0 16 16">
                                <path
                                    d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0" />
                            </svg>
                        </label>
                        <p>4 lorem test plan</p>
                    </li>
                    <li class="flex items-center gap-x-4 my-4">
                        <label for="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                class="bi bi-check2 text-green-200" viewBox="0 0 16 16">
                                <path
                                    d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0" />
                            </svg>
                        </label>
                        <p>5 lorem test plan</p>
                    </li>
                </ul>
            </div>

            <div class="shadow-[0_3px_10px_rgb(0,0,0,0.2)] px-4 py-4 h-[500px] w-[350px] rounded-xl">
                <h2 class="text-4xl bg-yellow-200 px-4 py-2 rounded-md" id="heavitas-font">Pro Plan</h2>
                <ul class="text-2xl my-4">
                    <li class="flex items-center gap-x-4 my-4">
                        <label for="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                class="bi bi-check2 text-yellow-200" viewBox="0 0 16 16">
                                <path
                                    d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0" />
                            </svg>
                        </label>
                        <p>1 lorem test plan</p>
                    </li>
                    <li class="flex items-center gap-x-4 my-4">
                        <label for="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                class="bi bi-check2 text-yellow-200" viewBox="0 0 16 16">
                                <path
                                    d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0" />
                            </svg>
                        </label>
                        <p>2 lorem test plan</p>
                    </li>
                    <li class="flex items-center gap-x-4 my-4">
                        <label for="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                class="bi bi-check2 text-yellow-200" viewBox="0 0 16 16">
                                <path
                                    d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0" />
                            </svg>
                        </label>
                        <p>3 lorem test plan</p>
                    </li>
                    <li class="flex items-center gap-x-4 my-4">
                        <label for="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                class="bi bi-check2 text-yellow-200" viewBox="0 0 16 16">
                                <path
                                    d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0" />
                            </svg>
                        </label>
                        <p>4 lorem test plan</p>
                    </li>
                    <li class="flex items-center gap-x-4 my-4">
                        <label for="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                class="bi bi-check2 text-yellow-200" viewBox="0 0 16 16">
                                <path
                                    d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0" />
                            </svg>
                        </label>
                        <p>5 lorem test plan</p>
                    </li>
                </ul>
            </div>

        </div>

        <div class="flex justify-center my-6">
            <a href=""
                class="bg-yellow-300 px-16 py-2 text-xl xl:text-3xl inline-block rounded-md hover:shadow-xl transition-shadow ease-in-out delay-75 "
                id="more-info-button">More Info</a>
        </div>
    </section>

    <section class="flex justify-center my-24">
        <div class="text-center">
            <h2 class="text-2xl my-4" id="heavitas-font">Some inspirational phrase xD</h2>
            <h4 class="my-4">Viviana Chacon, Founder of NOW</h4>

            <div class="flex justify-center">
                <img src="etc/img/cropped_image.png" alt="now" class="w-[150px]">
            </div>
        </div>
    </section>

    <footer class="bg-[#041e41] py-8">
        <div class="flex justify-center text-white">
            <div>
                <div class="flex justify-center">
                    <img src="" alt="now">
                </div>
                <a href=""
                    class="flex justify-center bg-[#fff] px-8 md:px-16 py-2 md:py-4 inline-block my-4 md:text-md xl:text-xl text-[#041e41] rounded-full hover:shadow-xl hover:shadow-blue-500/50 transition-shadow ease-in-out delay-75">Start
                    Learning</a>

                <ul class="flex justify-around items-center gap-x-4 my-6">
                    <li><a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-instagram" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                            </svg>
                        </a></li>
                    <li><a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path
                                    d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                            </svg>
                        </a></li>
                    <li><a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-facebook" viewBox="0 0 16 16">
                                <path
                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                            </svg>
                        </a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>

</html>