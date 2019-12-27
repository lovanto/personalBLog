<?php

$halaman = 5;
$page = isset($_GET['pageNumber'])? (int)$_GET["pageNumber"]:1;
$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;

if(isset($_GET['search'])){
	$search = $_GET['search'];
	$sql = mysqli_query($Open, "SELECT * FROM post WHERE title_post LIKE '%".$search."%' LIMIT $mulai, $halaman");
	$query = mysqli_query($Open, "SELECT * FROM post WHERE title_post LIKE '%".$search."%'");
	$total = mysqli_num_rows($query);	
	echo $total;		
}else{
	$sql = mysqli_query($Open, "SELECT * FROM post ORDER BY id_post DESC LIMIT $mulai, $halaman");
	$query = mysqli_query($Open, "SELECT * FROM post");
	$total = mysqli_num_rows($query);
}

$pages = ceil($total/$halaman); 

while ($data = mysqli_fetch_array($sql)) {
	?>
	<a href="index.php?page=<?=$data['title_post']?>">
		<div class="content border zoom blackFont marginsBottom">
			<img src="<?=$data['image_post']?>" width="350px">
			<h4><?=$data['title_post']?>
		</h4>
		<div class="marginsTop">
			<?php
			if (strlen($data['description_post']) > 300)  {
				echo substr($data['description_post'],0,300)."...";
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
			<?php 
			$j = (isset($_GET['pageNumber']))? $_GET['pageNumber'] : 1;
			for ($i=1; $i<=$pages; $i++){
				?>
				<li class="page-item
				<?php
				if ($j == $i){
					echo "active";
					}else{

					}
					?>
					"><a class="page-link" href="?pageNumber=<?php echo $i;?>"><?php echo $i; $j = (isset($_GET['pageNumber']))? $_GET['pageNumber'] : $i;?></a>
				</li>
				<?php 
			} 
			?>
		</ul>
	</nav>
</div>