<script setup>
// Presentational component for the right side
</script>

<template>
    <div class="relative h-full rounded-r-xl lg:col-span-2 hidden lg:block overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0 bg-[url('/cover.jpg')] bg-cover bg-center bg-no-repeat rounded-r-xl"></div>

        <!-- Blue Overlay & Content -->
        <div class="absolute inset-0 bg-blue-800/80 rounded-r-xl p-10 xl:p-14 2xl:p-20 flex flex-col justify-between overflow-y-auto">

            <!-- Top Text Section -->
            <div class="mb-10">
                <h1 class="text-5xl xl:text-6xl 2xl:text-7xl font-bold text-white mb-6">Inventory++</h1>
                <p class="text-white text-lg 2xl:text-xl space-y-3 2xl:space-y-5 max-w-4xl">
                    <span class="block">Elevate your sari-sari store into a smarter, data-driven business.</span>
                    <span class="block">Track your products, monitor inventory levels, record sales, and gain clear insights into your revenue, income, and profit—all in one place.</span>
                    <span class="block">Make informed decisions, reduce losses, and grow your store with confidence.</span>
                    <span class="block font-semibold">Inventory++ - Smart inventory management for modern sari-sari stores.</span>
                </p>
            </div>

            <!-- Features Grid -->
            <!-- Scales from 1 column to 2 to 3 depending on screen width -->
            <div class="grid grid-cols-1 xl:grid-cols-2 2xl:grid-cols-3 gap-4">

                <!-- Card 1 -->
                <div class="w-full bg-white/10 backdrop-blur-sm border-[0.5px] border-white/50 rounded-lg flex px-5 py-4 gap-4 items-center transition hover:bg-white/20">
                    <div>
                        <svg class="h-14 w-14 shrink-0" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 4.6A2.6 2.6 0 0 1 2.6 2h18.8A2.6 2.6 0 0 1 24 4.6v.8A2.6 2.6 0 0 1 21.4 8H21v10.6c0 1.33-1.07 2.4-2.4 2.4H5.4C4.07 21 3 19.93 3 18.6V8h-.4A2.6 2.6 0 0 1 0 5.4v-.8ZM2.6 4a.6.6 0 0 0-.6.6v.8a.6.6 0 0 0 .6.6h18.8a.6.6 0 0 0 .6-.6v-.8a.6.6 0 0 0-.6-.6H2.6ZM8 10a1 1 0 1 0 0 2h8a1 1 0 1 0 0-2H8Z" fill="#FFFFFF"/>
                        </svg>
                    </div>
                    <div class="flex flex-col w-full gap-1">
                        <h1 class="text-white font-semibold">Smart Inventory</h1>
                        <p class="text-white/90 text-sm">Easily add, update, and organize products while keeping track of available stock.</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="w-full bg-white/10 backdrop-blur-sm border-[0.5px] border-white/50 rounded-lg flex px-5 py-4 gap-4 items-center transition hover:bg-white/20">
                    <div>
                        <svg class="h-14 w-14 shrink-0" viewBox="0 0 239.749 239.749" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#FFFFFF" d="M5.081,26.555c-2.768,1.784-5.08,4.384-5.08,8.104v150.047c0,0-0.598,30.965,29.121,30.965h189.198 c6.005,0,14.762-1.686,18.047-5.45c1.876-2.154,3.383-4.901,3.383-8.18c0-3.334-1.556-6.391-3.47-8.893 c-3.263-4.264-11.955-6.619-17.96-6.636l-167.757-0.528c-6.01-0.022-15.072,0.761-18.52-2.094 c-1.653-1.365-2.921-3.612-2.921-7.267v-24.411c0-6.005,4.645-12.341,10.378-14.136l37.899-11.906 c5.733-1.8,14.212-0.25,18.939,3.459l43.235,33.923c4.727,3.709,12.102,3.378,16.475-0.745l74.058-69.761 c4.373-4.123,8.001-12.33,8.099-18.335l0.402-23.693c0.103-6.005-3.334-7.506-7.669-3.345l-73.998,70.942 c-4.335,4.161-11.754,4.618-16.567,1.023l-42.55-31.786c-4.814-3.595-13.309-4.895-18.982-2.91L39.706,98.682 c-5.668,1.991-10.291-1.267-10.312-7.277l-0.218-47.108c-0.027-6.005-1.991-14.832-6.103-18.031 C18.961,23.063,9.726,23.563,5.081,26.555z"/>
                        </svg>
                    </div>
                    <div class="flex flex-col w-full gap-1">
                        <h1 class="text-white font-semibold">Real-Time Monitoring</h1>
                        <p class="text-white/90 text-sm">Get instant visibility of inventory levels and avoid unexpected shortages.</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="w-full bg-white/10 backdrop-blur-sm border-[0.5px] border-white/50 rounded-lg flex px-5 py-4 gap-4 items-center transition hover:bg-white/20">
                    <div>
                        <svg class="h-14 w-14 shrink-0" viewBox="0 0 1024 1024" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M585.1 640.1V823l164.6 91.4L914.3 823V640.1l-164.6-91.4-164.6 91.4z m256 139.9l-91.4 50.8-91.4-50.8v-96.8l91.4-50.8 91.4 50.8V780z" fill="#FFFFFF"></path>
                            <path d="M713.600676 737.454004a36.6 36.6 0 1 0 72.255718-11.719697 36.6 36.6 0 1 0-72.255718 11.719697Z" fill="#FFFFFF"></path>
                            <path d="M109.7 109.7v804.6h438.9v-73.2H182.9V182.9h658.3V512h73.1V109.7z" fill="#FFFFFF"></path>
                            <path d="M694.9 380.9v58H768V256H585.2v73.1h58L507.3 464.9l-109.7-73.1-167.4 167.5 51.7 51.7L407 485.9l109.7 73.2zM256 694.9h256V768H256z" fill="#FFFFFF"></path>
                        </svg>
                    </div>
                    <div class="flex flex-col w-full gap-1">
                        <h1 class="text-white font-semibold">Sales Tracking</h1>
                        <p class="text-white/90 text-sm">Record daily transactions and monitor sales performance with ease.</p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="w-full bg-white/10 backdrop-blur-sm border-[0.5px] border-white/50 rounded-lg flex px-5 py-4 gap-4 items-center transition hover:bg-white/20">
                    <div>
                        <svg class="h-14 w-14 shrink-0" viewBox="0 0 256 252" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M59.406,88.486L50.54,60.801h50.68L90.352,88.486H59.406z M20.567,146.773 c0-21.393,11.841-39.869,29.63-49.078h50.737c17.789,9.209,29.973,27.685,29.973,49.078c0,30.316-24.711,55.027-55.027,55.027 C45.22,201.801,20.567,177.09,20.567,146.773z M80.857,159.987c0,3.26-2.974,4.919-7.265,4.919c-4.976,0-9.553-1.659-12.87-3.318 l-2.288,8.866c2.917,1.659,7.894,2.974,13.156,3.318v7.264h7.551v-7.894c8.923-1.316,13.843-7.265,13.843-14.186 c0-6.921-3.661-11.154-12.87-14.472c-6.578-2.288-9.209-3.947-9.209-6.578c0-2.002,1.659-4.29,6.578-4.29 c5.606,0,9.209,1.659,11.211,2.631l2.288-8.58c-2.631-1.316-5.949-2.288-11.211-2.631v-6.921h-7.551v7.207 c-8.237,1.659-13.156,6.921-13.156,13.843c0,7.608,5.606,11.555,13.843,14.186C78.511,155.354,81.143,157.012,80.857,159.987z M198.608,91.221c-1.756-1.828-1.698-4.734,0.13-6.491s4.734-1.698,6.491,0.13s1.698,4.734-0.13,6.491 S200.364,93.049,198.608,91.221z M229.263,82.637c1.828-1.756,1.887-4.662,0.13-6.491s-4.662-1.887-6.491-0.13 c-1.828,1.756-1.887,4.662-0.13,6.491S227.434,84.394,229.263,82.637z M171.883,56.775c1.828-1.756,1.887-4.662,0.13-6.491 c-1.756-1.828-4.662-1.887-6.491-0.13s-1.887,4.662-0.13,6.491S170.055,58.532,171.883,56.775z M239.094,60.108 c1.828-1.756,1.887-4.662,0.13-6.491s-4.662-1.887-6.491-0.13s-1.887,4.662-0.13,6.491C234.36,61.806,237.266,61.864,239.094,60.108 z M204.274,24.598c1.828-1.756,1.887-4.662,0.13-6.491c-1.756-1.828-4.662-1.887-6.491-0.13s-1.887,4.662-0.13,6.491 C199.54,26.296,202.445,26.354,204.274,24.598z M229.857,35.032c1.828-1.756,1.887-4.662,0.13-6.491 c-1.756-1.828-4.662-1.887-6.491-0.13s-1.887,4.662-0.13,6.491C225.123,36.73,228.029,36.788,229.857,35.032z M182.436,34.261 c1.828-1.756,1.887-4.662,0.13-6.491c-1.756-1.828-4.662-1.887-6.491-0.13s-1.887,4.662-0.13,6.491S180.607,36.017,182.436,34.261z M190.179,61.832l-16.368,15.724l-1.58,6.822l6.88-1.305l16.368-15.724c4.637,2.618,10.782,2.02,15.012-2.044 c5.15-4.947,5.309-12.88,0.362-18.03s-12.88-5.309-18.03-0.362C188.593,50.978,187.573,56.91,190.179,61.832z M253.968,54.72 c0,21.672-13.201,40.348-31.968,48.417V119h-15.232v88.777c0,17.087-13.772,30.858-30.859,30.858h-26.12v11.181H2V215h148v13.484 l26.675-0.05c11.476,0,20.657-9.181,20.657-20.657V119H182v-15.814c-18.828-8.041-32.083-26.75-32.083-48.466 c0-29.073,23.463-52.536,52.536-52.536C231.271,2.184,254.989,25.646,253.968,54.72z M241.747,34.102 c-11.375-21.68-38.232-30.052-59.912-18.677c-21.68,11.375-30.052,38.232-18.677,59.912c11.375,21.68,38.232,30.052,59.912,18.677 C244.75,82.639,253.122,55.782,241.747,34.102z" fill="#FFFFFF"/>
                        </svg>
                    </div>
                    <div class="flex flex-col w-full gap-1">
                        <h1 class="text-white font-semibold">Revenue Analytics</h1>
                        <p class="text-white/90 text-sm">View total revenue and income through clear and accessible reports.</p>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="w-full bg-white/10 backdrop-blur-sm border-[0.5px] border-white/50 rounded-lg flex px-5 py-4 gap-4 items-center transition hover:bg-white/20">
                    <div>
                        <svg class="h-14 w-14 shrink-0" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g transform="translate(2.000000, 0.000000)" fill="#FFFFFF">
                                <path d="M11.641,4.012 L9.985,4.012 L9.985,2.957 L11.337,2.957 C11.683,2.957 11.962,2.611 11.962,2.186 L11.962,0.772 C11.962,0.345 11.683,0.000999999989 11.337,0.000999999989 L7.646,0.000999999989 C7.3,0.000999999989 7.022,0.346 7.022,0.772 L7.022,2.186 C7.022,2.612 7.3,2.957 7.646,2.957 L9.024,2.957 L9.024,4.012 L2.353,4.012 C1.983,4.012 1.683,4.312 1.683,4.68 L0.0133056865,13.3109996 L0.0133056865,15.9999996 L14.0114746,15.9999996 C14.0114746,15.9999996 14.0114751,13.6789996 14.0114751,13.3109996 L12.312,4.68 C12.312,4.312 12.012,4.012 11.641,4.012 Z M4.016,12.016 L2.985,12.016 L2.985,10.969 L4.016,10.969 L4.016,12.016 L4.016,12.016 Z M2.984,10.016 L2.984,8.969 L4.015,8.969 L4.015,10.016 L2.984,10.016 L2.984,10.016 Z M6.016,12.031 L4.985,12.031 L4.985,10.969 L6.016,10.969 L6.016,12.031 L6.016,12.031 Z M6.016,10 L4.969,10 L4.969,8.984 L6.016,8.984 L6.016,10 L6.016,10 Z M8.016,12.029 L6.969,12.029 L6.969,10.968 L8.016,10.968 L8.016,12.029 L8.016,12.029 Z M6.969,10 L6.969,8.969 L8.016,8.969 L8.016,10 L6.969,10 L6.969,10 Z M8.016,8 L2.985,8 L2.985,6 L8.016,6 L8.016,8 L8.016,8 Z M11,8 L8.982,8 L8.982,6.98 L11,6.98 L11,8 L11,8 Z"></path>
                            </g>
                        </svg>
                    </div>
                    <div class="flex flex-col w-full gap-1">
                        <h1 class="text-white font-semibold">Smart POS</h1>
                        <p class="text-white/90 text-sm">Process transactions quickly and accurately while automatically updating inventory records.</p>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="w-full bg-white/10 backdrop-blur-sm border-[0.5px] border-white/50 rounded-lg flex px-5 py-4 gap-4 items-center transition hover:bg-white/20">
                    <div>
                        <!-- Updated to the 6th SVG provided earlier to replace the duplicate -->
                        <svg class="h-14 w-14 shrink-0" viewBox="-25 8 203.4 242" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M86.6,8C44.9,8,6.5,39.3-1.5,73.7c-1.8,7.7-3.8,27.7-3.8,27.7l-19.1,50.3c-0.4,0.9-0.6,1.8-0.6,2.9c0,4.1,3.3,7.4,7.4,7.4 h12.3v25.7c0,20,16.2,36.2,36.2,36.2h14.4V250h98v-77.9c21.4-16.8,35.1-42.9,35.1-72.2C178.4,49.1,137.3,8,86.6,8z M17.3,119.7 c-5.6,0-10.2-4.6-10.2-10.3c0-5.6,4.6-10.2,10.2-10.2c5.7,0,10.3,4.6,10.3,10.2C27.6,115.1,23,119.7,17.3,119.7z M146.6,151.6 c0,0,3.7-42.3-46.2-42.3c-71.8-1.6-70.9-64.9-70.9-64.9C44,29,64.5,19.3,87.4,19.3c43.8,0,79.4,35.5,79.4,79.4 C166.8,119,159.1,137.5,146.6,151.6z M90.4,99.4c20.7,0,37.6-16.8,37.6-37.6s-16.8-37.6-37.6-37.6S52.9,41.1,52.9,61.9 C52.9,82.6,69.7,99.4,90.4,99.4z M88.3,65c-6.9-2.4-11.2-5.9-11.2-12.1c0-5.7,3.8-10.2,10.7-11.6v-6.2h5.2V41c4.3,0,7.4,0.9,9.7,2.1 l-2.1,7.4c-1.7-0.7-4.5-1.9-8.3-1.9c-3.8,0-5.9,1.9-5.9,3.8c0,2.6,2.4,3.6,7.6,5.7c7.1,2.6,10.4,6.2,10.4,12.1s-3.6,10.4-11.2,12.1 v5.9h-5.2v-5.7c-4.5,0-9-1.2-11.2-2.4l1.9-7.6c2.4,1.2,6.2,2.6,10.2,2.6c4.3,0,6.4-1.9,6.4-4.5S93.3,66.9,88.3,65z" fill="#FFFFFF"/>
                        </svg>
                    </div>
                    <div class="flex flex-col w-full gap-1">
                        <h1 class="text-white font-semibold">Profit Calculation</h1>
                        <p class="text-white/90 text-sm">Automatically calculate profits based on product costs and sales data.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>
