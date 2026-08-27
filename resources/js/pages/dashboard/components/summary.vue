<script setup>
import IconRevenue from '../icons/revenue.vue'
import IconNetProfit from '../icons/net-profit.vue'
import IconRoi from '../icons/roi.vue'

var totalRevenue = "10,000";
var totalNetProfit = "2,400";
var totalRoi = "25%";
</script>

<template>
    <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-3">

        <!-- Revenue Card -->
        <!-- Removed h-24 so the white background stretches properly -->
        <div class="bg-white rounded-xl p-6 flex flex-col justify-center">
            <div class="flex items-start justify-between">
                <div>
                    <p class="text-xs  font-medium text-gray-600">Revenue</p>
                    <h3 class="text-2xl font-bold text-gray-700 mt-1">{{ totalRevenue || '0' }}</h3>
                </div>
                <div class="p-2 bg-blue2/20 rounded-full flex items-center justify-center">
                    <IconRevenue class="w-4 h-4 text-blue2" />
                </div>
            </div>
            <div class="mt-2 flex gap-1 items-center text-xs font-medium text-gray-500">
                <span class="font-medium">
                    Total revenue generated this month
                </span>
            </div>
        </div>

        <!-- Net Profit Card -->
        <div class="bg-white rounded-xl p-6 flex flex-col justify-center">
            <div class="flex items-start justify-between">
                <div>
                    <p class="text-xs  font-medium text-gray-600">Net Profit</p>
                    <h3 class="text-2xl font-bold text-gray-700 mt-1">{{ totalNetProfit || '0' }}</h3>
                </div>
                <div class="p-2 bg-col_orange/20 rounded-full flex items-center justify-center">
                    <IconNetProfit class="w-4 h-4 text-col_orange" />
                </div>
            </div>
            <div class="mt-2 flex gap-1 items-center text-xs font-medium text-gray-500">
                <span class="font-medium">
                    Overall profit after expenses
                </span>
            </div>
        </div>

        <!-- Return of Investment Card -->
        <div class="bg-white rounded-xl p-6 flex flex-col justify-center">
            <div class="flex items-start justify-between">
                <div>
                    <p class="text-xs  font-medium text-gray-600">Return of Investment</p>
                    <h3 class="text-2xl font-bold text-gray-700 mt-1">{{ totalRoi || '0%' }}</h3>
                </div>
                <div class="p-2 bg-col_pink/20 rounded-full flex items-center justify-center">
                    <IconRoi class="w-4 h-4 text-col_pink" />
                </div>
            </div>
            <div class="mt-2 flex gap-1 items-center text-xs font-medium text-gray-500">
                <span class="font-medium">
                    Efficiency of your investment returns
                </span>
            </div>
        </div>

    </div>
</template>
