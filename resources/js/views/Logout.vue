<template>
    <div class="p-6">Logout ...</div>
</template>
<script>
import axios from 'axios';

export default {
    async created() {
        try {
            const logout = await axios.get('/logout');
            this.$router.push('/');
        } catch (err) {
            console.error('Ошибка загрузки пользователя:', err);
            this.$router.push('/login');
        }
    }
};
</script>