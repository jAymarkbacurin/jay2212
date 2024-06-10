<button {{ $attributes->merge(['type' => 'submit', 'class' => 'transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110  duration-300 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-slate-900 hover:border-yellow-600 border-[1px] border-slate-900 bg-slate-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110  duration-300']) }}>
    {{ $slot }}
</button>
