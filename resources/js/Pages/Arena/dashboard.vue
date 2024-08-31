<template>

    <div class="min-h-screen flex flex-row flex-wrap bg-gray-900">

        <div class="flex-1 flex">
            <!-- Desktop Header -->
            <div class="hidden md:flex w-full h-20 lg:h-24 bg-dblack items-center justify-around px-8">
                <h3 class="text-white text-2xl">Mentoria <span class="text-blue-500">Dev</span></h3>

                <div class="flex items-center space-x-6">
                    <span class="relative flex items-center z-50">
                        <div class="flex items-center cursor-pointer" @click.prevent="menuToggle">
                            <img class="h-12 w-12 rounded-full mr-4"
                                src="https://ui-avatars.com/api/?name=Jo%C3%A3o+Claudio+Santana&amp;color=7F9CF5&amp;background=EBF4FF"
                                alt="João Claudio Santana" title="João Claudio Santana"><span
                                class="text-white text-sm">{{ user.name }}</span>
                                <svg
                                xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="feather feather-chevron-down  text-gray-400 flex-shrink-0 ml-2 text-dgray-400">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </div>
                            <!-- Menu perfil
                              -->
                        <div
                            v-if="menu.open"
                            class="absolute mt-3 top-full right-0 w-64 bg-gray-800/40 border border-gray-800 p-6 rounded-md overflow-hidden shadow-md">
                            <ul class="flex flex-col">
                                <li class="flex"><a class="text-gray-400 hover:text-white text-sm p-2 w-full"
                                        href="https://www.blackdev.com.br/arena/gerenciar"> Perfil </a></li>
                                <li class="flex"><a class="text-gray-400 hover:text-white text-sm p-2 w-full"
                                        href="https://www.blackdev.com.br/arena/gerenciar?tab=orders"> Pedidos </a></li>
                                <li class="flex"><a class="text-gray-400 hover:text-white text-sm p-2 w-full"
                                        href="https://www.blackdev.com.br/arena/gerenciar?tab=access"> Acesso </a></li>
                            </ul>
                        </div>
                    </span>
                    <div class="border-l border-gray-400 h-full mx-6"></div>
                    <div @click.prevent="logout" class="text-gray-400 hover:text-red-600 cursor-pointer text-sm p-2 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-log-out">
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                            <polyline points="16 17 21 12 16 7"></polyline>
                            <line x1="21" y1="12" x2="9" y2="12"></line>
                        </svg>
                    </div>
                </div>

            </div>

            <!-- Mobile Header -->
            <div class="block md:hidden p-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-menu text-dwhite-dark cursor-pointer">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            </div>

     
        </div>


        <div class="w-full">
            <div class="container mx-auto pb-12 px-8 text-white" style="max-width: 1200px;">
                <div class="flex justify-center flex-col items-center">
                    <div class="mt-12 md:mt-24">
                        <div class="flex flex-nowrap flex-col text-white font-medium text-2xl md:text-4xl lg:text-6xl">
                            <h1>Olá, {{ user.name }}</h1><span class="bg-dgray-300" style="width: 72px; height: 8px;"></span>
                        </div>
                    </div>
                    <div class="mt-4">
                        <p class="text-dgray-400 text-sm">Seja bem-vindo Mentoria Dev!</p>
                    </div>

                    <div class="mt-4 flex items-center"><span class="flex items-center"><svg
                                xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-calendar text-dwhite text-dwhite">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg><span class="text-dgray-200 text-sm ml-2">29/08/2024 20:03h</span></span><span
                            class="hidden flex items-center ml-6"><svg xmlns="http://www.w3.org/2000/svg" width="1.5em"
                                height="1.5em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-check-circle text-dgreen-dark text-dgreen-dark">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg></span></div>
                </div>
                <!---->
                <section class="mt-24">
                    <header
                        class="flex flex-wrap items-center text-dwhite-dark text-xl md:text-2xl lg:text-4xl mb-12 pb-4 border-b border-gray-700">
                        <div class="w-full sm:w-auto flex flex-nowrap items-center">
                            <h1 class="flex-1">Cursos disponíveis</h1>
                        </div>
                        <div class="w-full sm:ml-auto mt-4 sm:mt-0 sm:w-auto"><a
                                class="text-dgray-300 hover:text-dgray-100 flex items-center text-sm" href=""> Ver
                                Todas <svg xmlns="http://www.w3.org/2000/svg" width="1.1em" height="1.1em"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-chevron-right ml-1 ml-1">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg></a></div>
                    </header>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <article class="bg-gray-800/50 rounded-md overflow-hidden border-b-4"
                            style="border-color: rgb(43 103 165)">
                            <div class="p-8 flex flex-wrap content-start">
                                <div class="w-full mb-4"><a href="https://www.blackdev.com.br/arena/curso/laravel"><img
                                            src="https://imgs.search.brave.com/RxrVK5agbfFzyU0KM4iDktjVAyDmMa52bx6p-BFnoLs/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9vdWNo/LWNkbjIuaWNvbnM4/LmNvbS81SWtGZkti/ZUFsWWI0NjQ5UG9z/ZldfY1Z1OUZuRUZI/VUxBeTY3QWFSN2dj/L3JzOmZpdDozNjg6/MzY4L2N6TTZMeTlw/WTI5dWN6Z3UvYjNW/amFDMXdjbTlrTG1G/ei9jMlYwY3k5emRt/Y3ZORGt5L0wySmpN/amhsTnpRNExXRXcv/TmpJdE5ESXhNQzFp/TWprMi9MV0U0TVRr/d05tSmpaalE0L09D/NXpkbWMucG5n"
                                            alt="Laravel" title="Laravel"
                                            class="w-32 h-32 rounded-full overflow-hidden"></a></div>
                                <div class="w-full"><a href="https://www.blackdev.com.br/arena/curso/laravel">
                                        <h2 class="text-2xl mb-2">Intrudução</h2>
                                    </a>
                                    <p class="text-gray-600 text-sm font-mono leading-6">Conceitos básicos e
                                        fundamentais da programação. Explorando o que é programação e por
                                        que ela é uma habilidade essencial no mundo digital de hoje.</p>
                                </div>
                                <div class="w-full mt-8 flex flex-wrap justify-between items-center"><a
                                        class="px-6 py-3 rounded-md text-dwhite-light text-sm transform duration-200 hover:scale-105"
                                        href="https://www.blackdev.com.br/arena/curso/laravel"
                                        style="background-color: rgb(43 103 165);"> Acessar Curso </a><span
                                        class="flex items-center"><svg xmlns="http://www.w3.org/2000/svg" width="1.2em"
                                            height="1.2em" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-clock" style="color: rgb(43 103 165)">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polyline points="12 6 12 12 16 14"></polyline>
                                        </svg><span class="ml-2 text-dwhite text-sm">Online</span></span></div>
                            </div>
                        </article>



                    </div>
                </section>
            </div>
        </div>
    </div>
</template>


<script setup>
import { computed, reactive } from "vue";
import { useAuthStore } from "../../Store/Client/Auth";

const authStore = useAuthStore();

const menu = reactive({
    open: false,
})

const menuToggle = () => {
    menu.open = !menu.open
}

const logout = () => {
    authStore.logout();
    window.location.href = route('client.logout')
} 

// Computed property para acessar o usuário
const user = computed(() => authStore.getUser);


</script>