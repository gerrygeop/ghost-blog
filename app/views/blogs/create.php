<section class="bg-white p-5 rounded-md shadow-md">

    <form action="<?=BASEURL?>/blog/store" method="POST" enctype="multipart/form-data">
        <div class="grid grid-cols-1 gap-6">

            <div>
                <label for="cover" class="block text-gray-700">
                    Cover photo
                </label>

                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                    <div class="space-y-1 text-center">

                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <div class="flex justify-center text-sm text-gray-600">
                            <label
                                for="cover"
                                class="relative cursor-pointer bg-indigo-50 hover:bg-indigo-100 px-4 py-2 rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                    <input type="file" id="cover" name="cover" class="sr-only" required>
                                    <span>Upload a file</span>
                            </label>
                        </div>

                        <p class="text-xs text-gray-500">
                            PNG, JPG, JPEG up to 5MB
                        </p>
                    </div>
                </div>
            </div>

            <div>
                <label for="title" class="block font-medium text-gray-700">Judul</label>
                <input
                    type="text"
                    name="title" 
                    required
                    class="block w-full px-4 py-2 mt-2 text-gray-700 border-2 border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>
            
            <div>
                <label for="content" class="block font-medium text-gray-700">Content</label>
                <textarea
                    name="content"
                    id="texteditor"
                    cols="30"
                    rows="10"
                    class="block w-full h-98 px-4 py-2 mt-2 text-gray-700 border-2 border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>
            </div>

            <div class="mt-10 text-right">
                <button type="submit" class="bg-violet-600 hover:bg-violet-700 text-violet-50 px-4 py-2 shadow-md rounded-md font-medium">
                    Simpan
                </button>
            </div>

        </div>
    </form>

</section>