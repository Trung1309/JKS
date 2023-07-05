<?php get_header(); ?>
			<div class="block-slider">
				
			</div>
			<!-- end block-slider -->
		</div>
		<!-- end lh-header -->
		<div class="module-product">
			<div class="container">
				<div class="bread-crumb">
					<a href="<?php bloginfo('url') ?>">Trang chủ</a>
					<span class="dot">/</span>
					<span class="name">Tất cả các loại xe</span>
				</div>
			</div>
			<div class="container">
				<div class="row">
					
				

					<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
						<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');  ?>
						<div class="item-product col-lg-4 col-md-6 col-sm-6 col-12">
							<div class="bg">
								<div class="img-height">
									<a class="img" href="<?php the_permalink(); ?>">
										<img class="img-fluid lh2-img" src="<?php echo  $featured_img_url ?>" alt="">
									</a>
								</div>
								<div class="info-product">
									<a class="name" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									<p class="price"> <b><i class="fas fa-tag"></i>Giá:</b>
									<?php if(get_field('gia_ban')){?>
									<?php the_field('gia_ban');} else{?>
									<?php echo 'Liên hệ';} ?></p>
									<p><b><i class="fab fa-accessible-icon"></i>Số chỗ: </b> 
										<?php if(get_field('so_cho_ngoi')){?>
										<?php the_field('so_cho_ngoi');} else {?>
										<?php echo 'Đang cập nhật';}?></p>
									<p><b><i class="fas fa-car"></i>Thương hiệu:</b> <?php the_field('thuong_hieu'); ?></p>
								</div>
							</div>
						</div>
					<?php endwhile; else : ?>
					 <p>Không có bài viết nào!</p>
					<?php endif; ?>

					<?php if(paginate_links()!='') {?>
					<div class="pagination">
						<?php
						global $wp_query;
						$big = 999999999;
						echo paginate_links( array(
							'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
							'format' => '?paged=%#%',
							'prev_text'    => __('«'),
							'next_text'    => __('»'),
							'current' => max( 1, get_query_var('paged') ),
							'total' => $wp_query->max_num_pages
							) );
						?>
					</div>
					<?php } ?>

					<div class="lh2-pagging col-12">
						<ul class="pagination">
						  <li class="page-item"><a class="page-link" href="#"><i class="fas fa-step-backward"></i></a></li>
						  <li class="page-item"><a class="page-link" href="#">1</a></li>
						  <li class="page-item"><a class="page-link" href="#">2</a></li>
						  <li class="page-item"><a class="page-link" href="#">3</a></li>
						  <li class="page-item"><a class="page-link" href="#"><i class="fas fa-step-forward"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
<?php get_footer(); ?>