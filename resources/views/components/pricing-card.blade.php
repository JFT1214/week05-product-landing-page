@props(['plan', 'price', 'description', 'features', 'highlighted' => false])

<div class="bg-white rounded-2xl p-8 shadow-sm border {{ $highlighted ? 'border-orange-400 ring-2 ring-orange-100' : 'border-gray-200' }} {{ $highlighted ? 'transform md:scale-105' : '' }} hover:shadow-xl transition duration-300">
    <!-- Badge -->
    @if($highlighted)
    <div class="inline-block bg-gradient-to-r from-orange-500 to-red-700 text-white text-xs font-semibold px-4 py-1 rounded-full mb-6">
        ⭐ MOST POPULAR
    </div>
    @endif

    <!-- Plan Info -->
    <h3 class="text-2xl font-bold text-gray-900 mb-2">{{ $plan }}</h3>
    <p class="text-gray-600 mb-6 text-sm">{{ $description }}</p>

    <!-- Price -->
    <div class="mb-8">
        <span class="text-5xl font-bold text-gray-900">₱{{ $price }}</span>
        <span class="text-gray-600 ml-2">per cup</span>
    </div>

    <!-- CTA Button -->
    <button class="w-full {{ $highlighted ? 'bg-gradient-to-r from-orange-500 to-red-700 text-white hover:shadow-lg hover:shadow-orange-500/50' : 'border-2 border-orange-400 text-orange-600 hover:bg-orange-50' }} py-3 rounded-lg font-semibold transition mb-8">
        Order Now
    </button>

    <!-- Features List -->
    <div class="space-y-4">
        <p class="text-sm font-semibold text-gray-900 uppercase tracking-wide">DESCRIPTION</p>
        <ul class="space-y-3">
            @foreach($features as $feature)
            <li class="flex items-center text-gray-700">
                <svg class="w-5 h-5 text-orange-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
                {{ $feature }}
            </li>
            @endforeach
        </ul>
    </div>
</div>