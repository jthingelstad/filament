<?php

/**
 * Skin file for skin WWFoundation.
 *
 * @file
 * @ingroup Skins
 */

class Skinfilament extends SkinTemplate {
	public $skinname = 'filament', $stylename = 'filament', $template = 'filamentTemplate', $useHeadElement = true;

	public function setupSkinUserCss(OutputPage $out) {
		parent::setupSkinUserCss($out);
		$out->addModuleStyles('skins.filament');
	}

	public function initPage( OutputPage $out ) {
		global $wgLocalStylePath;
		parent::initPage($out);

		$viewport_meta = 'width=device-width, user-scalable=yes, initial-scale=1.0';
	  $out->addMeta('viewport', $viewport_meta);
		$out->addModuleScripts('skins.filament');
	}

}
class filamentTemplate extends BaseTemplate {
	public function execute() {
		global $wgUser;
		wfSuppressWarnings();
		$this->html('headelement');
?>
<!-- START FILAMENTTEMPLATE -->

<div class="pure-g-r" id="layout">

	<a href="#menu" id="menuLink" class="pure-menu-link"><span>Menu</span></a>
	<div class="pure-u" id="menu">
	  <div class="pure-menu pure-menu-open">
	    <a href="<?php echo $this->data['nav_urls']['mainpage']['href']; ?>" class="pure-menu-heading"><?php echo $this->text('sitename'); ?></a>
	    <ul>
	          <li>
	            <form action="<?php $this->text( 'wgScript' ); ?>" id="searchform" class="mw-search pure-form">
	              <?php echo $this->makeSearchInput(array('placeholder' => 'Search...', 'id' => 'searchInput', 'class' => 'pure-input-rounded') ); ?>
	            </form>
	          </li>
	    </ul>
	    <a href="#" class="menu-item-divided"><?php echo htmlspecialchars( $box['header'] ); ?></a>
	    <ul>
	      <?php foreach ( $this->getSidebar() as $boxName => $box ) { ?>
	          <?php if ( is_array( $box['content'] ) ) { ?>
	            <?php foreach ( $box['content'] as $key => $item ) { echo $this->makeListItem( $key, $item ); } ?>
	          <?php }  ?>
	      <?php } ?>
	    </ul>

	      <?php if ($wgUser->isLoggedIn()): ?>
	      <a href="#" class="menu-item-divided">Personal</a>
	        <ul class="dropdown">
	        <?php foreach ( $this->getPersonalTools() as $key => $item ) { echo $this->makeListItem($key, $item); } ?>
	        </ul>

	      <?php endif; ?>
	        <?php if ($wgUser->isLoggedIn()): ?>
	        <?php else: ?>
	          <?php if (isset($this->data['personal_urls']['anonlogin'])): ?>
	            <a href="<?php echo $this->data['personal_urls']['anonlogin']['href']; ?>">Sign In</a>
	          <?php elseif (isset($this->data['personal_urls']['login'])): ?>
	            <a href="<?php echo $this->data['personal_urls']['login']['href']; ?>">Sign In</a>
	          <?php else: ?>
	            <?php echo Linker::link(Title::newFromText('Special:UserLogin'), 'Sign In'); ?>
	          <?php endif; ?>
	        <?php endif; ?>

	  </div>
	</div>

	<div class="pure-u" id="main">
	  <?php if ( $this->data['sitenotice'] ) { ?><div id="siteNotice" class="row notice large-12 columns"><?php $this->html( 'sitenotice' ); ?></div><?php } ?>
	  <?php if ( $this->data['newtalk'] ) { ?><div class="usermessage row notice large-12 columns"><?php $this->html( 'newtalk' ); ?></div><?php } ?>
	  <div id="mw-js-message" style="display:none;"></div>

    <?php if ($wgUser->isLoggedIn()): ?>
      <div id="horizontal-menu" class="pure-menu pure-menu-horizontal pure-menu-notouch pure-menu-open">
      	<ul id="std-menu-items" class="pure-menu-children">
      		<li class="pure-menu-item pure-menu-can-have-children pure-menu-has-children">
      			<a href="#" id="page_action_trigger" class="pure-menu-label">Page Actions</a>
        		<ul id="page_action_menu" class="pure-menu-children" role="menu">
        			<?php foreach( $this->data['content_actions'] as $key => $item ) { echo $this->makeListItem($key, $item); } ?>
	      		</ul>
	     		</li>
	     </ul>
	  	</div>
	   <?php endif; ?>

	  <div class="header pure-u-1">
	    <h1 class="pure-u-1"><?php $this->html('title') ?></h1>
	    <h2 class="pure-u"><?php $this->html('subtitle') ?></h2>
	  </div>
	  <div class="content">
	    <?php $this->html('bodytext') ?>
	      <div class="group"><?php $this->html('catlinks'); ?></div>
	      <?php $this->html('dataAfterContent'); ?>
	  </div>

	  <div class="legal pure-g-r">
	    <div class="pure-u-2-5">
	      <ul>
	      <?php foreach ( $this->getFooterLinks( "flat" ) as $key ) { ?>
	              <li><?php $this->html( $key ) ?></li>
	      <?php } ?>
	      </ul>
	    </div>

	    <div class="pure-u-2-5">
	      <ul> <?php foreach ( $this->getFooterIcons( "nocopyright" ) as $blockName => $footerIcons ) { ?>
	          <li><?php foreach ( $footerIcons as $icon ) { ?>
	              <?php echo $this->getSkin()->makeFooterIcon( $icon, 'withoutImage' ); ?>
	              <?php } ?>
	          </li>
	          <?php } ?>
	      </ul>
	    </div>

	  </div>

	  <div id="mw-js-message" style="display:none;"></div>

	  <?php $this->printTrail(); ?>
	</div>

</div>
</body>
</html>

<?php
		wfRestoreWarnings();
	}
}
?>