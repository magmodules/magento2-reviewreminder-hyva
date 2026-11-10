# Changelog

All notable changes to this project will be documented in this file.

## [2.0.0]

**Bugfixes:**
* Submitting the form saved nothing: it sent the review with a GET request and without a form key, which the review controller refuses since Product Review Reminder 1.14.2. The customer saw "Submitted" while no review existed. The form posts with the form key and reads the controller's answer; a refused save is shown on the form.
* The nickname the customer typed was never sent; the review carried the name the order had.
* Reviewing some of the products of an order mixed up summaries and ratings between products: the product ids were renumbered while the other fields kept their position. Every field now carries the product's own index.
* Dutch (and every other non-English) store view showed the placeholder translation keys such as `[review:reminder:nickname:text]`. The templates use the sentences of Product Review Reminder itself, so its translations apply.
* The form page was stored in the full page cache; the block is not cacheable, like the Luma form.

**Improvements:**
* The sidebar shows until when the review link is valid.
* A guest is no longer told to check the review in an account.
* Requires Product Review Reminder 2.0.0, which answers the form's request with JSON and takes the order from the link's hash the form posts.

**Compatibility:**
* Magento 2.4.x and up
* PHP 8.1 and up
* Hyvä Themes 1.3 and up
