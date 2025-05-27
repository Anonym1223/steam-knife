<template>
    <div class="w-full">
        <Header></Header>
        <router-view></router-view>
    </div>
</template>

<script>
import Header from './views/Header.vue';
export default {
    name: 'App',
    components:{
        Header
    }
};
</script>