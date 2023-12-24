<?php
//1pt voor maken van dit bestand
view('parts/header', ['title' => 'Klant gegevens aanpassen']); //1pt
view('parts/navigatie-menu');   //1pt
?>
    <form method="post" action="/klant-update/<?= $klant['id'] ?>">
        <!-- 3pt (mag ook met een los id veld <input type="hidden" name="id" value="...-->
        <?= csrf(); ?><!-- 2pt (veiligheid)-->
        Voornaam:
        <input type="text" name="voornaam" value="<?= $klant['voornaam'] ?>" required><br><!-- 1pt -->
        <?php if (isset($errors['voornaam'])): ?>
            <p class="text-red-500 text-sm my-2"><?= $errors['voornaam'] ?></p>
        <?php endif; ?>
        <!-- 1pt per veld (totaal dus 2pt)-->
        Tussenvoegsel:
        <input type="text" name="tussenvoegsel" value="<?= $klant['tussenvoegsel'] ?>"><br><!-- 1pt -->
        Achternaam:
        <input type="text" name="achternaam" value="<?= $klant['achternaam'] ?>" required><br><!-- 1pt -->
        <?php if (isset($errors['achternaam'])): ?>
            <p class="text-red-500 text-sm my-2"><?= $errors['achternaam'] ?></p>
        <?php endif; ?>
        Telefoonnummer:
        <input type="text" name="telefoonnr" value="<?= $klant['telefoonnr'] ?>"><br><!-- 1pt -->
        <input type="submit" value="Klant aanpassen" class="border border-1 rounded-md px-2 py-1 hover:bg-gray-100 cursor-pointer">
        <!-- 1pt -->
    </form>


<?php
view('parts/footer'); //1pt