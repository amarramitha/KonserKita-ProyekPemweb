<a {{ $attributes }} aria-current="{{ request()->is('/') ? 'page' : false }}"
    class="{{ request()->is('/') ? 'bg-gray-100 text-black' : 'text-white bg-brand-desk  hover:bg-gray-100 hover:text-black ' }}
            px-10 py-2 text-sm font-medium text-white bg-brand-desk border border-gray-200 rounded-s-lg hover:bg-gray-100 hover:text-black focus:z-10 focus:ring-2 focus:ring-white focus:text-black">
    {{ $slot }}</a>
