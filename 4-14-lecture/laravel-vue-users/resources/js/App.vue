<template>
    <div class="container mt-5">
        <h1 class="mb-4">User List</h1>
        <div v-if="loading" class="text-center">
            <div class="spinner-border" role="status"></div>
        </div>
        <ul v-else class="list-group">
            <li v-for="user in users" :key="user.id" class="list-group-item">
                {{ user.name }} — {{ user.email }}
            </li>
        </ul>
    </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import axios from 'axios'

const users = ref([])
const loading = ref(true)

onMounted(async () => {
    const response = await axios.get('/api/users')
    users.value = response.data
    loading.value = false
})
</script>
