<?php header('Content-type: text/xml'); ?>
<?='<?xml version="1.0" encoding="UTF-8" ?>'?>
<urlset
      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
<!-- created with Free Online Sitemap Generator www.xml-sitemaps.com -->


<url>
  <loc><?php echo base_url(); ?></loc>
  <lastmod><?php echo date('Y-m-d'); ?>T<?php echo date('H:i:s'); ?>+00:00</lastmod>
  <priority>1.00</priority>
</url>

<?php foreach($cate_info as $ci): ?>
<url>
  <loc><?php echo base_url('').'/'.$ci['cate_slug'].'-'.$ci['id']; ?></loc>
  <lastmod><?php echo date('Y-m-d'); ?>T<?php echo date('H:i:s'); ?>+00:00</lastmod>
  <priority>0.8</priority>
</url>
<?php endforeach; ?>

<?php foreach($page_info as $pi): ?>
<url>
  <loc><?php echo base_url('').'/'.$pi['page_slug'].'-'.$pi['id'].'.html'; ?></loc>
  <lastmod><?php echo date('Y-m-d'); ?>T<?php echo date('H:i:s'); ?>+00:00</lastmod>
  <priority>0.8</priority>
</url>
<?php endforeach; ?>

<?php foreach($post_all as $pa): ?>
<url>
  <loc><?php echo base_url('').'/'.$pa['cate_slug'].'/'.$pa['post_slug'].'-'.$pa['id'].'.html'; ?></loc>
  <lastmod><?php echo date('Y-m-d'); ?>T<?php echo date('H:i:s'); ?>+00:00</lastmod>
  <priority>0.8</priority>
</url>
<?php endforeach; ?>


<?php foreach($tag_info as $tag_detail): ?>
  
    <url>
      <loc><?php echo base_url('').'/tag/'.$tag_detail['tag_post_slug'].'-'.$tag_detail['id']; ?></loc>
      <lastmod><?php echo date('Y-m-d'); ?>T<?php echo date('H:i:s'); ?>+00:00</lastmod>
      <priority>0.6</priority>
    </url>

<?php endforeach; ?>


<?php foreach($gallery_info as $gallery_detail): ?>
  
    <url>
      <loc><?php echo base_url('').'/public/upload/tinymce/gallery_asset/'.$gallery_detail['gallery_image']; ?></loc>
      <lastmod><?php echo date('Y-m-d'); ?>T<?php echo date('H:i:s'); ?>+00:00</lastmod>
      <priority>0.6</priority>
    </url>

<?php endforeach; ?>

<?php foreach($imgTinyCME_info as $img_detail): ?>
  
    <url>
      <?php if($img_detail['image_folder'] = 'tinymce'): ?>
        <loc><?php echo base_url('').'/public/upload/'.$img_detail['image_folder'].'/'.$img_detail['image_TinyCME_name']; ?></loc>
      <?php elseif($img_detail['image_folder'] != 'tinymce'): ?>
        <loc><?php echo base_url('').'/public/upload/tinymce/'.$img_detail['image_folder'].'/'.$img_detail['image_TinyCME_name']; ?></loc>
      <?php endif; ?>
      <lastmod><?php echo date('Y-m-d'); ?>T<?php echo date('H:i:s'); ?>+00:00</lastmod>
      <priority>0.6</priority>
    </url>

<?php endforeach; ?>

</urlset>