<template>
    <Head title="Show" />

    <BreezeGuestLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Show
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h1 class="font-semibold text-xl text-gray-800 pb-4">{{ vulnerability.title }}</h1>
                        <p>
                            {{ vulnerability.description }}
                        </p>
                        <div class="mt-4" v-if="vulnerability.url">
                            <a target="_blank" :href="vulnerability.url">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </BreezeGuestLayout>
</template>

<script>
import BreezeGuestLayout from '@/Layouts/Guest.vue'
import { Head } from '@inertiajs/inertia-vue3';

export default {
    components: {
        BreezeGuestLayout,
        Head,
    },
    props: {
        vulnerability: {
            type: Object,
            default: null
        },
    },
}
</script>
