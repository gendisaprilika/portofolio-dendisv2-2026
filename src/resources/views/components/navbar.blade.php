<nav class="flex justify-between items-center p-6 sticky top-0 bg-white z-50 shadow-sm">

    <h1 class="text-xl font-bold text-pink-500">Gendis.dev</h1>

    <div class="space-x-6">
        <button @click="page='home'" class="hover:text-pink-500">Home</button>
        <button @click="page='about'" class="hover:text-pink-500">About</button>
        <button @click="page='projects'" class="hover:text-pink-500">Projects</button>
        <button @click="page='contact'" class="hover:text-pink-500">Contact</button>
    </div>

</nav>