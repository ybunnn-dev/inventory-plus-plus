<script setup>
    import { useLogin } from './login';

    const {
        email,
        password,
        error,
        login,
    } = useLogin();
</script>
<template>
    <div class="min-h-screen flex items-center justify-center bg-gray-200 p-6">
        <div class="bg-white w-full h-[80vh] rounded-xl grid grid-cols-1 lg:grid-cols-3 border border-gray-300">
            <div class="bg-white h-full rounded-xl col-span-1 flex flex-col items-center justify-center gap-3">
                <div class="flex flex-col justify-center items-center mb-10">
                    <h1 class="text-xl lg:text-3xl font-bold">Login</h1>
                    <!-- this will dynamically change into error but will reset once an input field is focused -->
                    <p v-if="error" class="text-red-500 text-sm">
                        {{ error }}
                    </p>

                    <p v-else class="text-sm">
                        Hi, Welcome Back! Please enter details to login.
                    </p>
                </div>
                <!-- Parent wrapper: changed items-center to items-start, removed invalid justify-left -->
                <div class="flex flex-col items-start w-full gap-2">

                    <!-- Username Field -->
                    <div class="flex flex-col items-start w-full px-12">
                        <label for="email" class="mb-1 text-sm">Enter email</label>
                        <input
                            v-model="email"
                            type="email"
                            id="email"
                            class="border border-gray-500 w-full h-10 p-3 rounded-lg"
                        />
                    </div>

                    <!-- Password Field -->
                    <div class="flex flex-col items-start w-full px-12">
                        <label for="password" class="mb-1 text-sm">Enter password</label>
                        <input
                            v-model="password"
                            type="password"
                            id="password"
                            class="border border-gray-500 w-full h-10 p-3 rounded-lg"
                        />
                    </div>

                    <div class="w-full px-12 mt-6">
                        <button
                            @click="login"
                            class="bg-blue-700 hover:bg-blue-200 w-full h-10 text-white hover:text-blue-700 font-bold rounded-lg"
                        >
                            Login
                        </button>
                    </div>
                </div>
            </div>
            <div class="relative h-full rounded-r-xl col-span-2">
                <div class="absolute inset-0 bg bg-[url('/cover.jpg')] bg-cover bg-center bg-no-repeat rounded-r-xl"></div>
                <div class="absolute inset-0 bg-blue-700/70 rounded-r-xl p-20 flex flex-col">
                    <div class="h-full">
                        <h1 class="text-7xl font-bold text-white mb-6">Inventory++</h1>
                        <p class="text-white text-xl text-justify space-y-5">
                            Elevate your sari-sari store into a smarter, data-driven business.

                            Track your products, monitor inventory levels, record sales, and gain clear insights into your revenue, income, and profit—all in one place.

                            Make informed decisions, reduce losses, and grow your store with confidence.

                            Inventory++ — Smart inventory management for modern sari-sari stores.
                        </p>
                    </div>
                    <div class="h-full"></div>
                    <div class="h-full"></div>

                </div>
            </div>
        </div>
    </div>
</template>
