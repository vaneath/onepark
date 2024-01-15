<script setup>
import Calendar from "@/Components/Calendar.vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <Calendar />
    </AuthenticatedLayout>
</template>
