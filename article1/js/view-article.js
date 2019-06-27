$(document).ready(function() {	
	getArticleById();
	
});

function save()
{
	
	var fileInput = document.getElementById('image');
	var fd = new FormData();    
	fd.append( 'title', document.getElementById('title').value );
	fd.append( 'author', document.getElementById('author').value	);
	fd.append( 'category', document.getElementById('category').value );
	fd.append( 'tag', document.getElementById('tag').value );
	fd.append( 'content', document.getElementById('content').value );
	fd.append( 'status','Draft' );
	fd.append( 'serviceType','creatArticle' );
	fd.append( 'image', fileInput.files[0] );
	
	$.ajax({
        url: "article.php",
        type: "post",
        data: fd,
		dataType: 'json',
		processData: false,
		contentType: false,
        cache: false,
        success: function(reponse) {
          if(reponse) {
            console.log('reponse',reponse);
          } else {
           
          }
        }
      });
}

function buildSingleArticle(response){
	if(response.article){
		$('#title').text(response.article.title);
		$('#cat-val').text(response.article.category);
		$('#tag-val').text(response.article.tag);
		$('#author-val').text(response.article.author);
		$('#content').val(response.article.content);
	}
	$('#image-container').html('');
	$('#comments').html('');
	if(response.images && response.images.length){
		response.images.forEach(function(obj){
			var imgStr = '<div class="col-md-4 img-box">'+
							'<img src="image/'+obj.image+'" />'+
						'</div>';
			$('#image-container').append(imgStr);
		})
	}
	if(response.comments && response.comments.length){
		response.comments.forEach(function(obj){
			var commentStr = '<div class="col-md-12 comment-box">'+
						'<div class="col-md-12 user-date">'+
							'<div class="col-md-6 text-left">'+obj.user+'</div>'+
							'<div class="col-md-6 text-right">'+obj.date+'</div>'+
						'</div>'+
						'<div class="col-md-12 comments">'+
							'<p>'+obj.coments+'</p>'+			
						'</div>'+
					'</div>';
			$('#comments').append(commentStr);
		})
	}
	
}

function getArticleById(){
	var id = window.location.href.split("id=")[1];
	if(id){
		var singlePost = {
			serviceType : 'singleRecord',
			id : id
		}
		$.ajax({
			url: "article.php",
			type: "post",
			data: singlePost,
			dataType: 'json',
			cache: false,
			success: function(response) {
			  if(response) {
				buildSingleArticle(response);
			  } else {
			   
			  }
			}
		  });
	}
}

function saveContent(){
	var id = window.location.href.split("id=")[1];
	var savePost = {
		content : $('#content').val(),
		id : id,
		serviceType : 'updateContent'
	}
	$.ajax({
			url: "article.php",
			type: "post",
			data: savePost,
			cache: false,
			success: function(response) {
			  if(response) {
					getArticleById();
			  } else {
			   
			  }
			}
		  });
}
function addComment(){
	var id = window.location.href.split("id=")[1];
	var commentPost = {
		coment : $('#add-comment').val(),
		id : id,
		serviceType : 'addComment',
		user : 'valan',
	};
	$.ajax({
			url: "article.php",
			type: "post",
			data: commentPost,
			cache: false,
			success: function(response) {
			  if(response) {
					getArticleById();
					$('#add-comment').val("");
			  } else {
			   
			  }
			}
		  });
}
function addImage(){
	var id = window.location.href.split("id=")[1];
	var fileInput = document.getElementById('newfile');
	var fd = new FormData();    
	fd.append( 'id',id);
	fd.append( 'serviceType','addImage' );
	fd.append( 'image', fileInput.files[0] );
	$.ajax({
			url: "article.php",
			type: "post",
			data: fd,
			processData: false,
		    contentType: false,
		 	cache: false,
			success: function(response) {
			  if(response) {
					getArticleById();
					$('#newfile').val("");
			  } else {
			   
			  }
			}
		  });
}
