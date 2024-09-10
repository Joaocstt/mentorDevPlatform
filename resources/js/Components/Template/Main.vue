<template>

    <div class="min-h-screen bg-gray-900">
        <HeaderDesktop />
            <slot />
    </div>
</template>

<script setup>
import HeaderDesktop from '../Header/HeaderDesktop.vue';

</script>
