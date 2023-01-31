<template>
  <v-card flat v-if="true" class="">
    <!-- <img
      :src="setImg(this.thumbnail)"
      class="card-img-top w-300"
      v-bind:alt="this.name"
      style="width: 18rem"
    /> -->
    <div class="card-body">
      <h5 class="card-title">Name</h5>
    </div>
    <div>
      <h3>Price</h3>
      <h3>Type</h3>
      <h3>Rating</h3>
      <h3>Rooms</h3>
    </div>
    <div>
      <h3>Bar</h3>
      <h3>Pool</h3>
      <h3>Sea</h3>
      <h3>Activity area</h3>
    </div>
    <div>
      <button id="mButton" @click="selectHotel">
        <span>Choose hotel</span>
      </button>
    </div>
  </v-card>
</template>

<script>
//import { BeforeMounted, mounted } from "vue";
export default {
  name: "Movie",
  components: { BeforeMounted, mounted },
  // mounted() {
  //   const hold = JSON.parse(localStorage.getItem(this.cont));
  // },
  //   data() {
  //     return {
  //       id: " ",
  //       name: " ",
  //       price: " ",
  //       rating: " ",
  //       rooms: " ",
  //       bar: " ",
  //       pool: " ",
  //       sea: " ",
  //       activity: " ",
  //     };
  //   },
  //   methods: {
  //     // setImg(thumbnail) {
  //     //   const hold = JSON.parse(localStorage.getItem(this.cont));
  //     //   var img = require.context("./assets/", false, /\.jpeg$/);
  //     //   return img("./" + hold.thumbnail + ".jpeg");
  //     // },
  //     getId() {
  //       return id;
  //     },
  //     getName() {
  //       return name;
  //     },
  //     getGenre() {
  //       return genre;
  //     },
  //     getComingSoon() {
  //       return comingSoon;
  //     },
  //     getAvailDate() {
  //       return availDate;
  //     },
  //     getThumbnail() {
  //       return thumbnail;
  //     },
  //     getPreview() {
  //       return preview;
  //     },
  //     setId(id) {
  //       this.id = id;
  //     },
  //     setName(name) {
  //       this.name = name;
  //     },
  //     getGenre(genre) {
  //       this.genre = genre;
  //     },
  //     getComingSoon(cs) {
  //       this.comingSoon = cs;
  //     },
  //     getAvailDate(ad) {
  //       this.availDate = ad;
  //     },
  //     getThumbnail(tn) {
  //       this.thumbnail = tn;
  //     },
  //     getPreview(preview) {
  //       this.preview = preview;
  //     },
  //   },
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
