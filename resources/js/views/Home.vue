<template>
    <div class="w-full">
        <div class="p-5">
            <Knives></Knives>
        </div>
    </div>
</template>

<script>
import Knives from './Knives.vue';
import Header from './Header.vue';

export default {
    components: {
        Knives, Header
    }
}
</script>
