<?php
view('parts/header', ['title' => 'About']);
view('parts/menu');

?>
    <h1 class="text-2xl font-bold sm:ml-4 mb-4">About</h1>

    <div class="mx-auto max-w-7xl">
        <p class="font-semibold"><?= config('app.name') ?></p>
        <p><?= config('app.email') ?></p>
    </div>
<?php
view('parts/footer');
