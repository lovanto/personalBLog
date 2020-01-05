<div>
	<div class="jumbotron p-3 boldText mb-3">
		<img class="mr-2 minMT" src="../../images/icon/flat-post.png" width="20"> Postingan
	</div>
	<div class="jumbotron p-4">
		<div class="float-left boldText">
			<a class="link_item nav-link minMT" href="homeAdmin.php?page=create_posting">
				Add New Postingan <img class="ml-2 minMT" src="../../images/icon/plus.png" width="20">
			</a>
		</div>
		<form action="homeAdmin.php?" method="GET">
			<input class="form-control" type="hidden" name="page" value="posting">
			<input class="btn btn-primary float-right ml-3" type="submit" value="Show All">
		</form>
		<form action="homeAdmin.php?" method="GET">
			<div align="right" class="float-right">
				<div class="input-group marginsBottom">
					<input class="form-control" type="hidden" name="page" value="posting">
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
					<th width="200">Judul Postingan</th>
					<th>Deskripsi Postingan</th>
					<th width="100">Kategori</th>
					<th width="50">Views</th>
					<th width="50">Status</th>
					<th width="120">Opsi</th>
				</tr>
			</thead>
			<tbody>
				<?php

				$halaman = 5;
				$page = isset($_GET['pageNumber'])? (int)$_GET["pageNumber"]:1;
				$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;

				if(isset($_GET['search'])){
					$search = $_GET['search'];
					$sql = mysqli_query($Open, "SELECT * FROM post WHERE title_post LIKE '%".$search."%' ORDER BY id_post DESC LIMIT $mulai, $halaman");
					$query = mysqli_query($Open, "SELECT * FROM post WHERE title_post LIKE '%".$search."%' ORDER BY id_post DESC");
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
					$sql = mysqli_query($Open, "SELECT * FROM post ORDER BY id_post DESC LIMIT $mulai, $halaman");
					$query = mysqli_query($Open, "SELECT * FROM post ORDER BY id_post DESC");
					$total = mysqli_num_rows($query);
				}

				$pages = ceil($total/$halaman);
				$numberRow = $mulai;
				while ($show = mysqli_fetch_array($sql)) {
					$numberRow++;
					?>
					<tr id="showDataHere">
						<td><?=$numberRow?></td>
						<td><?=$show['title_post']?></td>
						<td><?=$show['description_post']?></td>
						<td><?=$show['id_category']?></td>
						<td><?=$show['hit']?></td>
						<td><?=$show['status_post']?></td>
						<td><a href="menuAdmin/update_post_view.php?id_post=<?php echo $show['id_post'];?>">Edit</a> | <a href="../../code/delete/delete_post.php?id_post=<?php echo $show['id_post'];?>">Hapus</a></td>
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
							echo "?page=posting&search=$search&pageNumber=1";
							}else{
								echo "?page=posting&pageNumber=1";
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
								echo "?page=posting&search=$search&pageNumber=$minusPage";
								}else{
									echo "?page=posting&pageNumber=$minusPage";
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
										echo "?page=posting&search=$search&pageNumber=$pagee";
										}else{
											echo "?page=posting&pageNumber=$pagee";
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
										echo "?page=posting&search=$search&pageNumber=$plusPage";
										}else{
											echo "?page=posting&pageNumber=$plusPage";
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
											echo "?page=posting&search=$search&pageNumber=$pages";
											}else{
												echo "?page=posting&pageNumber=$pages";
											}
											?>
											">Terakhir</a>
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>