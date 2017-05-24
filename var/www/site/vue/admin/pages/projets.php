<?php include_once("vue/admin_header.php"); ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Utilisateurs</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Gestion des utilisateurs
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
			<form role="form" action="index.php?page=admin_projets" method="post" class="login-form">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Selection</th>
                                        <th>Mail</th>
                                        <th>Etat</th>
                                        <th>Validation</th>
                                        <th>Nom de projet</th>
                                    </tr>
                                </thead>
                                <tbody>
					<?php if(isset ($table)) {$l = count($table); for($i = 0; $i <= $l; $i++){echo $table[$i];}} ?>
                                </tbody>
                            </table>
			<div class="form-group">
  			<label for="sel1">Votre choix :</label>
  				<select class="form-control" id="sel1" name="choix">
    					<option value="modifier">Modifier</option>
    					<option value="supprimer">Supprimer</option>
  				</select>
			</div>
				<button type="submit" class="btn btn-default">Valider</button>
                            <!-- /.table-responsive -->
			</form>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
<?php include_once("vue/admin_tail.php"); ?>
