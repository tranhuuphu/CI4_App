<?php echo '<?xml version='.'"'.'1.0"'. 'encoding='.'"UTF-8"?>'; ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
	<!-- created with Free Online Sitemap Generator www.xml-sitemaps.com -->

<url>
  <loc><?php echo base_url(); ?></loc>
  <lastmod><?php echo date('Y-m-d'); ?>T<?php echo date('H:i:s'); ?>+00:00</lastmod>
  <priority>1.00</priority>
</url>

<?php foreach($page_info as $pg): ?>
<url>
  <loc><?php echo base_url('').'/'.$pg['page_slug'].'.html'; ?></loc>
  <lastmod><?php echo date('Y-m-d'); ?>T<?php echo date('H:i:s'); ?>+00:00</lastmod>
  <priority>0.8</priority>
</url>
<?php endforeach; ?>

<?php foreach($post_cate as $pc): ?>
<url>
  <loc><?php echo base_url('').'/'.$pc['cate_slug'].'/'.$pc['post_slug'].'-'.$pc['post_id'].'.html'; ?></loc>
  <lastmod><?php echo date('Y-m-d'); ?>T<?php echo date('H:i:s'); ?>+00:00</lastmod>
  <priority>0.8</priority>
</url>
<?php endforeach; ?>


<?php foreach($tags as $tag_array): ?>
<?php if($tag_array != NULL): ?>
<?php
$tags = explode(',', $tag_array->post_tag);
?>
<?php foreach($tags as $tag_detail): ?>
<url>
  <loc><?php echo base_url('').'/tags/'.url_title($tag_detail); ?></loc>
  <lastmod><?php echo date('Y-m-d'); ?>T<?php echo date('H:i:s'); ?>+00:00</lastmod>
  <priority>0.6</priority>
</url>
<?php endforeach; ?>
<?php endif; ?>
<?php endforeach; ?>


</urlset>