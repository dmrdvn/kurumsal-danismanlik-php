<?php
/* Smarty version 3.1.30-dev/18, created on 2016-07-18 15:17:03
  from "/home/goxskons/public_html/theme/default/pages/services.tpl" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.30-dev/18',
  'unifunc' => 'content_578cc8bf72e7d9_65746788',
  'file_dependency' => 
  array (
    '45d8bc3c3f76c6b98e927105962eed1e4df03b3c' => 
    array (
      0 => '/home/goxskons/public_html/theme/default/pages/services.tpl',
      1 => 1468844082,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_578cc8bf72e7d9_65746788 ($_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['services']->value['seo_title'],'desc'=>$_smarty_tpl->tpl_vars['services']->value['seo_description'],'keyw'=>$_smarty_tpl->tpl_vars['services']->value['seo_keyword']), 0, false);
?>


<div class="container top_space">
	<div class="row">  
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
			<img class="img-responsive" src="upload/photo/<?php echo $_smarty_tpl->tpl_vars['services']->value['photo'];?>
" alt="" /> 
		</div>  
		
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
			<ol class="breadcrumb">
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['settings']->value['site_url'];?>
">Anasayfa</a></li> 
			<li class="active"><?php echo $_smarty_tpl->tpl_vars['services']->value['seo_title'];?>
</li>
			</ol> 
		</div>  
		<!---
		<div class="container ser_st_tab">
			<div class="row">  
			<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">  
			<div class="row"> 
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kategoriler']->value, 'kategori');
foreach ($_from as $_smarty_tpl->tpl_vars['kategori']->value) {
$_smarty_tpl->tpl_vars['kategori']->_loop = true;
$__foreach_kategori_0_saved = $_smarty_tpl->tpl_vars['kategori'];
?>
				<?php if ($_smarty_tpl->tpl_vars['kategori']->value['ustkategori'] == 0) {?>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6"><a href="hizmetlerimiz/<?php echo $_smarty_tpl->tpl_vars['kategori']->value['sef'];?>
-<?php echo $_smarty_tpl->tpl_vars['kategori']->value['id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['kategori']->value['title'];?>
</a> </div>  
				<?php }?>
			<?php
$_smarty_tpl->tpl_vars['kategori'] = $__foreach_kategori_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
			</div>
			</div>
			</div>
		</div>
		--->
		<div class="container ser_st_tab">
			<div class="row">  
			<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">  
			<div class="row">  
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6"><a href="hizmetlerimiz/bireysel-danismanlik-11"> BİREYSEL<br>DANIŞMANLIK</a> </div>  
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6"><a href="hizmetlerimiz/kurumsal-danismanlik-12"> KURUMSAL<br>DANIŞMANLIK</a></div>  
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6"><a href="hizmetlerimiz/ogrenci-ogretmen-okul-danismanligi-13"> ÖĞRENCİ-ÖĞRETMEN<br>OKUL DANIŞMANLIĞI</a></div>  
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6"><a href="hizmetlerimiz/kisisel-gelisim-egitimleri-sertifikali-projeler-14"> KİŞİSEL GELİŞİM EĞİTİMLERİ<br>SERTİFİKALI PROJELER</a></div>  
			</div>
			</div>
			</div>
		</div>
		
		<div class="col-lg-12">
			<div class="page_title"> <?php echo $_smarty_tpl->tpl_vars['services']->value['seo_title'];?>
</div>		
		</div>
		
		
		
	</div>
</div>

<div class="container">
	<div class="row">  
		<div class="text-center col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
			<div class="row"> 
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kategoriler']->value, 'kategori');
foreach ($_from as $_smarty_tpl->tpl_vars['kategori']->value) {
$_smarty_tpl->tpl_vars['kategori']->_loop = true;
$__foreach_kategori_1_saved = $_smarty_tpl->tpl_vars['kategori'];
?>
					<?php if ($_smarty_tpl->tpl_vars['kategori']->value['ustkategori'] == 0) {?>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
						<a href="hizmetlerimiz/<?php echo $_smarty_tpl->tpl_vars['kategori']->value['sef'];?>
-<?php echo $_smarty_tpl->tpl_vars['kategori']->value['id'];?>
"><img class="img-responsive" src="<?php if (empty($_smarty_tpl->tpl_vars['kategori']->value['photo'])) {?>http://www.placehold.it/800x550/f06905/ffffff&amp;text=+<?php } else { ?>upload/photo/<?php echo $_smarty_tpl->tpl_vars['kategori']->value['photo'];
}?>" alt=""></a>
						<div class="page_sub_title"><a href="hizmetlerimiz/<?php echo $_smarty_tpl->tpl_vars['kategori']->value['sef'];?>
-<?php echo $_smarty_tpl->tpl_vars['kategori']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['kategori']->value['title'];?>
</a></div>
						<div class="page_sub_desc"><?php echo substr($_smarty_tpl->tpl_vars['kategori']->value['content'],0,250);?>
</div> 
					</div>
					<?php }?>
				<?php
$_smarty_tpl->tpl_vars['kategori'] = $__foreach_kategori_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
			</div>
		</div>  
	</div>
</div>





<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
