<script setup>
import { ref } from 'vue'
import VueApexCharts from 'vue3-apexcharts'

// Shared overrides for every drilled-down level
const childPlot = {
  bar: {
    horizontal: false,
    distributed: false,
    columnWidth: '70%',
    borderRadius: 3,
    borderRadiusApplication: 'end',
  },
}
const childLegend = { show: true, position: 'top', fontFamily: "'Montserrat', sans-serif" }

// 1. True Pastel Base Colors for the 15 root categories
const categoryColors = [
  '#AEC6CF', '#77DD77', '#FFB347', '#B39EB5', '#FFD1DC',
  '#FDFD96', '#F49AC2', '#A1E1E1', '#CFCFC4', '#98FF98',
  '#FFDAB9', '#E6E6FA', '#F88379', '#7FFFD4', '#CCCCFF'
]

// 2. 3-shade pastel palettes for each category's drilldown
const drilldownPalettes = {
  cannedGoods: ['#AEC6CF', '#8AB2C2', '#C9DCE3'],
  noodles:     ['#77DD77', '#5BCA5B', '#9CE89C'],
  snacks:      ['#FFB347', '#F09D27', '#FFCD7D'],
  beverages:   ['#B39EB5', '#99819B', '#CCBACD'],
  condiments:  ['#FFD1DC', '#E8A7B7', '#FFE4EB'],
  toiletries:  ['#FDFD96', '#E6E673', '#FEFEBD'],
  laundry:     ['#F49AC2', '#DE7AAB', '#F9BEE3'],
  rice:        ['#A1E1E1', '#7DC7C7', '#C4F0F0'],
  candies:     ['#CFCFC4', '#B2B2A7', '#E5E5DE'],
  cigarettes:  ['#98FF98', '#6CE66C', '#BEFFBE'],
  bakery:      ['#FFDAB9', '#EAA87C', '#FFEBD7'],
  dairy:       ['#E6E6FA', '#C4C4E8', '#F3F3FD'],
  coffee:      ['#F88379', '#E06256', '#FCABA4'],
  spices:      ['#7FFFD4', '#5AE5B5', '#A6FFE2'],
  eggs:        ['#CCCCFF', '#A3A3E5', '#E5E5FF'],
}

// 3. Root level series (15 Sari-Sari Store Categories)
const series = ref([
  {
    name: 'Total Sales',
    data: [
      { x: 'Canned Goods', y: 480, drilldown: 'cannedGoods' },
      { x: 'Noodles',      y: 530, drilldown: 'noodles' },
      { x: 'Snacks',       y: 610, drilldown: 'snacks' },
      { x: 'Beverages',    y: 705, drilldown: 'beverages' },
      { x: 'Condiments',   y: 320, drilldown: 'condiments' },
      { x: 'Toiletries',   y: 290, drilldown: 'toiletries' },
      { x: 'Laundry',      y: 410, drilldown: 'laundry' },
      { x: 'Rice',         y: 380, drilldown: 'rice' },
      { x: 'Candies',      y: 540, drilldown: 'candies' },
      { x: 'Cigarettes',   y: 620, drilldown: 'cigarettes' },
      { x: 'Bakery',       y: 350, drilldown: 'bakery' },
      { x: 'Dairy',        y: 210, drilldown: 'dairy' },
      { x: '3-in-1 Coffee',y: 150, drilldown: 'coffee' },
      { x: 'Spices',       y: 490, drilldown: 'spices' },
      { x: 'Eggs',         y: 780, drilldown: 'eggs' },
    ],
  },
])

// 4. Helper to generate dummy drilldown data
const generateChannelData = () => {
  return [
    { name: 'Online', data: [{ x: 'Q1', y: Math.floor(Math.random() * 50 + 20) }, { x: 'Q2', y: Math.floor(Math.random() * 50 + 20) }, { x: 'Q3', y: Math.floor(Math.random() * 50 + 20) }, { x: 'Q4', y: Math.floor(Math.random() * 50 + 20) }] },
    { name: 'Retail', data: [{ x: 'Q1', y: Math.floor(Math.random() * 40 + 10) }, { x: 'Q2', y: Math.floor(Math.random() * 40 + 10) }, { x: 'Q3', y: Math.floor(Math.random() * 40 + 10) }, { x: 'Q4', y: Math.floor(Math.random() * 40 + 10) }] },
    { name: 'Wholesale', data: [{ x: 'Q1', y: Math.floor(Math.random() * 30 + 10) }, { x: 'Q2', y: Math.floor(Math.random() * 30 + 10) }, { x: 'Q3', y: Math.floor(Math.random() * 30 + 10) }, { x: 'Q4', y: Math.floor(Math.random() * 30 + 10) }] },
  ]
}

