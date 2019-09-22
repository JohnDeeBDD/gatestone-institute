<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="wrap">
<div style="padding:20px 30px;">
	
<?

$siteURL = site_url();

$output = <<<OUTPUT
  <p>Copyright &copy; 2019 Gatestone Institute. <br />All rights reserved.</p>

<p>The articles printed here do not necessarily reflect the views of the Editors or of Gatestone Institute. 
Both reserve the right not to publish replies to articles should they so choose.<br />
Gatestone Institute is a 501(c)3 not-for-profit organization, Federal Tax ID #454724565.</p>

<div class="title"><b>Gatestone Contacts</b></div>
  <p>Contact: info@gatestoneinstitute.org<br />
    Editorial: editor@gatestoneinstitute.org<br />
Comments: support@parler.com</p>

<p><a href="https://www.gatestoneinstitute.org/terms-of-use/">Terms of Use</a> &nbsp; <a href="https://www.gatestoneinstitute.org/privacy-policy/">Privacy &amp; Cookies Policy</a></p>
OUTPUT;

if ($siteURL == "http://ar.yeezyideationcenter.com"){
$output = <<<OUTPUT

  <p>حقوق النشر &copy; 2019 معهد جيتستون. <br />جميع الحقوق محفوظه.</p>
	
OUTPUT;
}

if ($siteURL == "http://sv.yeezyideationcenter.com"){
$output = <<<OUTPUT
<div style="padding:20px 30px;">
  <p>Copyright &copy; 2019 Gatestone Institute. <br />Alla rättigheter förbehållna.</p>
<p><a href="https://sv.gatestoneinstitute.org/privacy-policy/">Policy för integritet och cookies</a></p>
</div>
OUTPUT;
}

if ($siteURL == "http://cs.yeezyideationcenter.com"){
$output = <<<OUTPUT
OUTPUT;

if ($siteURL == "http://da.yeezyideationcenter.com"){
$output = <<<OUTPUT
OUTPUT;

if ($siteURL == "http://de.yeezyideationcenter.com"){
$output = <<<OUTPUT
OUTPUT;

if ($siteURL == "http://el.yeezyideationcenter.com"){
$output = <<<OUTPUT
OUTPUT;

if ($siteURL == "http://es.yeezyideationcenter.com"){
$output = <<<OUTPUT
OUTPUT;

if ($siteURL == "http://fr.yeezyideationcenter.com"){
$output = <<<OUTPUT
OUTPUT;

if ($siteURL == "http://he.yeezyideationcenter.com"){
$output = <<<OUTPUT
OUTPUT;

if ($siteURL == "http://it.yeezyideationcenter.com"){
$output = <<<OUTPUT
OUTPUT;

if ($siteURL == "http://nl.yeezyideationcenter.com"){
$output = <<<OUTPUT
OUTPUT;

if ($siteURL == "http://pl.yeezyideationcenter.com"){
$output = <<<OUTPUT
OUTPUT;

if ($siteURL == "http://pt.yeezyideationcenter.com"){
$output = <<<OUTPUT
OUTPUT;

if ($siteURL == "http://ru.yeezyideationcenter.com"){
$output = <<<OUTPUT
OUTPUT;

if ($siteURL == "http://sk.yeezyideationcenter.com"){
$output = <<<OUTPUT
OUTPUT;

echo $output;
?>
</div>
			</div><!-- .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>