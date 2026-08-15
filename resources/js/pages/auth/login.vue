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
                        <h1 class="text-7xl font-bold text-white mb-4">Inventory++</h1>
                        <p class="text-white text-xl text-justify space-y-5">
                            Elevate your sari-sari store into a smarter, data-driven business.

                            Track your products, monitor inventory levels, record sales, and gain clear insights into your revenue, income, and profit—all in one place.

                            Make informed decisions, reduce losses, and grow your store with confidence.

                            Inventory++ — Smart inventory management for modern sari-sari stores.
                        </p>
                    </div>
                    <!-- 1. Added grid-rows-2 to force equal row heights -->
                    <div class="h-full grid grid-cols-3 grid-rows-2 gap-3">
                        <div class="w-full h-full border-[0.5px] border-white rounded-lg flex px-4 py-4 gap-3 items-center">
                            <div>
                                <!-- 2. Reduced the SVG size to h-14 w-14 for better proportion -->
                                <svg
                                    class="h-20 w-20 shrink-0"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M0 4.6A2.6 2.6 0 0 1 2.6 2h18.8A2.6 2.6 0 0 1 24 4.6v.8A2.6 2.6 0 0 1 21.4 8H21v10.6c0 1.33-1.07 2.4-2.4 2.4H5.4C4.07 21 3 19.93 3 18.6V8h-.4A2.6 2.6 0 0 1 0 5.4v-.8ZM2.6 4a.6.6 0 0 0-.6.6v.8a.6.6 0 0 0 .6.6h18.8a.6.6 0 0 0 .6-.6v-.8a.6.6 0 0 0-.6-.6H2.6ZM8 10a1 1 0 1 0 0 2h8a1 1 0 1 0 0-2H8Z"
                                            fill="#FFFFFF"
                                        />
                                    </g>
                                </svg>
                            </div>
                            <div class="flex flex-col w-full gap-1">
                                <h1 class="text-white font-semibold">Smart Inventory</h1>
                                <!-- Removed text-justify for better readability on small blocks of text -->
                                <p class="text-white text-sm text-justify">Easily add, update, and organize products while keeping track of available stock.</p>
                            </div>
                        </div>
                        <div class="w-full h-full border-[0.5px] border-white rounded-lg flex px-4 py-4 gap-3 items-center">
                            <div>
                                <!-- 2. Reduced the SVG size to h-14 w-14 for better proportion -->
                                <svg
                                    class="h-20 w-20 shrink-0"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M0 4.6A2.6 2.6 0 0 1 2.6 2h18.8A2.6 2.6 0 0 1 24 4.6v.8A2.6 2.6 0 0 1 21.4 8H21v10.6c0 1.33-1.07 2.4-2.4 2.4H5.4C4.07 21 3 19.93 3 18.6V8h-.4A2.6 2.6 0 0 1 0 5.4v-.8ZM2.6 4a.6.6 0 0 0-.6.6v.8a.6.6 0 0 0 .6.6h18.8a.6.6 0 0 0 .6-.6v-.8a.6.6 0 0 0-.6-.6H2.6ZM8 10a1 1 0 1 0 0 2h8a1 1 0 1 0 0-2H8Z"
                                            fill="#FFFFFF"
                                        />
                                    </g>
                                </svg>
                            </div>
                            <div class="flex flex-col w-full gap-1">
                                <h1 class="text-white font-semibold">Real-Time Monitoring</h1>
                                <!-- Removed text-justify for better readability on small blocks of text -->
                                <p class="text-white text-sm text-justify">Get instant visibility of inventory levels and avoid unexpected shortages.</p>
                            </div>
                        </div>

                        <div class="w-full h-full border-[0.5px] border-white rounded-lg flex px-4 py-4 gap-3 items-center">
                            <div>
                                <!-- 2. Reduced the SVG size to h-14 w-14 for better proportion -->
                                <svg
                                    class="h-20 w-20 shrink-0"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M0 4.6A2.6 2.6 0 0 1 2.6 2h18.8A2.6 2.6 0 0 1 24 4.6v.8A2.6 2.6 0 0 1 21.4 8H21v10.6c0 1.33-1.07 2.4-2.4 2.4H5.4C4.07 21 3 19.93 3 18.6V8h-.4A2.6 2.6 0 0 1 0 5.4v-.8ZM2.6 4a.6.6 0 0 0-.6.6v.8a.6.6 0 0 0 .6.6h18.8a.6.6 0 0 0 .6-.6v-.8a.6.6 0 0 0-.6-.6H2.6ZM8 10a1 1 0 1 0 0 2h8a1 1 0 1 0 0-2H8Z"
                                            fill="#FFFFFF"
                                        />
                                    </g>
                                </svg>
                            </div>
                            <div class="flex flex-col w-full gap-1">
                                <h1 class="text-white font-semibold">Sales Tracking</h1>
                                <!-- Removed text-justify for better readability on small blocks of text -->
                                <p class="text-white text-sm text-justify">Record daily transactions and monitor sales performance with ease.</p>
                            </div>
                        </div>

                        <div class="w-full h-full border-[0.5px] border-white rounded-lg flex px-4 py-4 gap-3 items-center">
                            <div>
                                <!-- 2. Reduced the SVG size to h-14 w-14 for better proportion -->
                                <svg
                                    class="h-20 w-20 shrink-0"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M0 4.6A2.6 2.6 0 0 1 2.6 2h18.8A2.6 2.6 0 0 1 24 4.6v.8A2.6 2.6 0 0 1 21.4 8H21v10.6c0 1.33-1.07 2.4-2.4 2.4H5.4C4.07 21 3 19.93 3 18.6V8h-.4A2.6 2.6 0 0 1 0 5.4v-.8ZM2.6 4a.6.6 0 0 0-.6.6v.8a.6.6 0 0 0 .6.6h18.8a.6.6 0 0 0 .6-.6v-.8a.6.6 0 0 0-.6-.6H2.6ZM8 10a1 1 0 1 0 0 2h8a1 1 0 1 0 0-2H8Z"
                                            fill="#FFFFFF"
                                        />
                                    </g>
                                </svg>
                            </div>
                            <div class="flex flex-col w-full gap-1">
                                <h1 class="text-white font-semibold">Revenue Analytics</h1>
                                <!-- Removed text-justify for better readability on small blocks of text -->
                                <p class="text-white text-sm text-justify">View total revenue and income through clear and accessible reports.</p>
                            </div>
                        </div>

                        <div class="w-full h-full border-[0.5px] border-white rounded-lg flex px-4 py-4 gap-3 items-center">
                            <div>
                                <!-- 2. Reduced the SVG size to h-14 w-14 for better proportion -->
                                <svg
                                    class="h-20 w-20 shrink-0"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M0 4.6A2.6 2.6 0 0 1 2.6 2h18.8A2.6 2.6 0 0 1 24 4.6v.8A2.6 2.6 0 0 1 21.4 8H21v10.6c0 1.33-1.07 2.4-2.4 2.4H5.4C4.07 21 3 19.93 3 18.6V8h-.4A2.6 2.6 0 0 1 0 5.4v-.8ZM2.6 4a.6.6 0 0 0-.6.6v.8a.6.6 0 0 0 .6.6h18.8a.6.6 0 0 0 .6-.6v-.8a.6.6 0 0 0-.6-.6H2.6ZM8 10a1 1 0 1 0 0 2h8a1 1 0 1 0 0-2H8Z"
                                            fill="#FFFFFF"
                                        />
                                    </g>
                                </svg>
                            </div>
                            <div class="flex flex-col w-full gap-1">
                                <h1 class="text-white font-semibold">Smart POS</h1>
                                <!-- Removed text-justify for better readability on small blocks of text -->
                                <p class="text-white text-sm text-justify">Process transactions quickly and accurately while automatically updating inventory records.</p>
                            </div>
                        </div>

                        <div class="w-full h-full border-[0.5px] border-white rounded-lg flex px-4 py-4 gap-3 items-center">
                            <div>
                                <!-- 2. Reduced the SVG size to h-14 w-14 for better proportion -->
                                <svg
                                    class="h-20 w-20 shrink-0"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M0 4.6A2.6 2.6 0 0 1 2.6 2h18.8A2.6 2.6 0 0 1 24 4.6v.8A2.6 2.6 0 0 1 21.4 8H21v10.6c0 1.33-1.07 2.4-2.4 2.4H5.4C4.07 21 3 19.93 3 18.6V8h-.4A2.6 2.6 0 0 1 0 5.4v-.8ZM2.6 4a.6.6 0 0 0-.6.6v.8a.6.6 0 0 0 .6.6h18.8a.6.6 0 0 0 .6-.6v-.8a.6.6 0 0 0-.6-.6H2.6ZM8 10a1 1 0 1 0 0 2h8a1 1 0 1 0 0-2H8Z"
                                            fill="#FFFFFF"
                                        />
                                    </g>
                                </svg>
                            </div>
                            <div class="flex flex-col w-full gap-1">
                                <h1 class="text-white font-semibold">Profit Calculation</h1>
                                <!-- Removed text-justify for better readability on small blocks of text -->
                                <p class="text-white text-sm text-justify">Automatically calculate profits based on product costs and sales data.</p>
                            </div>
                        </div>
                        <!-- Make sure all empty cards have w-full and h-full -->

                    </div>

                </div>
            </div>
        </div>
    </div>
</template>
