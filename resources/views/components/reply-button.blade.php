<button type="submit" {{ $attributes->merge(['class' => 'bg-blue-500 text-white font-semibold px-4 py-2 rounded-md focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
