# Advanced Custom Fields 

This theme utilizes [Advanced Custom Field](https://www.advancedcustomfields.com/) to create new custom meta fields for various POST types, as well as setup new custom post types. 

The relevant ACF configuration data is included via the `acf.php` file, and loaded automatically via the theme's `functions.php` file. 

To modify these fields later, do not edit the acf.php file directly. The best method is through the ACF GUI editor in the WP installation.

1. disable the following line in `functions.php` (comment it out):
```
    // code here
```
2. verify the WP docker environment for this repository is running, see main `README.md` for details
3. navigate to the [ACF]->[Tools] menu
4. from this menu you can import the most recent `acf-export-DATE-HERE.json` file
5. once imported, the fields, custom post types, etc. and their relevant configuration options are available through the relevant [ACF] sub-menus.
6. once configuration is set, go back to the [ACF]->[Tools] menu
7. peform a PHP export, and copy the code into the `acf.php` file
8. peform an XMl .json export, and copy the file into the `/src/inc/` directory
9. enable the following line, previously commented out in `functions.php`
```
    // code here
```
10. Commit changes

