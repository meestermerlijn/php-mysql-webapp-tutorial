<?php
view('parts/header', ['title' => 'Bekijk bericht - ' . $bericht['titel']]);
view('parts/menu');
?>
    <!-- Titel -->
    <h1 class="text-2xl font-bold sm:ml-4 mb-4">Bericht - <?= htmlentities($bericht['titel']) ?></h1>

    <!-- Detail overzicht -->
    <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="">
            <strong>Titel:</strong> <?= htmlentities($bericht['titel']) ?><br>
            <strong>Bericht:</strong> <?= htmlentities($bericht['content']) ?><br>
            <strong>Geschreven op:</strong> <?= htmlentities($bericht['created_at']) ?>
        </div>
    </div>
    <!-- Actie buttons -->
    <div class="flex gap-4 ml-10">
        <!-- Overzicht button -->
        <a href="/berichten">
            <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                Overzicht
            </button>
        </a>
        <!-- wijzig button -->
        <a href="/berichten/<?= $bericht['id'] ?>/edit">
            <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                Wijzig
            </button>
        </a>
        <!-- verwijder button -->
        <form action="/berichten/<?= $bericht['id'] ?>" method="POST">
            <?= csrf() ?>
            <?= method_delete() ?>
            <button type="submit" class="text-white bg-gradient-to-r from-red-500 via-red-600 to-red-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                Verwijder
            </button>
        </form>
    </div>
<?php
view('parts/footer');