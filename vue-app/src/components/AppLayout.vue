

<template>
    <div class="flex min-h-full bg-gray-200 ">
        <!--sidebar-->
    <Sidebar :class="{'-ml-[200px]':!sideBarOpened}"/>
  <!--sidebar-->
    <div class="flex-1">
        <Navbar @toggle-sidebar="toggleSidebar"/>
        <!--content-->
        <main class="p-6 ">
          
 <router-view></router-view>
 
        </main>
    <!--content--> 

     
    </div>
  </div>
  </template>
<script setup>
import { ref,onMounted,onUnmounted,computed} from 'vue';
import Navbar from './Navbar.vue';
import Sidebar from './Sidebar.vue';
import store from '../store';
const sideBarOpened=ref(true);
const currentUser = computed(() => store.state.user.data);
onMounted(()=>{
  store.dispatch('getUser')
  handleSideBarOpened()
  window.addEventListener('resize',handleSideBarOpened)
   // Listen for an event on Laravel Echo
   const userId = currentUser.id;
    
});
onUnmounted(()=>{
  window.removeEventListener('resize',handleSideBarOpened)
 
})
function toggleSidebar(){
 sideBarOpened.value=!sideBarOpened.value;
}
function handleSideBarOpened(){
  sideBarOpened.value = window.outerWidth > 768;
}
</script>
<style scoped>

</style>