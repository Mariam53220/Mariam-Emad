
<?php




$title= "register";
include_once "layouts/header.php";
include_once "App/Http/Middlewares/Guest.php";
include_once "layouts/navbar.php";
include_once "layouts/breadcrumb.php";
use App\Database\Models\User;
use App\Http\Requests\Validation; 
$validation = new Validation;

if($_SERVER['REQUEST_METHOD']== "POST"){
    // print_r($_POST);
    // die;
    $validation->setNameOfvalue ('first_name')->setValue($_POST['first_name'])->required( );
    $validation->setNameOfvalue('last_name')->setValue($_POST['last_name'])->required( );
    $validation->setNameOfvalue('email')->setValue($_POST['email'])->Required( )->Regex('/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/')->Unique('users','email');
    $validation->setNameOfvalue('phone')->setValue($_POST['phone'])->Required( )->Regex('/^01[0125][0-9]{8}$/')->Unique('users','phone');
    $validation->setNameOfvalue('user_password')->setValue($_POST['user_password'])->Required( )->Regex('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,32}$/','Minimum eight and maximum 32 characters, at least one uppercase letter, one lowercase letter, one number and one special character')->Confirmed($_POST['user_password_confirmation']);
    $validation->setNameOfvalue('user_password_confirmation')->setValue($_POST['user_password_confirmation'])->Required();
    $validation->setNameOfvalue('gender')->setValue($_POST['gender'])->Required( )->in(['m','f']);
  
    if(empty($validation->getAllErrors())){ 
        $code= rand(100000,999999); 
        $user = new User; 
        $user->setFirst_name($_POST['first_name'])->setLast_name($_POST['last_name'])->setEmail($_POST['email'])
        ->setPhone($_POST['phone'])->setPassword($_POST['user_password'])->setGender($_POST['gender'])
        ->setVerification_code($code);
        if($user->create()) {
            header('location:verification_code.php?email='.$_POST['email']);die;
        }else{
            $error = "<div class='alert alert-danger'> Registeration Not Completed </div>";
        }
   

    }
}

 ?>

<!doctype html>
<html class="no-js" lang="zxx">
    


  
       
        <div class="login-register-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                        <div class="login-register-wrapper">
                            <div class="login-register-tab-list nav">
                                
                                <a data-toggle="tab" href="#lg2">
                                    <h4> register </h4>
                                </a>
                                <?= $error ?? "" ?>
                            </div>
                                <div id="lg2" class="tab-pane">
                                    <div class="login-form-container">
                                        <div class="login-register-form">
                                            <form action="" method="post">
                                                <input type="text" name="first_name" value="<?= $_POST['first_name'] ?? "" ?>" placeholder="Fisrt Name">
                                                <?= $validation->getAllError('first_name') ?>
                                                <input type="text" name="last_name" value="<?= $_POST['last_name'] ?? "" ?>" placeholder="Last Name">
                                                <?= $validation->getAllError('last_name') ?>
                                                <input type="email" name="email" value="<?= $_POST['email'] ?? "" ?>" placeholder="Email">
                                                <?= $validation->getAllError('email') ?>
                                                <input type="number" name="phone" value="<?= $_POST['phone'] ?? "" ?>" placeholder="Phone" >
                                                <?= $validation->getAllError('phone') ?>
                                                <input type="password" name="user_password" placeholder="Password">
                                                <?= $validation->getAllError('user_password') ?>
                                                <input type="password" name="user_password_confirmation" placeholder="Password Confirmation">
                                                <?= $validation->getAllError('user_password_confirmation') ?>

                                                <select name="gender" id="" class="form-control">
                                                   <option <?= (isset($_POST['gender']) && $_POST['gender'] == 'm') ? "selected" : "" ?> value="m">Male</option>
                                                   <option <?= (isset($_POST['gender']) && $_POST['gender'] == 'f') ? "selected" : "" ?> value="f">Female</option>
                                                </select>
                                                <?= $validation->getAllError('gender') ?>
                                                <div class="button-box mt-5">
                                                    <button type="submit"><span>Register</span></button>
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
        <!-- Footer style Start -->
        <footer class="footer-area pt-75 gray-bg-3">
            <div class="footer-top gray-bg-3 pb-35">
                <div class="container">
                    <div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="footer-widget mb-40">
                                <div class="footer-title mb-25">
                                    <h4>My Account</h4>
                                </div>
                                <div class="footer-content">
                                    <ul>
                                        <li><a href="my-account.php">My Account</a></li>
                                        <li><a href="about-us.php">Order History</a></li>
                                        <li><a href="wishlist.php">WishList</a></li>
                                        <li><a href="#">Newsletter</a></li>
                                        <li><a href="about-us.php">Order History</a></li>
                                        <li><a href="#">International Orders</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
						<div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="footer-widget mb-40">
                                <div class="footer-title mb-25">
                                    <h4>Information</h4>
                                </div>
                                <div class="footer-content">
                                    <ul>
                                        <li><a href="about-us.php">About Us</a></li>
                                        <li><a href="#">Delivery Information</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">Customer Service</a></li>
                                        <li><a href="#">Return Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
						<div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="footer-widget mb-40">
                                <div class="footer-title mb-25">
                                    <h4>Quick Links</h4>
                                </div>
                                <div class="footer-content">
                                    <ul>
                                        <li><a href="#">Support Center</a></li>
                                        <li><a href="#">Term & Conditions</a></li>
                                        <li><a href="#">Shipping</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Help</a></li>
                                        <li><a href="#">FAQS</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="footer-widget footer-widget-red footer-black-color mb-40">
                                <div class="footer-title mb-25">
                                    <h4>Contact Us</h4>
                                </div>
                                <div class="footer-about">
                                    <p>Your current address goes to here,120 haka, angladesh</p>
                                    <div class="footer-contact mt-20">
                                        <ul>
                                            <li>(+008) 254 254 254 25487</li>
                                            <li>(+009) 358 587 657 6985</li>
                                        </ul>
                                    </div>
									<div class="footer-contact mt-20">
                                        <ul>
                                            <li>yourmail@example.com</li>
                                            <li>example@admin.com</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom pb-25 pt-25 gray-bg-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="copyright">
                                <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="payment-img f-right">
                                <a href="#">
                                    <img alt="" src="assets/img/icon-img/payment.png">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
		<!-- Footer style End -->
        
        
		<!-- all js here -->
        <script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
        <script src="assets/js/popper.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/ajax-mail.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
    </body>

<.php>
