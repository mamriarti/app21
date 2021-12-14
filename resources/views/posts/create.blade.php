<x-layout>
    <section class="px-6 max-w-md mx-auto">
        <h1 class="text-lg font-bold mb-4">
            Опубликовать новый Пост
        </h1>
        <x-panel>

                <form method="POST" action="/admin/posts" enctype="multipart/form-data">
                    @csrf

                 <x-form.input name="title" postname="title" fieldname="Название статьи"  required/>


                    <x-form.input name="slug" postname="slug" fieldname="название в адресной строке"  required/>

                    <x-form.input name="thumbnail" type="file" fieldname="Картинка для статьи" />

                    <x-form.input name="alt" fieldname="Описание добавляемой картинки"/>

                   <x-form.textarea name="excerpt" fieldname="Краткое описание"  required/>

                    <x-form.textarea name="body" fieldname="Текст Статьи"  required />




                    <x-form.field>
                        <x-form.label name="category"/>

                        <select name="category_id" id="category_id" required>
                            @foreach (\App\Models\Category::all() as $category)
                                <option
                                    value="{{ $category->id }}"
                                    {{ old('category_id') == $category->id ? 'selected' : '' }}
                                >{{ ucwords($category->name) }}</option>
                            @endforeach
                        </select>

                        <x-form.error name="category"/>
                    </x-form.field>

                    <x-form.button>
                        Publish
                    </x-form.button>


                </form>
        </x-panel>
    </section>


</x-layout>
