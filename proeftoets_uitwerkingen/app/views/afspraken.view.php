<?php
//1pt voor maken van dit bestand
view('parts/header', ['title' => 'Afspraken']);
view('parts/navigatie-menu');

?>

    <form action="/afspraken" method="get"><!-- 1pt -->
        <input type="date" name="datum" value="<?= $_GET['datum'] ?? '' ?>" required>
        <!-- 1pt let op het voorvullen is niet verplicht-->
        <input type="submit" value="Zoek" class="border border-1 rounded-md px-2 py-1 hover:bg-gray-100 cursor-pointer">
        <!-- 1pt -->
    </form>

<?php foreach ($afspraken as $afspraak): ?><!-- 3pt -->
    <div class="flex">
        <span><?= $afspraak['voornaam'] ?> <?= $afspraak['achternaam'] ?> <?= $afspraak['van'] ?>
        -<?= $afspraak['tot'] ?></span><!-- 1pt per veld (totaal dus 4pt)-->
        <form method="post" action="/afspraak-destroy/<?= $afspraak['id'] ?>">
            <!-- 2pt (mag ook met een los id veld <input type="hidden" name="id" value="...-->
            <?= csrf(); ?><!-- 2pt (veiligheid)-->
            <input type="submit" value="Verwijder afspraak" class="border border-1 rounded-md px-2 py-1 hover:bg-gray-100 cursor-pointer">
            <!-- 1pt -->
        </form>
    </div>

<?php endforeach; ?>

<?php
view('parts/footer');