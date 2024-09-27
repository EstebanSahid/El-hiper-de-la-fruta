<template>
    <div>
        <h1>Login</h1>
        <form @submit.prevent="login">
            <div>
            <label>Email:</label>
            <input v-model="email" type="email" required />
            </div>
            <div>
            <label>Password:</label>
            <input v-model="password" type="password" required />
            </div>
            <button type="submit">Login</button>
        </form>
        <p v-if="error">{{ error }}</p>
        </div>
</template>
<script>

import axios from 'axios';
export default {
data() {
    return {
    email: '',
    password: '',
    error: null
    };
},
methods: {
    async login() {
    try {
        const response = await axios.post('/api/login', {
        email: this.email,
        password: this.password
        });
        alert(response.data.message);
        // Redirigir o hacer algo en caso de login exitoso
    } catch (error) {
        this.error = error.response.data.message || 'Login failed';
    }
    }
}
};
</script>
