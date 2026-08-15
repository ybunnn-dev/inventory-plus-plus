<script setup>
import { useLogin } from '../login';

const {
    email,
    password,
    error,
    login,
} = useLogin();
</script>

<template>
    <div class="bg-white h-full rounded-xl col-span-1 flex flex-col items-center justify-center gap-4 py-12 px-6 sm:px-10">
        <div class="flex flex-col justify-center items-center mb-6 lg:mb-10 text-center">
            <h1 class="text-3xl lg:text-5xl font-bold mb-2">LOGIN</h1>

            <p v-if="error" class="text-red-500 text-sm">
                {{ error }}
            </p>
            <p v-else class="text-sm text-gray-600">
                Hi, Welcome Back! Please enter details to login.
            </p>
        </div>

        <div class="flex flex-col items-start w-full gap-4">
            <!-- Username Field -->
            <div class="flex flex-col items-start w-full">
                <label for="email" class="mb-1 text-sm font-medium text-gray-700">Enter email</label>
                <input
                    v-model="email"
                    type="email"
                    id="email"
                    class="border border-gray-400 w-full h-12 p-3 rounded-lg focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition-colors"
                />
            </div>

            <!-- Password Field -->
            <div class="flex flex-col items-start w-full">
                <label for="password" class="mb-1 text-sm font-medium text-gray-700">Enter password</label>
                <input
                    v-model="password"
                    type="password"
                    id="password"
                    class="border border-gray-400 w-full h-12 p-3 rounded-lg focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition-colors"
                />
            </div>

            <div class="w-full mt-4">
                <button
                    @click="login"
                    class="bg-blue-700 hover:bg-blue-600 transition-colors w-full h-12 text-white font-bold rounded-lg shadow-md"
                >
                    LOGIN
                </button>
            </div>
        </div>
    </div>
</template>
