<?include("./phpParts/allowAuth.php");?>
<?
if(isset($_POST["donation"])){
    
    $donation = $_POST["donation"];
    $animal_id = $_GET['animal_id'];
    $shelter_id = $_GET['shelter_id'];
    
    $lname = $_POST["lname"];
    $street = $_POST["street"];
    $building = $_POST["building"];
    $province = $_POST["province"];
    $city = $_POST["city"];
    $postal = $_POST["postal"];
    $phone = $_POST["phone"];
    
    function generateRandomString($length = 10) {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    
    $familyId = generateRandomString(5);
    
    $pdo->exec("DELETE FROM `vet` WHERE animal_id='$animal_id'");
    
    $pdo->exec("INSERT INTO `family`(`family_id`,`lname`, `street`, `building`, `city`, `province`, `postalcode`, `phone_number`) VALUES ('$familyId', '$lname', '$street', '$building', '$city', '$province', '$postal', '$phone')");
    
    $pdo->exec("INSERT INTO `shelter_adoptions`(`animal_id`, `donation`, `shelter_id`, `family_id`) VALUES ('$animal_id', '$donation', '$shelter_id', '$familyId')");
    
    ?><script type="text/javascript">
        window.location = "./shelters_animals_search.php";
    </script><?
    
}

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
                                    <div>Adopt Animal - by Family
                                        <div class="page-title-subheading">Adopt Animal - by Family
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
                                                    <div class="col-md-4">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Donation Amount</label><input name="donation" id="exampleEmail11" placeholder="Donation Amount" type="number" class="form-control" required></div>
                                                    </div>
                                                   
                                                    <div class="col-md-4">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Last Name </label><input name="lname" id="exampleEmail11" placeholder="Last Name" type="text" class="form-control" required></div>
                                                    </div>
                                                    
                                                    <div class="col-md-4">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Street </label><input name="street" id="exampleEmail11" placeholder="Street" type="text" class="form-control" required></div>
                                                    </div>
                                                    
                                                    <div class="col-md-4">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Building </label><input name="building" id="exampleEmail11" placeholder="Building" type="text" class="form-control" required></div>
                                                    </div>
                                                    
                                                    <div class="col-md-4">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">City </label><input name="city" id="exampleEmail11" placeholder="City" type="text" class="form-control" required></div>
                                                    </div>
                                                    
                                                    <div class="col-md-4">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Province </label><input name="province" id="exampleEmail11" placeholder="Province" type="text" class="form-control" required></div>
                                                    </div>
                                                    
                                                    <div class="col-md-4">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Postal Code </label><input name="postal" id="exampleEmail11" placeholder="Postal Code" type="text" class="form-control" required></div>
                                                    </div>
                                                    
                                                    <div class="col-md-4">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Phone </label><input name="phone" id="exampleEmail11" placeholder="Phone" type="text" class="form-control" required></div>
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
