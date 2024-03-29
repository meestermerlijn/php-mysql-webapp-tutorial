<?php
view("parts/header", ['title' => 'Alle posts']);
view("parts/navigatie-menu");
?>
    <div class="sm:mx-10">
        <h1 class="text-3xl my-4">Home</h1>
        <?php if (auth()): ?>
            <a href="/post-create" class="text-indigo-600 hover:text-indigo-400">Post toevoegen</a><br>
        <?php endif; ?>
        <form action="/posts" method="get">
            <input type="text" id="search" name="search" class="rounded-md">
            <input type="submit" value="Zoek" name="verstuur" class="border border-1 rounded-md px-2 py-1 hover:bg-gray-100 cursor-pointer">
        </form>

        <?php
        foreach ($posts as $post):
            ?>
            <div class="border border-1 rounded p-4 bg-gray-50">
                <h2 class="font-bold"><?= htmlspecialchars($post['title']) ?></h2>
                <?= htmlspecialchars($post['content']) ?>
                <h3 class="italic text-sm mt-3">Door: <?= htmlspecialchars($post['name']) ?></h3>
                <div class="flex justify-between">
                    <form method="get" action="/post-edit/<?= $post['id'] ?>">
                        <input type="submit" value="wijzig" name="update" class="border border-1 rounded-md px-2 py-1 hover:bg-gray-100 cursor-pointer">
                    </form>

                    <form method="post" action="/post-destroy">
                        <?= csrf() ?>
                        <input type="hidden" name="id" value="<?= $post['id'] ?>">
                        <input type="submit" value="Verwijder" name="delete" class="border bg-red-600 text-white border-1 rounded-md px-2 py-1 hover:bg-red-300 cursor-pointer">
                    </form>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php
view("parts/footer");
