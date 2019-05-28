<html>
<body>
<div class="container">
	 
	
	<div class="row">
		<div class="col-sm-12">
			&nbsp;
		</div>
	</div>

	<div class="row">
		<div class="col-sm-12">
			<h2>Cadastro de Produto</h2>
		</div>
	</div>
	
	<div class="row">
		<div class="col-sm-12">
			<form action="controllerNoticia.php" method="post">
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
					    <label for="nome">Nome:</label>
					    <input type="text" class="form-control" id="nome" name="nome">
			  		</div>
				</div>
			</div><br>
				
			<div class="row">
				<div class="col-sm-6">
			  		<div class="form-group"	>
			   		 <label for="descricao">Descrição:</label>
			    			<textarea class="form-control" id="descricao" name="descricao">
			    </textarea>
			  		</div>
				</div>	
				</div><br>
			
			<div class="row">
				<div class="col-sm-6">
				  <div class="form-group">
				    <label for="valor_venda">valor da venda:</label>
				    <input type="text" class="form-control" id="valor_venda" name="valor_venda">
				  </div>
				</div>
	
	
			
			
			  <button type="submit" class="btn btn-primary">CADASTRAR</button>
			</form> 	
		</div><!--fecha coluna principal-->
	</div><!--fecha linha principal-->
</div><!--fecha container-->


</body>
</html>