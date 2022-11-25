document.addEventListener("DOMContentLoaded", function() {
    window.addEventListener('scroll', function() {
        var navbar = document.getElementById("navbar");
        // var topbar = document.getElementById("top-bar");
        if (window.scrollY > 50) {
            // topbar.style.visibility = "hidden"
            document.getElementById('navbar_top').classList.add('fixed-top');
            navbar_height = document.querySelector('.navbar').offsetHeight;
            document.body.style.paddingTop = navbar_height + 'px';
            $('.navbar').addClass('scrolled');

        } else {
            // topbar.style.visibility = "visible"
            document.getElementById('navbar_top').classList.remove('fixed-top');
            $('.navbar').removeClass('scrolled');
            document.body.style.paddingTop = '0';
        }


    });

    let divInvisible = document.getElementById("InvisibleDIv")
    let pPadre = document.getElementById("pContainerPadre") 
    pPadre.innerHTML = divInvisible.textContent
    // console.log(divInvisible.textContent);

    // pPadre.

    

    let cuadritos = document.querySelectorAll(".div-explandible")
    let cuadritosVacios = document.querySelectorAll(".cuavacio")
    
    let numidDivExpan = 1

    cuadritos.forEach(cuadrito => {

      cuadrito.classList.add("cuadrito" + numidDivExpan)

      numidDivExpan += 1

    })



    let numidcua = 1

    cuadritosVacios.forEach(cuadritovacio => {

      cuadritovacio.id = "div-center" + numidcua
      numidcua == 4 ? numidcua = 1 : numidcua += 1
      
    })


    
    // let cuadritosInside = document.querySelector(".div-expandible-centro")
    let cua1 = cuadritos[0]
    let cua2 = cuadritos[1]
    let cua3 = cuadritos[2]
    let cua4 = cuadritos[3]





    // console.log(cua1id.id);

    // cua1.id = determinarID(cua1id.id, cuadritosVacios[0].textContent)
    // cua2.id = determinarID(cua2id.id, cuadritosVacios[1].textContent)
    // cua3.id = determinarID(cua3id.id, cuadritosVacios[2].textContent)
    // cua4.id = determinarID(cua4id.id, cuadritosVacios[3].textContent)

    



    let hijo 
    let subhij1
    let subhij2
  




     cua1.addEventListener("mouseover", ()=> {
        hijo = cua1.children[1]
       subhij1 = hijo.children[0]
        subhij1.classList.add("contenido-oculto")
        subhij2 = hijo.children[1]
        subhij2.classList.remove("contenido-oculto")
        subhij2.classList.add("contenido-mostrado")
        

        hijo.classList.add("div-expandible-centro-contraido")
        hijo.classList.remove("div-expandible-centro")

    })

    cua1.addEventListener("mouseout", ()=> {
        hijo = cua1.children[1]

        subhij1.classList.remove("contenido-oculto")
        subhij2 = hijo.children[1]
        subhij2.classList.remove("contenido-mostrado")

        subhij1.classList.add("contenido-mostrado")
        subhij2 = hijo.children[1]
        subhij2.classList.add("contenido-oculto")
        
        hijo.classList.add("div-expandible-centro")
        hijo.classList.remove("div-expandible-centro-contraido")
        
    })



    cua2.addEventListener("mouseover", ()=> {
        hijo = cua2.children[1]
        subhij1 = hijo.children[0]
        subhij1.classList.add("contenido-oculto")
        subhij2 = hijo.children[1]
        subhij2.classList.remove("contenido-oculto")
        subhij2.classList.add("contenido-mostrado")
        

        hijo.classList.add("div-expandible-centro-contraido")
        hijo.classList.remove("div-expandible-centro")

    })

    cua2.addEventListener("mouseout", ()=> {
        hijo = cua2.children[1]

        subhij1.classList.remove("contenido-oculto")
        subhij2 = hijo.children[1]
        subhij2.classList.remove("contenido-mostrado")

        subhij1.classList.add("contenido-mostrado")
        subhij2 = hijo.children[1]
        subhij2.classList.add("contenido-oculto")
        
        hijo.classList.add("div-expandible-centro")
        hijo.classList.remove("div-expandible-centro-contraido")
        
    })


    cua3.addEventListener("mouseover", ()=> {
        hijo = cua3.children[1]
        subhij1 = hijo.children[0]
        subhij1.classList.add("contenido-oculto")
        subhij2 = hijo.children[1]
        subhij2.classList.remove("contenido-oculto")
        subhij2.classList.add("contenido-mostrado")
        

        hijo.classList.add("div-expandible-centro-contraido")
        hijo.classList.remove("div-expandible-centro")

    })

    cua3.addEventListener("mouseout", ()=> {
        hijo = cua3.children[1]

        subhij1.classList.remove("contenido-oculto")
        subhij2 = hijo.children[1]
        subhij2.classList.remove("contenido-mostrado")

        subhij1.classList.add("contenido-mostrado")
        subhij2 = hijo.children[1]
        subhij2.classList.add("contenido-oculto")
        
        hijo.classList.add("div-expandible-centro")
        hijo.classList.remove("div-expandible-centro-contraido")
        
    })


    cua4.addEventListener("mouseover", ()=> {
      hijo = cua4.children[1]
      subhij1 = hijo.children[0]
      subhij1.classList.add("contenido-oculto")
      subhij2 = hijo.children[1]
      subhij2.classList.remove("contenido-oculto")
      subhij2.classList.add("contenido-mostrado")
      

      hijo.classList.add("div-expandible-centro-contraido")
      hijo.classList.remove("div-expandible-centro")

  })

  cua4.addEventListener("mouseout", ()=> {
      hijo = cua4.children[1]

      subhij1.classList.remove("contenido-oculto")
      subhij2 = hijo.children[1]
      subhij2.classList.remove("contenido-mostrado")

      subhij1.classList.add("contenido-mostrado")
      subhij2 = hijo.children[1]
      subhij2.classList.add("contenido-oculto")
      
      hijo.classList.add("div-expandible-centro")
      hijo.classList.remove("div-expandible-centro-contraido")
      
  })



    
    


    let cards = document.querySelectorAll(".card")
    let numid = 1
    cards.forEach(card => {

        card.classList.add("card" + numid)
        numid += 1

    })

    

    


});





