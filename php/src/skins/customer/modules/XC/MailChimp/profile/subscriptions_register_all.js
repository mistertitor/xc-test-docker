/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * subscriptions_register_all
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

jQuery(document).ready(function () {
  $('.mailchimp-label').click(function () {
    $('input[name="subscribeToAll"]').click();
  });
});