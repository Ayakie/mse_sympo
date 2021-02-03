<?php
require_once('data.php');

class Card{
    private $title;
    private $name;
    private $time1;
    private $time2;
    private $tag1;
    private $tag2;
    private $embeddedLink;
    private static $slideNumber = 0;
    private static $memberList = array();
    public function __construct($row) {
        $this -> title = $row[0];
        $this -> name = $row[2];
        $this -> time1 = $row[3];
        $this -> time2 = $row[4];
        $this -> tag1 = $row[5];
        $this -> tag2 = $row[6];
        $this -> embeddedLink = $row[7];
        $this -> youtubeLink = $row[8];
        self::$slideNumber++;
        self::$memberList[] = self::$slideNumber.'．'.$row[2];
        // self::$tags[] = $row[5];
        // self::$memberDict += array('card'.$this->getSlideNumber() => $this->getSlideNumber().$this->getName());
    }

    // プライベートプロパティを取得(ゲッター)
    public function getTitle() {return $this -> title;}
    public function getName() {return $this -> name;}
    public function getTime1() {return $this -> time1;}
    public function getTime2() {return $this -> time2;}
    public function getTag1() {return $this -> tag1;}
    public function getTag2() {return $this -> tag2;}
    public function getEmbeddedLink() {return $this -> embeddedLink;}
    public function getYoutubeLink() {return $this -> youtubeLink;}
    public static function getSlideNumber() {return self::$slideNumber;}
    public static function getMemberList() {return self::$memberList;}
    // public static function getTags() {return self::$tags;}
    public function getTagColor($tag, $tagList, $colorsDict){
        if (in_array($tag, $tagList)) {
            return $colorsDict[$tag];
        };
    }
    // public static function getCommentedName($key) {return self::$memberDict[$key];}
}

?>