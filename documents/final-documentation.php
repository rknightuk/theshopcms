<?php include("../inc/header_cms.php");?>
<?php include("../inc/nav_docs.php");?>


<h1 id="shoppr:installationandusermanual">Shoppr : Installation and User Manual</h1>

<p><em>You are to specify and construct HTML and PHP web-pages that support an easily-updated and customized &#8220;online shopping&#8221; capability for selling whatever kind of physical product your client wishes.</em> User accounts have been deliberately omitted; sales of digital goods and services are also omitted. Tested browsers: Chrome 26.0.1410.65, Safari 6.0.2 and Firefox 20.0.1. Built with: Apache 2.2.23, PHP 5.4.10, MySQL 5.5.29. No other versions have been tested.</p>

<h2 id="installation">Installation</h2>

<h3 id="prerequisites">Prerequisites</h3>

<p>MySQL username and password must be set to <code>root</code> and blank, respectively. If your MySQL username and password are different, please edit line 3 and 14 of <code>db/check_db.php</code> and line 3 of <code>db/connect_db.php</code>.</p>

<h3 id="installationinstructions">Installation instructions</h3>

<ol>
<li>Copy <code>theshopcms</code> in its entirety to <code>htdocs</code> on your server or within your Apache/XAMPP/MAMP installation.</li>
<li>Visit the URL of the folder in your browser. (e.g. yourserver/theshopcms)</li>
<li>The database and required tables with be automatically created; sample data for products and orders will be inserted into the tables.</li>
</ol>

<p><em>NB: All references to <code>yourshop</code> herein refers to the specific domain or directory in which the product is installed.</em></p>

<h2 id="contentmanagement">Content management</h2>

<figure>
<img src="../img/reports/manual_cmslanding.png" alt="Content Management Page (yourshop/cms)" />
<figcaption>Content Management Page (<code>yourshop/cms</code>)</figcaption></figure>



<h3 id="addingeditinganddeletingaproduct">Adding, editing and deleting a product</h3>

<p>To add a new product go to <code>yourshop/cms/add_product.php</code> or select &#8216;add new product&#8217; from the CMS page. You will be presented with an image upload form. Choose the image you wish to use for the new product. Complete the form that is then show with the details of the new product and select &#8216;submit&#8217;. If the product was added successfully a message will confirm this.</p>

<p>To edit or delete a product go to <code>yourshop/cms/edit.php</code> or select &#8216;edit products&#8217; from the CMS page. To edit a product select &#8216;edit&#8217; next to the specific product you wish to update. Modify the information in the form show, select &#8216;submit&#8217; and a message will confirm the update.</p>

<p>To delete a product, select &#8216;delete&#8217; next to the specific product you wish to delete. A message will confirm the deletion.</p>

<h3 id="updatingproductstocklevels">Updating product stock levels</h3>

<p><em>NB: The update stock page requires you enter only the amount of <strong>new</strong> stock that has been delivered and not the total amount of stock.</em></p>

<p>To update the stock level of a product go to <code>yourshop/cms/update_stock.php</code> or select &#8216;update stock&#8217; from the CMS page. Choose the product you wish to update from the dropdown menu, type in the amount of stock that has been delivered and select &#8216;update&#8217;. A message will confirm the update. </p>

<h2 id="administration">Administration</h2>

<figure>
<img src="../img/reports/manual_adminlanding.png" alt="Administration Page (yourshop/admin)" />
<figcaption>Administration Page (<code>yourshop/admin</code>)</figcaption></figure>



<p>On the admin home page the first chart shows the current month’s sales per order. By selecting another month from the dropdown menu, the chart will adjust to show the selected month’s orders and sales. The second chart on the page shows the average delivery time based on all delivered orders and compares them to the industry average.</p>

<h3 id="managingorders">Managing orders</h3>

<p><em>NB: Open orders refers to any order which has been placed but not delivered. Archived orders refers to those that have been delivered.</em></p>

