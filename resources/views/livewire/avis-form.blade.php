<div class="p-4 lg:px-8">
    <form wire:submit.prevent="save" class="space-y-4">
        <div>
            <label for="contenu" class="block text-gray-700 text-lg py-2">Laissez nous votre avis sur nous</label>
            @if ($success)
                <div x-data="{ shown: true, timeout: null }" x-init="setTimeout(() => shown = false, 3000)" x-show.transition.out.opacity.duration.1500ms="shown"
                    x-transition:leave.opacity.duration.1500ms>
                    <p x-show="shown" class="text-green-500 text-sm mt-2 text-center bg-green-50 p-2" id="auth-error">
                        {{ $success }}</p>
                </div>
            @endif
            @if ($auth_error)
                <div x-data="{ shown: true, timeout: null }" x-init="setTimeout(() => shown = false, 3000)"
                    x-show.transition.out.opacity.duration.1500ms="shown" x-transition:leave.opacity.duration.1500ms>
                    <p x-show="shown" class="text-red-500 text-sm mt-2 text-center bg-red-100 p-2" id="auth-error">
                        {{ $auth_error }}</p>
                </div>
            @endif
            <textarea
                class="mt-1 block w-full p-2.5 border border-gray-300 rounded-md shadow-sm focus:border-[#6A64F1] focus:ring-[#6A64F1]"
                id="contenu" wire:model="contenu" rows="3">
            </textarea>
            @error('contenu')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit"
            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-[#6A64F1] hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#6A64F1]">Soumettre</button>
    </form>
</div>
