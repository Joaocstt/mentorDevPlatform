<template>
    <div>
        <div class="flex items-start">
            <div class="flex-shrink-0 text-gray-400 mt-0.5">
                <component :is="icon" :class="['h-6 w-6', classIcon]" />
            </div>
            <div class="ml-3 w-0 flex-1 pt-0.5">
                <div class="text-base font-semibold text-white">
                    <p :class="classTitle" v-html="title"></p>
                </div>
                <div class="mt-1 text-sm text-white">
                    <p :class="classContent" v-html="content"></p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import * as Icons from 'vue-next-heroicons/outline';
export default {
    name: 'ToastNotification',
    components: {
        ...Icons
    },
    props: {
        title: {
            type: String,
            default: ''
        },
        content: {
            type: String,
            default: ''
        },
        icon: {
            type: String,
            default: ''
        },
        classIcon: {
            type: String,
            default: ''
        },
        classTitle: {
            type: String,
            default: ''
        },
        classContent: {
            type: String,
            default: ''
        },
    },
}
</script>