<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CSS -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <!-- Alphine JS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.1/dist/alpine.min.js" defer></script>

    <!-- CKEditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/26.0.0/classic/ckeditor.js"></script>

    <!-- Font Style -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style-font.css">

    <title>Ghost | <?= $data['judul'] ?> </title>
</head>
<body class="bg-gray-200 font-karla">

    <nav class="bg-gray-800 shadow mb-10" x-data="{ mobileMenu: false }">
        <div class="max-w-3xl mx-auto px-4 md:px-0">

            <div class="flex items-center justify-between h-16">

                <div class="flex items-center">
                    <div class="flex-shrink-0 text-pink-500">
                        <!-- Logo/Brand -->
                        <a href="<?=BASEURL?>">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ghost" class="svg-inline--fa fa-ghost fa-w-12 h-8 w-8" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <path fill="currentColor" d="M186.1.09C81.01 3.24 0 94.92 0 200.05v263.92c0 14.26 17.23 21.39 27.31 11.31l24.92-18.53c6.66-4.95 16-3.99 21.51 2.21l42.95 48.35c6.25 6.25 16.38 6.25 22.63 0l40.72-45.85c6.37-7.17 17.56-7.17 23.92 0l40.72 45.85c6.25 6.25 16.38 6.25 22.63 0l42.95-48.35c5.51-6.2 14.85-7.17 21.51-2.21l24.92 18.53c10.08 10.08 27.31 2.94 27.31-11.31V192C384 84 294.83-3.17 186.1.09zM128 224c-17.67 0-32-14.33-32-32s14.33-32 32-32 32 14.33 32 32-14.33 32-32 32zm128 0c-17.67 0-32-14.33-32-32s14.33-32 32-32 32 14.33 32 32-14.33 32-32 32z"></path>
                            </svg>
                        </a>
                    </div>

                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <!-- <a href="#" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium">Dashboard</a> -->
                            <a href="<?=BASEURL?>/blog" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Tulisan</a>
                            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Nongkrong</a>
                            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Projects</a>
                        </div>
                    </div>
                </div>

                <div class="hidden md:block">
                    <div class="ml-4 flex items-center md:ml-6" x-data="{ userMenu: false }">

                        <?php if ( isset($_SESSION['user_id']) ) : ?>
                            <!-- Notification -->
                            <a href="#" class="bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                                <span class="sr-only">View Notif</span>
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                </svg>
                            </a>

                            <!-- Profile dropdown -->
                            <div class="ml-3 relative">
                                <div>
                                    <button class="max-w-xs bg-gray-800 rounded-full flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" @click="userMenu = true">
                                        <span class="sr-only">Open User Menu</span>
                                        <img class="h-8 w-8 rounded-full"
                                            src="<?=BASEURL?>/img/avatars/<?=$_SESSION['avatar']?>"
                                            alt="Avatar">
                                    </button>
                                </div>

                                <div
                                    class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                                    x-show="userMenu"
                                    @click.away="userMenu = false"
                                    x-transition:enter="transition ease-out duration-100"
                                    x-transition:enter-start="transform opacity-0 scale-95"
                                    x-transition:enter-end="transform opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-75"
                                    x-transition:leave-start="transform opacity-100 scale-100"
                                    x-transition:leave-end="transform opacity-0 scale-95"
                                    >
                                        <a
                                            href="<?=BASEURL?>/profile"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                            Profile
                                        </a>
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
                                        <a
                                            href="<?=BASEURL?>/auth/logout"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                            Sign out
                                        </a>
                                </div>
                            </div>

                        <?php else : ?>
                            <a href="<?=BASEURL?>/auth/login" class="bg-pink-600 text-white px-3 py-2 rounded-md text-sm font-medium ring-2 ring-pink-400 ring-inset">Login</a>

                        <?php endif; ?>

                    </div>
                </div>

                <div class="-mr-1 flex md:hidden">
                    <!-- Mobile menu button -->
                    <button type="button" class="bg-gray-800 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" @click="mobileMenu = true">
                        <span class="sr-only">Open main menu</span>

                        <!-- Heroicon name: outline/menu || Menu open: "hidden", Menu closed: "block" -->
                        <svg :class="mobileMenu ? 'hidden' : 'block'" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>

                        <!-- Heroicon name: outline/x || Menu open: "block", Menu closed: "hidden" -->
                        <svg :class="mobileMenu ? 'block' : 'hidden'" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

            </div>
        </div>


        <!-- Mobile menu, show/hide based on menu state -->
        <div
            class="md:hidden"
            x-show="mobileMenu"
            @click.away="mobileMenu = false"
            x-transition:enter="transition ease-out duration-100"
            x-transition:enter-start="transform opacity-0 scale-95"
            x-transition:enter-end="transform opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="transform opacity-100 scale-100"
            x-transition:leave-end="transform opacity-0 scale-95"
            >
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <!-- <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium">Dashboard</a> -->
                <a href="<?=BASEURL?>/blog" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-sm font-medium">Tulisan</a>
                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-sm font-medium">Nongkrong</a>
                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-sm font-medium">Projects</a>
            </div>

            <div class="py-4 border-t border-gray-700">

                <?php if ( isset($_SESSION['user_id']) ) : ?>
                    <div class="flex items-center px-5">
                        <div class="flex-shrink-0">
                            <img class="h-10 w-10 rounded-full"
                                src="<?=BASEURL?>/img/avatar-01.png"
                                alt="Avatar">
                        </div>

                        <div class="ml-3">
                            <div class="text-base font-medium leading-none text-white">Jennie Kim</div>
                            <div class="text-sm font-medium leading-none text-gray-400">jennie@gmail.com</div>
                        </div>

                        <button class="ml-auto bg-gray-800 flex-shrink-0 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                            <span class="sr-only">View Notif</span>

                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </button>
                    </div>

                    <div class="mt-3 px-2 space-y-1">
                        <a
                            href="<?=BASEURL?>/profile"
                            class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">
                            Profile
                        </a>
                        <a 
                            href="#"
                            class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">
                            Settings
                        </a>
                        <a 
                            href="<?=BASEURL?>/auth/logout"
                            class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">
                            Sign out
                        </a>
                    </div>

                <?php else : ?>
                    <div class="px-2">
                        <a href="#" class="block bg-pink-600 hover:bg-pink-700 text-center text-white px-3 py-2 rounded-md text-base font-medium ring-2 ring-pink-400 ring-inset">Login</a>
                    </div>

                <?php endif; ?>

            </div>
        </div>

    </nav>

    <main class="max-w-3xl mx-auto h-full">