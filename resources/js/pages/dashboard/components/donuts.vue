<script setup>
import Credit from './credit.vue';
import Stocks from './stocks.vue';
import TopSales from './top-5.vue';

</script>
<template>
    <div class="grid grid-cols-1 xl:grid-cols-3 gap-3">
        <Credit />
        <Stocks />
        <TopSales />
    </div>
</template>
