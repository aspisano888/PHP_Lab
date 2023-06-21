

    
    const showModal = document.querySelector('.show-Modal');
    const modal = document.querySelector('.modal');
    const closeModal = document.querySelector('.close-modal')


    showModal.addEventListener('click', function() {
        modal.classList.remove('hidden')
    });

    closeModal.addEventListener('click', function() {
        modal.classList.add('hidden')
    });
