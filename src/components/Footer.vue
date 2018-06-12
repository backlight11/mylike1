<template>
<div class="footer">
  <div class="to-top"><img id="scrollTop" src="../assets/img/toA.png" alt=""></div>
  <div class="footer1"><img src="../assets/img/img218.png" alt=""></div>
  <div class="footer2">
    <div class="fote2">
       <ul class="fo"><li v-for="h in h2">{{h}}</li></ul>
       <div class="te">
         <ul>
           <li v-for="item in ul"><a href="">{{item}}</a></li>
         </ul>
         <ul>
           <li v-for="item in ul1"><a href="">{{item}}</a></li>
         </ul>
         <ul>
           <li v-for="item in ul2"><a href="">{{item}}</a></li>
         </ul>
         <ul>
           <li v-for="item in ul3"><a href="">{{item}}</a></li>
         </ul>
         <ul>
           <li v-for="item in ul4"><a href="">{{item}}</a></li>
         </ul>
         <ul>
           <li v-for="item in ul5"><a href="">{{item}}</a></li>
         </ul>
         <ul>
           <li v-for="item in ul6"><a href="">{{item}}</a></li>
         </ul>
       </div>
    </div>
  </div>
  <div class="footer3">版权所有 © 美莱医疗美容连锁医院集团  客服电话 <a href=""> 400-898-0000 </a> <a href="">粤ICP备14044911号-12</a></div>
</div>
</template>

<script type="text/javascript">
export default{
    name:'Footer',
    data(){
        return {
          h2: ['整形美容项目',
            '皮肤美容项目',
            '华东地区',
            '华中华东区',
            '华南地区',
            '华北东北区',
            '西南地区'
          ],
          ul: ["双眼皮","祛眼袋","隆鼻","隆胸","祛眼袋","吸脂减肥","瘦脸针","玻尿酸"],
          ul1:["激光脱毛","祛斑祛痣","祛胎记","祛疤痕","祛痘去痘印","美白嫩肤","除皱抗衰老","口腔美容"],
          ul2:['上海美莱',
               '杭州美莱',
               '宁波美莱',
               '苏州美莱',
               '厦门美莱',
               '南京美莱',
               '苏州紫馨',
               '福州美莱华美',
               '泉州美莱华美'],
          ul3:[
              '长沙美莱',
              '衡阳美莱',
              '郑州美莱',
              '武汉美莱',
              '洛阳美莱',
              '济南美莱',
              '合肥美莱',
              '衡阳美莱'
          ],
          ul4:[
            '广州美莱',
            '广州紫馨',
            '深圳美莱',
            '南宁美莱',
            '石狮美莱',
            '桂林美莱',
            '海口美莱'
          ],
          ul5:[
            '北京美莱',
            '天津美莱',
            '石家庄美莱',
            '西安美莱',
            '沈阳美莱',
            '哈尔滨美莱',
            '长春美莱'
          ],
          ul6:[
            '成都美莱',
            '成都华美紫馨',
            '重庆华美',
            '万州华美',
            '昆明美莱',
            '贵阳美莱',
            '贵阳华美美莱',
            '曲靖华美美莱'
          ],
        }
    },
    mounted(){
            $(window).scroll(function(){
                 $("#scrollTop").on('click',function(){
                   $("html,body").animate({
                     scrollTop:0
                   },300)
                 })
            })
    }
}
</script>

<style lang="scss">

.footer{
  width:100%;
  height:auto;
  .to-top{
    width:100%;
    background:#333;
    overflow:hidden;
    #scrollTop{
      display:block;
      cursor:pointer;
    }
  }
  .footer1{
    width:100%;
    background:#333;
    box-sizing:border-box;
    border-top:1px solid #3d3d3d;
    img{
      display:block;
      cursor:pointer;
    }
  }
  .footer2{
    width:100%;
    height:390px;
    overflow:hidden;
    background:#1e1e1e;
    .fote2{
      height:100%;
      margin:0 auto;
      .fo{
          width:100%;
          height:94px;
          box-sizing:border-box;
          border-bottom:1px solid #292929;
          li{
            width:13.9%;
            padding-left:50px;
            height:94px;
            line-height:94px;
            float:left;
            color: #FFF;
            font-size: 16px;
            font-weight: 400;
            overflow: hidden;
          }
      }
      .te{
        width:100%;
        height:auto;
        ul{
          width:13.9%;
          padding-left:50px;
          height:auto;
          float:left;
          li{
            width:100%;
            height:30px;
            line-height:30px;
            a{
              font-size:12px;
              color:#999;
            }
            a:hover{
              color:#fff;
            }
          }
        }
      }
    }
  }
  .footer3{
    width:100%;
    height:65px;
    background:#000;
    text-align:center;
    line-height:65px;
    color:#fff;
    a{
      color:#333;
    }
    a:hover{
      color:#1c5a97;
    }
  }
}
</style>
