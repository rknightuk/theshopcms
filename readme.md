#The Shop CMS

A university assignment to create a shop and content management system flexible enough to sell anything from scuba gear to rubber chickens. User accounts have been deliberately omitted; sales of digital goods and services are also omitted.

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

###Adding, editing and deleting products

###Updating product stock levels

###Managing orders

*NB: Open orders refers to any order which has been placed but not delivered. Archived orders refers to those that have been delivered. 'Admin page' refers to the page at `yourshop/admin`.*

To view open orders go to `yourshop/admin/open_orders.php` or select 'Open orders' from Admin page. If the order has been delivered, select 'Mark as delivered' and the order will be archived. 

To view archived orders go to `yourshop/admin/archived_orders.php` or select 'Archived orders' from Admin page.

For both open and archived orders, customer and order details can be view:

- Order details can be view by selecting 'order details'.
- Customers details can be viewed by selecting 'customer details'.