<!DOCTYPE html>
<html lang="en" class="bg-white text-gray-900">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Kitchen</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  </head>

  <body class="pb-24 max-w-screen-lg mx-auto px-4 sm:px-6 lg:px-8">

       
    </header>


      <div class="mt-4 flex flex-wrap justify-between gap-2 items-center">
        <button class="bg-orange-500 text-white px-2 py-2 rounded-md text-sm">Action</button>
       
              <p class=" font-bold text-sm sm:text-base">My Kitchen</p>
 
        {{-- <button class="bg-orange-500 text-white px-2 py-2 rounded-md text-sm">Add Section</button> --}}

        <div x-data="{ open: false }">
  <!-- Button to open modal -->
  <button 
    @click="open = true" 
    class="bg-orange-500 text-white px-2 py-2 rounded-md text-sm"
  >
    Edit Pantry
  </button>

  <!-- Modal backdrop -->
  <div 
    x-show="open" 
    x-transition 
    class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center"
  >
    <!-- Modal content -->
    <div 
      @click.away="open = false" 
      x-transition 
      class="bg-white rounded-lg p-6 max-w-md mx-auto shadow-lg"
    >
      <h2 class="text-lg font-semibold mb-4">Add New Section</h2>
      <p>This is your modal content. Put your form or content here.</p>
      
      <!-- Close button -->
      <button 
        @click="open = false" 
        class="mt-6 bg-gray-300 hover:bg-gray-400 text-gray-800 px-3 py-2 rounded"
      >
        Close
      </button>
    </div>
  </div>
</div>

        
      </div>
    </div>

    <!-- Section Button Row -->
    <div class="p-4 sm:p-6 rounded-md space-y-4 mt-4">
      <div class="flex flex-wrap justify-between gap-2">
      
        <h3 class="  text-black  text-sm font-semibold">Section</h3>
        <h3 class="    text-orange-500 underline decoration-orange-500  text-sm font-semibold">Pantry-list</h3>
        <h3 class=" text-black  text-sm font-semibold">Prep-list</h3>
      </div>


<div class="overflow-x-auto w-full mt-2">
  <div class="flex space-x-4 p-4 min-w-[1000px]">
    <div class="w-20 h-10   bg-orange-500  rounded-m flex items-center justify-center">Pan</div>
    <div class="w-20 h-10 bg-orange-500 rounded-md flex items-center justify-center">Lader</div>
    <div class="w-20 h-10 bg-orange-500 rounded-md flex items-center justify-center">Prep-list</div>
    <div class="w-20 h-10 bg-orange-500 rounded-md flex items-center justify-center">Bar</div>
    <div class="w-20 h-10 bg-orange-500 rounded-md flex items-center justify-center">Pan</div>
    <div class="w-20 h-10 bg-orange-500 rounded-md flex items-center justify-center">Prep-list</div>
    <div class="w-20 h-10 bg-orange-500 rounded-md flex items-center justify-center">Prep-list</div>
    <div class="w-20 h-10 bg-orange-500 rounded-md flex items-center justify-center">Prep-list</div>

    <div class="w-20 h-10 bg-orange-500 rounded-md flex items-center justify-center">Prep-list</div>
    <div class="w-20 h-10 bg-orange-500 rounded-md flex items-center justify-center">Prep-list</div>
 
  </div>
</div>



<div class="flex flex-col sm:flex-row items-center justify-between px-4 py-3 gap-3">
  <!-- Left: Search Box -->
  <div class="flex items-center border border-orange-500 rounded-md overflow-hidden bg-gray-50 w-full sm:w-1/3 md:w-1/4">
    <input
      type="text"
      placeholder="Search Item"
      class="w-full px-3 py-2 bg-transparent focus:outline-none"
    />
    <div class="px-3 text-gray-600">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 104.5 4.5a7.5 7.5 0 0012.15 12.15z" />
      </svg>
    </div>
  </div>

  <!-- Middle: Title -->
  <div class="text-center font-semibold text-lg flex-grow">
    Pan Pantry List
  </div>

  <!-- Right: Clear Button -->
  <button class="border border-orange-500 text-orange-500 font-medium px-4 py-2 rounded-md hover:bg-orange-50 w-full sm:w-auto">
    Clear List
  </button>
