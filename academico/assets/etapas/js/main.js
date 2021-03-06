const editBtns = document.querySelectorAll('.edit-btn');
const deleteBtns = document.querySelectorAll('.delete-btn');

// Functions
function callEdit(id, valor) {
    location.replace('editar/?id=' + id + '&valor=' + valor);
}

// Event listeners

for(let btn of editBtns) {
    btn.addEventListener('click', function(e) {
        callEdit((e.target).parentElement.dataset.id, (e.target).parentElement.dataset.valor);
    });
}
