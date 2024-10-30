const deleteButtons = document.querySelectorAll('.delete-button');

deleteButtons.forEach(button => {
    button.addEventListener('click', function (event) {
        const userConfirmed = confirm('Are you sure you want to delete this comic?');

        if (!userConfirmed) {
            event.preventDefault();
        }

    });
})
