<!--Add Books-->



<div id="addBooks" class="modal fade " tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content col-md-8">
			<div class="modal-body">
				<h5 class="text-center">Add Books to Archive </h5>
				<form action='manageBooks' method='POST' role='form' enctype="multipart/form-data">
					<div class="form-group">
						<label>Enter Book Name: </label>
						<input type="text" name="book_name" placeholder="Enter Book name" required class="form-control">
						<input type="hidden" name="book_id" value="<?php echo book_code(); ?>" class="form-control">
					</div>
					<div class="form-group">
						<label>Book Author: </label>
						<input type="name" name="author" required placeholder="Enter Book Author" class="form-control">
					</div>
					<div class="form-group">
						<label>Insert Book Cover: </label>
						<input type="file" name="image" required placeholder="Enter Book Author" class="form-control">
					</div>
					<div class="form-group">
						<label>Insert Book: </label>
						<input type="file" name="file" required placeholder="Enter Book Author" class="form-control">
					</div>
					<div class="form-group">
						<label>Book Description: </label>
						<textarea name="desc" required placeholder="Write a Brief Discription about the book" id="editor1" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<label>About the Author: </label>
						<textarea name="about" id="editor1" required placeholder="Write About the Author" class="form-control"></textarea>
					</div>
					
					<div class="form-group">
						<label>Price: </label>
						<input type="number" name="price" required placeholder="Enter Price" class="form-control">
					</div>
					<div class="form-group">
						<input type="submit" name="addBook"	class="form-control input-xs btn btn-primary input-xs input-sm" value="Add Book">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!--end of Books-->

