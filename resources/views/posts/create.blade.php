<x-app-layout>
    <div class="content">
        <div class="py-12">
            <div class="max-w-7xl mx-auto p-4 sm:p-6 lg:p-8">
                <div class="overflow-hidden shadow-sm sm:rounded-lg" style="background-color: #000E2B;">
                    <div class="p-6 text-justify">
                        <div class="mt-2 shadow-sm rounded-lg divide-y" style="background-color: #000E2B; color: white;">
                            <form method="POST" action="{{ route('posts.store') }}">
                                @csrf
                                <label for="category">Category</label>
                                <br>
                                <select     
                                    name="category" 
                                    id="category" 
                                    class="form-control mt-1 custom-spacing block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm "
                                    style="width: 200px; color: black;">
                                        <option value="Travel">Travel</option>
                                        <option value="Technology">Technology</option>
                                        <option value="Crypto">Crypto Currency</option>
                                </select>
                                <br>
                                <label for="title" class="mt-3">Title</label>
                                <input 
                                    type="text" 
                                    name="title" 
                                    id="titleInput"
                                    placeholder=""
                                    class="form-control mt-1 custom-spacing block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm "
                                    style="color: black;"
                                >
                                <x-input-error :messages="$errors->get('title')" class="mt-2" />
                                <br>
                                <label for="description" class="mt-3">Description</label>
                                <textarea
                                    name="description"
                                    id="descriptionInput"
                                    placeholder="{{ __('What\'s on your mind?') }}"
                                    rows="7"
                                    class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                                    style="color: black;"
                                >{{ old('description') }}</textarea>
                                <x-input-error :messages="$errors->get('description')" class="mt-2" />
                                <x-primary-button class="mt-4">{{ __('Create Post') }}</x-primary-button>
                                <a href="{{ route('dashboard') }}" class="red-link">{{ __('Cancel') }}</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
