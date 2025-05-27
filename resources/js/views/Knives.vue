<template>
    <div class="grid grid-cols-3 gap-4 p-4">
        <a v-for="knife in knives" :key="knife.id" class="border p-4 rounded" :href="`/knife/${knife.id}`">
            <img :src="knife.image" alt="knife" class="w-full h-48 object-cover">
            <h2 class="text-xl font-bold">{{ knife.name }}</h2>
            <p>{{ knife.description || 'Нет описания' }}</p>
            <p class="text-green-500">{{ knife.price }} $</p>
        </a>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            knives: [],
        };
    },
    async created() {
        try {
            const response = await axios.get('/knives');
            this.knives = response.data;
        } catch (error) {
            console.error('Ошибка загрузки ножей:', error);
        }
    },
};
</script>