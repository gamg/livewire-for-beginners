<div>
    <section class="flex flex-col items-center space-y-4 py-12">
        <h1 class="text-3xl font-bold">
            {{ $welcome }}
        </h1>

        @if(session()->has('message'))
            <h3 class="bg-blue-400 font-bold p-2 w-1/3 rounded text-center text-sm text-white">{{ session('message') }}</h3>
        @endif

        <livewire:task/>
    </section>
</div>
