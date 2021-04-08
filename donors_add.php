<?include("./phpParts/allowAuth.php");?>
<?
if(isset($_POST["fname"]) && isset($_POST["lname"])){
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $donation = $_POST["donation"];
    $category = $_POST["category"];
    $date = $_POST["date"];
    if($category=="SPCA Branch"){
        $mixedId = $_POST["mixedId_branch"];
    }
    else if($category=="Rescue Organizations"){
        $mixedId = $_POST["mixedId_org"];
    }
    else if($category=="Shelters"){
        $mixedId = $_POST["mixedId_shelter"];
    }
    $donation_time = $date;
   
    function generateRandomString($length = 10) {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    
    $id = generateRandomString(5);
    
    $pdo->exec("INSERT INTO `donors`(`donor_id`, `fname`, `lname`, `donation_date`, `donation`, `category`, `mixedId`) VALUES ('$id', '$fname', '$lname', '$donation_time', '$donation', '$category', '$mixedId')");
    
    ?><script type="text/javascript">window.location = "./donors_search.php";</script><?
    
}

$stm = $pdo->query("SELECT * FROM spca_branches");
$rows_branch = $stm->fetchAll(PDO::FETCH_NUM);

$stm = $pdo->query("SELECT * FROM organizations");
$rows_organization = $stm->fetchAll(PDO::FETCH_NUM);

$stm = $pdo->query("SELECT * FROM shelter");
$rows_shelter = $stm->fetchAll(PDO::FETCH_NUM);

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
                                    <div>Add Donation
                                        <div class="page-title-subheading">Add a new Donation
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="page-title-actions">
                                    <input type="submit" class="btn-shadow mr-3 btn btn-success" value="Add Donation "/>
                                   
                                </div>
                                
                                
                                
                                   </div>
                        </div>    
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body"><h5 class="card-title">New Donation Details</h5>
                                            
                                                <div class="form-row">
                                                    
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-4">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">First Name</label><input name="fname" id="exampleEmail11" placeholder="First Name" type="text" class="form-control" required></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Last Name </label><input name="lname" id="exampleEmail11" placeholder="Last Name" type="text" class="form-control" required></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Donation </label><input name="donation" id="exampleEmail11" placeholder="Donation" type="text" class="form-control" required></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Date </label><input name="date" id="exampleEmail11" placeholder="Date" type="date" class="form-control" required></div>
                                                    </div>
                                                    
                                                    <div class="col-md-4">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">To</label> <select id="category" class="mb-2 form-control" name="category">
                                                            <option value="SPCA Branch">SPCA Branch</option>
                                                            <option value="Rescue Organizations">Rescue Organizations</option>
                                                            <option value="Shelters">Shelters</option>
                                                        </select></div>
                                                    </div>
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    <div class="col-md-4" id="branch">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">SPCA Branch </label>
                                                <select class="mb-2 form-control" name="mixedId_branch">
                                                            <?foreach($rows_branch as $row) {?>
                                                            <option value="<?echo $row[0]?>"><?echo $row[1]?></option>
                                                            <?}?>
                                                        </select>        
                                                </div>
                                                    </div>
                                                    
                                                    
                                                    
                                                    <div class="col-md-4" id="organization">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Rescue Organizations </label>
                                                        <select class="mb-2 form-control" name="mixedId_org">
                                                            <?foreach($rows_organization as $row) {?>
                                                            <option value="<?echo $row[0]?>"><?echo $row[1]?></option>
                                                            <?}?>
                                                        </select>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="col-md-4" id="shelter">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Shelters </label>
                                                        <select class="mb-2 form-control" name="mixedId_shelter">
                                                            <?foreach($rows_shelter as $row) {?>
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
                    <?include("./phpParts/footer.php")?>
        </div>
    </div>
    </form>
<script type="text/javascript" src="./assets/scripts/main.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $(function() {
    //$('#branch').hide(); 
    $('#organization').hide(); 
    $('#shelter').hide(); 
    $('#category').change(function(){
        if($('#category').val() == 'SPCA Branch') {
            $('#branch').show(); 
            $('#organization').hide(); 
            $('#shelter').hide(); 
        } 
        else if($('#category').val() == 'Rescue Organizations') {
            $('#branch').hide(); 
            $('#organization').show(); 
            $('#shelter').hide(); 
        } 
        else if($('#category').val() == 'Shelters') {
            $('#branch').hide(); 
            $('#organization').hide(); 
            $('#shelter').show(); 
        } 
        
    });
});
</script>
</body>
</html>
