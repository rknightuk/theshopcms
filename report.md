##Lifecycle and scheduling

As outlined in my initial interim report, I used the three-way methodology which involves creating and continually testing a feature until it is working as required. This work particularly well as many of the features work independantly of each other and didn't cause issues with other parts of the site when implemented. In combination with this, the entire project was tracked using Git versioning and GitHub. On three occasions, due to errornous changes I was forced to revert back to a previous commit, which is something I had not had to do on previous projects. By using Git I have learnt a number of new commands for managing Git repositories including `$ git reset` and, even more so `$ git log`, which I have learnt how to use to customise the output of the commit log, useful for tracking progress.

Although I tried to plan to the best of my knowledge, there were many issues that I faced during development and many aspects took much longer than expected. Because of this, the last few weeks of development were much more work intensive than I had initially planned. Features that I hadn't planned for, but which I felt were required for the project to be successful, needed to be developed. This happened for a number of reasons. Firstly, my relatively small knowledge of PHP and Javascript made it difficult to accurately allocate time to implement features.

##Surprises and lessons learnt

After completion of the pagination feature, the product sort function still worked but, if on a page other that page one, would always reset to page one on sorting. I initially thought this was not how it should work and spent approximately three hours trying to get it to remember the current page. However, after I couldn't get it to work I looked at other commerce sites (e.g. Amazon) and noticed that they all reset to the first page on sorting.

During the development of the monthly sales chart function I tried to implement an Ajax request to get any given month's dat and redraw the chart. After spending a few hours trying to get it to work, I realised I was misunderstanding how Javascript is interpreted by the browser. Due to the design of Javascript, redrawing the chart would require either an iFrame or a full reload of the page. Due to the unreliable nature of iFrames, I chose to implement a page refresh which is not the optimum experience for the user but completes the task effectively.

As these experiences show, planning is of utmost importance when working on a project of this size. Another issue that I faced was deciding exactly when the project was in a "finished" state. Because the scope of the project wasn't specific about features, each time I added a feature I thought of another one to compliment it. Towards the last couple of weeks of the project, I forced myself to simply make a note of extra features I thought of to implement them after the deadline.

##Future plans

In the future, I plan to continue development of the system, fixes the issues mentioned above as well as implement more features (e.g. installable themes, product sizes/variations). The project is of high enough complexity that each new feature allows me to learn about a new aspect of a language, for example, PHP. When the project is up to a standard I am happy with, I plan to open-source it and collaborate with other developers to improve the system.

##References

Burgess, A. (2011, July 25). Uploading Files with AJAX. *Net Tuts+.* Retrieved from [http://net.tutsplus.com/tutorials/javascript-ajax/uploading-files-with-ajax/](http://net.tutsplus.com/tutorials/javascript-ajax/uploading-files-with-ajax/)

Kitamura, E. (2013). Datalist Experiment. *Eiji Kitamura Demos.* Retrieved from [http://demo.agektmr.com/datalist/](http://demo.agektmr.com/datalist/)

Simone, T. D. (2012, March 2). HTML5 input type=number and decimals/floats in Chrome. *Isotoma Blog.* Retrieved from [http://blog.isotoma.com/2012/03/html5-input-typenumber-and-decimalsfloats-in-chrome/](http://blog.isotoma.com/2012/03/html5-input-typenumber-and-decimalsfloats-in-chrome/)

Ingram. T. (2006, December 28). Basic PHP and MySQL Pagination Tutorial. *TYLER INGRAM dot COM*. Retrieved from [http://www.tyleringram.com/blog/basic-php-and-mysql-pagination-tutorial](http://www.tyleringram.com/blog/basic-php-and-mysql-pagination-tutorial)

*4.10 Forms — HTML Standard*. (2013). Retrieved from [http://www.whatwg.org/specs/web-apps/current-work/multipage/forms.html#client-side-form-validation](http://www.whatwg.org/specs/web-apps/current-work/multipage/forms.html#client-side-form-validation)

*MySQL DATEDIFF() function*. (2010).[http://www.w3resource.com/mysql/date-and-time-functions/mysql-datediff-function.php](http://www.w3resource.com/mysql/date-and-time-functions/mysql-datediff-function.php)

*Can I Use...Datalist Element.* (2013). Retrieved from [http://caniuse.com/#feat=datalist](http://caniuse.com/#feat=datalist)

*11.7. Date and Time Functions*. (2006). [https://dev.mysql.com/doc/refman/4.1/en/date-and-time-functions.html](https://dev.mysql.com/doc/refman/4.1/en/date-and-time-functions.html)

*php - How to post two values in an option field?*. (2011). [http://stackoverflow.com/questions/8027163/how-to-post-two-values-in-an-option-field](http://stackoverflow.com/questions/8027163/how-to-post-two-values-in-an-option-field)

*CSS Colors: Take Control Using PHP*. (2006). [http://www.barelyfitz.com/projects/csscolor/](http://www.barelyfitz.com/projects/csscolor/)

*JSColor - JavaScript / HTML Color Picker, Selector, Chooser*. (2008). [http://jscolor.com/](http://jscolor.com/)

*DocToc*. (2013). Retrieved from [http://doctoc.herokuapp.com/](http://doctoc.herokuapp.com/)
