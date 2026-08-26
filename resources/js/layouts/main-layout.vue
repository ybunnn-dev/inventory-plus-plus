<script setup>
import { ref } from 'vue'
import Sidebar from '../components/sidebar.vue'

const isSidebarOpen = ref(false)
</script>

<template>
    <!-- 1. Changed min-h-screen to h-screen and added overflow-hidden to lock window scrolling -->
    <div class="bg-gradient-to-r from-blue-700 to-blue-300 lg:p-3 h-screen overflow-hidden">

        <!-- 2. Changed min-h-[calc...] to h-full to fit perfectly inside the parent -->
        <div class="flex h-full bg-gray-100 lg:rounded-xl relative">

            <Sidebar :is-open="isSidebarOpen" @close="isSidebarOpen = false" />

            <main class="flex-1 flex flex-col min-w-0 h-full">
                <!-- Mobile Header Area (Visible only below lg) -->
                <div class="lg:hidden flex items-center p-4 bg-white border-b border-gray-200 shrink-0">
                    <button
                        @click="isSidebarOpen = true"
                        class="p-2 mr-3 -ml-2 text-gray-600 hover:text-gray-900 rounded-lg hover:bg-gray-100 transition-colors focus:outline-none"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                    <!-- Mobile title to keep branding visible when sidebar is closed -->
                    <h1 class="font-bold text-xl text-gray-800">
                        <span class="text-blue-600">Inve</span>ntory<span class="text-blue-600">++</span>
                    </h1>
                </div>

                <!-- 3. Added overflow-y-auto to this container so ONLY the content scrolls -->
                <div class="p-2 flex-1 overflow-y-auto">
                    <slot />
                </div>
            </main>
        </div>
    </div>
</template>
