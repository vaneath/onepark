<script setup>
import { useScreens } from "vue-screen-utils";

const { mapCurrent } = useScreens({
    xs: "0px",
    sm: "640px",
    md: "768px",
    lg: "1024px",
});
const columns = mapCurrent({ lg: 3, md: 2 }, 1);
const rows = mapCurrent({ lg: 4, md: 6 }, 12);
</script>

<template>
    <VCalendar :columns="columns" :rows="rows" expanded />
</template>
