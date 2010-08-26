A.element.span.RelatedPages = HMENU
A.element.span.RelatedPages {
	
	special = list
	special.value.field = tx_artlesspages_categories
	
	1 = TMENU
	1 {
		
		wrap = <span class="A_relatedpages">|</span>
		
		NO = 1
		NO {
			allWrap = <span>|</span>{LLL:EXT:artless_pages/locallang.xml:A.element.span.RelatedPages.comma}|*|<span>|</span>{LLL:EXT:artless_pages/locallang.xml:A.element.span.RelatedPages.comma}|*|<span>|</span>{LLL:EXT:artless_pages/locallang.xml:A.element.span.RelatedPages.and}||<span>|</span>
			allWrap.insertData = 1
		}
		
	}
	
}