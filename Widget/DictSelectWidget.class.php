<?php
class DictSelectWidget extends Widget {
    public function invoke($data){
        $this->assign('data', $data);
        $this->display();
    }
}
