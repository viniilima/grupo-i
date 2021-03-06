// Constantes e vars
const formContainerEl = document.querySelector('.form-container');
const submitBtn = document.getElementById('submit');

// Functions
function callDescarte() {
    
    // Coloca todos os dados dos inputs em um objeto
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
            if(this.responseText == 'empty-input') {
                errorMessage('Erro! Algum dado não foi inserido :(');
                return;
            }
            const successMsg = document.createElement('span');
            successMsg.innerHTML = 'Acervo descartado com sucesso :)';
            successMsg.classList.add('success-msg')
            formContainerEl.appendChild(successMsg);
        }
        else if(this.status == 201 && this.readyState == 4) {
            const response = JSON.parse(this.responseText);
            const data = new Date(response.data_devolucao);
            errorMessage('O acervo ' + response.id + ' está emprestado no momento.' 
                        + ' A data de devolução prevista é ' + formatDate(data.getDate()) + '/' + formatDate((data.getMonth()+1)) 
                        + '/' + data.getFullYear());
        }
    }
    xhr.open('POST', 'php/descarte.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.send('data=' + (JSON.stringify(data)));
}

function errorMessage(msg) {
    const errorMsg = document.createElement('div');
    const formContainerEl = document.querySelector('.form-container');
    errorMsg.classList.add('error-msg');
    errorMsg.innerHTML = msg;
    formContainerEl.appendChild(errorMsg);
}

function formatDate(value) {
    return value < 10 ? '0' + value : value;
}

// Event Listeners
submitBtn.addEventListener('click', callDescarte);
