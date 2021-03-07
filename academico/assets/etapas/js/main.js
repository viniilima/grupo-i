const editBtns = document.querySelectorAll('.edit-btn');
const deleteBtns = document.querySelectorAll('.delete-btn');

// Functions
function callEdit(id, valor) {
    location.replace('editar/?id=' + id + '&valor=' + valor);
}

function callDelete(id) {
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if(this.status == 200 && this.readyState == 4) {
            location.reload();
            successMsg('Etapa ' + id + ' deletada com sucesso :)');
        }
    }
    xhr.open('POST', 'deletar/delete_etapa.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.send('id=' + id);
}

// Event listeners

// Edit
for(let btn of editBtns) {
    btn.addEventListener('click', function(e) {
        callEdit((e.target).parentElement.dataset.id, (e.target).parentElement.dataset.valor);
    });
}

// Delete
for(let btn of deleteBtns) {
    btn.addEventListener('click', function(e) {
        callDelete((e.target).parentElement.dataset.id);
    });
}

function successMsg(msg) {
    const listContainerEl = document.querySelector('.list-container');
    const successMsg = document.createElement('span');
    successMsg.innerHTML = msg;
    successMsg.classList.add('success-msg')
    listContainerEl.appendChild(successMsg);
}
