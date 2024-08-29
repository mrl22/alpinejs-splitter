<x-app-layout>

        <div class="border-2 border-red-400 w-screen h-screen">

            <x-splitter-v>
                <x-slot name="first">

                    <x-splitter-h>
                        <x-slot name="first" class="bg-red-100">

                            <x-lorem-ipsum number="1" />

                        </x-slot>
                        <x-slot name="second" class="bg-blue-100">

                            <x-lorem-ipsum number="2" />

                        </x-slot>
                    </x-splitter-h>

                </x-slot>
                <x-slot name="second" class="bg-green-100">

                    <x-lorem-ipsum number="3" />

                </x-slot>
            </x-splitter-v>

        </div>



</x-app-layout>
