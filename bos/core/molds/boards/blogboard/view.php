<?php 
// MICROBLOG
$microblog = '<div class="microblog">'.PHP_EOL;
$mbfile = simplexml_load_file($get_mb_data);
foreach($mbfile->post as $article){
	$randid = rand(0,99);
	$postid = $article['id'].'-'.$randid;
	if($article['active']=='true'){
		$microblog .= '<article><div class="post">'.PHP_EOL;
		
		// cover image block
		if($article->cover['src']!=''){
			$microblog .= '<div class="cover" style="min-height: '.$cover_height.'px; background-image: url(\''.$article->cover['src'].'\');"></div>'.PHP_EOL;
		} else {
			$microblog .= '<div class="cover" style="min-height: '.$cover_height.'px;"><div class="noimg">NO IMAGE</div></div>'.PHP_EOL;
		}
		
		// title block
		$microblog .= '<div class="title"><h4>'.$article->title.'</h4></div>'.PHP_EOL;
		
		// intro block
		$microblog .= '<div class="intro"><p>Posted <strong>'.$article['postdate'].'</strong><br />';
		if($article['author']!=""){$microblog .= $article['author'].PHP_EOL;} else {$microblog .= '[unknown author]'.PHP_EOL;}
		if($article['category']!=""){$microblog .= '<br /><span class="cat">'.$article['category'].'</span>';}
		$microblog .= '</p></div>'.PHP_EOL;
		
		// toggle view button
		$microblog .= '<div class="toggler">'.PHP_EOL;
		if($modal_post_view==false){
			$microblog .= '<button onclick="post_toggle(\''.$postid.'\');">'.$view_post_text.'</button>'.PHP_EOL;
		} else {
			$microblog .= '<a href="#'.$postid.'">'.$view_post_text.'</a>'.PHP_EOL;
		}
		$microblog .= '</div></div>'.PHP_EOL;
		
		// display content as toggled block or modal overlay
		if($modal_post_view==false){
			$microblog .= '<div class="content" id="'.$postid.'" style="display: none;">'.$article->content.'</div>'.PHP_EOL;
			$microblog.='</article>'.PHP_EOL;
			$microblog .= '<script>'.PHP_EOL;
			$microblog .= 'var btn2 = document.getElementById(\''.$postid.'\');'.PHP_EOL;
			$microblog .= 'function post_toggle(id) {var e = document.getElementById(id);if(e.style.display == \'block\') {e.style.display = \'none\';}else {e.style.display = \'block\';} console.log(\'clicked\'); return;}'.PHP_EOL;
			$microblog .= '</script>'.PHP_EOL;
		} else {
			$microblog.='</article>'.PHP_EOL;
			$microblog .= '<div id="'.$postid.'" class="modal-lite mbmodal"><a href="javascript:history.go(-1)" class="close">&#10006;</a>'.PHP_EOL;
			$microblog .= '<div class="modal-content scroll-y"><div class="header fluid-text">'.$article->title.'</div>'.PHP_EOL;
			$microblog .= '<div class="body">'.PHP_EOL;
			if($article->cover['src']!=''){ $microblog .= '<figure><img src="'.$article->cover['src'].'" class="coverimg" alt="" /></figure>';}
			$microblog .= '<div class="padded">'.$article->content.PHP_EOL.'</div></div>'.PHP_EOL;
			$microblog .= '<div class="footer">Posted <em>'.$article['postdate'].'</em> in <strong>'.$article['category'].'</strong></div></div></div>';
		}
	}

}
$microblog .= '</div>'.PHP_EOL;


/* Blog Post List */
$blogpostlist = '<div class="blogpostlist">'.PHP_EOL.'<ul class="navlist">'.PHP_EOL;
$row = 0;
$skip_row_number = array("1");
if (($bpl_handle = fopen($get_bpl_data, "r")) !== FALSE) {
	while (($bpldata = fgetcsv($bpl_handle, 1000, ",")) !== FALSE) {
		$row++;
		$imgid = 'img-'.$row;
		if (in_array($row, $skip_row_number)){continue;} else {
			if($bpldata[0]=='true'){
				$blogpostlist.='<li>';
				if($bpldata[4]!=''){
					$blogpostlist.='<a href="'.$bpldata[4].'" ';
					if($new_window==true){$blogpostlist.='target="_blank"';}
					$blogpostlist.='>'.PHP_EOL;
					if($bpldata[5]!=''){$blogpostlist.='<img class="cover" src="'.$bpldata[5].'"/>';}
					$blogpostlist.='<div class="post">'.PHP_EOL;
					if($bpldata[1]!=''){
						$blogpostlist.='<span class="title">'.$bpldata[1].'</span><br />';
					} else {
						$blogpostlist.='<span class="title">[untitled post]</span><br />';
					}
					if($bpldata[2]!=''){$blogpostlist.='<span class="summary">'.$bpldata[2].'</span><br />';}
					if($bpldata[3]!=''){$blogpostlist.='<small>Posted '.$bpldata[3].'</small>';}
					$blogpostlist.='</div></a></li>'.PHP_EOL;
				} else {}
				
			}
		}
	} fclose($bpl_handle);	
}
$blogpostlist .= '</ul>'.PHP_EOL.'</div>'.PHP_EOL;

?>