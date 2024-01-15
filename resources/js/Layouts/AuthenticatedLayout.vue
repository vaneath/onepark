<script setup>
import AppNavigation from "@/Components/AppNavigation.vue";
import SideBar from "@/Components/SideBar.vue";
</script>

<template>
    <div>
        <div class="min-h-screen bg-gray-100">
            <AppNavigation />
            <main class="grid grid-cols-12">
                <div class="hidden lg:block col-span-2 bg-gray-800">
                    <SideBar />
                </div>
                <div class="col-span-12 lg:col-span-10">
                    <slot />
                </div>
            </main>
        </div>
    </div>
</template>
