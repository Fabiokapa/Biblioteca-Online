
const buscar = document.getElementById("buscar")
const valor = document.getElementById("nome-livro")

          buscar.addEventListener('click', (e)=>{
              e.preventDefault();

              var nome = valor.value
                  $.ajax({
                      type: "POST",
                      url: "../pesquisa/livros.php",
                      data: { nomeLivro: nome },
                      success: function (data) {
                          $("#resultado_livro").html(data);
                      }
              });
              
          })
