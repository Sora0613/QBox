<button type="submit" {{ $attributes->merge(['class' => 'bg-red-500 text-white font-semibold px-4 py-2 rounded-md focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
