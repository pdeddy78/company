<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Project';
$this->params['breadcrumbs'][] = $this->title;
?>
				<div class="container">

					<div class="row">
						<div class="col-md-12">
							<div class="portfolio-title">
								<div class="row">
									<div class="portfolio-nav-all col-md-1">
										<a href="portfolio-single-project.html" data-tooltip data-original-title="Back to list"><i class="fa fa-th"></i></a>
									</div>
									<div class="col-md-10 center">
										<h2 class="mb-none">Lorem Ipsum Dolor</h2>
									</div>
									<div class="portfolio-nav col-md-1">
										<a href="portfolio-single-project.html" class="portfolio-nav-prev" data-tooltip data-original-title="Previous"><i class="fa fa-chevron-left"></i></a>
										<a href="portfolio-single-project.html" class="portfolio-nav-next" data-tooltip data-original-title="Next"><i class="fa fa-chevron-right"></i></a>
									</div>
								</div>
							</div>

							<hr class="tall">
						</div>
					</div>

					<div class="row">
						<div class="col-md-4">

							<div class="owl-carousel owl-theme" data-plugin-options='{"items": 1, "margin": 10}'>
								<div>
									<span class="img-thumbnail">
										<img alt="" class="img-responsive" src="<?=$this->theme->getUrl('img/projects/project-1.jpg')?>">
									</span>
								</div>
								<div>
									<span class="img-thumbnail">
										<img alt="" class="img-responsive" src="<?=$this->theme->getUrl('img/projects/project-2.jpg')?>">
									</span>
								</div>
								<div>
									<span class="img-thumbnail">
										<img alt="" class="img-responsive" src="<?=$this->theme->getUrl('img/projects/project-3.jpg')?>.jpg">
									</span>
								</div>
							</div>

						</div>

						<div class="col-md-8">

							<div class="portfolio-info">
								<div class="row">
									<div class="col-md-12 center">
										<ul>
											<li>
												<a href="#" data-tooltip data-original-title="Like"><i class="fa fa-heart"></i>14</a>
											</li>
											<li>
												<i class="fa fa-calendar"></i> 21 November 2013
											</li>
											<li>
												<i class="fa fa-tags"></i> <a href="#">Brand</a>, <a href="#">Design</a>
											</li>
										</ul>
									</div>
								</div>
							</div>

							<h4 class="heading-primary">Project <strong>Description</strong></h4>
							<p class="mt-xlg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus nibh sed elimttis adipiscing. Fusce in hendrerit purus. Suspendisse potenti. Proin quis eros odio, dapibus dictum mauris. Donec nisi libero, adipiscing id pretium eget, consectetur sit amet leo. Nam at eros quis mi egestas fringilla non nec purus.</p>

							<a href="#" class="btn btn-primary btn-icon"><i class="fa fa-external-link"></i>Live Preview</a> <span class="arrow hlb appear-animation" data-appear-animation="rotateInUpLeft" data-appear-animation-delay="800"></span>

							<ul class="portfolio-details">
								<li>
									<p><strong>Skills:</strong></p>

									<ul class="list list-inline list-icons">
										<li><i class="fa fa-check-circle"></i> Design</li>
										<li><i class="fa fa-check-circle"></i> HTML/CSS</li>
										<li><i class="fa fa-check-circle"></i> Javascript</li>
										<li><i class="fa fa-check-circle"></i> Backend</li>
									</ul>
								</li>
								<li>
									<p><strong>Client:</strong></p>
									<p>Okler Themes</p>
								</li>
							</ul>

						</div>
					</div>

					<div class="row">
						<div class="col-md-12">

							<hr class="tall">

							<h4 class="mb-md text-uppercase">Related <strong>Work</strong></h4>

							<div class="row">

								<ul class="portfolio-list">
									<li class="col-md-3 col-sm-6 col-xs-12">
										<div class="portfolio-item">
											<a href="portfolio-single-project.html">
												<span class="thumb-info">
													<span class="thumb-info-wrapper">
														<img src="<?=$this->theme->getUrl('img/projects/project.jpg')?>" class="img-responsive" alt="">
														<span class="thumb-info-title">
															<span class="thumb-info-inner">Random Chars</span>
															<span class="thumb-info-type">Website</span>
														</span>
														<span class="thumb-info-action">
															<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
														</span>
													</span>
												</span>
											</a>
										</div>
									</li>
									<li class="col-md-3 col-sm-6 col-xs-12">
										<div class="portfolio-item">
											<a href="portfolio-single-project.html">
												<span class="thumb-info">
													<span class="thumb-info-wrapper">
														<img src="<?=$this->theme->getUrl('img/projects/project-1.jpg')?>" class="img-responsive" alt="">
														<span class="thumb-info-title">
															<span class="thumb-info-inner">Full House</span>
															<span class="thumb-info-type">Website</span>
														</span>
														<span class="thumb-info-action">
															<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
														</span>
													</span>
												</span>
											</a>
										</div>
									</li>
									<li class="col-md-3 col-sm-6 col-xs-12">
										<div class="portfolio-item">
											<a href="portfolio-single-project.html">
												<span class="thumb-info">
													<span class="thumb-info-wrapper">
														<img src="<?=$this->theme->getUrl('img/projects/project-2.jpg')?>" class="img-responsive" alt="">
														<span class="thumb-info-title">
															<span class="thumb-info-inner">The Fly</span>
															<span class="thumb-info-type">Logo</span>
														</span>
														<span class="thumb-info-action">
															<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
														</span>
													</span>
												</span>
											</a>
										</div>
									</li>
									<li class="col-md-3 col-sm-6 col-xs-12">
										<div class="portfolio-item">
											<a href="portfolio-single-project.html">
												<span class="thumb-info">
													<span class="thumb-info-wrapper">
														<img src="<?=$this->theme->getUrl('img/projects/project-3.jpg')?>" class="img-responsive" alt="">
														<span class="thumb-info-title">
															<span class="thumb-info-inner">Run Away</span>
															<span class="thumb-info-type">Brand</span>
														</span>
														<span class="thumb-info-action">
															<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
														</span>
													</span>
												</span>
											</a>
										</div>
									</li>
								</ul>

							</div>
						</div>
					</div>

				</div>

			</div>

			<section class="call-to-action call-to-action-default with-button-arrow call-to-action-in-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="call-to-action-content">
								<h3>DEVart Studio adalah <strong>membuat website profesional </strong>dengan tampilan yang <strong> Elegant</strong> dan friendly!</h3>
								<p>Terbaik dalam <strong></strong> Pengembang Web dan Web Analis</p>
							</div>
							<div class="call-to-action-btn">
								<a href="" target="_blank" class="btn btn-lg btn-primary">Proyek!</a><span class="arrow hlb hidden-xs hidden-sm hidden-md" data-appear-animation="rotateInUpLeft" style="top: -12px;"></span>
							</div>
						</div>
					</div>
				</div>
			</section>
