<div class="container">
  
    <form>
        <div class="mb-3 input-group">
          <span class="input-group-text">Nome</span>
          <!--Incluir Atributo "name" nos inputs que vão ser enviados para salvar no banco de dados -->        
          <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome da empresa">
        </div>
        
        
        <div class="mb-3 input-group">
        <span class="input-group-text">Estado</span>
        <select class="form-select" aria-label="Default select example" id="estados" onchange="carregarCidadesIBGE()">
            <option selected>Selecione um estado</option>
        </select>
        </div>            

        <div class="mb-3 input-group">
        <span class="input-group-text">Cidade</span>
        <select class="form-select" aria-label="Default select example" id="cidade" name="cidade">
            <option selected>Selecione uma cidade</option>
        </select>
        </div>            



        <div class="mb-3 input-group">
            
            <!--Incluir os inputs que serão utilizados para enviar a geolocalização  -->        
            <input type="hidden" id="geolocalizacao" name="geolocalizacao" onchange="carregarCidadesIBGE()">

            <span class="input-group-text">Endereço</span>
            <input type="text" class="form-control" id="endereco" placeholder="Digite o endereço da empresa">
            <button type="button"  onclick="obterCoordenadasGoogleMaps()" class="input-group-text">Localizar</button>
        </div>
        <?php require 'pages/empresa/mapa.php'; ?>

        <!--botão para salvar o formulário -->        
        <div class="mb-3 input-group  justify-content-end ">
           <button type="submit"  class="input-group-text ">Salvar</button>
        </div>            
        
    </form>    
</div>
<script>
     function carregarEstadosIBGE(){
        let url = 'https://servicodados.ibge.gov.br/api/v1/localidades/estados';
        fetch(url)
            .then(response => response.json())
            .then(data => {
                    if (data!=null && data.length>0) {

                        
                        var selectEstado = document.getElementById("estados");
                        data.forEach(element => {
                            
                            let option = document.createElement('option');
                            option.value= element['sigla'];
                            option.innerText = element['nome'];
                            selectEstado.appendChild(option);

                        });


                    }
            }).catch(error => {
                    console.log("Erro carregando estados "+error);
                });;
     } 


     carregarEstadosIBGE();


     function carregarCidadesIBGE(estado){
        var selectEstado =document.getElementById("estados");
        var estado =selectEstado.value;
        let url = 'https://servicodados.ibge.gov.br/api/v1/localidades/estados/'+estado+'/municipios';
        fetch(url)
            .then(response => response.json())
            .then(data => {
                    if (data!=null && data.length>0) {
                        var selectCidade = document.getElementById("cidade");

                        selectCidade.innerHTML = "";


                        data.forEach(element => {
                            let option = document.createElement('option');
                            option.value=element['id'];                          
                            option.innerText = element['nome'];
                            selectCidade.appendChild(option);

                        });


                    }
            }).catch(error => {
                    console.log("Erro carregando estados "+error);
                });;
        
     }
     carregarCidadesIBGE();
</script>    