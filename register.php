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
                <h1 class="font-bold mb-6">Sign up</h1>
                <p class="p-style">To get started, you need to sign up here.</p>
            </div>
            <div class="form__content col-span-12 flex flex-col items-center justify-center gap-10">
                <div class="form__wrapper border-0 rounded-[10px] bg-general-white py-7 px-6 w-full max-w-[350px] md:py-7">
                    <form class="form__card form__registerCard flex flex-col items-start justify-center gap-5 [&>div]:w-full [&>div]:relative" method="POST">
                        <div class="form__field">
                            <label class="text-md font-bold capitalize block mb-1" for="name">First & Last Name</label>
                            <input class="w-full rounded-[8px] border border-[rgba(160,160,160,0.2)] p-[10px] outline-none placeholder:p-[10px] placeholder:text-[14px] placeholder:opacity-70 placeholder:overflow-hidden" type="text" id="name" name="name" placeholder="i.e. John Doe">
                            <span class="error nameError"></span>
                        </div>
                        <div class="form__field">
                            <label class="text-md font-bold capitalize block mb-1" for="email">Email</label>
                            <input class="w-full rounded-[8px] border border-[rgba(160,160,160,0.2)] p-[10px] outline-none placeholder:p-[10px] placeholder:text-[14px] placeholder:opacity-70 placeholder:overflow-hidden" type="email" id="email" name="email" placeholder="i.e. john@email.com">
                            <span class="error emailError"></span>
                        </div>
                        <div class="form__field">
                            <label class="text-md font-bold capitalize block mb-1" for="password">Password</label>
                            <input class="w-full rounded-[8px] border border-[rgba(160,160,160,0.2)] p-[10px] outline-none placeholder:p-[10px] placeholder:text-[14px] placeholder:opacity-70 placeholder:overflow-hidden" type="password" id="password" name="password" placeholder="********">
                            <span class="error passError"></span>
                        </div>
                        <div class="form__field">
                            <label class="text-md font-bold capitalize block mb-1" for="password_confirmation">Confirm password</label>
                            <input class="w-full rounded-[8px] border border-[rgba(160,160,160,0.2)] p-[10px] outline-none placeholder:p-[10px] placeholder:text-[14px] placeholder:opacity-70 placeholder:overflow-hidden" type="password" id="password_confirmation" name="password_confirmation" placeholder="********">
                            <span class="error confirmError"></span>
                        </div>
                        <div class="form__field form__field--check flex items-center justify-start gap-2">
                            <input class="max-w-6" type="checkbox" name="checkbox" id="checkbox">
                            <span class="text-md">I agree to the Terms & Conditions</span>
                        </div>
                        <button class="blue-btn form__button w-full py-4 px-9" id="submit" type="submit">Create an account</button>
                    </form>
                </div>
                <p class="text-md form__link flex flex-col items-center justify-center md:flex-row md:gap-2">Already have an Account?<a href="./login.php" class="!text-primary-blue transition-colors duration-200 ease-in-out [&:hover]:text-primary-hoverBlue">Sign in now</a></p>
            </div>
            </div>
        </section>
        </div>
        <?php include 'components/footer.php' ?>
        <?php viteEntry('src/js/register.js'); ?>
        </main>
</body>
</html>