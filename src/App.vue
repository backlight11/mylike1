<template>
  <div id="app">

    <router-view/>
  </div>
</template>

<script>
export default {
  name: 'App'
}
</script>

<style>
  body{
    width:100%;
    height:100%;
  }
*{
  padding:0;
  margin:0;
  list-style:none;
}
a{
  text-decoration:none;
  color:#000;
}
a:hover{
  text-decoration:none;
}
#app {
  width:100%;
  height:auto;
}

</style>
