@props(['icon', 'title', 'description'])

<div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-xl hover:border-orange-300 transition duration-300 border border-gray-200 group">
    <!-- Icon -->
    <div class="w-14 h-14 bg-gradient-to-br from-orange-100 to-amber-100 rounded-full flex items-center justify-center mb-6 group-hover:from-orange-200 group-hover:to-amber-200 transition text-2xl">
        {{ $icon }}
    </div>

    <!-- Title -->
    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-orange-600 transition">
        {{ $title }}
    </h3>

    <!-- Description -->
    <p class="text-gray-600 leading-relaxed">
        {{ $description }}
    </p>
</div>