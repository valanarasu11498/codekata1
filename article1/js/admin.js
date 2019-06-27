$(document).ready(function() {
    getArticleLists();
});


function buildArticleList(response){
		$('#table-lists').html('');
	response.forEach(function(article){
		var htlmStr = '<div class="col-md-4">'+
					'<div class="col-md-12 article-widget" onclick="getSingleArticle('+article.id+')">'+
						'<div class="col-md-4">'+
							'<img class="image" src="image/'+article.image+'">'+
						'</div>'+
						'<div class="col-md-8">'+
							'<div class="title">'+
								'<h3>'+article.title+'</h3>'+
								'<span class=""author>'+"Author:"+article.author+"\n"+'</span>'+
								'<span class=""status>'+"  Status:"+article.status+'</span>'+
							'</div>'+
						'</div>'+
					'</div>'+
				'</div>';
		$('#table-lists').append(htlmStr);
	});
	
}

function getSingleArticle(id){
	console.log('article',id);
	window.location.href = 'admin-view.html?id='+id;
	
}


function getArticleLists(){
	
	var postData = {
		serviceType : 'getArticle'
	}
	$.ajax({
        url: "article.php",
        type: "post",
        data: postData,
		dataType: 'json',
        cache: false,
        success: function(response) {
          if(response) {
            console.log('response',response);
			buildArticleList(response);
          } else {
           
          }
        }
      });
}



