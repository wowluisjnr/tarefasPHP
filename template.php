<html>
<head>

	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

		<title>Gerenciador de Tarefas</title>
	</head>
	<body>
		<div class="container-fluid">
	<h1>Gerenciador de Tarefas</h1>
	
<div class="row">
  <div class="col-md-4">
  	<form>
  	<legend>Nova tarefa</legend>
		<div class="form-group">
			
			<label for="tarefa">
				Tarefa:</label>
				<input type="text" name="nome" class="form-control" >
			
			
		
			<label>	Descrição (Opcional):</label>
				<textarea name="descricao" class="form-control" rows="2"></textarea>
			
		
			<label>Prazo (Opcional):</label>
				<input type="date" name="prazo" class="form-control" >
			
		

		<legend>Prioridade:</legend>
				<label class="radio-inline">
					<input type="radio" name="prioridade" value="baixa" checked />
					Baixa
				</label>
			
				<label class="radio-inline">
					<input type="radio" name="prioridade" value="media" />
					Média
				</label>
			
				<label class="radio-inline">
					<input type="radio" name="prioridade" value="alta" />
					Alta
				</label>
			
			<div class="checkbox">
			  <label>
			  	Tarefa concluída:
			    <input type="checkbox" name="concluida" value="sim">
			    
			  </label>
			 </div>
		</div>
			<input class="btn btn-default" type="submit" value="Cadastrar" />
			</form>
  	</div>
  		
		 
	
	<div class="col-md-8">
  		
	<table class="table table-striped">
		<tr>
			<th>Tarefa</th>
			<th>Descricao</th>
			<th>Prazo</th>
			<th>Prioridade</th>
			<th>Concluída</th>

		</tr>
			<?php foreach ($lista_tarefas as $tarefa) : ?>
		<tr>
			<td><?php echo $tarefa['nome']; ?> </td>
			<td><?php echo $tarefa['descricao']; ?> </td>
			<td><?php echo $tarefa['prazo']; ?> </td>
			<td><?php echo $tarefa['prioridade']; ?> </td>
			<td><?php echo $tarefa['concluida']; ?> </td>
		</tr>
		<?php endforeach; ?>
	</table>

			
  </div>
</div>
	

	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

	</body>
</html>