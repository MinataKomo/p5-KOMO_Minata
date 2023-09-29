const text = document.querySelector(".btn .circle");

const textResult = "";

text.innerText.split("").forEach((value, index, )=>{

        textResult += `<span> style="transform: translateY(-50%) rotateZ(${(index+1) * 10}deg)"> ${char} </span>`
    
});

text.innerHTML = textResult;