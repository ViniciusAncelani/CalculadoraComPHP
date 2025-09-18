let tds = document.querySelectorAll("button")
let visor = document.getElementById("visor")

tds.forEach(td =>{
    td.addEventListener("click", () => {
        if(visor.innerText === ""){
            visor.innerText = td
        } else {
            visor.innerText += td
        }
    })    
})