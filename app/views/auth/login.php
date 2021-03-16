<section class="max-w-sm mx-auto bg-white rounded-md shadow-md mt-20">

    <div class="p-6">
        <h2 class="font-semibold text-lg text-center text-gray-700 capitalize">Login</h2>

        <form action="<?=BASEURL;?>/auth/login" method="POST">

        <!-- Login not yet -->

            <div class="grid grid-cols-1 gap-6 mt-4">
                <div>
                    <label for="username" class="text-gray-700">Username</label>
                    <input
                        type="text"
                        name="username"
                        required
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                    <span class="text-xs text-red-500 italic font-bold">
                        <?= $data['usernameError']; ?>
                    </span>
                </div>
                
                <div>
                    <label for="password" class="text-gray-700">Password</label>
                    <input
                        type="password"
                        name="password"
                        required
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                    <span class="text-xs text-red-500 italic font-bold">
                        <?= $data['passwordError']; ?>
                    </span>
                </div>
            </div>

            <div class="flex justify-end mt-6">
                <button
                    type="submit"
                    class="px-6 py-2 leading-5 text-white duration-200 bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none">
                    Login
                </button>
            </div>

        </form>
    </div>

    <div class="flex items-center justify-center py-4 text-center bg-gray-100">
        <span class="text-sm text-gray-600">Don't have an account? </span>
        <a href="<?=BASEURL;?>/auth/register" class="mx-2 text-sm font-bold text-blue-600 hover:text-blue-500">Register</a>
    </div>

</section>