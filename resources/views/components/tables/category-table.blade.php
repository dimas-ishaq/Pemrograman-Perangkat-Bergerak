<div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Category Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Description
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $category->name }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $category->description }}
                        </td>
                        <td class="px-6 py-4">
                            <div>
                                <x-dropdown id="menu-category-{{ $category->id }}">
                                    <ul class="p-2 text-sm text-body font-medium">
                                        <li>
                                            <x-forms.edit-product id="{{ $category->id }}" modal="edit-{{ $category->id }}"
                                                name="{{ $category->name }}" description="{{ $category->description }}" />
                                        </li>

                                        <li>
                                            <x-forms.delete-product id="{{ $category->id }}" modal="delete-{{ $category->id }}"
                                                name="{{ $category->name }}" />
                                        </li>
                                    </ul>
                                </x-dropdown>

                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
