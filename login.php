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
                <h1 class="text-bold">Log in</h1>
                <p class="text-md">To get started, you need to sign in here.</p>
            </div>
            <div class="form__content col-12">
                <div class="form__wrapper">
                    <form class="form__card">
                        <div class="form__field">
                            <label for="email" class="text-xs text-bold" >Email</label>
                            <input type="email" id="email" name="email" placeholder="i.e. john@email.com">
                            <span class="error emailError"></span>
                        </div>
                        <div class="form__field">
                            <div class="form__item">
                            <label for="password" class="text-xs text-bold" >Password</label>
                            <a href="./passwordReset.php" class="text-xs">Forgot password?</a>
                            </div>
                            <input type="password" id="password" name="password" placeholder="********">
                            <span class="error passError"></span>
                        </div>
                        <div class="form__field form__field--check">
                            <input type="checkbox" name="checkbox" id="checkbox">
                            <span class="text-xs">Remember Me</span>

                        </div>
                        <button class="blue-btn form__button" id="submit" type="submit">Send</button>
                    </form>
                </div>
                <p class="text-md form__link">Don't have an account?<a href="./register.php">Create an account</a></p>
            </div>
            </div>
        </section>
        </div>
        <?php include 'components/footer.php' ?>
        <?php viteEntry('src/js/main.js'); ?>
        </main>
</body>
</html>