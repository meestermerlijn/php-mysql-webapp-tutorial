<?php
view('parts/header', ['title' => 'Home']);
view('parts/menu');

?>
    <h1 class="m-10 text-3xl font-bold">Welkom op onze website</h1>

    <div class="m-10">
        <?php if (isLogin()): ?>
            Je bent ingelogd als <?= user()->name ?>
        <?php else: ?>
            <a href="/login" class="text-indigo-600 hover:text-indigo-800">Inloggen</a>
        <?php endif ?>
    </div>

<?php
view('parts/footer');
