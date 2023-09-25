<?php
view("parts/header", ['title' => 'Alle posts']);
view("parts/navigatie-menu");
?>
    <div class="sm:mx-10">
        <h1 class="text-3xl my-4">Home</h1>
        <a href="/post-create" class="text-indigo-600 hover:text-indigo-400">Post toevoegen</a><br>
        <form action="/posts" method="get">
            <input type="text" id="search" name="search" class="rounded-md">
            <input type="submit" value="Zoek" name="verstuur" class="border border-1 rounded-md px-2 py-1 hover:bg-gray-100 cursor-pointer">
        </form>

        <?php
        foreach ($posts as $post) {
            ?>
            <div class="border border-1 rounded p-4 bg-gray-50">
                <h2 class="font-bold"><?= htmlspecialchars($post['title']) ?></h2>
                <?= htmlspecialchars($post['content']) ?>
            </div>
        <?php } ?>
    </div>
<?php
view("parts/footer");
