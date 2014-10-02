<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of <div id="content"> and all content after
 *
 * @package Writr
 */
$twitter     = get_theme_mod( 'jetpack-twitter' );
$facebook    = get_theme_mod( 'jetpack-facebook' );
$google_plus = get_theme_mod( 'jetpack-google_plus' );
$linkedin    = get_theme_mod( 'jetpack-linkedin' );
$tumblr      = get_theme_mod( 'jetpack-tumblr' );

$social_links = ( '' != $twitter
    || '' != $facebook
    || '' != $google_plus
    || '' != $linkedin
    || '' != $tumblr
) ? true : false;
?>

    </div><!-- #content -->

    <footer id="colophon" class="site-footer" role="contentinfo">
        <?php if ( $social_links ) : ?>
        <div id="social-links" class="clear">
            <ul class="social-links clear">
                <?php if ( '' != $twitter ) : ?>
                <li>
                    <a href="<?php echo esc_url( $twitter ); ?>" class="genericon genericon-twitter" title="<?php esc_attr_e( 'Twitter', 'writr' ); ?>" target="_blank">
                        <span class="screen-reader-text"><?php _e( 'Twitter', 'writr' ); ?></span>
                    </a>
                </li>
                <?php endif; ?>

                <?php if ( '' != $facebook ) : ?>
                <li>
                    <a href="<?php echo esc_url( $facebook ); ?>" class="genericon genericon-facebook" title="<?php esc_attr_e( 'Facebook', 'writr' ); ?>" target="_blank">
                        <span class="screen-reader-text"><?php _e( 'Facebook', 'writr' ); ?></span>
                    </a>
                </li>
                <?php endif; ?>

                <?php if ( '' != $google_plus ) : ?>
                <li>
                    <a href="<?php echo esc_url( $google_plus ); ?>" class="genericon genericon-googleplus" title="<?php esc_attr_e( 'Google+', 'writr' ); ?>" target="_blank">
                        <span class="screen-reader-text"><?php _e( 'Google+', 'writr' ); ?></span>
                    </a>
                </li>
                <?php endif; ?>

                <?php if ( '' != $linkedin ) : ?>
                <li>
                    <a href="<?php echo esc_url( $linkedin ); ?>" class="genericon genericon-linkedin-alt" title="<?php esc_attr_e( 'LinkedIn', 'writr' ); ?>" target="_blank">
                        <span class="screen-reader-text"><?php _e( 'LinkedIn', 'writr' ); ?></span>
                    </a>
                </li>
                <?php endif; ?>

                <?php if ( '' != $tumblr ) : ?>
                <li>
                    <a href="<?php echo esc_url( $tumblr ); ?>" class="genericon genericon-tumblr" title="<?php esc_attr_e( 'Tumblr', 'writr' ); ?>" target="_blank">
                        <span class="screen-reader-text"><?php _e( 'Tumblr', 'writr' ); ?></span>
                    </a>
                </li>
                <?php endif; ?>
            </ul>
        </div><!-- #social-links -->
        <?php endif; ?>

        <div class="site-info">
            <?php do_action( 'writr_credits' ); ?>
            <div><a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'writr' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'writr' ), 'WordPress' ); ?></a></div>
            <div><?php printf( __( 'Theme: %1$s by %2$s.', 'writr' ), 'Writr', '<a href="https://wordpress.com/themes/" rel="designer">WordPress.com</a>' ); ?></div>
        </div><!-- .site-info -->
    </footer><!-- #colophon -->
</div><!-- #page -->

<!-- begin olark code -->
<script data-cfasync="false" type='text/javascript'>/*<![CDATA[*/window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){
f[z]=function(){
(a.s=a.s||[]).push(arguments)};var a=f[z]._={
},q=c.methods.length;while(q--){(function(n){f[z][n]=function(){
f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={
0:+new Date};a.P=function(u){
a.p[u]=new Date-a.p[0]};function s(){
a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){
hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){
return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){
b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{
b.contentWindow[g].open()}catch(w){
c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{
var t=b.contentWindow[g];t.write(p());t.close()}catch(x){
b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({
loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});
/* custom configuration goes here (www.olark.com/documentation) */
olark.identify('8493-311-10-7036');/*]]>*/</script><noscript><a href="https://www.olark.com/site/8493-311-10-7036/contact" title="Contact us" target="_blank">Questions? Feedback?</a> powered by <a href="http://www.olark.com?welcome" title="Olark live chat software">Olark live chat software</a></noscript>
<!-- end olark code -->

<?php wp_footer(); ?>

</body>
</html>