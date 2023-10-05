<?php
view('parts/header', ['title' => 'Post updaten']);
view('parts/navigatie-menu');
?>

    <div class="sm:mx-10">
    <h1 class="text-3xl my-4">Post updaten</h1>
    <form action="/post-update/<?= $post['id'] ?>" method="post">
        <?= csrf() ?>
        <input type="text" name="title" placeholder="Titel" value="<?= $post['title'] ?>" required><br>
        <?php if (isset($errors['title'])): ?>
            <p class="text-red-500 text-sm my-2"><?= $errors['title'] ?></p>
        <?php endif; ?>
        <textarea name="content" placeholder="Content..."><?= $post['content'] ?></textarea><br>
        <?php if (isset($errors['content'])): ?>
            <p class="text-red-500 text-sm my-2"><?= $errors['content'] ?></p>
        <?php endif; ?>
        <input type="submit" value="Opslaan" class="border border-1 rounded-md px-2 py-1 hover:bg-gray-100 cursor-pointer">
    </form>


<?php
view('parts/footer');