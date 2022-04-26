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








<style>
  * {
  box-sizing: border-box;
}
/* Responsive layout - makes a one column-layout instead of a two-column layout */

.main-block {
    height: auto;
    width: 100%;
    background: #291ea0;
  }
  
  .first-section {
    display: flex;
    padding-top: 47px;
  justify-content: space-around;
    width: 100%;
    background: #F5F5F5;
    padding-bottom:47px;
    height: auto;
  }
  
  .second-section1 {
    width: 100%;
    display: flex;
    justify-content: space-around;
    background: linear-gradient(135deg, #00FFFF 0%, #6455FF 100%);
    padding-top: 47px;
    padding-bottom:47px;
    height: auto;
    
  }
  
  .first-image-div {
    top: 47px;
    bottom: 55.56%;
    height: 463 !important;
    width: 329px;
    -webkit-filter: drop-shadow(0px 2px 4px rgba(0, 0, 0, 0.5));
            filter: drop-shadow(0px 2px 4px rgba(0, 0, 0, 0.5));
    border-radius: 8px;
  }
  
  .first-image {
    height: 463 !important;
    width: 329px;
    -webkit-filter: drop-shadow(0px 2px 4px rgba(0, 0, 0, 0.5));
            filter: drop-shadow(0px 2px 4px rgba(0, 0, 0, 0.5));
    border-radius: 8px;
  }
  
  .second-image-div {
    display: flex;
    right: 52.57%;
    left: 15.28%;
    top: 47px;
    height: 463;
    width: 329px;
    -webkit-filter: drop-shadow(0px 2px 4px rgba(0, 0, 0, 0.5));
            filter: drop-shadow(0px 2px 4px rgba(0, 0, 0, 0.5));
    border-radius: 8px;
  }
  
  .second-image {
    height: 463;
    width: 329px;
    -webkit-filter: drop-shadow(0px 2px 4px rgba(0, 0, 0, 0.5));
            filter: drop-shadow(0px 2px 4px rgba(0, 0, 0, 0.5));
    border-radius: 8px;
  }
  
  .first-section-text {
    justify-content: flex-start;
    width: 370px;
    height:auto;
    position:static;
  }
  
  .second-section-text {
    justify-content: flex-start;
    width: 370px;
    height: auto;
    position: static;
  }
  
  .second-button {
    height: 36px;
    width: 138px;
    left: 0px;
    top: 0px;
    border-radius: 2px;
    background: #6455FF;
  }
  
  .btn-1-2 {
    display: inline-block;
    width: 138px;
    height: 36px;
    margin-top: 10px;
    position: relative;
    overflow: hidden;
    text-transform: uppercase;
    text-decoration: none;
    background-color: #00FFFF;
    border-radius: 2px;
    padding-top: 8px;
  }
  
  .btn-1-2:hover {
    background-color: #00FFFF;
    -webkit-transform: scale(1.1) perspective(1px);
            transform: scale(1.1) perspective(1px);
  }
  
  .btn-1 {
    display: inline-block;
    width: 138px;
    height: 36px;
    margin-top: 20px;
    position: relative;
    overflow: hidden;
    text-transform: uppercase;
    text-decoration: none;
    background-color: #6455FF;
    border-radius: 2px;
    padding-top: 8px;
  }
  
  .btn-1:hover {
    background-color: #6455FF;
    -webkit-transform: scale(1.1) perspective(1px);
            transform: scale(1.1) perspective(1px);
  }
  a.btn-1-2 {
    font-family: 'Roboto Condensed';
    font-style: normal;
    font-weight: 700;
    font-size: 16px;
    line-height: 19px;
    text-align: center;
    color: #FFFFFF;
}
a.btn-1 {
    font-family: 'Roboto Condensed';
    font-style: normal;
    font-weight: 700;
    font-size: 16px;
    line-height: 19px;
    text-align: center;
    color: #0B0058;
}
  .head1 {
    font-family: 'RobotoCondensed';
    font-size: 40px;
    line-height: 47px;
    color: #0E0066;
  }
  
  .second-heading {
    font-family: 'Roboto Condensed';
    font-size: 40px;
    line-height: 47px;
    color: #FFFFFF;
  }
  
  .first-text {
    font-family: 'Roboto';
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 19px;
    color: #4A4A4A;
  }
  
  .second-text {
    font-family: 'Roboto';
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 19px;
    color: #FFFFFF;
  }
  .show-read-more .more-text {
    display: none;
  }
  @media only screen and (max-width: 750px) {
  .first-section   {
  display: block !important;
  justify-content: center!important;
  align-items: center !important;
  padding-left: 40px;
  }
  .second-section1   {
  display: block !important;
  justify-content: center!important;
  align-items: center !important;
  padding-left: 40px;
  }
  .second-section-text{
    margin-top: 20px;
  }
  .first-section-text {
    margin-bottom: 20px;
  }
  
  .show-read-more .more-text {
    display: flex;
  }
  a.read-more{
    display: none;
  }
}

</style>


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