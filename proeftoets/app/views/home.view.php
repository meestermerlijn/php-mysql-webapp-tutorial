<?php
view("parts/header", ['title' => 'home']);
view("parts/navigatie-menu");
?>
    <div class="sm:mx-10">
        <h1 class="text-3xl my-4">Home</h1>

        <div class="border border-1 rounded p-4 bg-gray-50">
            <h2 class="font-bold">Maak kennis met <?= htmlspecialchars($user->name); ?></h2>
        </div>
        <div class="border border-1 rounded p-4 bg-gray-50 my-4">
            Op de toets krijg je dit basis project. Volg de opdrachten om dit project uit te breiden.
        </div>
    </div>
<?php
view("parts/footer");