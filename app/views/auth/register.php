<section class="bg-white rounded-md shadow-md mt-20 p-6">

    <h2 class="text-lg font-semibold text-gray-700 capitalize">Register</h2>
    
    <form action="<?=BASEURL;?>/auth/register" method="POST" enctype="multipart/form-data">
        <div class="grid grid-cols-1 gap-6 mt-4 md:grid-cols-2">

            <div>
                <label class="text-gray-700" for="avatar">Avatar</label>
                <input
                    name="avatar"
                    type="file"
                    required
                    class="block w-full px-1 py-2 mt-2 text-gray-700 rounded-md cursor-pointer bg-gray-100 hover:bg-gray-200 focus:outline-none">
                <span class="text-xs text-red-500 italic">
                    <?= $data['avatarError']; ?>
                </span>
            </div>

            <div>
                <label class="text-gray-700" for="name">Name</label>
                <input
                    name="name" 
                    type="text"
                    required
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                <span class="text-xs text-red-500 italic">
                    <?= $data['nameError']; ?>
                </span>
            </div>

            <div>
                <label class="text-gray-700" for="username">Username</label>
                <input
                    name="username" 
                    type="text"
                    required
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                <span class="text-xs text-red-500 italic">
                    <?= $data['usernameError']; ?>
                </span>
            </div>

            <div>
                <label class="text-gray-700" for="email">Email Address</label>
                <input
                    name="email"
                    type="email"
                    required
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                <span class="text-xs text-red-500 italic">
                    <?= $data['emailError']; ?>
                </span>
            </div>

            <div>
                <label class="text-gray-700" for="password">Password</label>
                <input
                    name="password"
                    type="password"
                    required
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                <span class="text-xs text-red-500 italic">
                    <?= $data['passwordError']; ?>
                </span>
            </div>

            <div>
                <label class="text-gray-700" for="confirmPassword">Confirm Password</label>
                <input
                    name="confirmPassword"
                    type="password"
                    required
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                <span class="text-xs text-red-500 italic">
                    <?= $data['confirmPasswordError']; ?>
                </span>
            </div>

        </div>

        <div class="flex justify-end mt-6">
            <button
                type="submit"
                class="px-6 py-2 leading-5 text-white duration-200 bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none">
                Create Account
            </button>
        </div>
        
    </form>
</section>