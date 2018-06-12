<template>
  <div class="nav">
    <div class="wx-login" v-show="isShow">
       <div class="close1" v-on:click="wxHidden"><img src="../assets/img/close.png" alt=""></div>
       <div class="wx-er">
         <img src="../assets/img/14485418044b37076fab5afd9d.jpg" alt="">
         <div>
           美莱医疗美容连锁集团<br>
           微信号mylikegroup
         </div>
       </div>
     </div>
     <div class="container">
       <!--黑导航-->
       <div class="row black-nav">
         <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4">
           客服电话：<a href="">400-898-0000</a>
         </div>
         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">当前城市：北京</div>
         <div class="col-lg-8 text-right col-md-7 col-sm-7 col-xs-4" v-on:click="wxShow">
           官方微信
           <img src="../assets/img/weixin_logo.png" alt="">
         </div>
       </div>
     </div>
    <!--logo导航-->
    <div class="logo">
      <img src="../assets/img/logo.jpg" alt="">
    </div>
  </div>
</template>

<script type="text/javascript">

export default {
  name: 'Nav',
  data () {
    return {
      isShow:false,
    }
  },
  methods:{
     wxShow:function(){
         this.isShow=true
     },
    wxHidden:function(){
         this.isShow=false
    }
  }
}
</script>

<style lang="scss">
  *{
    margin:0;
    padding:0;
  }
.nav{
  width:100%;
  height:100%;
  position:relative;
  .wx-login{
    width:100%;
    height:100%;
    background:rgba(0,0,0,0.9);
    z-index:100;
    position:fixed;
    .close1{
      position:absolute;
      right:20px;top:20px;
      width:45px;
      height:45px;
      cursor:pointer;
    }
    .wx-er{
      width:300px;
      height:400px;
      background:#fff;
      position:absolute;
      bottom:0;left:50%;
      margin-left:-150px;
      div{
        text-align:center;
        font-size:20px;
        padding:22px;
        color:#853387;
      }
    }
   }
  .container{
    width:100%;
    vertical-align:middle;
    /*黑导航*/
    .black-nav{
      height:40px;
      line-height:40px;
      color:#fff;
      background:#000;
      a{
        color:#fff;
      }
      div:nth-of-type(3){
        cursor:pointer;
      }
    }
  }
  /*logo导航*/
.logo{
    width:100%;
    height:147px;
    position:relative;
    img{
      padding:20px 0;
      display:inline-block;
      position:absolute;
      left:50%;
      margin-left:-92px;
    }
  }
}


</style>