</div>



<div class=" mx-auto mt-10 px-4" x-data="{ showModal: false }">

  <!-- Product Card -->
  <div class="flex items-center justify-between bg-white p-4 rounded-lg shadow-lg border border-gray-200">
    <!-- Image -->
    <img src="https://res.cloudinary.com/dnawewlz7/image/upload/v1/Restaurant%20Tech%20Files/ordersplus/uqxjazvsq0rgwrwnsvd3"
         alt="Carrots"
         class="w-16 h-16 rounded-md object-cover" />

    <!-- Product Info -->
    <div class="flex-1 px-3">
      <p class="font-semibold text-gray-800">Beef Tenderloin </p>
      <p class="text-sm text-gray-500">5kg </p>
    </div>

    <!-- Price Info -->
    <div class="flex-1 px-3">
      <p class="font-semibold text-gray-800">Price</p>
      <p class="text-sm text-red-500">$55.8</p>
    </div>

    <!-- Actions -->
    <div class="flex items-center gap-3">
      <!-- Info Button -->
      <button @click="showModal = true" class="border-2 border-blue-500 text-blue-500 rounded p-1 hover:bg-orange-100">
            <svg xmlns="http://www.w3.org/2000/svg" 
       class="h-5 w-5 transition duration-200 group-hover:scale-110" 
       fill="none" 
       viewBox="0 0 24 24" 
       stroke="currentColor" 
       stroke-width="2">
    <path stroke-linecap="round" 
          stroke-linejoin="round" 
          d="M13 16h-1v-4h-1m1-4h.01M12 2a10 10 0 100 20 10 10 0 000-20z" />
  </svg>
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>

      <!-- Delete Button -->
      <button class="border-2 border-orange-500 text-orange-500 rounded p-1 hover:bg-orange-100">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>
  </div>

  <!-- Modal -->
  <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50" x-show="showModal">
    <div class="bg-white rounded-lg p-6 relative" @click.away="showModal = false">
      <button class="absolute top-2 right-2 text-gray-600 hover:text-gray-900" @click="showModal = false">
        &times;
      </button>
      <h2 class="text-lg font-bold text-gray-800 mb-2">Beef Tenderloin</h2>
      <img src="https://res.cloudinary.com/dnawewlz7/image/upload/v1/Restaurant%20Tech%20Files/ordersplus/uqxjazvsq0rgwrwnsvd3"
           alt="Carrots"
           class="w-full h-48 object-cover rounded mb-4" />
 <p class="font-semibold text-gray-900 truncate">ABC Meat & Poultry</p>
    <p class="text-gray-600 text-xs">SKU: <span class="font-medium">BTL-12345</span></p>
    <p class="text-green-600 text-sm font-semibold">In Stock</p>
    <p class="text-gray-400 text-xs mt-1">Next Del: <span class="font-medium">26/05/2023</span></p>

      <p class="text-sm text-gray-700 mb-2">5kg</p>
      <label class="block text-sm text-gray-600 mb-1">Quantity</label>
      <input type="number" value="1" min="1" class="w-24 border border-gray-300 rounded px-2 py-1 mb-4" />
      <textarea class="w-full border border-gray-300 rounded p-2 resize-none mb-4" rows="3" placeholder="Notes...">Hello</textarea>
      <div class="flex justify-end gap-2">
        <button class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">Save Notes</button>
        <button class="bg-orange-600 hover:bg-orange-700 text-white px-4 py-2 rounded">Add to Order</button>
      </div>
    </div>
  </div>
</div>


  </body>
</html>
