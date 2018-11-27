<?php
//Referenced PHP Basics: Practical projects: Random quote generator https://www.youtube.com/watch?v=NB3zMWwRJQ0 Codecourse
//Published on Nov 14, 2016
//Referenced https://www.geeksforgeeks.org/php-functions/
//Got help from Kirby Kuelh on printQuote function

//Created the Multidimensional array of quote elements and name it quotes
$quotes[] = [
  'quote' => "All our dreams can come true, if we have the courage to pursue them. ",
  'source' => "Walt Disney"
  ];
$quotes[] = [
  'quote' => "No act of kindness, no matter how small, is ever wasted. ",
  'source' => "Aesop"
  ];
$quotes[] = [
   'quote' => "What matters to you defines your mattering.",
  'source' => "John Green",
  'citation' => "An Abundance of Katherines",
  'year' => "2006"
];
$quotes[] = [
   'quote' => "Ah, how shall I do it? Oh, I know. I'll turn him into a flea, a harmless, little flea, and then I'll put that flea in a box, and then I'll put that box inside of another box, and then I'll mail that box to myself, and when it arrives......I'll smash it with a hammer! It's brilliant, brilliant, brilliant, I tell you! Genius, I say! Or, to save on postage, I'll just poison him with this! </br> ",
  'source' => "Yzma",
  'citation' => "Disney's the Emperors New Groove",
  'year' => "2002"
];
$quotes[] = [
  'quote' => "You're off to great places! Today is your day! Your mountain is waiting. So on your way!",
  'source' => "Dr. Seuss",
    'citation' => "Oh, The Places You'll Go!",
  'year' => "1990"
];

// Test the array with var_dump($quotes);
/* Created variable $randomQuote to generate random numbers with rand() 
Referenced PHP Basics: Practical projects: Random quote generator https://www.youtube.com/watch?v=NB3zMWwRJQ0 Codecourse
Published on Nov 14, 2016
*/
//Created getRandomQuote function

function getRandomQuote($quotes) {
  $randomQuote = $quotes[rand(0, count($quotes) - 1)];
  return $randomQuote;
  };

// Created printQuote() function
// Created empty string
// Created if statements ot format strings

function printQuote($quotes) {
  $quoteVar = getRandomQuote($quotes);
 
{
    echo "<p class=\"quote\">" . $quotes['quote'] . "</p>" . "<p class=\"source\">" . $quotes['source'] . "</p>";
     } 
	if(array_key_exists($quoteVar['citation']))	{
      echo "<p class=\"quote\">" . $quoteVar['quote'] . "</p>" . "<p class=\"source\">" . $quoteVar['source'] . "</p>" . "<p class=\"citation\">" . $quoteVar['citation'] . "</p>";
	}
	if(array_key_exists($quoteVar['year']))	{
		echo "<p class=\"quote\">" . $quoteVar['quote'] . "</p>" . "<p class=\"source\">" . $quoteVar['source'] . "</p>" . "<p class=\"citation\">" . $quoteVar['citation'] . "</p>" . "<p class=\"year\">" . $quoteVar['year'] . "</p>";
	};
  echo $emptyString;
}; 
printQuote($quotes);

?>