<button {{ $attributes->merge(['type' => 'button', 'style' =>'background-color: #013B63; color: white;', 'class' => 'inline-flex items-center mr-5 px-4 py-2 border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
