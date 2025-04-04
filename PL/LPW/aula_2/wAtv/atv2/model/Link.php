<?php


class Link{

    private $linkImg;
    private $info;
    



    public function __construct($limg,$inf){
        
        $this->linkImg = $limg;
        $this->info = $inf;
        

    }
    

    public function __toString(){
        return'<span><img src="'. $this->linkImg .'" width="20" height="20">'. $this->info .'</span>';
    }



    /**
     * Get the value of linkImg
     */
    public function getLinkImg()
    {
        return $this->linkImg;
    }

    /**
     * Set the value of linkImg
     */
    public function setLinkImg($linkImg): self
    {
        $this->linkImg = $linkImg;

        return $this;
    }

    /**
     * Get the value of info
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Set the value of info
     */
    public function setInfo($info): self
    {
        $this->info = $info;

        return $this;
    }

    
}

?>



