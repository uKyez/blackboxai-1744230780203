<div class="max-w-md mx-auto mt-10 bg-white p-8 rounded-lg shadow-md">
    <h2 class="text-2xl font-bold mb-6 text-center">Register</h2>
    <form action="/register" method="POST">
        <div class="mb-4">
            <label class="block text-gray-700 mb-2" for="name">Name</label>
            <input type="text" id="name" name="name" class="w-full px-3 py-2 border rounded-lg">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 mb-2" for="email">Email</label>
            <input type="email" id="email" name="email" class="w-full px-3 py-2 border rounded-lg">
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 mb-2" for="password">Password</label>
            <input type="password" id="password" name="password" class="w-full px-3 py-2 border rounded-lg">
        </div>
        <button type="submit" class="w-full bg-green-600 text-white py-2 px-4 rounded-lg hover:bg-green-700">
            Register
        </button>
    </form>
</div>
