<?php get_header() ?>
			<div class="block-slider">
			
			</div>
			<!-- end block-slider -->
		</div>
		<!-- end lh-header -->
		
		
		
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<div class="module-product-detail">
			<div class="container">
				<div class="bread-crumb">
					<a href="">Trang chủ</a>
					<span class="dot">/</span>
					<a href="">Thuê xe du lịch</a>
					<span class="dot">/</span>
					<span class="name">Dịch vụ thuê xe</span>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-9">
						<div class="block-product-slider">
							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-6  left">
									<?php $ga = get_field('hinh_anh'); ?>
									<?php $terms = get_the_terms(get_the_ID(), 'danh_muc_san_pham' );?>
								 	<ul id="imageGallery">
										<?php foreach($ga as $key => $value) {?>
											<li data-thumb="<?php echo $value['sizes']['thumbnail'] ?>" data-src="<?php echo $value['url']; ?>">
						                	<div class="img-height">
							                	<img  class="img-fluid lh2-img" src="<?php echo $value['url']; ?>"/>
							                	<div class="overlay">
							                		<a href="" class="zoom"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
							                	</div>
											</div>
						                 	</li>
											<?php }	
										?>
					                </ul>
								</div>
								<div class="col-md-6  col-sm-6 col-xs-6 right">
									<div class="border">
										<b class="name"><?php the_title(); ?></b>
										<p><b>Giá:</b>
											<?php if(get_field('gia_ban')){?>
											<?php the_field('gia_ban');}else{?>
											<?php echo 'Liên hệ	';} ?>
										</p>
										<p><b>Số chỗ ngồi: </b> 
											<?php if(get_field('so_cho_ngoi')){?>
											<?php the_field('so_cho_ngoi');}else{?>
											<?php echo 'Đang cập nhật';} ?>
										</p>
										<p><b>Thương hiệu:</b><?php the_field('thuong_hieu'); ?></p>
										<p><b>Màu sắc:</b> <?php the_field('mau_sac')?></p>
										<p><b>Đời xe:</b> <?php the_field('doi-xe')?></p>
									 	<button class="lh2-button lh-show-bk">Thuê ngay</a>
									</div>
								</div>
							</div>
						</div>
						<!-- end block-slider -->
						<div class="block-info-product-detail">
							<p class="title-other"><span>Thông tin chi tiết</span></p>
							<div class="box-content">
								<?php the_excerpt() ?>
							</div>
						</div>
						<!-- block-inffo -->
						<div class="block-product-other">
							<p class="title-other"><span>Xe liên quan</span></p>
							<div class="slider-product">
								<?php
									$terms = get_the_terms( get_the_ID(), 'danh_muc_san_pham' );
									$curent_term = $terms[0]->slug;
									if($curent_term){
										$args=array(
										'danh_muc_san_pham' => $curent_term,
										'post__not_in' => array(get_the_ID()),
										'showposts'=>6, // Số bài viết bạn muốn hiển thị.
										'caller_get_posts'=>1,
										'post_type' => 'san-pham'
										);
										$my_query = new wp_query($args);
										if( $my_query->have_posts() ) 
										{
											while ($my_query->have_posts())
											{
												$my_query->the_post();
												?>
												<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
													<div class="item-product col-lg-4 col-md-6 col-sm-6 col-12">
														<div class="bg">
															<div class="img-height">
																<a class="img" href="<?php the_permalink(); ?>">
																	<img class="img-fluid lh2-img" src="<?php echo $featured_img_url ?>" alt="">
																</a>
															</div>
															<div class="info-product">
																<a class="name" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
																<p class="price"> <b><i class="fas fa-tag"></i>Giá:</b> 
																	<?php if(get_field('gia_ban')){?>
																	<?php the_field('gia_ban');}else{?>
																	<?php echo 'Liên hệ	';} ?>
																</p>
																<p><b><i class="fab fa-accessible-icon"></i>Số chỗ: </b>
																	<?php if(get_field('so_cho_ngoi')){?>
																	<?php the_field('so_cho_ngoi');}else{?>
																	<?php echo 'Đang cập nhật	';} ?>
																</p>
																<p><b><i class="fas fa-car"></i>Thương hiệu:</b> TOYOTA</p>
															</div>
														</div>
													</div>
													<!-- end item -->
												<?php
											}
										}
									}
								?>	
								
								<div class="item-product col-lg-4 col-md-6 col-sm-6 col-12">
									<div class="bg">
										<div class="img-height">
											<a class="img" href="">
												<img class="img-fluid lh2-img" src="<?php bloginfo('template_directory') ?>/img/a3.jpg" alt="">
											</a>
										</div>
										<div class="info-product">
											<a class="name" href="">Thuê xe 16 chỗ tại Đà Nẵng</a>
											<p class="price"> <b><i class="fas fa-tag"></i>Giá:</b> Liên hệ</p>
											<p><b><i class="fab fa-accessible-icon"></i>Số chỗ: </b>7 Chổ</p>
											<p><b><i class="fas fa-car"></i>Thương hiệu:</b> TOYOTA</p>
										</div>
									</div>
								</div>
								<!-- end item -->
								<div class="item-product col-lg-4 col-md-6 col-sm-6 col-12">
									<div class="bg">
										<div class="img-height">
											<a class="img" href="">
												<img class="img-fluid lh2-img" src="<?php bloginfo('template_directory') ?>/img/a2.jpg" alt="">
											</a>
										</div>
										<div class="info-product">
											<a class="name" href="">Thuê xe 16 chỗ tại Đà Nẵng</a>
											<p class="price"> <b><i class="fas fa-tag"></i>Giá:</b> Liên hệ</p>
											<p><b><i class="fab fa-accessible-icon"></i>Số chỗ: </b>7 Chổ</p>
											<p><b><i class="fas fa-car"></i>Thương hiệu:</b> TOYOTA</p>
										</div>
									</div>
								</div>
								<!-- end item -->
								<div class="item-product col-lg-4 col-md-6 col-sm-6 col-12">
									<div class="bg">
										<div class="img-height">
											<a class="img" href="">
												<img class="img-fluid lh2-img" src="<?php bloginfo('template_directory') ?>/img/a1.jpg" alt="">
											</a>
										</div>
										<div class="info-product">
											<a class="name" href="">Thuê xe 16 chỗ tại Đà Nẵng</a>
											<p class="price"> <b><i class="fas fa-tag"></i>Giá:</b> Liên hệ</p>
											<p><b><i class="fab fa-accessible-icon"></i>Số chỗ: </b>7 Chổ</p>
											<p><b><i class="fas fa-car"></i>Thương hiệu:</b> TOYOTA</p>
										</div>
									</div>
								</div>
								<!-- end item -->

							</div>
							<button class="button-slider next"><i class="fas fa-chevron-right"></i></button>
							<button class="button-slider prev"><i class="fas fa-chevron-left"></i></button>
						</div>
						<!-- end block-product-other -->
					</div>
					<?php get_sidebar();?>
				</div>

			</div>
		</div>
		<?php endwhile; else : ?>
		<?php endif; ?>
<?php get_footer(); ?>