<template>
    <Head title="Dashboard"/>

    <BreezeGuestLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <o-field>
                            <o-input @input="search" v-model="searchQuery" expanded placeholder="Search Vulnerabilities" size="large"></o-input>
                            <Link href="/create" method="get">
                                <o-button size="large" variant="warning">
                                    Create New Entry
                                </o-button>
                            </Link>
                        </o-field>
                        <o-table
                            paginated
                            :per-page="10"
                            :data="vulnerabilities"
                            ref="table"
                            striped
                        >
                            <o-table-column field="title" label="Title" sortable v-slot="props">
                                {{ props.row.title }}
                            </o-table-column>
                            <o-table-column field="moreInfo" label="More Info" sortable v-slot="props">
                                <a target="_blank" :href="props.row.url">{{ props.row.url }}</a>
                            </o-table-column>
                            <o-table-column field="edit" label="Edit" sortable v-slot="props">
                                <Link :href="'/edit/' + props.row.id" preserve-scroll method="get">
                                    <o-button variant="primary">
                                        Edit
                                    </o-button>
                                </Link>
                            </o-table-column>
                            <o-table-column field="show" label="Show" sortable v-slot="props">
                                <Link :href="'/show/' + props.row.id" preserve-scroll method="get">
                                    <o-button variant="info">
                                        Show
                                    </o-button>
                                </Link>
                            </o-table-column>
                            <o-table-column field="delete" label="Delete" sortable v-slot="props">
                                <Link :href="'/destroy/' + props.row.id" preserve-scroll method="delete">
                                    <o-button variant="danger">
                                        Delete
                                    </o-button>
                                </Link>
                            </o-table-column>
                        </o-table>
                    </div>
                </div>
            </div>
        </div>
    </BreezeGuestLayout>
</template>

<script>
import BreezeGuestLayout from '@/Layouts/Guest.vue'
import {Head} from '@inertiajs/inertia-vue3';
import {Link} from '@inertiajs/inertia-vue3'

export default {
    components: {
        BreezeGuestLayout,
        Head,
        Link
    },
    props: {
        vulnerabilities: {
            type: Array,
            default: []
        },
    },
    data() {
        return {
            searchQuery: '',
        }
    },
    methods: {
        search() {
            this.$inertia.get("/search",
                {query: this.searchQuery},
                {preserveState: true, preserveScroll: true, only: ['vulnerabilities']});
        },
    },
}
</script>
