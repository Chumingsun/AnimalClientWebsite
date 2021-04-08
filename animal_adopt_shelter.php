<?include("./phpParts/allowAuth.php");?>
<?
if(isset($_POST["donation"])){
    
    $donation = $_POST["donation"];
    $shelter = $_POST["shelter"];
    $animal_id = $_GET['animal_id'];
    
    $date = $_POST["date"];

    $pdo->exec("update animals set status='adopted' where animal_id='$animal_id'");
    
    $pdo->exec("INSERT INTO `adoptions`(`animal_id`, `donation`, `adoped_by_category`, `mixedId`, `driverId`, `adoption_date`) VALUES ('$animal_id', '$donation', 'shelter', '$shelter', '', '$date')");
    
    ?><script type="text/javascript">
        window.location = "./spca_branches_animals_search.php";
    </script><?
    
}

$stm = $pdo->query("SELECT * FROM shelter");
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
                                    <div>Adopt Animal - by Shelter
                                        <div class="page-title-subheading">Adopt Animal - by Shelter
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="page-title-actions">
                                    <input type="submit" class="btn-shadow mr-3 btn btn-success" value="Adopt"/>
                                   
                                </div>
                                
                                
                                
                                   </div>
                        </div>    
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body"><h5 class="card-title">Details</h5>
                                            
                                                <div class="form-row">
                                                    <div class="col-md-3">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Donation Amount</label><input name="donation" id="exampleEmail11" placeholder="Donation Amount" type="number" class="form-control" required></div>
                                                    </div>
                                                    
                                                    <div class="col-md-4">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Adoption Date</label><input name="date" id="exampleEmail11" placeholder="Adoption Date" type="date" class="form-control" required></div>
                                                    </div>
                                                    
                                                    <div class="col-md-3">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Shelter </label>
                                                        <select class="mb-2 form-control" name="shelter">
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
