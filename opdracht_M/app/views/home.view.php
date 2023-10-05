<?php
view("parts/header", ['title' => 'home']);
view("parts/navigatie-menu");
?>
    <div class="sm:mx-10">
        <h1 class="text-3xl my-4">Home</h1>

        <div class="border border-1 rounded p-4 bg-gray-50">
            <h2 class="font-bold"><?= htmlspecialchars($title); ?></h2>
            <?= htmlspecialchars($content) ?>
        </div>
    </div>

<?= $user->name ?> heeft de volgende posts:
    <ul class="list-disc">
        <?php foreach ($user->posts() as $post): ?>
            <li class="ml-4"><?= $post['title'] ?></li>
        <?php endforeach; ?>
    </ul>
<?php
view("parts/footer");