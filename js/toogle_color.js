const body = document.querySelector("body"),
        sidebar = body.querySelector("nav"),
        toggle = body.querySelector(".toggle"),
        modeswitch = body.querySelector(".toggle-switch"),
        modetext = body.querySelector(".mode-text");

        modeswitch.addEventListener("click",() =>{
            body.classList.toggle("dark");

            if(body.classList.contains("dark")){
                modetext.innerText = "Claro";
            }else{
                modetext.innerText = "Escuro";   
            }
        }); //Para quando o modeswitch for acionado, será selecionado o documento contendo o body e assim sua classe dark será criada    

        toggle.addEventListener("click",() =>{
            sidebar.classList.toggle("close");
        });

const contact = document.querySelector(".right"),
        modebox = body.querySelector(".toggle-switch");

        modebox.addEventListener("click",() =>{
            right.classList.toggle("dark");
        });

   



    
    
