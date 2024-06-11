<div class="two-column-block container mx-auto">
    <div class="grid grid-cols-1 gap-[35px] sm:gap-[64px] md:grid-cols-2">
        <div class="sm:w-679px bg-white rounded-xl sm:rounded-xxl p-[10px] sm:p-6">
            <div class="overflow-hidden sm:w-[629px] min-h-[183px] sm:h-[370px] rounded-xl max-w-full">
                <img src="<?php the_field('left_image'); ?>" alt="Image 1" class="w-full h-auto">
            </div>
            <div class="flex justify-center mt-[14px] sm:mt-[16px]">
                <div class="text-[14px] sm:text-[18px] font-[Lora] leading-none inline-block border border-black rounded-[30px] sm:rounded-[20px] py-[3px] px-[10px]"><?php the_field('left_title'); ?></div>
            </div>
            <h3 class="text-[20px] mt-[14px] sm:mt-[16px] sm:text-[40px] leading-[22px] sm:leading-[44px] text-center font-semibold font-[Archivo]"><?php the_field('left_subtitle'); ?></h3>
            <div class="text-center uppercase text-[12px] mt-[12px] sm:mt-[18px] mb-[5px] font-medium flex gap-[10px] justify-center">
                <span class=" text-[12px] text-black"><?php the_field('left_author'); ?></span>
                <span class="flex items-center justify-center"><span class="block rounded-[50%] bg-black w-[4px] h-[4px]"></span></span>
                <span class="text-[12px] text-black"><?php the_field('left_date'); ?></span>
            </div>
        </div>
        <div class="right-column space-y-[32px] sm:space-y-[60px] w-786px">
            <?php if( have_rows('right_blocks') ): ?>
                <?php while( have_rows('right_blocks') ): the_row(); ?>
                    <div class="block-content flex gap-[13px] sm:gap-[30px]">
                        <div class="overflow-hidden w-[110px] sm:w-[256px] h-[75.6px] sm:h-[166px] rounded-xl max-w-full">
                            <img src="<?php the_sub_field('image'); ?>" alt="Image 1" class="w-full h-auto">
                        </div>
                        <div class="flex-1">
                            <h3 class="text-[12px] sm:text-[15px] font-bold mb-[6px] sm:mb-[11px] tracking-[0.02em]"><?php the_sub_field('title'); ?></h3>
                            <p class="text-[16px] sm:text-[22px] leading-[22px] sm:leading-[30px] font-semibold mb-[7px] sm:mb-[15px]"><?php the_sub_field('description'); ?></p>
                            <div class="uppercase font-medium flex gap-[10px]">
                                <span class="text-[10px] sm:text-[12px] text-black"><?php the_sub_field('author'); ?></span>
                                <span class="flex items-center justify-center"><span class="block rounded-[50%] bg-black w-[4px] h-[4px]"></span></span>
                                <span class="text-[10px] sm:text-[12px] text-black"><?php the_sub_field('date'); ?></span>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>