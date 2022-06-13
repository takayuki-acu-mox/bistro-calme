<?php get_header(); ?>
	<h2 class="pageTitle">最新情報<span>NEWS</span></h2>

	<main class="main">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-9">

				<?php if ( have_posts() ) : ?>
					<?php while (have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class('article'); ?>>
						<header class="article_header">
							<h2 class="article_title"><?php the_title(); ?></h2>
							<div class="article_meta">
								<?php the_category(); ?>
								<time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time>
							</div>
						</header>

						<div class="article_body">
							<div class="content">
								<p>BISTRO CALME では、新しいメニューを開発中です。</p>
								<p>
									新しいメニューを提供するために、開店後に練習中です。スタッフから大好評のメニューもできてきました。<br>
									来月にはご提供できると思います。お楽しみに。
								</p>
							</div>
						</div>

						<div class="postLinks">
							<div class="postLink postLink-prev"><a href="#"><i
										class="fas fa-chevron-left"></i>前の記事のタイトル</a></div>
							<div class="postLink postLink-next"><a href="#">次の記事のタイトル<i
										class="fas fa-chevron-right"></i></a></div>
						</div>
					</article>
					<?php endwhile; ?>
					<?php endif; ?>

				</div>

				<div class="col-12 col-md-3">
					<aside class="archive">
						<h2 class="archive_title">カテゴリ 一覧</h2>
						<ul class="archive_list">
							<li><a href="#">お知らせ</a></li>
							<li><a href="#">コラム</a></li>
						</ul>
					</aside>

					<aside class="archive">
						<h2 class="archive_title">月別アーカイブ</h2>
						<ul class="archive_list">
							<li><a href="#">2019年4月</a></li>
							<li><a href="#">2019年5月</a></li>
						</ul>
					</aside>
				</div>
			</div>
		</div>
	</main>

<?php get_footer(); ?>