<div class="w-60 h-fit fixed">

<div class="flex flex-grow flex-col border-r border-gray-200 bg-white">
    <div class="flex flex-shrink-0 items-center px-4 my-4 h-[5vh]">
        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
    </div>
    <div class="flex flex-grow flex-col h-[83vh]">
        <nav class="flex-1 space-y-1 bg-white px-2 overflow-y-auto" aria-label="Sidebar">
            <div>
                <!-- Current: "bg-gray-100 text-gray-900", Default: "bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
                <a href="{{ route('dashboard') }}" class=" @if(Route::is('dashboard')) bg-gray-100 text-gray-900 @else bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900 @endif group w-full flex items-center pl-2 py-2 text-sm font-medium rounded-md">
                    <!--
                      Heroicon name: outline/home

                      Current: "text-gray-500", Default: "text-gray-400 group-hover:text-gray-500"
                    -->
                    <svg class="text-gray-500 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                    </svg>
                    Dashboard
                </a>
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                <div class="space-y-1" @if(str_contains(url()->current(), 'teams')) x-data="{ open: true }" @else x-data="{ open: false }" @endif>
                    <!-- Current: "bg-gray-100 text-gray-900", Default: "bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
                    <button type="button" @click="open = !open" class="bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900 group w-full flex items-center pl-2 pr-1 py-2 text-left text-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" aria-controls="sub-menu-1" aria-expanded="false">
                        <!-- Heroicon name: outline/users -->
                        <svg class="mr-3 h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                        </svg>
                        <span class="flex-1">Team</span>
                        <!-- Expanded: "text-gray-400 rotate-90", Collapsed: "text-gray-300" -->
                        <svg :class="{ 'rotate-90': open }" x-transition x-transition.duration.300ms class="text-gray-300 ml-3 h-5 w-5 flex-shrink-0 transform transition-colors duration-150 ease-in-out group-hover:text-gray-400" viewBox="0 0 20 20" aria-hidden="true">
                            <path d="M6 6L14 10L6 14V6Z" fill="currentColor" />
                        </svg>
                    </button>
                    <!-- Expandable link section, show/hide based on state. -->
                    <div class="space-y-1" id="sub-menu-1" x-show="open" x-transition>
                        <a href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" class="@if(Route::is('teams.show')) bg-gray-100 text-gray-900 @else bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900 @endif group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium">Team Settings</a>

                        @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                            <a href="{{ route('teams.create') }}" class="@if(Route::is('teams.create')) bg-gray-100 text-gray-900 @else bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900 @endif group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium">Create Team</a>
                        @endcan
                    </div>
                </div>
            @endif

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a  href="{{ route('logout') }}" @click.prevent="$root.submit();" x-data="{open: false}">
                    <!-- Current: "bg-gray-100 text-gray-900", Default: "bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
                    <button type="button" @click="open = !open" class="bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900 group w-full flex items-center pl-2 pr-1 py-2 text-left text-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" aria-controls="sub-menu-1" aria-expanded="false">
                        <!-- Heroicon name: outline/users -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-3 h-6 w-6 flex-shrink-0 text-red-400 group-hover:text-red-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                        </svg>

                        <span class="flex-1 text-red-500">Log out</span>

                    </button>
                </a>
            </form>
        </nav>
    </div>
    <div class="flex flex-shrink-0 border-t border-gray-200 p-4 h-[8vh]">
        <a href="{{ route('profile.show') }}" class="group block w-full flex-shrink-0">
            <div class="flex items-center">
                <div>
                    <img class="inline-block h-9 w-9 rounded-full" src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}&color=7F9CF5&background=EBF4FF" alt="">
                </div>
                <div class="ml-3">
                    <p class="text-sm font-medium text-gray-700 group-hover:text-gray-900">{{ Auth::user()->name }}</p>
                    <p class="text-xs font-medium text-gray-500 group-hover:text-gray-700">{{ Auth::user()->currentTeam->name }}</p>
                </div>
            </div>
        </a>
    </div>
</div>
</div>
