  <h2 class="text-xl font-semibold text-center mb-5">Mixing Pot Restaurant</h2>
  <div class="relative flex justify-between items-center bg-white rounded-2xl p-5 mb-6 inset-shadow-sm shadow-xl/30">
    <!-- Profile Info -->
    <div class="flex items-center gap-4">
      <img
        src="https://i.pravatar.cc/100"
        alt="Profile"
        class="w-16 h-16 rounded-xl border-2 border-white shadow-sm/10"
      />
      <div>
        <h2 class="text-xl font-semibold">OrderPlus is Awesome</h2>
        <p class="text-sm">Head Chef / Sous Chef</p>
        <!-- <a href="/logout" class="text-sm text-orange-500">Logout</a> -->
      </div>
    </div>

    <!-- Hamburger & Dropdown Menu Container -->
    <div class="relative md:hidden">
      <!-- Hamburger Button -->
      <button @click="mobileOpen = !mobileOpen"
              class="bg-orange-500 w-8 h-8 rounded-full flex items-center justify-center">
        <span class="text-white text-xl">≡</span>
      </button>

      <!-- Dropdown Menu -->
      <div x-show="mobileOpen"
           x-transition
           @click.away="mobileOpen = false"
           class="absolute right-0 mt-2 w-40 bg-gray-50 p-2 rounded shadow-md flex flex-col justify-end space-y-2 z-50">
        <a href="#" class="text-black">Profile</a>
        <a href="#" class="text-black">Log out</a>
      </div>
    </div>
  </div>