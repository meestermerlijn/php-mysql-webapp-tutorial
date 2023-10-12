<?php
//1pt voor maken van dit bestand
view('parts/header', ['title' => 'Afspraak invoeren']);
view('parts/navigatie-menu');

?>
    <h1 class="text-2xl my-4 px-4">Afspraak invoeren</h1>
    <form method="post" action="/afspraak-invoeren"><!-- 1pt -->
        <?= csrf(); ?><!-- 1pt -->
        Klant:
        <select name="klant_id"><!-- 3pt -->
            <?php foreach ($klanten as $klant) : ?>
                <option value="<?= $klant['id'] ?>"><?= $klant['voornaam'] ?> <?= $klant['achternaam'] ?></option>
                <!-- als je dezelfde gebruiker wilt voorselecteren die je voordat je fouten zag had geselecteerd zou dat hiermee kunnen, ik verwacht op de toets dat je dit nog niet kan (dus bonus als je dat wel doet 5pt) -->
                <?php /*
                <option value="<?= $klant['id'] ?>" <?= ($_POST['klant_id'] == $klant['id']) ? 'selected' : '' ?>><?= $klant['voornaam'] ?> <?= $klant['achternaam'] ?></option>
                */ ?>
            <?php endforeach; ?>
        </select><br>
        <?php if (isset($errors['klant_id'])): ?> <!-- 2pt voor alle validatie meldingen (0,5pt per stuk)-->
            <p class="text-red-500 text-sm my-2"><?= $errors['klant_id'] ?></p>
        <?php endif; ?>

        Datum:
        <input type="date" name="datum" value="<?= $_POST['datum'] ?? '' ?>"><!-- 1pt (opnieuw vullen 1pt bonus) --><br>
        <?php if (isset($errors['datum'])): ?>
            <p class="text-red-500 text-sm my-2"><?= $errors['datum'] ?></p>
        <?php endif; ?>

        Starttijd:
        <input type="time" name="van_tijd" value="<?= $_POST['van_tijd'] ?? '' ?>">
        <!-- 1pt (opnieuw vullen 1pt bonus) --><br>
        <?php if (isset($errors['van_tijd'])): ?>
            <p class="text-red-500 text-sm my-2"><?= $errors['van_tijd'] ?></p>
        <?php endif; ?>

        Eindtijd:
        <input type="time" name="tot_tijd" value="<?= $_POST['tot_tijd'] ?? '' ?>">
        <!-- 1pt (opnieuw vullen 1pt bonus)--><br>
        <?php if (isset($errors['tot_tijd'])): ?>
            <p class="text-red-500 text-sm my-2"><?= $errors['tot_tijd'] ?></p>
        <?php endif; ?>

        Opmerking:
        <textarea name="opmerking"><?= $_POST['opmerking'] ?? '' ?></textarea><!-- 2pt  (opnieuw vullen 2pt bonus)-->
        <br>
        <input type="submit" value="Afspraak maken" class="border border-1 rounded-md px-2 py-1 hover:bg-gray-100 cursor-pointer">
        <!-- 1pt -->

    </form>

<?php
view('parts/footer');