![image](https://github.com/magmodules/magento2-reviewreminder-hyva/assets/24823946/7f717a0b-3794-490f-875c-6f8eac592caa)


# Product Review Reminder Hyvä Compatibility plugin


Effortlessly solicit reviews through a high-conversion email and landing page while rewarding your customers with a valuable coupon.

The Product Review Remindercompatibility plugin for the Magento Hyvä theme has the following requirements:
- [Magento 2.4.+](https://github.com/magento/magento2)
- [Hyvä](https://github.com/hyva-themes)
- [Magmodules Product Review Reminder](https://www.magmodules.eu/magento2-product-review-reminder.html)


## About the Product Review Reminder Plugin

The Magento 2 Product Review Reminder extension offers an efficient and rewarding solution for automating product review requests via email. By sending personalized invitations to customers, it encourages them to provide valuable feedback. What sets this extension apart is its ability to incentivize customers with exclusive coupon codes in exchange for their reviews, creating a mutually beneficial system.

You have complete control over the review request process with this extension. You can easily configure the timing and content of the review request emails, allowing for a highly customizable approach to collecting product feedback.

## Installation

1. Install the module using composer: 

```bash
composer require magmodules/magento2-reviewreminder-hyva
```

2. Enable the module:

```bash
bin/magento module:enable Magmodules_HyvaReviewReminder
```

3. Upgrade the database:

```bash
bin/magento setup:upgrade
```

4. Let Hyvä know about the new module:

```bash
php bin/magento hyva:config:generate
```

5. Generate the CSS files:

```bash
npm --prefix vendor/hyva-themes/magento2-default-theme/web/tailwind/ run ci
npm --prefix vendor/hyva-themes/magento2-default-theme/web/tailwind/ run build-prod
```

Or from your theme:

```bash
npm --prefix app/design/frontend/<Vendor>/<Theme>/web/tailwind run ci
npm --prefix app/design/frontend/<Vendor>/<Theme>/web/tailwind run build-prod
```

## Ekomi Magento plugin features

- Fully automated Review Reminder
- High Conversion E-mail
- High Conversion Review Page
- Custom Review Invitation Profiles
- Insights of the Review Reminder e-mail

## Magento Support

If you have any questions, please fill out our secure contact form by clicking [here](https://www.magmodules.eu/support-form.html).

## Magmodules & Hyva

Magmodules and Hyva have established a strong partnership, working closely together to provide enhanced e-commerce solutions. As an official Hyva partner, we specializes in developing integrations for various platforms and services. 

We have created integrations for well-known providers such as Mollie, Sooqr, Paazl, and many more. This collaboration ensures seamless compatibility and optimized performance for online stores utilizing the Hyva theme. Through our partnership, Magmodules and Hyva strive to deliver comprehensive and tailored solutions to meet the diverse needs of e-commerce businesses.






## Checkout our other Hyva Plugins!

[- Magento 2 Hyvä Shopreview](#) 
 
[- Magento 2 Hyvä Product Review Reminder](#) 

[- Magento 2 Hyvä Mollie React Checkout](#) 

[- Magento 2 Hyvä Checkout](#) 

[- Magento 2 Hyvä Mollie React Checkout](#) 

[- Magento 2 Hyvä Paazl](#) 
