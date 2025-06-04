<!DOCTYPE html>
<html lang="en" x-data="{ categoryOpen: false, showModal: false }" class="bg-gray-100">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Responsive Supplier UI</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
  <style>
    [x-cloak] { display: none; }
  </style>
</head>
<body class="font-sans p-4 md:p-6 lg:p-10">

  <!-- Top Buttons -->
  <div class="flex sm:flex-row justify-between gap-4 mb-6">
    <button class="bg-orange-400 text-white px-4 py-2 rounded-full shadow">Main Menu</button>
    <button class="bg-orange-400 text-white px-6 py-2 rounded-full shadow">Action</button>
  </div>

  <!-- Category & Connect Section -->
  <div class="flex flex-col gap-4 mb-2">
    <div>
      <h2 class="text-orange-500 font-bold text-lg text-center">Categories</h2>
    </div>

    <!-- Dropdown -->
    <div class="relative flex justify-center">
      <button 
        @click="categoryOpen = !categoryOpen"
        class="bg-orange-400 text-white px-6 lg:w-2/5 py-2 rounded-full shadow flex items-center justify-center w-64 "
      >
        All Categories
        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
        </svg>
      </button>
      <div x-show="categoryOpen" @click.away="categoryOpen = false" class="absolute mt-2 w-48 bg-white rounded shadow z-10">
        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Category 1</a>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Category 2</a>
      </div>
    </div>
  </div>

  <!-- Connect Supplier Button & Modal -->
  <div class="flex justify-center">
    <button @click="showModal = true"
      class="bg-green-500 text-white px-2 py-2 rounded-full lg:w-2/5 shadow w-64">
      Connect Supplier Using Token
    </button>
  </div>

  <!-- Modal -->
  <div x-show="showModal" x-cloak class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div @click.away="showModal = false"
      class="relative bg-white rounded-2xl shadow-xl p-6 w-11/12 max-w-md text-center space-y-4">
      
      <!-- Close Button -->
      <button @click="showModal = false" class="absolute top-2 right-2 text-gray-400 hover:text-red-500 text-2xl font-bold">
        &times;
      </button>

      <h2 class="font-semibold text-gray-700 text-lg">Connect Supplier Using Token</h2>
      <input type="text" placeholder="Enter Token For Verification"
        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" />
      <button
        class="bg-green-500 text-white px-6 py-2 rounded-full font-semibold hover:bg-green-600 shadow">
        Verify Token
      </button>
    </div>
  </div>

  <!-- Supplier Info Card -->
  <div class="bg-white rounded-xl shadow-lg p-6 space-y-4 max-w-full sm:max-w-md lg:max-w-lg mx-auto mt-2">
    <div class="flex items-center space-x-3 text-orange-500 font-semibold">
      <span>🏠</span>
      <span>Name of Supplier</span>
    </div>
    <div class="flex items-center space-x-3 text-orange-500 font-semibold">
      <span>🧑</span>
      <span>Contact Person</span>
    </div>
    <div class="flex items-center space-x-3 text-orange-500 font-semibold">
      <span>📞</span>
      <span>Phone No</span>
    </div>
    <div class="flex items-center space-x-3 text-orange-500 font-semibold">
      <span>✉️</span>
      <span>Email</span>
    </div>

    <!-- Action Buttons -->
    <div class="flex flex-col sm:flex-row gap-3 pt-4">
      <button class="flex-1 bg-gradient-to-r from-blue-500 to-blue-700 text-white px-4 py-2 rounded-lg font-semibold shadow text-center">
        Product & Prices
      </button>
      <button class="flex-1 bg-gradient-to-r from-purple-500 to-purple-700 text-white px-4 py-2 rounded-lg font-semibold shadow text-center">
        Supplier Details
      </button>
    </div>
  </div>

</body>
</html>
