<template>
    <Head title="Entri" />

    <!-- <AuthenticatedLayout> -->
    <div>
        <div
            id="FormGear-loader"
            class="bg-gray-200 dark:bg-[#181f30] h-screen"
        >
            <div class="overflow-hidden">
                <div
                    class="bg-gray-50 dark:bg-gray-900 dark:text-white h-screen shadow-xl text-gray-600 flex overflow-hidden text-sm font-montserrat rounded-lg dark:shadow-gray-800"
                >
                    <div
                        class="flex-grow flex flex-col bg-white dark:bg-gray-900 z-0"
                    >
                        <div class="relative md:flex max-h-screen">
                            <div class="block">
                                <div
                                    class="backdrop-blur-sm col-span-12 overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none flex justify-center items-center"
                                >
                                    <svg
                                        class="w-20 h-20 animate-spin"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 94.53 98.372"
                                    >
                                        <circle
                                            cx="23.536"
                                            cy="16.331"
                                            r="8.646"
                                            style="fill: #0a77e8"
                                        />
                                        <circle
                                            cx="8.646"
                                            cy="36.698"
                                            r="8.646"
                                            style="fill: #0f9af0"
                                        />
                                        <circle
                                            cx="8.646"
                                            cy="61.867"
                                            r="8.646"
                                            style="fill: #0f9af0"
                                        />
                                        <circle
                                            cx="23.536"
                                            cy="82.233"
                                            r="8.646"
                                            style="fill: #13bdf7"
                                        />
                                        <circle
                                            cx="47.361"
                                            cy="89.726"
                                            r="8.646"
                                            style="fill: #13bdf7"
                                        />
                                        <circle
                                            cx="71.282"
                                            cy="82.233"
                                            r="8.646"
                                            style="fill: #18e0ff"
                                        />
                                        <circle
                                            cx="85.884"
                                            cy="61.867"
                                            r="8.646"
                                            style="fill: #65eaff"
                                        />
                                        <circle
                                            cx="85.884"
                                            cy="36.698"
                                            r="8.646"
                                            style="fill: #b2f5ff"
                                        />
                                        <circle
                                            cx="47.361"
                                            cy="8.646"
                                            r="8.646"
                                            style="fill: #1d4970"
                                        />
                                    </svg>
                                </div>
                            </div>

                            <div
                                class="bg-gray-50 dark:bg-gray-900 w-72 flex-shrink-0 dark:border-gray-800 h-full p-5 space-y-4 absolute inset-y-0 left-0 transform -translate-x-full transition-transform duration-500 ease-in-out md:relative md:translate-x-0 z-10"
                            >
                                <div class="animate-pulse flex space-x-4">
                                    <div class="flex-1 space-y-3 py-1">
                                        <div
                                            class="w-full shadow-2xl rounded-lg"
                                        >
                                            <div
                                                class="h-32 bg-gray-200 rounded-tr-lg rounded-tl-lg animate-pulse"
                                            ></div>

                                            <div class="p-5">
                                                <div
                                                    class="h-20 px-2 rounded-lg bg-gray-200 animate-pulse mb-4"
                                                ></div>
                                                <div
                                                    class="h-6 rounded-lg bg-gray-200 animate-pulse mt-10 mb-4"
                                                ></div>
                                                <div
                                                    class="h-6 rounded-lg bg-gray-200 animate-pulse mt-4 mb-4"
                                                ></div>
                                                <div
                                                    class="h-6 rounded-lg bg-gray-200 animate-pulse mt-4 mb-4"
                                                ></div>

                                                <div
                                                    class="h-6 rounded-lg bg-gray-200 animate-pulse mt-10 mb-4"
                                                ></div>
                                                <div
                                                    class="h-6 rounded-lg bg-gray-200 animate-pulse mt-4 mb-4"
                                                ></div>
                                                <div
                                                    class="h-6 rounded-lg bg-gray-200 animate-pulse mt-4 mb-4"
                                                ></div>

                                                <div
                                                    class="h-6 rounded-lg bg-gray-200 animate-pulse mt-10 mb-4"
                                                ></div>
                                                <div
                                                    class="h-6 rounded-lg bg-gray-200 animate-pulse mt-4 mb-4"
                                                ></div>
                                                <div
                                                    class="h-6 rounded-lg bg-gray-200 animate-pulse mt-4 mb-4"
                                                ></div>

                                                <div
                                                    class="h-20 px-2 rounded-lg bg-gray-200 animate-pulse mt-10 mb-4"
                                                ></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="flex-grow bg-white dark:bg-gray-900 transition duration-500 ease-in-out z-10 p-5 space-y-4"
                            >
                                <div
                                    class="flex-grow bg-white dark:bg-gray-900"
                                >
                                    <div class="w-full mx-auto">
                                        <div
                                            class="animate-pulse flex space-x-4"
                                        >
                                            <div class="flex-1 space-y-3 py-1">
                                                <div
                                                    class="min-h-screen flex items-start justify-start bg-gradient-to-br from-gray-200 to-gray-400"
                                                >
                                                    <div
                                                        class="w-full bg-white shadow-2xl rounded-lg"
                                                    >
                                                        <div
                                                            class="h-32 bg-gray-200 rounded-tr-lg rounded-tl-lg animate-pulse"
                                                        ></div>

                                                        <div class="p-5">
                                                            <div
                                                                class="h-20 px-2 rounded-lg bg-gray-200 animate-pulse mb-4"
                                                            ></div>
                                                            <div
                                                                class="h-6 rounded-lg bg-gray-200 animate-pulse mt-10 mb-4"
                                                            ></div>
                                                            <div
                                                                class="h-6 rounded-lg bg-gray-200 animate-pulse mt-4 mb-4"
                                                            ></div>
                                                            <div
                                                                class="h-6 rounded-lg bg-gray-200 animate-pulse mt-4 mb-4"
                                                            ></div>

                                                            <div
                                                                class="h-6 rounded-lg bg-gray-200 animate-pulse mt-10 mb-4"
                                                            ></div>
                                                            <div
                                                                class="h-6 rounded-lg bg-gray-200 animate-pulse mt-4 mb-4"
                                                            ></div>
                                                            <div
                                                                class="h-6 rounded-lg bg-gray-200 animate-pulse mt-4 mb-4"
                                                            ></div>

                                                            <div
                                                                class="h-6 rounded-lg bg-gray-200 animate-pulse mt-10 mb-4"
                                                            ></div>
                                                            <div
                                                                class="h-6 rounded-lg bg-gray-200 animate-pulse mt-4 mb-4"
                                                            ></div>
                                                            <div
                                                                class="h-6 rounded-lg bg-gray-200 animate-pulse mt-4 mb-4"
                                                            ></div>

                                                            <div
                                                                class="h-6 rounded-lg bg-gray-200 animate-pulse mt-10 mb-4"
                                                            ></div>
                                                            <div
                                                                class="h-6 rounded-lg bg-gray-200 animate-pulse mt-4 mb-4"
                                                            ></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <AlertDialog v-model:open="open">
            <AlertDialogContent>
                <AlertDialogHeader>
                    <AlertDialogTitle>Simpan Hasil Entri?</AlertDialogTitle>
                    <AlertDialogDescription>
                        Anda dapat menyimpan sementara hasil entri dan keluar ke
                        halaman utama. Pastikan sudah menyimpan data sebelum
                        keluar.
                    </AlertDialogDescription>
                </AlertDialogHeader>
                <AlertDialogFooter>
                    <Button
                        id="close-dialog"
                        @click="open = false"
                        variant="outline"
                        class="m-1"
                        >Tutup</Button
                    >
                    <Button @click="saveForm" class="m-1">Simpan</Button>
                    <Button
                        @click="saveAndExit"
                        variant="destructive"
                        class="m-1"
                        >Keluar</Button
                    >
                </AlertDialogFooter>
            </AlertDialogContent>
        </AlertDialog>

        <AlertDialog v-model:open="timer">
            <AlertDialogContent>
                <Progress :model-value="progressBarWidth" />
                <AlertDialogHeader>
                    <AlertDialogTitle>Data berhasil disubmit</AlertDialogTitle>
                    <AlertDialogDescription>
                        Kuesioner akan tertutup otomatis dalam 5 detik. Atau
                        anda dapat menekan tombol keluar di bawah ini. Terima
                        kasih.
                    </AlertDialogDescription>
                </AlertDialogHeader>
                <AlertDialogFooter>
                    <Button @click="exit" variant="destructive" class="m-1"
                        >Keluar</Button
                    >
                </AlertDialogFooter>
            </AlertDialogContent>
        </AlertDialog>

        <div id="FormGear-root"></div>
    </div>
    <!-- </AuthenticatedLayout> -->
