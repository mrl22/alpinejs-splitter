<x-app-layout>

    <div class="p-10">
        <h1 class="text-3xl font-bold">TailwindCSS/AlpineJS Laravel Splitter Component</h1>


        <h1 class="text-2xl font-semibold mt-10 mb-4">Examples</h1>
        <p><a class="underline text-blue-700" href="{{ route('split-v') }}">Split Vertical</a> - <a target="_blank" class="underline text-gray-500" href="https://github.com/mrl22/alpinejs-splitter/blob/main/resources/views/split-v.blade.php">/resources/views/split-v.blade.php</a></p>
        <p><a class="underline text-blue-700" href="{{ route('split-h') }}">Split Horizontal</a> - <a target="_blank" class="underline text-gray-500" href="https://github.com/mrl22/alpinejs-splitter/blob/main/resources/views/split-h.blade.php">/resources/views/split-h.blade.php</a></p>
        <p><a class="underline text-blue-700" href="{{ route('nested') }}">Nested</a> - <a target="_blank" class="underline text-gray-500" href="https://github.com/mrl22/alpinejs-splitter/blob/main/resources/views/nested.blade.php">/resources/views/nested.blade.php</a></p>
        <p><a class="underline text-blue-700" href="{{ route('fill-container') }}">Fill Container</a> - <a target="_blank" class="underline text-gray-500" href="https://github.com/mrl22/alpinejs-splitter/blob/main/resources/views/fill-container.blade.php">/resources/views/fill-container.blade.php</a></p>


        <h1 class="text-2xl font-semibold mt-10 mb-4">Components</h1>

        <p>Splitter Horizontal Component - <a target="_blank" class="underline text-gray-500" href="https://github.com/mrl22/alpinejs-splitter/blob/main/resources/views/components/splitter-h.blade.php">/resources/views/components/splitter-h.blade.php</a></p>
        <p>Splitter Vertical Component - <a target="_blank" class="underline text-gray-500" href="https://github.com/mrl22/alpinejs-splitter/blob/main/resources/views/components/splitter-v.blade.php">/resources/views/components/splitter-v.blade.php</a></p>

        <div class="mt-10">
            <h1 class="text-2xl font-semibold mb-4">Known Issues</h1>
            <ul class="list-disc ms-5 mb-6">
                <li>In split vertical, when dragging to the left, first pane view slides to the right.</li>
                <li>In split horizontal, when dragging to the up, first pane view slides to the bottom.</li>
                <li>When dragging, objects inside the panes are being selected.</li>
                <li>When dragging, the mousedown event sometimes triggers the sidebar action and slides the content.</li>
            </ul>

            <p>If you see any other issues, please share or try to fix them.</p>
        </div>
    </div>

</x-app-layout>
