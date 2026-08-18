<script setup>
import Sidebar from '../components/sidebar.vue'
</script>

<template>
    <div class="bg-gradient-to-r from-blue-700 to-blue-300 lg:p-3 min-h-screen">
        <div class="flex min-h-[calc(100vh-1.5rem)] bg-gray-100 rounded-xl">
            <Sidebar />
            <main class="flex-1">
                <slot />
            </main>
        </div>
    </div>
</template>
