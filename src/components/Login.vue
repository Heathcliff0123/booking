<template>
  <div class="body">
    <form @submit.prevent="submit" action="Hotel.php" method="POST">
      <h1>Login</h1>
      <label>Ussername</label>
      <input
        name="ussername"
        id="ussername"
        v-model="ussername"
        type="text"
        required
      />

      <label>Password</label>
      <input
        name="password"
        id="password"
        v-model="password"
        type="text"
        required
      />
      <div class="submit">
        <button name="submit" id="submit">Submit</button>
      </div>
    </form>
  </div>

  <table class="table">
    <tr v-for="row in allData" :key="row">
      <th>{{ row.Fullname }}</th>
    </tr>
  </table>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      allData: "",
      ussername: "",
      password: "",
    };
  },
  components: axios,
  methods: {
    submit() {
      axios.get("Hotel.php").then((response) => console.log(response));
      if (this.ussername === "Admin") {
        if (this.password === "Password") {
          localStorage.setItem("0", this.ussername);
          this.ussername = "";
          this.password = "";
          this.$router.push("/Landing");
        }
      }
    },
  },
};
</script>

<style>
form {
  max-width: 420px;
  margin: 30px auto;
  background: black;
  text-align: left;
  padding: 40px;
  border-radius: 10px;
}
label {
  color: #aaa;
  display: inline-block;
  margin: 25px 0 15px;
  font-size: 0.6em;
  text-transform: uppercase;
  letter-spacing: 1px;
  font-weight: bold;
}
input,
select {
  display: block;
  padding: 10px 6px;
  width: 100%;
  box-sizing: border-box;
  border: none;
  border-bottom: 1px solid #ddd;
  color: #555;
}
button {
  background: red;
  border: 0;
  padding: 10px 20px;
  margin-top: 20px;
  color: white;
  border-radius: 20px;
}
.submit {
  text-align: center;
}
.body {
  background-color: black;
}
</style>
