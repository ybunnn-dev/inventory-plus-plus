<script setup>
import { ref } from 'vue'
import VueApexCharts from 'vue3-apexcharts'

// Sample data for the past 6 months
const series = ref([
  {
    name: 'Revenue',
    data: [42000, 48000, 51000, 49000, 55000, 60000],
  },
  {
    name: 'Net Profit',
    data: [28000, 35000, 32000, 31000, 38000, 45000],
  },
])

const chartOptions = ref({
  chart: {
    type: 'area',
    toolbar: {
      show: false // Hides the download/menu icon for a cleaner look
    }
  },
  // Using your pastel hex colors (blue2 and col_orange)
  colors: ['#58A0C8', '#F0BB78'],
  dataLabels: {
    enabled: false,
  },
  stroke: {
    curve: 'smooth',
    width: 4, // Slightly thinner lines look better on modern dashboards
  },
  xaxis: {
    type: 'category', // Changed from datetime to category for monthly labels
    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'], // Past 6 months
    labels: {
      style: {
        colors: '#64748b', // Tailwind text-slate-500
      }
    }
  },
  yaxis: {
    labels: {
      style: {
        colors: '#64748b',
      },
      formatter: function (val) {
        // Formats numbers with commas and adds the dollar sign
        return '$' + val.toLocaleString()
      },
    },
  },
  tooltip: {
    theme: 'light',
  },
  fill: {
    type: 'gradient',
    gradient: {
      shadeIntensity: 5,
      opacityFrom: 0.6,
      opacityTo: 0.06,
      stops: [0, 90, 100]
    }
  },
  legend: {
    position: 'top',
    horizontalAlign: 'right'
  }
})
</script>

<template>
    <!-- Removed fixed h-64 and used flex layout so the chart scales properly inside the card -->
    <div class="bg-white rounded-xl p-6 flex flex-col h-[350px]">
        <h1 class="font-bold text-xl text-gray-700">
            Revenue v Profit for the Past 6 Months
        </h1>

        <!-- The chart will grow to fill the remaining space -->
        <div class="flex-grow w-full">
            <VueApexCharts
                width="100%"
                height="100%"
                type="area"
                :options="chartOptions"
                :series="series"
            />
        </div>
    </div>
</template>
