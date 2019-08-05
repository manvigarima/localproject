<?php
//step1
 $cSession = curl_init();
 //step2
 curl_setopt($cSession, CURLOPT_URL, "https://www.showtimes.com/movie-theaters/amc-empire-25-7506/?date=week&time=24");
curl_setopt($cSession, CURLOPT_RETURNTRANSFER, true);
 curl_setopt($cSession, CURLOPT_HEADER, false);
 //step3
 $html=curl_exec($cSession);
 //step4
curl_close($cSession);
//step5
//echo $page;
//either use cURL or file_get_contents

//$html = file_get_contents('https://www.showtimes.com/movie-theaters/amc-empire-25-7506/?date=week&time=24'); //get the html returned from the following url

$doc = new DOMDocument();

libxml_use_internal_errors(true); //disable libxml errors

if (!empty($html)) { //if any html is actually returned

    $doc->loadHTML($html);
    libxml_clear_errors(); //remove errors for yucky html
    $xpath = new DOMXPath($doc);
    //get all the div's with an class
    $row = $xpath->query('//div[@class="showtimes"]/ul[@class="movielist"]');
    if ($row->length > 0)
		 {
        foreach ($row as $rownew)
				 {
            $rownew = new DOMXPath($doc);
            $row1=$rownew->query('//h2[@class="media-heading"]');
            if ($row1->length>0)
						{
                foreach ($row1 as $rownew1)
								{
                    echo $rownew1->nodeValue;
                }
            }
						$row2=$rownew->query('//div[@class="ticketicons"]');
            if ($row1->length>0)
						{
                foreach ($row2 as $rownew2)
								{
                    echo $rownew2->nodeValue;
                }
            }

        }
    }
}