A.view.div.PageListRelated =< A.view.div.PageList
A.view.div.PageListRelated {
	
	wrap = <div class="A_pagelistrelated A_pagelist">RELATED|</div>
	
	special = keywords
	special {
		value = uid
		keywordsField = tx_artlesspages_authors
		keywordsField.sourceField = uid
	}
	
	# maxItems = {$A.maxItems.pageListRelated}
	
	1 {
		
		NO.before.cObject =< A.view.div.PageListRelatedItem
		
	}
	
}