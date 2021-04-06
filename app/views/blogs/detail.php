<section>

    <div class="overflow-hidden bg-white shadow-md rounded-lg mb-12">
        <img src="<?=BASEURL?>/img/covers/<?=$data['blog']['cover']?>" alt="<?= $data['blog']['title'] ?>" class="w-full h-64 object-cover">
        <div class="p-6">

            <div class="mb-10">
                <span class="text-blue-600 text-xs font-medium uppercase">Tags</span>
                <h1 href="#" class="block font-semibold text-gray-800 text-2xl mt-2">
                    <?= $data['blog']['title']; ?>
                </h1>
                <div class="text-sm text-gray-600 hover:text-gray-500 mt-3">
                    <?= $data['blog']['content']; ?>
                </div>
            </div>

            <div class="mt-4">
                <div class="flex items-center">
                    <div class="flex items-center">
                        <img src="<?=BASEURL?>/img/avatars/<?= $data['blog']['avatar'] ?>" alt="Avatar" class="h-10 object-cover rounded-full">
                        <a href="#" class="mx-2 text-gray-700 font-semibold hover:underline">
                            <?= $data['blog']['name'] ?>
                        </a>
                    </div>
                    <span class="mx-1 text-gray-600 text-xs"><?= $data['blog']['created_at'] ?></span>
                </div>
            </div>

        </div>
    </div>

</section>