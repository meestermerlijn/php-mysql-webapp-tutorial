<?php
view('parts/header', ['title' => 'Berichten']);
view('parts/menu');
?>
    <!-- Titel -->
    <h1 class="text-2xl font-bold sm:ml-4 mb-4">Berichten</h1>

    <!-- Alle berichten -->
    <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2">
            <?php foreach ($berichten as $bericht): ?>
                <a href="/berichten/<?= $bericht['id'] ?>">
                    <?php view('parts/card', ['title' => htmlentities($bericht['titel']), 'content' => htmlentities($bericht['content'])]); ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="ml-10">
        <!-- Button om nieuw bericht te maken -->
        <a href="/berichten/create">
            <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                Maak nieuwe bericht
            </button>
        </a>
    </div>
<?php
view('parts/footer');

