<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, router, usePage, useRemember } from "@inertiajs/vue3";
import { computed, onMounted, watch } from "vue";
import axios from "axios";

const formData = useRemember(
    {
        kabupaten: null,
        kecamatan: null,
        desa: null,
        region_id: null,
    },
    "form-data"
);

const kecamatans = useRemember([], "kecamatans");
const desas = useRemember([], "desas");
const kabupatens = useRemember([], "kabupatens");

const kabupaten = computed({
    get: () => formData.value.kabupaten,
    set: (value) => (formData.value.kabupaten = value),
});

const kecamatan = computed({
    get: () => formData.value.kecamatan,
    set: (value) => (formData.value.kecamatan = value),
});

const desa = computed({
    get: () => formData.value.desa,
    set: (value) => (formData.value.desa = value),
});
const region_id = computed(() => {
    return `71${kabupaten.value}${kecamatan.value}${desa.value}`;
});

const page = usePage();

const destroy = async (region_id, id) => {
    if (confirm("Apakah anda yakin menghapus entrian ini?")) {
        try {
            const response = await axios.delete(
                route("form.destroy", { response: id })
            );
            router.get(
                route("form.index", { region_id: region_id }),
                {},
                {
                    preserveState: true,
                    preserveScroll: true,
                    only: ["data", "region"],
                }
            );
        } catch (error) {
            console.error("error request for delete data!");
        }

        // router.delete(route("form.destroy", { response: id }), {
        //     preserveState: true,
        //     preserveScroll: true,
        //     only: ["data", "region"],
        // });
    }
};

const loadKecamatans = async () => {
    try {
        const response = await axios.get(`/kecamatan/${kabupaten.value}`);
        kecamatans.value = response.data.kecamatan;
    } catch (error) {
        console.error("Error fetching kecamatan:", error);
    }
};

const loadDesas = async () => {
    try {
        formData.value.desa = null;
        formData.value.blok = null;
        const response = await axios.get(
            `/desa/${kabupaten.value}/${kecamatan.value}`
        );
        desas.value = response.data.desa;
    } catch (error) {
        console.error("Error fetching desa:", error);
    }
};

function submit() {
    router.visit(`/form/${region_id.value}`, {
        preserveState: true,
        preserveScroll: true,
        only: ["data", "region"],
    });
}

function entri() {
    // router.visit(`/form/create/${blok.value}`, {
    //     preserveState: true,
    //     preserveScroll: true,
    // });
    // console.log({ val: region_id.value });
    // return;
    window.open(`/form/create/${region_id.value}`, "_blank");
}

