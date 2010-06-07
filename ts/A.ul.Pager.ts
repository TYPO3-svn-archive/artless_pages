A.ul.Pager = COA
A.ul.Pager {
	
	wrap = <div class="A_pager">|</div>
	
	100 = CONTENT
	100 {
		
		table = pages
		select {
			selectFields = CEIL(COUNT(*) / {$A.itemsPerPage}) as counter
			pidInList = {$A.itemsStoragePids}
		}
		
		renderObj < plugin.tx_pagebrowse_pi1
		renderObj {
			numberOfPages.field = counter
		}
		
	}
	
}