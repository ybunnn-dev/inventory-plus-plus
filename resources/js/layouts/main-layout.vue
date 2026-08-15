<script setup>
import Sidebar from '../components/sidebar.vue'
</script>

<template>
    <div class="bg-blue-500 p-3">
        <div class="flex">
            <Sidebar />
            <main class="flex-1">
                <slot />
            </main>

        </div>
    </div>
</template>
