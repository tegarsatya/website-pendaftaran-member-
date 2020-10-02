    <section id="content">
    	<div class="container">
    		<div class="row">
    			<div class="col-xs-12 col-sm-10 col-sm-offset-1 fadeInDown">
    				<div class="tab-wrap">
    					<div class="media">
    						<div class="parrent pull-left">
    							<ul class="nav nav-tabs nav-stacked">
    								<h1><?php echo $judul ?></h1>
    							</ul>
    						</div>

    						<div class="parrent media-body">
    							<?php foreach ($video as $ga) { ?>
    								<div class="tab-content">
    									<div class="tab-pane fade active in text-right" id="tab2">
    										<div class="video-box">
    											<img src="assets/frontend/images/tab-video-bg.png" alt="video">
    											<a class="video-icon" href="<?php echo $ga->video ?>" rel="prettyPhoto"><i class="fa fa-play"></i></a>
    										</div>
    									</div>
    								</div>
    							<?php } ?>
    							<!--/.tab-content-->
    						</div>
    						<!--/.media-body-->
    					</div>
    					<!--/.media-->
    				</div>
    				<!--/.tab-wrap-->
    			</div>
    			<!--/.col-sm-6-->

    		</div>
    		<!--/.row-->
    	</div>
    	<!--/.container-->
    </section>
