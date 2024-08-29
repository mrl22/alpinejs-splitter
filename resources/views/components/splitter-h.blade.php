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

    <div x-ref="first" {{ $first->attributes->class(['overflow-y-auto']) }} :style="'height: ' + height1 + 'px'">
        {{ $first }}
    </div>
    <div x-ref="handle" x-on:mousedown="startDrag"
         class="relative h-0.5 bg-gray-400 w-full text-center cursor-row-resize z-50">
        <div class="absolute -mt-[6px] w-full justify-center flex flex-row">
            <div class="z-10 flex h-4 w-3 items-center justify-center rounded-sm bg-gray-400 text-white rotate-90"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-2.5 w-2.5"><path d="M5.5 4.625C6.12132 4.625 6.625 4.12132 6.625 3.5C6.625 2.87868 6.12132 2.375 5.5 2.375C4.87868 2.375 4.375 2.87868 4.375 3.5C4.375 4.12132 4.87868 4.625 5.5 4.625ZM9.5 4.625C10.1213 4.625 10.625 4.12132 10.625 3.5C10.625 2.87868 10.1213 2.375 9.5 2.375C8.87868 2.375 8.375 2.87868 8.375 3.5C8.375 4.12132 8.87868 4.625 9.5 4.625ZM10.625 7.5C10.625 8.12132 10.1213 8.625 9.5 8.625C8.87868 8.625 8.375 8.12132 8.375 7.5C8.375 6.87868 8.87868 6.375 9.5 6.375C10.1213 6.375 10.625 6.87868 10.625 7.5ZM5.5 8.625C6.12132 8.625 6.625 8.12132 6.625 7.5C6.625 6.87868 6.12132 6.375 5.5 6.375C4.87868 6.375 4.375 6.87868 4.375 7.5C4.375 8.12132 4.87868 8.625 5.5 8.625ZM10.625 11.5C10.625 12.1213 10.1213 12.625 9.5 12.625C8.87868 12.625 8.375 12.1213 8.375 11.5C8.375 10.8787 8.87868 10.375 9.5 10.375C10.1213 10.375 10.625 10.8787 10.625 11.5ZM5.5 12.625C6.12132 12.625 6.625 12.1213 6.625 11.5C6.625 10.8787 6.12132 10.375 5.5 10.375C4.87868 10.375 4.375 10.8787 4.375 11.5C4.375 12.1213 4.87868 12.625 5.5 12.625Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg></div>
        </div>
    </div>
    <div x-ref="second" {{ $second->attributes->class(['overflow-y-auto']) }} :style="'height: ' + height2 + 'px'">
        {{ $second }}
    </div>

</div>