<template>
    <div class="hidden lg:block w-1/3 ml-8 space-y-8">
        <div class="bg-gray-800 p-4 rounded-lg shadow-lg flex items-center justify-between">
            <div class="flex items-center space-x-3">
                <img
                    src="https://via.placeholder.com/40"
                    alt="Avatar"
                    class="w-14 h-14 rounded-full"
                />
                <div>
                    <p class="font-semibold text-white">
                        <span>{{ props.userName }}</span>
                    </p>
                    <p class="text-sm text-gray-500">
                        Aluno
                    </p>
                </div>
            </div>
            <a href="#" class="text-white font-semibold text-sm">Ver perfil</a>
        </div>
        <SuggestionCard />
    </div>

</template>


<script setup>

import SuggestionCard from "@/Components/Dashboard/SuggestionCard.vue";

const  props = defineProps({
    userName: String,
    default: null,
});

</script>
