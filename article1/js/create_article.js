$(document).ready(function() {
   
	
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
