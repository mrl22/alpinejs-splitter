<div class="flex flex-1 flex-row overflow-hidden h-full"
     x-data="{
            containerWidth: 0,
            width1: 0,
            width2: '100%',
            dragging: false,
            clientXS: 0,
            min: 30,
            startDrag(event) {
                this.dragging = true;
                this.clientXS = event.clientX - this.width1;
            },
            onDrag(event) {
                if (this.dragging) {
                    const newWidth = event.clientX - this.clientXS;
                    if (newWidth < this.min) {
                        this.width1 = this.min;
                    } else if (newWidth > this.containerWidth - this.min) {
                        this.width1 = this.containerWidth - this.min;
                    } else {
                        this.width1 = newWidth;
                    }
                    this.width2 = this.containerWidth - this.width1 - this.$refs.handle.clientWidth;
                }
            },
            stopDrag() {
                this.dragging = false;
                this.clientXS = 0;
            },
            resize() {
                if (this.containerWidth === 0 || this.containerWidth != this.$el.clientWidth) {
                    // Onload
                    this.width1 = this.$el.clientWidth / 2; // Default Width when loaded
                    this.width2 = this.$el.clientWidth - this.width1 - this.$refs.handle.clientWidth;
                }
                this.containerWidth = this.$el.clientWidth;
                if (this.width1 === 0 || this.width1 > this.containerWidth - this.min) {
                    this.width1 = this.containerWidth - this.min;
                    this.width2 = this.containerWidth - this.width1;
                }
            }
        }"
     x-resize="resize()"
     x-init="resize()"
     x-on:mousemove="onDrag"
     x-on:mouseup="stopDrag"
>

    <div x-ref="first" class="overflow-auto flex flex-col" :style="'width: ' + width1 + 'px'">
        {{ $first }}
    </div>
    <div x-ref="handle" x-on:mousedown="startDrag"
         class="relative w-0.5 bg-gray-400 h-full text-center cursor-col-resize z-50">
        <div class="absolute bg-gray-400 top-1/2 -ms-1.5 -mt-2.5 px-[5px] py-1 rounded h-5">
            <div class="h-full border-x border-gray-200 w-1"></div>
        </div>
    </div>

    <div x-ref="second" class="overflow-auto flex flex-col" :style="'width: ' + width2 + 'px'">
        {{ $second }}
    </div>

</div>