<p>To view open orders go to <code>yourshop/admin/open_orders.php</code> or select &#8216;Open orders&#8217; from the Admin page. If the order has been delivered, select &#8216;Mark as delivered&#8217; and the order will be archived. To view archived orders go to <code>yourshop/admin/archived_orders.php</code> or select &#8216;Archived orders&#8217; from Admin page. For both open and archived orders, customer and order details can be viewed by selecting &#8216;order details&#8217; next to the appropriate order.</p>

<h3 id="sitesettings">Site settings</h3>

<p>Site settings can be found at <code>yourshop/admin/settings_site.php</code> or by selecting &#8216;site settings&#8217; from the Admin page. Here you can the following elements: </p>

<ul>
<li><strong>Site title</strong> <code>default: Shoppr</code> This is the main title of your shop. It is displayed in the top left of all pages as well as applied to the <code>&lt;title&gt;</code> attribute.</li>
<li><strong>Search placeholder text</strong> <code>default: Search products</code> This is the text that is displayed as default in the search box on the main shopping pages.</li>
<li><strong>Empty basket message</strong> <code>default: Your basket is empty</code> This is the message that is displayed in the basket area (top right of shop pages) when there are no items in the basket.</li>
<li><strong>Products per page</strong> <code>default: 6</code> This is the number of products shown on each page.</li>
<li><strong>Products per row</strong> <code>default: 3</code> This is the number of products per row. Options are 2, 3 or 4.</li>
</ul>

<h3 id="appearancesettings">Appearance settings</h3>

<p>Appearance settings can be found at <code>yourshop/admin/settings_appearance.php</code> or by selecting &#8216;appearance settings&#8217; from the Admin page. Here the colours for the background, header, text, hyperlinks and product border can be changed. Three themes are also installed and can be used by pressing the corresponding ‘switch’ button.</p>

<h1 id="shoppr:finalspecificationandrationale">Shoppr : Final Specification and Rationale</h1>

<h2 id="shop">Shop</h2>

<p><code>/index.php</code></p>

<p><strong>View all products and browse by category:</strong> Ability to view all products and organise them by category.</p>

<p><strong>Search products:</strong> Ability to search for products (name, description, category) based on search terms, with partial word matching. Suggestions are shown based on product titles in compatible browsers. By implementing this, the customer will be more likely to find the specific products they are looking for.</p>

<figure>
<img src="../img/reports/spec_searchsuggest.png" alt="Search suggestions based on products" />
<figcaption>Search suggestions based on products</figcaption></figure>



<p><strong>Sorting of products:</strong> All multiple product views (all, category, search) can be sorted by name, price and stock level. Sorting of products allows customers to find what they are looking for faster.</p>

<p><strong>Add to basket</strong>: Items can be added to the basket from all product views and stock levels are checked on addition to avoid over-ordering.</p>

<p><strong>Basket summary and basket/checkout page:</strong> The first five items in the basket can be viewed in the basket summary. This is to allow customers to get a quick overview of their basket without having to visit another page. Basket item quantities can be modified and are checked against stock levels to avoid errors. Checkout is integrated with the basket page for ease of use.</p>

<p><strong>Individual product pages and related items:</strong> Each product has its own product page and related items are shown at the bottom of the page. These pages allow the customer to see a full description of the product and related items might suggest a product they had not seen yet, which in turn would increase sales.</p>

<p><strong>Pagination:</strong> Product views with multiple items are split up into separate pages and can be navigated via the arrows (and numbered links) at the top of the page. By implementing this pages will load faster therefore making the experience better for the customer.</p>

<p><strong>Order tracking:</strong> Customers can check if their order has been delivered using their order ID and email address. This reduces the amount of support email customers send, as they can confirm the status of their order instantly.</p>

<p><strong>Out of stock message:</strong> On selection of the &#8216;out of stock&#8217; button, a user can input their email address and be notified when the product is back in stock. This reassures the customer that they will be able to buy the product and also reduces the risk of the customers looking for the product on another shop.</p>

<h2 id="cms">CMS</h2>

<p><code>/cms</code></p>

<p><strong>Add new product:</strong> New products can be added including a product image. </p>

<p><strong>Edit, delete and update stock:</strong> Information about a product can be edited or deleted and new stock can be added to a product. This is implemented to make product management as easy as possible. </p>

