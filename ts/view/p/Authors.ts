A.view.p.Authors = HMENU
A.view.p.Authors {
	
	special = keywords
	special {
		keywordsField = uid
		keywordsField.sourceField = tx_artlesspages_authors
		mode = title
	}
	
	1 = HMENU
	1 {
		
		wrap = <p class="A_authors">|</p>
		
		NO = 1
		NO {
			noTrimWrap = <span>|</span>
		}
		
	}
	
}