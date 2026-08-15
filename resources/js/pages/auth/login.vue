<script setup>
import LoginBox from './components/login-box.vue';
import MessageBox from './components/message-box.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Login" />
    <div class="min-h-screen flex items-center justify-center bg-gray-200 p-4 sm:p-6 lg:p-10">
        <!-- Responsive wrapper: max-width adjusts based on screen size -->
        <div class="bg-white w-full max-w-md lg:max-w-5xl 2xl:max-w-[90vw] min-h-[90vh] rounded-xl grid grid-cols-1 lg:grid-cols-3 border border-gray-300">
            <LoginBox />
            <MessageBox />
        </div>
    </div>
</template>
