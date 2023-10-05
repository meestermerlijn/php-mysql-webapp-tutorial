<?php
view("parts/header", ['title' => 'Nieuwe post aanmaken']);
view("parts/navigatie-menu");
?>
    <div class="sm:mx-10">
        <h1 class="text-3xl my-4">Nieuwe post maken</h1>
        <form action="/post-store" method="post">
            <?= csrf() ?>
            <input type="text" name="title" placeholder="Titel" value="<?= $_POST['title'] ?? '' ?>"><br>
            <?php if (isset($errors['title'])): ?>
                <p class="text-red-500 text-sm my-2"><?= $errors['title'] ?></p>
            <?php endif; ?>
            <textarea name="content" placeholder="Content..."><?= $_POST['content'] ?? '' ?></textarea>
            <?php if (isset($errors['content'])): ?>
                <p class="text-red-500 text-sm my-2"><?= $errors['content'] ?></p>
            <?php endif; ?>
            <br>
            <input type="submit" value="Opslaan" class="border border-1 rounded-md px-2 py-1 hover:bg-gray-100 cursor-pointer">
        </form>

    </div>

<?php
view("parts/footer");