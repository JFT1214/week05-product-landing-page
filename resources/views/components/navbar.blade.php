<nav class="sticky top-0 z-50 bg-white border-b border-gray-200 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex justify-between items-center h-16 md:h-20">

            <!-- Logo -->
            <a href="#home" class="flex items-center space-x-2">
                <div class="w-10 h-10 bg-gradient-to-br from-orange-500 to-red-700 rounded-full flex items-center justify-center">
                    <span class="text-white font-bold text-lg">☕</span>
                </div>

                <span class="font-bold text-lg text-gray-900">
                    THE STREET
                </span>
            </a>

            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center space-x-6">
                <a href="#home"
                   class="text-gray-600 hover:text-orange-600 transition font-medium">
                    Home
                </a>

                <a href="#features"
                   class="text-gray-600 hover:text-orange-600 transition font-medium">
                    Features
                </a>

                <a href="#pricing"
                   class="text-gray-600 hover:text-orange-600 transition font-medium">
                    Menu
                </a>

                <a href="#testimonials"
                   class="text-gray-600 hover:text-orange-600 transition font-medium">
                    Reviews
                </a>

                <a href="#contact"
                   class="text-gray-600 hover:text-orange-600 transition font-medium">
                    Contact
                </a>
            </div>

            <!-- Desktop Order Button -->
            <a href="#pricing"
               class="hidden lg:block bg-gradient-to-r from-orange-500 to-red-700 text-white px-5 py-2 rounded-lg hover:shadow-lg transition font-medium">
                Order Now
            </a>

            <!-- Mobile / Tablet Menu Button -->
            <button
                type="button"
                onclick="document.getElementById('mobile-menu').classList.toggle('hidden')"
                class="lg:hidden p-2 rounded-lg text-gray-700 hover:bg-gray-100 transition"
                aria-label="Open navigation menu"
            >
                <i data-feather="menu" class="w-6 h-6"></i>
            </button>

        </div>

        <!-- Mobile / Tablet Navigation -->
        <div id="mobile-menu" class="hidden lg:hidden pb-4">

            <div class="flex flex-col space-y-1">

                <a href="#home"
                   class="px-4 py-3 rounded-lg text-gray-700 hover:bg-orange-50 hover:text-orange-600 transition font-medium">
                    Home
                </a>

                <a href="#features"
                   class="px-4 py-3 rounded-lg text-gray-700 hover:bg-orange-50 hover:text-orange-600 transition font-medium">
                    Features
                </a>

                <a href="#pricing"
                   class="px-4 py-3 rounded-lg text-gray-700 hover:bg-orange-50 hover:text-orange-600 transition font-medium">
                    Menu
                </a>

                <a href="#testimonials"
                   class="px-4 py-3 rounded-lg text-gray-700 hover:bg-orange-50 hover:text-orange-600 transition font-medium">
                    Reviews
                </a>

                <a href="#contact"
                   class="px-4 py-3 rounded-lg text-gray-700 hover:bg-orange-50 hover:text-orange-600 transition font-medium">
                    Contact
                </a>

                <a href="#pricing"
                   class="mt-2 text-center bg-gradient-to-r from-orange-500 to-red-700 text-white px-5 py-3 rounded-lg hover:shadow-lg transition font-medium">
                    Order Now
                </a>

            </div>
        </div>

    </div>
</nav>