 <?php
 ob_start();
    //session_start();
    if($_SESSION['nip']!=""){
    $link=koneksi_db();
 
    //$queryPhoto=mysql_query("SELECT photo
                        //FROM pengguna
                        //WHERE nik = '$nik'
                        //LIMIT 1");
    //$dataPhoto=mysql_fetch_array($queryPhoto);
?>
 <!-- footer content -->
                <footer>
                    <center><div>
                        <p class="pull-right"><i class="fa fa-paw"></i> KUD SARWA MUKTI |
                            <span>KESEHATAN HEWAN | <?php echo date('Y')?></span>
                        </p>
                    </div></center>
                    <div class="clearfix"></div>
                </footer>
<!-- /footer content -->
 <div id="custom_notifications" class="custom-notifications dsp_none">
            <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
            </ul>
            <div class="clearfix"></div>
            <div id="notif-group" class="tabbed_notifications"></div>
</div>

<?php
}
else {
header("Location:../../belum_login.php");
}
ob_end_flush();
?>