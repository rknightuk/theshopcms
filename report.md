#Shoppr : Final Project Report

##Lifecycle and scheduling

As outlined in my initial interim report, I used the three-way methodology which involves creating and continually testing a feature until it is working as required. This work particularly well as many of the features work independently of each other and didn't cause issues with other parts of the site when implemented. In combination with this, the entire project was tracked using Git versioning and GitHub. On three occasions, due to erroneous changes I was forced to revert back to a previous commit, which is something I had not had to do on previous projects. By using Git I have learnt a number of new commands for managing Git repositories including `$ git reset` and, even more so `$ git log`, which I have learnt how to use to customise the output of the commit log, useful for tracking progress.

Although I tried to plan to the best of my ability, there were many issues that I faced during development and many aspects took much longer than expected. Because of this, the last few weeks of development were much more work intensive than I had initially planned. Features that I hadn't planned for, but which I felt were required for the project to be successful, needed to be developed. This happened for a number of reasons. My relatively small knowledge of PHP and Javascript (at the beginning of the project) made it difficult to accurately allocate time to implement features. Also, during the process of building a feature, I found that changes had to be made to core components, such as table fields, to make the feature works in the most effective way.

##Surprises and lessons learnt

After completion of the pagination feature, the product sort function still worked as designed. However, if used on a page other that page one it would always reset to page one on sorting. I initially thought this was not how it should work and spent approximately three hours trying to get it to remember the current page and products. However, after I couldn't get it to work correctly, I looked at other commerce sites (e.g. Amazon) and noticed that they all reset to the first page on sorting. If I had researched how pagination and sorting is implemented on other commerce sites first, I would have saved myself time and been able to work on other features. In the future I will research features more carefully before trying to implement them.

During the development of the monthly sales chart function I tried to implement an Ajax request to get any given month's dat and redraw the chart. After spending a couple of hours trying to get it to work, I began to understand how Javascript is interpreted by the browser. Due to the nature of Javascript, redrawing the chart would require either an iFrame or a full reload of the page, which I did not want to implement as it is not the optimum experience for the user. After some research, I found the jQuery.load() function, which allows the content of another page to be loaded within an element. I now understand how Javascript is interpreted by the browser and will be able to implement much more efficient dynamic content in the future.

As these experiences show, planning is of utmost importance when working on a project of this size. Another issue that I faced was deciding exactly when the project was in a "finished" state. Because the scope of the project wasn't specific enough about the features, each time I added a feature I thought of another one to compliment or improve it. Towards the last couple of weeks of the project, I forced myself to simply make a note of extra features I thought of to implement them after the deadline. In future project, I will be sure to create a much more specific scope at the beginning of a project and to work only within that scope. 

##Future plans and roadmap

In the future, I plan to continue development of the system, fixes the issues mentioned above as well as implement more features (see below). The project is of high enough complexity that each new feature allows me to learn about a new aspect of a language, for example, PHP. When the project is up to a standard I am happy with and feature complete (to the point it could be used in a real-world scenario), I plan to open-source it and collaborate with other developers to improve the system.

##Feature roadmap

These are the features I plan to implement before open-sourcing the project.

- Optimise MySQL queries
- Setup process for input of settings
- Installable themes
- Customisable layouts
- Product sizes/variations for clothing products
- Multiple product images
- Fallback for users with Javascript disabled
- Implement payment system such as Paypal or Stripe

#Shoppr : References and Resources

##References

Burgess, A. (2011, July 25). Uploading Files with AJAX. *Net Tuts+.* Retrieved from [http://net.tutsplus.com/tutorials/javascript-ajax/uploading-files-with-ajax/](http://net.tutsplus.com/tutorials/javascript-ajax/uploading-files-with-ajax/)

*JSColor - JavaScript / HTML Color Picker, Selector, Chooser*. (2008). [http://jscolor.com/](http://jscolor.com/)

McGrath, M. (2012). *The image of the architect.* (4th ed.) London: In Easy Steps.

##Resources

Kitamura, E. (2013). Datalist Experiment. *Eiji Kitamura Demos.* Retrieved from [http://demo.agektmr.com/datalist/](http://demo.agektmr.com/datalist/)

Simone, T. D. (2012, March 2). HTML5 input type=number and decimals/floats in Chrome. *Isotoma Blog.* Retrieved from [http://blog.isotoma.com/2012/03/html5-input-typenumber-and-decimalsfloats-in-chrome/](http://blog.isotoma.com/2012/03/html5-input-typenumber-and-decimalsfloats-in-chrome/)

Ingram. T. (2006, December 28). Basic PHP and MySQL Pagination Tutorial. *TYLER INGRAM dot COM*. Retrieved from [http://www.tyleringram.com/blog/basic-php-and-mysql-pagination-tutorial](http://www.tyleringram.com/blog/basic-php-and-mysql-pagination-tutorial)

*4.10 Forms — HTML Standard*. (2013). Retrieved from [http://www.whatwg.org/specs/web-apps/current-work/multipage/forms.html#client-side-form-validation](http://www.whatwg.org/specs/web-apps/current-work/multipage/forms.html#client-side-form-validation)

*MySQL DATEDIFF() function*. (2010).[http://www.w3resource.com/mysql/date-and-time-functions/mysql-datediff-function.php](http://www.w3resource.com/mysql/date-and-time-functions/mysql-datediff-function.php)

*Can I Use...Datalist Element.* (2013). Retrieved from [http://caniuse.com/#feat=datalist](http://caniuse.com/#feat=datalist)

*11.7. Date and Time Functions*. (2006). [https://dev.mysql.com/doc/refman/4.1/en/date-and-time-functions.html](https://dev.mysql.com/doc/refman/4.1/en/date-and-time-functions.html)

*php - How to post two values in an option field?*. (2011). [http://stackoverflow.com/questions/8027163/how-to-post-two-values-in-an-option-field](http://stackoverflow.com/questions/8027163/how-to-post-two-values-in-an-option-field)

*CSS Colors: Take Control Using PHP*. (2006). [http://www.barelyfitz.com/projects/csscolor/](http://www.barelyfitz.com/projects/csscolor/)

*DocToc*. (2013). Retrieved from [http://doctoc.herokuapp.com/](http://doctoc.herokuapp.com/)
