<script setup>
import { ref } from "vue";
import { useScreens } from "vue-screen-utils";

const { mapCurrent } = useScreens({
    xs: "0px",
    sm: "640px",
    md: "768px",
    lg: "1024px",
});
const disabledDates = ref([
    {
        repeat: {
            weekdays: [1, 7],
        },
    },
]);
const range = ref({
    start: new Date(),
    end: new Date(),
});

const columns = mapCurrent({ lg: 3, md: 2 }, 1);
const rows = mapCurrent({ lg: 4, md: 6 }, 12);
</script>

<template>
    <VDatePicker
        :columns="columns"
        :disabled-dates="disabledDates"
        :firstDayOfWeek="2"
        :rows="rows"
        expanded
        mode="date"
        v-model.range="range"
    />
</template>
