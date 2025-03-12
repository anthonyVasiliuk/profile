<header x-data="{ darkMode: localStorage.getItem('theme') === 'dark' }"
        x-init="if (darkMode) document.documentElement.classList.add('dark')"
        class="fixed top-0 left-0 w-full bg-white dark:bg-gray-900 shadow-md z-50 transition ">
    <script>
        let currentLang = document.documentElement.getAttribute('lang') || 'ru';
        function toggleLang() {
            let newLang = currentLang === 'ru' ? 'en' : 'ru';

            window.location.href = `/lang/${newLang}`;
        }
    </script>
    <div class="container mx-auto flex items-center justify-between py-4 px-6 ">

        <!-- Логотип -->
        <a href="#" class="text-2xl font-bold text-gray-900 dark:text-white hover:text-blue-300 dark:hover:text-stone-400">{{ __('global.my_name') }}</a>

        <!-- Навигация -->
        <nav class="hidden lg:flex space-x-6">
            <a href="#about" class="text-gray-700 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400">
                <span>{{ __('global.about') }}</span>
            </a>
            <a href="#skills" class="text-gray-700 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400">
                <span>{{ __('global.skills') }}</span>
            </a>
            <a href="#experience" class="text-gray-700 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400">
                <span>{{ __('global.experience') }}</span>
            </a>
        </nav>

        <!-- Иконки: соцсети, язык, тема -->
        <div class="flex items-center space-x-4">
            <!-- Переключение языка -->
            <button @click="toggleLang()" class="text-gray-700 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400">
                🌍 <span x-text="currentLang.toUpperCase()"></span>
            </button>

            <!-- Переключение темы -->
            <button @click="darkMode = !darkMode; localStorage.setItem('theme', darkMode ? 'dark' : 'light');
                    document.documentElement.classList.toggle('dark')"
                    class="text-gray-700 dark:text-gray-300 hover:text-yellow-500 dark:hover:text-yellow-400 cursor-pointer">
                <i x-show="!darkMode" >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
                    </svg>
                </i>
                <i x-show="darkMode" >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                    </svg>
                </i>

            </button>

            <!-- Соцсети -->
            <livewire:socials.linkedin />
            <livewire:socials.github />
            <livewire:socials.telegram />
        </div>
    </div>

</header>
