A.view.p.Authors = HMENU
A.view.p.Authors {
	
	special = keywords
	special {
		keywordsField = tx_artlesspages_authors
		keywordsField.sourceField = uid
		mode = title
	}
	
	1 = HMENU
	1 {
		
		wrap = <p class="A_authors">|</p>
		
		NO = 1
		NO {
			allWrap = <span>|</span>
		}
		
	}
	
}