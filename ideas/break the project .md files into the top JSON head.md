break the project .md files into the top JSON header and the bottom markdown content

inside the markdown content use code blocks to set off content that needs special formatting

check for keywords directly after the backticks like so:

```ipynb
<ipynb code here>
```

or 

```latex
<latex code here>
```

pandoc -f latex -t gfm <fragment of latex code from markdown>
pandoc -f ipynb -t gfm <fragment of ipynb code from markdown>

if keywords ipynb or latex used, preprocess the inline LaTeX and Jupyter Python into markdown

if no, render the code block according to default Markdown engine

## MVP 
input: .md blog post with .json header on line 1

process:
1. removes the first two lines of file (.json and space)
2. parse .md for triple backtick
	a. 
```php
/*
This code takes the current post_id from the URL and looks for the post file. It then applies Pandoc's rendering to any inline LaTeX or Jupyter Notebook code that gets thrown into the post.
*/


// Create filepath of the post from url and '.md' file ext.
$post_fp = $_GET["id"] . '.md';

// Prepare scripts to split file into JSON header and markdown content
$CMD_get_JSON = 'head -n 1 ' . escapeshellarg($filepath);
$CMD_get_rest = 'tail -n +3 ' . escapeshellarg($filepath);

// Execute the scripts and save output into PHP strings
$post_JSON = shell_exec($CMD_get_JSON);
$post_rest = shell_exec($CMD_get_rest);

// parse all content into an array, use triple backticks as separator
$parsed_array = explode('```', $post_rest);

// example output array: [page content, latex <all latex here>, more content, ipynb <all ipynb here>, more unneeded content]

$markdown_array = array();

foreach ($parsed_fragment in $parsed_array) {
	//this grabs the 'latex' or 'ipynb' identifier on the same line as opening triple backticks

	$pos = 3;

	//string, offset, length to grab
	$language_id= substr($parsed_fragment, $pos, ( strpos($parsed_fragment, PHP_EOL, $pos) ) - $pos);

	if ($language_id == 'latex') {
		$CMD_latex_to_gfm = 'pandoc -f latex -t gfm ' . $parsed_fragment;
		$output = shell_exec($CMD_latex_to_gfm);
	}
	if ($language_id == 'ipynb') {
		$CMD_ipynb_to_gfm = 'pandoc -f ipynb -t gfm ' . $parsed_fragment;
		$output = shell_exec($CMD_ipynb_to_gfm);
	}
	else {
		$output = $parsed_fragment;
	}

	// at the end, whatever the output is should go onto the end of the output markdown
	array_push($markdown_array, $output);
	
}
var_dump($markdown_array);

return implode($markdown_array);
```

look for first instance of code blocks ``` and find closing backticks ```

