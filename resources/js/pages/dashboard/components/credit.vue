<script setup>
import { ref } from 'vue'
import VueApexCharts from 'vue3-apexcharts'

// Donut series data: [Paid, Unpaid, Overdue, Credits]
const series = ref([4500, 1500, 850, 400])

// Additional summary data requested
const summaryData = ref({
  totalPaid: '₱4,500.00',
  totalCredits: '₱400.00',
  balance: '₱2,350.00' // Unpaid + Overdue
})

const chartOptions = ref({
  chart: {
    type: 'donut',
    fontFamily: "'Montserrat', sans-serif",
  },
  labels: [
    'Paid',
    'Unpaid',
    'Overdue',
    'Store Credit'
  ],
  // Pastel Green, Pastel Orange, Pastel Red, Pastel Blue
  colors: ['#A3D9A5', '#FFB347', '#F88379', '#AEC6CF'],
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

        <!-- Card Title placed in the upper left of the HTML layout -->
        <h1 class="text-lg font-bold text-slate-700 mb-2">Payment Status</h1>

        <!-- Chart Container -->
        <div class="flex justify-center items-center w-full min-h-[300px] flex-grow">
            <VueApexCharts
                width="100%"
                type="donut"
                :options="chartOptions"
                :series="series"
            />
        </div>

        <!-- Summary Labels (Not included in donut) -->
        <div class="grid grid-cols-3 gap-2 mt-4 pt-4 border-t border-gray-100">
            <div class="text-center">
                <p class="text-xs text-slate-500 font-medium mb-1">Total Paid</p>
                <h4 class="text-sm lg:text-md font-bold text-slate-700">{{ summaryData.totalPaid }}</h4>
            </div>
            <div class="text-center border-l border-r border-gray-100">
                <p class="text-xs text-slate-500 font-medium mb-1">Total Credits</p>
                <h4 class="text-sm lg:text-md font-bold text-slate-700">{{ summaryData.totalCredits }}</h4>
            </div>
            <div class="text-center">
                <p class="text-xs text-slate-500 font-medium mb-1">Balance</p>
                <h4 class="text-sm lg:text-md font-bold text-slate-700">{{ summaryData.balance }}</h4>
            </div>
        </div>

    </div>
</template>
