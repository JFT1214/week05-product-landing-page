<section id="pricing" class="py-20 bg-white px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <p class="text-orange-600 font-semibold text-sm tracking-widest uppercase mb-4">Our Menu</p>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                Premium Coffee Selection
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Handcrafted specialty drinks made with premium beans. Every cup is a work of art.
            </p>
        </div>

        <!-- Pricing Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <x-pricing-card
                plan="Espresso Classics"
                price="120"
                description="Bold & Pure"
                :features="[
                    'Espresso shot',
                    'Water',
                    'Sugar',
                    'Iced or Hot'
                ]"
            />

            <x-pricing-card
                plan="Hazelnut Latte"
                price="180"
                description="Creamy & Rich ⭐ Favorite"
                :features="[
                    'Espresso shot',
                    'Hazelnut Syrup',
                    'Milk',
                    'Iced or Hot'
                ]"
                highlighted="true"
            />

            <x-pricing-card
                plan="Ferrero Frappe"
                price="150"
                description="Warm and Calming"
                :features="[
                    'Ferrero Rocher',
                    'Milk',
                    'Nutella',
                    'Espresso shot',
                    'Sugar(optional)',
                    'Ice'
                ]"
            />
        </div>

        <!-- Bottom CTA -->
        <div class="text-center mt-16">
            <p class="text-gray-600 mb-6">Join our loyalty program and earn points with every purchase</p>
        </div>
    </div>
</section>