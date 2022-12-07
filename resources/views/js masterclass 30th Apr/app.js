// console.log('app.js is connected!!');


//es6 => variables, functions, DOM, Projects


//variables -> let and const

let email = 'ashish@codekaro.in';
email = 'yash@codekaro.in'
console.log(email);


const id = 12345;
console.log(id);


// function grinder(item){
//     console.log('grinding...', item);
// }

// grinder('tomatoes');
// grinder('onions and garlic');



// function add(num1, num2){
//     console.log(num1 + num2);
// }


// add(10, 20);
// add(20, 30);


function cube(num){
    console.log(num * num * num);
}


cube(5);
cube(10);


function changeColor(){
    document.getElementById('title').style.color = 'tomato';
}

let counter = 0;
function increment(){
    counter = counter + 1;
    document.getElementById('counter').innerHTML = counter
}


function decrement(){
    counter = counter - 1;
    document.getElementById('counter').innerHTML = counter
}



function reset(){
    counter = 0;
    document.getElementById('counter').innerHTML = counter
}

