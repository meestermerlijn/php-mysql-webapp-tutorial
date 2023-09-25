<nav class="bg-gray-500">
    <div class="flex justify-between items-center">
        <div class="flex justify-start items-center text-xl space-x-4">
            <a href="/" class="flex items-center">
                <img src="/images/wizard-logo.png" alt="wizard" class="h-10 p-2">
                <span class="font-bold"><?= config("app.name") ?></span>
            </a>
            <a href="/" class="<?= isUri("") ? 'underline ' : '' ?>text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md font-medium">Home</a>
            <a href="/contact" class="<?= isUri("contact") ? 'underline ' : '' ?>text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md font-medium">Contact</a>
            <a href="/about" class="<?= isUri("about") ? 'underline ' : '' ?>text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md font-medium">About</a>
            <a href="/posts" class="<?= isUri("posts") ? 'underline ' : '' ?>text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md font-medium">Posts</a>
        </div>
        <div class="justify-end">
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md font-medium">Login</a>
        </div>
    </div>
</nav>