import Vue from 'vue'
import Router from 'vue-router'
import Home from '../components/shouye/Home'
import Pinpai from '../components/pinpai/Pinpai'
import Yiyuan from '../components/yiyuan/Yiyuan'
import Zixun from '../components/zixun/Zixun'
import Yanjiu from '../components/yanjiu/Yanjiu'
import Huodong from '../components/huodong/Huodong'
import Gushi from '../components/gushi/Gushi'
import Zhongxin from '../components/zhongxin/Zhongxin'



Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'Home',
      component: Home
    },
    {
      path:'/pinpai',
      name:'Pinpai',
      component:Pinpai
    },
    {
      path:'/yiyuan',
      name:'Yiyuan',
      component:Yiyuan
    },
    {
      path:'/zixun',
      name:'Zixun',
      component:Zixun
    },
    {
      path:'/yanjiu',
      name:'Yanjiu',
      component:Yanjiu
    },
    {
      path:'/huodong',
      name:'Huodong',
      component:Huodong
    },
    {
      path:'/gushi',
      name:'Gushi',
      component:Gushi
    },
    {
      path:'/zhongxin',
      name:'Zhongxin',
      component:Zhongxin
    }
  ]
})
