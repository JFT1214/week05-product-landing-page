@props(['name', 'position', 'review', 'avatar' => '👤'])

<div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-200 hover:border-orange-300 hover:shadow-lg transition duration-300 group">
    <!-- Stars -->
    <div class="flex items-center mb-4">
        <span class="text-amber-400 text-lg">★★★★★</span>
    </div>

    <!-- Review -->
    <p class="text-gray-700 mb-6 text-lg italic leading-relaxed group-hover:text-gray-800 transition">
        "{{ $review }}"
    </p>

    <!-- Author -->
    <div class="flex items-center gap-4">
        <div class="w-12 h-12 rounded-full overflow-hidden flex-shrink-0">
    <img
        src="{{ asset($avatar) }}"
        alt="{{ $name }}"
        class="w-full h-full object-cover"
    >
</div>
        <div>
            <p class="font-bold text-gray-900">{{ $name }}</p>
            <p class="text-sm text-orange-600 group-hover:text-orange-700">{{ $position }}</p>
        </div>
    </div>
</div>