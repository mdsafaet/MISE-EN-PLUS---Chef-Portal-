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
    Add Section
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
      
        <h3 class="  text-orange-500 underline decoration-orange-500 text-sm font-semibold">Section</h3>
        <h3 class="   text-black   text-sm font-semibold">Pantry-list</h3>
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

 

    <!-- Ladder Info -->
    <div class="flex flex-wrap justify-between items-center mt-4 gap-2">
      <h2 class="text-sm font-semibold text-gray-700">Ladder Detail Info :</h2>
      <button class="bg-orange-500 text-white px-4 py-2 rounded-md text-sm font-semibold">Edit Section</button>
    </div>


        <!-- Staff Cards -->
    <div class="max-h-[500px] overflow-y-auto space-y-4 p-4 bg-gray-100 rounded-xl mt-4 shadow-inner">
      <!-- Card 1: Swap only -->
<div class="flex flex-col sm:flex-row gap-4 p-4 bg-blue-50 rounded-xl shadow-sm">
  <!-- Image Upload -->
  <div class="w-20 h-20 shrink-0 mx-auto sm:mx-0">
    <label for="avatar1" class="cursor-pointer w-full h-full flex items-center justify-center rounded-full border-2 border-dashed border-gray-400 bg-gray-100 text-gray-500 text-xs text-center">
      Upload<br>Image
    </label>
    <input id="avatar1" type="file" accept="image/*" class="hidden" />
  </div>

  <!-- Inputs -->
  <div class="flex-1 space-y-2">
    <input type="text" value="Alice" class="w-full px-3 py-2 rounded border border-gray-300 text-sm" />
    <input type="text" value="Chef" class="w-full px-3 py-2 rounded border border-gray-300 text-sm" />
    <input type="text" value="0123456789" class="w-full px-3 py-2 rounded border border-gray-300 text-sm" />
    <input type="text" value="Full Time" class="w-full px-3 py-2 rounded border border-gray-300 text-sm" />
  </div>

  <!-- Action -->
  <div class="flex justify-end sm:items-start sm:justify-center sm:flex-col">
    <button class="bg-yellow-400 hover:bg-yellow-500 text-white p-2 rounded-full">
      <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path d="M4 4v6h6M20 20v-6h-6M4 10l6 6M20 14l-6-6" />
      </svg>
    </button>
  </div>
</div>

<!-- Card 2: Delete only -->
<div class="flex flex-col sm:flex-row gap-4 p-4 bg-blue-50 rounded-xl shadow-sm">
  <div class="w-20 h-20 shrink-0 mx-auto sm:mx-0">
    <label for="avatar2" class="cursor-pointer w-full h-full flex items-center justify-center rounded-full border-2 border-dashed border-gray-400 bg-gray-100 text-gray-500 text-xs text-center">
      Upload<br>Image
    </label>
    <input id="avatar2" type="file" accept="image/*" class="hidden" />
  </div>
  <div class="flex-1 space-y-2">
    <input type="text" value="Bob" class="w-full px-3 py-2 rounded border border-gray-300 text-sm" />
    <input type="text" value="Waiter" class="w-full px-3 py-2 rounded border border-gray-300 text-sm" />
    <input type="text" value="0987654321" class="w-full px-3 py-2 rounded border border-gray-300 text-sm" />
    <input type="text" value="Part Time" class="w-full px-3 py-2 rounded border border-gray-300 text-sm" />
  </div>
  <div class="flex justify-end sm:items-start sm:justify-center sm:flex-col">
    <button class="bg-red-500 hover:bg-red-600 text-white p-2 rounded-full">
      <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5-3h4a1 1 0 011 1v1H9V5a1 1 0 011-1zM4 7h16" />
      </svg>
    </button>
  </div>
</div>

<!-- Card 3: Delete only -->
<div class="flex flex-col sm:flex-row gap-4 p-4 bg-blue-50 rounded-xl shadow-sm">
  <div class="w-20 h-20 shrink-0 mx-auto sm:mx-0">
    <label for="avatar3" class="cursor-pointer w-full h-full flex items-center justify-center rounded-full border-2 border-dashed border-gray-400 bg-gray-100 text-gray-500 text-xs text-center">
      Upload<br>Image
    </label>
    <input id="avatar3" type="file" accept="image/*" class="hidden" />
  </div>
  <div class="flex-1 space-y-2">
    <input type="text" value="Carol" class="w-full px-3 py-2 rounded border border-gray-300 text-sm" />
    <input type="text" value="Manager" class="w-full px-3 py-2 rounded border border-gray-300 text-sm" />
    <input type="text" value="0171111111" class="w-full px-3 py-2 rounded border border-gray-300 text-sm" />
    <input type="text" value="Contract" class="w-full px-3 py-2 rounded border border-gray-300 text-sm" />
  </div>
  <div class="flex justify-end sm:items-start sm:justify-center sm:flex-col">
    <button class="bg-red-500 hover:bg-red-600 text-white p-2 rounded-full">
      <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5-3h4a1 1 0 011 1v1H9V5a1 1 0 011-1zM4 7h16" />
      </svg>
    </button>
  </div>
