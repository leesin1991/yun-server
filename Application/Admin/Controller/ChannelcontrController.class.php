<?php
/**
 * Created by phpStorm.
 * User: ronghaichuan
 * Date: 2017/10/17
 * Time: 9:29
 */

namespace Admin\Controller;
use Think\Model;

class ChannelcontrController extends AdminController
{
    //渠道商品列表
    public function index(){
        $map['status'] = 1;
        $sql = M()->table('distribution_goods_group')
            ->field('*')
            ->where($map)
            ->order('id DESC')
            ->buildSql();
        $channel_list = $this->page_list('distribution_goods_group',$sql);
        $this->display();
        var_dump($channel_list);exit;
    }
    //添加渠道商品
    public function addchannel(){

        if(IS_POST){
            $data['goods_group_sn'] = '{"1":"1107362","2":"1107363","3":"001861"}';
            $arr = json_decode($data['goods_group_sn'],true);
            $str = implode(',',$arr);

            $data['goods_sn']       = '001861';
            $goods = M('b_goods_info')->field('category_id,brand_id')->where(array('goods_sn'=> '001861'))->find();
            $data['cat_id'] = $goods['category_id'];
            $data['brand_id'] = $goods['brand_id'];
            $data['status'] = 1;
            $res = M('distribution_goods_group')->add($data);
            $group_id = M()->getLastInsID();
            if($res){
                $map['goods_sn'] = array('in',$str);
                $goods_group['d_group_id'] = $group_id;
                $res = M('b_goods_info')->where($map)->save($goods_group);
                if(!$res){
                    $this->error("添加渠道商品失败！！！");
                }else{
                    echo "添加分组商品成功";exit;
                }
            }

        }else{
//            $goods_sns = M("distribution_goods_group")->getField('goods_group_sn',true);
//            $str = '';
//            foreach ($goods_sns as $v){
//                $arr = json_decode($v,true);
//               $str .= ",".implode(',',$arr);
//            }
//            $str = substr($str,1);
////            var_dump($str);exit;
//            $map['goods_sn']     = array('not in',$str);
//            $map['goods_status'] = 1;
            $map['d_group_id'] = array('eq',0);
            $sql =  M()->table("b_goods_info")->field('goods_id,goods_sn,goods_name')
                ->where($map)
                ->buildSql();
//echo $sql;exit;
            $goods_list = $this->page_list('b_goods_info',$sql);
            $this->assign('_goods_list',$goods_list);
            $this->display('adds');
        }

    }
}