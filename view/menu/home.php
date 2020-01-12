<?php

$halaman = 5;
$page = isset($_GET['pageNumber'])? (int)$_GET["pageNumber"]:1;
$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;

if(isset($_GET['search'])){
	$search = $_GET['search'];
	$sql = mysqli_query($Open, "SELECT * FROM post WHERE status_post = 'posted' AND title_post LIKE '%".$search."%' LIMIT $mulai, $halaman");
	$query = mysqli_query($Open, "SELECT * FROM post WHERE status_post = 'posted' AND title_post LIKE '%".$search."%'");
	$total = mysqli_num_rows($query);
	?>
	<div class="container boldFont marginsBottom">
		Hasil Pencarian :
	</div>
	<?php
	if ($total == 0) {
		?>
		<div class="container">Data tidak ditemukan...</div>
		<?php
	}
}else{
	$sql = mysqli_query($Open, "SELECT * FROM post WHERE status_post = 'posted' ORDER BY id_post DESC LIMIT $mulai, $halaman");
	$query = mysqli_query($Open, "SELECT * FROM post WHERE status_post = 'posted'");
	$total = mysqli_num_rows($query);
}

$pages = ceil($total/$halaman);

while ($data = mysqli_fetch_array($sql)) {
	?>
	<a href="index.php?page=<?=$data['title_post']?>">
		<div class="content border zoom blackFont marginsBottom hideme">
			<?php echo cl_image_tag($data["image_post"], array("width"=>300))?>
			<h4><?=$data['title_post']?>
		</h4>
		<div class="marginsTop">
			<?php
			if (strlen($data['description_post']) > 245)  {
				echo substr($data['description_post'],0,245)."...";
			}else{
				echo $data['description_post'];
			}
			?>
		</div>
		<div class="boldFont marginsTop badge badge-pill badge-dark">
			<?php 
			if ($data['id_category']==1) {
				echo "Programming";
			}elseif ($data['id_category']==2) {
				echo "Tutorial";
			}elseif ($data['id_category']==3) {
				echo "Emulator";
			}else{
				echo "Lainnya";
			}
			?>
		</div>
	</div>
</a>
<?php
}
?>
<div align="center">	
	<nav aria-label="...">
		<ul class="pagination justify-content-center">

			<!-- BUTTON FIRST PAGE -->
			<li class="page-item
			<?php
			if ($page == 1){
				echo "active";
				}else{

				}
				?>
				"><a class="page-link" href="
				<?php
				if(isset($_GET['search'])){
					echo "?search=$search&pageNumber=1";
					}else{
						echo "?pageNumber=1";
					}
					?>
					">Pertama</a>
				</li>

				<!-- BUTTON PAGE BEFORE -->
				<li class="page-item
				<?php
				$minusPage = $page-1;
				if ($page == 1){
					echo "disabled";
					}else{

					}
					?>
					"><a class="page-link" href="
					<?php
					if(isset($_GET['search'])){
						echo "?search=$search&pageNumber=$minusPage";
						}else{
							echo "?pageNumber=$minusPage";
						}
						?>
						"><<</a>
					</li>

					<?php 
					$locPage = (isset($_GET['pageNumber']))? $_GET['pageNumber'] : 1;
					$minPage = $page;
					$maxPage = 5+$page;

					// BUTTON PAGE NUMBER
					for ($pagee=$minPage; $pagee<=$maxPage; $pagee++){			
						if ($maxPage > $pages) {
							$maxPage = $pages;
							$pagee = $pages-5;
							if ($pagee <= 1) {
								$pagee = 1;
							}
						}
						?>
						<li class="page-item
						<?php
						if ($locPage == $pagee){
							echo "active";
							}else{

							}
							?>
							"><a class="page-link" href="
							<?php
							if(isset($_GET['search'])){
								echo "?search=$search&pageNumber=$pagee";
								}else{
									echo "?pageNumber=$pagee";
								}
								?>
								"><?php echo $pagee; $locPage = (isset($_GET['pageNumber']))? $_GET['pageNumber'] : $pagee;?></a>
							</li>
							<?php
						} 
						?>

						<!-- BUTTON PAGE AFTER -->
						<li class="page-item
						<?php
						$plusPage = $page+1;
						if ($page == $pages){
							echo "disabled";
							}else{

							}
							?>
							"><a class="page-link" href="
							<?php
							if(isset($_GET['search'])){
								echo "?search=$search&pageNumber=$plusPage";
								}else{
									echo "?pageNumber=$plusPage";
								}
								?>
								">>></a>
							</li>

							<!-- BUTTON LAST PAGE -->
							<li class="page-item
							<?php
							if ($page == $pages){
								echo "active";
								}else{

								}
								?>
								"><a class="page-link" href="
								<?php
								if(isset($_GET['search'])){
									echo "?search=$search&pageNumber=$pages";
									}else{
										echo "?pageNumber=$pages";
									}
									?>
									">Terakhir</a>
								</li>
							</ul>
						</nav>
					</div>