A.model.div.Project < A.model.div.Page
A.model.div.Project {
	
	200 {
		
		file {
			width = 400c
			height = 400c
		}
		
	}
	
	300 >
	
	400 >
	400 =< A.view.p.Authors
	#400 {
	#	value = <i>by</i> <a href="#">Robert Klein</a>, <a href="#">Dirk Reinbold</a>, <a href="#">Axel Rupp</a>, <a href="#">Jon Steinfeld</a>
	#	wrap = <p class="A_authors">|</p>
	#}
	
	600 = TEXT
	600 {
		value = <i>Category</i> <a href="#">Illustration</a>, <a href="#">Design</a>, <a href="#">Architecture</a>
		wrap = <p class="A_categories hide">|</p>
	}
}