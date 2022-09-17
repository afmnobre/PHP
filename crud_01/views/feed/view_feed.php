<h1>Imagens do Dia</h1>
<hr>
<?php


class Nasa{

    const FEED_URL =  'https://www.nasa.gov/rss/dyn/lg_image_of_the_day.rss';
    private $feeed = null;


    public function __construct(){
        $this->loadFeed();
    }
    private function loadFeed(){
        $curl = curl_init();
        curl_setopt_array($curl,[
            CURLOPT_URL => self::FEED_URL,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'GET'
        ]);

        $response = curl_exec($curl);
        curl_close($curl);

        //echo "<pre>";
        //print_r($response);
        //echo "</pre>";

        return $this->parseXML($response);
    }
    private function parseXML($response){
        if(!strlen($response)) return false;
        $this->feed = simplexml_load_string($response);

        //echo "<pre>";
        //print_r($this->feed);
        //echo "</pre>";
        return true;


    }
    public function getTitle(){
        return $this->feed->channel->title;
    }
    public function getDescription(){
        return $this->feed->channel->description;
    }
    public function getItem(){
        return $this->feed->channel->item;
    }

}


$obFeed = new Nasa;

echo "<h4>".$obFeed->getTitle()."</h4>";
echo $obFeed->getDescription();

echo "<div class='tabela'>";
foreach($obFeed->getItem() as $item){
    echo "<div class='campo'>";
    $imagem = $item->enclosure->attributes()->url;
    echo "<div class='titulo'>".$item->title."</div>";
    echo "<div class='texto'>".$item->description."</div>";
    echo "<a href='".$imagem."' target='_blank'><img width=100px src='".$imagem."'></a>";
    echo "</div>";

}
echo "</div>"

?>
