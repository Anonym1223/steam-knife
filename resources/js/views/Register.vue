<template>
    <div class="max-w-md mx-auto mt-10">
        <h1 class="text-2xl font-bold mb-4">Регистрация</h1>
        <form @submit.prevent="register">
            <div class="mb-4">
                <label class="block text-gray-700">Имя</label>
                <input v-model="form.name" type="text" class="w-full p-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Email</label>
                <input v-model="form.email" type="email" class="w-full p-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Пароль</label>
                <input v-model="form.password" type="password" class="w-full p-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Подтверждение пароля</label>
                <input v-model="form.password_confirmation" type="password" class="w-full p-2 border rounded" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Зарегистрироваться</button>
        </form>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            form: {
                name: '',
                email: '',
                password: '',
                password_confirmation: '',
            },
        };
    },
    methods: {
        async register() {
            try {
                const response = await axios.post('/register', this.form);
                localStorage.setItem('token', response.data.token);
                this.$router.push('/knives');
            } catch (error) {
                console.error('Ошибка регистрации:', error.response?.data?.message || error.message);
                alert('Ошибка регистрации');
            }
        },
    },
};
</script>