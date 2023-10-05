<?php
view("parts/header", ['title' => 'about']);
view("parts/navigatie-menu");

?>
    <div class="sm:mx-10">
    <h1 class="text-3xl my-4">About</h1>

    <p class="text-red mb-4"><?= htmlspecialchars($zin) ?></p>

    <form method="get">
        <label for="naam">Naam</label>
        <input type="text" id="naam" name="naam" class="rounded-md">
        <br>
        <label for="leeftijd">Leeftijd</label>
        <input type="number" id="leeftijd" name="leeftijd" class="rounded-md">
        <br>
        <label for="sport">Sport</label>
        <input type="text" id="sport" name="sport" class="rounded-md">
        <br>
        <input type="submit" value="OK" name="verstuur" class="border border-1 rounded-md px-2 py-1 hover:bg-gray-100 cursor-pointer">
    </form>

<?php
view("parts/footer");
