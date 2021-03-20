<section>

    <?php foreach($data['blogs'] as $blog) : ?>

        <div class="overflow-hidden bg-white shadow-md rounded-lg mb-12">
            <img src="<?=BASEURL?>/img/covers/<?=$blog['cover']?>" alt="<?= $blog['title'] ?>" class="w-full h-64 object-cover">
            <div class="p-6">
                <div>
                    <span class="text-blue-600 text-xs font-medium uppercase">Tags</span>
                    <a href="#" class="block font-semibold text-gray-800 hover:text-gray-600 hover:underline text-2xl mt-2">
                        <?= $blog['title']; ?>
                    </a>
                    <div class="text-sm text-gray-600 hover:text-gray-500 mt-2 h-11 overflow-hidden cursor-pointer hover:underline">
                        <?= $blog['content']; ?>
                    </div>
                </div>
                <div class="mt-4">
                    <div class="flex items-center">
                        <div class="flex items-center">
                            <img src="./img/avatar-01.png" alt="Avatar" class="h-10 object-cover rounded-full">
                            <a href="#" class="mx-2 text-gray-700 font-semibold hover:underline">
                                Jennie
                            </a>
                        </div>
                        <span class="mx-1 text-gray-600 text-xs"><?= $blog['created_at'] ?></span>
                    </div>
                </div>
            </div>
        </div>

    <?php endforeach; ?>

    <div class="overflow-hidden bg-white shadow-md rounded-lg mb-12">
        <img src="https://images.pexels.com/photos/160107/pexels-photo-160107.jpeg" alt="post 1" class="w-full h-64 object-cover">
        <div class="p-6">
            <div>
                <span class="text-blue-600 text-xs font-medium uppercase">Tags</span>
                <a href="#" class="block text-gray-800 font-semibold text-2xl mt-2 hover:text-gray-600 hover:underline">
                    I Built A Successful Blog In One Day
                </a>
                <div class="text-sm text-gray-600 mt-2 h-16 border border-red-400 overflow-hidden">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere, non. Veniam explicabo, laboriosam ipsa mollitia optio consequuntur reiciendis commodi sit rerum esse nisi, culpa quis assumenda numquam enim vitae corrupti.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates quidem laudantium cum, praesentium totam est quam unde itaque tenetur ab, quasi minus soluta ea id consectetur. Ducimus qui saepe sequi.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci similique blanditiis error, repudiandae dolorem deleniti impedit quibusdam dolorum sapiente id corporis inventore officia voluptatibus. Quaerat a vitae nisi et suscipit.lore
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates veniam, libero quae molestiae corporis itaque quas dolorum cumque, maxime magni rem atque omnis provident reiciendis autem voluptatibus dolor, nam saepe.
                    At laboriosam unde eos saepe! Aspernatur praesentium dignissimos officiis non, accusamus cumque ad, repudiandae sint inventore corporis tempore architecto repellendus sit aut, dolorum provident! Quas totam quasi repellendus sequi minima.
                    Eligendi vel minus laudantium facere amet ipsam necessitatibus numquam temporibus reiciendis! Dolores placeat optio itaque nostrum ullam minima, corporis repellendus, incidunt eius error, hic voluptatum aliquid voluptates. Sapiente, animi quas.
                </div>
            </div>
            <div class="mt-4">
                <div class="flex items-center">
                    <div class="flex items-center">
                        <img src="./img/avatar-01.png" alt="Avatar" class="h-10 object-cover rounded-full">
                        <a href="#" class="mx-2 text-gray-700 font-semibold hover:underline">Jennie</a>
                    </div>
                    <span class="mx-1 text-gray-600 text-xs">21 Sep 2020</span>
                </div>
            </div>
        </div>
    </div>


</section>