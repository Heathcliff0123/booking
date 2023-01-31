<template>
  <h1>Register</h1>
  <form>
    <label>First Name</label>
    <input v-model="ussername" type="text" required />
    <label>Last Name</label>
    <input v-model="ussername" type="text" required />
    <label>Email</label>
    <input v-model="ussername" type="text" required />
    <label>Password</label>
    <input v-model="ussername" type="text" required />
    <div class="submit">
      <button>Register</button>
    </div>
    <div class="submit">
      <button @click="Login">Login</button>
    </div>
  </form>
</template>
<script>
export default {
  methods: {
    Login() {
      this.$router.push("/");
    },
  },
};
</script>
