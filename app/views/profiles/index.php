<section>

    <div class="bg-white p-5 rounded-md shadow-md mb-8">
        <!-- Profile -->
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-4">
                <img
                    src="<?=BASEURL?>/img/avatars/<?=$data['user']['avatar']?>"
                    alt="<?= $data['user']['name']; ?>"
                    class="h-20 w-20 rounded-full">
                <div>
                    <h2 class="text-xl"><?= $data['user']['name']; ?></h2>
                    <p class="text-sm"><?= $data['user']['email']; ?></p>
                </div>
            </div>
            <div class="bg-pink-600 hover:bg-pink-700 px-3 py-2 rounded-md text-white text-sm font-medium shadow-lg">
                <a href="#">Edit profile</a>
            </div>
        </div>
    </div>

    <div class="bg-white px-5 py-8 rounded-md shadow-md">

        <div class="mb-8">
            <a href="<?=BASEURL?>/blog/create" class="text-white bg-indigo-600 hover:bg-indigo-700 rounded-md py-2 px-3 shadow-lg">
                + Tulisan
            </a>
        </div>

        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">

                    <div class="overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" scope="col">
                                        Title
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" scope="col">
                                        Status
                                    </th>
                                    <th class="px-6 py-3 relative" scope="col">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowwrap">
                                        <div class="text-sm text-gray-900">
                                            I Built A Successful Blog In One Day
                                        </div>
                                        <div class="text-xs text-gray-500">
                                            Productive
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowwrap">
                                        <span class="px-2 inline-flex text-sm leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            Active
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowwrap text-right text-base font-medium">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        
    </div>

</section>
