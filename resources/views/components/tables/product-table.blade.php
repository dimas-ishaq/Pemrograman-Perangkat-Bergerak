<div class="w-full relative overflow-x-auto  shadow-xs rounded-base border border-default">
    <table class="w-full text-sm text-left rtl:text-right ">
        <thead class="text-sm  bg-neutral-secondary-medium border-b ">
            <tr>
                <th scope="col" class="px-6 py-3 font-medium">
                    Product Name
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                    Stock
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                    Price
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                    Category
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr class=" border-b border-default ">
                    <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                        {{ $product->name }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $product->stock }}
                    </td>
                    <td class="px-6 py-4">
                        Rp. {{ (int) $product->price }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $product->category->name }}
                    </td>
                    <td class="px-6 py-4 ">
                        <x-dropdown id="{{ $product->id }}" la>

                        </x-dropdown>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>
{{ $products->links() }}
