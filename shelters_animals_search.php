<?include("./phpParts/allowAuth.php");?>
<?
$stm = $pdo->query("select * from adoptions a INNER join shelter s on a.mixedId=s.shelter_id INNER join animals an on a.animal_id=an.animal_id where a.adoped_by_category='shelter' and a.animal_id not in(select animal_id from shelter_adoptions sa where sa.shelter_id=s.shelter_id)");
$rows = $stm->fetchAll(PDO::FETCH_NUM);
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
                                    <div>All Animals at Shelters
                                        <div class="page-title-subheading">All Animals at Shelters Data can be found here
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
                                            All Animals at Shelters
                                        </div>
                                    </div>
                                    <div class="card-body" style="padding-top:0px;">
                                        <table class="mb-0 table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Animal-ID</th>
                                                <th>Category</th>
                                                <th>Shelter-ID</th>
                                                <th>Shelter-Name</th>
                                                <th>Adopt</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?
                                            foreach($rows as $row) {
                                                ?>
                                                    <tr>
                                                        <td scope="row"><?echo $row[1]?></td>
                                                        <td scope="row"><?echo $row[13]?></td>
                                                        <td scope="row"><?echo $row[5]?></td>
                                                        <td scope="row"><?echo $row[6]?></td>
                                                        <td>
                                                            <?if(true){?>
                                                            <a href="./shelter_animal_adopt_family.php?animal_id=<?echo $row[1]?>&shelter_id=<?echo $row[5]?>" class="btn-shadow mr-3 btn btn-success">
                                                                <i class="fa fa-forward"></i>
                                                                Family
                                                            </a>
                                                            <?}else{echo "Adopted";}?>
                                                        </td>
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
