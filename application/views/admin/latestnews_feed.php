<?php header ("Content-Type:text/xml");?>
<rss version="2.0" xmlns:content="http://purl.org/rss/1.0/modules/content/">
	<channel>
		<title>Edexlive</title>
		<link><?php print BASEURL.@$sectionDetails['URLSectionStructure']; ?></link>
		<description>All the latest youth, student, exams, study abroad, start-up and campus related news from across India in one place. Plus, check out positive</description>
		<language>en</language>
	    <?php print $data; ?>
	</channel>
</rss>