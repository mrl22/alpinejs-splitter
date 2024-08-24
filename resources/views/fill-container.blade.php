<x-app-layout>

        <div class="border-2 border-red-400 w-screen h-screen">

            <x-splitter-v>
                <x-slot name="first">

                    <x-splitter-h>
                        <x-slot name="first">

                            <x-lorem-ipsum />

                        </x-slot>
                        <x-slot name="second">

                            <x-lorem-ipsum />

                        </x-slot>
                    </x-splitter-h>

                </x-slot>
                <x-slot name="second">

                    <x-lorem-ipsum />

                </x-slot>
            </x-splitter-v>

        </div>



</x-app-layout>
