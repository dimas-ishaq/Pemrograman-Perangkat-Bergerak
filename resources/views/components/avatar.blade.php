 @props(['profile'=>null,'name'])

 @if ($profile)
     <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start"
         class="w-10 h-10 rounded-full cursor-pointer" src="/docs/images/people/profile-picture-5.jpg" alt="User dropdown">
     @else
     <div type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start"
         class="relative inline-flex items-center justify-center w-10 h-10 overflow-hidden bg-gray-400 dark:bg-gray-300 rounded-full">
         <span class="font-medium ">{{ strtoupper(substr(auth()->user()->name, 0, 1)) }}</span>
     </div>
 @endif

 <!-- Dropdown menu -->
 <div id="userDropdown"
     class="z-10 hidden bg-white dark:bg-gray-900 dark:text-white border  rounded-md shadow-lg w-44">
     <div class="px-4 py-3 border-b  text-sm text-heading">
         <div class="font-medium">{{ auth()->user()->name }}</div>
         <div class="truncate">{{ auth()->user()->email }}</div>
     </div>
     <ul class="p-2 text-sm  font-medium" aria-labelledby="avatarButton">
         <li>
             <a href="#"
                 class="block w-full p-2 -medium hover:text-heading rounded-md">Dashboard</a>
         </li>
         <li>
             <a href="#"
                 class="block w-full p-2 -medium hover:text-heading rounded-md">Settings</a>
         </li>
         <li>
             <a href="#"
                 class="block w-full p-2 -medium hover:text-heading rounded-md">Earnings</a>
         </li>
         <li>
             <a href="#" class="block w-full p-2 -medium text-fg-danger rounded-md">Sign
                 out</a>
         </li>
     </ul>
 </div>
