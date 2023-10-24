<div class="container">
  
    <form>
        <div class="mb-3 input-group">
          <span class="input-group-text">Nome</span>
          <input type="text" class="form-control" id="nome" placeholder="Digite o nome da empresa">
        </div>


        <div class="mb-3 input-group">
            <span class="input-group-text">Endereço</span>
            <input type="text" class="form-control" id="endereco" placeholder="Digite o endereço da empresa">
            <button type="button"  onclick="obterCoordenadasGoogleMaps()" class="input-group-text">Localizar</button>
        </div>
        <?php require 'pages/empresa/mapa.php'; ?>
        
    </form>    
</div>