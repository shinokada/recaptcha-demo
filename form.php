<script src="https://www.google.com/recaptcha/api.js?render=your-site-key"></script>

<div class="container">
    <a href="./"><h1>Login Form</h1></a>
    <?php if(isset($_GET['err']) && $_GET['err']==400){
        print('<div class="alert alert-danger" >Usename and password are not correct.</div>');
    }
    ?>

    <form action="page.php" method="post" id="resourcesForm">
        <div class="imgcontainer">
            <img src="./images/placeholder.com-logo4.png" alt="logo" class="logo">
        </div>
        <div>
        <span id="username">Username</span>
            <input type="text" placeholder="Enter Username" name="uname" required>
        </div>
        <div>
            <span id="password">Password</span>
            <input type="password" placeholder="Enter Password" name="psw" required>
            </div>
        <div>
            <input type="submit" name="submit" value="Submit" class="inputbutton">
        </div>
        <input type="hidden" name="recaptcha_response" value="" id="recaptchaResponse">
    </form>
</div>
<script>
grecaptcha.ready(function(){
    grecaptcha.execute('your-site-key', { action:'submit'}).then(function (token){
        var recaptchaResponse=document.getElementById('recaptchaResponse');
        recaptchaResponse.value=token;
    })
})
</script>
