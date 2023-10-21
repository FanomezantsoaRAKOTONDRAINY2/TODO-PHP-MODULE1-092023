<?php
include('confing/app.php');
include('html/header.php');
include 'config.php';

?>
<!-- /.card-header -->

<div class="card-body">
	<form action="addItem.php" method="POST"> 
		<div class="input-group input-group-sm">
			<input type="text" class="form-control" name="intitule">
			<span class="input-group-append">
				<button type="submit" class="btn btn-info btn-flat" >+ </button>
			</span>
		</div> 
	</form>

	<?php

		// Lire les données du fichier
		$listeEt = [];
		if (file_exists($dataFilePath)) {
			$data = file_get_contents($dataFilePath);
			$lines = explode(PHP_EOL, $data);
			foreach ($lines as $line) {
				if (!empty($line)) {
					$listeEt[] = unserialize($line);
				}
			}
		}

	?>

	
	<form action="editItem.php" method="POST">
		<ul class="todo-list" data-widget="todo-list">
		<?php foreach ($listeEt as $etudiant) : ?>	 
		<li class="d-flex justify-content-between">	
			<!-- checkbox -->
				<div  class="icheck-primary d-inline ml-2 donnee">
					<input type="hidden" value="<?= $etudiant['id']; ?>" name="id">
					<input type="text" value="<?= $etudiant['intitule']; ?>" name="m_intitule" id="" class="champs form-control" style="display:none;width:100%">
					<strong class="aff"><?= $etudiant['intitule']; ?></strong>
				</div>
				<!-- General tools such as edit or delete-->
				<div class="tools">
					<button type="button" class="mod btn text-success" value="btn"><i class="fas fa-edit"></i></button>
					<button type="button" class="sup btn text-danger"><i class="fas fa-trash-alt"></i></button>
					<button type="submit" class="conf btn btn-primary" style="display:none">Ok</button>
				</div>
			</li>

			<?php endforeach; ?>
		</ul>
  </form>
</div>
<script type="text/javascript">
	var btnModifier = document.querySelectorAll('.mod')
	var btnSupprimer = document.querySelectorAll('.sup')
	var btnConfirmation = document.querySelectorAll('.conf')
	var champs = document.querySelectorAll('.champs')
	var donnee = document.querySelectorAll('.donnee')
	var aff = document.querySelectorAll('.aff')
	btnModifier.forEach((btnMod, index) => {
    	btnMod.addEventListener('click', () => {
		// Masquer le texte existant et afficher le champ de texte et le bouton de confirmation
			btnMod.style.display = 'none';
			btnSupprimer[index].style.display= 'none';
			aff[index].style.display= 'none';
			btnConfirmation[index].style.display= 'block';
			champs[index].style.display= 'block';
			donnee[index].style.width= '95%';
		});

		btnConfirmation[index].addEventListener('click', () => {
		// Mettre à jour le texte avec la valeur du champ de texte et masquer le champ de texte et le bouton de confirmation
			btnMod.style.display = 'block';
			btnSupprimer[index].style.display= 'block';
			aff[index].style.display= 'block';
			btnConfirmation[index].style.display= 'none';
			champs[index].style.display= 'none';
			donnee[index].style.width= '55%';
			aff[index].textContent=champs[index].value;
		
		// Mettre à jour la valeur du texte existant
		// const textElement = editButton.parentElement.parentElement.querySelector('.donnee strong');
		// textElement.textContent = newValue;
		});
	});
</script>
<?php
include('html/footer.php');
?>
