<x-layouts.admin>
    <div x-data="{
        isOpenDetail: false,
        isOpenEdit: false,
        isOpenBan: false,
        isOpenDelete: false,
        activeItem: { id: '', name: '', email: '', role: '' },
    }" class="w-full min-h-screen">
        <div class="flex flex-col gap-6">

            {{-- Breadcrumb navigation --}}
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <a href="{{ route('admin.dashboard') }}"
                            class="inline-flex items-center text-sm font-medium  hover:text-fg-brand">
                            <svg class="w-4 h-4 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5" />
                            </svg>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center space-x-1.5">
                            <svg class="w-3.5 h-3.5 rtl:rotate-180 " aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m9 5 7 7-7 7" />
                            </svg>
                            <a href="{{ route('users.index') }}"
                                class="inline-flex items-center text-sm font-medium  hover:text-fg-brand">Users</a>
                        </div>
                    </li>
                </ol>
            </nav>

            {{-- Page Title --}}
            <div class="flex items-center justify-between">
                <div>
                    <h6 class="text-2xl font-bold text-heading">Management Users</h6>
                    <div class="mt-1 text-sm ">Manage your application's users here.</div>
                </div>
                <div>
                    <button data-modal-target="add-user-modal" data-modal-toggle="add-user-modal"
                        class="cursor-pointer text-fg-light-body bg-brand-primary rounded-sm shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none"
                        type="button">
                        Add New User
                    </button>
                </div>

            </div>


            {{-- User Table --}}
            <x-tables.user-table :users="$users" />

        </div>
        @include('admin.users.detail')
        @include('admin.users.edit')
        {{-- @include('admin.users.ban')
        @include('admin.users.delete') --}}
    </div>

    @push('modals')
        <x-forms.add-user />
    @endpush
</x-layouts.admin>
