<script setup>
import Credit from './credit.vue';
import Stocks from './stocks.vue';

</script>
<template>
    <div class="grid grid-cols-1 xl:grid-cols-3 gap-3">
        <Credit />
        <Stocks />
        <div class="bg-white rounded-xl h-64">Hello</div>
    </div>
</template>
