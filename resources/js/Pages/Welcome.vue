<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import GuestLayout from "@/Layouts/GuestLayout.vue";
</script>

<template>
    <Head title="Welcome" />

    <GuestLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Welcome</h2>
        </template>


        <div class="relative h-screen overflow-hidden bg-white">
            <div class="h-full mx-auto max-w-7xl">
                <div class="relative z-10 h-full pb-8 bg-white sm:pb-16 md:pb-20 lg:w-full lg:pb-28 xl:pb-32">

                    <main class="h-full px-4 mx-auto mt-10 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                        <div class="flex flex-col items-start justify-between w-full h-full md:flex-row md:justify-start md:h-1/2">
                            <div class="z-20 flex flex-col items-center justify-start w-full h-full text-left md:z-30 md:w-1/2 md:items-start md:justify-center">
                                <h1 class="text-6xl font-extrabold tracking-tight text-gray-900 titleHome ">
                            <span class="flex w-full m-auto ">
                                Polymor
                                <span class="font-bold text-indigo-600">FIT</span>
                            </span>
                                    <span class="block font-bold xl:inline">
                                <span>
                                    made with Laravel
                                </span>

                            </span>
                                </h1>
                                <h2 class="mt-3 text-lg text-gray-500 sm:mt-5 sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                                    PolymorFIT is an application who let you manage and custom your own workouts.
                                </h2>
                                <div class="w-full mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                                    <div class="rounded-md shadow">
                                        <a class="flex items-center justify-center w-full px-4 px-8 py-2 py-3 text-base font-medium text-white bg-indigo-600 rounded-md hover:bg-indigo-700" href="/register">
                                            Get started
                                        </a>
                                    </div>
                                    <div class="mt-3 sm:mt-0 sm:ml-3">
                                        <a target="_blank" rel="noreferrer" href="https://github.com/Charlie85270/tail-kit" class="flex items-center justify-center w-full px-4 px-8 py-2 py-3 text-base font-medium text-gray-800 bg-gray-100 rounded-md hover:bg-gray-200">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="ml-2" viewBox="0 0 1792 1792">
                                                <path d="M896 128q209 0 385.5 103t279.5 279.5 103 385.5q0 251-146.5 451.5t-378.5 277.5q-27 5-40-7t-13-30q0-3 .5-76.5t.5-134.5q0-97-52-142 57-6 102.5-18t94-39 81-66.5 53-105 20.5-150.5q0-119-79-206 37-91-8-204-28-9-81 11t-92 44l-38 24q-93-26-192-26t-192 26q-16-11-42.5-27t-83.5-38.5-85-13.5q-45 113-8 204-79 87-79 206 0 85 20.5 150t52.5 105 80.5 67 94 39 102.5 18q-39 36-49 103-21 10-45 15t-57 5-65.5-21.5-55.5-62.5q-19-32-48.5-52t-49.5-24l-20-3q-21 0-29 4.5t-5 11.5 9 14 13 12l7 5q22 10 43.5 38t31.5 51l10 23q13 38 44 61.5t67 30 69.5 7 55.5-3.5l23-4q0 38 .5 88.5t.5 54.5q0 18-13 30t-40 7q-232-77-378.5-277.5t-146.5-451.5q0-209 103-385.5t279.5-279.5 385.5-103zm-477 1103q3-7-7-12-10-3-13 2-3 7 7 12 9 6 13-2zm31 34q7-5-2-16-10-9-16-3-7 5 2 16 10 10 16 3zm30 45q9-7 0-19-8-13-17-6-9 5 0 18t17 7zm42 42q8-8-4-19-12-12-20-3-9 8 4 19 12 12 20 3zm57 25q3-11-13-16-15-4-19 7t13 15q15 6 19-6zm63 5q0-13-17-11-16 0-16 11 0 13 17 11 16 0 16-11zm58-10q-2-11-18-9-16 3-14 15t18 8 14-14z">
                                                </path>
                                            </svg>
                                            <span class="ml-2">
                                        Github
                                    </span>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>

    </GuestLayout>
</template>
