<script setup>
import { ref } from 'vue'
import IconCart from '../icons/cart.vue'
import IconDateTime from '../icons/date-time.vue'

// 15 dummy transactions for demonstration
const transactions = ref([
    { id: 1, amount: 'P20.00', date: 'Mar 17, 2026 12:00PM', items: 12, status: 'Fully Paid' },
    { id: 2, amount: 'P20.00', date: 'Mar 17, 2026 12:00PM', items: 12, status: 'Credit' },
    { id: 3, amount: 'P20.00', date: 'Mar 17, 2026 12:00PM', items: 12, status: 'Partial' },
    { id: 4, amount: 'P145.50', date: 'Mar 18, 2026 09:30AM', items: 5, status: 'Fully Paid' },
    { id: 5, amount: 'P3,200.00', date: 'Mar 18, 2026 02:15PM', items: 45, status: 'Credit' },
    { id: 6, amount: 'P500.00', date: 'Mar 19, 2026 10:45AM', items: 8, status: 'Partial' },
    { id: 7, amount: 'P75.25', date: 'Mar 19, 2026 04:20PM', items: 2, status: 'Fully Paid' },
    { id: 8, amount: 'P120.00', date: 'Mar 20, 2026 08:00AM', items: 15, status: 'Fully Paid' },
    { id: 9, amount: 'P890.00', date: 'Mar 20, 2026 11:30AM', items: 22, status: 'Credit' },
    { id: 10, amount: 'P45.00', date: 'Mar 21, 2026 01:10PM', items: 4, status: 'Partial' },
    { id: 11, amount: 'P2,150.00', date: 'Mar 22, 2026 09:05AM', items: 30, status: 'Fully Paid' },
    { id: 12, amount: 'P60.00', date: 'Mar 22, 2026 03:50PM', items: 1, status: 'Fully Paid' },
    { id: 13, amount: 'P430.75', date: 'Mar 23, 2026 10:25AM', items: 11, status: 'Credit' },
    { id: 14, amount: 'P18.50', date: 'Mar 23, 2026 02:40PM', items: 3, status: 'Partial' },
    { id: 15, amount: 'P99.99', date: 'Mar 24, 2026 08:55AM', items: 7, status: 'Fully Paid' },
])

// Function to map the status to the specific badge colors seen in the design
const getBadgeStyles = (status) => {
    switch (status) {
        case 'Fully Paid':
            return 'bg-green-100 text-green-700' // Pastel green
        case 'Credit':
            return 'bg-orange-100 text-yellow-700' // Pastel yellow-green
        case 'Partial':
            return 'bg-blue-100 text-cyan-800' // Pastel teal
        default:
            return 'bg-gray-200 text-gray-700'
    }
}
</script>

<template>
    <!-- Fixed height wrapper to enable scrolling -->
    <div class="col-span-1 bg-white rounded-xl p-6 flex flex-col h-[485px]">

        <h1 class="text-2xl text-slate-600 font-bold mb-4">Previous Transactions</h1>

        <!-- Scrollable container with Tailwind Scrollbar plugin classes -->
        <div class="flex-grow overflow-y-auto pr-4 scrollbar-thin scrollbar-thumb-slate-300 hover:scrollbar-thumb-slate-400 scrollbar-track-transparent">

            <div
                v-for="tx in transactions"
                :key="tx.id"
                class="py-4 border-b border-gray-400/50 last:border-b-0"
            >
                <div class="flex justify-between items-start mb-1.5">
                    <!-- Amount -->
                    <h3 class="text-xl font-bold text-slate-600">{{ tx.amount }}</h3>

                    <!-- Status Badge -->
                    <span
                        class="px-3 py-0.5 text-xs font-medium rounded-lg"
                        :class="getBadgeStyles(tx.status)"
                    >
                        {{ tx.status }}
                    </span>
                </div>

                <div class="flex items-center gap-6 text-xs font-medium text-slate-500">
                    <!-- Date & Time -->
                    <div class="flex items-center gap-1.5">
                        <IconDateTime class="h-4 w-4" />
                        <span>{{ tx.date }}</span>
                    </div>

                    <!-- Items Count -->
                    <div class="flex items-center gap-1.5">
                        <IconCart class="h-5 w-5" />
                        <span>{{ tx.items }} Items</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</template>
