<script setup>
import SideBarLink from "@/Components/SubComponents/SideBarLink.vue";
</script>

<template>
    <aside class="transition-transform -translate-x-full sm:translate-x-0">
        <div class="px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
            <ul class="space-y-2">
                <SideBarLink
                    :active="route().current('dashboard')"
                    :href="route('dashboard')"
                    icon="fa-database"
                    name="Dashboard"
                />
                <SideBarLink
                    :active="route().current('login')"
                    :href="route('dashboard')"
                    icon="fa-database"
                    name="Dashboard"
                />
            </ul>
        </div>
    </aside>
</template>
