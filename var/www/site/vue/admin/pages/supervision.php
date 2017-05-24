<?php include_once("vue/admin_header.php"); ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tables</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Source</th>
                                        <th>Destinataire</th>
                                        <th>Date_debut</th>
                                        <th>Date_fin</th>
                                        <th>Proto</th>
                                        <th>nom_projet</th>
                                    </tr>
                                </thead>
                                <tbody>
					<?php if(isset ($table)) {$l = count($table); for($i = 0; $i <= $l; $i++){echo $table[$i];}} ?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
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
