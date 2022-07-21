<?php namespace Wahidin\Ongkir\Kurir;
use Wahidin\Ongkir\Fetch\get;

class show{
    private static $instance;

    public function __construct($from_to){
        $kurir = [
            [
                'name' => 'lion',
                'volume' => '196-202-197'
            ],
            [
                'name' => 'jne',
                'volume' => '101-103-100'
            ],
            [
                'name' => 'sicepat',
                'volume' => '109-147-157'
            ],
            [
                'name' => 'tiki',
                'volume' => '148-100-148'
            ],
            [
                'name' => 'jnt',
                'volume' => '151-154-151'
            ],
            [
                'name' => 'pos',
                'volume' => '157-109-148'
            ],
            [
                'name' => 'ncs',
                'volume' => '159-103-102'
            ],
        ];
        $this->lion = $kurir[0];
        $this->jne = $kurir[1];
        $this->sicepat = $kurir[2];
        $this->tiki = $kurir[3];
        $this->jnt = $kurir[4];
        $this->pos = $kurir[5];
        $this->ncs = $kurir[6];
        $this->from_to = $from_to;
    }

    public static function init($arg){
        if(is_null(self::$instance)) self::$instance = new self($arg);
        return self::$instance;
    }

    public function lion(){
        return get::data($this->lion, $this->from_to);
    }
    public function jne(){
        return get::data($this->jne, $this->from_to);
    }
    public function sicepat(){
        return get::data($this->sicepat, $this->from_to);
    }
    public function tiki(){
        return get::data($this->tiki, $this->from_to);
    }
    public function jnt(){
        return get::data($this->jnt, $this->from_to);
    }
    public function pos(){
        return get::data($this->pos, $this->from_to);
    }
    public function ncs(){
        return get::data($this->ncs, $this->from_to);
    }
}
