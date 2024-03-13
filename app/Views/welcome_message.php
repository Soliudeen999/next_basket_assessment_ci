<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/dismissible.js"></script>
</head>
<body>

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
        <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Create New User</h2>
    </div>

        <?php if (session('success')): ?>
        <div
            role="alert"
            class="relative flex sm:mx-auto sm:w-full mt-3 sm:max-w-sm px-4 py-4 text-base text-white bg-blue-500 rounded-lg font-regular"
            data-dismissible="alert"
        >
            <div class="mr-12 "><?= session('success') ?></div>

            <button
                data-dismissible-target="alert"
                class="!absolute  top-3 right-3 h-8 max-h-[32px] w-8 max-w-[32px] select-none rounded-lg text-center align-middle font-sans text-xs font-medium uppercase text-white transition-all hover:bg-white/10 active:bg-white/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                type="button"
            >
                <span class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    class="w-6 h-6"
                    stroke-width="2"
                >
                    <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M6 18L18 6M6 6l12 12"
                    ></path>
                </svg>
                </span>
            </button>
        </div>
        <?php endif; ?>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <span class="help-block"><?php $errors = session('errors') ?></span>
        <form class="space-y-6" action="/store-user" method="POST">
        <!-- @csrf -->
        <div>
            <div class="flex items-center justify-between">
                <label for="firstname" class="block text-sm font-medium leading-6 text-gray-900">First Name</label>
            </div>
            <div class="mt-2">
                <input id="firstname" value="<?= old('firstname')?>" name="firstname" type="firstname" autocomplete="current-firstname" required class="block w-full px-3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
            <p class="text-xs text-red-900"><?= isset($errors['firstname']) ? $errors['firstname'] : '' ?></p>
        </div>
        
        <div>
            <div class="flex items-center justify-between">
                <label for="lastname" class="block text-sm font-medium leading-6 text-gray-900">Last Name</label>
            </div>
            <div class="mt-2">
                <input id="lastname" value="<?= old('lastname')?>" name="lastname" type="lastname" autocomplete="current-lastname" class="block w-full px-3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
            <p class="text-xs text-red-900"><?= isset($errors['lastname']) ? $errors['lastname'] : '' ?></p>
        </div>

        <div>
            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
            <div class="mt-2">
                <input id="email" name="email" value="<?= old('email')?>" type="text" autocomplete="email" class="block px-3 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
            <p class="text-xs text-red-900"><?= isset($errors['email']) ? $errors['email'] : '' ?></p>
        </div>
    
        <div>
            <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create User</button>
        </div>
        </form>

    </div>
</div>
</body>
</html>
