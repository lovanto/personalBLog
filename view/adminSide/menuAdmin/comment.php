<div>
	<div class="jumbotron p-3 boldText mb-3">
		<img class="mr-2 minMT" src="../../images/icon/flat-comment.png" width="20"> Komentar
	</div>
	<div class="alert alert-success" role="alert">
		Selamat datang <?=$_SESSION['name']?> di komentar manajer area...
	</div>
	<div class="jumbotron p-4">
		<div class="float-left boldText">
		</div>
		<form action="homeAdmin.php?" method="GET">
			<input class="form-control" type="hidden" name="page" value="comment">
			<input class="btn btn-primary float-right ml-3" type="submit" value="Show All">
		</form>
		<form action="homeAdmin.php?" method="GET">
			<div align="right" class="float-right">
				<div class="input-group marginsBottom">
					<input class="form-control" type="hidden" name="page" value="comment">
					<input class="form-control" type="text" name="search" placeholder="Search.." style="width: 300px;">
					<div class="input-group-append">
						<input class="btn btn-primary border-right" type="submit" value="Search">
					</div>
				</div>
			</div>
		</form>
		<table class="table table-hover roundedCorners mb-5">
			<thead class="bg-dark whiteFont">
				<tr>
					<th width="40">No</th>
					<th width="200">Nama Pengomentar</th>
					<th>Komentar</th>
					<th width="200">Tanggal Komentar</th>
					<th>Opsi</th>
				</tr>
			</thead>
			<tbody>
				<?php

				$halaman = 5;
				$page = isset($_GET['pageNumber'])? (int)$_GET["pageNumber"]:1;
				$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;

				if(isset($_GET['search'])){
					$search = $_GET['search'];
					$sql = mysqli_query($Open, "SELECT * FROM comment_user WHERE comment_content LIKE '%".$search."%' ORDER BY id_comment DESC LIMIT $mulai, $halaman");
					$query = mysqli_query($Open, "SELECT * FROM comment_user WHERE comment_content LIKE '%".$search."%' ORDER BY id_comment DESC");
					$total = mysqli_num_rows($query);
					?>
					<?php
					if ($total == 0) {
						?>
						<br><br>
						<div class="marginsBottom boldText">Data tidak ditemukan...</div>
						<?php
					}
				}else{
					$sql = mysqli_query($Open, "SELECT * FROM comment_user ORDER BY id_comment DESC LIMIT $mulai, $halaman");
					$query = mysqli_query($Open, "SELECT * FROM comment_user ORDER BY id_comment DESC");
					$total = mysqli_num_rows($query);
				}

				$pages = ceil($total/$halaman);
				$numberRow = $mulai;
				while ($show = mysqli_fetch_array($sql)) {
					$numberRow++;
					?>
					<tr id="showDataHere">
						<td><?=$numberRow?></td>
						<td><?=$show['name_user']?></td>
						<td><?=$show['comment_content']?></td>
						<td><?=$show['date_comment']?></td>
						<td><a href="menuAdmin/update_comment_view.php?id_comment=<?php echo $show['id_comment'];?>">Edit</a> | <a href="../../code/delete/delete_comment.php?id_comment=<?php echo $show['id_comment'];?>">Hapus</a></td>
					</tr>
					<?php
				}
				?>
			</tbody>
			<tfoot>
				<tr>
					<td height="40"></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr class="bg-dark">
					<td height="40"></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</tfoot>
		</table>

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
							echo "?page=comment&search=$search&pageNumber=1";
							}else{
								echo "?page=comment&pageNumber=1";
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
								echo "?page=comment&search=$search&pageNumber=$minusPage";
								}else{
									echo "?page=comment&pageNumber=$minusPage";
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
										echo "?page=comment&search=$search&pageNumber=$pagee";
										}else{
											echo "?page=comment&pageNumber=$pagee";
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
										echo "?page=comment&search=$search&pageNumber=$plusPage";
										}else{
											echo "?page=comment&pageNumber=$plusPage";
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
											echo "?page=comment&search=$search&pageNumber=$pages";
											}else{
												echo "?page=comment&pageNumber=$pages";
											}
											?>
											">Terakhir</a>
										</li>
									</ul>
								</nav>
							</div>


						</div>
					</div>

					<div id="add_user" class="modal-window2">
						<?php include 'add_user.php'; ?>
					</div>

					<script>
						$('.Contact').click(function(){
							var id=$('.Contact').val();
							$.ajax({url:"ModalPage.php?id="+id,cache:false,success:function(result){
								$(".modal-content").html(result);
							}});
						});
				</script>