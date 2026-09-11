@php
    use App\Models\Product;

    $products = Product::orderByDesc('is_featured')->get();
@endphp

<section id="pricing" class="py-20 bg-white px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">

        <!-- Section Header -->
        <div class="text-center mb-16">
            <p class="text-orange-600 font-semibold text-sm tracking-widest uppercase mb-4">
                Our Menu
            </p>

            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                Premium Coffee Selection
            </h2>

            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Handcrafted specialty drinks made with premium beans.
                Every cup is a work of art.
            </p>
        </div>

        <!-- Menu Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($products as $product)
                <x-pricing-card
                    :plan="$product->name"
                    :price="$product->price"
                    :description="$product->description"
                    :features="$product->features ?? []"
                    :highlighted="$product->is_featured"
                />
            @endforeach
        </div>

        <!-- Bottom Message -->
        <div class="text-center mt-16">
            <p class="text-gray-600">
                Join our loyalty program and earn points with every purchase
            </p>
        </div>

    </div>
</section>