<div class="col-lg-3 d-none d-lg-block">
						<div class="box-cate">
							<p class="title-sidebar"><i class="fas fa-bars"></i>Dịch vụ thuê xe</p>
							<div class="box-border">
								<ul class="lh2-ul">
									<li><a href=""><i class="fas fa-caret-right"></i>Thuê xe du lịch</a></li>
									<li><a href=""><i class="fas fa-caret-right"></i>Thuê xe dự án</a></li>
									<li><a href=""><i class="fas fa-caret-right"></i>Thuê xe cưới hỏi</a></li>
								</ul>
							</div>
						</div>
						<div class="box-contact">
							<p class="title-sidebar"><i class="fas fa-bars"></i>Hỗ trợ trực tuyến</p>
							<div class="box-border">
								<ul class="lh2-ul">
									<li>Hotline: 0915 17 12 19</li>
									<li>Email: inb.mycar@gmail.com</li>
								</ul>
							</div>
						</div>
						<div class="box-hightlight-news">
							<p class="title-sidebar"><i class="fas fa-bars"></i>Tin nỗi bật</p>
							<div class="box-border">


							<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=8&post_type=tin-tuc&meta_key=views&orderby=meta_value_num'); ?>
							<?php global $wp_query; $wp_query->in_the_loop = true; ?>
							<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
							<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');  ?>
								<div class="list-news">
									<a class="img" href=""><img class="img-fluid lh2-img" src="<?php echo $featured_img_url ?>" alt=""></a>
									<div class="right-list">
										<a href=""><?php the_title(); ?></a>
										<div class="lh2-date"><i class="fas fa-calendar-alt"></i><?php get_the_date('d/m/Y'); ?></div>
									</div>
								</div>
								<!-- end item -->
							<?php endwhile; wp_reset_postdata(); ?>
								
								<div class="list-news">
									<a class="img" href=""><img class="img-fluid lh2-img" src="<?php bloginfo('template_directory') ?>/img/a2.jpg" alt=""></a>
									<div class="right-list">
										<a href="">Giới chức Thái Lan thông báo một người trong đội thợ lặn</a>
										<div class="lh2-date"><i class="fas fa-calendar-alt"></i> 20/08/1993</div>
									</div>
								</div>
								<!-- end item -->
								<div class="list-news">
									<a class="img" href=""><img class="img-fluid lh2-img" src="<?php bloginfo('template_directory') ?>/img/a3.jpg" alt=""></a>
									<div class="right-list">
										<a href="">Giới chức Thái Lan thông báo một người trong đội thợ lặn</a>
										<div class="lh2-date"><i class="fas fa-calendar-alt"></i> 20/08/1993</div>
									</div>
								</div>
								<!-- end item -->
								<div class="list-news">
									<a class="img" href=""><img class="img-fluid lh2-img" src="<?php bloginfo('template_directory') ?>/img/a4.jpg" alt=""></a>
									<div class="right-list">
										<a href="">Giới chức Thái Lan thông báo một người trong đội thợ lặn</a>
										<div class="lh2-date"><i class="fas fa-calendar-alt"></i> 20/08/1993</div>
									</div>
								</div>
								<!-- end item -->
								<div class="list-news">
									<a class="img" href=""><img class="img-fluid lh2-img" src="<?php bloginfo('template_directory') ?>/img/toyota.png" alt=""></a>
									<div class="right-list">
										<a href="">Giới chức Thái Lan thông báo một người trong đội thợ lặn</a>
										<div class="lh2-date"><i class="fas fa-calendar-alt"></i> 20/08/1993</div>
									</div>
								</div>
								<!-- end item -->
							</div>
						</div>
					</div>