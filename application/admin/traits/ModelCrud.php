<?php
/**
 * 后台的增删改查
 * @author yupoxiong<i@yufuping.com>
 * @version 1.0
 * Date: 2017/8/7
 */

trait ModelCrud
{

    /**
     * 列表
     */
    public function index(){
        $model = $this->getModel();
        $map = $this->getMap($model);

        $this->dataList($model, $map);

        return $this->view->fetch();


    }

    /**
     * 添加
     */
    public function add(){

    }


    /**
     * 编辑
     */
    public function edit(){

    }


    /**
     * 删除
     */
    public function del(){

    }

}