<script setup>
import Aside from "@/Components/Aside.vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <Aside />
    </AuthenticatedLayout>
</template>
