<?php include_once("vue/admin_header.php"); ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Modification</h1>
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
			<form role="form" action="index.php?page=admin_modifs" method="post" class="login-form">
			<div class="form-group input-group">
                        	<span class="input-group-addon">Mail</span>
                                <input type="text" class="form-control" name="mail" placeholder="<?php echo $infos[0]; ?>">
				<input type="hidden" name="mail_actuel" value="<?php echo $infos[0]; ?>">
                        </div>
			<fieldset disabled>
                            <div class="form-group">
                            	<label for="disabledSelect">Etat</label>
                                <input class="form-control" id="disabledInput" type="text" placeholder="<?php echo $infos[1]; ?>" disabled>
                            </div>
                            <div class="form-group">
                            	<label for="disabledSelect">Validation</label>
                                <input class="form-control" id="disabledInput" type="text" placeholder="<?php echo $infos[2]; ?>" disabled>
                            </div>
			</fieldset>
			<div class="form-group input-group">
                        	<span class="input-group-addon">Projet</span>
                                <input type="text" class="form-control" name="projet" placeholder="<?php echo $infos[3]; ?>">
                        </div>
				<button type="submit" class="btn btn-default">Modifier</button>
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
