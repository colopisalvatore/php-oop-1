 <?php

class Movie
{
    public $name;
    public $description;
    public $year;
    public $genre;
    public $length;
    public $language;

/**
 * Movie constructor
 * @param string $name
 * @param string $description
 * @param int $year
 * @param string $genre
 * @param string $length
 *
 */

    public function __construct(string $name, string $description, int $year, string $genre, string $length)
    {
        $this->name = $name;
        $this->description = $description;
        $this->year = $year;
        $this->genre = $genre;
        $this->length = $length;

    }

/**
 * Return a movie full info
 * @return string the move full informations
 */

    public function getFullMovie()
    {
        return 'Il film si intitola ' . $this->name . ' il genere e` ' . $this->genre . ' e` stato prodotto nel ' . $this->year . ' ha una durata di ' . $this->length . ' e la trama e` la seguente: ' . $this->description;

    }

    /**
     * Set movie language
     *@param string $language
     */

    public function setMovieLanguage(string $language)
    {
        $this->language = $language;
    }

}

$firstMovie = new Movie('Lord of the Rings', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus, obcaecati.', 2001, 'fantasy, avventura', '178 min');

// var_dump($firstMovie);
var_dump($firstMovie->getFullMovie());

$secondMovie = new Movie('Interstellar', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus, obcaecati.', 2014, 'fantascienza, avventura, drammatico', '169 min');

// var_dump($secondMovie);
$secondMovie->setMovieLanguage('inglese');
var_dump($secondMovie);

var_dump($secondMovie->getFullMovie());

?>