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
                            class="bg-blue-500 w-full h-10 text-white font-bold rounded-lg"
                        >
                            Login
                        </button>
                    </div>
                </div>
            </div>
            <div class="bg-blue-300 h-full rounded-r-xl col-span-2">

            </div>
        </div>
    </div>
</template>
