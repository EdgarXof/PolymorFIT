<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
import NavLink from "@/Components/NavLink.vue";
import ResponsiveNavLink from "@/Components/ResponsiveNavLink.vue";
import BottomNavbar from "@/Components/BottomNavBar.vue";
</script>

<template>
    <div>
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            <nav class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex">
                            <!-- Logo -->
                            <div class="shrink-0 flex items-center">
                                <Link :href="route('welcome')">
                                    <ApplicationLogo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                                </Link>
                            </div>

                            <!-- Navigation Links for Guests -->
                            <div class="invisible lg:visible space-x-8 sm:-my-px sm:ms-10 sm:flex">
                                <NavLink :href="route('welcome')" :active="route().current('welcome')">
                                    Home
                                </NavLink>
                            </div>
                        </div>
                        <div class="invisible lg:visible sm:flex sm:items-center sm:ml-6">
                            <Link :href="route('login')"
                                  class="mr-4 inline-flex items-center px-4 py-2 bg-indigo-600 dark:bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white dark:text-white uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-indigo-700 focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                Login
                            </Link>
                            <Link :href="route('register')"
                                  class="inline-flex items-center px-4 py-2 bg-indigo-600 dark:bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white dark:text-white uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                Register
                            </Link>
                        </div>

                        <!-- Hamburger for mobile view -->
                        <div class="-me-2 flex items-center sm:hidden">
                            <button @click="showingNavigationDropdown = !showingNavigationDropdown" class="...">
                                <!-- SVG for hamburger icon -->
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Responsive Navigation Menu for Guests -->
                <div :class="{ block: showingNavigationDropdown, hidden: !showingNavigationDropdown }" class="sm:hidden">
                    <div class="pt-2 pb-3 space-y-1">
                        <!-- Responsive Nav Links for Guests -->
                        <ResponsiveNavLink :href="route('welcome')" :active="route().current('welcome')">
                            Home
                        </ResponsiveNavLink>
                        <ResponsiveNavLink :href="route('login')" :active="route().current('login')">
                            Login
                        </ResponsiveNavLink>
                        <ResponsiveNavLink :href="route('register')" :active="route().current('register')">
                            Register
                        </ResponsiveNavLink>
                    </div>
                </div>
                <div class="sm:hidden">
                    <BottomNavbar />
                </div>
            </nav>

            <!-- Page Content -->
            <main>
                <slot />
            </main>
        </div>
    </div>
</template>
