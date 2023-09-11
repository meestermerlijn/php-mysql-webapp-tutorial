<?php
view("parts/header", ['title' => 'Alle posts']);
view("parts/navigatie-menu");
?>
    <div class="sm:mx-10">
        <h1 class="text-3xl my-4">Home</h1>
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
