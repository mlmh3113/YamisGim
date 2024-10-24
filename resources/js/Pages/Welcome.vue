<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});

function handleImageError() {
    document.getElementById('screenshot-container')?.classList.add('!hidden');
    document.getElementById('docs-card')?.classList.add('!row-span-1');
    document.getElementById('docs-card-content')?.classList.add('!flex-row');
    document.getElementById('background')?.classList.add('!hidden');
}
</script>

<template>
    <Head title="Welcome" />

    <div class="flex flex-col items-center justify-center mx-5 rounded-md overflow-hidden max-h-screen gap-5 bg-gradient-to-r from-cyan-500 to-blue-500 py-10 my-10">
        <div>
            <img class="rounded-full w-96 h-96" src="/images/image3.jpeg" alt="">
        </div>

        <div>
            <h1 class="text-4xl ">Bienvenido a <span class="font-bold">YamisGim!</span> </h1>
        </div>

        <div class="flex flex-col gap-5 w-full px-10">
            <Link class="w-full text-center bg-white text-slate-500 border-2 border-blue-500 font-bold py-2 px-4 rounded-lg hover:bg-blue-500 hover:text-white hover:scale-105 transition-all transform duration-300" :href="route('login')">Iniciar Sesión</Link>
            <Link class="w-full text-center bg-white text-slate-500 border-2 border-blue-500 font-bold py-2 px-4 rounded-lg hover:bg-blue-500 hover:text-white hover:scale-105 transition-all transform duration-300" :href="route('register')">Registrarse</Link>
        </div>
    </div>
</template>

