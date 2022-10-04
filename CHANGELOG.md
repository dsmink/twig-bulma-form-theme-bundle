### 2022-10-04
* Block `form_widget_simple`: Don't add anything new to hidden fields, so they don't take space in DOM

### 2022-09-29
* Add composer.json file to project

### 2022-08-19
* Block `checkbox_radio_label`: Handle translations similar to what is done at block `form_label` in parent theme `form_div_layout.html.twig`

### 2022-08-17
* Block `choice_widget_expanded`: Check for attribute `dropdown` => `true` if a dropdown should be used for expanded `ChoiceType`
* Block `dropdown_widget` changed name to `choice_widget_dropdown`
* Block `choice_widget_dropdown`: Add implementations for choice groups in dropdown
* Block `checkbox_radio_label`: Removed dropdown implementations after simplifications in `choice_widget_dropdown`

### 2022-08-09
* Block `choice_widget_collapsed`: Added `is-multiple` to select parent element if the `multiple` variable is set to true on the added choice type
* Block `choice_widget_expanded`: Check if the `expanded` variable is set to true on the added choice type, and then render the new `dropdown_widget`-block
* Block `dropdown_widget`: Adds the ability to implement Bulma's `Dropdown`-component to a choice type with the `expanded` variable set to true
* Block `form_label`: Fix so that label attributes are added using only `label_attr` variable, and not `attr` variable
* Block `checkbox_radio_label`: Revert previous change about adding `<div>` tag with a `field` class, add proper fix. Plus adjust to new `Dropdown` support
* Block `choice_row`: New block which implements Bulma's `Dropdown`-component when a `ChoiceType` (with `expanded` variable set to true) is rendered with `form_row()`
* Block `checkbox_row` & `radio_row`: Removed so that we use default `form_row` block to properly wrap a `<div>` tag with the class `field` around the element

### 2021-08-03:
* Block `checkbox_radio_label`: Wrapped a `<div>` tag with a `field` class around `checkbox_radio_label`, as the rest of the fields of the form
* Block `choice_widget_collapsed` (which affect `select` tags): Modified to not only implement size related bulma classes, but any other bulma class
* Changed `<span>` tags to `<div>` tags
