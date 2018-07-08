<?php
class Code{
    public $width=130;
    public $height=50;
    public $lette='3456789qwertyupasdfghjklzxcvbnmASDFGHJKLQWERTYUIPZXCVBNM';
    public $lineNum=4;
    public $pxNum=20;
    public $img;
    public $fontFile='MSYH.TTF';
    public $result;//存验证码字符
    /*
     * 创建图片
     * 画线
     * 画点
     * 产生验证码
     * 画文字
     * 输出
     * */
    //创建图片框
    function create(){
        $this->img=imagecreatetruecolor($this->width,$this->height);
        $arr=$this->bgcolor();
        $color=imagecolorallocate($this->img,$arr[0],$arr[1],$arr[2]);
        imagefill($this->img,0,0,$color);
    }
    //画线、画点
    function drawline(){
        for($i=0;$i<$this->lineNum;$i++){
            $arr=$this->bgcolor();
            $color=imagecolorallocate($this->img,$arr[0],$arr[1],$arr[2]);
            $x1=mt_rand(0,$this->width/2);
            $y1=mt_rand(0,$this->height/2);
            $x2=mt_rand($this->width/2,$this->width);
            $y2=mt_rand($this->height/2,$this->height);
            if($i<$this->lineNum/2){
                imageline($this->img,$x2,$y1,$x1,$y2,$color);
            }else{
                imageline($this->img,$x1,$y1,$x2,$y2,$color);
            }
        }

        for($i=0;$i<$this->pxNum;$i++){
            $arr=$this->bgcolor();
            $color=imagecolorallocate($this->img,$arr[0],$arr[1],$arr[2]);
            $x=mt_rand(0,$this->width);
            $y=mt_rand(0,$this->height);
//            imagesetpixel($this->img,$x,$y,$color);
            imagestring($this->img,mt_rand(1,5),mt_rand(0,$this->width),mt_rand(0,$this->height),'*',$color);
        }
    }
    //图片框的背景色
    function bgcolor(){
        $arr=[];
        $arr[0]=mt_rand(0,156);
        $arr[1]=mt_rand(0,156);
        $arr[2]=mt_rand(0,156);
        return $arr;
    }
    //获取字母
    function getChar(){
        $len=strlen($this->lette)-1;
        $str='';
        for($i=0;$i<4;$i++){
            $this->result.=substr($this->lette,mt_rand(0,$len),1);
        }
        $str=strtolower($this->result);
        return $str;
    }
    //让字母在文本中显示
    function drawText(){
        $x=$this->width/4;
        $y=$this->height/2;
        $arr=$this->textcolor();
        for($i=0;$i<4;$i++){
            $color = imagecolorallocate($this->img, $arr[0], $arr[1], $arr[2]);
            imagettftext($this->img,mt_rand(14,20),mt_rand(-15,15),$x*$i+5,$y+10,$color,$this->fontFile,substr($this->result,$i,1));
        }
    }
    //字体颜色
    function textcolor(){
        $arr=[];
        $arr[0]=mt_rand(108,255);
        $arr[1]=mt_rand(108,255);
        $arr[2]=mt_rand(108,255);
        return $arr;
    }

    function output(){
        header('Content-type:image/png');
        $this->create();
        $this->drawline();
        $this->getChar();
        $this->drawText();
        imagepng($this->img);
        imagedestroy($this->img);
    }
}
$code=new Code();
$code->output();
session_start();
$_SESSION['code'] = strtolower($code->result);
