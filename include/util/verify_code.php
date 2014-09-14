<?php
/**
 * User: Deliang Yang
 * Version: 0.1.0.0
 * Date: 14-9-14
 * Time: 上午10:15
 */

/*// 设置图片的输出格式
header("Content-type:image/jpg");
// 设置图片的大小

$width=150;
$height=50;

// 创建一张图片
$image=imagecreate($width, $height);
// 设置底色
$bgcolor=imagecolorallocate($image, 200, 200, 200);

// 文字的颜色
$strcolor=imagecolorallocate($image, 0, 0, 150);
imagestring($image, 4, 100, 100, "hello world", $strcolor);
imageline($image, 0, 0, 100, 100, $strcolor);

imagejpeg($image);

imagecolordeallocate($image, $bgcolor);
imagecolordeallocate($image, $strcolor);
imagedestroy($image);*/


class VerifyCode{

    // 设置图片的宽高
    private $width;
    private $height;
    // 设置图片资源
    private $image;
    // 设置比例
    private $scaleX;
    private $scaleY;
    // 设置图片背景的颜色资源
    private $bg_color;
    // 设置随机像素点的颜色资源
    private $pixel_color;
    // 数字字符
    private $char="1234567890";

    // 设置图片的种类
    private $image_type=array("jpg", "png");

    public function __construct($width=150, $height=50){
        $this->scaleX=$width/150;
        $this->scaleY=$height/50;
        $this->width=$width;
        $this->height=$height;
    }

    private function init($type="jpg"){
        //echo array_search($type, $this->image_type);
        // 判断该类型是否在数组内，如果不在的话，设置default
        if(!in_array($type, $this->image_type))
            $type=$this->image_type[0];
        header("Content-type:image/{$type}");

        $this->image=imagecreate($this->width, $this->height);
        $this->bg_color=imagecolorallocate($this->image, 250, 250, 250);

        // 随机200个像素点
        srand(rand(0, 100));
        for($i=0; $i<200; $i++){

            $this->pixel_color=imagecolorallocate($this->image, rand(0, 255), rand(0, 255), rand(0, 255));
            $rand_pointX=rand(0, $this->width);
            $rand_pointeY=rand(0, $this->height);
            imagesetpixel($this->image, $rand_pointX, $rand_pointeY, $this->pixel_color);
        }

        for($i=0; $i<5; $i++){
            $this->pixel_color=imagecolorallocate($this->image, rand(0, 255), rand(0, 255), rand(0, 255));

            imageline($this->image, rand(0, $this->width), rand(0, $this->height), rand(0, $this->width), rand(0, $this->height) ,$this->pixel_color);

        }
    }

    public function create($type="jpg"){

        $this->init($type);

        $this->image_out($type);
    }

    private function image_out($type){
        if($type=="jpg")
            imagejpeg($this->image);
        else if($type=="png")
            imagepng($this->image);
    }

    public function __destruct(){
        // 销毁图片颜色的资源
        imagecolordeallocate($this->image, $this->pixel_color);
        imagecolordeallocate($this->image, $this->bg_color);
        imagedestroy($this->image);
    }

}

/*$image=new VerifyCode();
$image->create();*/

for($i=0; $i<26; $i++){
    echo chr('a');
}

for($i=0; $i<26; $i++){
    echo (string)((int)'A'+$i);
}

