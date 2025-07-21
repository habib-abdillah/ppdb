<header class="bg-white shadow px-6 py-4">
    <div class="flex justify-between items-center">
        <h1 class="text-xl font-bold">PPDB Dashboard</h1>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="text-red-500 hover:underline">Logout</button>
        </form>
    </div>
</header>
