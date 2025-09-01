const _operators = [
    {value: '+', name: 'Addition'},
    {value: '-', name: 'Subtraction'},
    {value: '/', name: 'Division'},
    {value: '*', name: 'Multiplication'},
]

window.onload = () => {
    operators.innerHTML = "";

    _operators.forEach((item)=>{
        const option = document.createElement('option');
        option.value = item.value;
        option.text = item.name;
        operators.appendChild(option)
    })
}

const display = document.getElementById('display');
compute.onclick = calculate;


function calculate(){
    let num1 = document.getElementById('num1').value;
    num1 = Number(num1);
    let num2 = document.getElementById('num2').value;
    num2 = Number(num2);

    const operator = document.querySelector('#operators').value;
    let postData = new URLSearchParams({num1, num2, operator})

    fetch('callculate.php', {
        method: "POST",
        body: postData
    } )
    .then(res => res.text())
    .then(data => display.innerHTML = (data))
    .catch(err => alert(err))
}

