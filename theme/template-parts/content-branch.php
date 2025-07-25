<div
	class="selected-item group md:p-4 px-4 py-3 border-b last:border-b-0 border-[#1d1d1d1a] bg-white hover:bg-[#DDEBCE80] [&.active]:bg-[#DDEBCE] transition-colors duration-300 cursor-pointer" data-map="<?php echo esc_attr(get_field('branch_iframe', get_the_ID())) ?>">
	<div class="text-xl font-semibold text-primary name_transaction">
		<?php the_title() ?>
	</div>
<?php if( get_field('branch_address', get_the_ID()) ): ?>
	<div class="mt-2 text-content text-sm address_transaction">
		<?php the_field('branch_address', get_the_ID()); ?>
	</div>
<?php endif; ?>
<?php if( get_field('branch_phone', get_the_ID()) ): ?>
	<div class="mt-2 text-content text-sm flex gap-1 items-center">
		<span><?php _e( 'Số điện thoại:', 'gnws' ) ?></span>
		<a href="tel:<?php echo preg_replace( '/\D+/', '', get_field( 'branch_phone', get_the_ID() ) ); ?>">
			<?php the_field('branch_phone', get_the_ID()); ?>
		</a>
	</div>
<?php endif; ?>
	<div class="transaction-btn mt-4">
		<p 
			class="group/inner flex items-center gap-1 text-sm font-medium text-primary w-fit">
			<?php _e( 'Xem bản đồ', 'gnws' ) ?>
			<i
				class="text-primary group-hover/inner:translate-x-1 transition-transform duration-300">
				<?php echo svg( 'right', '12', '12' ) ?>
			</i>
		</p>
	</div>
</div>