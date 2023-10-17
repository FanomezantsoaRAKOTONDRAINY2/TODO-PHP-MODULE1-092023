<?php
include('confing/app.php');
include('html/header.php');

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
    <ul class="todo-list" data-widget="todo-list">	 
	  <li>	
		<!-- checkbox -->
			<div  class="icheck-primary d-inline ml-2">

			</div>
			<!-- General tools such as edit or delete-->
			<div class="tools">
				<i class="fas fa-edit"></i>
				<i class="fas fa-trash-alt"></i>
			</div>
		</li>
  </ul>
</div>
<?php
include('html/footer.php');
?>
