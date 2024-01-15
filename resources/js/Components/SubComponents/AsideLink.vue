<script setup>
import { computed } from "vue";

const props = defineProps({
    routeName: String,
    name: String,
    active: Boolean,
});

const classes = computed(() =>
    props.active
        ? "bg-gray-100 dark:bg-gray-700 flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
        : "flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
);
</script>

<template>
    <li>
        <a :href="route(props.routeName)" :class="classes">
            <slot name="svg" />
            <span class="ms-3" v-text="name"></span>
        </a>
    </li>
</template>
