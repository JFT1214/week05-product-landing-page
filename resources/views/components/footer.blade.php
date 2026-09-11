<footer id="contact" class="bg-gray-950 text-white px-4 sm:px-6 lg:px-8 py-16">

    <div class="max-w-7xl mx-auto">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 lg:gap-12">

            {{-- Brand --}}
            <div>
                <div class="flex items-center gap-3 mb-5">
                    <div class="w-10 h-10 bg-gradient-to-br from-orange-500 to-red-700 rounded-full flex items-center justify-center">
                        <span class="text-white font-bold text-lg">☕</span>
                    </div>

                    <span class="text-xl font-bold">
                        THE STREET
                    </span>
                </div>

                <p class="text-gray-400 leading-relaxed">
                    Where coffee meets community. A modern café
                    designed for connection, creativity, and great coffee.
                </p>

                {{-- Social Links --}}
                <div class="flex items-center gap-4 mt-6">

                    <a
                        href="https://www.facebook.com/"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="Facebook"
                        class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-orange-600 transition"
                    >
                        <i data-feather="facebook" class="w-5 h-5"></i>
                    </a>

                    <a
                        href="https://www.instagram.com/"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="Instagram"
                        class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-orange-600 transition"
                    >
                        <i data-feather="instagram" class="w-5 h-5"></i>
                    </a>

                    <a
                        href="https://www.tiktok.com/"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="TikTok"
                        class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-orange-600 transition"
                    >
                        <span class="text-sm font-bold">TikTok</span>
                    </a>

                </div>
            </div>


            {{-- Quick Links --}}
            <div>
                <h3 class="text-lg font-bold mb-5">
                    Quick Links
                </h3>

                <ul class="space-y-3">

                    <li>
                        <a
                            href="#home"
                            class="text-gray-400 hover:text-orange-400 transition"
                        >
                            Home
                        </a>
                    </li>

                    <li>
                        <a
                            href="#features"
                            class="text-gray-400 hover:text-orange-400 transition"
                        >
                            Features
                        </a>
                    </li>

                    <li>
                        <a
                            href="#pricing"
                            class="text-gray-400 hover:text-orange-400 transition"
                        >
                            Menu
                        </a>
                    </li>

                    <li>
                        <a
                            href="#testimonials"
                            class="text-gray-400 hover:text-orange-400 transition"
                        >
                            Reviews
                        </a>
                    </li>

                    <li>
                        <a
                            href="#contact"
                            class="text-gray-400 hover:text-orange-400 transition"
                        >
                            Contact
                        </a>
                    </li>

                </ul>
            </div>


            {{-- Company --}}
            <div>
                <h3 class="text-lg font-bold mb-5">
                    Company
                </h3>

                <ul class="space-y-3">

                    <li>
                        <a
                            href="#"
                            class="text-gray-400 hover:text-orange-400 transition"
                        >
                            About Us
                        </a>
                    </li>

                    <li>
                        <a
                            href="#"
                            class="text-gray-400 hover:text-orange-400 transition"
                        >
                            Careers
                        </a>
                    </li>

                    <li>
                        <a
                            href="#"
                            class="text-gray-400 hover:text-orange-400 transition"
                        >
                            Privacy Policy
                        </a>
                    </li>

                    <li>
                        <a
                            href="#"
                            class="text-gray-400 hover:text-orange-400 transition"
                        >
                            Terms of Service
                        </a>
                    </li>

                </ul>
            </div>


            {{-- Contact Us --}}
            <div>
                <h3 class="text-lg font-bold mb-5">
                    Contact Us
                </h3>

                <div class="space-y-4 text-gray-400">

                    {{-- Address --}}
                    <div class="flex items-start gap-3">
                        <i
                            data-feather="map-pin"
                            class="w-5 h-5 text-orange-400 flex-shrink-0 mt-1"
                        ></i>

                        <p>
                            D6 Wash n Chill,<br>
                            Pagsanjan, Philippines, 4008
                        </p>
                    </div>

                    {{-- Phone --}}
                    <div class="flex items-center gap-3">
                        <i
                            data-feather="phone"
                            class="w-5 h-5 text-orange-400 flex-shrink-0"
                        ></i>

                        <a
                            href="tel:09xxxxxxxxxx"
                            class="hover:text-orange-400 transition"
                        >
                            09xxxxxxxxxx
                        </a>
                    </div>

                    {{-- Email --}}
                    <div class="flex items-center gap-3">
                        <i
                            data-feather="mail"
                            class="w-5 h-5 text-orange-400 flex-shrink-0"
                        ></i>

                        <a
                            href="https://mail.google.com/mail/?view=cm&fs=1&to=dastreetcoffee@gmail.com"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="hover:text-orange-400 transition break-all"
                        >
                            dastreetcoffee@gmail.com
                        </a>
                    </div>

                    {{-- Hours --}}
                    <div class="flex items-start gap-3">
                        <i
                            data-feather="clock"
                            class="w-5 h-5 text-orange-400 flex-shrink-0 mt-1"
                        ></i>

                        <p>
                            Mon-Sun: 3PM - 12AM
                        </p>
                    </div>

                </div>
            </div>

        </div>


        {{-- Bottom --}}
        <div class="border-t border-gray-800 mt-12 pt-8 text-center">

            <p class="text-gray-500 text-sm">
                © {{ date('Y') }} THE STREET Coffee.
                All rights reserved.
            </p>

        </div>

    </div>

</footer>