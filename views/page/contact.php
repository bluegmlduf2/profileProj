<body>
	<!--Nav -->
	<?php include_once APPPATH ."views/layout/nav.php"; ?>
	<!--include('../application/views/layout/nav.php'); -->
	<!-- Body -->
	<div class="container">
		<div class="row mt-2 justify-content-center text-center">
			<!-- 안에 block 태그(<div class="col-4">)를 중앙 정렬 후 inline 태그가 있다면 중앙 정렬 -->
			<div class="col-4">
				<!--row태그 안에서 col-x 로 크기를 조절함 -->
				<h2 class="display-5 mt-2">Name</h2>
				<div class="form-group">
					<form class="form-inline justify-content-center">
						<input type="text" class="form-control" placeholder="Enter Name" id="idNm">
					</form>
				</div>
				<h2 class="display-5 mt-3">Email</h2>
				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
					placeholder="address@example.com">
				<small id="emailHelp" class="form-text text-muted">please Enter your Email</small>
				<h2 class="display-5 mt-3">Phone</h2>
				<input type="text" class="form-control" placeholder="000-000-0000" id="idPhone">
				<h2 class="display-5 mt-3">Message</h2>
				<div class="form-group mt-1">
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>
</body>
