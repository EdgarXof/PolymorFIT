<script >

import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head, usePage} from '@inertiajs/vue3';
import {ArrowRightIcon, ArrowLeftIcon} from '@heroicons/vue/24/solid'
import axios from "axios";
import FullCalendar from "@fullcalendar/vue3";
import dayGridPlugin from "@fullcalendar/daygrid";
import timeGrid from "@fullcalendar/timegrid";
import interactionPlugin from "@fullcalendar/interaction";
import {onMounted, ref} from "vue";
export default {
    setup() {
        const {props} = usePage();
        const showModal = ref(false);
        const selectedEvent = ref({});
        // Fetch events on component mount

        // Your existing return statement, updated to include events ref
        return {

            methods : {

            },
            // Other data and methods
            calendarOptions: {

                plugins: [dayGridPlugin, timeGrid, interactionPlugin],
                initialView: 'dayGridMonth',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                events: props.events,
                eventClick: function(info) {
                    alert('Workout: ' + info.event.title);
                },
               dateClick: function(info) {
                        alert('Clicked on: ' + info.dateStr);
                    },
            },
        };
    },

    name: 'Calendar',
    components: {
        AuthenticatedLayout,
        Head,
        ArrowRightIcon,
        ArrowLeftIcon,
        FullCalendar,

    },

};

</script>

<template>
    <Head title="Calendar" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Calendar</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                    <FullCalendar class="bg-white  py-12  max-w-7xl mx-auto sm:px-6 lg:px-8" :options="calendarOptions" />

                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
