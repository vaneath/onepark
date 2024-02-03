<script setup>
import { Link } from "@inertiajs/vue3";
import { computed } from "vue";

const props = defineProps({
    active: Boolean,
    icon: String,
    name: String,
});
//
let classes = computed(() =>
    props.active
        ? props.icon + " fa-solid fa-lg fa-bounce"
        : props.icon + " fa-solid fa-lg"
);
</script>

<template>
    <Link
        class="flex justify-center items-center px-6 py-2 mt-4 text-white hover:text-yellow-500 hover:bg-gray-700 rounded"
        :class="active ? 'text-yellow-500 bg-gray-700' : ''"
    >
        <i :class="classes"></i>
        <span class="mx-3">{{ props.name }}</span>
    </Link>
</template>
