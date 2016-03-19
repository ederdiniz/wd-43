  <?php include("partial/head.php")?>
  <?php include("partial/cabecalho.php")?>


<div class="jumbotron">Sua Assinatura</div>
<div class="panel panel-default">
    <header class="panel-heading">  </header>
    

    <div class="panel-body">
        <form class="col-sm-8 ">
        <fieldset class="col-sm-6">
        <legend>Dados pessoais</legend>
            <div class="form-group">
                <label for="N">Nome</label>
                <input type="text" id="N" name="n" class="form-control"/>
            </div>

            <label >
                <input type="checkbox" />
                SPAM
            </label>
        </fieldset>
         <fieldset class="col-sm-6">
            <legend>Dados pessoais</legend>
            <div class="form-group">
            <label> Cartao 
            <input pattern="\d{2}\.\d{3}" class="form-control"></input> 
            </label> 
            </div>
             <div class="form-group">
            <label> Bandeira 
            <select class="form-control">
                <option>Visa</option>
                <option>Master</option>
            </select>
             </label>
             </div>
              <div class="form-group">
              <label>Mes Vencimento</label>
            <input type="month" class="form-control"></input>
            </div>
            <input type="submit" class="form-control btn btn-primary"></input>
        </fieldset>





        </form>

        
    </div>
</div>


  <?php include("partial/rodape.php")?>
  <script type="text/javascript" src="js/lab.js"></script>
