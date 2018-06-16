<?php
	include "conecta_mysql.inc";
	if(isset($_GET['msg'])){
			$msg = $_GET['msg'];
			switch($msg){
				case 1:
				?>
					<div class="message">
						<div class="alert alert-success">
							<a href="index.php" class="close" data-dismiss="alert">&times</a>
							Usuário cadastrado com sucesso.
						</div>
					</div>
				<?php
				break;
			}
		}
?>
