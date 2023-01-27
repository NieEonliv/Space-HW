<template>
    <div class="row">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Название</span>
            <input v-model="this.galaxy.title" type="text" class="form-control">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Картинка</span>
            <input v-model="this.galaxy.image" class="form-control" type="text" placeholder="base64">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://galaxy.com/</span>
            <input type="text" v-model="this.galaxy.url" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <div class="input-group">
            <span class="input-group-text">Описание</span>
            <textarea v-model="this.galaxy.description" class="form-control" aria-label="With textarea"></textarea>
            <button @click.prevent="createGalaxy" class="input-group-text">Создать</button>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    name: "create",
    data() {
        return {
            galaxy: {
                title: null,
                image: null,
                url: null,
                description: null,
            }
        }
    },
    methods: {
        createGalaxy() {
            axios.post('/api/galaxy/create', { galaxy: this.galaxy })
                .then(response => {
                    this.$router.push({name: 'galaxys.index'});
                })
        }
    }
}
</script>

<style scoped>

</style>
