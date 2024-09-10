<template>
    <div class="flex flex-wrap md:flex w-full h-20 lg:h-24 items-center justify-around px-8 bg-gray-900 border-b border-gray-800 mb-14">
        <h3 class="hidden md:block text-white text-2xl">Mentoria <span class="text-blue-500">Dev</span></h3>

        <div class="flex items-center space-x-6">
            <span class="relative flex items-center z-50">

                <div class="flex items-center cursor-pointer" @click.prevent="menuToggle">
                    <img class="h-12 w-12 rounded-full mr-4"
                        src="https://ui-avatars.com/api/?name=Jo%C3%A3o+Claudio+Santana&amp;color=7F9CF5&amp;background=EBF4FF"
                        alt="João Claudio Santana" title="João Claudio Santana">
                    <span class="text-white text-sm">
                        <span>{{ user?.name }}</span>
                    </span>
                    <ChevronDownIcon v-if="menu.open" class="w-4 h-4 ml-2 text-gray-500" />
                    <ChevronLeftIcon v-if="!menu.open" class="w-4 h-4 ml-2 text-gray-500" />

                </div>

                <div v-if="menu.open"
                    class="absolute mt-3 top-full right-0 w-64 bg-gray-800 border border-gray-800/50 p-6 rounded-md overflow-hidden shadow-md">
                    <ul class="flex flex-col">
                        <li class="flex items-center">
                            <UserIcon class="w-5 h-5 text-white" />
                            <a class="text-gray-400 hover:text-white text-sm p-2 w-full"
                                href="">
                                Perfil
                            </a>
                        </li>

                        <li class="flex items-center">
                            <BellIcon class="w-5 h-5 text-white"/>
                            <a class="text-gray-400 hover:text-white text-sm p-2 w-full"
                                href="">
                                Notificações
                            </a>
                            </li>

                        <li class="flex items-center">
                            <BookOpenIcon class="w-5 h-5 text-white" />
                            <a class="text-gray-400 hover:text-white text-sm p-2 w-full"
                                href="">
                                Minhas mentorias
                            </a>
                        </li>

                    </ul>
                </div>
            </span>
            <div class="border-l border-gray-600 mx-6 h-100" style="width: 1px; line-height: 200%;">
                &nbsp;
            </div>
            <div @click.prevent="logout"
                class="text-gray-500 hover:text-red-900 cursor-pointer text-sm p-2 flex items-center">
                <XMarkIcon class="w-6 h-6" />
            </div>
        </div>

    </div>
</template>


<script setup>
import { computed, reactive } from "vue";
import { useAuthStore } from "../../Store/Client/Auth";
import {
    XMarkIcon,
    ChevronDownIcon,
    ChevronLeftIcon,
    UserIcon,
    BookOpenIcon,
    BellIcon
}
    from "@heroicons/vue/24/outline/index.js";

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

const user = computed(() => authStore.getUser);
</script>
