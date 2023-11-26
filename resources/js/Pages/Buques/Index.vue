<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

defineProps({
    buques: {
        type: Object
    }
});
</script>

<template>
    <Head title="Profile" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Temp Buques</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    #
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Fecha
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Documento
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Vessel
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Hora Atraque
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Hora preparacion
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Hora inicio maniobra
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Final de maniobra
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Total de maniobras
                                </th>
                                <!-- <th scope="col" class="px-6 py-3">
                                    Action
                                </th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700"
                                v-for="buque in buques.data" :key="`buque-${buque.id}`">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ buque.id }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ buque.Fechab }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ buque.Nodoc }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ buque.Barco }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ buque.Hatraque }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ buque.Havisopre }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ buque.Iniman }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ buque.Fultman }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ buque.Titotmanio }}
                                </td>
                                <!-- <td class="px-6 py-4">
                                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td> -->
                            </tr>
                        </tbody>
                    </table>
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="inline-flex -space-x-px text-sm">
                        <li v-for="(buque, index) in buques.links" :key="`item-${buque.label}`">
                            <a :href="buque.url" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" v-if="index == 0" v-html="buque.label"></a>
                            <a :href="buque.url"
                                class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                                :class="{ 'text-blue-600 bg-blue-50 hover:bg-blue-100 hover:text-blue-700': buque.active }"
                                v-if="index != 0 && index != buques.links.length - 1">{{ buque.label }}</a>
                            <a :href="buque.url" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" v-if="index == buques.links.length -1" v-html="buque.label"></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
