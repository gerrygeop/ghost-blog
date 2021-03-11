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

    <!-- Font Style -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style-font.css">

    <title>Ghost | <?= $data['judul'] ?> </title>
</head>
<body class="bg-gray-200 font-karla">

    <nav class="bg-white shadow mb-10">
        <div x-data="{ isOpen: false }" class="max-w-3xl mx-auto py-3 px-6 md:px-0 md:flex md:justify-between md:items-center">

            <div class="flex justify-between items-center">
                <div class="flex items-center">

                    <!-- AVATAR USER
                    <img src="<?= BASEURL; ?>/img/avatar-01.png" alt="Avatar" class="h-8 shadow rounded-full">
                    <a href="#" class="text-gray-800 text-xl hover:text-gray-700 ml-3">Jennie</a> -->

                    <!-- Logo / Nama Brand -->
                    <a href="<?=BASEURL;?>" class="text-gray-700 text-xl hover:text-gray-800 flex items-center">
                        <svg width="24" height="24" fill="currentColor" color="currentColor" data-prefix="fas" data-icon="ghost" class="svg-inline--fa fa-ghost fa-w-12" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentColor" d="M186.1.09C81.01 3.24 0 94.92 0 200.05v263.92c0 14.26 17.23 21.39 27.31 11.31l24.92-18.53c6.66-4.95 16-3.99 21.51 2.21l42.95 48.35c6.25 6.25 16.38 6.25 22.63 0l40.72-45.85c6.37-7.17 17.56-7.17 23.92 0l40.72 45.85c6.25 6.25 16.38 6.25 22.63 0l42.95-48.35c5.51-6.2 14.85-7.17 21.51-2.21l24.92 18.53c10.08 10.08 27.31 2.94 27.31-11.31V192C384 84 294.83-3.17 186.1.09zM128 224c-17.67 0-32-14.33-32-32s14.33-32 32-32 32 14.33 32 32-14.33 32-32 32zm128 0c-17.67 0-32-14.33-32-32s14.33-32 32-32 32 14.33 32 32-14.33 32-32 32z"></path></svg>
                        <span class="ml-1 font-bold">Ghost</span>
                    </a>

                </div>

                <!-- Mobile menu button -->
                <div class="flex md:hidden">
                    <button
                        type="button"
                        class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600"
                        aria-label="toggle menu"
                        @click="isOpen = !isOpen"
                    >
                        <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" color="#555"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>

            </div>

            <!-- Menu if mobile set to hidden -->
            <div :class="isOpen ? 'show' : 'hidden'" class="md:flex items-center md:block mt-4 md:mt-0">
                <div class="flex flex-col items-end md:flex-row md:ml-6">
                    <!-- <a href="#" class="my-1 text-sm text-gray-700 font-medium hover:text-indigo-500 md:ml-8 md:my-0">Home</a> -->
                    <a 
                        href="<?=BASEURL;?>/blog"
                        class="my-1 text-sm text-gray-700 font-medium hover:text-indigo-500 md:ml-8 md:my-0">Blog</a>

                    <?php if ( isset($_SESSION['user_id']) ) : ?>
                        <a href="<?=BASEURL;?>/auth/logout" class="my-1 text-sm text-gray-700 font-medium hover:text-indigo-500 md:ml-8 md:my-0">
                            Logout
                        </a>
                    <?php else : ?>
                        <a href="<?=BASEURL;?>/auth/login" class="my-1 text-sm text-gray-700 font-medium hover:text-indigo-500 md:ml-8 md:my-0">
                            Login
                        </a>
                    <?php endif; ?>

                </div>
            </div>

        </div>
    </nav>