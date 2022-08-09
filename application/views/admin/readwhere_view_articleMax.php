<?php header ("Content-Type:text/xml");?>
<rss version="2.0" xml:base="<?php echo $baseUrl.$sectionDetails['URLSectionStructure']; ?>">
<channel>
<?php
$page_title = strip_tags(str_replace(['&', '&#39;'], ['&amp;', "'"] , $sectionDetails['MetaTitle']));
$page_title = preg_replace("|&([^;]+?)[\s<&]|","&amp;$1 ",$page_title);

$page_description = strip_tags(str_replace(['&', '&#39;'], ['&amp;', "'"] , $sectionDetails['MetaDescription']));
$page_description = preg_replace("|&([^;]+?)[\s<&]|","&amp;$1 ",$page_description);

?>
<title><?php echo $page_title; ?></title>
<link><?php echo $baseUrl.$sectionDetails['URLSectionStructure']; ?></link>
<description><?php echo $page_description; ?></description>
<language>en</language>
<?php
foreach($content as $articles){
$title = html_entity_decode($articles['title'],null,"UTF-8");
 $title = strip_tags(str_replace(['&', '&#39;'], ['&amp;', "'"] , $title));
$title = preg_replace("|&([^;]+?)[\s<&]|","&amp;$1 ",$title);
$summary = strip_tags(str_replace(['&', '&#39;','&amp;','&nbsp;','nbsp;','<br>','</br>','<br />'], ['&amp;', "'",' ',' ',' ','','',''] , $articles['summary_html']));
$summary = preg_replace("|&([^;]+?)[\s<&]|","&amp;$1 ",$summary);
$thumbimage = image_url.imagelibrary_image_path.'logo/nie_logo_150X150.jpg';
$fullimage = image_url.imagelibrary_image_path.'logo/nie_logo_600X300.jpg';
$publishDate = new DateTime(@$articles['publish_start_date']);
$updatedDate = new DateTime(@$articles['last_updated_on']);
$authorNname = strip_tags(str_replace(['&', '&#39;'], ['&amp;', "'"] , $articles['author_name']));
$tags = strip_tags(str_replace(['&', '&#39;'], ['&amp;', "'"] , $articles['tags']));
if($contentType==1){
	$content = str_replace(['&', '#39;','&amp;','&nbsp;','nbsp;','<br>','</br>','<br />'], ['&amp;', "'",' ',' ',' ','','',''] , $articles['article_page_content_html']);
	//$content = $articles['article_page_content_html'];
	if($articles['article_page_image_path']!=''){
		$thumbimage = image_url.imagelibrary_image_path.str_replace('original/','w150X150/',$articles['article_page_image_path']);
		$fullimage = image_url.imagelibrary_image_path.$articles['article_page_image_path'];
	}
}else if($contentType==3){
	$content = str_replace(['&', '&#39;','&amp;','&nbsp;','nbsp;','<br>','</br>','<br />'], ['&amp;', "'",' ',' ',' ','','',''] , $articles['summary_html']);
	if($articles['first_image_path']!=''){
		$thumbimage = image_url.imagelibrary_image_path.str_replace('original/','w150X150/',$articles['first_image_path']);
		$fullimage = image_url.imagelibrary_image_path.$articles['first_image_path'];
	}
}else if($contentType==4){
	$content = str_replace(['&', '&#39;','&amp;','&nbsp;','nbsp;','<br>','</br>','<br />'], ['&amp;', "'",' ',' ',' ','','',''] , $articles['video_script']);
	if($articles['video_image_path']!=''){
		$thumbimage = image_url.imagelibrary_image_path.str_replace('original/','w150X150/',$articles['video_image_path']);
		$fullimage = image_url.imagelibrary_image_path.$articles['video_image_path'];
	}
}

?>
<item>
<Articleid><?php echo $articles['content_id']; ?></Articleid>
<title><?php echo $title; ?></title>
<excerpt><?php echo $summary; ?></excerpt>
<description><![CDATA[<?php echo $content; ?>]]></description>
<thumbimage><?php echo $thumbimage; ?></thumbimage>
<?php if($contentType!=3): ?>
<fullimage><?php echo $fullimage; ?></fullimage>
<?php endif; ?>
<?php 
if($contentType==3): 
$galleryImages = $this->widget_model->widget_article_content_by_id($articles['content_id'], $contentType, "");
foreach($galleryImages as $images):
$galleryCaption = preg_replace('/<p[^>]*>(.*)<\/p[^>]*>/i', '$1', $images['gallery_image_title']);
$galleryCaption = strip_tags(str_replace(['&', '&#39;'], ['&amp;', "'"] , $galleryCaption));
$galleryImage= str_replace(' ', "%20",$images['gallery_image_path']);
?>
<gallery>
<gallery_url><?php echo image_url.imagelibrary_image_path.$galleryImage; ?></gallery_url>
<gallery_caption><?php echo $galleryCaption; ?></gallery_caption>
</gallery>
<?php endforeach; endif; ?>
<?php if($contentType==4): ?>
<video_url></video_url>
<?php endif; ?>
<pubDate><?php echo $publishDate->format('D, d M Y H:i:s +0530') ?></pubDate>
<authorname><?php echo $authorNname; ?></authorname>
<link><?php echo $baseUrl.html_entity_decode($articles['url'],null,"UTF-8"); ?></link>
<tags><?php echo $tags; ?></tags>
<updatedDate><?php echo $updatedDate->format('D, d M Y H:i:s +0530') ?></updatedDate>
</item>		
<?php } ?>
</channel>
</rss>