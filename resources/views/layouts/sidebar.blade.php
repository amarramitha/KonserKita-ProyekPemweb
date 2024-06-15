<aside id="sidebar" class="fixed top-0 left-0 z-50 w-64 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-brand-purple dark:bg-gray-800" 
      tabindex="-1" aria-labelledby="sidebae">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-brand-purple dark:bg-gray-800">
       <ul class="space-y-2 font-medium">
         @can('admin')
         <li>
            <h5 id="sidebar" class=" px-2text-base font-semibold text-white uppercase dark:text-gray-400">Admin Menu</h5>
            <button type="button" data-drawer-hide="sidebar" aria-controls="sidebar" class="text-white bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 end-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" >
               <svg class="w-6 h-6 text-white hover:text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6"/>
                  </svg>                   
               <span class="sr-only">Close menu</span>
            </button>
         </li>
         <li>
               <a href="/admin/dashboard" class="flex rounded-lg items-center p-2 group {{ Request::is('admin/dashboard') ? 'bg-brand-ungu text-white' : 'text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                  <svg class="w-5 h-5 text-white transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                     <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                     <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                  </svg>
                  <span class="ms-3 text-white hover:text-black">Dashboard</span>
               </a>
         </li>
         <li>
               <a href="/admin/dashboard/users" class="flex rounded-lg items-center p-2 group {{ Request::is('admin/dashboard/users') ? 'bg-brand-ungu text-white' : 'text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                  <svg class="flex-shrink-0 w-5 h-5 text-white transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                     <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                  </svg>
                  <span class="flex-1 ms-3 text-white hover:text-black whitespace-nowrap ">User</span>
               </a>
         </li>
         <li>
            <a href="/admin/dashboard/konsers" class="flex rounded-lg items-center p-2 group {{ Request::is('admin/dashboard/konsers*') ? 'bg-brand-ungu text-white' : 'text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700' }}">
               <svg class="flex-shrink-0 w-5 h-5 text-white transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 4H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1Zm0 0-4 4m5 0H4m1 0 4-4m1 4 4-4m-4 7v6l4-3-4-3Z"/>
               </svg>
               <span class="flex-1 ms-3 text-white hover:text-black whitespace-nowrap">Konser</span>
            </a>
         </li>
         <hr>
         @endcan
         <li>
            <h5 id="sidebar" class=" px-2text-base font-semibold text-white uppercase dark:text-gray-400">KonserKita Menu</h5>
            <button type="button" data-drawer-hide="sidebar" aria-controls="sidebar" class="text-white bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 end-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" >
               <svg class="w-6 h-6 text-white hover:text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6"/>
                  </svg>                   
               <span class="sr-only">Close menu</span>
            </button>
         </li>
         <li>
            <a href="/" class="flex rounded-lg items-center p-2 group {{ Request::is('/') ? 'bg-brand-ungu text-white' : 'text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                  <svg class="w-5 h-5 text-white transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                     <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                     <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                  </svg>
                  <span class="ms-3 text-white hover:text-black">Dashboard</span>
            </a>
         </li>
         <li>
            <a href="/admin/dashboard/konsers" class="flex rounded-lg items-center p-2 group {{ Request::is('admin/dashboard/konsers*') ? 'bg-brand-ungu text-white' : 'text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                <svg class="flex-shrink-0 w-5 h-5 text-white transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 4H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1Zm0 0-4 4m5 0H4m1 0 4-4m1 4 4-4m-4 7v6l4-3-4-3Z"/>
                </svg>
                <span class="text-white hover:text-black flex-1 ms-3 whitespace-nowrap">Konser</span>
            </a>
         </li>
         <li>
            <a href="/admin/dashboard/tickets" class="flex rounded-lg items-center p-2 group {{ Request::is('admin/dashboard/tickets') ? 'bg-brand-ungu text-white' : 'text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700' }}">
               <svg class="flex-shrink-0 w-5 h-5 text-white transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                   <path fill-rule="evenodd" d="M5.617 2.076a1 1 0 0 1 1.09.217L8 3.586l1.293-1.293a1 1 0 0 1 1.414 0L12 3.586l1.293-1.293a1 1 0 0 1 1.414 0L16 3.586l1.293-1.293A1 1 0 0 1 19 3v18a1 1 0 0 1-1.707.707L16 20.414l-1.293 1.293a1 1 0 0 1-1.414 0L12 20.414l-1.293 1.293a1 1 0 0 1-1.414 0L8 20.414l-1.293 1.293A1 1 0 0 1 5 21V3a1 1 0 0 1 .617-.924ZM9 7a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2H9Zm0 4a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2H9Zm0 4a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2H9Z" clip-rule="evenodd"/>
                 </svg>
                <span class="text-white hover:text-black flex-1 ms-3 whitespace-nowrap">Tiket</span>
            </a>
         </li>
         <li>
            <a href="/transaksi" class="flex rounded-lg items-center p-2 group {{ Request::is('admin/dashboard/talents') ? 'bg-brand-ungu text-white' : 'text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700' }}">
               <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd" d="M7 6a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2h-2v-4a3 3 0 0 0-3-3H7V6Z" clip-rule="evenodd"/>
                  <path fill-rule="evenodd" d="M2 11a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-7Zm7.5 1a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5Z" clip-rule="evenodd"/>
                  <path d="M10.5 14.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0Z"/>
               </svg>
                
                <span class="text-white hover:text-black flex-1 ms-3 whitespace-nowrap">Transaksi</span>
            </a>
         </li>

       </ul>
    </div>
</aside>
