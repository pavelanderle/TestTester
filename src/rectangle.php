<?php
class Rectangle
{
	private $width;
	private $height;

	public function __construct($width, $height)
	{
		$this->width = $width;
		$this->height = $height;
    }
    
    public function getWidth(){
        return $this->width;
    }

    public function getHeight(){
        return $this->height;
    }

    public function setWidth($width){
        if ($width>0) {
            $this->width=$width;
        }
    }
    
    public function setHeight($height)
    {
        if ($height>0) {
            $this->height=$height;
        }
    }

	public function getArea()
	{
		return $this->width * $this->height;
	}

	public function isSquare()
	{
		return $this->width === $this->height;
	}
}
