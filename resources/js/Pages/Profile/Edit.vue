<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import MyLayout from '@/Layouts/AuthenticatedLayout.vue';
import DeleteUserForm from './Partials/DeleteUserForm.vue';
import UpdatePasswordForm from './Partials/UpdatePasswordForm.vue';
import UpdateProfileInformationForm from './Partials/UpdateProfileInformationForm.vue';
import { Head } from '@inertiajs/vue3';
import Mylayout from '@/Layouts/MyLayout.vue';

defineOptions({
    layout: Mylayout,
});

defineProps({
    mustVerifyEmail: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});


</script>

<template>
    <Head title="Profile" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Profile</h2>
        </template>

        <div class="py-3">
            <div class="max-w-2xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <div class="p-2 bg-white shadow sm:rounded-lg">
             <UpdateProfileInformationForm
               :must-verify-email="mustVerifyEmail"
               :status="status"
               class="max-w-xl"
            />
      </div>

      <div class="p-2 bg-white shadow sm:rounded-lg">
        <UpdatePasswordForm class="max-w-xl" />
      </div>

      <div class="p-2 bg-white shadow sm:rounded-lg sm:col-span-2">
        <DeleteUserForm class="max-w-xl" />
      </div>
    </div>
  </div>
        </div>
    </AuthenticatedLayout>
</template>

<style scoped>
.grid {
  display: grid;
  gap: 1.5rem;
}
.sm\:grid-cols-2 {
  grid-template-columns: repeat(2, minmax(0, 1fr));
}
</style>