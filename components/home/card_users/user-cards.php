<div class="user-card bg-white rounded-3xl shadow shadow-black-900">
    <div class="user-thumbnail">
        <?php the_post_thumbnail('large'); ?>
    </div>
        <?php  if(have_rows('profile')):?>
            <?php while( have_rows('profile')): the_row(); 
                $image = get_sub_field('image');
                ?>

            <?php endwhile;?>
        <?php endif;?>
    <div class="user p-2 ">
        <div class="user-info flex mb-2 items-center">
            <div class="img pr-5 ">

                <img src="<?php echo $image['url'];?>" class="2xl:w-14 2xl:h-14 w-10 h-10 rounded-full" />

            </div>
            <div class="user-name text-basic font-semibold">
                <?php the_title(); ?>
            </div>
        </div>

        <div class="user-content text-basic mb-5 h-12">
            <?php echo wp_trim_words( get_the_content(), 5); ?>
        </div>

        <button type="button" class="flex w-full text-white text-xs justify-end p-1">
            <?php $link = get_permalink();  ?>
            <p class="bg-green-700 hover:bg-green-800  rounded-full px-4 py-2 text-center"><?php print '<a href="'.$link.'">More Info ...</a>' ?></p>  
        </button>
                
    </div>
</div>


