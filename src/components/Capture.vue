<template>
  <div class="body">
    <form @submit.prevent="submit">
      <h1>Choose hotel</h1>
      <label>Choose hotel</label>
      <select v-model="hotel">
        <option>hello</option>
      </select>

      <label>Check in date</label>
      <input v-model="checkin" type="date" required />

      <label>Check out date</label>
      <input v-model="checkout" type="date" required />
      <div class="submit">
        <button>Submit</button>
      </div>
    </form>
  </div>
</template>
<script>
export default {
  data() {
    return { hotel: "", checkin: "", checkout: "" };
  },
  methods: {
    submit() {
      this.$router.push("/Compare");
      //   if (this.ussername === "Admin") {
      //     if (this.password === "Password") {
      //       localStorage.setItem("0", this.ussername);
      //       this.ussername = "";
      //       this.password = "";
      //       this.$router.push("/Landing");
      //     }
      //   }
    },
  },
};
</script>
