<template>
  <div class="flex justify-center items-center min-h-full min-w-full w-full">
    <div class="flex">
        <div class="text-indigo-600 text-5xl px-8 font-bold border-r mb-8 leading-10">404</div>
    <div class="px-8">
        <h1 class="font-bold text-5xl mb-2">Page not found</h1>
        <p class="text-gray-500  mb-10">Sorry,we couldn't find the page you're looking for.</p>
        <div>
            <router-link :to="{name:'app.dashboard'}" class="text-white bg-indigo-500 rounded hover:bg-indigo-700 transition-colors focus:ring-1 focus:ring-indigo-700 ring-offset-1 px-3 py-1">Go back home</router-link>
        </div>
    </div>
    </div>
  </div>
</template>

<script>
</script>