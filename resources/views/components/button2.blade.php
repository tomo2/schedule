<button {{ $attributes->merge(['type' => 'submit', 'class' => 'text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 text-xs rounded-lg text-sm px-3 py-2 text-center me-1 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800']) }}>
    {{ $slot }}
</button>
