<?php

/**
 * airfleet Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */


$id = 'airfleet-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

$className = 'airfleet';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$text = get_field('text') ?: 'Your text here...';
$Heading = get_field('heading') ?: 'Your Heading Here';
$button_text = get_field('button_text') ?: 'button here';
$image = get_field('image') ?: 295; 
$text1 = get_field('text1') ?: 'Your text here...';
$Heading1 = get_field('heading1') ?: 'Your Heading Here';
$button_text1 = get_field('button_text1') ?: 'button here';
$image1 = get_field('image1') ?: 295;
?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> airfleet-block">
    <div id="first-section-id" class="first-section">
            <div class="first-section-text">
                 <h4 class="head1"><?php echo $Heading; ?></h4>
                <p class="first-text show-read-more"><?php echo $text1; ?></p>
            <div class="first-button-div">
            <a class="btn-1" href="#"><?php echo $button_text; ?></a> 
            </div>
        </div>
            <div id ="first-image-div-id" class="first-image-div">
                <?php if( get_field('image') ): ?>
                <img src="<?php the_field('image'); ?>"  class="first-image"/>
            <?php endif; ?>
        </div>
    </div>

    <div id="second-sections1" class="second-section1">
    <div id ="second-image-div-id" class="second-image-div">
                <?php if( get_field('image1') ): ?>
                <img src="<?php the_field('image1'); ?>"  class="second-image"/>
            <?php endif; ?>
        </div>
            <div class="second-section-text">
                 <h4 class="second-heading "><?php echo $Heading1; ?></h4>
                <p class="second-text show-read-more  "><?php echo $text1; ?></p>
            <div class="second-button-div">
            <a class="btn-1-2" href="#"><?php echo $button_text1; ?></a> 
            </div>
        </div>
    </div>

</div>









<script>
    $(document).ready(function(){
	var maxLength = 15;
	$(".show-read-more").each(function(){
		var myStr = $(this).text();
		if($.trim(myStr).length > maxLength){
			var newStr = myStr.substring(0, maxLength);
			var removedStr = myStr.substring(maxLength, $.trim(myStr).length);
			$(this).empty().html(newStr);
			$(this).append(' <a href="javascript:void(0);" class="read-more read-more1">read more...</a>');
			$(this).append('<span class="more-text more-text1">' + removedStr + '</span>');
		}
	});
	$(".read-more").click(function(){
		$(this).siblings(".more-text").contents().unwrap();
		$(this).remove();
	});
});
</script>
