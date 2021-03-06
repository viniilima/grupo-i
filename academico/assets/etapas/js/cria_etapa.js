const form = document.querySelector('form');
const submitBtn = document.getElementById('submit');

submitBtn.addEventListener('click', function() {

    // Coloca todos os dados dos inputs em um objeto
    const inputs = document.querySelectorAll('.etapas-data');
    let data = {};
    for(let input of inputs) {
        if(input.value == '') return;
        data[input.name] = input.value;
    }

    // Ajax
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if(this.status == 200 && this.readyState == 4) {
            location.replace('../');
        }
    }
    xhr.open('POST', 'criar_etapa.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.send('data=' + (JSON.stringify(data)));
});