function edit(id) {
    const par = route().params;
    // console.log({ par });

    // router.visit(route('form.edit', { region_id: par['region_id'], id }), {
    //     preserveState: true,
    //     preserveScroll: true,
    // });
    // return;
    window.open(route("form.edit", { region_id: "7106020020", id }), "_blank");
}
onMounted(() => {
    let region = page.props.region;
    kabupatens.value = page.props.kabupatens;
    if (region) {
        kabupaten.value = region.kabupaten;
        loadKecamatans();
        kecamatan.value = region.kecamatan;
        loadDesas();
        desa.value = region.desa;
    }
});
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-8">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div
                    class="bg-white overflow-hidden shadow-sm sm:rounded-lg py-2"
                >
                    <form @submit.prevent="submit">
                        <div
                            class="form-group flex-col grid grid-cols-1 pb-2 gap-x-6 gap-y-8 sm:grid-cols-6"
                        >
                            <div class="sm:col-span-3 px-3 order-1 sm:order-1">
                                <label
                                    for="kabupaten"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    >KABUPATEN</label
                                >
                                <select
                                    v-model="kabupaten"
                                    name="kabupaten"
                                    @change="loadKecamatans"
                                    class="form-control sm:col-span-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    id="kabupatens"
                                >
                                    <option
                                        v-for="kabupaten in kabupatens"
                                        :value="kabupaten.id"
                                        :key="kabupaten.id"
                                    >
                                        {{ kabupaten.nama }}
                                    </option>
                                </select>
                            </div>
                            <div class="sm:col-span-3 px-3 order-2 sm:order-3">
                                <label
                                    for="kecamatan"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    >KECAMATAN</label
                                >
                                <select
                                    v-model="kecamatan"
                                    name="kecamatan"
                                    @change="loadDesas"
                                    class="form-control sm:col-span-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    id="kecamatans"
                                >
                                    <option
                                        v-for="kecamatan in kecamatans"
                                        :value="kecamatan.id"
                                        :key="kecamatan.id"
                                    >
                                        {{ kecamatan.nama }}
                                    </option>
                                </select>
                            </div>
                            <div class="sm:col-span-3 px-3 order-3 sm:order-2">
                                <label
                                    for="desa"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    >DESA</label
                                >
                                <select
                                    v-model="desa"
                                    name="desa"
                                    @change="submit"
                                    class="form-control sm:col-span-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    id="desas"
                                >
                                    <option
                                        v-for="desa in desas"
                                        :value="desa.id"
                                        :key="desa.id"
                                    >
                                        {{ desa.nama }}
                                    </option>
                                </select>
                            </div>
                            <div
                                class="sm:col-span-3 px-3 order-4 sm:order-4"
                            ></div>
                            <div class="sm:col-span-3 px-3 order-5 sm:order-5">
                                <button
                                    type="button"
                                    @click="submit"
                                    :disabled="!desa"
                                    class="disabled:bg-gray-200 focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                                >
                                    <font-awesome-icon
                                        icon="fa-solid fa-rotate"
                                        class="mr-2"
                                    />
                                    Reload Data
                                </button>

                                <button
                                    type="button"
                                    @click="entri"
                                    :disabled="!desa"
                                    class="disabled:bg-gray-200 focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                                >
                                    <font-awesome-icon
                                        icon="fa-solid fa-plus"
                                        class="mr-2"
                                    />Entri Baru
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="relative mt-3 overflow-x-auto">
                    <div v-if="page.props.region != null">
                        <p>
                            WILAYAH: [{{ page.props.region.provinsi
                            }}{{ page.props.region.kabupaten
                            }}{{ page.props.region.kecamatan
                            }}{{ page.props.region.desa }}]
                        </p>
                    </div>

                    <table
                        class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"
                    >
                        <thead
                            class="text-xs text-gray-700 uppercase bg-gray-300 dark:bg-gray-700 dark:text-gray-400"
                        >
                            <tr>
                                <th scope="col" class="px-6 py-3">No.</th>
                                <th scope="col" class="px-6 py-3">
                                    Nama Usaha
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nama Komersial
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status Dokumen
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status Submit
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Terakhir diupdate
                                </th>
                                <th scope="col" class="px-6 py-3">Edit</th>
                                <th scope="col" class="px-6 py-3">Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-if="page.props.data == ''">
                                <td
                                    colspan="8"
                                    scope="row"
                                    class="px-6 text-center py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                >
                                    Data tidak tersedia
                                </td>
                            </tr>
                            <tr
                                v-else
                                v-for="(datum, index) in page.props.data"
                                :key="datum.id"
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                            >
                                <th
                                    scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                >
                                    {{ index + 1 }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ datum.nama_usaha }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ datum.nama_komersial }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ datum.docState }}
                                </td>
                                <td class="px-6 py-4">
                                    <div v-if="datum.submit_status == '1'">
                                        Submitted
                                    </div>
                                    <div v-else>Open</div>
                                </td>
                                <td class="px-6 py-4">
                                    {{ datum.updated_at }}
                                </td>
                                <td class="px-6 py-4">
                                    <button
                                        @click="edit(datum.id)"
                                        type="button"
                                        :disabled="!desa"
                                        class="disabled:bg-gray-200 focus:outline-none text-xs font-medium text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-3 py-2 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                                    >
                                        <font-awesome-icon
                                            icon="fa-solid fa-pencil"
                                        />
                                    </button>
                                </td>
                                <td class="px-6 py-4">
                                    <button
                                        @click="destroy(region_id, datum.id)"
                                        type="button"
                                        :disabled="!desa"
                                        class="disabled:bg-gray-200 focus:outline-none text-xs font-medium text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
                                    >
                                        <font-awesome-icon
                                            icon="fa-solid fa-minus"
                                        />
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
