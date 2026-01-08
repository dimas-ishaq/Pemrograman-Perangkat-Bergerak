<!-- Main modal -->
<div x-show="isOpenEdit" x-cloak tabindex="-1" aria-hidden="true"
    class="flex overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div
            class="relative bg-neutral-light-section text-fg-light-body border border-default rounded-base shadow-sm p-4 md:p-6">
            <!-- Modal header -->
            <div class="flex items-center justify-between border-b border-default pb-4 md:pb-5">
                <h3 class="text-lg font-medium text-heading">
                    Edit User
                </h3>
                <button @click="isOpenEdit = false" type="button"
                    class=" bg-transparent  hover:text-heading rounded-base text-sm w-9 h-9 ms-auto inline-flex justify-center items-center">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18 17.94 6M18 18 6.06 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form :action="'{{ route('users.update', 'id_user') }}'.replace('id_user', activeItem.id)" method="POST">
                @method('PUT')
                @csrf
                <div class="grid gap-4 grid-cols-1 py-4 md:py-6">
                    <div class="col-span-2">
                        <label for="name" class="block mb-2.5 text-sm font-medium text-heading">Name</label>
                        <input type="text" name="name" id="name"
                            class=" border  text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs "
                            placeholder="John Doe" x-model="activeItem.name">
                    </div>
                    <div class="col-span-2 ">
                        <label for="email" class="block mb-2.5 text-sm font-medium text-heading">Email</label>
                        <input type="email" name="email" id="email"
                            class=" border  text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs "
                            placeholder="john-doe@example.com" x-model="activeItem.email">
                    </div>
                    <div class="col-span-2 ">
                        <label for="role" class="block mb-2.5 text-sm font-medium text-heading">Role</label>
                        <select id="role" name="role"
                            class="block w-full  border  text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-3 py-2.5 shadow-xs "
                            x-model="activeItem.role">
                            <option selected="">Select role</option>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </div>

                </div>
                <div class="flex items-center space-x-4 border-t border-default pt-4 md:pt-6">
                    <button type="submit"
                        class="inline-flex bg-brand-primary-strong text-fg-light-body items-center    box-border border border-transparent focus:ring-4  shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">
                        <svg class="w-4 h-4 me-1.5 -ms-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 12h14m-7 7V5" />
                        </svg>
                        Update
                    </button>
                    <button type="button" @click="isOpenEdit = false"
                        class="box-border border hover:text-heading focus:ring-4 shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>
