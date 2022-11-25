document.addEventListener("DOMContentLoaded", ()=> {



    let grado = document.getElementById("grado-tab")
    let postgrado = document.getElementById("postgrado-tab")
    let contiuada = document.getElementById("education-tab")
    let tab = document.querySelectorAll(".tab-pane")

    

    // console.log( tab[0].classList);


    grado.addEventListener("click", ()=>{
        tab[0].classList.contains("active") ? "" : tab[0].classList.add("active")
        tab[1].classList.remove("active")
        tab[2].classList.remove("active")

        

    })

    postgrado.addEventListener("click", ()=>{
        tab[1].classList.contains("active") ? "": tab[1].classList.add("active")
        tab[0].classList.remove("active")
        tab[2].classList.remove("active")
       
    })

    contiuada.addEventListener("click", ()=>{
        tab[2].classList.contains("active") ? "": tab[2].classList.add("active")
        tab[0].classList.remove("active")
        tab[1].classList.remove("active")
       
    })


    // console.log("hola desde tabs.js ");

})