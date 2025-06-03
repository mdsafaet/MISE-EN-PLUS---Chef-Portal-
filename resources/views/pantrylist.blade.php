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
        class="mt-6 bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded"
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


 

<div class="max-w-7xl mx-auto space-y-8 px-4 sm:px-6 lg:px-8 mt">

  {{-- <!-- Product Card -->
  <div class="bg-white rounded-lg shadow border p-4 flex justify-between md:flex-row md:items-start gap-6">
    
    <!-- Image -->
    <img
      src="https://res.cloudinary.com/dnawewlz7/image/upload/v1/Restaurant%20Tech%20Files/ordersplus/uqxjazvsq0rgwrwnsvd3"
      alt="Grilled Salmon"
      class="w-36 h-48 rounded object-cover flex-shrink-0"
    />
<div class="">
    <!-- Product Details -->
    <div class="flex flex-col justify-between w-full md:w-40 mb-1.5">
      <div class="font-semibold text-md">Grilled Salmon</div>
      <div class="text-sm text-gray-600">500 g /</div>
      <div class="text-blue-600 font-semibold">$ 32.00</div>
    </div>

    <!-- Supplier Info -->
    <div class="flex flex-col justify-between text-sm w-full md:w-40 mt-1.5">
      <div class="font-semibold">Seafood Supplier Ltd.</div>
      <div>SKU: SAL-54321</div>
      <div class="text-green-600 font-medium">In Stock</div>
      <div class="text-gray-500">Next Del: 30/05/2023</div>
    </div>


    </div>
    
  </div>
<!-- Container wrapping Quantity Controls + Notes and Actions -->
<div class="grid grid-cols-1 gap-4 md:grid-cols-3 md:items-start w-full">

  <!-- Quantity Controls -->
  <div class="flex flex-col items-center gap-2 w-full md:w-auto">
    <div class="font-semibold">QTY Required</div>
    <div class="flex items-center space-x-2">
      <button
        class="bg-orange-500 text-white px-3 py-1 rounded font-bold"
        aria-label="Increase quantity"
      >
        +
      </button>
      <span class="font-semibold text-lg">3</span>
      <button
        class="bg-gray-600 text-white px-3 py-1 rounded font-bold"
        aria-label="Decrease quantity"
      >
        -
      </button>
    </div>
    <button
      class="bg-orange-500 text-white text-sm px-4 py-1 rounded w-full md:w-auto"
      type="button"
    >
      Price: $ 96.00 gst incl
    </button>
  </div>

  <!-- Notes -->
  <div>
    <textarea
      class="border-2 border-orange-300 rounded px-2 py-1 resize-none w-full h-full max-w-lg"
      rows="6"
      placeholder="Add notes here..."
    ></textarea>
  </div>

  <!-- Actions -->
  <div class="flex flex-col gap-2 min-w-[120px] w-full md:w-auto">
    <button
      class="bg-green-500 text-white px-4 py-1 rounded text-sm w-full md:w-auto"
    >
      💾 Save Notes
    </button>
    <button
      class="bg-orange-500 text-white px-4 py-1 rounded text-sm w-full md:w-auto"
    >
      🛒 Add to Order
    </button>
    <button
      class="bg-red-500 text-white px-4 py-1 rounded text-sm w-full md:w-auto"
    >
      🗑 Remove
    </button>
  </div>

</div> --}}

<!-- Repeat Product Card for more items -->
<div class="max-w-4xl mx-auto p-4 bg-white border border-gray-200 rounded-md shadow-sm flex flex-col md:flex-row items-center gap-4 md:gap-6">

  <!-- Image -->
  <div class="flex-shrink-0 w-24 h-24 md:w-32 md:h-32">
    <img
      src="https://res.cloudinary.com/dnawewlz7/image/upload/v1/Restaurant%20Tech%20Files/ordersplus/uqxjazvsq0rgwrwnsvd3"
      alt="Beef Tenderloin"
      class="w-full h-full object-cover rounded-md"
    />
  </div>

  <!-- Product Details -->
  <div class="flex-1 min-w-0">
    <p class="font-semibold text-gray-900 truncate">Beef Tenderloin</p>
    <p class="text-gray-700 text-sm">1 kg /</p>
    <a href="#" class="text-blue-600 font-medium hover:underline mt-1 block">$ 54.00</a>
  </div>

  <!-- Supplier & Stock Info -->
  <div class="flex-1 min-w-0">
    <p class="font-semibold text-gray-900 truncate">ABC Meat & Poultry</p>
    <p class="text-gray-600 text-xs">SKU: <span class="font-medium">BTL-12345</span></p>
    <p class="text-green-600 text-sm font-semibold">In Stock</p>
    <p class="text-gray-400 text-xs mt-1">Next Del: <span class="font-medium">26/05/2023</span></p>
  </div>

  <!-- Quantity Controls -->
  <div class="flex flex-col items-center gap-2">
    <p class="font-semibold text-gray-900">QTY Required</p>
    <div class="flex items-center gap-1">
      <button class="bg-orange-600 hover:bg-orange-700 text-white px-2 py-1 rounded-md" aria-label="Increase quantity">+</button>
      <input type="number" value="1" min="1" class="w-12 text-center border border-gray-300 rounded-md" />
      <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-2 py-1 rounded-md" aria-label="Decrease quantity">−</button>
    </div>
    <div class="mt-1 text-xs text-white bg-orange-600 rounded-md px-3 py-1 font-semibold">
      Price : $ 54.00 gst incl
    </div>
  </div>

  <!-- Notes and Action Buttons -->
  <div class="flex flex-col md:flex-row md:items-start gap-3 w-full md:w-auto min-w-[150px]">
    <textarea
      placeholder="Notes"
      class="w-full md:w-48 h-20 border border-gray-300 rounded-md p-2 resize-none focus:outline-none focus:ring-2 focus:ring-orange-500"
    >Hello</textarea>

    <div class="flex flex-col gap-2">
      <button
        class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md flex items-center justify-center gap-1"
        type="button"
      >
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
        </svg>
        Save Notes
      </button>

      <button
        class="bg-orange-600 hover:bg-orange-700 text-white px-4 py-2 rounded-md flex items-center justify-center gap-1"
        type="button"
      >
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h11M3 6h18M3 14h11M3 18h18" />
        </svg>
        Add to Order
      </button>

      <button
        class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md flex items-center justify-center gap-1"
        type="button"
      >
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
        Remove
      </button>
    </div>
  </div>





  </body>
</html>
