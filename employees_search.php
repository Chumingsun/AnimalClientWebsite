<?include("./phpParts/allowAuth.php");?>
<?
$stm = $pdo->query("SELECT * FROM employees e inner join spca_branches s on e.mixed_id=s.spca_branch_id where e.category='SPCA Branch'");
$rows_branches = $stm->fetchAll(PDO::FETCH_NUM);

$stm = $pdo->query("SELECT * FROM employees e inner join organizations s on e.mixed_id=s.org_id where e.category='Rescue Organizations'");
$rows_organizations = $stm->fetchAll(PDO::FETCH_NUM);

$stm = $pdo->query("SELECT * FROM employees e inner join shelter s on e.mixed_id=s.shelter_id where e.category='Shelters'");
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
                                    <div>All Employees
                                        <div class="page-title-subheading">All Employees Data can be found here
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
                                            Employees of SPCA Branches
                                        </div>
                                    </div>
                                    <div class="card-body" style="padding-top:0px;">
                                        <table class="mb-0 table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Last Name</th>
                                                <th>Phone</th>
                                                <th>Address</th>
                                                <th>Is Owner</th>
                                                <th>Employee Of</th>
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
                                                        <td scope="row"><?echo $row[7]?></td>
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
                                            Employees of Rescue Organizations
                                        </div>
                                    </div>
                                    <div class="card-body" style="padding-top:0px;">
                                        <table class="mb-0 table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Last Name</th>
                                                <th>Phone</th>
                                                <th>Address</th>
                                                <th>Is Owner</th>
                                                <th>Employee Of</th>
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
                                                        <td scope="row"><?echo $row[7]?></td>
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
                                            Employees of Shelters
                                        </div>
                                    </div>
                                    <div class="card-body" style="padding-top:0px;">
                                        <table class="mb-0 table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Last Name</th>
                                                <th>Phone</th>
                                                <th>Address</th>
                                                <th>Is Owner</th>
                                                <th>Employee Of</th>
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
                                                        <td scope="row"><?echo $row[7]?></td>
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
