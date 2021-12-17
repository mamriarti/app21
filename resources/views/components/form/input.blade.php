@props(['name', 'fieldname' => ''])

 <x-form.field>
       <x-form.label name="{{ $name }}" fieldname="{{ $fieldname }}" />

        <input class="border border-gray-200 p-2 w-full rounded"
               name="{{ $name }}"
               id="{{ $name }}"
               value="{{ old($name) }}"
               {{ $attributes }}
        >

     <x-form.error name="{{ $name }}"/>

</x-form.field>
