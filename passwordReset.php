<?php require_once './vite-helper.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php viteClient(); ?>
    <?php viteEntry('src/css/style.scss'); ?>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo viteAsset('src/assets/favicon.ico'); ?>" />
    <title>Brainwave</title>
</head>
<body>
    <main>
        <?php include './components/simpleHeader.php' ?>
        <div class="grey-bg">
        <section class="form container">
            <div class="row">
            <div class="form__title col-12">
                <h1 class="text-bold">Reset Password</h1>
                <p class="text-md">Enter your email to get reset link</p>
            </div>
            <div class="form__content col-12">
                <div class="form__wrapper">
                    <form class="form__card">
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
        <?php viteEntry('src/js/main.js'); ?>
        </main>
</body>
</html>