</div>

 </div>

   <!-- Assign Staff To Section -->
<div class="my-6">
  <h2 class="text-sm font-semibold text-gray-700 mb-2">Assign Staff To Section:</h2>
  <div class="bg-blue-50 p-4 rounded-2xl shadow-md flex flex-col gap-4">
    
    <!-- Scrollable Cards Container -->
    <div class="max-h-[500px] overflow-y-auto space-y-4 p-4 bg-gray-100 rounded-xl shadow-inner">

      <!-- Card 1 -->
      <div class="bg-blue-50 p-4 rounded-2xl shadow-md flex flex-col gap-4">
        <div class="flex flex-col sm:flex-row items-start gap-4">
          <div class="flex flex-col items-center gap-2 shrink-0">
            <label for="avatarAssign1" class="cursor-pointer w-20 h-20 flex items-center justify-center rounded-full border-2 border-dashed border-gray-400 bg-gray-100 text-gray-500 text-xs text-center">
              Upload<br>Image
            </label>
            <input id="avatarAssign1" type="file" accept="image/*" class="hidden" />
            <input type="checkbox" class="w-4 h-4 text-orange-500 rounded border-gray-300 focus:ring-orange-400">
          </div>
          <div class="flex-1 space-y-2 w-full">
            <input type="text" placeholder="NAME" value="Alice" class="w-full px-3 py-2 rounded-md text-center bg-white border border-gray-200 shadow-sm text-sm" />
            <input type="text" placeholder="POSITION" value="Chef" class="w-full px-3 py-2 rounded-md text-center bg-white border border-gray-200 shadow-sm text-sm" />
            <input type="text" placeholder="CONTACT NO." value="0123456789" class="w-full px-3 py-2 rounded-md text-center bg-white border border-gray-200 shadow-sm text-sm" />
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-blue-50 p-4 rounded-2xl shadow-md flex flex-col gap-4">
        <div class="flex flex-col sm:flex-row items-start gap-4">
          <div class="flex flex-col items-center gap-2 shrink-0">
            <label for="avatarAssign2" class="cursor-pointer w-20 h-20 flex items-center justify-center rounded-full border-2 border-dashed border-gray-400 bg-gray-100 text-gray-500 text-xs text-center">
              Upload<br>Image
            </label>
            <input id="avatarAssign2" type="file" accept="image/*" class="hidden" />
            <input type="checkbox" class="w-4 h-4 text-orange-500 rounded border-gray-300 focus:ring-orange-400">
          </div>
          <div class="flex-1 space-y-2 w-full">
            <input type="text" placeholder="NAME" value="Bob" class="w-full px-3 py-2 rounded-md text-center bg-white border border-gray-200 shadow-sm text-sm" />
            <input type="text" placeholder="POSITION" value="Waiter" class="w-full px-3 py-2 rounded-md text-center bg-white border border-gray-200 shadow-sm text-sm" />
            <input type="text" placeholder="CONTACT NO." value="01700000000" class="w-full px-3 py-2 rounded-md text-center bg-white border border-gray-200 shadow-sm text-sm" />
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="bg-blue-50 p-4 rounded-2xl shadow-md flex flex-col gap-4">
        <div class="flex flex-col sm:flex-row items-start gap-4">
          <div class="flex flex-col items-center gap-2 shrink-0">
            <label for="avatarAssign3" class="cursor-pointer w-20 h-20 flex items-center justify-center rounded-full border-2 border-dashed border-gray-400 bg-gray-100 text-gray-500 text-xs text-center">
              Upload<br>Image
            </label>
            <input id="avatarAssign3" type="file" accept="image/*" class="hidden" />
            <input type="checkbox" class="w-4 h-4 text-orange-500 rounded border-gray-300 focus:ring-orange-400">
          </div>
          <div class="flex-1 space-y-2 w-full">
            <input type="text" placeholder="NAME" value="Carol" class="w-full px-3 py-2 rounded-md text-center bg-white border border-gray-200 shadow-sm text-sm" />
            <input type="text" placeholder="POSITION" value="Manager" class="w-full px-3 py-2 rounded-md text-center bg-white border border-gray-200 shadow-sm text-sm" />
            <input type="text" placeholder="CONTACT NO." value="01611111111" class="w-full px-3 py-2 rounded-md text-center bg-white border border-gray-200 shadow-sm text-sm" />
          </div>
        </div>
      </div>

    </div>

    <!-- Save Section Button (outside scrollable area) -->
    <button class="w-full bg-orange-500 hover:bg-orange-600 text-white font-semibold py-3 rounded-md text-sm shadow">
      Save Section
    </button>
  </div>
  
</div>








  </body>
</html>
