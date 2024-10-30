const deleteButtons = document.querySelectorAll('.delete-button');

deleteButtons.forEach(button => {
    button.addEventListener('click', function (event) {
        const comicName = event.target.getAttribute('data-comic-name');
        const userConfirmed = confirm(`Are you sure you want to delete ${comicName} ?`);

        if (!userConfirmed) {
            event.preventDefault();
        }

    });
})
