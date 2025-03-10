<footer class="bg-gray-100 dark:bg-gray-900 dark:text-gray-400 py-8 mt-16">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 text-center md:text-left">

        <!-- 1. Имя / логотип -->
        <div>
            <h2 class="text-xl font-bold dark:text-white">{{ config('app.my_name') }}</h2>
            <p class="mt-2 text-sm">Frontend & Backend Developer</p>
        </div>

        <!-- 2. Навигация -->
        <nav class="flex flex-col space-y-2">
            <a href="#about" class="dark:hover:text-white">Обо мне</a>
            <a href="#skills" class="dark:hover:text-white">Навыки</a>
            <a href="#experience" class="dark:hover:text-white">Опыт</a>
            <a href="#recommendations" class="dark:hover:text-white">Рекомендации</a>
        </nav>

        <!-- 3. Соц. сети -->
        <div class="flex justify-center md:justify-end space-x-4">
            <livewire:socials.linkedin />
            <livewire:socials.github />
            <livewire:socials.telegram />
        </div>

    </div>

    <!-- Линия и копирайт -->
    <div class="border-t border-gray-700 mt-6 pt-4 text-center text-sm">
        © {{ date('Y') }} {{ config('app.my_name') }}. Все права защищены.
    </div>
</footer>
</body>
</html>
