<?php include_once '../Backend/Database/read.php';?>
<!--< ?php include_once '../Backend/Database/create.php';?> -->

<?php
include_once '../Backend/Database/connection.php';
 
// Retrieve POST data and convert JSON to PHP array

if(isset($_POST['userData'])){

$userData = json_decode($_POST['userData']); 
 var_dump($userData);
 print_r($_POST['userData']);
if(!empty($userData)){ 
    $oauth_provider = $_POST['oauth_provider']; 
    $link = !empty($userData->link)?$userData->link:''; 
    $gender = !empty($userData->gender)?$userData->gender:''; 
     
    // Check whether user data already exists in database 
    $prevQuery = "SELECT id FROM users WHERE oauth_provider = '".$oauth_provider."' AND oauth_uid = '".$userData->id."'"; 
 
    $prevResult = $db->query($prevQuery); 
    if($prevResult->num_rows > 0){  
        // Update user data if already exists 
        $query = "UPDATE users SET first_name = '".$userData->first_name."', last_name = '".$userData->last_name."', email = '".$userData->email."', gender = '".$gender."', picture = '".$userData->picture->data->url."', link = '".$link."', modified = NOW() WHERE oauth_provider = '".$oauth_provider."' AND oauth_uid = '".$userData->id."'"; 
        $update = $db->query($query); 
        header("location:../../Frontend/clientes.php");
    }else{ 
        // Insert user data 
        $query = "INSERT INTO users SET oauth_provider = '".$oauth_provider."', oauth_uid = '".$userData->id."', first_name = '".$userData->first_name."', last_name = '".$userData->last_name."', email = '".$userData->email."', gender = '".$gender."', picture = '".$userData->picture->data->url."', link = '".$link."', created = NOW(), modified = NOW()"; 
        $insert = $db->query($query); 
        header("location:../../Frontend/clientes.php");
    } 
} 
}

?>


<div class="container py-5" style="margin-top: 40px;">
    <div class="container py-5">
        <div class="col-md-6 container clearfix">
            <fieldset id="formu">
                <form action="login.php" method="POST" class="py-">
                    <fieldset class="formulario">
                        <h1 class="text-center" id="font">Login</h1>

                        <?php if (isset($ms)) { ?>
                            <div class="alert alert-danger" style="text-align: center" role="alert">
                                <?php echo $ms ?>
                            </div>
                        <?php } ?>

                        <?php if (isset($mensagem)) { ?>
                            <div class="alert alert-danger" style="text-align: center" role="alert">
                                <?php echo $mensagem ?>
                            </div>
                        <?php } ?>

                        <div class="form-group row">

                            <div class="col-sm-12">
                                <div class="input-group-prepend"><span class="input-group-text bg-white px-4 border-md border-right-0"><i class="fas fa-envelope"></i></span>
                                    <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                                    <input name="msg" value="<?php echo "1" ?>" style="display: none;">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">

                            <div class="col-sm-12">
                                <div class="input-group-prepend"><span class="input-group-text bg-white px-4 border-md border-right-0"><i class="fas fa-unlock-alt"></i></span>
                                    <input type="password" name="senha" class="form-control" id="inputPassword3" placeholder="Senha">
                                </div>
                            </div>
                        </div>
                        <div style="text-align: right;">
                            <button type="submit" id="font" class="btn btn-sm btn-primary"><i class="fas fa-sign-in-alt"></i>&nbsp;Entrar</button>
                        </div>
                        <div id="font">Não tem uma conta?&nbsp;<a href="index.php"><i class="far fa-hand-point-left"></i>&nbsp;Cadastre-se</a></div>
                        <div style="margin-top: 10px">
                        <a role="button" class="btn btn-sm btn-primary" href="javascript:void(0);" onclick="fbLogin();" id="fbLink">Entrar com facebook</a>
                        </div>

                    </fieldset>
                </form>
            </fieldset>
        </div>
    </div>
</div>





<!-- SDK JavaScript para logar com facebook -->


<script>
window.fbAsyncInit = function() {
    // FB JavaScript SDK configuration and setup
    FB.init({
      appId      : '650781865523691', // FB App ID
      cookie     : true,  // enable cookies to allow the server to access the session
      xfbml      : true,  // parse social plugins on this page
      version    : 'v7.0' // use graph api version 2.8
    });
    
    // Check whether the user already logged in
    FB.getLoginStatus(function(response) {
        if (response.status === 'connected') {
            //display user data
            getFbUserData();
        }
    });
};

