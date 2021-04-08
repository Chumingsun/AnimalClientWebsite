<?include_once("global.php");?>
<?if ($logged==1){ 
    ?>
    <script type="text/javascript">
            //window.location = "./dashboard.php";
        </script>
    <?
}
if(isset($_POST["email"])){
    $email = $_POST["email"]; 
    $password = ($_POST["password"]);
if((!$email)||(!$password)){
    $message = "Please insert both fields.";
    } 
else{ 
    if($email=="admin@queensu.ca" && $password=="123"){
        $logged=1;
        $_SESSION['password'] = $password;
        $_SESSION['email'] = $email;
        ?>
        <script type="text/javascript">
                window.location = "./dashboard.php";
            </script>
        <?
    }
    } 
    }?>
<!doctype html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <?include("./phpParts/head.php")?>
</head>
<body>
    <form class=""  method="POST" action="">
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <?include("./phpParts/upperbar.php")?>
        
        <div class="app-main" style="padding-top:100px;">
                   <div class="app-main__outer" style="padding-left:0px;">
                    <div class="app-main__inner">
                            <div class="row">
                                <div class="col-md-12 col-lg-6" style="margin: auto; max-width: 500px;">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body"><h5 class="card-title">Login</h5>
                                            
                                                <div class="form-row">
                                                    <div class="col-md-12">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Email</label><input name="email" id="exampleEmail11" placeholder="Email" type="email" class="form-control" required></div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-12">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Password</label><input name="password" id="exampleEmail11" placeholder="Password" type="password" class="form-control" required></div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-12">
                                                        <button class="mb-2 mr-2 btn btn-primary btn-lg btn-block">Login
                                        </button>
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
