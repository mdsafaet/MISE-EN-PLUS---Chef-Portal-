<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Manage Team </title>
    <script src="https://cdn.tailwindcss.com"></script>
    
</head>
<body class="bg-white-100 min-h-screen font-sans">
    <header class="bg-white shadow-sm py-3 px-4 flex items-center justify-between border-b border-gray-200">
        <div class="flex items-center gap-2">
           
            <h1 class="text-xl px-10 py-3 font-semibold text-gray-800 absolute left-1/2 -translate-x-1/2">Admin</h1>
        </div>

       
    </header>

    <main class="max-w-full mx-auto p-4">
        <div class="flex bg-gray-200 rounded-lg overflow-hidden shadow-sm mb-6">
            <button class="flex-1 py-3 text-center text-gray-800 font-semibold bg-white border-b-2 border-orange-500 rounded-lg text-sm">Manage Team</button>
            <button class="flex-1 py-3 text-center text-gray-600 text-sm">Manage Roster</button>
        </div>

        <div class="mb-6">
            <button class="flex items-center gap-2 px-6 py-2 bg-orange-500 text-white rounded-md shadow-md text-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                New Staff
            </button>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                       
                        <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-950 uppercase tracking-wider whitespace-nowrap">Full Name</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-950 uppercase tracking-wider whitespace-nowrap">Position</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-950 uppercase tracking-wider whitespace-nowrap">Contact No.</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-950 uppercase tracking-wider whitespace-nowrap">Emergency Contact</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-950 uppercase tracking-wider whitespace-nowrap">Personal Info</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                       
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Alex Hales</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm  font-medium text-gray-900">Chef</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm  font-medium text-gray-900">0404670200</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm  font-medium text-gray-900">Jamal (0412389528)</td>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                             <a href="#" class=" hover:text-blue-900 inline-block"> <img src="{{ asset('assets/onti/images/edit.png') }}" class="h-5 w-5">
                         </a>
                            </td>
                    </tr>
                    <tr>
                        
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">Gabriall Greenwood</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">Chef</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">0404670200</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">Damen (0404070201)</td>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                             <a href="#" class="text-blue-600 hover:text-blue-900 inline-block"> <img src="{{ asset('assets/onti/images/edit.png') }}" class="h-5 w-5">
                         </a>
                            </td>
                    </tr>
                    <tr>
                        
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">Adam Go</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">Head Chef</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">0411235698</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">Alicia (04041024567)</td>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                             <a href="#" class="text-blue-600 hover:text-blue-900 inline-block"> <img src="{{ asset('assets/onti/images/edit.png') }}" class="h-5 w-5">
                         </a>
                            </td>
                    </tr>
                    <tr>
                        
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">Alexa Huston</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">Chef de Partie</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">0414321654</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">Hunter (0456321456)</td>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                             <a href="#" class="text-blue-600 hover:text-blue-900 inline-block"> <img src="{{ asset('assets/onti/images/edit.png') }}" class="h-5 w-5">
                         </a>
                            </td>
                    </tr>
                    <tr>
                        
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Jhon Cena</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">Chef de Partie</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">0404670301</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">George (0404670500)</td>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                             <a href="#" class="text-blue-600 hover:text-blue-900 inline-block"> <img src="{{ asset('assets/onti/images/edit.png') }}" class="h-5 w-5">
                         </a>
                            </td>
                    </tr>
                 
                </tbody>
            </table>
        </div>

        <div class="flex flex-col items-center justify-between mt-4">
            <p class="text-sm text-gray-600 mb-2">Showing 1 to 15 of 39 results</p>
            <nav class="relative z-0 inline-flex shadow-sm -space-x-px" aria-label="Pagination">
                <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500">
                    <span class="sr-only">Previous</span>
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </a>
                <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700">1</a>
                <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-orange-500 text-white text-sm font-medium">2</a>
                <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500">
                    <span class="sr-only">Next</span>
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                </a>
            </nav>
        </div>
    </main>
</body>
</html>