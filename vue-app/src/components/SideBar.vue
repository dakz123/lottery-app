<template>
  <div class="w-[200px] bg-indigo-700 px-2 py-4 text-white transition-all">
    <router-link class="flex items-center p-2  hover:bg-black/30 transition-colors rounded " :to="{name:'app.dashboard'}">
      <span class="mr-2 text-gray-300" >
<HomeIcon class="w-5"/>
      </span>
      <span class="text-sm">Dashboard</span>
    </router-link> 
     <router-link class="flex items-center p-2  hover:bg-black/30 transition-colors rounded " :to="{name:'app.users'}">
      <span class="mr-2 text-gray-300" >
<UsersIcon class="w-5"/>
      </span>
      <span class="text-sm">Users</span>
    </router-link> 
     
    </div>
</template>

<script setup>
 import {HomeIcon,UsersIcon,ViewListIcon,ChartBarIcon} from '@heroicons/vue/outline';
 </script>
<style scoped>

</style>