const buttons = document.querySelectorAll('.dropdown-item.buttons');

buttons.forEach(button => {
    button.addEventListener('click', (event) => {
        let action = button.dataset.action
        event.preventDefault()
        document.getElementById(action).submit()
    })
});