<p><strong>Summary of products:</strong> This overview shows the user a simple overview of the products they have and which have low or high stock levels. This is to give the user an easy way to foresee problems with stock levels.</p>

<h2 id="admin">Admin</h2>

<p><code>/admin</code></p>

<p><strong>Popular products, monthly sales and average delivery time chart:</strong> These charts show information on monthly sales (which the user can select) and the average delivery time based on the industry average. These give the user an easy-to-read overview of how the shop is doing.</p>

<p><strong>Order management:</strong> The user can mark orders as delivered and view the details of those orders. This gives an overview of orders that have yet to be delivered.</p>

<p><strong>Low stock products:</strong> This shows any products that have a stock level of less than 50. The user can edit or delete products from this view and it also allows them to see which products need reordering.</p>

<p><strong>Site/appearance settings and themes.:</strong> These are the site-wide settings for the website. The user can modify the title, layout or product views and colours. The user can also choose from a selection of pre-installed themes. These allow the user to customise the site easily with limited assumed knowledge.</p>

<h1 id="shoppr:finalprojectreport">Shoppr : Final Project Report</h1>

<h2 id="lifecycleandscheduling">Lifecycle and scheduling</h2>

<p>As outlined in my initial interim report, I used the three-way methodology which involves creating and continually testing a feature until it is working as required. This work particularly well as many of the features work independently of each other and didn&#8217;t cause issues with other parts of the site when implemented. In combination with this, the entire project was tracked using Git versioning and GitHub. On three occasions, due to erroneous changes I was forced to revert back to a previous commit, which is something I had not had to do on previous projects. By using Git I have learnt a number of new commands for managing Git repositories including <code>$ git reset</code> and, even more so <code>$ git log</code>, which I have learnt how to use to customise the output of the commit log, useful for tracking progress.</p>

<p>Although I tried to plan to the best of my ability, there were many issues that I faced during development and many aspects took much longer than expected. Because of this, the last few weeks of development were much more work intensive than I had initially planned. Features that I hadn&#8217;t planned for, but which I felt were required for the project to be successful, needed to be developed. This happened for a number of reasons. My relatively small knowledge of PHP and Javascript (at the beginning of the project) made it difficult to accurately allocate time to implement features. Also, during the process of building a feature, I found that changes had to be made to core components, such as table fields, to make the feature work in the most effective way.</p>

<h2 id="surprisesandlessonslearnt">Surprises and lessons learnt</h2>

<p>After completion of the pagination feature, the product sort function still worked as designed. However, if used on a page other that page one it would always reset to page one on sorting. I initially thought this was not how it should work and spent approximately three hours trying to get it to remember the current page and products. However, after I couldn&#8217;t get it to work correctly, I looked at other commerce sites (e.g. Amazon) and noticed that they all reset to the first page on sorting. If I had researched how pagination and sorting is implemented on other commerce sites first, I would have saved myself time and been able to work on other features. In the future I will research features more carefully before trying to implement them.</p>

<p>During the development of the monthly sales chart function I tried to implement an Ajax request to get any given month&#8217;s sales data and redraw the chart. After spending a couple of hours trying to get it to work, I began to understand how Javascript is interpreted by the browser. Due to the nature of Javascript, redrawing the chart would require either an iFrame or a full reload of the page, which I did not want to implement as it is not the optimum experience for the user. After some research, I found the jQuery.load() function, which allows the content of another page to be loaded within an element. I now understand how Javascript is interpreted by the browser and will be able to implement much more efficient dynamic content in the future.</p>

<p>As these experiences show, planning is of utmost importance when working on a project of this size. Another issue that I faced was deciding exactly when the project was in a &#8220;finished&#8221; state. Because the scope of the project wasn&#8217;t specific enough about the features, each time I added a feature I thought of another one to compliment or improve it. Towards the last couple of weeks of the project, I forced myself to simply make a note of extra features I thought of, with a view to implement them after the deadline. In future projects, I will be sure to create a much more specific scope at the beginning of a project and to work only within that scope. </p>

<h2 id="futureplans">Future plans</h2>

