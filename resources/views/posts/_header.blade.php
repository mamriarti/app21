<header class="max-w-xl mx-auto mt-20 text-center">
            <h1 class="text-4xl">
                Latest <span class="text-blue-500">Laravel From Scratch</span> News
            </h1>


            

            <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-4">

                <!--  Category -->

                <div class="relative flex lg:inline-flex  bg-gray-100 rounded-xl">

                    <x-dropdown>
    <x-slot name="trigger">
        <button class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left flex lg:inline-flex">
            {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}

            <x-icon name="down-arrow" class="absolute pointer-events-none" style="right: 12px;"/>
        </button>
    </x-slot>

    <x-dropdown-item
        href="/?{{ http_build_query(request()->except('category', 'page')) }}"
        :active="request()->routeIs('home') && is_null(request()->getQueryString())"
    >
        All
    </x-dropdown-item>

    @foreach ($categories as $category)
        <x-dropdown-item
            href="/?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}"
            :active='request()->fullUrlIs("*?category={$category->slug}*")'
        >
            {{ ucwords($category->name) }}
        </x-dropdown-item>
    @endforeach
</x-dropdown>

                     </div>

                     </div>
                </div>
 
                <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">

                    <form method="GET" action="#">
                        <input type="text" name="search"
                               placeholder="Find something"
                               class="bg-transparent placeholder-black font-semibold text-sm"
                               value="{{ request('search') }}">
                    </form>
                </div>
            </div>
        </header>