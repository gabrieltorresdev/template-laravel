<header
    class="fixed inset-x-0 top-0 z-20 flex h-16 items-center justify-between border-b border-zinc-200 bg-white px-6 dark:border-zinc-700 dark:bg-zinc-800"
>
    <div class="flex flex-1 items-center gap-2">
        <x-button.circle
            icon="menu"
            outline
            x-on:click="sidebar = ! sidebar"
        />
        <span class="text-lg">Sistema</span>
    </div>
    <div
        x-data="{ dropdown: false }"
        class="relative"
    >
        <div class="flex items-center gap-4">
            <span class="text-sm">{{ $nameOfUser }}</span>
            <x-button.circle
                icon="user"
                outline
                x-on:click="dropdown = !dropdown"
            />
        </div>
        <div
            x-cloak
            x-show="dropdown"
            x-on:click.away="dropdown = false"
            class="absolute mt-6 ml-7 flex w-36 flex-col rounded border border-zinc-100 bg-white text-sm shadow after:absolute after:-top-2 after:right-2 after:-z-10 after:h-4 after:w-4 after:rotate-45 after:bg-white after:shadow dark:border-zinc-900 dark:bg-zinc-800 dark:after:bg-zinc-800"
        >
            <button
                x-on:click="darkMode = !darkMode"
                class="relative inline-flex flex-1 rounded-t p-3 transition-colors hover:bg-zinc-100 dark:hover:bg-zinc-700"
                href="javascript:void(0)"
            >
                <x-icon
                    x-cloak
                    x-show="darkMode"
                    name="sun"
                    class="absolute left-0 ml-2.5 h-5 w-5"
                />
                <x-icon
                    x-cloak
                    x-show="!darkMode"
                    name="moon"
                    class="absolute left-0 ml-2.5 h-5 w-5"
                />
                <span class="ml-6">Tema</span>
            </button>
            <a
                href="{{ route('logout') }}"
                class="relative inline-flex flex-1 rounded-b p-3 transition-colors hover:bg-zinc-100 dark:hover:bg-zinc-700"
                href="javascript:void(0)"
            >
                <x-icon
                    name="logout"
                    class="absolute left-0 ml-2.5 h-5 w-5"
                />
                <span class="ml-6">Sair</span>
            </a>
        </div>
    </div>
</header>
