<section>

    <?php foreach($data['blogs'] as $blog) : ?>

        <div class="overflow-hidden bg-white shadow-md rounded-lg mb-12">
            <img src="<?=BASEURL?>/img/covers/<?=$blog['cover']?>" alt="<?= $blog['title'] ?>" class="w-full h-64 object-cover">
            <div class="p-6">
                <div>
                    <span class="text-blue-600 text-xs font-medium uppercase">Tags</span>
                    <a href="<?=BASEURL?>/blog/detail/<?=$blog['id']?>" class="block font-semibold text-gray-800 hover:text-gray-600 hover:underline text-2xl mt-2">
                        <?= $blog['title']; ?>
                    </a>
                    <div class="text-sm text-gray-600 hover:text-gray-500 mt-2 h-11 overflow-hidden cursor-pointer hover:underline">
                        <?= $blog['content']; ?>
                    </div>
                </div>
                <div class="mt-4">
                    <div class="flex items-center">
                        <div class="flex items-center">
                            <img src="<?=BASEURL?>/img/avatars/<?= $blog['avatar'] ?>" alt="Avatar" class="h-10 object-cover rounded-full">
                            <a href="<?=BASEURL?>/blog/detail/<?=$blog['id']?>" class="mx-2 text-gray-700 font-semibold hover:underline">
                                <?= $blog['name'] ?>
                            </a>
                        </div>
                        <span class="mx-1 text-gray-600 text-xs"><?= $blog['created_at'] ?></span>
                    </div>
                </div>
            </div>
        </div>

    <?php endforeach; ?>

</section>