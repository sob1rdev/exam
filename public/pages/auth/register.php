<?php
$isAdmin = $_SERVER['REQUEST_URI'] === '/admin/create';
?>

<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <title>Hously - Tailwind CSS Real Estate Landing & Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="Real Estate Website Landing Page" name="description" />
    <meta content="Real Estate, buy, sell, Rent, tailwind Css" name="keywords" />
    <meta name="author" content="Shreethemes" />
    <meta name="website" content="https://shreethemes.in" />
    <meta name="email" content="support@shreethemes.in" />
    <meta name="version" content="2.2.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- favicon -->
    <link rel="shortcut icon" href="../../assets/images/favicon.ico" />

    <!-- Css -->
    <link href="../../assets/libs/@iconscout/unicons/css/line.css" type="text/css" rel="stylesheet" />
    <link href="../../assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../../assets/css/tailwind.css" />

</head>
<section class="md:h-screen py-36 flex items-center relative overflow-hidden zoom-image">
    <div class="absolute inset-0 image-wrap z-1 bg-[url('../../assets/images/bg/01.jpg')] bg-no-repeat bg-center bg-cover"></div>
    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black z-2" id="particles-snow"></div>
    <div class="container relative z-3">
        <div class="flex-1 justify-center">
            <div class="max-w-[400px] w-full m-auto p-6 bg-white dark:bg-slate-900 shadow-md dark:shadow-gray-700 rounded-md">
                <a href="<?= $isAdmin ? '/admin/create' : '/register'; ?>"><img src="../../assets/images/logo-icon-64.png" class="mx-auto" alt="" ></a>
                <h5 class="my-6 text-xl font-semibold"><?= $isAdmin ? 'Admin Signup' : 'Signup'; ?></h5>
                <form action="<?= $isAdmin ? '/admin/create' : '/register'; ?>" method="POST">
                    <div class="grid grid-cols-1">
                        <div class="mb-4 md:col-span-4 col-span-12">
                            <label class="font-semibold" for="name">Your Name:</label>
                            <input id="name" name="name" type="text" class="form-input mt-3" placeholder="Username">
                        </div>

                        <div class="mb-4 md:col-span-4 col-span-12">
                            <label class="font-semibold" for="email">E-mail:</label>
                            <input type="email" id="email" name="email" class="form-input mt-3" placeholder="E-mail">
                        </div>

                        <div class="mb-4 md:col-span-4 col-span-12">
                            <label class="font-semibold" for="position">Position:</label>
                            <input id="position" name="position" type="text" class="form-input mt-3" placeholder="Position">
                        </div>

                        <div class="mb-4 md:col-span-4 col-span-12">
                            <label class="font-semibold" for="password">Password:</label>
                            <input id="password" name="password" type="password" class="form-input mt-3" placeholder="Enter your password">
                        </div>

                        <div class="mb-4 md:col-span-4 col-span-12">
                            <label for="gender" class="font-medium">Gender</label>
                            <div class="form-icon relative mt-2">
                                <label>
                                    <select name="gender" class="form-input ps-11">
                                        <option>Gender</option>
                                        <option value='male'>Male</option>
                                        <option value='female'>Female</option>
                                    </select>
                                </label>
                            </div>
                        </div>

                        <div class="mb-4 md:col-span-4 col-span-12">
                            <label class="font-semibold" for="phone">Phone:</label>
                            <input id="phone" name="phone" type="tel" class="form-input mt-3" placeholder="+998 (__) ___-__-__">
                        </div>

                        <!-- Admin role for /admin/create -->
                        <?php if ($isAdmin): ?>
                            <div class="mb-4 md:col-span-4 col-span-12">
                                <label class="font-semibold" for="role">Role:</label>
                                <input id="role" name="role" type="text" class="form-input mt-3" placeholder="Enter role (e.g., Admin)">
                            </div>
                        <?php endif; ?>

                        <?php if($_SESSION["login_error"]): ?>
                            <?= $_SESSION["login_error"]; ?>
                        <?php endif; ?>

                        <div class="text-center mb-4">
                            <div class="mb-4">
                                <button type="submit" class="btn bg-green-600 hover:bg-green-700 text-white rounded-md w-full">
                                    <?= $isAdmin ? 'Register as Admin' : 'Register'; ?>
                                </button>
                            </div>

                            <span class="text-slate-400 me-2">Already have an account?</span>
                            <a href="<?= $isAdmin ? '/admin/login' : '/user/login'; ?>" class="btn bg-yellow-500 hover:bg-yellow-600 text-white rounded-md w-1/2 py-2 px-4 mx-auto block">
                            <?= $_SESSION["login_error"];?>
                        <?php end();?>

                        <div class="text-center mb-4">
                        <!-- Register button -->
                        <div class="mb-4">
                            <button type="submit" class="btn bg-green-600 hover:bg-green-700 text-white rounded-md w-full">
                                Register
                            </button>
                        </div>
                            <!-- Sign in button -->
                            <span class="text-slate-400 me-2">Already have an account?</span>
                            <a href="/user/login" class="btn bg-yellow-500 hover:bg-yellow-600 text-white rounded-md w-1/2 py-2 px-4 mx-auto block">
                                Sign in
                            </a>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<div class="fixed bottom-3 end-3 z-10">
    <a href="" class="back-button btn btn-icon bg-green-600 hover:bg-green-700 text-white rounded-full"><i data-feather="arrow-left" class="size-4"></i></a>
</div>

<!-- JAVASCRIPTS -->
<script src="../../assets/libs/particles.js/particles.js"></script>
<script src="../../assets/libs/feather-icons/feather.min.js"></script>
<script src="../../assets/js/plugins.init.js"></script>
<script src="../../assets/js/app.js"></script>
<!-- JAVASCRIPTS -->
</body>
</html>