// Load the JavaScript SDK asynchronously
(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

// Facebook login with JavaScript SDK
function fbLogin() {
    FB.login(function (response) {
        if (response.authResponse) {
            // Get and display the user profile data
            getFbUserData();
        } else {
            document.getElementById('status').innerHTML = 'User cancelled login or did not fully authorize.';
        }
    }, {scope: 'email'});
}

// Fetch the user profile data from facebook
function getFbUserData(){
    FB.api('/me', {locale: 'en_US', fields: 'id,first_name,last_name,email,link,gender,locale,picture'},
    function (response) {
        document.getElementById('fbLink').setAttribute("onclick","fbLogout()");
        document.getElementById('fbLink').innerHTML = 'Logout from Facebook';
        document.getElementById('status').innerHTML = '<p>Thanks for logging in, ' + response.first_name + '!</p>';
        document.getElementById('userData').innerHTML = '<h2>Facebook Profile Details</h2><p><img src="'+response.picture.data.url+'"/></p><p><b>FB ID:</b> '+response.id+'</p><p><b>Name:</b> '+response.first_name+' '+response.last_name+'</p><p><b>Email:</b> '+response.email+'</p><p><b>Gender:</b> '+response.gender+'</p><p><b>FB Profile:</b> <a target="_blank" href="'+response.link+'">click to view profile</a></p>';
		
        // Save user data
        saveUserData(response);
    });
}

// Save user data to the database
function saveUserData(userData){
    $.post('../Backend/Database/create.php', {oauth_provider:'facebook',userData: JSON.stringify(userData)}, function(){ return true; });
}


// Logout from facebook
function fbLogout() {
    FB.logout(function() {
        document.getElementById('fbLink').setAttribute("onclick","fbLogin()");
        document.getElementById('fbLink').innerHTML = '<img src="images/fb-login-btn.png"/>';
        document.getElementById('userData').innerHTML = '';
        document.getElementById('status').innerHTML = '<p>You have successfully logout from Facebook.</p>';
    });
}

</script>

<?php include_once 'includes/footer_inc.php'; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Display login status -->
<div id="status"></div>

<!-- Facebook login or logout button -->
<div class="container">
<a role="button" href="javascript:void(0);" onclick="fbLogin();" id="fbLink">logout</a>
</div>

<!-- Display user's profile info -->
<div class="ac-data" id="userData"></div>
 






<!--
<script>
    function statusChangeCallback(response) { // Called with the results from FB.getLoginStatus().
        console.log('statusChangeCallback');
        console.log(response); // The current login status of the person.
        if (response.status === 'connected') { // Logged into your webpage and Facebook.
            testAPI();
        } else { // Not logged into your webpage or we are unable to tell.
            document.getElementById('status').innerHTML = ' ' +
                ' ';
        }
    }


    function checkLoginState() { // Called when a person is finished with the Login Button.
        FB.getLoginStatus(function(response) { // See the onlogin handler
            statusChangeCallback(response);
        });
    }


    window.fbAsyncInit = function() {
        FB.init({
            appId: '650781865523691',
            cookie: true, // Enable cookies to allow the server to access the session.
            xfbml: true, // Parse social plugins on this webpage.
            version: 'v7.0' // Use this Graph API version for this call.
        });


        FB.getLoginStatus(function(response) { // Called after the JS SDK has been initialized.
            statusChangeCallback(response); // Returns the login status.
        });
    };

    function testAPI() { // Testing Graph API after login.  See statusChangeCallback() for when this call is made.
        console.log('Welcome!  Fetching your information.... ');
        FB.api('/me', function(response) {
            console.log('Successful login for: ' + response.name);
            document.getElementById('status').innerHTML = "";
            'Thanks for logging in, ' + response.name + '!';
        });
    }
</script>


 The JS SDK Login Button -->
<!--
<fb:login-button style="width: 40px; text-align: center;" scope="public_profile,email" onlogin="checkLoginState();">Olá Mundo
</fb:login-button> -->
<!--
<div id="status">
</div> -->

<!-- Load the JS SDK asynchronously 
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script> -->