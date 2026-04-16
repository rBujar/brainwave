<?php require_once './vite-helper.php'; ?>
<!doctype html>
<html lang="en">
<head>
<?php include 'components/head.php'?>
</head>
<body>
    <main>
        <?php include './components/simpleHeader.php' ?>
        <div class="grey-bg">
        <section class="form container">
            <div class="row">
            <div class="form__title col-12">
                <h1 class="text-bold">Reset Password</h1>
                <p class="text-md text-faded">Enter your email to get reset link</p>
            </div>
            <div class="form__content col-12">
                <div class="form__wrapper">
                    <form class="form__card form__resetPassword">
                        <div class="form__field">
                            <label for="email" class="text-xs text-bold" >Email</label>
                            <input type="email" id="email" name="email" placeholder="i.e. john@email.com">
                            <span class="error emailError"></span>
                        </div>
                        <button class="blue-btn form__button" id="submit" type="submit">Send Reset Link</button>
                    </form>
                </div>
                <p class="text-md form__link">Rememered the password<a href="./login.php">Sign in now</a></p>
            </div>
            </div>
        </section>
        </div>
        <?php include 'components/footer.php' ?>
        <?php viteEntry('src/js/password-reset.js'); ?>
        </main>
</body>
</html>