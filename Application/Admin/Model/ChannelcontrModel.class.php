<?php

namespace Admin\Model;
use Think\Model;

/**
 * 报修模型
 */

class GoodsModel extends Model{
    protected $trueTableName = 'distribution_goods_group';

    protected $_validate = array(
        array('brand_id', 'require', '请选择商品品牌', self::EXISTS_VALIDATE, 'regex', self::MODEL_BOTH),
        array('goods_group_sn', 'require', '组合goodsSN不能为空', self::EXISTS_VALIDATE, 'regex', self::MODEL_BOTH),
        array('goods_sn', 'require', '商品编码不能为空', self::EXISTS_VALIDATE, 'regex', self::MODEL_BOTH),
        array('brand_id', 'require', '品牌ID不能为空', self::EXISTS_VALIDATE, 'regex', self::MODEL_BOTH),
        array('cat_id', 'require', '商品类目不能为空', self::EXISTS_VALIDATE, 'regex', self::MODEL_BOTH),
    );


    /**
     * 更新信息
     */
    public function update(){
        $data = $this->create();
        if(!$data){ //数据对象创建错误
            return false;
        }

        /* 添加或更新数据 */
        if(empty($data['id'])){
            $res = $this->add($data);
        }else{
            $res = $this->save($data);
        }
        return $res;
    }

}
?>