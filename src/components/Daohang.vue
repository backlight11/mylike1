<template>
  <!--导航-->
  <div class="big-dh">
    <div class="sm-dh">
      <div class="sy">
        <router-link to="/">
          <div class="home">HOME</div>
          首页
        </router-link>
      </div>
      <ul class="x-dh">
        <li>
          <router-link to="/pinpai"><div class="biaoti">BRAND</div>美莱品牌</router-link>
        </li>
        <li><router-link to="/yiyuan"><div class="biaoti">CHAIN</div>连锁医院</router-link></li>
        <li><router-link to="/zixun"><div class="biaoti">NEWS</div>新闻资讯</router-link></li>
        <li><router-link to="/yanjiu"><div class="biaoti">RESEARCH</div>学术研究</router-link></li>
        <li><router-link to="/huodong"><div class="biaoti">STAR</div>明星活动</router-link></li>
        <li><router-link to="/gushi"><div class="biaoti">CASES</div>焕美故事</router-link></li>
        <li><router-link to="/zhongxin"><div class="biaoti">SERVICE</div>咨询中心</router-link></li>
      </ul>
      <a href="" class="seach"></a>
    </div>
  </div>
</template>

<script type="text/javascript">
  export default {
    name: 'Daohang'
  }
</script>

<style lang="scss">
  /*导航*/
  .big-dh{
    width:100%;
    height:104px;
    position:absolute;
    bottom:0;
    background:rgba(0,0,0,0.5);
    .sm-dh{
      height:100%;
      margin:0 auto;
      .sy{
        width:90px;
        height:100%;
        color:#fff;
        display: inline-block;
        text-align:center;
        a{
          font-size:16px;
          padding:25px 0 5px 0;
          color:#fff;
          display:inline-block;
          text-align:center;
          .home{
            font-size:20px;
          }
        }
      }
      .x-dh{
        width:auto;
        height:100%;
        display:inline-block;
        li{
          width:auto;
          height:100%;
          color:#fff;
          display: inline-block;
          text-align:center;
          transition:all 0.3s;
          a{
            font-size:16px;
            padding:25px 0 5px 0;
            color:#fff;
            display:inline-block;
            text-align:center;
            .biaoti{
              font-size:20px;
            }
          }
        }
      }
      .x-dh{
        li:hover{
          background:#771675;
        }
      }
      .seach{
        display:block;
        float:right;
        width:50px;
        height:100%;
        background:url(../assets/img/btn1.png) center no-repeat;
      }
    }

  }
</style>
