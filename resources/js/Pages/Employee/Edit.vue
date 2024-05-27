<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { defineProps } from 'vue';
import { useForm } from '@inertiajs/vue3';
import Mylayout from '@/Layouts/MyLayout.vue';

const props = defineProps({
  employee: Object
});

const form = useForm({
  firstName: props.employee.firstName,
  lastName: props.employee.lastName,
  position: props.employee.position,
  dateOfBirth: props.employee.dateOfBirth,
  hireDate: props.employee.hireDate,
});

const submitForm = async () => {
  await form.put(`/employee/${props.employee.id}`);
};

const goBack = () => {
  window.history.back();
};

defineOptions({
    layout: Mylayout,
});
</script>


<template>

    <AuthenticatedLayout>
        <div class="p-12">
            <h1 class="max-w-2xl mx-auto sm:px-6 lg:px-8 text-4xl font-bold mb-4">Edit Employee</h1>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg max-w-md mx-auto">

                <div class="p-6 text-gray-900">
                    <form @submit.prevent="submitForm">
                        <table>
                            <tr>
                                <th class="text-left">First Name:</th>
                                <td class="px-4">
                                    <input class="w-full rounded-md py-2 px-3 focus:outline-none focus:border-pink-500" v-model="form.firstName" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th class="text-left">Last Name:</th>
                                <td class="px-4">
                                    <input class="w-full rounded-md py-2 px-3 focus:outline-none focus:border-pink-500" v-model="form.lastName" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th class="text-left">Position:</th>
                                <td class="px-4">
                                    <input class="w-full rounded-md py-2 px-3 focus:outline-none focus:border-pink-500" v-model="form.position" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th class="text-left">Date of Birth:</th>
                                <td class="px-4">
                                    <input class="w-full rounded-md py-2 px-3 focus:outline-none focus:border-pink-500" v-model="form.dateOfBirth" type="date">
                                </td>
                            </tr>
                            <tr>
                                <th class="text-left">Hire Date:</th>
                                <td class="px-4">
                                    <input class="w-full rounded-md py-2 px-3 focus:outline-none focus:border-pink-500" v-model="form.hireDate" type="date">
                                </td>
                            </tr>
                        </table>
                        <div class="text-right mt-4">
                            <button type="button" @click="goBack" class="btn ml-2 text-white bold bg-gray-400 px-4 py-2 rounded-md">Back</button>
                            <button type="submit" class="btn ml-2 text-white bold bg-gray-400 px-4 py-2 rounded-md">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
