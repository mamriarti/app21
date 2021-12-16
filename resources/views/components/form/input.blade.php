@props(['name', 'fieldname' => '', 'type' => 'text', ])

 <x-form.field>
       <x-form.label name="{{ $name }}" fieldname="{{ $fieldname }}" />

        <input class="border border-gray-200 p-2 w-full rounded"
               type="{{ $type }}"
               name="{{ $name }}"
               id="{{ $name }}"
               value="{{ old($name) }}"
        >

     <x-form.error name="{{ $name }}"/>

</x-form.field>
