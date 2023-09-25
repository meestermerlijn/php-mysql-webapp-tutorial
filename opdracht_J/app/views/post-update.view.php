<?php
view('parts/header', ['title' => 'Post updaten']);
view('parts/navigatie-menu');
?>

    <div class="sm:mx-10">
    <h1 class="text-3xl my-4">Post updaten</h1>
    <form action="/post-update" method="post">
        <?= csrf() ?>
        <input type="hidden" name="id" value="<?= $post['id'] ?>">
        <input type="text" name="title" placeholder="Titel" value="<?= $post['title'] ?>" required><br>
        <textarea name="content" placeholder="Content..."><?= $post['content'] ?></textarea><br>
        <input type="submit" value="Opslaan" name="save" class="border border-1 rounded-md px-2 py-1 hover:bg-gray-100 cursor-pointer">
    </form>


<?php
view('parts/footer');