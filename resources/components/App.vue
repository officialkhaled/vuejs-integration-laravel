<template>
    <div id="app">
        <nav>
            <router-link to="/admin">Admin</router-link>
            |
            <router-link to="/attendee">Attendee</router-link>
        </nav>

        <router-view></router-view>
    </div>
</template>

<script>
export default {
    name: 'App',
};
</script>

<style>
#app {
    font-family: Avenir, Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    color: #2c3e50;
    margin-top: 20px;
}

nav {
    margin-bottom: 20px;
}

nav a {
    font-weight: bold;
    color: #2c3e50;
    text-decoration: none;
    margin: 0 10px;
}

nav a.router-link-exact-active {
    color: #42b983;
}
</style>
