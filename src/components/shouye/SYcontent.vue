<template>
<div class="sy-content">
   <div class="con1"><div>Brand chain</div>美莱医疗美容医院集团·旗下连锁</div>
   <div class="con2">
     <div class="con2-1"><img src="../../assets/img/nimg47_1.png" alt=""><div>亚洲</div><br>超大连锁</div>
     <div class="con2-1"><img src="../../assets/img/nimg47_2.png" alt=""><div>专业</div><br>国际化团队</div>
     <div class="con2-1"><img src="../../assets/img/nimg47_3.png" alt=""><div>历史</div><br>1999-2017</div>
   </div>
   <ul class="con3">
     <li><a href="">上海美莱</a></li>
     <li><a href="">北京美莱</a></li>
     <li><a href="">广州美莱</a></li>
     <li><a href="">深圳美莱</a></li>
     <li><a href="">天津美莱</a></li>
     <li><a href="">成都美莱</a></li>
     <li><a href="">成都华美</a></li>
     <li><a href="">重庆美莱</a></li>
     <li><a href="">武汉美莱</a></li>
     <li><a href="">南京美莱</a></li>
     <li><a href="">长沙美莱</a></li>
     <li><a href="">杭州美莱</a></li>
     <li><a href="">厦门美莱</a></li>
     <li><a href="">昆明美莱</a></li>
     <li><a href="">苏州美莱</a></li>
     <li><a href="">福州美莱</a></li>
     <li><a href="">苏州紫馨</a></li>
     <li><a href="">沈阳美莱</a></li>
     <li><a href="">郑州美莱</a></li>
     <li><a href="">石家庄美莱</a></li>
     <li><a href="">西安美莱</a></li>
     <li><a href="">贵阳美莱</a></li>
     <li><a href="">贵阳华美</a></li>
     <li><a href="">宁波美莱</a></li>
     <li><a href="">衡阳美莱</a></li>
     <li><a href="">曲靖美莱</a></li>
     <li><a href="">广州紫馨</a></li>
     <li><a href="">万州华美</a></li>
     <li><a href="">泉州美莱</a></li>
     <li><a href="">上海总部旗舰</a></li>
   </ul>
</div>
</template>

<script type="text/javascript">
export default{
    name:'SYcontent',
    data(){
        return{
            mes:'我是首页第一部分内容'
        }
    }
}
</script>

<style lang="scss">
.sy-content{
  width:100%;
  background:url(../../assets/img/1446539883b287c69d5b3c70f0.jpg)center top no-repeat;
  background-size:cover;
  .con1{
    width:100%;
    height:122px;
    color:#fff;
    div{
      font-family: Arial;
      text-transform: uppercase;
    }
  }
  .con2{
    /*width:465px;*/
    height:55px;
    .con2-1{
       height:55px;
       float:left;
       color:#fff;
       position:relative;
       img{
         position:absolute;
         left:0;
       }
       div{
         display: inline-block;
       }
    }
  }
  .con3{
    width:100%;
    box-sizing:border-box;
    border-right:#878e8e solid 1px;
    border-bottom:#878e8e solid 1px;
    li{
      margin-right:0;
      float:left;
      box-sizing:border-box;
      border-left:#878e8e solid 1px;
      border-top:#878e8e solid 1px;
      text-align:center;
      a{
        color:#fff;
      }
      a:hover{
        background:url(../../assets/img/indexPart1.png);
        border:none;
        display:block;
        margin-left: -1px;
        margin-right: -1px;
        margin-top: -1px;
        position: relative;
        z-index: 10;
      }
    }
  }
}
</style>
