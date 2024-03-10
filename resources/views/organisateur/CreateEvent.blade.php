<x-organisateur-layout>
    <div class="container mx-auto p-8 bg-white rounded shadow-lg mt-6">
        <h1 class="text-3xl text-center font-bold mb-6 text-blue-500">Create Event</h1>
        <form action="{{ route('Event.store') }}" method="post" enctype="multipart/form-data" class="max-w-md mx-auto">
            @csrf
    
            <div class="mb-6">
                <label for="titre" class="block text-gray-700 text-sm font-bold mb-2">Titre:</label>
                <input type="text" name="titre" value="{{ old('titre') }}" id="titre" class="form-input w-full px-4 py-2 border-2 border-gray-300 rounded focus:outline-none focus:border-blue-500" >
            </div>
    
            <div class="mb-4">
                <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
                <textarea name="description" id="description" class="form-textarea w-full px-4 py-2 border-2 border-gray-300 rounded focus:outline-none focus:border-blue-500" >{{ old('description') }}</textarea>
            </div>
    
            <div class="mb-4">
                <label for="lieu" class="block text-gray-700 text-sm font-bold mb-2">Lieu:</label>
                <input type="text" name="lieu" value="{{ old('lieu') }}" id="lieu" class="form-input w-full px-4 py-2 border-2 border-gray-300 rounded focus:outline-none focus:border-blue-500" >
            </div>
    
            <div class="mb-4">
                <label for="date" class="block text-gray-700 text-sm font-bold mb-2">Date:</label>
                <input type="date" name="date" value="{{ old('date') }}" id="date" class="form-input w-full px-4 py-2 border-2 border-gray-300 rounded focus:outline-none focus:border-blue-500" >
            </div>
    
            <div class="mb-4">
                <label for="places_number" class="block text-gray-700 text-sm font-bold mb-2">Places Number:</label>
                <input type="text" name="places_number" value="{{ old('places_number') }}" id="places_number" class="form-input w-full px-4 py-2 border-2 border-gray-300 rounded focus:outline-none focus:border-blue-500" >
            </div>
    
            <div class="sm:col-span-6">
                <label for="cover-photo" class="block text-sm font-medium text-gray-700">
                  Image Event
                </label>
                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                  <div class="space-y-1 text-center">
                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                      <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <div class="flex text-sm text-gray-600">
                      <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                        <span>Upload a file</span>
                        <input id="file-upload" name="image" type="file" class="sr-only">
                      </label>
                      <p class="pl-1">or drag and drop</p>
                    </div>
                    <p class="text-xs text-gray-500">
                      PNG, JPG, GIF 
                    </p>
                  </div>
                </div>
              </div>
            <div class="mb-4">
                <label for="category" class="block text-gray-700 text-sm font-bold mb-2">Category:</label>
                <select name="category" id="category" class="form-select text-black w-full px-4 py-2 border-2 border-gray-300 rounded focus:outline-none focus:border-blue-500" >
                    @forelse($Categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category_name}}</option>
                    @empty
                        <option value="" disabled>No categories available</option>
                    @endforelse
                </select>
            </div>
    
            <div class="mb-4">
                <label for="status" class="block text-black text-sm font-bold mb-2">Status:</label>
                <select name="status" id="status" class="form-select w-full px-4 py-2 border-2 border-gray-300 rounded focus:outline-none focus:border-blue-500" >
                    <option value="available">Available</option>
                    <option value="notAvailable">Not Available</option>
                </select>
            </div>
    
            <div class="mb-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Submit</button>
            </div>
        </form>
    </div>
    
</x-organisateur-layout>