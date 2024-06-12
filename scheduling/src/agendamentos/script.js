document.addEventListener('DOMContentLoaded', (event) => {

    const minTime = "09:00";
    // Define o horário mínimo como o horário atual
    document.getElementById('data').setAttribute('min', minTime);

    const maxTime = "17:00";
    document.getElementById('data').setAttribute('max', maxTime);
});