</template>

<script setup module>
// import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from "@inertiajs/vue3";
import { FormGear } from "../../form-gear.es";
// import "form-gear/dist/style.css"
import reference from "../FormGear/Agustus/reference.json";
import template from "../FormGear/Agustus/template.json";
import preset from "../FormGear/Agustus/preset.json";
import response from "../FormGear/Agustus/response.json";
import validation from "../FormGear/Agustus/validation.json";
import media from "../FormGear/Agustus/media.json";
import remark from "../FormGear/Agustus/remark.json";
import { computed, toRaw, onMounted, onBeforeUnmount, ref } from "vue";
import { usePage } from "@inertiajs/vue3";
import { router } from "@inertiajs/vue3";
import Toastify from "toastify-js";
import { debounce } from "lodash";
import {
    AlertDialog,
    AlertDialogAction,
    AlertDialogCancel,
    AlertDialogContent,
    AlertDialogDescription,
    AlertDialogFooter,
    AlertDialogHeader,
    AlertDialogTitle,
    AlertDialogTrigger,
} from "@/Components/ui/alert-dialog";
import { Button } from "@/Components/ui/button";
import { Progress } from "@/Components/ui/progress";

const open = ref(false);

const timer = ref(false);

const countdown = ref(5);

let redirectTimer = null;

