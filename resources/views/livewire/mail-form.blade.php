<form wire:submit.prevent="save" class="p-4">
    @auth
    @else
        <div class="my-1">
            <label for="email" class="block text-gray-700 text-sm font-medium mb-2">Votre
                Email:</label>
            <input type="email" id="email" wire:model="email" required
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('email')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror
        </div>
    @endauth
    <div class="my-2 mb-4">
        <label for="message" class="block text-gray-700 text-sm font-medium mb-2">Message:</label>
        <textarea id="message" wire:model="message" rows="2" 
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
        @error('message')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>
    <div class="flex items-center justify-between h-min">
        <button type="submit"
            class="bg-[#65B741] hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            Envoyer
        </button>
    </div>
</form>
