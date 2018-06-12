<template>
  <div>
    <Nav></Nav>
    <div class="lun1">
      <img src="../../assets/img/14667375643179f4c87ac0eea3.jpg" alt="">
      <Daohang></Daohang>
    </div>
    <div class="xs">
      <img src="../../assets/img/title6.png" alt="">
    </div>
    <ul class="yi-box">
      <!--第一排-->
      <li>
        <img src="../../assets/img/1477647482e277be22113d205c.jpg" alt="">
        <div>
          <p>2016年10月美莱承办</p>
          <p>第13届全国整形医师大会</p>
        </div>
      </li>
      <li>
        <img src="../../assets/img/1445937817fa2639f98822625f.jpg" alt="">
        <div>
          <p>2015首届国际综合鼻整形</p>
          <p>高峰论坛在四川美莱举行</p>
        </div>
      </li>
      <li>
        <img src="../../assets/img/1445937157819cf88af90d38fb.jpg" alt="">
        <div>
          <p>2015年中巴微整形学术</p>
          <p>交流会在深圳美莱举行</p>
        </div>
      </li>
      <li>
        <img src="../../assets/img/144593622037adf31c23172d74.jpg" alt="">
        <div>
          <p>2015年5月艾玉峰院长主编</p>
          <p>《整形美容外科学全书》正式面世</p>
        </div>
      </li>
      <!--二-->
      <li>
        <img src="../../assets/img/1445935519294095f1dc82f103.jpg" alt="">
        <div>
          <p>2014中美韩五官整形峰会</p>
          <p>在云南美莱盛大召开</p>
        </div>
      </li>
      <li>
        <img src="../../assets/img/144593463283213aa35153f959.jpg" alt="">
        <div>
          <p>
            美莱院长受邀并主讲马尼拉</p>
          <p>
            第十四届亚太美容外科大会</p>
        </div>
      </li>
      <li>
        <img src="../../assets/img/14459338555a50fd1fb7de9337.jpg" alt="">
        <div>
          <p>
            2014年中日微整形学术</p>
          <p>
            交流会在深圳美莱举行</p>
        </div>
      </li>
      <li>
        <img src="../../assets/img/1445933200c11e99830b8ccf99.jpg" alt="">
        <div>
          <p>
            2014年10月美莱承办</p>
          <p>
            乳房整形全国巡讲高峰论坛</p>
        </div>
      </li>
      <!--三-->
      <li>
        <img src="../../assets/img/14459327414b6cd56d54961ebc.jpg" alt="">
        <div>
          <p>2014年7月张东舜院长受邀</p>
          <p>出席第三届世界整形大会</p>
        </div>
      </li>
      <li>
        <img src="../../assets/img/144593205527a4097fadaa8d3e.jpg" alt="">
        <div>
          <p>
            2014年7月泛亚太医学美容</p>
          <p>
            培训中心暨美莱国际部成立</p>
        </div>
      </li>
      <li>
        <img src="../../assets/img/1445931358f9214fe644b4717f.jpg" alt="">
        <div>
          <p>2014年5月泛亚太鼻整形</p>
          <p>技术研究中心落户美莱</p>
        </div>
      </li>
      <li>
        <img src="../../assets/img/14459303796615a0a0eda39ff5.jpg" alt="">
        <div>
          <p>
            2014年5月爱贝芙中南区</p>
          <p>微整形示范基地落户长沙美莱</p>
        </div>
      </li>
      <!--四-->
      <li>
        <img src="../../assets/img/1445929538399e379dfbc8ed6d.jpg" alt="">
        <div>
          <p>2014年3月好莱坞丰胸大师</p>
          <p>布莱恩签约长沙美莱</p>
        </div>
      </li>
      <li>
        <img src="../../assets/img/1445928696a90acfb5b5c66fb1.jpg" alt="">
        <div>
          <p>2014第三届中国鼻整形(修复)</p>
          <p>高峰论坛在广州美莱举行</p>
        </div>
      </li>
      <li>
        <img src="../../assets/img/144592749067c90b93c51d6ad3.jpg" alt="">
        <div>
          <p>
            2012国际皮肤前沿技术</p>
          <p>
            高峰论坛举行</p>
        </div>
      </li>
      <li>
        <img src="../../assets/img/1445926690d1c05618fb697cdf.jpg" alt="">
        <div>
          <p>
            2011年美莱独家协办</p>
          <p>
            第18届“世界美容医学大会”</p>
        </div>
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
    name:'Yanjiu',
    components:{
      Nav,
      Daohang,
      Footer
    }
  }

</script>

<style lang="scss">
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
.lun1{
  width:100%;
  height:auto;
  position:relative;
  img{
    width:100%;
  }
}
.yi-box{
  width:100%;
  height:auto;
  background:#000;
  margin:0;
  li{
    cursor:pointer;
    float:left;
    height:auto;
    position:relative;
    transition:all 0.3s;
    img{
      width:100%;
    }
    div{
      width:100%;
      height:100%;
      position:absolute;
      top:0;
      background:rgba(0,0,0,0.5);
      display:none;
      p{
        text-align:center;
        color:#fff;
        line-height:20px;
      }
    }
  }
  li:hover{
    div{
      display:block;
    }
  }
}
</style>
