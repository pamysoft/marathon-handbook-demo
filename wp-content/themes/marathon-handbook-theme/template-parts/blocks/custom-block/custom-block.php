<div class="two-column-block container mx-auto">
    <div class="grid grid-cols-1 gap-16 md:grid-cols-2">
        <div class="w-679px bg-white rounded-xxl p-6">
            <div class="overflow-hidden w-[629px] h-[370px] rounded-xl">
                <img src="<?php the_field('left_image'); ?>" alt="Image 1" class="w-full h-auto">
            </div>
            <div class="flex justify-center my-[16px]">
                <div class="text-[18px]font-[Lora] inline-block border border-gray-950 rounded-[20px] py-1 px-3"><?php the_field('left_title'); ?></div>
            </div>
            <h3 class="text-[40px] leading-[44px] text-center font-semibold font-[Archivo]"><?php the_field('left_subtitle'); ?></h3>
            <div class="text-center uppercase text-[12px] mt-[18px] font-medium flex gap-[10px] justify-center">
                <span class=" text-[12px] text-gray-600"><?php the_field('left_author'); ?></span>
                <span class="point"><span></span></span>
                <span class="text-[12px] text-gray-600"><?php the_field('left_date'); ?></span>
            </div>
        </div>
        <div class="right-column space-y-[60px] w-786px">
            <?php if( have_rows('right_blocks') ): ?>
                <?php while( have_rows('right_blocks') ): the_row(); ?>
                    <div class="block-content flex gap-[30px]">
                        <div class="overflow-hidden w-[256px] h-[166px] rounded-xl">
                            <img src="<?php the_sub_field('image'); ?>" alt="Image 1" class="w-full h-auto">
                        </div>
                        <div class="flex-1">
                            <h3 class="text-[15px] font-bold mb-[11px]"><?php the_sub_field('title'); ?></h3>
                            <p class="text-[22px] leading-[30px] font-semibold mb-[15px]"><?php the_sub_field('description'); ?></p>
                            <div class="uppercase font-medium flex gap-[10px]">
                                <span class="text-[12px] text-gray-600"><?php the_sub_field('author'); ?></span>
                                <span class="point"><span></span></span>
                                <span class="text-[12px] text-gray-600"><?php the_sub_field('date'); ?></span>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>