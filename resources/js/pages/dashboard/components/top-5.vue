<script setup>
import { ref } from 'vue'
import VueApexCharts from 'vue3-apexcharts'

// Donut series data for Top 5 Items
const series = ref([12500, 8400, 6200, 4100, 2300])

// Summary data for the bottom labels
const summaryData = ref({
  topSales: '₱33,500',
  totalMonthly: '₱85,420',
  topItemShare: '37%' // Contribution of the #1 item to the Top 5
})

const chartOptions = ref({
  chart: {
    type: 'donut',
    fontFamily: "'Montserrat', sans-serif",
  },
  labels: [
    'Rice (25kg)',
    'Corned Beef',
    '3-in-1 Coffee',
    'Instant Noodles',
    'Evaporated Milk'
  ],
  // Pastel Blue, Pastel Purple, Pastel Pink, Pastel Orange, Pastel Yellow
  colors: ['#AEC6CF', '#C3B1E1', '#FFD1DC', '#FFB347', '#CCBACD'],
  legend: {
    show: false,
  },
  plotOptions: {
    pie: {
      donut: {
        size: '65%',
      },
    },
  },
  dataLabels: {
    enabled: true,
    style: {
      fontFamily: "'Montserrat', sans-serif",
      fontSize: '12px',
      fontWeight: 600,
    },
    dropShadow: {
      enabled: false,
    }
  },
  stroke: {
    width: 2,
    colors: ['#ffffff']
  },
  responsive: [
    {
      breakpoint: 480,
      options: {
        chart: {
          width: '100%',
        },
      },
    },
  ],
})
</script>

<template>
    <div class="col-span-1 bg-white rounded-xl p-6 shadow-sm border border-gray-100 flex flex-col h-full justify-between">

        <!-- Card Title -->
        <h1 class="text-lg font-bold text-slate-700 mb-2">Top 5 Items This Month</h1>

        <!-- Chart Container -->
        <div class="flex justify-center items-center w-full min-h-[300px] flex-grow">
            <VueApexCharts
                width="100%"
                type="donut"
                :options="chartOptions"
                :series="series"
            />
        </div>

        <!-- Summary Labels -->
        <div class="grid grid-cols-3 gap-2 mt-4 pt-4 border-t border-gray-100">
            <div class="text-center">
                <p class="text-xs text-slate-500 font-medium mb-1">Top 5 Total</p>
                <h4 class="text-sm lg:text-md font-bold text-slate-700">{{ summaryData.topSales }}</h4>
            </div>
            <div class="text-center border-l border-r border-gray-100">
                <p class="text-xs text-slate-500 font-medium mb-1">Total Monthly</p>
                <h4 class="text-sm lg:text-md font-bold text-slate-700">{{ summaryData.totalMonthly }}</h4>
            </div>
            <div class="text-center">
                <p class="text-xs text-slate-500 font-medium mb-1">Top Item Share</p>
                <h4 class="text-sm lg:text-md font-bold text-slate-700">{{ summaryData.topItemShare }}</h4>
            </div>
        </div>

    </div>
</template>
