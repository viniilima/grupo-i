const submitBtn = document.getElementById('submit');

// Functions
function callDescarte() {
    const inputs = document.querySelectorAll('.descarte-data');
    let data = {};
    for(let input of inputs) {
        if(input.value == '') return;
        data[input.name] = input.value;
    }

    // Ajax
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if(this.status == 200 && this.readyState == 4) {
            const successMsg = document.createElement('span');
            const formContainerEl = document.querySelector('.form-container');
            successMsg.innerHTML = 'Acervo descartado com sucesso :)';
            successMsg.classList.add('success-msg')
            formContainerEl.appendChild(successMsg);
        }
    }
    xhr.open('POST', 'php/descarte.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.send('data=' + (JSON.stringify(data)));
}

// Event Listeners
submitBtn.addEventListener('click', callDescarte);
