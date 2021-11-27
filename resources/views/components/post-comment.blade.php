@props(['comment'])
    <x-panel>
        <form method="POST" action="#">
            @csrf

            <header class="flex items-center">
                <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}"
                     alt=""
                     width="40"
                     height="40"
                     class="rounded-full">

                <h2 class="ml-4">Want to participate?</h2>
            </header>

            <div class="mt-6">
                <textarea
                    name="body"
                    class="w-full text-sm focus:outline-none focus:ring"
                    rows="5"
                    placeholder="Quick, thing of something to say!"
                    required></textarea>

                @error('body')
                <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">
                <button type="submit"
                        class="bg-blue-500 text-white
                        uppercase font-semibold text-xs
                         py-2 px-10 rounded-2xl hover:bg-blue-600">
                Submit
                </button>
            </div>
        </form>
    </x-panel>







<article class="flex space-x-4">
        <div class="flex-shrink-0">
            <img src="https://i.pravatar.cc/60" alt="" width="60" height="60" class="rounded-xl">
        </div>

        <div>
            <header class="mb-4">
                <h3 class="font-bold">Jon Doe</h3>

                <p class="text-xs">
                    Posted
                    <time>6 месяцев назад</time>
                </p>
            </header>

            <p>
                Adipisci impedit cumque sed qui velit dolores.
                Minus sequi tempore dolorem ut exercitationem.
                Voluptate ducimus in et et. Quis molestias mollitia sequi sunt.
            </p>
        </div>
    </article>

