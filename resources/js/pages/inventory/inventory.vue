<script setup>
import { Head } from '@inertiajs/vue3';
import MainLayout from '../../layouts/main-layout.vue';

defineOptions({
    layout:MainLayout,
});
</script>
<template>
    <Head title="Inventory" />

    <div class="p-10 text-gray-700 flex flex-col gap-3">
        <h1 class="font-bold text-4xl">Inventory</h1>

    </div>
</template>
