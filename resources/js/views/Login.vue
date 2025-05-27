<template>
    <div class="max-w-md mx-auto mt-10 p-6 bg-white rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-4 text-center">Вход</h1>
        <form @submit.prevent="login">
            <div class="mb-4">
                <label class="block text-gray-700 font-medium">Email</label>
                <input v-model="form.email" type="text" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-medium">Пароль</label>
                <input v-model="form.password" type="password" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">Войти</button>
        </form>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            form: {
                email: '',
                password: '',
            },
        };
    },
    methods: {
        async login() {
            try {
                const response = await axios.post('/login', this.form);
                localStorage.setItem('token', response.data.token);
                axios.defaults.headers.common['Authorization'] = `Bearer ${response.data.token}`;
                this.$router.push('/knives');
            } catch (error) {
                console.error('Ошибка входа:', error.response?.data?.message || error.message);
                alert('Неверные данные для входа');
            }
        },
    },
};
</script>