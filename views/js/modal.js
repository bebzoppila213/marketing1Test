const buttonsModelOpen = document.querySelectorAll('.btn-modal');
const modal = document.querySelector('.modal');
const modlaInner = document.querySelector('.modal__inner');

function modalOpen() {
    modal.classList.add('modal-open')
}

function modalClsoe() {
    modal.classList.remove('modal-open')
}

buttonsModelOpen.forEach(btn => {
    btn.addEventListener('click', () => {
        modalOpen()
    })
})

modal.addEventListener('click', () => {
    modalClsoe()
})

modlaInner.addEventListener('click', (event) => {
    event.stopPropagation();
})