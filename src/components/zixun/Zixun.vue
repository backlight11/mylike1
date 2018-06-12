<template>
  <div>
    <Nav></Nav>
    <div class="lun1">
      <img src="../../assets/img/1446547387542d6832c9daa538.jpg" alt="">
      <div class="wal"><a href="">贵阳美莱医疗美容医院盛『妆』启幕</a><br>
        怀揣着无数求美者的信赖与期待，美莱医疗美容集团-贵阳美莱医疗美容医院10月27号正式开业啦！ </div>
      <Daohang></Daohang>
    </div>
    <div class="xs">
      <img src="../../assets/img/title5.png" alt="">
    </div>
    <ul class="zi-box">
      <li>
        <div class="zzt">
          <img src="../../assets/img/15217929433ceff7469cbdb2ed.jpg" alt="">
        </div>
        <div class="zzi">
          3月18日 南京美莱盛大开业
        </div>
      </li>
      <li>
        <div class="zzt">
          <img src="../../assets/img/14768470991b9140ecc4fa7755.jpg" alt="">
        </div>
        <div class="zzi">10月武汉美莱盛大揭幕 华中医美进入品质“my like”时代</div>
      </li>
      <li>
        <div class="zzt">
          <img src="../../assets/img/1476843679cf6d2a4d1f89d026.jpg" alt="">
        </div>
        <div class="zzi">美莱医疗美容医院集团4月入驻郑州</div>
      </li>
      <li>
        <div class="zzt">
          <img src="../../assets/img/14465465951e5c9340c6fb7af0.jpg" alt="">
        </div>
        <div class="zzi">贵阳美莱医疗美容医院，盛『妆』启幕！</div>
      </li>
      <li>
        <div class="zzt">
          <img src="../../assets/img/1446545938e62cd4b20124c621.jpg" alt="">
        </div>
        <div class="zzi">
          沈阳美莱旗舰店盛大开业 开创东北医美新格局
        </div>
      </li>
      <li>
        <div class="zzt">
          <img src="../../assets/img/1445522480e24545c1b2861f43.jpg" alt="">
        </div>
        <div class="zzi">林志颖High爆美莱20城联动庆典</div>
      </li>
      <li>
        <div class="zzt">
          <img src="../../assets/img/1445521888646aae27af7a56ed.jpg" alt="">
        </div>
        <div class="zzi">中国数字化内窥镜隆乳技术培训班在美莱开幕</div>
      </li>
      <li>
        <div class="zzt">
          <img src="../../assets/img/14455207971bf23b0bf677b9e6.jpg" alt="">
        </div>
        <div class="zzi">第四届微针技术培训班在广州美莱举行</div>
      </li>
      <li>
        <div class="zzt">
          <img src="../../assets/img/14455205740f3b94656f2a9f38.jpg" alt="">
        </div>
        <div class="zzi">
          2015年中巴微整形学术交流会在深圳美莱举行
        </div>
      </li>
      <li>
        <div class="zzt">
          <img src="../../assets/img/14455202839d5645d52ca3fada.jpg" alt="">
        </div>
        <div class="zzi">2015全新医美教科书在美莱震撼发布</div>
      </li>
      <li>
        <div class="zzt">
          <img src="../../assets/img/1445519917f15d402abe2f343e.jpg" alt="">
        </div>
        <div class="zzi">2015国际综合鼻整形高峰论坛在美莱举行</div>
      </li>
      <li>
        <div class="zzt">
          <img src="../../assets/img/144551944343637ca6abdcf0e3.jpg" alt="">
        </div>
        <div class="zzi">『美莱』登陆CCTV央视传递医美中国正能量</div>
      </li>
    </ul>
    <Footer></Footer>
  </div>
</template>

<script type="text/javascript">
  import Nav from '../Nav';
  import Footer from '../Footer';
  import Daohang from '../Daohang';
  export default{
    name:'Zixun',
    components:{
      Nav,
      Daohang,
      Footer
    }
  }

</script>

<style lang="scss">
  .lun1{
    width:100%;
    height:auto;
    position:relative;
    img{
      width:100%;
    }
    .wal{
      width:100%;
      padding:30px 6%;
      position:absolute;
      display:block;
      font-size:14px;
      color:#fff;
      background:rgba(0,0,0,0.3);
      a{
        color:#fff;
        font-size:24px;
        padding-bottom:10px;
      };
    }
  }
  .xs{
    width:100%;
    background:#999;
    position:relative;
    img{
      position:absolute;
      top:50%;left:50%;
      margin-left:-99px;
      margin-top:-26px;
    }
  }
  .zi-box{
    width:100%;
    height:auto;
    li{
      height:auto;
      float:left;
      .zzt{
        width:100%;
        overflow:hidden;
        img{
          width:100%;
          transition: all 0.3s;
        }
      }
      .zzi{
        width:100%;
        height:69px;
        text-align:center;
        line-height:69px;
        overflow:hidden;
        cursor:pointer;
        color:#fff;
        font-size:16px;
        background:#333;
      }
    }
  }
</style>
