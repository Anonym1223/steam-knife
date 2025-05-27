<template>
    <div>
        <a v-if="purchase" href="">
            Покупка прошла успешно
        </a>
        <a v-else href="">
            Покупка провалилась
        </a>
    </div>
</template>

<script>
export default {
    data() {
        return {
            purchase: null,
            knife: null
        };
    },
    async created() {
        const id = this.$route.params.id;

        try {

            const response = await axios.get(`/buy/${id}`);
            this.purchase = response.data;
        }
        catch {

            console.error('Ошибка:', error);
        }

        try {
            const info = await axios.get(`/knife/${id}`);
            this.knife = info.data;
            console.log(this.knife)

        } catch (error) {
            console.error('Ошибка загрузки ножа:', error);
        }

    }
};
</script>