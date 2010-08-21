A.model.Page {
	
	crdate.field = tx_artlesspages_crdate
	
	authors =< A.element.ul.Authors
	
	categories =< A.element.ul.Categories
	
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