<p>In the future, I plan to continue development of the system, fixes the issues mentioned above as well as implement more features (see “Feature Roadmap”). The project is of a high enough complexity that each new feature allows me to learn about a new aspect of a language, for example, PHP. When the project is up to a standard I am happy with and feature complete (to the point it could be used in a real-world scenario), I plan to open-source it and collaborate with other developers to improve the system.</p>

<h2 id="featureroadmap">Feature Roadmap</h2>

<p>These are the features I plan to implement before open-sourcing the project.</p>

<ul>
<li>Optimise MySQL queries</li>
<li>Setup process for input of settings (similar to Wordpress)</li>
<li>Installable themes</li>
<li>Customisable layouts</li>
<li>Product sizes/variations for clothing products</li>
<li>Multiple product images</li>
<li>Fallback for users with Javascript disabled</li>
<li>Implement payment system such as Paypal or Stripe</li>
</ul>

<h1 id="shoppr:referencesandresources">Shoppr : References and Resources</h1>

<h2 id="references">References</h2>

<p>Burgess, A. (2011, July 25). Uploading Files with AJAX. <em>Net Tuts+.</em> Retrieved from <a href="http://net.tutsplus.com/tutorials/javascript-ajax/uploading-files-with-ajax/">http://net.tutsplus.com/tutorials/javascript-ajax/uploading-files-with-ajax/</a></p>

<p><em>JSColor - JavaScript / HTML Color Picker, Selector, Chooser</em>. (2008). <a href="http://jscolor.com/">http://jscolor.com/</a></p>

<p>McGrath, M. (2012). <em>PHP and MySQL In Easy Steps.</em> (4th ed.). London: In Easy Steps.</p>

<h2 id="resources">Resources</h2>

<p>Kitamura, E. (2013). Datalist Experiment. <em>Eiji Kitamura Demos.</em> Retrieved from <a href="http://demo.agektmr.com/datalist/">http://demo.agektmr.com/datalist/</a></p>

<p>Simone, T. D. (2012, March 2). HTML5 input type=number and decimals/floats in Chrome. <em>Isotoma Blog.</em> Retrieved from <a href="http://blog.isotoma.com/2012/03/html5-input-typenumber-and-decimalsfloats-in-chrome/">http://blog.isotoma.com/2012/03/html5-input-typenumber-and-decimalsfloats-in-chrome/</a></p>

<p>Ingram. T. (2006, December 28). Basic PHP and MySQL Pagination Tutorial. <em>TYLER INGRAM dot COM</em>. Retrieved from <a href="http://www.tyleringram.com/blog/basic-php-and-mysql-pagination-tutorial">http://www.tyleringram.com/blog/basic-php-and-mysql-pagination-tutorial</a></p>

<p><em>4.10 Forms — HTML Standard</em>. (2013). Retrieved from <a href="http://www.whatwg.org/specs/web-apps/current-work/multipage/forms.html#client-side-form-validation">http://www.whatwg.org/specs/web-apps/current-work/multipage/forms.html#client-side-form-validation</a></p>

<p><em>MySQL DATEDIFF() function</em>. (2010).<a href="http://www.w3resource.com/mysql/date-and-time-functions/mysql-datediff-function.php">http://www.w3resource.com/mysql/date-and-time-functions/mysql-datediff-function.php</a></p>

<p><em>Can I Use&#8230;Datalist Element.</em> (2013). Retrieved from <a href="http://caniuse.com/#feat=datalist">http://caniuse.com/#feat=datalist</a></p>

<p><em>11.7. Date and Time Functions</em>. (2006). <a href="https://dev.mysql.com/doc/refman/4.1/en/date-and-time-functions.html">https://dev.mysql.com/doc/refman/4.1/en/date-and-time-functions.html</a></p>

<p><em>php - How to post two values in an option field?</em>. (2011). <a href="http://stackoverflow.com/questions/8027163/how-to-post-two-values-in-an-option-field">http://stackoverflow.com/questions/8027163/how-to-post-two-values-in-an-option-field</a></p>

<p><em>CSS Colors: Take Control Using PHP</em>. (2006). <a href="http://www.barelyfitz.com/projects/csscolor/">http://www.barelyfitz.com/projects/csscolor/</a></p>

<?php include("../inc/footer.php");?>