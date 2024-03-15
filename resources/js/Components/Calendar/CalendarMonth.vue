<template> <!-- Calendrier venant de Solomon_04 -->

</template>

<script>
import {ArrowRightIcon, ArrowLeftIcon} from '@heroicons/vue/24/solid'

export default {
    name: "Calendar",
    components: {
        ArrowRightIcon,
        ArrowLeftIcon
    },
    data() {
        return {
            month_names: [
                "January",
                "February",
                "March",
                "April",
                "May",
                "June",
                "July",
                "August",
                "September",
                "October",
                "November",
                "December"
            ],
            month: "",
            year: "",
            no_of_days: [],
            emptyDays: [],
            days: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],

            events: [],

            themes: [
                {
                    value: "blue",
                    label: "Blue Theme"
                },
                {
                    value: "red",
                    label: "Red Theme"
                },
                {
                    value: "yellow",
                    label: "Yellow Theme"
                },
                {
                    value: "green",
                    label: "Green Theme"
                },
                {
                    value: "purple",
                    label: "Purple Theme"
                }
            ],

            openModal: false
        };
    },
    methods: {
        fetchWorkoutLogs() {
            const startDate = new Date(this.year, this.month, 1).toISOString().slice(0, 10);
            const endDate = new Date(this.year, this.month + 1, 0).toISOString().slice(0, 10);

            axios.get(`/workout-logs?start_date=${startDate}&end_date=${endDate}`)
                .then(response => {
                    this.events = response.data.map(log => ({
                        event_date: new Date(log.date),
                        event_title: log.workout_exercise.workout.name,
                        event_theme: 'blue' // You can adjust the theme based on your logic
                    }));
                })
                .catch(error => console.error("There was an error fetching the workout logs", error));
        },

        changeMonth(step) {
            if (this.month + step > 11) {
                this.month = 0;
                this.year++;
            } else if (this.month + step < 0) {
                this.month = 11;
                this.year--;
            } else {
                this.month += step;
            }

            this.getNoOfDays();
            this.fetchWorkoutLogs(); // Fetch logs for the new month
        },

        initDate() {
            let today = new Date();
            this.month = today.getMonth();
            this.year = today.getFullYear();
        },

        isToday(date) {
            const today = new Date();
            const d = new Date(this.year, this.month, date);

            return today.toDateString() === d.toDateString();
        },

        // Show what's planned for that day
        showDayModal(day) {
            console.log(this.month, day);
        },

        getNoOfDays() {
            let i;
            let daysInMonth = new Date(this.year, this.month + 1, 0).getDate();

            // find where to start calendar day of week
            let dayOfWeek = new Date(this.year, this.month).getDay();
            let emptyDaysArray = [];
            for (i = 1; i <= dayOfWeek; i++) {
                emptyDaysArray.push(i);
            }

            let daysArray = [];
            for (i = 1; i <= daysInMonth; i++) {
                daysArray.push(i);
            }

            this.emptyDays = emptyDaysArray;
            this.no_of_days = daysArray;
        }
    },
    mounted() {
        this.initDate();
        this.getNoOfDays();
        this.fetchWorkoutLogs();
        console.log(this.events);
    }
}
</script>

<style scoped>

</style>
