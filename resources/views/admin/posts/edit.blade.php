<x-layout>


    <x-setting :heading="'Изменить Статью: '. $post->title">
        <form method="POST" action="/admin/posts" enctype="multipart/form-data">
            @csrf

            <x-form.input name="title" postname="title" fieldname="Название статьи" :value="old('title', $post->title)" required/>


            <x-form.input name="slug" postname="slug" fieldname="название в адресной строке" :value="old('slug', $post->slug)" required/>

            <div class="flex mt-6">
                <div class="flex-1">
                    <x-form.input name="thumbnail" type="file" fieldname="Картинка для статьи" :value="old('thumbnail', $post->thumbnail)"/>
                </div>
                    <img src="{{ asset('/storage/' . $post->thumbnail )}}"
                     alt="{{ $post->alt }}"
                     class="rounded-xl ml-6"
                    width="150">
            </div>






            <x-form.input name="alt" fieldname="Описание добавляемой картинки" :value="old('alt', $post->alt)"/>

            <x-form.textarea name="excerpt" fieldname="Краткое описание">
                {{ old('excerpt', $post->excerpt) }}
            </x-form.textarea>

            <x-form.textarea name="body" fieldname="Текст Статьи">
                {{ old('body', $post->body) }}
            </x-form.textarea>






            <x-form.field>
                <x-form.label name="category" fieldname="Категории" />

                <select name="category_id" id="category_id" required>
                    @foreach (\App\Models\Category::all() as $category)
                        <option
                            value="{{ $category->id }}"
                            {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}
                        >{{ ucwords($category->name) }}</option>
                    @endforeach
                </select>

                <x-form.error name="category"/>
            </x-form.field>

            <x-form.button>
                Update
            </x-form.button>


        </form>
    </x-setting>




</x-layout>
