<!-- article seo -->
<script type="application/ld+json">
{
 "@context": "http://schema.org",
 "@type": "Article",
 "mainEntityOfPage": {
	"@type": "WebPage",
	"@id": "<?php echo Base::instance()->get("base"); ?>/blog/<?php echo Base::instance()->get("blogPath"); ?>"
 },
 "url": "<?php echo Base::instance()->get("base"); ?>/blog/<?php echo Base::instance()->get("blogPath"); ?>",
 "headline": "<?php echo Base::instance()->get("title"); ?>",
 "image": {
	"@type": "ImageObject",
	"url": "<?php echo Base::instance()->get("base"); ?>/ui/images/<?php echo Base::instance()->get("share"); ?>",
	"height": "1200px",
	"width": "630px"
 },
 "datePublished": "<?php echo Base::instance()->get("date"); ?>",
 "dateModified": "<?php echo Base::instance()->get("date"); ?>",
 "author": {
	"@type": "Person",
	"name": "Dr. Pater, anim.tech"
 },
  "publisher": {
	"@type": "Organization",
	"name": "Anim.tech, Creative side up",
	"logo": {
	 "@type": "ImageObject",
	 "url": "<?php echo Base::instance()->get("base"); ?>/ui/images/animtech280x280.jpg",
	 "width": "280px",
	 "height": "280px"
	}
 },
 "description": "<?php echo Base::instance()->get("description"); ?>"
}
</script>