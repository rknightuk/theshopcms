**Table of Contents**  *generated with [DocToc](http://doctoc.herokuapp.com/)*

- [Compatibility](#compatibility)
- [Installation](#installation)
	- [Prerequisites of installation](#prerequisites-of-installation)
	- [Installation](#installation-1)
- [Usage](#usage)
	- [Content management (yourshop/cms)](#content-management-yourshopcms)
		- [Adding a product](#adding-a-product)
		- [Editing and deleting a product](#editing-and-deleting-a-product)
		- [Updating product stock levels](#updating-product-stock-levels)
	- [Administration (yourshop/admin)](#administration-yourshopadmin)
		- [Managing orders](#managing-orders)
		- [Modifying colours, themes and shop name](#modifying-colours-themes-and-shop-name)

#The Shop CMS

A university assignment to create a shop and content management system flexible enough to sell anything from scuba gear to rubber chickens. User accounts have been deliberately omitted; sales of digital goods and services are also omitted.

*NB: This manual is also available at `/documents/manual`*

##Compatibility

Tested with:

- Chrome 26.0.1410.65
- Safari 6.0.2
- Firefox 20.0.1

Built using:

- Apache 2.2.23
- PHP 5.4.10
- MySQL 5.5.29

No other versions have been tested.

##Installation

###Prerequisites of installation

- MySQL username is `root`
- MySQL password is blank

NB: If your username and password are different to those shown above, please edit line 3 and 14 of `db/check_db.php` and line 3 of `db/connect_db.php`.

###Installation

1. Copy `theshopcms` in its entirety to `htdocs` on your server or within your Apache/XAMPP/MAMP installation.
2. Visit the URL of the folder in your browser. (e.g. yourserver/theshopcms)
3. The database, relevant tables with be automatically created; sample data for products and orders will be inserted into the tables.

##Usage

*NB: All references to `yourshop` herein refers to the specific domain or directory in which the product is installed.*

###Content management (`yourshop/cms`)

####Adding a product

To add a new product go to `yourshop/cms/add` or select 'add new product' from the CMS page. You will be presented with an image upload box. Choose the image you wish to use for the new product. Complete the form that is then show with the details of the new product and select 'submit'. If the product was added successfully a message will confirm this.

####Editing and deleting a product

To edit or delete a product go to `yourshop/cms/edit.php`. or select 'edit products' from the CMS page. To edit a product select 'edit' next to the specific product you wish to update. Modify the information in the form show, select 'submit' and a message will confirm the edit.

To delete a product, select 'edit' next to the specific product you wish to delete. A message will confirm the deletion.

####Updating product stock levels

*NB: The update stock page requires you enter only the amount of **new** stock that has been delivered and not the total amount of stock*

To update the stock level of a product go to `yourshop/cms/update_stock.php` or select 'update stock' from the CMS page. Choose the product you wish to update from the dropdown menu, type in the amount of stock that has been delivered and select 'update'. A message will confirm the update. 

###Administration (`yourshop/admin`)

####Managing orders

*NB: Open orders refers to any order which has been placed but not delivered. Archived orders refers to those that have been delivered.*

To view open orders go to `yourshop/admin/open_orders.php` or select 'Open orders' from the Admin page. If the order has been delivered, select 'Mark as delivered' and the order will be archived. 

To view archived orders go to `yourshop/admin/archived_orders.php` or select 'Archived orders' from Admin page.

For both open and archived orders, customer and order details can be viewed:

- Order details can be view by selecting 'order details'.
- Customers details can be viewed by selecting 'customer details'.

####Modifying colours, themes and shop name