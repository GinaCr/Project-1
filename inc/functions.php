<?php
//Referenced PHP Basics: Practical projects: Random quote generator https://www.youtube.com/watch?v=NB3zMWwRJQ0 Codecourse
//Published on Nov 14, 2016
//Referenced https://www.geeksforgeeks.org/php-functions/

//Created the Multidimensional array of quote elements and name it quotes
$quotes[] = [
  'quote' => "All our dreams can come true, if we have the courage to pursue them. ",
  'source' => " Walt Disney "
  ];
$quotes[] = [
  'quote' => "No act of kindness, no matter how small, is ever wasted. ",
  'source' => " Aesop "
  ];
$quotes[] = [
  'quote' => "What matters to you defines your mattering.",
  'source' => " John Green",
  'citation' => " An Abundance of Katherines",
  'year' => " 2006"
];
$quotes[] = [
   'quote' => "Ah, how shall I do it? Oh, I know. I'll turn him into a flea, a harmless, little flea, and then I'll put that flea in a box, and then I'll put that box inside of another box, and then I'll mail that box to myself, and when it arrives......I'll smash it with a hammer! It's brilliant, brilliant, brilliant, I tell you! Genius, I say! Or, to save on postage, I'll just poison him with this! ",
  'source' => " Yzma",
  'citation' => " Disney's the Emperors New Groove",
  'year' => " 2002 "
];
$quotes[] = [
  'quote' => "You're off to great places! Today is your day! Your mountain is waiting. So on your way! ",
  'source' => " Dr. Seuss",
    'citation' => " Oh, The Places You'll Go!",
  'year' => " 1990"
];

// Test the array with var_dump($quotes);
/* Created variable $randomQuote to generate random numbers with rand() 
Referenced PHP Basics: Practical projects: Random quote generator https://www.youtube.com/watch?v=NB3zMWwRJQ0 Codecourse
Published on Nov 14, 2016
*/

function getRandomQuote($quotes) {
  $randomQuote = $quotes[rand(0, count($quotes) - 1)];
  return $randomQuote;
  };

//Got help from Kirby Kuelh on printQuote function
// Created printQuote() function

function printQuote($quotes) {
  $quoteVar = getRandomQuote($quotes);
 
//Output the required content of quote and source using ech

    echo "<p class=quote>" . $quoteVar['quote'] . "</p>"; 
    echo "<p class=source>" . $quoteVar['source'];

  //Created conditonal if statements to format string
  //Echo citation and year if it exists
     
	if(isset($quoteVar['citation']))	{
      echo "<span class=citation>" . $quoteVar['citation'] . "</span>";
	}
	if(isset($quoteVar['year']))	{
    echo "<span class=year>" . $quoteVar['year'] . "</span>" . "</p>";
	};
 
}; 


?>