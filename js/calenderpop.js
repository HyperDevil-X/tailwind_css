function toggleCalendar() {
    const calendar = document.getElementById('calendar');
    const icon = document.getElementById('calendar-toggle-icon');
    if (calendar.style.display === 'none' || calendar.style.display === '') {
        calendar.style.display = 'block';
        icon.classList.remove('fa-calendar-alt');
        icon.classList.add('fa-calendar-times');
    } else {
        calendar.style.display = 'none';
        icon.classList.remove('fa-calendar-times');
        icon.classList.add('fa-calendar-alt');
    }
}
