<x-app-layout>

    <div class="p-10">

        <p><a class="underline text-blue-700" href="{{ route('index') }}">Back to Index</a></p>

        <div class="border-2 border-red-400 w-[800px] h-[600px]">

            <x-splitter-v>
                <x-slot name="first">

                    <x-lorem-ipsum />

                </x-slot>
                <x-slot name="second">

                    <x-lorem-ipsum />

                </x-slot>
            </x-splitter-v>

        </div>

    </div>

</x-app-layout>
