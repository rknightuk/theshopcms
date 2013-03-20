<?php include("../inc/header.php");?>
<?php include("../inc/nav_docs.php");?>

<h1 id="interimreport">WEBSCRP Interim Report - 24.01.2013 - 622197</h1>

<h2>Technical report</h2>

<p>Since the initial report, the layout of the site has been modified slightly to accomodate for larger amounts of data being input into the database. The navigation has been moved to the left hand side, the general links are located in the top right and the search bar (which was overlooked initially) is top and center.</p>

<img src="../img/reports/intTwoHeader.png" alt="Header area as of 24/01/13" />


<p>The CMS section of the project is partially complete, with only the “<em>add product</em>” feature currently working. The search functionality is fully complete. It searches the name, description and category of products and displays the results. If no results are return, an error message is displayed.</p>

<img src="../img/reports/intTwoAdd.png" alt="Add a new product form" />


<img src="../img/reports/intTwoSearch.png" alt="Search results for “books”" />



<p>In terms of research and experiments towards the end product, the primary source was from the praticals and examples provided in WEBSCRP tutorials. These were invaluable in learning the core functions of PHP, Ajax and Javascript. I also followed examples and tutorials from a number of books as well as those offers on <a href="http://net.tutsplus.com/">Net Tuts +</a>. By working through these exercises, the features of the project such as search, were much easier to complete and also include cleaner and more efficient code than if the exercises had not been completed.</p>

<br/>

<h2>Management report</h2>

<p><strong>Progress</strong></p>

<p>Using the lifecycle chosen has worked particularly well for this project. By creating a prototype of the product at each stage, tracking progress is easy a working version of the product can be backed up before moving on to the next step. For the “approval” part of the lifecycle, friends were used to confirm a feature was working as it should. There are some problems with the lifecycle model though, such as </p>

<p>The project has been delayed by approximately 3 weeks as Christmas was not accounted for correctly on the original Gantt chart. However, because the original plan made allowances for delays, the project is still on schedule. Other delays to the projects were mainly due to having to learn unfamiliar languages (e.g. PHP) and the functions associated with them. However, the as the project progresses, creating many of the features is becoming easier due to the knowledge gained.</p>

<p>Although delayed, the project has progress well and many tasks laid out in the first Gantt chart have been completed. Some key features that have been complted include:</p>

<ul>
<li>Main layout of site</li>
<li>Creation of sample data</li>
<li>Connesting to the database and and displaying all products</li>
<li>Search functionality</li>
<li>Content management area</li>
<li>Add products functionality</li>
</ul>

<p><strong>Skills and lessons learnt</strong></p>

<p>During the build of this project, skills and knowledge in a number of areas have been improved including PHP, MySQL and local development. Some key lessons learnt include:</p>

<ul>
<li>PHP goes deeper than the standard root directory as outlined in <a href="http://css-tricks.com/php-include-from-root/">this article</a></li>
<li>The order that statements in an SQL query are arranged can make a huge difference to the returned results</li>
<li>Many features of PHP have been deprecated and replaced by new, more efficient functions (such as <em>mysql_num_rows</em>)</li>
</ul>

<p>Most issues and lessons learnt have been by using a wide variety of resources including books (both purchased and borrowed from the library), Stack Overflow and other online forums as well as discussing issues with professional developers.</p>

<?php include("../inc/footer.php");?>