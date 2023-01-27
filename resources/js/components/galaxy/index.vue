<template>
    <title> Галактики </title>
    <div class="position-absolute top-0 start-0 ms-5 mt-1">
        <svg @click="edit = !edit" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
             class="bi bi-pencil trash me-2" viewBox="0 0 16 16">
            <path
                d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
        </svg>
    </div>
    <div v-if="galaxys" class="row justify-content-center">
        <div :key="galaxy.url" v-for="galaxy in galaxys" class="card p-0 m-2 position-relative" style="width: 18rem;">
            <div class="position-absolute top-0 end-0 m-2 ">

                <svg @click="deleteGalaxy(galaxy.url)" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                     fill="currentColor" class="bi bi-trash3 trash" viewBox="0 0 16 16">
                    <path
                        d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                </svg>
            </div>
            <img :src="galaxy.image" class="card-img-top" alt="error">
            <div class="card-body">
                <template v-if="edit">
                    <input class="form-control form-control-sm mb-3" v-model="galaxy.title">
                    <textarea class="form-control-sm form-control mb-3" rows="5" v-model="galaxy.description"> </textarea>
                    <button @click="updateGalaxy(galaxy.url, galaxy.title, galaxy.description)" class="btn-outline-success btn">Сохранить</button>
                </template>
                <template v-else>
                    <h5 class="card-title">{{ galaxy.title }}</h5>
                    <p class="card-text">{{ galaxy.description }}</p>
                </template>
            </div>
            <router-link class="btn btn-primary m-1" :to="{name: 'galaxys.solar', params: { galaxy: galaxy.url }}">
                Просмотреть солнечные системы
            </router-link>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    name: "index",
    data() {
        return {
            galaxys: [],
            edit: false,
        }
    },
    mounted() {
        this.getGalaxys();
    },
    methods: {
        getGalaxys() {
            axios.get('/api/galaxy')
                .then(response => {
                    this.galaxys = response.data;
                })
        },
        deleteGalaxy(url) {
            axios.get(`/api/galaxy/delete/${url}`)
                .then(response => {
                    this.getGalaxys();
                })
        },
        updateGalaxy(url,title,desc) {
            axios.patch(`/api/galaxy/${url}`,{title: title, description: desc})
                .then(response => {
                    this.getGalaxys();
                })
        },
    },
}
</script>

<style scoped>
.trash {
    color: #363636;
    transition: color .3s linear;
    cursor: pointer;
}

.trash:hover {
    color: #757575;
}
</style>
