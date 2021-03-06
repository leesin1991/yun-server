<?php

namespace Business\Model;
use Think\Model;

/**
 * 报修模型
 */

class BrandModel extends Model{
    protected $trueTableName = 'b_brand_info';
    
    protected $_validate = array(
        array('store_id', 'require', '系统还未分配店铺！', self::EXISTS_VALIDATE, 'regex', self::MODEL_BOTH),
        array('brand_name', 'require', '品牌名不能为空', self::EXISTS_VALIDATE, 'regex', self::MODEL_BOTH),
    );
    
    protected $_auto = array(
        array('add_date', NOW_TIME, self::MODEL_INSERT),
        array('update_time', NOW_TIME, self::MODEL_INSERT),
        array('status', '1', self::MODEL_INSERT)
    );

    /**
     * 更新信息
     */
    public function update(){
        $data = $this->create();
        if(!$data){ //数据对象创建错误
            return false;
        }
        $data['create_date'] = strtotime(I('create_date'));
        /* 添加或更新数据 */
        if(empty($data['id'])){
            $res = $this->add($data);
        }else{
            $data['update_time'] = NOW_TIME;
            $res = $this->save($data);
        }

        return $res;
    }

}
?>