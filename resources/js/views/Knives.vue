<template>
    <div class="grid grid-cols-3 gap-4 p-4">
        <div v-for="knife in knives" :key="knife.id" class="border p-4 rounded">
            <img :src="knife.image || 'https://via.placeholder.com/150'" alt="knife" class="w-full h-48 object-cover">
            <h2 class="text-xl font-bold">{{ knife.name }}</h2>
            <p>{{ knife.description || 'Нет описания' }}</p>
            <p class="text-green-500">{{ knife.price }} $</p>
        </div>
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
            const response = await axios.get('/api/knives');
            this.knives = response.data;
        } catch (error) {
            console.error('Ошибка загрузки ножей:', error);
        }
    },
};
</script>