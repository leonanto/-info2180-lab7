<?php
// For PHP 5 and up

# accept a term (keyword)
# respond with a value
$query = $_REQUEST['q'];
$all=$_REQUEST['all'];

$definition = [
    "definition" => "a statement of the exact meaning of a word, especially in a dictionary.",
    "bar" => "a place that sells alcholic beverages",
    "ajax" => "technique which involves the use of javascript and xml"
];

$example = [
    "definition" => "the definition of bar is a place that sells drinks",
    "bar" => "we should go down to the bar for some drinks",
    "ajax" => "i'm thinking of using ajax for a project"
];

$author = [
    "definition" => "Mos Def-inition",
    "bar" => "Patrick O'Mally",
    "ajax" => "Jack Ace"
];

if($query==null){
header("Content-type: text/xml");
print("");


$string = <<<XML
<ol>
    <li>
        <definition>
            definition = a statement of the exact meaning of a word, especially in a dictionary.
        </definition>
        <br></br>
        <example>
            example = the definition of bar is a place that sells drinks.
        </example>
        <br></br>
        <author>
            author = Mos Def-inition
        </author>
        <br></br>
    </li>
    <li>
        <definition>
            bar = a place that sells alcholic beverages.
         </definition>
         <br></br>
        <example>
            example = we should go down to the bar for some drinks.
        </example>
        <br></br>
        <author>
            author = Patrick O'Mally
        </author>
        <br></br>
    </li>
    <li>
        <definition>
            ajax = technique which involves the use of javascript and xml.
         </definition>
         <br></br>
        <example>
            example = i'm thinking of using ajax for a project.
        </example>
        <br></br>
        <author>
            author = Jack Ace
        </author>
        <br></br>
    </li>
</ol>
XML;

$xml = new SimpleXMLElement($string);
echo $xml->asXML();   
}
else{
    print $query;
    print "<br>";
    print($definition[$query]);
    print "<br>";
    print($example[$query]);
    print "<br>";
    print($author[$query]);
    print "<br>";
}

?>
