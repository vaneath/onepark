<script setup>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import NavigationToggle from "@/Components/SubComponents/NavigationToggle.vue";
import ProfileDropdown from "@/Components/SubComponents/ProfileDropdown.vue";
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <nav class="bg-gray-800">
        <!-- Primary Navigation Menu -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <!-- Logo -->
                    <div class="shrink-0 flex items-center">
                        <Link :href="route('dashboard')">
                            <ApplicationLogo
                                class="block h-9 w-auto fill-current text-white"
                            />
                        </Link>
                    </div>
                </div>

                <div class="hidden sm:inline-flex">
                    <ProfileDropdown />
                </div>

                <div class="sm:hidden inline-flex">
                    <NavigationToggle />
                </div>
            </div>
        </div>
    </nav>
</template>
