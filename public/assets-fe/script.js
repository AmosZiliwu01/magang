/* Calendar */
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        events: '/api/jadwal-ibadah',

        eventRender: function(info) {
            if (info.event.extendedProps.isHighlighted) {  // Check your conditions for highlight
                info.el.style.backgroundColor = 'lightgreen';  // Set highlight color
            }
        },

        eventDidMount: function(info) {
            // Optional: Customize event appearance
            info.el.style.border = '1px solid black';
        },
    });

    calendar.render();
});

/*End Calender*/

/* Script Fetch Data */
/*Untuk mengambil data dari API*/
async function fetchData(url) {
    try {
        const response = await fetch(url);
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        const data = await response.json();
        return data;
    } catch (error) {
        console.error('Fetch error:', error);
        displayErrorMessage('An error occurred while fetching data. Please try again later.');
    }
}

/*End Script Fetch Data*/
