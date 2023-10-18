<?php
include('confing/app.php');
include('html/header.php');

?>
<!-- /.card-header -->
<div class="card-body">
	<form action="addItem.php" method="POST"> 
		<div class="input-group input-group-sm">
			<input type="text" class="form-control" name=" intitule">
			<span class="input-group-append">
				<button type="submit" class="btn btn-info btn-flat" >+ </button>
			</span>
		</div> 
	</form>
    <ul class="todo-list" data-widget="todo-list">	 
	  <li>	
		<!-- checkbox -->
			<div  class="icheck-primary d-inline ml-2">
				<?php
					// Le chemin vers le fichier que vous souhaitez lire
					$filePath = "liste.txt";

					// Ouvrir le fichier en mode lecture
					$handle = fopen($filePath, 'r');

					// Vérifier si l'ouverture du fichier a réussi

					if ($handle) {				
					// Lire le contenu du fichier
						$fileContent = fread( $handle,filesize($filePath));

					// Fermer le fichier				
					fclose($handle);

					echo "<pre>$fileContent</pre>";
					} else {
						echo "Impossible d'ouvrir le fichier en mode lecture.";
					}



				
						// // Le chemin vers le fichier que vous souhaitez effacer
						// $filePath = "liste.txt";

						// // Effacer le contenu du fichier en écrivant une chaîne vide
						// file_put_contents($filePath, '');

						// echo "Le contenu du fichier a été effacé avec succès :$filePath";
					?>
					
			</div>
			<!-- General tools such as edit or delete-->
			<div class="tools">
				<i class="fas fa-edit"></i>
				
				<a href="confing/app.php" class="button"><i class="fas fa-trash-alt"></i>r</a>
			</div>
		</li>
  </ul>
</div>
<?php
include('html/footer.php');
?>
