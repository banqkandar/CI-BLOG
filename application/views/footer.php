	<footer class="bg-191 color-ccc">
			
		<div class="container">
			<div class="pt-50 pb-20 pos-relative">
				<div class="row">
				
					<div class="col-sm-4">
						<div class="mb-30">
							<?php 
								$query = $this->db->get('tbl_site', 1);
								$data = $query->row_array();
							?>
							<a href="#"><img src="<?php echo base_url().'theme/images/'.$data['site_logo_footer']?>"></a>
							<p class="mtb-20 color-ccc"><?php echo $data['site_description'];?></p>
						</div><!-- mb-30 -->
					</div><!-- col-md-4 -->
					
					<div class="col-sm-4">
						<div class="mb-30">
							<h5 class="color-primary mb-20"><b>TERBARU</b></h5>
							<?php
								$this->db->order_by('post_id', 'DESC');
								$query = $this->db->get('tbl_post', 2);
								foreach ($query->result() as $row):
							?>
							<div class="mb-20">
								<a class="color-white" href="<?php echo site_url('blog/'.$row->post_slug);?>"><b><?php echo $row->post_title;?></b></a>
								<h6 class="mt-10"><?php echo date('d M Y',strtotime($row->post_date));?></h6>
							</div>
							<?php endforeach;?>
						</div><!-- mb-30 -->
					</div><!-- col-md-4 -->
					
					<div class="col-sm-4">
						<div class="mb-30">
							<h5 class="color-primary mb-20"><b>TERPOPULER</b></h5>
							<?php
								$this->db->order_by('post_views', 'DESC');
								$query = $this->db->get('tbl_post', 2);
								foreach ($query->result() as $row):
							?>
							<div class="mb-20">
								<a class="color-white" href="<?php echo site_url('blog/'.$row->post_slug);?>"><b><?php echo $row->post_title;?></b></a>
								<h6 class="mt-10"><?php echo date('d M Y',strtotime($row->post_date));?></h6>
							</div>
							<?php endforeach;?>
						</div><!-- mb-30 -->
					</div><!-- col-md-4 -->
					
				</div><!-- row -->
			</div><!-- ptb-50 -->
			
			<div class="brdr-ash-1 opacty-2"></div>
			
			<div class="oflow-hidden color-ash font-9 text-sm-center ptb-sm-5">
			
				<ul class="float-left float-sm-none list-a-plr-5 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-10">
					<li>Copyright &copy; <?php echo date('Y');?> All rights reserved by<a href="www.instagram.cpm/bangkandar" target="_blank">bangkadar</a></li>
				</ul>
				
			</div><!-- oflow-hidden -->
		</div><!-- container -->
	</footer>