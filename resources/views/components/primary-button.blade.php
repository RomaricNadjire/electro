<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-[#65B741] border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-[#6A64d1] focus:bg-[#6A64d1] active:bg-[#6A64D1] focus:outline-none focus:ring-2 focus:ring-[#65B741] focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
