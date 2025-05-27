<template>
    <div class="flex p-6 gap-4">
        <div class="p-6 border rounded">
            <h2 class="text-2xl font-bold mb-4">Профиль пользователя</h2>
            <div v-if="user">
                <p><strong>Email:</strong> {{ user.email }}</p>
                <p><strong>Имя:</strong> {{ user.name }}</p>
            </div>
            <p v-else>Загрузка...</p>
        </div>
        <div class="flex-grow p-6 border rounded">
            <h2 class="text-2xl font-bold">Покупки пользователя</h2>
            <div v-if="purchases"></div>
            <p v-else class="wx-max mt-5">
                Нет покупок
            </p>
        </div>
    </div>

</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            user: null
        };
        return {
            purchases: null
        };
    },
    async created() {
        try {
            const info = await axios.get('/user');
            this.user = info.data;
            const response = await axios.get('/user');
            const purchases = await axios.get('/purchases');
        } catch (err) {
            console.error('Ошибка загрузки пользователя:', err);
            this.$router.push('/login');
        }
    }
};
</script>