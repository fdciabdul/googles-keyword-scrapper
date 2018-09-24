<?php
echo " +++++++++++++++++++++++++++ "\n;
echo " + Google Keyword Scrapper+  "\n;
echo " Created By Abdul Muttaqin.  "\n;
echo " www.fdci-indonesia.web.id.  "\n;
echo "+++++++++++++++++++++++++++++"\n;
echo ' Input Keyword In Here: ';
$key = trim(fgets(STDIN));
function getKeywordSuggestionsFromGoogle($keyword) {
    $keywords = array();
    $data = file_get_contents('http://suggestqueries.google.com/complete/search?output=firefox&client=firefox&hl=id-ID&q='.urlencode($keyword));
    if (($data = json_decode($data, true)) !== null) {
        $keywords = $data[1];
    }

    return $keywords;
}

var_dump(getKeywordSuggestionsFromGoogle($key));
