<div class="flex flex-1 flex-col overflow-hidden h-full"
     x-data="{
            containerHeight: 0,
            height1: 0,
            height2: '100%',
            dragging: false,
            clientYS: 0,
            min: 30,
            startDrag(event) {
                this.dragging = true;
                this.clientYS = event.clientY - this.height1;
            },
            onDrag(event) {
                if (this.dragging) {
                    const newHeight = event.clientY - this.clientYS;
                    if (newHeight < this.min) {
                        this.height1 = this.min;
                    } else if (newHeight > this.containerHeight - this.min) {
                        this.height1 = this.containerHeight - this.min;
                    } else {
                        this.height1 = newHeight;
                    }
                    this.height2 = this.containerHeight - this.height1 - this.$refs.handle.clientHeight;
                }
            },
            stopDrag() {
                this.dragging = false;
                this.clientYS = 0;
            },
            resize() {

                if (this.containerHeight === 0 || this.containerHeight != this.$el.clientHeight) {
                    // Onload
                    this.height1 = this.$el.clientHeight / 2; // Default height when loaded
                    this.height2 = this.$el.clientHeight - this.height1 - this.$refs.handle.clientHeight;
                }
                this.containerHeight = this.$el.clientHeight;
                if (this.height1 === 0 || this.height1 > this.containerHeight - this.min) {
                    this.height1 = this.containerHeight - this.min;
                    this.height2 = this.containerHeight - this.height1;
                }
            },
            selectStart(e) {
                e.preventDefault();
            }
        }"
     x-resize="resize"
     x-init="resize"
     x-on:mousemove="onDrag"
     x-on:mouseup="stopDrag"
     x-on:selectstart="selectStart"
>

    <div x-ref="first" class="overflow-y-auto flex flex-col" :style="'height: ' + height1 + 'px'">
        {{ $first }}
    </div>
    <div x-ref="handle" x-on:mousedown="startDrag"
         class="relative h-0.5 bg-gray-400 w-full text-center cursor-row-resize z-50">
        <div class="absolute bg-gray-400 left-1/2 -ms-4 -top-1.5 px-1 py-[5px] flex flex-col rounded w-5">
            <div class="border-y border-gray-200 h-1"></div>
        </div>
    </div>
    <div x-ref="second" class="overflow-y-auto flex flex-col" :style="'height: ' + height2 + 'px'">
        {{ $second }}
    </div>

</div>