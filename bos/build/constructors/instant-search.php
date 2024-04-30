<?php 
// CONSTRUCT INSTANT SITEWIDE SEARCH WIDGET
$sitewide_search = '<script>'.PHP_EOL;
$sitewide_search.='function showResult(e){if(0==e.length){document.getElementById("livesearch").innerHTML="",document.getElementById("livesearch").style.border="0px";return}var t=new XMLHttpRequest;t.onreadystatechange=function(){4==this.readyState&&200==this.status&&(document.getElementById("livesearch").innerHTML=this.responseText)},t.open("GET","core/sitesearch.php?q="+e,!0),t.send()}'.PHP_EOL;
$sitewide_search.='</script>'.PHP_EOL;
$sitewide_search.='<div class="sitewide-search"><form>'.PHP_EOL;
$sitewide_search.='<input type="text" size="30" onkeyup="showResult(this.value)">'.PHP_EOL.'<div id="livesearch" class="search-results"></div>'.PHP_EOL.'</form></div>';

?>