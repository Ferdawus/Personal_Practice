<script>
export default {
  data() {
    return {
      greet: "Hi",
      name: "ferdawus",
      channel: "<b>CodeEvulations</b>",
    };
  },
};
</script>

<template>
  <div v-text="greet"></div>
  <div v-html="channel"></div>
  <p v-text="name"></p>
</template>

<style></style>
