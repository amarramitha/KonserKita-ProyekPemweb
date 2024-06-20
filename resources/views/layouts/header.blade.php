<nav class="fixed top-0 z-40 w-full bg-brand-purple border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between">
        <div class="flex items-center justify-start rtl:justify-end">
          <button type="button" data-drawer-target="sidebar" data-drawer-show="sidebar" aria-controls="sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
              <span class="sr-only">Open sidebar</span>
              <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                 <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
              </svg>
           </button>
          <a href="/" class="flex ms-2 md:me-24">
            <img src="/storage/images/logo.png" class="h-8 me-3" alt="FlowBite Logo" />
            <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap text-white">KonserKita</span>
          </a>
        </div>
        <div class="flex items-center">

          @if (Auth::check())
          <div class="flex items-center ms-3">
              <div class="relative inline-flex items-center justify-center w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                <button type="button" class="" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                  <span class="sr-only">Open user menu</span>
                  <div class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                  @if (Auth::user()->image == null)
                    <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                  @elseif (Auth::user()->google_id != null && filter_var(Auth::user()->image, FILTER_VALIDATE_URL))
                    <img src="{{ asset(Auth::user()->image) }}" class="absolute w-10 h-10 text-gray-400 cursor-pointer filter blur-sm hover:blur-none">
                  @else
                    <img src="{{ asset('storage/' . Auth::user()->image) }}" class="absolute w-10 h-10 text-gray-400 cursor-pointer filter blur-sm hover:blur-none">
                  @endif
                  </div>
                </button>
              </div>
              <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
                <div class="px-4 py-3" role="none">
                  <p class="text-sm text-gray-900 dark:text-white" role="none">
                    {{ Auth::user()->name }}
                  </p>
                  <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                    {{ Auth::user()->email }}
                  </p>
                </div>
                <ul class="py-1" role="none">
                  <li>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Dashboard</a>
                  </li>
                  <li>
                    <a href="/editprofil/{{ Auth::user()->id }}/edit" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Edit Profil</a>
                  </li>
                  <li>
                    <form action="/logout" method="post" class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-300 dark:text-gray-300 dark:hover:bg-red-600 dark:hover:text-white">
                        @csrf
                    <button type="submit">
                        Log out
                    </button>
                    </form>
                  </li>
                </ul>
              </div>
            </div>
          @else
          <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-0">
            <div class="flex items-center space-x-6 rtl:space-x-reverse">
                <a href="/register" class="text-lg  text-white dark:text-green-100 hover:underline hover:text-purple-400">Register</a>
                <a href="/login" class="text-lg text-white dark:text-green-100 hover:underline hover:text-purple-400">Login</a>
            </div>
          </div>
          @endif
          </div>
      </div>
    </div>
</nav>
