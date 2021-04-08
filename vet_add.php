<?include("./phpParts/allowAuth.php");?>
<?
if(isset($_POST["date"])){
    
    $date = $_POST["date"];
    $name = $_POST["name"];
    $condition = $_POST["condition"];
    $weight = $_POST["weight"];
    $animalId = $_POST["animalId"];

    $pdo->exec("INSERT INTO `vet`(`animal_id`, `vet_date`, `vet_name`, `conditions`, `weight`) VALUES ('$animalId', '$date', '$name', '$condition', '$weight')");
    
    ?><script type="text/javascript">
        window.location = "./vet_search.php";
    </script><?
    
}

$stm = $pdo->query("SELECT * FROM animals where status!='adopted'");
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
                                    <div>Initiate Vet Visit
                                        <div class="page-title-subheading">Initiate Vet Visit
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="page-title-actions">
                                    <input type="submit" class="btn-shadow mr-3 btn btn-success" value="Initiate"/>
                                </div>
                                
                                   </div>
                        </div>    
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body"><h5 class="card-title">Details</h5>
                                            
                                                <div class="form-row">
                                                    
                                                    <div class="col-md-3">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Vet Date</label><input name="date" id="exampleEmail11" placeholder="Vet Date" type="date" class="form-control" required></div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Vet Name</label><input name="name" id="exampleEmail11" placeholder="Vet Name" type="text" class="form-control" required></div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Condition</label><input name="condition" id="exampleEmail11" placeholder="Condition" type="text" class="form-control" required></div>
                                                    </div>
                                                                                                        <div class="col-md-3">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Weight</label><input name="weight" id="exampleEmail11" placeholder="Weight" type="text" class="form-control" required></div>
                                                    </div>
                                                    
                                                    
                                                    <div class="col-md-3">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Animal </label>
                                                        <select class="mb-2 form-control" name="animalId">
                                                            <?foreach($rows as $row) {?>
                                                            <option value="<?echo $row[0]?>"><?echo $row[0]?></option>
                                                            <?}?>
                                                        </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                    
                                                </div>
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
