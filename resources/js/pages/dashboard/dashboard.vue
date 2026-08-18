<script setup>
import MainLayout from '../../layouts/main-layout.vue';
import Summary from './components/summary.vue';
import LineGraph from './components/linegraph.vue';
import BarGraph from './components/bar-graph.vue';
import Donuts from './components/donuts.vue';
import { Head } from '@inertiajs/vue3';

defineOptions({
    layout: MainLayout,
})
</script>

<template>
    <Head title="Dashboard" />
    <div class="p-10 text-gray-700 flex flex-col gap-3">
        <h1 class="font-bold text-4xl">Dashboard</h1>
        <div class="grid grid-cols-1 xl:grid-cols-3 gap-3">
            <div class="col-span-2 flex flex-col gap-3">
                <Summary />
                <LineGraph />
            </div>
            <div class="col-span-1 bg-white rounded-xl">

            </div>
        </div>
        <BarGraph />
        <Donuts />
    </div>
</template>
