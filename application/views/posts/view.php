<h2><?php echo $post['title']; ?> </h2>
	<small class="post-date">Posted on : <?php echo $post['created_at']; ?> </small><br><br>
	<img class="img-thumbnail" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>">	
		<div class="post-body">
			<?php echo $post['body']; ?> 
		</div>
		<hr>
	<?php echo form_open('/posts/delete/'.$post['id']); ?>
		<input type="submit" value="Delete" class="btn btn-danger"></input>
		<a class="btn btn-primary pull-left" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>">Edit</a>
	</form> 	

