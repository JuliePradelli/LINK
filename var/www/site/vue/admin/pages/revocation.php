<?php include_once("vue/admin_header.php"); ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Revocation</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Gestion des certificats
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
			<form role="form" action="index.php?page=admin_revocation" method="post" class="login-form">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Sélection</th>
                                        <th>Nom de projet</th>
                                        <th>Membre(s)</th>
                                    </tr>
                                </thead>
                                <tbody>
					<?php if(isset ($table)) 
					{
						$l = count($table); 
						for($i = 0; $i < $l; $i++)
						{
							echo "<tr><td><input type=\"radio\" name=\"radio\"></td><td>".$table[$i]."</td><td>";
							$le = count($tablebis[$i]);
							for($j = 0; $j <= $le; $j++)
							{
								echo $tablebis[$i][$j]." ";
							}
							echo "</td></tr>";
						}
					} ?>
                                </tbody>
                            </table>
				<button type="submit" class="btn btn-default">Révoquer</button>
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
