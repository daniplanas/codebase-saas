<nav class="flex flex-1 flex-col">
    <ul role="list" class="flex flex-1 flex-col gap-y-7">
        <li>
            <ul role="list" class="-mx-2 space-y-1">
                <li>
                    <x-menu-item-link :icon="'heroicon-o-home'" :active="true" href="{{ route('dashboard') }}">@lang('app.sidebar.menu.item')</x-menu-item-link>
                </li>
                <li>
                    <x-menu-item-link :icon="'heroicon-o-users'" :active="false" href="{{ route('profile.edit') }}">Team</x-menu-item-link>
                </li>
                <li>
                    <x-menu-item-link :icon="'heroicon-o-folder'" :active="false" href="{{ route('profile.edit') }}">Projects</x-menu-item-link>
                </li>
                <li>
                    <x-menu-item-link :icon="'heroicon-o-calendar'" :active="false" href="{{ route('profile.edit') }}">Calendar</x-menu-item-link>
                </li>
                <li>
                    <x-menu-item-link :icon="'heroicon-o-document-duplicate'" :active="false" href="{{ route('profile.edit') }}">Documents</x-menu-item-link>
                </li>
                <li>
                    <x-menu-item-link :icon="'heroicon-o-chart-pie'" :active="false" href="{{ route('profile.edit') }}">Charts</x-menu-item-link>
                </li>
            </ul>
        </li>
        <li>
            <div class="text-xs font-semibold leading-6 text-gray-400">Your teams</div>
            <ul role="list" class="-mx-2 mt-2 space-y-1">
                <li>
                    <!-- Current: "bg-gray-800 text-white", Default: "text-gray-400 hover:text-white hover:bg-gray-800" -->
                    <a href="#"
                        class="text-gray-400 hover:text-white hover:bg-gray-800 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                        <span
                            class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border border-gray-700 bg-gray-800 text-[0.625rem] font-medium text-gray-400 group-hover:text-white">H</span>
                        <span class="truncate">Heroicons</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="text-gray-400 hover:text-white hover:bg-gray-800 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                        <span
                            class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border border-gray-700 bg-gray-800 text-[0.625rem] font-medium text-gray-400 group-hover:text-white">T</span>
                        <span class="truncate">Tailwind Labs</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="text-gray-400 hover:text-white hover:bg-gray-800 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                        <span
                            class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border border-gray-700 bg-gray-800 text-[0.625rem] font-medium text-gray-400 group-hover:text-white">W</span>
                        <span class="truncate">Workcation</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="mt-auto">
            <x-menu-item-link :icon="'heroicon-o-cog-6-tooth'" :active="false" href="{{ route('profile.edit') }}">Settings</x-menu-item-link>
        </li>
    </ul>
</nav>
