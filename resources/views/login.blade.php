<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-tutor Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Left Section -->
        <div class="w-1/2 flex justify-center items-center bg-blue-50">
            <div>
                <img src="https://via.placeholder.com/400x400" alt="Illustration">
            </div>
        </div>

        <!-- Right Section -->
        <div class="w-1/2 flex justify-center items-center">
            <div class="w-3/4">
                <div class="flex justify-between items-center mb-4">
                    <img src="https://via.placeholder.com/100x50" alt="E-Tutor Logo">
                    <a href="#" class="text-orange-500 hover:text-orange-700 font-semibold">Create Account</a>
                </div>
                <h1 class="text-2xl font-bold mb-6">Sign in to your account</h1>
                <form action="#" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" class="block w-full px-4 py-2 mt-1 border border-gray-300 rounded-md focus:ring-orange-500 focus:border-orange-500">
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" id="password" name="password" class="block w-full px-4 py-2 mt-1 border border-gray-300 rounded-md focus:ring-orange-500 focus:border-orange-500">
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="remember" name="remember" class="h-4 w-4 text-orange-500 border-gray-300 rounded focus:ring-orange-500">
                        <label for="remember" class="ml-2 block text-sm text-gray-900">Remember me</label>
                    </div>
                    <button type="submit" class="w-full py-2 px-4 bg-orange-500 text-white font-semibold rounded-md hover:bg-orange-600 focus:ring-2 focus:ring-offset-2 focus:ring-orange-500">Sign In</button>
                </form>
                <p class="text-center text-gray-500 my-4">Sign in with social media</p>
                <div class="flex justify-center space-x-4">
                    <button class="p-2 border border-gray-300 rounded-md hover:border-gray-400">
                        <img src="https://via.placeholder.com/24x24" alt="Google">
                    </button>
                    <button class="p-2 border border-gray-300 rounded-md hover:border-gray-400">
                        <img src="https://via.placeholder.com/24x24" alt="Facebook">
                    </button>
                    <button class="p-2 border border-gray-300 rounded-md hover:border-gray-400">
                        <img src="https://via.placeholder.com/24x24" alt="Apple">
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
