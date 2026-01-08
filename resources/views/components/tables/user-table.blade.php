<div class="relative overflow-x-auto  shadow-xs rounded-base border border-default">
    <table class="w-full text-sm text-left rtl:text-right ">
        <thead class="text-sm  bg-neutral-secondary-soft border-b rounded-base border-default">
            <tr>
                <th scope="col" class="px-6 py-3 font-medium">
                    Name
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                    Email
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                    Role
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                    Created At
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr class="bg-neutral-primary border-b border-default">
                    <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                        {{ $user->name }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $user->email }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $user->role }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $user->created_at }}
                    </td>
                    <td>
                        <div>
                            <x-dropdown id="menu-user-{{ $user->id }}">
                                <ul class="p-2 text-sm  font-medium">
                                    <li>
                                        <button class="cursor-pointer block px-4 py-2 hover:text-heading rounded-base"
                                            @click="activeItem={id: '{{ $user->id }}', name: '{{ $user->name }}', email: '{{ $user->email }}', role: '{{ $user->role }}'}; isOpenDetail=true">Detail</button>
                                    </li>
                                    <li>
                                        <button class="cursor-pointer block px-4 py-2 hover:text-heading rounded-base"
                                            @click="activeItem={id: '{{ $user->id }}', name: '{{ $user->name }}', email: '{{ $user->email }}', role: '{{ $user->role }}'}; isOpenEdit=true">Edit</button>
                                    </li>

                                    <li>
                                        <button class="cursor-pointer block px-4 py-2 hover:text-heading rounded-base"
                                            @click="activeItem={id: '{{ $user->id }}', name: '{{ $user->name }}', email: '{{ $user->email }}', role: '{{ $user->role }}'}; isOpenBan=true">Ban</button>
                                    </li>
                                    <li>
                                        <button class="cursor-pointer block px-4 py-2 hover:text-heading rounded-base"
                                            @click="activeItem={id: '{{ $user->id }}', name: '{{ $user->name }}', email: '{{ $user->email }}', role: '{{ $user->role }}'}; isOpenDelete=true">Delete</button>

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
