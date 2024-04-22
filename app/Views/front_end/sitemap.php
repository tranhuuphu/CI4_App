<?php header('Content-type: text/xml'); ?>
<?='<?xml version="1.0" encoding="UTF-8" ?>'?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

<url>
  <loc><?php echo base_url(); ?></loc>
  <lastmod><?php echo date('Y-m-d'); ?>T<?php echo date('00:00:00'); ?>+00:00</lastmod>
  <priority>1.00</priority>
</url>

<?php foreach($cate_info as $ci): ?>
<url>
  <loc><?php echo base_url('').'/'.$ci['cate_slug'].'-'.$ci['id']; ?></loc>
  <lastmod><?php echo substr($ci['updated_at'], 0, 10); ?>T<?= substr($ci['updated_at'], 11, 8); ?>+00:00</lastmod>
  <priority>0.8</priority>
</url>
<?php endforeach; ?>

<?php foreach($page_info as $pi): ?>
<url>
  <loc><?php echo base_url('').'/'.$pi['page_slug'].'-'.$pi['id'].'.html'; ?></loc>
  <lastmod><?php echo substr($pi['updated_at'], 0, 10); ?>T<?= substr($pi['updated_at'], 11, 8); ?>+00:00</lastmod>
  <priority>0.8</priority>
</url>
<?php endforeach; ?>

<?php foreach($post_all as $pa): ?>
<url>
  <loc><?php echo base_url('').'/'.$pa['cate_slug'].'/'.$pa['post_slug'].'-'.$pa['id'].'.html'; ?></loc>
  <lastmod><?php echo substr($pa['updated_at'], 0, 10); ?>T<?= substr($pa['updated_at'], 11, 8); ?>+00:00</lastmod>
  <priority>0.8</priority>
</url>
<?php endforeach; ?>


<?php foreach($tag_info as $tag_detail): ?>
  
    <url>
      <loc><?php echo base_url('').'/tag/'.$tag_detail['tag_post_slug'].'-'.$tag_detail['id']; ?></loc>
      <lastmod><?php echo substr($tag_detail['updated_at'], 0, 10); ?>T<?= substr($tag_detail['updated_at'], 11, 8); ?>+00:00</lastmod>
      <priority>0.6</priority>
    </url>

<?php endforeach; ?>


<?php foreach($gallery_type as $g_type): ?>
  
    <url>

      <loc><?php echo base_url('').'/'.$cate_gallery['cate_slug'].'/'.$g_type['gallery_type_slug']; ?></loc>
      <priority>0.6</priority>
    </url>

<?php endforeach; ?>

<?php foreach($gallery_topic as $g_topic): ?>
  
    <url>

      <loc><?php echo base_url('').'/'.$cate_gallery['cate_slug'].'/'.$g_topic['gallery_topic_slug']; ?></loc>
      <priority>0.6</priority>
    </url>

<?php endforeach; ?>


<?php foreach($gallery_info as $gallery_detail2): ?>
  
    <url>

      <loc><?php echo base_url('').'/'.$cate_gallery['cate_slug'].'/'.$gallery_detail2['gallery_title_slug'].'-'.$gallery_detail2['id'].'.html'; ?></loc>

      <lastmod><?php echo substr($gallery_detail2['updated_at'], 0, 10); ?>T<?= substr($gallery_detail2['updated_at'], 11, 8); ?>+00:00</lastmod>
      <priority>0.6</priority>
    </url>

<?php endforeach; ?>






</urlset>