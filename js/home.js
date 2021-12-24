const startDobbel = document.querySelector('#startDobbel');

// event listener voor de button op home page die een naam aan localstorage geeft
startDobbel.addEventListener('click', () => {
    let getName = document.querySelector('#name').value;
    if(!getName) getName = 'Gast';
    localStorage.setItem('name', getName);
});


