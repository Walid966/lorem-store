<?php include('inc/header.php'); ?>

<section class="login">
    <div class="container">
        <h1 class="text-center mb-5">LOGIN</h1>
        <form method="post">
            <p>Please enter your e-mail and password:</p>
            <input type="text" name="email" id="email" placeholder="email">
            <input type="password" name="password" id="password" placeholder="Password">
            <a href="">Forgot your password?</a>
            <input class="btn btn-primary" type="submit" value="LOGIN">
            <p>Don't have an account? <a href="">Register</a></p>
        </form>
    </div>
</section>

<?php include('inc/footer.php'); ?>