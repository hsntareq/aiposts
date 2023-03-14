<div x-data="Components.menu({ open: true })" x-init="init()" @keydown.escape.stop="open = false; focusButton()" @click.away="onClickAway($event)" class="relative inline-block text-left">
    <div>
        <button type="button" class="ap-inline-flex ap-w-full ap-justify-center ap-gap-x-1.5 ap-rounded-md ap-bg-white ap-px-3 ap-py-2 ap-text-sm ap-font-semibold ap-text-gray-900 ap-shadow-sm ap-ring-1 ap-ring-inset ap-ring-gray-300 hover:ap-bg-gray-50" id="menu-button" x-ref="button" @click="onButtonClick()" @keyup.space.prevent="onButtonEnter()" @keydown.enter.prevent="onButtonEnter()" aria-expanded="false" aria-haspopup="true" x-bind:aria-expanded="open.toString()" @keydown.arrow-up.prevent="onArrowUp()" @keydown.arrow-down.prevent="onArrowDown()">
            Options
            <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd"></path>
            </svg>
        </button>
    </div>


    <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="ap-transform ap-opacity-0 ap-scale-95" x-transition:enter-end="ap-transform ap-opacity-100 ap-scale-100" x-transition:leave="ap-transition ap-ease-in ap-duration-75" x-transition:leave-start="ap-transform ap-opacity-100 ap-scale-100" x-transition:leave-end="ap-transform ap-opacity-0 ap-scale-95" class="ap-absolute ap-right-0 ap-z-10 ap-mt-2 ap-w-56 ap-origin-top-right ap-rounded-md ap-bg-white ap-shadow-lg ap-ring-1 ap-ring-black ap-ring-opacity-5 focus:ap-outline-none" x-ref="menu-items" x-description="Dropdown menu, show/hide based on menu state." x-bind:aria-activedescendant="activeDescendant" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1" @keydown.arrow-up.prevent="onArrowUp()" @keydown.arrow-down.prevent="onArrowDown()" @keydown.tab="open = false" @keydown.enter.prevent="open = false; focusButton()" @keyup.space.prevent="open = false; focusButton()" style="display: none;">
        <div class="py-1" role="none">
            <a href="#" class="text-gray-700 block px-4 py-2 text-sm" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100 text-gray-900': activeIndex === 0, 'text-gray-700': !(activeIndex === 0) }" role="menuitem" tabindex="-1" id="menu-item-0" @mouseenter="onMouseEnter($event)" @mousemove="onMouseMove($event, 0)" @mouseleave="onMouseLeave($event)" @click="open = false; focusButton()">Account settings</a>
            <a href="#" class="text-gray-700 block px-4 py-2 text-sm" :class="{ 'bg-gray-100 text-gray-900': activeIndex === 1, 'text-gray-700': !(activeIndex === 1) }" role="menuitem" tabindex="-1" id="menu-item-1" @mouseenter="onMouseEnter($event)" @mousemove="onMouseMove($event, 1)" @mouseleave="onMouseLeave($event)" @click="open = false; focusButton()">Support</a>
            <a href="#" class="text-gray-700 block px-4 py-2 text-sm" :class="{ 'bg-gray-100 text-gray-900': activeIndex === 2, 'text-gray-700': !(activeIndex === 2) }" role="menuitem" tabindex="-1" id="menu-item-2" @mouseenter="onMouseEnter($event)" @mousemove="onMouseMove($event, 2)" @mouseleave="onMouseLeave($event)" @click="open = false; focusButton()">License</a>
            <form method="POST" action="#" role="none">
                <button type="submit" class="text-gray-700 block w-full px-4 py-2 text-left text-sm" :class="{ 'bg-gray-100 text-gray-900': activeIndex === 3, 'text-gray-700': !(activeIndex === 3) }" role="menuitem" tabindex="-1" id="menu-item-3" @mouseenter="onMouseEnter($event)" @mousemove="onMouseMove($event, 3)" @mouseleave="onMouseLeave($event)" @click="open = false; focusButton()">Sign out</button>
            </form>
        </div>
    </div>

</div>