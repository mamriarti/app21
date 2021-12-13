<x-layout>
    <section class="px-6 max-w-md mx-auto">
        <h1 class="text-lg font-bold mb-4">
            Опубликовать новый Пост
        </h1>
        <x-panel>

                <form method="POST" action="/admin/posts" enctype="multipart/form-data">
                    @csrf

                 <x-form.input name="title" />


                    <x-form.input name="slug"/>

                    <x-form.input name="thumbnail" type="file" />



                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                               for="alt">
                            Описание добавляемой картинки
                        </label>

                        <input class="border border-gray-400 p-2 w-full"
                               type="text"
                               name="alt"
                               id="alt"
                               value="{{ old('alt') }}"
                               required>

                        @error('alt')
                        <p class="text-red-500 text-xs mt-2">
                            {{ $message }}
                        </p>
                        @enderror

                    </div>

                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                               for="title">
                            Excerpt
                        </label>

                        <textarea class="border border-gray-400 p-2 w-full"
                               name="excerpt"
                               id="excerpt"
                               value="{{ old('excerpt') }}"
                                  required></textarea>

                        @error('excerpt')
                        <p class="text-red-500 text-xs mt-2">
                            {{ $message }}
                        </p>
                        @enderror

                    </div>

                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                               for="body">
                            Body
                        </label>

                        <textarea class="border border-gray-400 p-2 w-full"
                               name="body"
                               id="body"
                                  required>
                            {{ old('body') }}
                        </textarea>


                        @error('body')
                        <p class="text-red-500 text-xs mt-2">
                            {{ $message }}
                        </p>
                        @enderror

                    </div>


                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                               for="category_id">
                            Category
                        </label>

                        <select name="category_id"
                            id="category_id">

                                @php
                                    $categories = \App\Models\Category::all();
                                @endphp

                                @foreach($categories as $category)

                                    <option value="{{ $category->id }}"
                                        {{ old('category_id') == $category->id ? 'selected' : '' }}
                                    >
                                        {{ ucwords($category->name) }}
                                    </option>

                                @endforeach
                        </select>



                        @error('category_id')
                        <p class="text-red-500 text-xs mt-2">
                            {{ $message }}
                        </p>
                        @enderror

                    </div>

                    <x-submit-button>
                        Publish
                    </x-submit-button>


                </form>
        </x-panel>
    </section>


</x-layout>
