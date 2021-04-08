<?include("./phpParts/allowAuth.php");?>
<?

$lname = $_GET['lname'];

$stm = $pdo->query("SELECT sum(donation) from donors where lname='$lname' ");
$rows_total = $stm->fetchAll(PDO::FETCH_NUM);
foreach($rows_total as $row) {
    $totalDonation = $row[0];
}



$stm = $pdo->query("SELECT * FROM donors d inner join spca_branches s on d.mixedId=s.spca_branch_id where d.category='SPCA Branch' and d.lname='$lname'");
$rows_branches = $stm->fetchAll(PDO::FETCH_NUM);

$stm = $pdo->query("SELECT * FROM donors d inner join organizations s on d.mixedId=s.org_id where d.category='Rescue Organizations' and d.lname='$lname'");
$rows_organizations = $stm->fetchAll(PDO::FETCH_NUM);

$stm = $pdo->query("SELECT * FROM donors d inner join shelter s on d.mixedId=s.shelter_id where d.category='Shelters' and d.lname='$lname'");
$rows_shelters = $stm->fetchAll(PDO::FETCH_NUM);


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
                                    <div>All Donations by <?echo $lname?>
                                        <div class="page-title-subheading">All Donations by <?echo $lname?> Data can be found here
                                        </div>
                                    </div>
                                </div>
                                   </div>
                        </div>    
                            <div class="row">
                                 <div class="col-md-12 col-lg-12">
                                <div class="card mb-3 widget-content bg-midnight-bloom">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Total Donation</div>
                                            <div class="widget-subheading">Total Donations given by <?echo $lname?></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>$<?echo number_format($totalDonation)?></span></div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-12 col-lg-12">
                                    <div class="mb-3 card">
                                    <div class="card-header-tab card-header-tab-animation card-header">
                                        <div class="card-header-title">
                                            All Donations to SPCA Branches
                                        </div>
                                    </div>
                                    <div class="card-body" style="padding-top:0px;">
                                        <table class="mb-0 table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Donor ID</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Date Time</th>
                                                <th>Donation</th>
                                                <th>Donated To</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?
                                            foreach($rows_branches as $row) {
                                                ?>
                                                    <tr>
                                                        <td scope="row"><?echo $row[0]?></td>
                                                        <td scope="row"><?echo $row[1]?></td>
                                                        <td scope="row"><?echo $row[2]?></td>
                                                        <td scope="row"><?echo $row[3]?></td>
                                                        <td scope="row">$<?echo $row[4]?></td>
                                                        <td scope="row"><?echo $row[8]?></td>
                                                      
                                                    </tr>
                                                <?}
                                            
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-12 col-lg-12">
                                    <div class="mb-3 card">
                                    <div class="card-header-tab card-header-tab-animation card-header">
                                        <div class="card-header-title">
                                            All Donations to Rescue Organizations
                                        </div>
                                    </div>
                                    <div class="card-body" style="padding-top:0px;">
                                        <table class="mb-0 table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Donor ID</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Date Time</th>
                                                <th>Donation</th>
                                                <th>Donated To</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?
                                            foreach($rows_organizations as $row) {
                                                ?>
                                                    <tr>
                                                        <td scope="row"><?echo $row[0]?></td>
                                                        <td scope="row"><?echo $row[1]?></td>
                                                        <td scope="row"><?echo $row[2]?></td>
                                                        <td scope="row"><?echo $row[3]?></td>
                                                        <td scope="row">$<?echo $row[4]?></td>
                                                        <td scope="row"><?echo $row[8]?></td>
                                                       
                                                    </tr>
                                                <?}
                                            
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-12 col-lg-12">
                                    <div class="mb-3 card">
                                    <div class="card-header-tab card-header-tab-animation card-header">
                                        <div class="card-header-title">
                                            All Donations to Shelters
                                        </div>
                                    </div>
                                    <div class="card-body" style="padding-top:0px;">
                                        <table class="mb-0 table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Donor ID</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Date Time</th>
                                                <th>Donation</th>
                                                <th>Donated To</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?
                                            foreach($rows_shelters as $row) {
                                                ?>
                                                    <tr>
                                                        <td scope="row"><?echo $row[0]?></td>
                                                        <td scope="row"><?echo $row[1]?></td>
                                                        <td scope="row"><?echo $row[2]?></td>
                                                        <td scope="row"><?echo $row[3]?></td>
                                                        <td scope="row">$<?echo $row[4]?></td>
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
