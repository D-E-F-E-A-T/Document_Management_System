<?php
class Dashboard
{
    public function getWeather()
    {
        // TODO: Creating this method
        // http://rss.accuweather.com/rss/liveweather_rss.asp?metric=1&locCode=EUR|NL|NL007|DRUNEN
        return "0 C";
    }

    public function getFact()
    {
        return $this->fetchJSON(
            "https://uselessfacts.jsph.pl/today.json",
            "text"
        );
    }

    public function getFactCats()
    {
        return $this->fetchJSON(
            "https://cat-fact.herokuapp.com/facts/random",
            "text"
        );
    }

    public function getRandomJokeAboutProgramming()
    {
        return $this->fetchJSON(
            "https://sv443.net/jokeapi/category/Programming?blacklistFlags=nsfw",
            "joke"
        );
    }

    public function getLocation()
    {
        return $this->fetchJSON("https://freegeoip.app/json/", "city");
    }

    private function fetchJSON($jsonURL, $jsonResult)
    {
        $jsonDataDecoded = json_decode(file_get_contents($jsonURL), true);
        $returnResult = $jsonDataDecoded[$jsonResult];

        if ($returnResult == null) {
            return "ERROR";
        } else {
            return $returnResult;
        }
    }

    public function getNumberOfNotes()
    {
        global $mysql;
        $result = $mysql->query("SELECT * FROM dms_note WHERE archive = 0");
        return $result->num_rows;
    }
}
?>
