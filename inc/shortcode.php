<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <div class="tab_item" data-tabs="#abptf_shortcode">
        <h2 class="_abp_color_theme">TransportForge - Shortcodes</h2>
        <div class="_divider_xs"></div>
        <i class="_color_7_fs_label_mar_tb_d_block">
            Below are all available TransportForge shortcodes with their details. You can use these shortcodes in any page, post, or widget area. Each shortcode supports parameters that allow you to control layout, filtering, and frontend behavior. Please use parameters carefully, as they directly affect output display and rental functionality.
        </i>
        <!-- Booking shortcode -->
        <pre>[<strong class="_abp_color_theme">abptf-booking</strong>]</pre>
        <label>
            This shortcode allows you to display the complete TransportForge booking form on any page, post, or custom layout. This provides a flexible way to create a dedicated booking page without requiring visitors to access a specific rental item page.
        </label>
        <label>
            When a rental item is selected, customers can complete the entire booking process directly from the shortcode page. The booking experience is identical to the rental details page, ensuring a consistent and user-friendly reservation workflow.
        </label>
        <table class="_abp_mar_t">
            <tbody>
            <tr>
                <th>Parameter</th>
                <th>Description</th>
            </tr>
            <tr>
                <td>style</td>
                <td> Layout style of the listing. <strong class="_abp_color_theme">grid, list, masonry</strong> | Default: <strong class="_abp_color_theme">grid</strong> <code>[abptf-booking style="list"]</code></td>
            </tr>
            <tr>
                <td>post_id</td>
                <td> Display a specific post. When used, other filtering parameters will be ignored. <code>[abptf-booking post_id="123"]</code></td>
            </tr>
            <tr>
                <td>cat_id</td>
                <td> Filter posts by category ID. <code>[abptf-booking cat_id="1"]</code></td>
            </tr>
            <tr>
                <td>loc_id</td>
                <td> Filter posts by location ID. <code>[abptf-booking loc_id="2"]</code></td>
            </tr>
            <tr>
                <td>rent_rule</td>
                <td> Filter by rental type: <strong class="_abp_color_theme">hourly, daily, multi_day, monthly, multi_month</strong> <code>[abptf-booking rent_rule="daily"]</code></td>
            </tr>
            <tr>
                <td>show</td>
                <td> Number of posts to display. Default: <strong class="_abp_color_theme">9</strong> <code>[abptf-booking show="12"]</code></td>
            </tr>
            <tr>
                <td>column</td>
                <td> Number of columns (only works with grid layout). Default: <strong class="_abp_color_theme">3</strong> <code>[abptf-booking column="4"]</code></td>
            </tr>
            </tbody>
        </table>
        <!-- Post List shortcode -->
        <pre>[<strong class="_abp_color_theme">abptf-post</strong>]</pre>
        <label>
            Use this shortcode to display the rental post listing anywhere on your website. You can place it inside any page, post, or widget area. The following parameters allow you to customize the output.
        </label>>
        <table class="_abp">
            <tbody>
            <tr>
                <th>Parameter</th>
                <th>Description</th>
            </tr>
            <tr>
                <td>style</td>
                <td>
                    Layout style of the listing.
                    <strong class="_abp_color_theme">grid, list, masonry</strong> |
                    Default: <strong class="_abp_color_theme">grid</strong>
                    <code>[abptf-post style="list"]</code>
                </td>
            </tr>
            <tr>
                <td>post_id</td>
                <td>
                    Display a specific post. When used, other filtering parameters will be ignored.
                    <code>[abptf-post post_id="123"]</code>
                </td>
            </tr>
            <tr>
                <td>cat_id</td>
                <td>
                    Filter posts by category ID.
                    <code>[abptf-post cat_id="1"]</code>
                </td>
            </tr>
            <tr>
                <td>loc_id</td>
                <td>
                    Filter posts by location ID.
                    <code>[abptf-post loc_id="2"]</code>
                </td>
            </tr>
            <tr>
                <td>rent_rule</td>
                <td>
                    Filter by rental type:
                    <strong class="_abp_color_theme">hourly, daily, multi_day, monthly, multi_month</strong>
                    <code>[abptf-post rent_rule="daily"]</code>
                </td>
            </tr>
            <tr>
                <td>show</td>
                <td>
                    Number of posts to display.
                    Default: <strong class="_abp_color_theme">9</strong>
                    <code>[abptf-post show="12"]</code>
                </td>
            </tr>
            <tr>
                <td>column</td>
                <td>
                    Number of columns (only works with grid layout).
                    Default: <strong class="_abp_color_theme">3</strong>
                    <code>[abptf-post column="4"]</code>
                </td>
            </tr>
            </tbody>
        </table>
        <!-- Property List shortcode -->
        <pre>[<strong class="_abp_color_theme">abptf-property</strong>]</pre>
        <label>
            Use this shortcode to display rental property listings anywhere on your website.
        </label>>
        <table class="_abp">
            <tbody>
            <tr>
                <th>Parameter</th>
                <th>Description</th>
            </tr>
            <tr>
                <td>style</td>
                <td>
                    Layout style.
                    <strong class="_abp_color_theme">grid, list</strong> |
                    Default: <strong class="_abp_color_theme">grid</strong>
                    <code>[abptf-property style="list"]</code>
                </td>
            </tr>
            <tr>
                <td>post_id</td>
                <td>
                    Display a specific property. Overrides other filters.
                    <code>[abptf-property post_id="123"]</code>
                </td>
            </tr>
            <tr>
                <td>cat_id</td>
                <td>
                    Filter by category ID.
                    <code>[abptf-property cat_id="1"]</code>
                </td>
            </tr>
            <tr>
                <td>loc_id</td>
                <td>
                    Filter by location ID.
                    <code>[abptf-property loc_id="2"]</code>
                </td>
            </tr>
            <tr>
                <td>brand_id</td>
                <td>
                    Filter by brand ID.
                    <code>[abptf-property brand_id="3"]</code>
                </td>
            </tr>
            <tr>
                <td>rent_rule</td>
                <td>
                    Rental type filter:
                    <strong class="_abp_color_theme">hourly, daily, multi_day, monthly, multi_month</strong>
                    <code>[abptf-property rent_rule="monthly"]</code>
                </td>
            </tr>
            <tr>
                <td>show</td>
                <td>
                    Number of properties to display.
                    Default: <strong class="_abp_color_theme">9</strong>
                    <code>[abptf-property show="15"]</code>
                </td>
            </tr>
            <tr>
                <td>column</td>
                <td>
                    Number of columns (grid layout only).
                    Default: <strong class="_abp_color_theme">3</strong>
                    <code>[abptf-property column="4"]</code>
                </td>
            </tr>
            </tbody>
        </table>
        <!-- Gallery shortcode -->
        <pre>[<strong class="_abp_color_theme">abptf-gallery</strong>]</pre>
        <label>
            Use this shortcode to display property image galleries or sliders anywhere on your website.
        </label>>
        <table class="_abp">
            <tbody>
            <tr>
                <th>Parameter</th>
                <th>Description</th>
            </tr>
            <tr>
                <td>style</td>
                <td>
                    Display type:
                    <strong class="_abp_color_theme">gallery, slider</strong> |
                    Default: <strong class="_abp_color_theme">gallery</strong>
                    <code>[abptf-gallery slider_style="slider"]</code>
                </td>
            </tr>
            <tr>
                <td>post_id</td>
                <td>
                    Show gallery for a specific post only.
                    <code>[abptf-gallery post_id="123"]</code>
                </td>
            </tr>
            <tr>
                <td>cat_id</td>
                <td>
                    Filter gallery by category.
                    <code>[abptf-gallery cat_id="1"]</code>
                </td>
            </tr>
            <tr>
                <td>loc_id</td>
                <td>
                    Filter gallery by location.
                    <code>[abptf-gallery loc_id="2"]</code>
                </td>
            </tr>
            <tr>
                <td>rent_rule</td>
                <td>
                    Filter by rental type:
                    <strong class="_abp_color_theme">hourly, daily, multi_day, monthly, multi_month</strong>
                    <code>[abptf-gallery rent_rule="daily"]</code>
                </td>
            </tr>
            <tr>
                <td>column</td>
                <td>
                    Number of images per row (gallery mode only).
                    Default: <strong class="_abp_color_theme">3</strong>
                    <code>[abptf-gallery column="4"]</code>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
<?php
