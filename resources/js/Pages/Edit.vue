<template>
    <Head title="Edit"/>

    <BreezeGuestLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Edit
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <VulnerabilityForm :errors="errors" :existing="vulnerability" buttonLabel="Save"
                                           :route="'/update/' + vulnerability.id">
                        </VulnerabilityForm>
                    </div>
                </div>
            </div>
        </div>
    </BreezeGuestLayout>
</template>

<script>
import BreezeGuestLayout from '@/Layouts/Guest.vue'
import {Head} from '@inertiajs/inertia-vue3';
import VulnerabilityForm from "@/Components/VulnerabilityForm";

export default {
    components: {
        BreezeGuestLayout,
        Head,
        VulnerabilityForm
    },
    props: {
        vulnerability: {
            type: Object,
            default: null
        },
        errors: {
            type: Object,
            default: null
        }
    },
}
</script>
