<div x-data="Components.menu({ open: true })" x-init="init()" @keydown.escape.stop="open = false; focusButton()" @click.away="onClickAway($event)" class="relative inline-block text-left">
    <div>
        <button type="button" class="sr-inline-flex sr-w-full sr-justify-center sr-gap-x-1.5 sr-rounded-md sr-bg-white sr-px-3 sr-py-2 sr-text-sm sr-font-semibold sr-text-gray-900 sr-shadow-sm sr-ring-1 sr-ring-inset sr-ring-gray-300 hover:sr-bg-gray-50" id="menu-button" x-ref="button" @click="onButtonClick()" @keyup.space.prevent="onButtonEnter()" @keydown.enter.prevent="onButtonEnter()" aria-expanded="false" aria-haspopup="true" x-bind:aria-expanded="open.toString()" @keydown.arrow-up.prevent="onArrowUp()" @keydown.arrow-down.prevent="onArrowDown()">
            Options
            <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd"></path>
            </svg>
        </button>
    </div>


    <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="sr-transform sr-opacity-0 sr-scale-95" x-transition:enter-end="sr-transform sr-opacity-100 sr-scale-100" x-transition:leave="sr-transition sr-ease-in sr-duration-75" x-transition:leave-start="sr-transform sr-opacity-100 sr-scale-100" x-transition:leave-end="sr-transform sr-opacity-0 sr-scale-95" class="sr-absolute sr-right-0 sr-z-10 sr-mt-2 sr-w-56 sr-origin-top-right sr-rounded-md sr-bg-white sr-shadow-lg sr-ring-1 sr-ring-black sr-ring-opacity-5 focus:sr-outline-none" x-ref="menu-items" x-description="Dropdown menu, show/hide based on menu state." x-bind:aria-activedescendant="activeDescendant" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1" @keydown.arrow-up.prevent="onArrowUp()" @keydown.arrow-down.prevent="onArrowDown()" @keydown.tab="open = false" @keydown.enter.prevent="open = false; focusButton()" @keyup.space.prevent="open = false; focusButton()" style="display: none;">
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