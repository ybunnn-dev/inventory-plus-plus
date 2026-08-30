<script setup>
import { Head } from '@inertiajs/vue3';
import MainLayout from '../../layouts/main-layout.vue';
import Cart from './components/cart.vue';
import Items from './components/items.vue'
defineOptions({
    layout:MainLayout,
});
</script>
<template>
    <Head title="Point on Sales" />

    <div class="p-10 text-gray-700 flex flex-col gap-3">
        <h1 class="font-bold text-4xl">Point on Sales</h1>
        <div class="grid grid-cols-1 xl:grid-cols-3 h-full gap-3">
            <Items />
            <Cart />
        </div>
    </div>
</template>
