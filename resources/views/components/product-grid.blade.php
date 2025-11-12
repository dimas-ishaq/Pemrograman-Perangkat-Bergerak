<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
    @foreach($products as $product)
        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" 
                    class="w-full h-48 object-cover rounded-md mb-4">
                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                    {{ $product->name }}
                </h5>
            </a>
            <p class="mb-3 text-gray-700 dark:text-gray-400 text-sm line-clamp-3">
                {{ Str::limit($product->description, 100) }}
            </p>
            <p class="mb-4 font-semibold text-gray-900 dark:text-gray-100">
                Rp {{ number_format($product->price, 0, ',', '.') }}
            </p>
            <a href="#"
                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Lihat Detail
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
        </div>
    @endforeach
</div>
