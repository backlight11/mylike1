<template>
<div>
  <Nav></Nav>
  <Lunbo></Lunbo>
  <SYcontent></SYcontent>
  <SYcontent1></SYcontent1>
  <Footer></Footer>
</div>
</template>
<script>
import Nav from '../Nav';
import Lunbo from '../Lunbo';
import Footer from '../Footer';
import SYcontent from './SYcontent';
import SYcontent1 from './SYcontent1';

export default{
    name:'Home',
    components:{
        Nav,
        Lunbo,
        SYcontent,
        SYcontent1,
        Footer
    }
}
</script>
<style>

</style>
