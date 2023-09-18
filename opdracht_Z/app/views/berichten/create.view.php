<?php
view('parts/header', ['title' => 'Schrijf bericht']);
view('parts/menu');
?>
    <!-- Titel -->
    <h1 class="text-2xl font-bold sm:ml-4 mb-4">Nieuwe bericht</h1>

    <!-- Formulier om een bericht te maken -->
    <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="">
            <form action="/berichten" method="POST">
                <?=csrf()?>
                <label for="titel">Titel</label>
                <input type="text" class="w-full rounded" name="titel" ><br>
                <label for="content">Bericht</label>
                <textarea class="w-full h-40 rounded" name="content"></textarea><br>
                <button type="submit" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Opslaan</button>
            </form>
        </div>
    </div>

    <div class="flex gap-4 ml-10">
        <!-- Terug naar overzicht button -->
        <a href="/berichten"><button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Overzicht</button></a>
    </div>

<?php
view('parts/footer');