const result = document.querySelector('#result');
const trowD = document.querySelector('#trowD');
const allDobbel = document.querySelectorAll('.dobbelsteen');
const overlay = document.querySelector('.overlay');;
const endScore = document.querySelector('.overlay-inner #end-score');

let randomNum;
let sum = 0;

const dobbelClass = [
    '',
    'one',
    'two',
    'three',
    'four',
    'five',
    'six',
];

/* genereert random nummer */
function randomNumber(a, b)
{
    return Math.floor(Math.random() * b) + a;
}


/* dobbel steen functie die class toevoegd aan de div dobbelsteen */
let i = 0;
function Dice()
{
    randomNum = randomNumber(1, 6);
    allDobbel[i].classList.add(dobbelClass[randomNum]);
    allDobbel[i].classList.remove('op-0');
    sum += randomNum;
    result.textContent = 'Je score is: ' + sum;
    i++;
}

/* Event Listener voor dobbelsteen reveal */
trowD.addEventListener('click', () => {
    if(i < allDobbel.length) 
    {
        Dice();
    }
    if(i == 5)
    {
        postScoreToPhp();
        endScore.textContent = sum;
        setTimeout(() => {
            overlay.classList.remove('d-none');
        }, 2500);
        i++;
    }
});

/* Functie die een php file aanroept die de score opslaat*/
function postScoreToPhp()
{
    $.post('functions/saveScore.php',
    {
        name: localStorage.getItem('name'),
        sum: sum
    },
    function(data)
    {
        console.log('succes: ' + data);
    });
}

