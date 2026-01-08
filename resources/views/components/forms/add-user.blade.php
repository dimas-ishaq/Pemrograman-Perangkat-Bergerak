<div id="add-user-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-xl max-h-full ">
        <div
            class="relative bg-neutral-light-section text-fg-light-body border border-default rounded-base shadow-sm p-4 md:p-6">
            <div class="flex items-center justify-between border-b border-default pb-4 md:pb-5">
                <h3 class="text-lg font-medium text-heading">
                    Add New User
                </h3>
                <button type="button"
                    class="cursor-pointer  bg-transparent  hover:text-heading rounded-base text-sm w-9 h-9 ms-auto inline-flex justify-center items-center"
                    data-modal-hide="add-user-modal">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18 17.94 6M18 18 6.06 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <form class="max-w-md mx-auto py-4 md:py-6" action="{{ route('users.store') }}" method="POST">
                @method('POST')
                @csrf
                <div class="mb-5">
                    <label for="name" class="block mb-2.5 text-sm font-medium text-heading">Name</label>
                    <input type="name" id="name"
                        class="bg-neutral-light-surface border  text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:"
                        placeholder="John Doe" required />
                </div>
                <div class="mb-5">
                    <label for="email" class="block mb-2.5 text-sm font-medium text-heading">Email</label>
                    <input type="email" id="email"
                        class="bg-neutral-light-surface border  text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:"
                        placeholder="name@mail.com" required />
                </div>
                <div class="mb-5">
                    <label for="password" class="block mb-2.5 text-sm font-medium text-heading">Password</label>
                    <input type="password" id="password"
                        class="bg-neutral-light-surface border  text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:"
                        placeholder="••••••••" required />
                </div>
                <div class="mb-5">
                    <label for="role" class="block mb-2.5 text-sm font-medium text-heading">Select role</label>
                    <select id="role"
                        class="bg-neutral-light-surface border  text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs">
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                </div>

                <div class="flex gap-4">
                    <button type="submit"
                        class="text-fg-light-body bg-brand-primary box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">Simpan</button>
                    <button data-modal-hide="add-user-modal" type="button"
                        class="cursor-pointer box-border border  -medium hover:text-heading focus:ring-4 focus:ring-neutral-tertiary shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">
                        Tidak</button>
                </div>

            </form>
        </div>


    </div>
</div>
