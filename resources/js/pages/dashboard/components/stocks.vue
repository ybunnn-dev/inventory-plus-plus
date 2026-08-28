<script setup>
import { ref } from 'vue'
import VueApexCharts from 'vue3-apexcharts'

// Donut series data: [High Stocks, Normal Stocks, Low Stocks, Critical]
const series = ref([150, 480, 120, 45])

// Additional summary data for the bottom labels
const summaryData = ref({
  totalItems: '795',
  overallStocks: '8,420',
  overallExpired: '32'
})

const chartOptions = ref({
  chart: {
    type: 'donut',
    fontFamily: "'Montserrat', sans-serif",
  },
  labels: [
    'High Stocks',
    'Normal Stocks',
    'Low Stocks',
    'Critical'
  ],
  // New Pastel Palette: Cyan, Mint, Peach, Pink
  colors: ['#A1E1E1', '#B5EAD7', '#FFDAC1', '#FFB7B2'],
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
        <h1 class="text-lg font-bold text-slate-700 mb-2">Stock Levels</h1>

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
                <p class="text-xs text-slate-500 font-medium mb-1">Total Items</p>
                <h4 class="text-sm lg:text-md font-bold text-slate-700">{{ summaryData.totalItems }}</h4>
            </div>
            <div class="text-center border-l border-r border-gray-100">
                <p class="text-xs text-slate-500 font-medium mb-1">Overall Stocks</p>
                <h4 class="text-sm lg:text-md font-bold text-slate-700">{{ summaryData.overallStocks }}</h4>
            </div>
            <div class="text-center">
                <p class="text-xs text-slate-500 font-medium mb-1">Overall Expired</p>
                <h4 class="text-sm lg:text-md font-bold text-slate-700">{{ summaryData.overallExpired }}</h4>
            </div>
        </div>

    </div>
</template>
