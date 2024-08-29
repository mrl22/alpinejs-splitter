<x-app-layout>

    <div class="p-10">

        <p><a class="underline text-blue-700" href="{{ route('index') }}">Back to Index</a></p>

        <div class="border-2 border-red-400 w-[800px] h-[600px]">

            <x-splitter-v>
                <x-slot name="first" class="w-60">

                    <x-splitter-h>
                        <x-slot name="first" class="bg-red-100 h-40">

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

    </div>


</x-app-layout>
