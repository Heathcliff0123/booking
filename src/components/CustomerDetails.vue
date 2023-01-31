<template>
  <v-card flat v-if="true" class="">
    <div class="card-body">
      <h5 class="card-title">{{ this.name }}</h5>
    </div>
    <div>
      <h3>Email</h3>
      <h3>Customer Id</h3>
    </div>
  </v-card>
</template>

<script>
import { BeforeMounted, mounted } from "vue";
export default {
  props: ["cont", "watch"],
  name: "Customer",
  components: { BeforeMounted, mounted },
  mounted() {
    const hold = JSON.parse(localStorage.getItem(this.cont));
    this.id = hold.id;
    this.name = hold.name;
    this.email = hold.email;
  },
  data() {
    return {
      id: " ",
      name: " ",
      email: " ",
    };
  },
  methods: {
    getId() {
      return id;
    },
    getName() {
      return name;
    },
    getEmail() {
      return this.email;
    },
    setId(id) {
      this.id = id;
    },
    setName(name) {
      this.name = name;
    },
    getEmail(email) {
      this.email = email;
    },
  },
};
</script>

<style>
.card {
  width: 18rem;
  background-color: red;
  padding: 2;
  margin: 2;
  align-self: center center;
}

#mButton {
  background-color: red;
}
</style>
