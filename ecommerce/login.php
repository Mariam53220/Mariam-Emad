 <?php 
 $title= "login";
 use App\Http\Requests\Validation;
 use App\Database\Models\User;
 include_once "layouts/header.php";
 include_once "App/Http/Middlewares/Guest.php";
include_once "layouts/navbar.php";
include_once "layouts/breadcrumb.php";
$validation = new Validation;

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $validation->setNameOfvalue('email')->setValue($_POST['email'])->Required()->Regex('//')->Exists('users','email');
    $validation->setNameOfvalue('user_password')->setValue($_POST['user_password'])->Required()->Regex('//');
    if(empty($validation->getAllErrors ())){
        $userInfo = new User;
        $userInfo->setEmail($_POST['email']);
        $user = $userInfo->getUserByEmail()->get_result()->fetch_object();
        if (password_verify($_POST['user_password'], $user->password)) {
            
              if(!is_null($user->email_verified_at)){
               $_SESSION ['user'] = $user; 
                header('location:index.php');die; 

              } else{
               header('location:verification_code.php?email='.$_POST['email']);die;} }else {
                $error = "<div class='alert alert-danger text-center'> Somthing Wrong  </div>"; }
    
    
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
                                    <h4> login </h4>
                                </a>
                            </div>
                            <div class="tab-content">
                                <div id="lg1" class="tab-pane active">
                                    <div class="login-form-container">
                                        <div class="login-register-form">
                                            <?= $error ?? "" ?>
                                            <form action="" method="post">
                                            <input type="email" name="email" placeholder="Email Address">
                                        <?= $validation->getAllError('email') ?>
                                        <input type="password" name="user_password" placeholder="Password">
                                        <?= $validation->getAllError('user_password') ?>
                                                <div class="button-box">
                                                    <div class="login-toggle-btn">
                                                        <input type="checkbox">
                                                        <label>Remember me</label>
                                                        <a href="#">Forgot Password?</a>
                                                    </div>
                                                    <button type="submit"><span>Login</span></button>
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




 include_once "layouts/footer.php";
 include_once "layouts/footer-scripts.php";
?>
      
