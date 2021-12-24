const startDobbel = document.querySelector('#startDobbel');

startDobbel.addEventListener('click', () => {
    let getName = document.querySelector('#name').value;
    if(!getName) getName = 'Gast';
    localStorage.setItem('name', getName);
});


