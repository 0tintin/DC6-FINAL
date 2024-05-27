<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import MyLayout from '@/Layouts/MyLayout.vue';
import { Head, Link, usePage } from '@inertiajs/vue3';

defineOptions({
    layout: MyLayout
});

const { props } = usePage();
const employee = props.employee;
</script>

<template>
    <Head title="Employee Details" />

    <AuthenticatedLayout>

        <div class="py-12">
            <h1 class="max-w-2xl mx-auto sm:px-6 lg:px-8 text-4xl font-bold mb-4">Details</h1>

            <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="mb-4">
                            <h3 class="text-lg font-medium">First Name:</h3>
                            <p>{{ employee.first_name }} {{ employee.firstName }}</p>
                        </div> 
                        <div class="mb-4">
                            <h3 class="text-lg font-medium">Last Name:</h3>
                            <p>{{ employee.first_name }} {{ employee.lastName }}</p>
                        </div>
                        <div class="mb-4">
                            <h3 class="text-lg font-medium">Position</h3>
                            <p>{{ employee.position }}</p>
                        </div>
                        <div class="mb-4">
                            <h3 class="text-lg font-medium">Date Of Birth:</h3>
                            <p>{{ employee.first_name }} {{ employee.dateOfBirth }}</p>
                        </div>
                        <div class="mb-4">
                            <h3 class="text-lg font-medium">Hire Date:</h3>
                            <p>{{ employee.first_name }} {{ employee.hireDate }}</p>
                        </div>
                        <div class="flex justify-end space-x-4">
                            <Link href="/employee" class="btn ml-2 text-white bold bg-gray-400 px-4 py-2 rounded-md">Back</Link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>