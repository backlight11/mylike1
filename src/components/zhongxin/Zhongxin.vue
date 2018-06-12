<template>
  <div>
    <Nav></Nav>
    <div class="lun1">
      <img src="../../assets/img/14473257904b0405589a0bdf74.jpg" alt="">
      <Daohang></Daohang>
    </div>
    <div class="center">
      <div class="cen">
         <div class="ce1">
           铸行业标准，创百年美莱！<br>
           美莱全球医美专家定制美丽！
         </div>
         <table>
           <tr>
             <td>选择省/市</td>
             <td>美莱旗下连锁</td>
           </tr>
           <tr>
             <td>
               <select v-model='selected'>
                 <option v-for='item in arr'>{{item}}</option>
               </select>
             </td>
             <td>{{selected}}美莱</td>
           </tr>
         </table>
      </div>
    </div>
    <div class="cbox">
      <div class="c1"><img src="../../assets/img/144653670060261c6f9de6b85e.jpg" alt=""></div>
      <div class="c2">{{selected}}美莱</div>
      <div class="c3">
        <a href="" target="_blank">在线咨询>></a>
        <a href="" target="_blank">项目预约>></a>
      </div>
      <div class="c4">
        <div class="cz1">{{selected}}美莱医疗美容医院</div>
        <div class="cz2">
          地址：{{selected}}天河区林和西横路222号<br>
          400-685-9999
        </div>
        <div class="cz3"><a href="">进入官网</a></div>
      </div>
    </div>
    <div class="ct">
      <div class="ct1">美莱医疗美容医院集团</div>
      <div class="ct2"><a href="http://www.shmylike.com?pzlxkf">上海总部旗舰</a></div>
    </div>
    <Footer></Footer>
  </div>
</template>

<script type="text/javascript">
  import Nav from '../Nav';
  import Footer from '../Footer';
  import Daohang from '../Daohang';
  export default{
    name:'Zhongxin',
    components:{
      Nav,
      Daohang,
      Footer
    },
    data(){
        return {
            selected:'北京',
            img:'',
            arr:["上海","北京","广州","深圳","天津","城都","重庆","武汉","南京","长沙","杭州","厦门","昆明","苏州","福州","沈阳","郑州","石家庄","西安","贵阳","宁波","衡阳","曲靖","万州","泉州"]
        }
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
  }
  .center{
    width:100%;
    height:auto;
    background:url(../../assets/img/144655646411fb73116c0c3fdd.jpg) no-repeat center;
    .cen{
      width:80%;
      height:590px;
      margin:0 auto;
      padding-bottom:180px;
      .ce1{
        font-size:25px;
        color:#fff;
        text-align:center;
        padding:68px 0 104px 0;
      }
      table{
        width:95%;
        height:100px;
        margin:0 auto;
        tr{
          td{
            width:50%;
            height:58px;
            border:1px solid #fff;
            color:#fff;
            font-size:20px;
            text-align:center;
            line-height:58px;
            select{
              width:100%;
              height:100%;
              background:transparent;
              border:none;
              option{
                width:100%;
                height:auto;
                background:#fff;
                color:#333;
                font-size:16px;
              }
            }

          }
        }
      }
    }
  }
  .cbox{
    width:100%;
    height:404px;
    display:block;
    background:#fff;
    position:relative;
    .c1{
      width:40%;
      height:auto;
      float:left;
      img{
        width:100%;
      }
    }
    .c2{
      width:40%;
      padding:20px 0;
      text-align:center;
      position:absolute;
      bottom:0;
      background:rgba(0,0,0,0.3);
      color:#fff;
      font-size:20px;
    }
    .c3{
      width:20%;
      height:auto;
      float:left;
      background:#666;
      a{
        width:100%;
        display:block;
        height:202px;
        text-align:center;
        color:#fff;
        line-height:202px;
      }
    }
    .c4{
      width:40%;
      background:#fff;
      float:left;
      .cz1{
        width:100%;
        color:#333;
        text-align:center;
        padding-top:93px;
      }
      .cz2{
        width:100%;
        line-height:40px;
        text-align:center;
        padding:36px 0;
      }
      .cz3{
        width:100%;
        text-align:center;
        a{
          display: inline-block;
          background: #761674;
          color: #FFF;
          padding: 15px 75px;
          border-radius: 5px;
        }
      }
    }
  }
  .ct{
    width:100%;
    /*height:344px;*/
    padding:91px;
    background:#999;
    color:#fff;
    display:block;
    .ct1{
      width:80%;
      height:52px;
      margin:0 auto;
      text-align:center;
      line-height:52px;
      font-size:40px;
    }
    .ct2{
      width:80%;
      height:79px;
      margin:0 auto;
      text-align:center;
      line-height:79px;
      font-size:70px;
      margin-top:20px;
      a{
        color:#fff;
      }
    }
  }
</style>
