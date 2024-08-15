<template>
  <div>
    <h1>Admin Panel - Lottery Draw</h1>
    <button class="bg-indigo-500 text-white rounded px-2 py-1 focus:ring-1 transition-colors " @click="drawLottery">Conduct Lottery Draw</button>
    
    <div v-if="drawnNumbers.length">
      <h2>Drawn Numbers</h2>
      <ul>
        <li v-for="(number, index) in drawnNumbers" :key="index">{{ number }}</li>
      </ul>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      drawnNumbers: [],
    };
  },
  methods: {
    async drawLottery() {
      try {
        const response = await axios.post('/admin/lottery/draw');
        this.drawnNumbers = response.data.drawn_numbers;
      } catch (error) {
        console.error('Failed to conduct lottery draw:', error);
      }
    }
  },
  mounted(){
    
    // window.Echo.channel(`registration-alert`)
    //   .listen("UserRegistered", (event) => {
    //     console.log(event)
    //     this.$toast.success(`A new user has registered with email`);
    //   });
      Echo.private('registration-alert')
            .listen('UserRegistered', (e) => {
                console.log('New user registered:', e.user);
                this.$toast.success({
                    group: 'registration',
                    title: 'New User Registered',
                    text: `${e.user.name} has just registered!`
                });
            });
  }
}
</script>
