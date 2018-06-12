<template>
  <div class="lunbo_dh">
    <div class="innerbox">
      <div class="inner"><img src="../assets/img/lunbo_daohang1.jpg" alt=""></div>
      <div class="inner"><img src="../assets/img/lunbo_daohang2.jpg" alt=""></div>
    </div>
    <div class="left"></div>
    <div class="right"></div>
    <Daohang></Daohang>
  </div>
</template>

<script type="text/javascript">
  import Daohang from './Daohang'
  export default {
    name: 'Lunbo',
    components:{
        Daohang
    },
    mounted(){
      var num=0;
      var t=setInterval(move,8000)
      function move(){
        if(!$('.inner').is(':animated')){
          num++
          if(num>=$('.inner').length){
            num=0;
          }
          $('.inner').eq(num).fadeIn(800).siblings().fadeOut(800)
        }
      }
      $('.box').hover(function(){
        clearInterval(t)
      },function(){
        t=setInterval(move,8000)
      })
      $('.left').click(function(){
        move()
      })
      $('.right').click(function(){
        if(!$('.inner').is(':animated')){
          num--
          if(num<0){
            num=$('.inner').length-1;
          }
          $('.inner').eq(num).fadeIn(800).siblings().fadeOut(800)

        }
      })
    }
  }
</script>

<style lang="scss">
  /*轮播*/
  .lunbo_dh{
    width:100%;
    display:block;
    position:relative;
    .innerbox{
      width:100%;
      position:absolute;
      .inner{
        width:100%;
        position: absolute;
        top:0;left:0;
        img{
          display:inline-block;
          width:100%;
        }
      }
    }
    .left{
      width: 40px;
      height:48px;
      position:absolute;
      background:url(../assets/img/arr.png) no-repeat;
      right:180px;
      margin-top:25%;
      background-position:0 0;
    }
    .right{
      width: 40px;
      height:48px;
      position:absolute;
      background:url(../assets/img/arr.png) no-repeat;
      right:70px;
      margin-top:25%;
      background-position:-132px 0;
    }

  }
</style>
