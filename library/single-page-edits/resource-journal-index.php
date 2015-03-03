<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Wayne State University, WSU, Library System, Libraries" />
	<meta name="description" content="The online resources and services of the Wayne State University Libraries" />
	<meta name="author" content="libwebmaster@wayne.edu" />
	<meta name="Copyright" content="Copyright (c) <?php echo(date('Y')); ?> Wayne State University" />

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="icon" href="/inc/img/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="/ico/style.css">
  <link href="//library.wayne.edu/inc/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/pattern-lib/css/style.css">
  <link rel="stylesheet" href="/pattern-lib/css/bootstrap-select.min.css">

	<title>Wayne State University Libraries : Online Journals</title>

	<script src="/pattern-lib/js/jquery.min.js"></script>
    <script src="/pattern-lib/js/bootstrap.min.js"></script>
    <script src="/pattern-lib/js/main.js"></script>
</head>
<body>
	<div class="page" id="wrap">
		<?php include($_SERVER['DOCUMENT_ROOT'].'inc/header.php'); ?>
		<div id="main" class="container">
			<article>
				<aside class="sidebar">
					<?php include($_SERVER['DOCUMENT_ROOT'].'inc/sidebar-resources.php'); ?>	
				</aside>
				<section class="main">	
		              <h2>Online Journals</h2>
		              <hr/>
		              <h3>Search By Keyword</h3>
		                <form method="get" action="http://up7af9tu5s.search.serialssolutions.com/" name="SS_EJPSearchForm" id="SS_EJPSearchForm">
			                <div class="row search_part_wrap">
			              <div class="col-sm-12 search_part">
			               <span class="check_type"> <input type="checkbox" name="SS_searchTypeAll" value="Yes">All</span>
						   <span class="check_type"> <input type="checkbox" name="SS_searchTypeBook" value="Yes">Books</span>
						   <span class="check_type"> <input type="checkbox" name="SS_searchTypeJournal" checked value="Yes">Journals</span>
						   <span class="check_type"> <input type="checkbox" name="SS_searchTypeOther" value="Yes">Other</span>		
			              </div>
				              
					              <div class="col-sm-12 col-md-4 search_part">
					                  <select name="S" class="selectpicker" style="height:45px;">
					                    <option value="AC_T_B">Title begins with</option>
					                      <option value="AC_T_M">Title equals</option>
					                      <option value="T_W_A">Title contains all words</option>
					                      <option value="I_M">ISSN/ISBN equals</option>
					                  </select>
					              </div>
				                  
				                                  	
				                  <input name="V" type="hidden" value="1.0" />
				                  <input value="100" name="N" type="hidden" />
				                  <input type="hidden" name="L" value="UP7AF9TU5S" />
				                  
				                  
				                  
				                  <div class="col-sm-12 col-md-6 search_part">
				                  		<input id="SS_CFocusTag" name="C" size="45" class="search_input" placeholder="Enter Keywords"/>
				                  </div>
				                  <div class="col-sm-12 col-md-2 search_part">
				                  		<input class="btn search_button" value="Search" type="Submit" />
				                  </div>
				                  
				                  <input name="hd" type="hidden" id="hd" value="asdf" />
				                  
				                  <div class="col-sm-12 search_part search_help">
		            <a href="http://library.wayne.edu/resources/journals/help/">Help Searching?</a><br/>
		            </div>
				              </div>
		            </form>
		            
		              <br />
		              <hr/>
		              <h3>Search By Category</h3>
		              <form method="get" action="http://up7af9tu5s.search.serialssolutions.com/">
		                    <input value="1.0" name="V" type="hidden" />
		                    <input value="UP7AF9TU5S" name="L" type="hidden" />
		                    <input value="SC" name="S" type="hidden" />
		                    <div class="col-sm-12 col-md-10 search_part">
		                    <select name="C" class="selectpicker">
		                        <option value="">-- Please select a subject category --</option>
		                        <option value="01">Art, Architecture &amp; Applied Arts</option>
		                        <option value="BU">Business &amp; Economics</option>
		                        <option value="11">Earth &amp; Environmental Sciences</option>
		                        <option value="TE">Engineering &amp; Applied Sciences</option>
		                        <option value="GI">General</option>
		                        <option value="HE">Health &amp; Biological Sciences</option>
		                        <option value="06">History &amp; Archaeology</option>
		                        <option value="07">Journalism &amp; Communications</option>
		                        <option value="08">Languages &amp; Literatures</option>
		                        <option value="GO">Law, Politics &amp; Government</option>
		                        <option value="10">Music, Dance, Drama &amp; Film</option>
		                        <option value="RE">Philosophy &amp; Religion</option>
		                        <option value="LS">Physical Sciences &amp; Mathematics</option>
		                        <option value="SO">Social Sciences</option>
		                    </select>
		                    </div>
		                    <div class="col-sm-12 col-md-2 search_part">
		                    <input class="btn search_button" value="Search" type="submit" />
		                    </div>
		                </form>

		              <br /><br /><br /><br /> <br /><hr/>
		              
					<h3 id="cltitle">Article Citation Search</h3>
		            <span id="cllink">(<a href="http://up7af9tu5s.search.serialssolutions.com/?SS_Page=refiner">More Search Options</a>)</span>
		            <form method="get" action="http://up7af9tu5s.search.serialssolutions.com/criteriarefiner/" name="refiner" id="refiner">
		              <input value="Z39.88-2004" name="url_ver" type="hidden" />
		              <input value="info:sid/sersol:RefinerQuery" name="rfr_id" type="hidden" />
		              <input value="" name="SS_styleselector" type="hidden" />
		              <input value="info:ofi/fmt:kev:mtx:journal" name="rft_val_fmt" type="hidden" />
		              <input value="JournalFormat" name="SS_ReferentFormat" type="hidden" />
		              <input value="" name="rft.isbn" type="hidden" />
		              <input value="" name="rft.pub" type="hidden" />
		              <input value="" name="rft.pubdate" type="hidden" />
		              <input value="" name="rft.place" type="hidden" />
		              <input value="" name="rft.inst" type="hidden" />
		              <input value="" name="rft.advisor" type="hidden" />
		              <input value="" name="rft.number" type="hidden" />
		              <input value="" name="rft.inventor" type="hidden" />
		              <input value="" name="rft.invfirst" type="hidden" />
		              <input value="" name="rft.invlast" type="hidden" />
		              <input type="hidden" value="JournalFormat" id="SS_ReferentFormat[0]" name="SS_ReferentFormat[0]" />
					  
		              <fieldset>
		              <p>Have an Article Citation? Enter it here and hit 'Look Up' to view full text options.</p>
		              <div>
		              <label for"rft.genre">Genre:</label>
		                <select id="rft.genre" name="rft.genre" >
		                  <option value="article">Article</option>
		                  <option value="conference">Conference</option>
		                  <option value="issue">Issue</option>
		                  <option value="preprint">Preprint</option>
		                  <option value="proceeding">Proceeding</option>
		                  <option value="unknown">Unknown</option>
		                </select>
		               </div>
		              <div style="clear:left;">
		               <label for="rft.atitle">Article Title:</label>
		               <input size="55" id="rft.atitle" name="rft.atitle" value="" type="text" />
		               </div>
		              <div>
		               <label for="rft.title">Journal Title:</label>
		               <input size="40" id="rft.title" name="rft.title" value="" type="text" />
		               </div>
		              <div>
		               <label for="">Author (Last):</label>
		               <input size="15" id="rft.aulast" name="rft.aulast" value="" type="text" />                  
		               </div>
		              <div>
		               <label for="">Author (first):</label>
		               <input size="15" id="rft.aufirst" name="rft.aufirst" value="" type="text" />
		               </div>
		               <div>or enter the:</div>
		              <div>
		               <label for="doi">DOI:</label>
		               <input type="text" id="doi" name="SS_doi" value="" />
		               </div>
		              <div>
		               <label for="pmid">PMID:</label>
		               <input type="text" id="pmid" name="pmid" ssmaxlength="8" value="" />
		               </div>
		               <div>Still having trouble locating your article? Add any additional information you may have:</div>
		              <div>
		               <label for="rft.volume">Volume:</label>
		               <input size="5" id="rft.volume" name="rft.volume" value="" type="text" />
		               </div>
		              <div>
		               <label for"rft.issue">Issue:</label>
		               <input size="5" id="rft.issue" name="rft.issue" value="" type="text" />
		               </div>
		               <div>
		               <label for="rft.spage">Start Page:</label>
		               <input size="5" id="rft.spage" name="rft.spage" value="" type="text" />
		               </div>
		               <div>
		               <label for="rft.date">Date (YYYY-MM-DD):</label>
		               <input id="rft.date" name="rft.date" value="" type="text" size="10" />
		               </div>
		               <div>
		               <label for"rft.issn">ISSN:</label>
		               <input size="13" maxlength="13" id="rft.issn" name="rft.issn" value="" type="text" />
		               </div>
		               <div><strong>Author Name:</strong></div>
		               <div>
		               <label for="rft.au">&nbsp;&nbsp;Full:</label>
		               <input size="15" id="rft.au" name="rft.au" value="" type="text" />
		  			   </div>
		               <div>
		               <label for="rft.aucorp">&nbsp;&nbsp;Corp:</label>
		               <input size="15" id="rft.aucorp" name="rft.aucorp" value="" type="text" />
		               </div>
		               <div>
		                <input value="UP7AF9TU5S" id="SS_LibHash" name="SS_LibHash" type="hidden" />
		                <input value="sersol:RefinerQuery" id="sid" name="sid" type="hidden" />
		                <input id="CitationSubmit" name="CitationSubmit" value="Look Up" type="submit" class="btn" />
		              <!--  <input onclick="javascript:clearForm('refiner','text,hidden');" id="CitationClear" name="CitationClear" value="Clear" type="button" class="SSCitationFormClear" />  -->
		               </div>
		               </fieldset> 
		            </form>
				</section>
			</article>
		</div>
	</div>
	<?php include($_SERVER['DOCUMENT_ROOT'].'inc/footer.php'); ?>
	    <script src="/pattern-lib/js/bootstrap-select.min.js"></script>
	    <script>
		    $('.selectpicker').selectpicker();
		 </script>
</body>
</html>