<?include("./phpParts/allowAuth.php");?>
<?
if(isset($_POST["name"]) && isset($_POST["phone"])){
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $street = $_POST["street"];
    $building = $_POST["building"];
    $city = $_POST["city"];
    $province = $_POST["province"];
    $postalCode = $_POST["postalCode"];
    
    function generateRandomString($length = 10) {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    
    $branchId = generateRandomString(5);
    
    $pdo->exec("INSERT INTO `spca_branches`(`spca_branch_id`, `branch_name`, `phone_number`, `address_number`, `street`, `building_number`, `city`, `province`, `postal_code`) VALUES ('$branchId', '$name', '$phone', '$address', '$street', '$building', '$city', '$province', '$postalCode')");
    
    ?><script type="text/javascript">
    window.location = "./spca_branches_search.php";
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
                                    <div>Add SPCA Branch
                                        <div class="page-title-subheading">Add a new SPCA Branch
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="page-title-actions">
                                    <input type="submit" class="btn-shadow mr-3 btn btn-success" value="Add SPCA Branch "/>
                                   
                                </div>
                                
                                
                                
                                   </div>
                        </div>    
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body"><h5 class="card-title">New SPCA Branch Details</h5>
                                            
                                                <div class="form-row">
                                                    <div class="col-md-4">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Name</label><input name="name" id="exampleEmail11" placeholder="Name" type="text" class="form-control" required></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Phone</label><input name="phone" id="email" placeholder="Phone" type="text" class="form-control" required></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="position-relative form-group"><label for="examplePassword11" class="">Address</label><input name="address" id="examplePassword11" placeholder="Address" type="text" class="form-control" required></div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-4">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Street</label><input name="street" id="exampleEmail11" placeholder="Street" type="text" class="form-control" required></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Building Number</label><input name="building" id="exampleEmail11" placeholder="Building Number" type="text" class="form-control" required></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">City</label><input name="city" id="exampleEmail11" placeholder="City" type="text" class="form-control" required></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Province</label><input name="province" id="exampleEmail11" placeholder="Province" type="text" class="form-control" required></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Postal Code</label><input name="postalCode" id="exampleEmail11" placeholder="Postal Code" type="text" class="form-control" required></div>
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
