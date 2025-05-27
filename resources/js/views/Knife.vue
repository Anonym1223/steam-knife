<!-- src/views/KnifeDetail.vue -->
<template>
    <div class="max-w-2xl mx-auto mt-10">
      <h2 class="text-2xl font-bold mb-4">Информация о ноже</h2>
      <div v-if="knife">
        <p><strong>ID:</strong> {{ knife.id }}</p>
        <p><strong>Название:</strong> {{ knife.name }}</p>
        <img :src="knife.image" alt="knife" class="mt-4 w-64" />
        <a href=""></a>
      </div>
      <p v-else>Загрузка...</p>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    name: 'KnifeDetail',
    data() {
      return {
        knife: null
      };
    },
    async created() {
      const id = this.$route.params.id;
      try {
        const response = await axios.get(`/knife/${id}`);
        this.knife = response.data;
      } catch (error) {
        console.error('Ошибка загрузки ножа:', error);
      }
    }
  };
  </script>
  