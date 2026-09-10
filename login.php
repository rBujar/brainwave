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
        <section class="form container mx-auto px-4">
            <div class="grid grid-cols-12">
            <div class="form__title col-span-12 md:col-span-6 md:col-start-4 text-center mb-[55px]">
                <h1 class="font-bold mb-6">Log in</h1>
                <p class="p-style">To get started, you need to sign in here.</p>
            </div>
            <div class="form__content col-span-12 flex flex-col items-center justify-center gap-10">
                <div class="form__wrapper border-0 rounded-[10px] bg-general-white py-7 px-6 w-full max-w-[350px] md:py-7">
                    <form class="form__card form__loginCard flex flex-col items-start justify-center gap-5 [&>div]:w-full [&>div]:relative" method="POST">
                        <div class="form__field">
                            <label for="email" class="text-md font-bold capitalize block mb-1">Email</label>
                            <input class="w-full rounded-[8px] border border-[rgba(160,160,160,0.2)] p-[10px] outline-none placeholder:p-[10px] placeholder:text-[14px] placeholder:opacity-70 placeholder:overflow-hidden" type="email" id="email" name="email" placeholder="i.e. john@email.com">
                            <span class="error emailError"></span>
                        </div>
                        <div class="form__field">
                            <div class="form__item flex items-start justify-between">
                            <label for="password" class="text-md font-bold capitalize block mb-1" >Password</label>
                            <a href="./passwordReset.php" class="text-md !text-primary-blue">Forgot password?</a>
                            </div>
                            <input class="w-full rounded-[8px] border border-[rgba(160,160,160,0.2)] p-[10px] outline-none placeholder:p-[10px] placeholder:text-[14px] placeholder:opacity-70 placeholder:overflow-hidden" type="password" id="password" name="password" placeholder="********">
                            <span class="error passError"></span>
                        </div>
                        <div class="form__field form__field--check flex items-center justify-start gap-2">
                            <input class="max-w-6" type="checkbox" name="checkbox" id="checkbox">
                            <span class="text-md">Remember Me</span>
                        </div>
                        <button class="blue-btn form__button w-full py-4 px-9" id="submit" type="submit">Send</button>
                    </form>
                </div>
                <p class="text-md form__link flex flex-col items-center justify-center md:flex-row md:gap-2">Don't have an account?<a href="./register.php" class="!text-primary-blue transition-colors duration-200 ease-in-out [&:hover]:text-primary-hoverBlue">Create an account</a></p>
            </div>
            </div>
        </section>
        </div>
        <?php include 'components/footer.php' ?>
        <?php viteEntry('src/js/login.js'); ?>
        </main>
</body>
</html>