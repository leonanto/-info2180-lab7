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
    $string ='<entries>';
    foreach($definition as $key=>$value){
        $string.='<definition name=\''.$key.'\'>'.$value.'</definition>';
    }
    foreach($example as $key=>$value){
        $string.='<example name=\''.$key.'\'>'.$value.'</example>';
    }
    foreach($author as $key=>$value){
        $string.='<author name=\''.$key.'\'>'.$value.'</author>';
    }
    
    $string.='</entries>';
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

// header("Content-type: text/xml");
// print("");


// $string = <<<XML
// <ol>
//     <li>
//         <definition>
//             definition = a statement of the exact meaning of a word, especially in a dictionary.
//         </definition>
//         <example>
//             example = the definition of bar is a place that sells drinks.
//         </example>
//         <author>
//             author = Mos Def-inition
//         </author>
//     </li>
//     <li>
//         <definition>
//             bar = a place that sells alcholic beverages.
//         <example>
//             example = we should go down to the bar for some drinks.
//         </example>
//         <author>
//             author = Patrick O'Mally
//         </author>
//     </li>
//     <li>
//         <definition>
//             ajax = technique which involves the use of javascript and xml.
//         <example>
//             example = i'm thinking of using ajax for a project.
//         </example>
//         <author>
//             author = Jack Ace
//         </author>
//     </li>
// </ol>
// XML;

// $xml = new SimpleXMLElement($string);
// echo $xml->asXML();

?>
