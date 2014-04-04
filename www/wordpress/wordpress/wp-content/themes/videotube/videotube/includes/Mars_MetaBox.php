<?php
/**
 * VideoTube MetaBox
 * Add Video MetaBox, ACF is required.
 * @author 		Toan Nguyen
 * @category 	Core
 * @version     1.0.0
 */
if( !defined('ABSPATH') ) exit;
if( !class_exists('Mars_MetaBox') ){
	class Mars_MetaBox {
		function __construct() {
			add_action('admin_init', array($this,'video_metabox'));
		}
		function video_metabox(){
			$post_id = isset( $_REQUEST['post'] ) ? (int)$_REQUEST['post'] : null;
			if(function_exists("register_field_group"))
			{
				register_field_group(array (
					'id' => 'acf_video',
					'title' => 'Video',
					'fields' => array (
						array (
							'key' => 'field_530fdb12d0660',
							'label' => __('Video URL','mars'),
							'name' => '',
							'type' => 'tab',
						),
						array (
							'key' => 'field_530eea326c4fa',
							'label' => __('Video URL','mars'),
							'name' => 'video_url',
							'type' => 'text',
							'default_value' => '',
							'placeholder' => 'http://www.youtube.com/watch?v=X6pQ-pNSnRE',
							'prepend' => '',
							'append' => '',
							'formatting' => 'none',
							'maxlength' => '',
						),
						### Frame
						array (
							'key' => 'field_530fdb12d0661',
							'label' => __('iFrame/Object','mars'),
							'name' => '',
							'type' => 'tab',
						),
						array (
							'key' => 'field_530eea326c4fb',
							'label' => __('iFrame/Object','mars'),
							'name' => 'video_frame',
							'type' => 'textarea',
							'default_value' => '',
							'formatting' => 'none',
							'maxlength' => '',
						),						
						### End Frame
						array (
							'key' => 'field_530fdc0e6fafe',
							'label' => __('Upload Video','mars'),
							'name' => '',
							'type' => 'tab',
						),
						array (
							'key' => 'field_530fdcf98024b',
							'label' => __('Video File (mp4, m4v, webm, ogv, wmv, flv)','mars'),
							'name' => 'video_file',
							'type' => 'file',
							'save_format' => 'id',
							'library' => 'all',
						),
					),
					'location' => array (
						array (
							array (
								'param' => 'post_type',
								'operator' => '==',
								'value' => 'video',
								'order_no' => 0,
								'group_no' => 0,
							),
						),
					),
					'options' => array (
						'position' => 'acf_after_title',
						'layout' => 'default',
						'hide_on_screen' => array (
						),
					),
					'menu_order' => 0,
				));	
				register_field_group(array (
					'id' => 'acf_layout',
					'title' => __('Choose Layout','mars'),
					'fields' => array (
						array (
							'key' => 'field_531980e906752',
							'label' => '',
							'name' => 'layout',
							'type' => 'radio',
							'choices' => array (
								'small' => __('Small','mars'),
								'large' => __('Large','mars'),
							),
							'other_choice' => 0,
							'save_other_choice' => 0,
							'default_value' => 'small',
							'layout' => 'horizontal',
						),
					),
					'location' => array (
						array (
							array (
								'param' => 'post_type',
								'operator' => '==',
								'value' => 'video',
								'order_no' => 0,
								'group_no' => 0,
							),
						),
					),
					'options' => array (
						'position' => 'acf_after_title',
						'layout' => 'default',
						'hide_on_screen' => array (
						),
					),
					'menu_order' => 0,
				));
				
			}

		}
	}
	new Mars_MetaBox();
}
