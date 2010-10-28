A.model.Page {
	
	authors =< A.element.span.RelatedPages
	authors {
		stdWrap.outerWrap = <p class="A_authors">|</p>
		special.value.field = tx_artlesspages_authors
		stdWrap.fieldRequired = tx_artlesspages_authors
		stdWrap.prepend = TEXT
		stdWrap.prepend {
			data = LLL:EXT:artless_pages/locallang_db.xml:pages.tx_artlesspages_authors
			wrap = <span class="A_prefix">|</span>
		}
	}
	
	categories =< A.element.span.RelatedPages
	categories {
		wrap = <p class="A_categories">|</p>
		special.value.field = tx_artlesspages_categories
		stdWrap.fieldRequired = tx_artlesspages_categories
	}
	
	links =< A.element.span.RelatedPages
	links {
		wrap = <p class="A_links">|</p>
		special.value.field = tx_artlesspages_links
		stdWrap.fieldRequired = tx_artlesspages_links
	}
	
	authors =< A.element.ul.RelatedPages
	authors {
		special.value.field = tx_artlesspages_authors
		stdWrap.fieldRequired = tx_artlesspages_authors
	}
	
	categories =< A.element.ul.RelatedPages
	categories {
		special.value.field = tx_artlesspages_categories
		stdWrap.fieldRequired = tx_artlesspages_categories
	}
	
	links =< A.element.ul.RelatedPages
	links {
		special.value.field = tx_artlesspages_links
		stdWrap.fieldRequired = tx_artlesspages_links
	}
	
	datePeriod = COA
	datePeriod {
		wrap = <p class="A_dateperiod">|</p>
		100 =< A.element.span.Date
		100 {
			field = tx_artlesspages_startdate
		}
		200 =< A.element.span.Date
		200 {
			field = tx_artlesspages_enddate
			noTrimWrap = | – ||
			# hide this for "one day periods"
		}
	}
	
}