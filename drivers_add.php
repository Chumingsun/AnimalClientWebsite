<?include("./phpParts/allowAuth.php");?>
<?
if(isset($_POST["organization_id"]) && isset($_POST["fname"])){
    
    $organization_id = $_POST["organization_id"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $phone = $_POST["phone"];
    $license_plate = $_POST["license_plate"];
    $license_type = $_POST["license_type"];
    
    
    function generateRandomString($length = 10) {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
 
    $driver_id = generateRandomString(6);

    $pdo->exec("INSERT INTO `driver`(`driver_id`, `organization_id`, `fname`, `lname`, `phone`, `license_plate`, `license_type`) VALUES ('$driver_id', '$organization_id', '$fname', '$lname', '$phone', '$license_plate', '$license_type'  )");
    
    ?><script type="text/javascript">
        window.location = "./drivers_search.php";
    </script><?
    
}

$stm = $pdo->query("SELECT * FROM organizations");
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
                                    <div>Add Driver
                                        <div class="page-title-subheading">Add Driver
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="page-title-actions">
                                    <input type="submit" class="btn-shadow mr-3 btn btn-success" value="Add Driver "/>
                                   
                                </div>
                                
                                
                                
                                   </div>
                        </div>    
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body"><h5 class="card-title">Details</h5>
                                            
                                                <div class="form-row">
                                                    <div class="col-md-3">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">First Name</label><input name="fname" id="exampleEmail11" placeholder="First Name" type="text" class="form-control" required></div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Last Name</label><input name="lname" id="exampleEmail11" placeholder="Last Name" type="text" class="form-control" required></div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Phone</label><input name="phone" id="exampleEmail11" placeholder="Phone" type="text" class="form-control" required></div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">License Plate</label><input name="license_plate" id="exampleEmail11" placeholder="License Plate" type="text" class="form-control" required></div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">License Type</label><input name="license_type" id="exampleEmail11" placeholder="License Type" type="text" class="form-control" required></div>
                                                    </div>
                                                    
                                                    
                                                    <div class="col-md-3">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Rescue Organization </label>
                                                        <select class="mb-2 form-control" name="organization_id">
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
