<?php
include('confing/app.php');
include('html/header.php');
?>
<!-- /.card-header -->
<div class="card-body">
	<div class="input-group input-group-sm">
		<input type="text" class="form-control">
		<span class="input-group-append">
			<button type="button" class="btn btn-info btn-flat" >go</button>
		</span>
	</div>

    <ul class="todo-list" data-widget="todo-list">
	 
	  <li>
	
		<!-- checkbox -->
			<div  class="icheck-primary d-inline ml-2">
				<input type="checkbox" value="" name="todo1" id="todoCheck1">
				<label for="todoCheck1"></label>
			</div>
			<!-- todo text -->
			<span class="text">Design a nice theme</span>
			<!-- Emphasis label -->
			<small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small>
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
