<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Directory containing project files...
const DIR = "projects";
const TAG_ORDER = ['audio',
                   '8-bit',
                   'computing',
                   'analog',
                   'electronics',
                   'puredata',
                   'hardware',
                   'software',
                   'effects',
                   'pedal',
                   'raspi',
                   'server'];
                   //console_log(TAG_ORDER);

class Project{
    public $id;
    public $type;
    public $title;
    public $dateCreated;
    public $description;
    public $tags = [];
    public $fileLink;
    public $icon;

    function __construct($type, $title, $dateCreated, $description, $tags, $fileLink, $icon){
        $this->type = $type;
        $this->title = $title;
        $this->dateCreated = $dateCreated;
        $this->description = $description;
        $this->tags = $this->sortTagsByOrder($tags, TAG_ORDER);
        $this->fileLink = $fileLink;
        $this->icon = $icon;
        $this->id = $this->getBetween($fileLink, "projects/", ".");
    }

    public function __toString(){
        return $this->type . $this->title . $this->dateCreated . $this->description . "<br>";
    }

    function sortTagsByOrder(array $tags, array $orderedTags) {
    // Sorts tags on each card by TAG_ORDER
        $outputTags = array();

        foreach($orderedTags as $orderedTag){

            if (in_array($orderedTag, $tags)){

                array_push($outputTags, $orderedTag);
            }
        }

        return $outputTags;

    }

    function displayProjectTags__Card(){
    // Display all tags in a project card
        $tags = $this->tags;

        // Output each tag as a Bootstrap badge that links to the tag's page
        foreach($tags as $tag){

            echo("<a class='badge badge-primary'");
            echo("href=");
            echo("'tag_sorted.php?tag=" . $tag . "'" . ">"); //add "tag" to URL
                echo($tag);
            echo("</a>");

      }
    }

    function get_related__ByTag($top_N) {
    // Get the top N related projects by their tag association score.

        // Reference a single list of project files
        // Iterate over project data files in ./projects/...
        include_once './project.php';
        $files = scanForProjects();
        $other_projects = getProjects($files);

        // Remove "self" from search pool
        $this_idx = array_search($this->id, array_column($other_projects, 'id'));
        unset($other_projects[$this_idx]);

        $scored_projs = array();

        // Generate tag scores
        foreach($other_projects as $other_proj){

            array_push($scored_projs, $this->tag_intersect($other_proj));

        }


        $scores = array_column($scored_projs, 'score');

        //sort by top "score-proj" key-value pair first
        array_multisort($scores, SORT_DESC, $scored_projs);

        return $scored_projs; 
    }

    function tag_intersect(Project $other_proj){
    // Scores the similarity between two projects by number of shared tags.
        $this_tags = $this->tags;
        $other_tags = $other_proj->tags;
        
        /* SCORING
        ––––––––––––––––––––––––––––––––––––––––––––––––––*/
        $shared_tags = array_intersect($this_tags, $other_tags); //get matching tags
        
        //store proj with tags and score
        $key_values = array('proj'       => $other_proj, 
                            'shared_tags'=> $shared_tags, 
                            'score'      => count($shared_tags));

        //console_log($shared_tags);
        //console_log($key_values);

        return $key_values; 
    }

    function getBetween($string, $start, $end){
            if (strpos($string, $start)) { // required if $start not exist in $string
                $startCharCount = strpos($string, $start) + strlen($start);
                $firstSubStr = substr($string, $startCharCount, strlen($string));
                $endCharCount = strpos($firstSubStr, $end);
                if ($endCharCount == 0) {
                    $endCharCount = strlen($firstSubStr);
                }
                return substr($firstSubStr, 0, $endCharCount);
            } else {
                return '';
            }
     }

}

function getProjects($files){

    $cards = array();
    foreach($files as $f){
        $fileToOpen = "./" . DIR . "/" . $f;
        $myfile = fopen($fileToOpen, "r") or die("Unable to open file!");
        $meta = fgets($myfile);

        $cards[] = buildProjectsFromMeta($meta, $fileToOpen);

        fclose($myfile);
    }

    return $cards;

}

function getProjectByName($name){

    $projs = getProjects(scanForProjects());
    foreach($projs as $proj){
        if($proj->id==$name){
            return $proj;
        }
    }

    return null;

}

function getProjectsByTag($tag){

    $projs = getProjects(scanForProjects());
    $projsWithTag = array();

    // check for $tag in each projects' $tags
    foreach($projs as $proj){

        $tags = $proj->tags; 

        if(in_array($tag, $tags)){

            $projsWithTag[] = $proj;

        }
    }

    return $projsWithTag;

}

function getProjectPage($proj){
    $fileToOpen = $proj->fileLink;
    $myFile = fopen($fileToOpen, "r") or die("Unable to open file!");
    $text = fread($myFile, filesize($fileToOpen));
    return preg_replace('/^.+\n/', '', $text);
}

function buildProjectsFromMeta($meta, $filelink){

    $json = json_decode($meta, true);

    //Default values so it doesnt break...
    $category = "";
    $title = "";
    $dateCreated = "";
    $desc = "";
    $tags = [];
    $icon = "far fa-square";

    if($json!=null){
        $category = $json["category"];
        $dateCreated = $json["dateCreated"];
        $title = $json["title"];
        $desc = $json["desc"];
        if($json["tags"]){
            $tags = $json["tags"];
        }

        if($json["icon"]){
             $icon = $json["icon"];

        }


        return new Project($category, $title, $dateCreated, $desc, $tags, $filelink, $icon);

    }

}

function scanForProjects(){
    $dir = DIR;
    $files = array();
    foreach (scandir($dir) as $file) {
        if ($file !== '.' && $file !== '..') {
            if(endsWith($file, '.md')){
                $files[] = $file;
            }

        }
    }
    return $files;
}


function endsWith($haystack, $needle) {
    return substr_compare($haystack, $needle, -strlen($needle)) === 0;
}
?>