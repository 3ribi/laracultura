<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create User
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('activity.store') }}">
                    @csrf
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="en_title" class="block font-medium text-sm text-gray-700">en_title</label>
                            <input type="text" name="en_title" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('en_title', '') }}" />
                            @error('en_title')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="ar_title" class="block font-medium text-sm text-gray-700">ar_title</label>
                            <input type="text" name="ar_title" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('ar_title', '') }}" />
                            @error('ar_title')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="fr_title" class="block font-medium text-sm text-gray-700">fr_title</label>
                            <input type="text" name="fr_title" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('fr_title', '') }}" />
                            @error('fr_title')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="en_description" class="block font-medium text-sm text-gray-700">Name</label>
                            <input type="text" name="en_description" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('en_description', '') }}" />
                            @error('en_description')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="ar_description" class="block font-medium text-sm text-gray-700">Name</label>
                            <input type="text" name="ar_description" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('ar_description', '') }}" />
                            @error('ar_description')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="fr_description" class="block font-medium text-sm text-gray-700">Name</label>
                            <input type="text" name="fr_description" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('fr_description', '') }}" />
                            @error('fr_description')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        


                        

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Create
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>