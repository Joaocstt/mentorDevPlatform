<template>
    <Main>
        <div class="container mx-auto flex justify-center">
            <div class="w-full sm:w-2/3 lg:w-1/2">
                <PostCard />
            </div>
            <CardProfile :userName="user ? user.name : ''" />
        </div>
    </Main>
</template>


<script setup>
import { computed } from "vue";
import { useAuthStore } from "../../Store/Client/Auth";
import Main from "../../Components/Template/Main.vue";
import CardProfile from "@/Components/Dashboard/CardProfile.vue";
import PostCard from "@/Components/Dashboard/PostCard.vue";

const authStore = useAuthStore();
const user = computed(() => authStore.getUser);

</script>
