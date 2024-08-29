<div class="flex flex-1 flex-row overflow-hidden h-full"
     x-data="{
            containerWidth: 0,
            width: 0,
            dragging: false,
            min: 5,
            startDrag(event) {
                this.dragging = true;
            },
            onDrag(event) {
                if (this.dragging) {
                    const rect = this.$el.getBoundingClientRect();
                    const newWidth = this.pxToPerc(event.clientX - rect.left);

                    if (newWidth < this.min) {
                        this.width = this.min;
                    } else if (newWidth > this.pxToPerc(this.containerWidth) - this.min) {
                        this.width = this.pxToPerc(this.containerWidth) - this.min;
                    } else {
                        this.width = newWidth;
                    }
                }
            },
            stopDrag() {
                this.dragging = false;
            },
            resize() {
                this.containerWidth = this.$el.clientWidth;
                if (this.$refs.first.offsetWidth === this.containerWidth) {
                    this.width = this.pxToPerc(this.containerWidth / 2);
                } else if (this.width === 0) {
                    this.width = this.pxToPerc(this.$refs.first.clientWidth);
                }
            },
            selectStart(e) {
                e.preventDefault();
            },
            pxToPerc(px) {
                return (px / this.containerWidth) * 100;
            },
            boundaries(perc) {
                if (perc < this.min) {
                    return this.min;
                } else if (perc > (100 - this.min)) {
                    return 100 - this.min;
                }
                return perc;
            }
        }"
     x-resize="resize()"
     x-init="resize()"
     x-on:mousemove="onDrag"
     x-on:mouseup.document="stopDrag"
     x-on:selectstart="selectStart"
>

    <div x-ref="first" {{ $first->attributes->class(['overflow-y-auto shrink-0 max-w-full']) }} :style="'width: ' + width + '%'">
        {{ $first }}
    </div>
    <div x-ref="handle" x-on:mousedown="startDrag"
         class="relative w-0.5 shrink-0 bg-gray-400 h-full text-center cursor-col-resize z-50">
        <div class="absolute -ms-[5px] h-full justify-center flex flex-col">
            <div class="z-10 flex h-4 w-3 items-center justify-center rounded-sm bg-gray-400 text-white"><svg width="15" width="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-2.5 w-2.5"><path d="M5.5 4.625C6.12132 4.625 6.625 4.12132 6.625 3.5C6.625 2.87868 6.12132 2.375 5.5 2.375C4.87868 2.375 4.375 2.87868 4.375 3.5C4.375 4.12132 4.87868 4.625 5.5 4.625ZM9.5 4.625C10.1213 4.625 10.625 4.12132 10.625 3.5C10.625 2.87868 10.1213 2.375 9.5 2.375C8.87868 2.375 8.375 2.87868 8.375 3.5C8.375 4.12132 8.87868 4.625 9.5 4.625ZM10.625 7.5C10.625 8.12132 10.1213 8.625 9.5 8.625C8.87868 8.625 8.375 8.12132 8.375 7.5C8.375 6.87868 8.87868 6.375 9.5 6.375C10.1213 6.375 10.625 6.87868 10.625 7.5ZM5.5 8.625C6.12132 8.625 6.625 8.12132 6.625 7.5C6.625 6.87868 6.12132 6.375 5.5 6.375C4.87868 6.375 4.375 6.87868 4.375 7.5C4.375 8.12132 4.87868 8.625 5.5 8.625ZM10.625 11.5C10.625 12.1213 10.1213 12.625 9.5 12.625C8.87868 12.625 8.375 12.1213 8.375 11.5C8.375 10.8787 8.87868 10.375 9.5 10.375C10.1213 10.375 10.625 10.8787 10.625 11.5ZM5.5 12.625C6.12132 12.625 6.625 12.1213 6.625 11.5C6.625 10.8787 6.12132 10.375 5.5 10.375C4.87868 10.375 4.375 10.8787 4.375 11.5C4.375 12.1213 4.87868 12.625 5.5 12.625Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg></div>
        </div>
    </div>
    <div x-ref="second" {{ $second->attributes->class(['overflow-y-auto']) }}>
        {{ $second }}
    </div>

</div>