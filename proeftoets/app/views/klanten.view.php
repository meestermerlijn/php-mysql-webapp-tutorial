<?php
//1pt voor maken van dit bestand
view('parts/header', ['title' => 'Klanten']);
view('parts/navigatie-menu');
?>
    <h1 class="font-bold">Selecteer een klant op te wijzigen:</h1><!-- 1pt (wat er moet gebeuren laten zien)-->
<?php foreach ($klanten as $klant): ?> <!-- 2pt -->
    <div>
        <a href="/klant-edit/<?= $klant['id'] ?>"><?= $klant['voornaam'] ?> <?= $klant['achternaam'] ?></a>
        <!-- 4pt  dit mag natuurlijk ook een selectbox zijn in plaats van een link -->
    </div>
<?php endforeach; ?><!-- 1pt -->
<?php
view('partials/footer');