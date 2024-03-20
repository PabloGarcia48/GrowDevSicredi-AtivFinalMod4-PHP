<?php

require_once('./utils/next_id.php');

class Tweet {
    private $id;
    private $content;
    private $like;
    private $likeMinusOne;
    private $userName;
    private $likedUserName;

    public function __construct ($content, $userName, $like = 0) 
    {
        $this->id = createId();
        $this->content = $content;
        $this->like = $like;
        $this->userName = $userName;
    }

    public function addTweet($tweetData)
    {
        array_push($tweetData, $this);
        return $tweetData;
    }

    public function addLike($likedUserName)
    {
        $this->like += 1;
        $this->likeMinusOne = $this->like - 1;
        $this->likedUserName = $likedUserName;
    }

    public static function list($tweetData)
    {
        echo "Feed de Tweets<br><hr>";
        foreach ($tweetData as $value) {
            if ($value->like == 0) {
                echo "<html><div style='background-color: black; color: white; width: 300px; padding: 10px;'>
                @$value->userName: $value->content<br><br>
                <hr size='1' style='border:1px dashed green;'>                
            </div></html>";
            } else if ($value->like == 1) {
                echo "<html><div style='background-color: black; color: white; width: 300px; padding: 10px;'>
                @$value->userName: $value->content<br>
                [$value->likedUserName curtiu]<br><br>
                <hr size='1' style='border:1px dashed green;'>                
            </div></html>";
            } else {
                echo "<html><div style='background-color: black; color: white; width: 300px; padding: 10px;'>
                @$value->userName: $value->content<br>
                [$value->likedUserName e mais $value->likeMinusOne curtiram]<br><br>
                <hr size='1' style='border:1px dashed green;'>                
            </div></html>";
            }
        }
    }
}

?>