const progressBarWidth = ref(0);

function loadFormGearCSS() {
    const link = document.createElement("link");
    link.rel = "stylesheet";
    link.href = "/css/style.css";
    link.id = "form-gear-css";
    document.head.appendChild(link);
}

function unloadFormGearCSS() {
    const link = document.getElementById("form-gear-css");
    if (link) {
        link.remove();
    }
}

onMounted(() => {
    loadFormGearCSS();
});

onBeforeUnmount(() => {
    unloadFormGearCSS();
});

const saveForm = () => {
    document.getElementById("simpan-form").click();
};

const saveAndExit = () => {
    saveForm();
    if (
        confirm("Apakah anda yakin ingin keluar? Pastikan sudah menyimpan data")
    ) {
        window.close(); // Close the tab after saving and confirmation
    }
};

const exit = () => {
    window.close(); // Close the tab after saving and confirmation
};

const toastInfo = (text, duration, position, bgColor) => {
    Toastify({
        text: text == "" ? locale.details.language[0].componentDeleted : text,
        duration: duration >= 0 ? duration : 500,
        gravity: "top",
        position: position == "" ? "right" : position,
        stopOnFocus: true,
        className: bgColor == "" ? "bg-blue-600/80" : bgColor,
        style: {
            background: "rgba(8, 145, 178, 0.7)",
            width: "400px",
        },
    }).showToast();

    document.dispatchEvent(new Event("toastShown"));
};

document.addEventListener("click", function (event) {
    if (
        event.target.id === "exit-btn" ||
        event.target.id === "exit-btn-sm" ||
        event.target.closest("#exit-btn") ||
        event.target.closest("#exit-btn-sm")
    ) {
        open.value = true;
        // Your exit logic here
    }
});

const page = usePage();
console.clear();
const prefill = computed(() => page.props.prefill).value;

// const region_id = computed(() => page.props.region_id).value;

const pcl = computed(() => page.props.pcl).value;

const nurt = computed(() => page.props.nurt).value;

const rawPcl = toRaw(pcl);

const rawNurt = toRaw(nurt);

const answers = computed(() => page.props.response).value;

if (answers != null) {
    response["answers"] = toRaw(answers);
}

preset["predata"] = prefill[Object.entries(prefill)[0][0]];

template["components"][0][0]["components"][0][16]["options"] = rawPcl;
// console.log({ rawPcl });

template["components"][0][0]["components"][0][7]["options"] = rawNurt;

defineProps({
    region: Object,
});

function debounceImmediate(func, wait) {
    let timeout;
    let firstCall = true;
    return function (...args) {
        const context = this;
        if (firstCall) {
            func.apply(context, args);
            firstCall = false;
            return;
        }
        clearTimeout(timeout);
        timeout = setTimeout(() => {
            func.apply(context, args);
        }, wait);
    };
}

