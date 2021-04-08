<?include("./phpParts/allowAuth.php");?>
<?
if(isset($_POST["animalId"]) && isset($_POST["arrival"])){
    
    $animalId = "CA-".$_POST["animalId"];
    $arrival = $_POST["arrival"];
    $departure = $_POST["departure"];
    $category = $_POST["category"];
    $spca_branch = $_POST["spca_branch"];

    $pdo->exec("INSERT INTO `animals`(`animal_id`, `arrival_date`, `departure_date`, `category`, `spca_branch_id`, `status`) VALUES ('$animalId', '$arrival', '$departure', '$category', '$spca_branch', '')");
    
    ?><script type="text/javascript">
        window.location = "./spca_branches_animals_search.php";
    </script><?
    
}

$stm = $pdo->query("SELECT * FROM spca_branches");
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
                                    <div>Add Animal to SPCA Branch
                                        <div class="page-title-subheading">Add an Animal to new SPCA Branch
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="page-title-actions">
                                    <input type="submit" class="btn-shadow mr-3 btn btn-success" value="Add Animal "/>
                                   
                                </div>
                                
                                
                                
                                   </div>
                        </div>    
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body"><h5 class="card-title">Details</h5>
                                            
                                                <div class="form-row">
                                                    <div class="col-md-3">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Animal Id</label><input name="animalId" id="exampleEmail11" placeholder="Animal Id" type="text" class="form-control" required></div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Arrival Date</label><input name="arrival" id="email" placeholder="Phone" type="date" class="form-control" required></div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="position-relative form-group"><label for="examplePassword11" class="">Departure Date</label><input name="departure" id="examplePassword11" placeholder="Address" type="date" class="form-control" required></div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Category</label>
                                                        <select class="mb-2 form-control" name="category">
                                                            <option value="cats">Cats</option>
                                                            <option value="dogs">Dogs</option>
                                                            <option value="rabbits">Rabbits</option>
                                                            <option value="rodents">Rodents</option>
                                                        </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">SPCA Branch </label>
                                                        <select class="mb-2 form-control" name="spca_branch">
                                                            <?foreach($rows as $row) {?>
                                                            <option value="<?echo $row[0]?>"><?echo $row[1]?></option>
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
