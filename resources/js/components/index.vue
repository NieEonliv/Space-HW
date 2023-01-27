<template>
    <div class="container-fluid">
        <div class="container">
            <div class="row mb-3">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <router-link class="nav-link" :to="{name: 'galaxys.index'}">Галактики</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" :to="{name: 'galaxys.create'}">Создание галактики</router-link>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" @click.prevent="generate" >Сгенерировать солнечных систем</a>
                    </li>
                </ul>
            </div>
            <div class="container">
                <router-view></router-view>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    name: "index",
    methods: {
        generate() {
            axios.post('/api/solar_system/generate').then();
        }
    }
}
</script>

<style scoped>

</style>
