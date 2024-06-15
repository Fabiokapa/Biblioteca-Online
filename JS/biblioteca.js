
const btn_novo = document.getElementById("novo")
const modal_novo = document.querySelector(".conteiner-modal")
    btn_novo.addEventListener('click', () =>{

        modal_novo.classList.add('mostrar')

        modal_novo.addEventListener('click', (e) =>{
            if(e.target.id == 'fechar'){
                modal_novo.classList.remove('mostrar')
            }
        })
    })
    