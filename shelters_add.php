<?include("./phpParts/allowAuth.php");?>
<?
if(isset($_POST["name"])){
    $name = $_POST["name"];
    $max = $_POST["max"];
    $animal = $_POST["animal"];
    $website = $_POST["website"];
    
    function generateRandomString($length = 10) {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    
    $shelterId = generateRandomString(5);
    
    $pdo->exec("INSERT INTO `shelter`(`shelter_id`, `name`, `website`, `animal_type`, `max_number`) VALUES ('$shelterId', '$name', '$website', '$animal', '$max')");
    
    ?><script type="text/javascript">
    window.location = "./shelters_search.php";</script><?
    
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
                                    <div>Add Shelters
                                        <div class="page-title-subheading">Add a new Shelter
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="page-title-actions">
                                    <input type="submit" class="btn-shadow mr-3 btn btn-success" value="Add Shelters "/>
                                   
                                </div>
                                
                                
                                
                                   </div>
                        </div>    
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body"><h5 class="card-title">New Shelters Details</h5>
                                            
                                                <div class="form-row">
                                                    <div class="col-md-4">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Name</label><input name="name" id="exampleEmail11" placeholder="Name" type="text" class="form-control" required></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Website</label><input name="website" id="email" placeholder="Website" type="text" class="form-control" required></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="position-relative form-group"><label for="examplePassword11" class="">Animal Type</label>
                                                        <select class="mb-2 form-control" name="animal">
                                                            <option value="cat">Cats</option>
                                                            <option value="dog">Dogs</option>
                                                            <option value="rabbit">Rabbits</option>
                                                            <option value="rodent">Rodents</option>
                                                        </select>
                                                       
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Max Numbers</label><input name="max" id="email" placeholder="Max Numbers" type="number" class="form-control" required></div>
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
