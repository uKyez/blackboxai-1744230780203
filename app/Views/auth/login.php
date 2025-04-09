<div class="max-w-md mx-auto mt-10 bg-white p-8 rounded-lg shadow-md">
    <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>
    <form action="/login" method="POST">
        <div class="mb-4">
            <label class="block text-gray-700 mb-2" for="email">Email</label>
            <input type="email" id="email" name="email" class="w-full px-3 py-2 border rounded-lg">
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 mb-2" for="password">Password</label>
            <input type="password" id="password" name="password" class="w-full px-3 py-2 border rounded-lg">
        </div>
        <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700">
            Login
        </button>
        <p class="text-center mt-4">
            Don't have an account? <a href="/register" class="text-blue-600 hover:underline">Register here</a>
        </p>
    </form>
</div>
