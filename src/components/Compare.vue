<template>
  <div class="row">
    <div class="col-sm-6">
      <v-card flat v-if="true" class="">
        <!-- <img
      :src="setImg(this.thumbnail)"
      class="card-img-top w-300"
      v-bind:alt="this.name"
      style="width: 18rem"
    /> -->
        <div class="card-body">
          <h2 class="card-title">Name</h2>
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
    </div>

    <div class="col-sm-6">
      <v-card flat v-if="true" class="">
        <!-- <img
      :src="setImg(this.thumbnail)"
      class="card-img-top w-300"
      v-bind:alt="this.name"
      style="width: 18rem"
    /> -->
        <div class="card-body">
          <h2 class="card-title">Name</h2>
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
    </div>
  </div>
</template>
<script>
//import { Info2 } from "./Info2.vue";

export default {
  // components: {
  //   Info2,
  // },
};
</script>