<!-- Add Post  -->
<div id="addPost" class="modal fade " tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content col-md-8">
			<div class="modal-body">
				<h5 class="text-center">Add Post to Blog </h5>
				
				<form action='managePosts' method='POST' role='form' enctype="multipart/form-data">
					<div class="form-group">
						<label>Enter Post Title: </label>
						<input type="text" name="post_title" placeholder="Enter Post Title" required class="form-control">
						<input type="hidden" name="post_id" value="<?php echo post_id(); ?>" class="form-control">
					</div>

					<div class="form-group">
						<label>Insert Post Image: </label>
						<input type="file" name="image" class="form-control">
					</div>
					<div class="form-group col-md-6"><label>Option A</label><input name="image" type="file" id="upload" class="hidden" onchange="">
						<textarea class="col-md-7" required="" name="opt1"><?php  echo @htmlspecialchars_decode($question['opt1']);  ?></textarea>
					</div>

					<div class="form-group">
						<label>Post Contents: </label>
						<textarea name="cont" required placeholder="Write the post content here" class="form-control"><pre><pre></textarea>
							
						</div>
						<div class="form-group">
							<input type="submit" name="addPost"	class="form-control input-xs btn btn-primary input-xs input-sm" value="Add Book">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!--end of Books-->




	<!-- Add Category  -->
	<div id="addCat" class="modal fade " tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content col-md-8">
				<div class="modal-body">
					<h5 class="text-center">Add Category to Blog </h5>
					<form action='manageCat' method='POST' role='form' enctype="multipart/form-data">
						<div class="form-group">
							<label>Category Name: </label>
							<input type="text" name="title" placeholder="Enter Category name" required class="form-control">
							<input type="hidden" name="cat_id" value="<?php echo cat_code(); ?>" class="form-control">
						</div>
						<div class="form-group">
							<input type="submit" name="addCat"	class="form-control input-xs btn btn-primary input-xs input-sm" value="Add Category">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!--end of category-->

	<!-- Add Category  -->
	<div id="addJournal" class="modal fade " tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<h5 class="text-center">Add Journal</h5>
					<form action='manageJournals' method='POST' role='form' enctype="multipart/form-data">
						<div class="row">
							<div class="form-group col-xl-12 col-lg-12 col-md-6">
								<label>Enter Journal Title: </label>
								<input type="text" name="jo_name" placeholder="Enter Journal Title" required class="form-control">
								<input type="hidden" name="jo_id"  value="<?php echo book_code(); ?>" class="form-control">
							</div>

							<div class="col-xl-6 col-lg-6 col-md-6">
								<label>Select Journal Volume: </label>
								<select name="jo_vol"  class="form-control">
									<option value="">Select Journal Volume</option><?php foreach(QueryDB("SELECT * FROM volume ") as $rows){extract($rows); ?>
										<option value="<?php echo $vol_code; ?>"><?php echo $vol_name ?></option>
									<?php  } ?>
								</select>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6">
								<label>Select Journal Number: </label>
								<select name="jo_num" class="form-control">
									<option value="">Select Journal Number</option><?php foreach(QueryDB("SELECT * FROM vol_num ") as $rows){extract($rows); ?>
										<option value="<?php echo $num; ?>"><?php echo $num ?></option>
									<?php  } ?>
								</select>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6">
								<label> Publish Date: </label>
								<input type="month" name="jo_pub" required  class="form-control">
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6">
								<label>Insert Journal Cover: </label>
								<input type="file" name="image" required placeholder="Enter Journal Author" class="form-control">
							</div>

						</div>
						<div class="col-xl-6 col-lg-6 col-md-6">
							<input type="submit" name="addJournal" class="form-control input-xs btn btn-primary input-xs input-sm" value="Add Journal">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!--end of category-->



	<!-- Add Category  -->
	<div id="addCat" class="modal fade " tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content col-md-8">
				<div class="modal-body">
					<h5 class="text-center">Add Events Category to Blog </h5>
					<form action='manageCat' method='POST' role='form' enctype="multipart/form-data">
						<div class="form-group">
							<label>Category Name: </label>
							<input type="text" name="title" placeholder="Enter Category name" required class="form-control">
							<input type="hidden" name="cat_id" value="<?php echo cat_code(); ?>" class="form-control">
						</div>
						<div class="form-group">
							<input type="submit" name="addCat"	class="form-control input-xs btn btn-primary input-xs input-sm" value="Add Category">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!--end of category-->

	<!-- Add Category  -->
	<div id="addSubCat" class="modal fade " tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content col-md-8">
				<div class="modal-body">
					<h5 class="text-center">Add Publication Submission Category </h5>
					<form action='index' method='POST' role='form' >
						<div class="form-group">
							<label>Publication Name: </label>
							<input type="text" name="title" placeholder="Enter Category name" required class="form-control">
							<input type="hidden" name="cat_id" value="<?php echo d_code(); ?>" class="form-control">
						</div>
						<div class="form-group">
							<input type="submit" name="addSubCat"	class="form-control input-xs btn btn-primary input-xs input-sm" value="Add Category">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!--end of category-->

	<!-- Add Category  -->
	<div id="addPay" class="modal fade " tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content col-md-8">
				<div class="modal-body">
					<h5 class="text-center">Add Payment Type </h5>
					<form action='index' method='POST' role='form' >
						<div class="form-group">
							<label>Payment Name: </label>
							<input type="text" name="pay_name" placeholder="Enter Payment name" required class="form-control">
							<input type="hidden" name="pay_code" value="<?php echo d_code(); ?>" class="form-control">
						</div>
						<div class="form-group">
							<label>Payment Amount: </label>
							<input type="number" name="pay_amt" required class="form-control">
							
						</div>
						<div class="form-group">
							<input type="submit" name="addPay"	class="form-control input-xs btn btn-primary input-xs input-sm" value="Add Payment">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!--end of category-->

	<!-- Add Category  -->
	<div id="setCall" class="modal fade " tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content col-md-8">
				<div class="modal-body">
					<h5 class="text-center">Set Call for Paper </h5>
					<form action='index' method='POST' role='form' >
						
						<div class="form-group">
							<label>Paper Volume: </label>
							<select name="call_vol" class="form-control">
								<option value="">Select Paper Volume</option><?php foreach(QueryDB("SELECT * FROM volume ") as $rows){extract($rows); ?>
									<option value="<?php echo $vol_code; ?>"><?php echo $vol_name; ?></option>
								<?php  } ?>
							</select>
						</div>
						<div class="form-group">
							<label>Paper Volume Number: </label>
							<select name="call_num" class="form-control">
								<option value="">Select Paper Volume Number</option><?php foreach(QueryDB("SELECT * FROM vol_num ") as $rows){extract($rows); ?>
									<option value="<?php echo $num; ?>"><?php echo $num ?></option>
								<?php  } ?>
							</select>
						</div>

						<div class="form-group">
							<input type="submit" name="setCall"	class="form-control input-xs btn btn-primary input-xs input-sm" value="Set Call">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!--end of category-->