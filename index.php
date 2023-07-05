<?php get_header(); ?>

	<?php get_template_part('slider'); ?>
		</div>
		<!-- end lh-header -->
		<div class="block-intro">
			<div class="container">
				<p class="lh2-title1">VỀ CHÚNG TÔI</p>
				<p class="lh2-caption">là công ty du lịch, với nhiều năm kinh nghiệm trong việc cung cấp dịch vụ về vận tải du lịch, tư vấn và lập kế hoạch đi du lịch tới các điểm đến nổi tiếng. Chúng tôi có một mạng lưới liên kết lữ hành rộng và cung cấp các dịch vụ hỗ trợ lập kế hoạch...</p>
				<div class="row">
					<!-- Get post News Query -->
					<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=3&post_type=dich_vu'); ?>
					<?php global $wp_query; $wp_query->in_the_loop = true; ?>
					<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
					<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');  ?>
						<div class="col-lg-4 item-intro">
							<div class="img-height">
								<a href=""><img src="<?php echo $featured_img_url ?>" alt=""></a>
							</div>
							<div class="item-info">
								<a href=""><?php the_title(); ?></a>
								<p><?php the_excerpt(); ?></p>
							</div>
						</div>
					<?php endwhile; wp_reset_postdata(); ?>
					<!-- Get post News Query -->
				</div>
			</div>
		</div>
		<div class="block-contact">
			<div class="container">
				<p class="lh2-title1">dỊCH VỤ CHO Bán xe DU LỊCH</p>
				<p class="caption">Cung cấp dịch vụ cho Bán xe tự lái, du lịch từ 4 đến 45 chỗ</p>
				<p class="bottom">Thủ tục nhanh gọn - Nhận xe nhanh chóng</p>
				<button class="lh3-button" type=""><span>Xem ngay</span></button>
			</div>
		</div>
		<div class="block-product">
			<div class="container">
				<p class="lh2-title"> <span>Gian hàng TOYOTA</span></p>
				<div class="row">
					<!-- Get post News Query -->
					<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=6&post_type=san-pham&danh_muc_san_pham=toyota'); ?>
					<?php global $wp_query; $wp_query->in_the_loop = true; ?>
					<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
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
								<p class="price"> <b><i class="fas fa-tag"></i>Giá:</b> <?php the_field('gia_ban'); ?></p>
								<p><b><i class="fab fa-accessible-icon"></i>Số chỗ: </b>
									<?php if(get_field('so_cho_ngoi')){?>
									<?php echo the_field('so_cho_ngoi') . ' Chổ ' ;}else{?>
									<?php echo 'Đang cập nhật';} ?></p>
								</p>
								<p><b><i class="fas fa-car"></i>Thương hiệu:</b></p>
							</div>
						</div>
					</div>
					<!-- end item -->
					<?php endwhile; wp_reset_postdata(); ?>
					<!-- Get post News Query -->
				</div>
			</div>
		</div>
		<!-- end block-product -->
		<div class="block-product">
			<div class="container">
				<p class="lh2-title"> <span>gian hàng bmw </span></p>
				<div class="row">
					<!-- Get post News Query -->
					<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=6&post_type=san-pham&danh_muc_san_pham=bwm'); ?>
					<?php global $wp_query; $wp_query->in_the_loop = true; ?>
					<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
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
								<p class="price"> <b><i class="fas fa-tag"></i>Giá:</b> <?php the_field('gia_ban'); ?></p>
								<p><b><i class="fab fa-accessible-icon"></i>Số chỗ: </b>
									<?php if(get_field('so_cho_ngoi')){?>
									<?php echo the_field('so_cho_ngoi') . ' Chổ ' ;}else{?>
									<?php echo 'Đang cập nhật';} ?></p>
								<p><b><i class="fas fa-car"></i>Thương hiệu:</b></p>
							</div>
						</div>
					</div>
					<!-- end item -->
					<?php endwhile; wp_reset_postdata(); ?>
					<!-- Get post News Query -->
				</div>
			</div>
		</div>
		<!-- end block-product -->
		
		<div class="block-product">
			<div class="container">
				<p class="lh2-title"> <span>Gian hàng honda</span></p>
				<div class="row">
					<!-- Get post News Query -->
					<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=6&post_type=san-pham&danh_muc_san_pham=toyota'); ?>
					<?php global $wp_query; $wp_query->in_the_loop = true; ?>
					<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
					<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
					<div class="item-product col-lg-4 col-md-6 col-sm-6 col-12">
						<div class="bg">
							<div class="img-height">
								<a class="img" href="<?php the_permalink(); ?>">
									<img class="img-fluid lh2-img" src="<?php echo  $featured_img_url ?>" alt="">
								</a>
							</div>
							<div class="info-product">
								<a class="name" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								<p class="price"> <b><i class="fas fa-tag"></i>Giá:</b> <?php the_field('gia_ban'); ?></p>
								<p><b><i class="fab fa-accessible-icon"></i>Số chỗ: </b>
									<?php if(get_field('so_cho_ngoi')){?>
									<?php echo the_field('so_cho_ngoi') . ' Chổ ' ;}else{?>
									<?php echo 'Đang cập nhật';} ?></p>
								</p>
								<p><b><i class="fas fa-car"></i>Thương hiệu:</b></p>
							</div>
						</div>
					</div>
					<!-- end item -->
					<?php endwhile; wp_reset_postdata(); ?>
					<!-- Get post News Query -->
				</div>
			</div>
		</div>
		<!-- end block-product -->
<?php get_footer(); ?>