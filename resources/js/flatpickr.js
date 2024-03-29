import flatpickr from "flatpickr";
import { Japanese } from "flatpickr/dist/l10n/ja.js"


flatpickr("#date", {
    "locale": Japanese,
    minDate: "today",
    maxDate: new Date().fp_incr(30),
});

flatpickr("#calendar", {
    "locale": Japanese,
    maxDate: new Date().fp_incr(30),
});


const setting = {
    "locale": Japanese,
    enableTime: true,
    noCalendar: true,
    dateFormat: "H:i",
    time_24hf: true,
    minTime: "9:00",
    maxTime: "20:00",
    minuteIncrement: 30,
}

flatpickr("#start_time", setting);
flatpickr("#end_time", setting);
