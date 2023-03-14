<!-- alpine js -->
<div class="ap-flex ap-justify-center">
    <div x-data="{
        open: false,
        toggle() {
            if (this.open) {
                return this.close()
            }
            this.$refs.button.focus()
            this.open = true
        },
        close(focusAfter) {
            if (! this.open) return
            this.open = false
            focusAfter && focusAfter.focus()
        }}" x-on:keydown.escape.prevent.stop="close($refs.button)" x-on:focusin.window="! $refs.panel.contains($event.target) && close()" x-id="['dropdown-button']" class="ap-relative">
        <!-- Button -->
        <button x-ref="button" x-on:click="toggle()" :aria-expanded="open" :aria-controls="$id('dropdown-button')" type="button" class="ap-flex ap-items-center ap-gap-2 ap-px-5 ap-py-2.5 ap-rounded-md ap-shadow">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.9188 8.17993H11.6888H6.07877C5.11877 8.17993 4.63877 9.33993 5.31877 10.0199L10.4988 15.1999C11.3288 16.0299 12.6788 16.0299 13.5088 15.1999L15.4788 13.2299L18.6888 10.0199C19.3588 9.33993 18.8788 8.17993 17.9188 8.17993Z" fill="#6F6B7D" />
            </svg>

            <!-- Heroicon: chevron-down -->
            <!--<svg xmlns="http://www.w3.org/2000/svg" class="ap-h-5 ap-w-5 ap-text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>-->
        </button>

        <!-- Panel -->
        <div x-ref="panel" x-show="open" x-transition.origin.top.left x-on:click.outside="close($refs.button)" :id="$id('dropdown-button')" style="display: none;" class="ap-absolute ap-right-0 ap-mt-2 ap-w-48 ap-rounded-md ap-bg-white ap-shadow-md">
            <ul class="ap-w-full">
                <li class=""><a href="<?php echo esc_url(add_query_arg('page', 'ap-option', admin_url())); ?>">SR Options</a></li>
            </ul>
        </div>
    </div>
</div>