// function determinarID(idelemento, idBBDD) {
    
//     let elementoReturn 

//     switch(idelemento) {
//         case "div-center1":
//             elementoReturn = determinarIDnuevo(idBBDD)
//           break;
//         case "div-center2":
//             elementoReturn = determinarIDnuevo(idBBDD)
//           break;
        
//         case "div-center3":
//             elementoReturn = determinarIDnuevo(idBBDD)
//           break;
        
//           case "div-center4":
//             elementoReturn = determinarIDnuevo(idBBDD)
//           break;
        

//         default:
//           // code block
//       }

//     return elementoReturn

// }


// function determinarIDnuevo(idBBDD){
    
//   let elementoReturn

//   switch(idBBDD) {
//       case "INFORMATICA":
//         elementoReturn = "INFORMATICA" 
//         break;
//       case "PSICOLOGIA":
//           elementoReturn = "PSICOLOGIA" 
//         break;
      
//       case "CONTABILIDAD":
//           elementoReturn = "CONTABILIDAD" 
//           break;
//       case "MERCADEO":
//             elementoReturn = "MERCADEO" 
//           break;

//       case "ADMINISTRACION DE EMPRESAS":
//         elementoReturn = "EMPRESA" 
//         break;
      
//       case "BIOANALISIS":
//           elementoReturn = "BIOANALISIS" 
//         break;

//       case "DERECHO":
//         elementoReturn = "DERECHO" 
//         break;
      
//       case "AGRONOMIA":
//           elementoReturn = "AGRONOMIA" 
//         break;

//       case "ENFERMERIA":
//         elementoReturn = "ENFERMERIA" 
//         break;
      
//       case "EDUACACION":
//           elementoReturn = "EDUACACION" 
//         break;
      
//         default:
//         // code block
//   }

//     return elementoReturn

// }


