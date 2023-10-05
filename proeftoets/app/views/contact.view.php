<?php
view("parts/header", ['title' => 'contact']);
view("parts/navigatie-menu");
?>
    <div class="sm:mx-10">
        <h1 class="text-3xl my-4">Contact</h1>
        <p>
            Bedrijf: <?= config("app.name") ?><br>
            Email: <?= config("app.email") ?><br>
        </p>
    </div>
<?php
view("parts/footer");