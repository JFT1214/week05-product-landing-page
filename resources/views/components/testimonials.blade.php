```blade
<section id="testimonials" class="py-20 bg-gray-50 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">

        <!-- Section Header -->
        <div class="text-center mb-16">
            <p class="text-orange-600 font-semibold text-sm tracking-widest uppercase mb-4">
                Customer Reviews
            </p>

            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                What Our Customers Say
            </h2>

            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Authentic feedback and experiences shared by our coffee-loving community.
            </p>
        </div>

        <!-- Testimonials Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <x-testimonial-card
                name="Maria de los Santos"
                position="Regular Customer • Verified ✓"
                review="The cappuccino here is perfectly balanced. Been coming for 3 months now and I haven't found better coffee in Pagsanjan. Plus the WiFi is super fast—perfect for remote work!"
                avatar="images/testimonials/maria.jpg"
            />

            <x-testimonial-card
                name="Juan P. Reyes"
                position="Regular Customer • Verified ✓"
                review="Absolutely love this place. The ambiance is perfect for studying, the lattes are consistent, and the staff remembers my order. Highly recommended!"
                avatar="images/testimonials/juan.jpg"
            />

            <x-testimonial-card
                name="Sarah Jean Cruz"
                position="Regular Customer • Verified ✓"
                review="The cold brew is my go-to now. Smooth, rich, and reasonably priced. The plant-filled setup makes it feel like a sanctuary. Highly recommend!"
                avatar="images/testimonials/sarah.jpg"
            />

            <x-testimonial-card
                name="Robert Santos"
                position="Regular Customer • Verified ✓"
                review="Brought my whole team here for meetings. Professional setup, great coffee, and attentive service. It's become our unofficial office space."
                avatar="images/testimonials/robert.jpg"
            />

            <x-testimonial-card
                name="Angela Torres"
                position="Regular Customer • Verified ✓"
                review="First time I ordered here, I didn't know what to expect. The barista guided me through the menu, made an amazing mocha, and the vibe is just chef's kiss!"
                avatar="images/testimonials/angela.jpg"
            />

            <x-testimonial-card
                name="Marcus Leong"
                position="Regular Customer • Verified ✓"
                review="The specialty drinks are worth trying every single one. Great coffee, great atmosphere, and a perfect place to relax. DA STREET nailed it!"
                avatar="images/testimonials/marcus.jpg"
            />

        </div>

    </div>
</section>
```
