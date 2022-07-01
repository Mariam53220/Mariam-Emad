 <?php 

use App\Database\Models\User;
use App\Http\Requests\Validation;

 $title= "Verification Code";
 include_once "layouts/header.php";
 include_once "App/Http/Middlewares/Guest.php";
 
 if ($_GET) {
    if (isset($_GET ['email'])){
        $validation = new Validation;
        $validation->setNameOfvalue('email')->setValue($_GET['email'])->Regex('/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/')->Exists('users','email');
        if(!empty($validation->getAllErrors())){
            include "layouts/errors/404error.php"; die;
        }
        
    }else {
        include "layouts/errors/404error.php"; die;
    }

}else{
    include "layouts/errors/404error.php"; die;
}

$validation = new Validation;

if ($_SERVER['REQUEST_METHOD'] == "POST") { 
    $validation = new Validation;
    $validation->setNameOfvalue('Verification_Code')->setValue($_POST['Verification_Code'])
    ->Required()->Integer()->Digits(6)->Exists('users', 'verification_code');

    if (empty($validation->getAllErrors())) {
        $user = new User;
        $user->setEmail($_GET['email'])->setVerification_code($_POST['Verification_Code']);
        if ($user->checkCode()->get_result()->num_rows == 1) {
            date_default_timezone_set('Africa/Cairo');
            $user->setEmail_verified_at(date('Y-m-d H:i:s'));
            if ($user->UserVerified()) {
                $success ="<p class= 'alert alert-success text-center'>* Correct Code </p>";
                header("refresh:3;url=login.php");
            } else {
                $error = "<p class='text-danger font-weight-bold'>* There's Something Went Wrong </p>";
            }
        } else {
            $error = "<p class='text-danger font-weight-bold'>* Wrong Code </p>";
        }
    }
}
?>


<div class="login-register-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                        <div class="login-register-wrapper">
                            <div class="login-register-tab-list nav">
                                <a class="active" data-toggle="tab" href="#lg1">
                                    <h4> <?= $title ?> </h4>
                                </a>
                            
                               
                            </div>
                            <div class="tab-content">
                                <div id="lg1" class="tab-pane active">
                                    <div class="login-form-container">
                                        <div class="login-register-form"> 
                                        <?= $success ?? "" ?>
                                            <form action="" method="post">
                                                <input type="number" name="Verification_Code" placeholder="Put Verification Code">
                                                <?= $validation->getAllError('Verification_Code') ?>
                                                <?= $error ?? "" ?>
                                                <div class="button-box">
                                                    <button type="submit"><span> SUBMIT CODE</span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
 </div>

<?php 



 include_once "layouts/footer-scripts.php";
?>
      
