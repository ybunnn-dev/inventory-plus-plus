<script setup>
import { ref, onMounted, onUnmounted } from 'vue';
import { Link } from '@inertiajs/vue3';

import DashboardIcon from './sidebar-svgs/dashboard.vue';
import PosIcon from './sidebar-svgs/pos.vue';
import ProductsIcon from './sidebar-svgs/products.vue';
import InventoryIcon from './sidebar-svgs/inventory.vue';
import HistoryIcon from './sidebar-svgs/history.vue';
import CreditIcon from './sidebar-svgs/credit.vue'; // Imported the new credit icon
import ReportsIcon from './sidebar-svgs/reports.vue';
import CalendarIcon from './sidebar-svgs/calendar.vue';

defineProps({
    isOpen: {
        type: Boolean,
        default: false
    }
});

defineEmits(['close']);

const menuItems = [
    { name: 'Dashboard', path: '/dashboard', icon: DashboardIcon },
    { name: 'Point on Sales', path: '/pos', icon: PosIcon },
    { name: 'Products', path: '/products', icon: ProductsIcon },
    { name: 'Inventory', path: '/inventory', icon: InventoryIcon },
    { name: 'Transaction History', path: '/transactions', icon: HistoryIcon },
    { name: 'Utang', path: '/credit', icon: CreditIcon },
    { name: 'Reports', path: '/reports', icon: ReportsIcon }
];

// --- Live Clock Logic ---
const currentDate = ref('');
const currentTime = ref('');
let timer;

const updateTime = () => {
    const now = new Date();

    const months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    const days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

    // Formats to: "March 17, 2003 Monday"
    currentDate.value = `${months[now.getMonth()]} ${now.getDate()}, ${now.getFullYear()} ${days[now.getDay()]}`;

    // Formats to: "12:20 PM"
    currentTime.value = now.toLocaleTimeString('en-US', { hour: 'numeric', minute: '2-digit', hour12: true });
};

onMounted(() => {
    updateTime();
    timer = setInterval(updateTime, 1000); // Update every second
});

onUnmounted(() => {
    clearInterval(timer); // Prevent memory leaks
});
</script>

<template>
    <div>
        <!-- Optional Mobile Overlay -->
        <div
            v-if="isOpen"
            class="fixed inset-0 bg-black/30 z-40 lg:hidden transition-opacity"
            @click="$emit('close')"
        ></div>

        <!-- Sidebar Container -->
        <div
            :class="isOpen ? 'translate-x-0' : '-translate-x-full'"
            class="fixed inset-y-0 left-0 z-50 w-[270px] h-screen bg-white border-r border-r-gray-300 py-8 flex flex-col transition-transform duration-300 ease-in-out lg:relative lg:translate-x-0 lg:min-h-[calc(100vh-1.5rem)] lg:h-auto lg:rounded-l-xl"
        >
            <!-- Mobile Close Button -->
            <button
                class="absolute top-5 right-5 lg:hidden text-gray-500 hover:text-gray-800 transition-colors"
                @click="$emit('close')"
            >
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <!-- Logo -->
            <h1 class="font-bold text-3xl text-gray-800 mb-8 mt-2 lg:mt-0 px-4">
                <span class="text-blue-600">Inve</span>ntory<span class="text-blue-600">++</span>
            </h1>

            <div class="flex-1 overflow-y-auto">
                <!-- User Profile Card -->
                <div class="px-3">
                    <div class="bg-gray-100 rounded-xl p-3 flex items-center justify-between mb-8 cursor-pointer hover:bg-gray-200 transition-colors">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-blue-200"></div>
                            <div class="flex flex-col">
                                <h2 class="text-sm font-bold text-gray-800">Admin</h2>
                                <p class="text-xs text-gray-500 font-medium">Admin Sari-sari Store</p>
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </div>
                 </div>

                <!-- Navigation -->
                <p class="text-[11px] text-gray-400 font-bold mb-4 tracking-wider uppercase px-4">INVENTORY++ MENU</p>

                <nav class="flex flex-col gap-1 px-2">
                    <Link
                            v-for="item in menuItems"
                            :key="item.name"
                            :href="item.path"
                            :class="[
                                $page.url.startsWith(item.path)
                                    ? 'bg-blue-100 text-blue-700 font-semibold'
                                    : 'border-transparent text-gray-500 hover:bg-gray-50 hover:text-gray-700 font-medium',
                                'flex items-center gap-3 px-3 py-2.5 rounded-lg border transition-all duration-200'
                            ]"
                        >
                        <component :is="item.icon" class="!w-4 !h-4 opacity-80" />
                        <span class="text-xs">{{ item.name }}</span>
                    </Link>
                </nav>
            </div>

            <!-- Sticky Date/Time Widget -->
            <div class="px-3 mt-4 shrink-0">
                <div class="bg-gray-100 rounded-xl p-3 flex items-center gap-3 border border-gray-200 shadow-sm">
                    <CalendarIcon class="!w-12 !h-12 text-slate-500" />
                    <div class="flex flex-col">
                        <h2 class="text-[13px] font-bold text-slate-600 leading-tight mb-0.5">{{ currentDate }}</h2>
                        <p class="text-[13px] text-slate-500 font-medium leading-tight">{{ currentTime }}</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</template>
