<x-app-layout>

    <div class="p-10">
        <h1 class="text-2xl font-semibold mb-4">TailwindCSS/AlpineJS Laravel Splitter Component</h1>

        <p><a class="underline text-blue-700" href="{{ route('split-v') }}">Split Vertical</a></p>
        <p><a class="underline text-blue-700" href="{{ route('split-h') }}">Split Horizontal</a></p>
        <p><a class="underline text-blue-700" href="{{ route('nested') }}">Nested</a></p>
        <p><a class="underline text-blue-700" href="{{ route('fill-container') }}">Fill Container</a></p>


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
