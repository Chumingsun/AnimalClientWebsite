<?include("./phpParts/allowAuth.php");?>
<?
$stm = $pdo->query("select * from driver d INNER JOIN organizations o on d.organization_id=o.org_id");
$rows_branches = $stm->fetchAll(PDO::FETCH_NUM);


?>

<!doctype html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <?include("./phpParts/head.php")?>
</head>
<body>
    <form class="" method="post" action="">
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <?include("./phpParts/upperbar.php")?>
        
        <div class="app-main" style="padding-top:0px;">
            <?include("./phpParts/leftbar.php")?>
                   <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-rocket icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>All Drivers
                                        <div class="page-title-subheading">All Drivers Data can be found here
                                        </div>
                                    </div>
                                </div>
                                   </div>
                        </div>    
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="mb-3 card">
                                    <div class="card-header-tab card-header-tab-animation card-header">
                                        <div class="card-header-title">
                                            All Drivers
                                        </div>
                                    </div>
                                    <div class="card-body" style="padding-top:0px;">
                                        <table class="mb-0 table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Driver ID</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Phone</th>
                                                <th>License Plate</th>
                                                <th>License Type</th>
                                                <th>Rescue Organization ID</th>
                                                <th>Rescue Organization Name</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?
                                            foreach($rows_branches as $row) {
                                                ?>
                                                    <tr>
                                                        <td scope="row"><?echo $row[0]?></td>
                                                        <td scope="row"><?echo $row[2]?></td>
                                                        <td scope="row"><?echo $row[3]?></td>
                                                        <td scope="row">$<?echo $row[4]?></td>
                                                        <td scope="row"><?echo $row[5]?></td>
                                                        <td scope="row"><?echo $row[6]?></td>
                                                        <td scope="row"><?echo $row[7]?></td>
                                                        <td scope="row"><?echo $row[8]?></td>
                                                        
                                                       
                                                    </tr>
                                                <?}
                                            
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                </div>
                            </div>
                    </div>
                    <?include("./phpParts/footer.php")?>
        </div>
    </div>
    </form>
<script type="text/javascript" src="./assets/scripts/main.js"></script>
</body>
</html>
