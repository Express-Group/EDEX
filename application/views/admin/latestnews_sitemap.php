<?php header ("Content-Type:text/xml");?>
<rss version="2.0" xmlns:content="http://purl.org/rss/1.0/modules/content/">
	<channel>
		<title>Edexlive</title>
		<link><?php print BASEURL; ?></link>
		<description>Latest business news and article about education to keep yourself updated. Read magazines online and follow latest trends</description>
		<language>en</language>
	    <?php print $data; ?>
	</channel>
</rss>