// 5. Chart Options
const chartOptions = ref({
  chart: {
    type: 'bar',
    height: 420,
    toolbar: { show: false },
    fontFamily: "'Montserrat', sans-serif", // Enforces Montserrat globally for the chart
  },
  colors: categoryColors,
  plotOptions: {
    bar: {
      horizontal: false,
      columnWidth: '65%',
      borderRadius: 4,
      borderRadiusApplication: 'end',
      distributed: true,
    },
  },
  legend: { show: false },
  dataLabels: { enabled: false },
  title: {
    text: 'Sari-Sari Sales by Category',
    align: 'left',
    style: {
      color: '#334155',
      fontSize: '18px',
      fontWeight: 700,
      fontFamily: "'Montserrat', sans-serif" // Explicitly sets Title font
    }
  },
  subtitle: {
    text: 'Click a category to drill into its channel breakdown.',
    align: 'left',
    style: {
      color: '#64748b',
      fontFamily: "'Montserrat', sans-serif" // Explicitly sets Subtitle font
    }
  },
  xaxis: {
    labels: {
      rotate: -45,
      style: { colors: '#64748b', fontFamily: "'Montserrat', sans-serif" }
    }
  },
  yaxis: {
    title: {
      text: 'Sales (₱)',
      style: { fontFamily: "'Montserrat', sans-serif", fontWeight: 600 }
    },
    labels: {
      style: { colors: '#64748b', fontFamily: "'Montserrat', sans-serif" }
    }
  },
  drilldown: {
    enabled: true,
    breadcrumb: {
      show: true,
      position: 'top-right',
      rootLabel: 'All Categories',
      separator: ' / ',
    },
    series: [
      { id: 'cannedGoods', name: 'Canned Goods Breakdown', plotOptions: childPlot, legend: childLegend, colors: drilldownPalettes.cannedGoods, series: generateChannelData() },
      { id: 'noodles',     name: 'Noodles Breakdown',     plotOptions: childPlot, legend: childLegend, colors: drilldownPalettes.noodles,     series: generateChannelData() },
      { id: 'snacks',      name: 'Snacks Breakdown',      plotOptions: childPlot, legend: childLegend, colors: drilldownPalettes.snacks,      series: generateChannelData() },
      { id: 'beverages',   name: 'Beverages Breakdown',   plotOptions: childPlot, legend: childLegend, colors: drilldownPalettes.beverages,   series: generateChannelData() },
      { id: 'condiments',  name: 'Condiments Breakdown',  plotOptions: childPlot, legend: childLegend, colors: drilldownPalettes.condiments,  series: generateChannelData() },
      { id: 'toiletries',  name: 'Toiletries Breakdown',  plotOptions: childPlot, legend: childLegend, colors: drilldownPalettes.toiletries,  series: generateChannelData() },
      { id: 'laundry',     name: 'Laundry Breakdown',     plotOptions: childPlot, legend: childLegend, colors: drilldownPalettes.laundry,     series: generateChannelData() },
      { id: 'rice',        name: 'Rice Breakdown',        plotOptions: childPlot, legend: childLegend, colors: drilldownPalettes.rice,        series: generateChannelData() },
      { id: 'candies',     name: 'Candies Breakdown',     plotOptions: childPlot, legend: childLegend, colors: drilldownPalettes.candies,     series: generateChannelData() },
      { id: 'cigarettes',  name: 'Cigarettes Breakdown',  plotOptions: childPlot, legend: childLegend, colors: drilldownPalettes.cigarettes,  series: generateChannelData() },
      { id: 'bakery',      name: 'Bakery Breakdown',      plotOptions: childPlot, legend: childLegend, colors: drilldownPalettes.bakery,      series: generateChannelData() },
      { id: 'dairy',       name: 'Dairy Breakdown',       plotOptions: childPlot, legend: childLegend, colors: drilldownPalettes.dairy,       series: generateChannelData() },
      { id: 'coffee',      name: 'Coffee Breakdown',      plotOptions: childPlot, legend: childLegend, colors: drilldownPalettes.coffee,      series: generateChannelData() },
      { id: 'spices',      name: 'Spices Breakdown',      plotOptions: childPlot, legend: childLegend, colors: drilldownPalettes.spices,      series: generateChannelData() },
      { id: 'eggs',        name: 'Eggs Breakdown',        plotOptions: childPlot, legend: childLegend, colors: drilldownPalettes.eggs,        series: generateChannelData() },
    ],
  },
})
</script>

<template>
    <div class="min-h-[480px] p-6 rounded-xl bg-white shadow-sm border border-gray-100 flex flex-col">
        <div class="flex-grow w-full">
            <VueApexCharts
                width="100%"
                height="100%"
                type="bar"
                :options="chartOptions"
                :series="series"
            />
        </div>
    </div>
</template>