function initForm(
    reference,
    template,
    preset,
    response,
    validation,
    media,
    remark
) {
    //variable config
    let config = {
        clientMode: 1, // 1 => CAWI ; 2 => CAPI ;
        //both token and baseUrl are used for data lookup from the api (for selectInput, multiselect Input, and listSelectInput)
        token: ``, //for authentication such as bearer token
        baseUrl: ``, // endpoint to fetch
        lookupKey: ``, //optional
        lookupValue: ``, //optional
        lookupMode: 1, // 1 => ONLINE ; 2 => OFFLINE
        username: "", //
        formMode: 1, // 1 => OPEN ; 2 => REJECTED ; 3 => SUBMITTED ; 4 => APPROVED ;
        initialMode: 2, // 1=> INITIAL ; 2 => ASSIGN
    };

    //some variables initiation
    var cameraFunction = null;
    var cameraGPSFunction = null;
    var responseGear = null;
    var mediaGear = null;
    var remarkGear = null;
    var principalGear = null;
    var referenceGear = null;

    let uploadHandler = function (setter) {};

    let offlineSearch = function (id, version, dataJson, setter) {
        let condition = JSON.stringify(dataJson);

        //here we use jquery to retrieve data from the local device
        $.ajax({
            url: `http://localhost:9090/lookup?id=${id}&v=${version}&c=${condition}`, //specify localhost endpoint to fetch
            type: "GET",
            crossDomain: true,
            dataType: "json",
            data: null,
            success: function (d) {
                console.log(d.hasil);
                setter(d);
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {},
        });
    };

    let GpsHandler = function (setter, isPhoto) {
        // console.log('camera handler', setter);
        // isPhoto = true,
        // cameraGPSFunction = setter;
        // openCameraGPS(isPhoto);
    };

    const setBearer = () => {
        return {
            method: "GET",
            headers: {
                "Content-Type": "application/json",
            },
        };
    };

    //custom function to trigger setResponsMobile to run from outside form-gear, you can custom the function name
    let mobileExit = (fun) => {
        // fun()
    };

    // pencarian online
    //online lookup
    let onlineSearch = async (url) =>
        await fetch(url, setBearer())
            .catch((error) => {
                return {
                    success: false,
                    data: {},
                    message: "500",
                };
            })
            .then((res) => {
                if (res.status === 200) {
                    let temp = res.json();
                    return temp;
                } else {
                    return {
                        success: false,
                        data: {},
                        message: res.status,
                    };
                }
            })
            .then((res) => {
                return res;
            });

    function removeUpdatedAt(obj) {
        const { updatedAt, ...rest } = obj;
        return rest;
    }

    let previousResponseGear = null;
    let isInCooldown = false;
    //function to get response, remark, principal and reference
    let setResponseMobile = debounce(function (res, rem, princ, ref) {
        isInCooldown = true;
        const currentRes = removeUpdatedAt(res);
        const previousRes = previousResponseGear
            ? removeUpdatedAt(previousResponseGear)
            : null;
        // console.log({ currentRes });

        if (JSON.stringify(currentRes) === JSON.stringify(previousRes)) {
            toastInfo(
                "Belum ada perubahan data untuk disimpan",
                3000,
                "",
                "bg-green-600/80"
            );
            return; // No changes, exit early
        }

        if (previousResponseGear == null) {
            previousResponseGear = JSON.parse(JSON.stringify(res)); // Deep copy copy
            // toastInfo('Belum ada perubahan data untuk disimpan', 3000, "", "bg-green-600/80");
            // return;
        }
        responseGear = res;

        const jmlArt =
            responseGear.answers.find((item) => item.dataKey === "jml_art")
                ?.answer ?? null;
        const nurt =
            responseGear.answers.find((item) => item.dataKey === "r110")
                ?.answer ?? null;

        const par = route().params;
        // console.log({ jmlArt, nurt });

        if (nurt != null && jmlArt != null) {
            if (route().current() == "form.edit") {
                axios
                    .post(
                        `/form/store/${par["region_id"]}/${par["id"]}`,
                        responseGear
                    )
                    .then((response) => {
                        const newId = response.data.id;
                        history.pushState(
                            {},
                            "",
                            `/form/edit/${par["region_id"]}/${newId}`
                        );
                        toastInfo(
                            "Data berhasil disimpan",
                            5000,
                            "",
                            "bg-blue-600/80"
                        );
                        previousResponseGear = JSON.parse(JSON.stringify(res)); // Deep copy copy
                    })
                    .catch((error) => {
                        toastInfo(
                            "Data gagal disimpan, silakan coba lagi",
                            5000,
                            "",
                            "bg-pink-600/80"
                        );
                    });
            } else {
                axios
                    .post(`/form/store/${par["region_id"]}`, responseGear)
                    .then((response) => {
                        const newId = response.data.id;
                        history.pushState(
                            {},
                            "",
                            `/form/edit/${par["region_id"]}/${newId}`
                        );
                        toastInfo(
                            "Data berhasil disimpan",
                            5000,
                            "",
                            "bg-blue-600/80"
                        );
                        previousResponseGear = JSON.parse(JSON.stringify(res)); // Deep copy copy
                    })
                    .catch((error) => {
                        toastInfo(
                            "Data gagal disimpan, silakan coba lagi",
                            5000,
                            "",
                            "bg-pink-600/80"
                        );
                    });
            }
        }
    }, 3000);

    let setSubmitMobile = function (res, rem, princ, ref) {
        responseGear = res;
        console.log({ res });

        const par = route().params;
        if (route().current() == "form.edit") {
            axios
                .post(
                    `/form/update/${par["region_id"]}/${par["id"]}`,
                    responseGear
                )
                .then((response) => {
                    const newId = response.data.id;
                    toastInfo(
                        "Data berhasil disubmit",
                        5000,
                        "",
                        "bg-blue-600/80"
                    );
                    timer.value = true;
                    const interval = 50; // Update every 50 milliseconds for smoother progress bar
                    const totalSteps = (countdown.value * 1000) / interval;
                    let currentStep = 0;
                    redirectTimer = window.setInterval(() => {
                        countdown.value -= interval / 1000;
                        currentStep++;
                        progressBarWidth.value =
                            (currentStep / totalSteps) * 100;
                        if (countdown.value <= 0) {
                            clearInterval(redirectTimer);
                        }
                    }, interval);
                    setTimeout(() => {
                        window.close();
                    }, 5500);
                })
                .catch((error) => {
                    toastInfo(
                        "Data gagal disubmit, silakan coba lagi",
                        5000,
                        "",
                        "bg-pink-600/80"
                    );
                });
        } else {
            axios
                .post(`/form/submit/${par["region_id"]}`, responseGear)
                .then((response) => {
                    const newId = response.data.id;
                    toastInfo(
                        "Data berhasil disubmit",
                        5000,
                        "",
                        "bg-blue-600/80"
                    );
                    timer.value = true;
                    const interval = 50; // Update every 50 milliseconds for smoother progress bar
                    const totalSteps = (countdown.value * 1000) / interval;
                    let currentStep = 0;
                    redirectTimer = window.setInterval(() => {
                        countdown.value -= interval / 1000;
                        currentStep++;
                        progressBarWidth.value =
                            (currentStep / totalSteps) * 100;
                        if (countdown.value <= 0) {
                            clearInterval(redirectTimer);
                        }
                    }, interval);
                    setTimeout(() => {
                        window.close();
                    }, 5500);
                })
                .catch((error) => {
                    toastInfo(
                        "Data gagal disubmit, silakan coba lagi",
                        5000,
                        "",
                        "bg-pink-600/80"
                    );
                });
        }
    };

    let openMap = function (koordinat) {
        // koordinat = koordinat
        // console.log('coordinat ', koordinat)
    };

    let form = FormGear(
        reference,
        template,
        preset,
        response,
        validation,
        media,
        remark,
        config,
        uploadHandler,
        GpsHandler,
        offlineSearch,
        onlineSearch,
        mobileExit,
        setResponseMobile,
        setSubmitMobile,
        openMap
    );

    return form;
}

const data = Promise.all([
    reference,
    template,
    preset,
    response,
    validation,
    media,
    remark,
]);

data.then(
    ([reference, template, preset, response, validation, media, remark]) => {
        let questions = [
            ...template.components[0][0].components[0],
            ...template.components[0][1].components[0],
            ...template.components[0][1].components[0][1].components[0],
            ...template.components[0][2].components[0],
        ];
        let questionType = {};
        questions.forEach((question) => {
            questionType[question.dataKey] = question.type;
        });
        // console.log({ questionType });
        // console.log({ questions });

        response.answers.forEach((answer, index) => {
            let dataKey = answer.dataKey;
            if (dataKey.includes("#")) {
                dataKey = dataKey.split("#")[0];
            }
            // console.log({ dataKey, tipe: questionType[dataKey] });
            // console.log({ dataKey, ass: questionType[dataKey] });

            let currentAnswer = response.answers[index].answer;
            if ([26, 27].includes(questionType[dataKey])) {
                if (!currentAnswer) {
                    return;
                }
                // currentAnswer = currentAnswer ? String(currentAnswer) : "";
                response.answers[index].answer = [
                    { label: currentAnswer, value: currentAnswer },
                ];
            }
            if (questionType[dataKey] == 17) {
                response.answers[index].answer = currentAnswer == "1";
            }
            if ([29].includes(questionType[dataKey])) {
                let currentAnswer = JSON.parse(response.answers[index].answer);
                if (!currentAnswer) {
                    currentAnswer = [];
                    return;
                }
                currentAnswer = Array.isArray(currentAnswer)
                    ? currentAnswer
                    : [currentAnswer];
                // console.log({ currentAnswer });

                currentAnswer = currentAnswer.map((value) => ({
                    label: value ? String(value) : value,
                    value: value ? String(value) : value,
                }));
                response.answers[index].answer = currentAnswer;
            }
        });
        // console.log({ answer: response.answers });

        initForm(
            reference,
            template,
            preset,
            response,
            validation,
            media,
            remark
        );
    }
);
</script>
