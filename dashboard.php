<?include("./phpParts/allowAuth.php")?>
<?

$stm = $pdo->query("SELECT count(*) from adoptions where year(adoption_date)='2018' ");
$rows_total = $stm->fetchAll(PDO::FETCH_NUM);
foreach($rows_total as $row) {
    $nAdoptions = $row[0];
}

$stm = $pdo->query("SELECT * from adoptions a inner JOIN shelter s on a.mixedId=s.shelter_id where a.adoped_by_category='shelter'");
$rows_adoptions = $stm->fetchAll(PDO::FETCH_NUM);


?>
<!doctype html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <?include("./phpParts/head.php")?>
</head>
<body>
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
                                    <div>Dashboard - Animal Rescue Application
                                        <div class="page-title-subheading">This is your a dashboard for Animal Rescue Application.
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    <a href="./spca_branch_add_animal.php" class="btn-shadow mr-3 btn btn-success">
                                                                Add Animal to SPCA Branch
                                                            </a>
                                                            
                                    <a href="./" class="btn-shadow mr-3 btn btn-danger">
                                        Logout
                                    </a>
                                </div>    </div>
                        </div>            
                        <div class="row">
                            <div class="col-md-6 col-xl-12">
                                <div class="card mb-3 widget-content bg-midnight-bloom">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">2018 - Animal Rescues</div>
                                            <div class="widget-subheading">Animals that were rescued during 2018 (by any rescue organization)</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span><?echo $nAdoptions?></span></div>
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
                                            Animals that went from the SPCA directly to a shelter
                                        </div>
                                    </div>
                                    <div class="card-body" style="padding-top:0px;">
                                        <table class="mb-0 table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Animal ID</th>
                                                <th>Donation</th>
                                                <th>Adoption Date</th>
                                                <th>Shelter ID</th>
                                                <th>Shelter Name</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?
                                            foreach($rows_adoptions as $row) {
                                                ?>
                                                    <tr>
                                                        
                                                        <td scope="row"><?echo $row[1]?></td>
                                                        <td scope="row">$<?echo $row[2]?></td>
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
<script type="text/javascript" src="./assets/scripts/main.js"></script>
</body>
</html>
