<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Dashboard</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg flex flex-nowrap justify-around p-7">
                    <div class="w-1/3 d-flex">
                        <a :href="route('buques.index')">
                            <img src="/images/vessel_times.jpeg" alt="Vessel times" class="w-full">
                        </a>
                    </div>
                    <div class="w-1/3 d-flex">
                        <a :href="route('gruas.index')">
                            <img src="/images/crane_downtime.jpeg" alt="Crane downtime" class="w-full">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
